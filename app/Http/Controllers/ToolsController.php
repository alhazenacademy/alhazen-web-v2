<?php

namespace App\Http\Controllers;

use App\Exports\QuizAnswersExport;
use App\Models\Program;
use App\Models\QuizAnswer;
use App\Models\QuizSession;
use App\Models\SalesNumber;
use App\Models\SiteSetting;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;

class ToolsController extends Controller
{
    private function getSalesPhone(): ?string
    {
        return optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
    }

    private function getFooterData(): array
    {
        $settings = SiteSetting::companySettings();

        return [
            'whatsapp' => $settings['whatsapp'] ?? null,
            'email' => $settings['email'] ?? null,
            'website' => $settings['website'] ?? null,
            'address' => $settings['address'] ?? null,
            'socials' => collect($settings['socials'] ?? [])
                ->where('is_active', true)
                ->sortBy('sort_order'),
        ];
    }

    private function getProgramLinks(): array
    {
        return Program::active()
            ->ordered()
            ->get()
            ->map(fn (Program $program) => [
                'label' => $program->name,
                'url' => match (strtolower($program->name)) {
                    'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                    'roblox', 'roblox studio' => 'kursus-roblox',
                    default => 'program',
                },
                'key' => $program->key,
            ])
            ->all();
    }

    public function ruang_tulis()
    {
        $salesPhone = $this->getSalesPhone();
        $footerData = $this->getFooterData();
        $programLinks = $this->getProgramLinks();
        $starterPath = public_path('assets/kids/tools/ruang-tulis-starter.md');
        $starterText = file_exists($starterPath) ? file_get_contents($starterPath) : '';

        return view('pages.tools.ruang_tulis', [
            'salesPhone' => $salesPhone,
            'whatsapp' => $footerData['whatsapp'],
            'email' => $footerData['email'],
            'website' => $footerData['website'],
            'address' => $footerData['address'],
            'socials' => $footerData['socials'],
            'programLinks' => $programLinks,
            'starterText' => $starterText,
        ]);
    }

    private const QUIZ_PIN_SESSION_KEY = 'quiz_pin_verified';

    private const QUIZ_IMAGE_HOSTS = [
        'lh3.googleusercontent.com',
        'drive.google.com',
        'drive.usercontent.google.com',
        'docs.google.com',
    ];

    private const QUIZ_SHEETS_HOSTS = [
        'script.google.com',
        'script.googleusercontent.com',
    ];

    public function quizPin()
    {
        if ($this->quizPinVerified()) {
            return redirect()->route('tools.quiz.create');
        }

        return view('pages.tools.quiz.quiz-pin', $this->quizPageData(
            'PIN Tutor - Quiz Alhazen Academy',
            'Halaman khusus tutor untuk membuat link quiz/ujian online.'
        ));
    }

    public function quizPinStore(Request $request)
    {
        $data = $request->validate([
            'pin' => ['required', 'string', 'max:100'],
        ]);

        if (! $this->checkQuizPin($data['pin'])) {
            return back()->withErrors(['pin' => 'PIN salah. Hubungi admin jika lupa.']);
        }

        $request->session()->put(self::QUIZ_PIN_SESSION_KEY, true);

        return redirect()->route('tools.quiz.create');
    }

    public function quizCreate()
    {
        if (! $this->quizPinVerified()) {
            return redirect()->route('tools.quiz.pin');
        }

        return view('pages.tools.quiz.quiz-create', $this->quizPageData(
            'Buat Quiz/Ujian Online - Tools Tutor Alhazen Academy',
            'Upload file soal dan dapatkan link ujian unik untuk dibagikan ke siswa. Hasil jawaban otomatis terkirim ke Google Sheets.'
        ));
    }

    public function quizStore(Request $request)
    {
        if (! $this->quizPinVerified()) {
            return redirect()->route('tools.quiz.pin');
        }

        $data = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string', 'max:2000'],
            'soal_file' => ['required', 'file', 'mimes:csv,txt,json', 'max:1024'],
            'sheets_webhook_url' => ['nullable', 'url', 'max:500'],
            'expires_in' => ['required', 'in:2,4,12,24'],
        ]);

        $webhook = trim((string) ($data['sheets_webhook_url'] ?? ''));
        if ($webhook !== '') {
            $webhookHost = strtolower((string) parse_url($webhook, PHP_URL_HOST));
            if (! str_starts_with($webhook, 'https://') || ! in_array($webhookHost, self::QUIZ_SHEETS_HOSTS, true)) {
                throw ValidationException::withMessages([
                    'sheets_webhook_url' => 'Gunakan URL Web App Apps Script (https://script.google.com/...) yang sudah di-deploy, atau kosongkan.',
                ]);
            }
        }

        [$questions, $totalSoal] = $this->parseQuestions($request->file('soal_file'));

        $slug = $this->generateQuizSlug();
        $quizUrl = url('/tools/quiz/'.$slug);

        $session = QuizSession::create([
            'slug' => $slug,
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'sheets_webhook_url' => $webhook === '' ? null : $webhook,
            'questions' => $questions,
            'total_soal' => $totalSoal,
            'shuffle_questions' => $request->boolean('shuffle_questions'),
            'shuffle_options' => $request->boolean('shuffle_options'),
            'expires_at' => now()->addHours((int) $data['expires_in']),
        ]);

        $qrPath = $this->generateQuizQr($slug, $quizUrl);

        return redirect()->route('tools.quiz.create')->with('quiz_created', [
            'title' => $session->title,
            'url' => $quizUrl,
            'qr_url' => Storage::url($qrPath),
            'wa_url' => 'https://wa.me/?text='.urlencode('Kerjakan quiz "'.$session->title.'" di sini: '.$quizUrl),
            'expires_at' => $session->expires_at->format('d M Y H:i'),
        ]);
    }

    private function quizPageData(string $title, string $description): array
    {
        $salesPhone = $this->getSalesPhone();
        $footerData = $this->getFooterData();
        $programLinks = $this->getProgramLinks();

        return [
            'pageTitle' => $title,
            'pageDescription' => $description,
            'salesPhone' => $salesPhone,
            'whatsapp' => $footerData['whatsapp'],
            'email' => $footerData['email'],
            'website' => $footerData['website'],
            'address' => $footerData['address'],
            'socials' => $footerData['socials'],
            'programLinks' => $programLinks,
        ];
    }

    private function quizPinVerified(): bool
    {
        return (bool) session(self::QUIZ_PIN_SESSION_KEY, false);
    }

    private function checkQuizPin(string $pin): bool
    {
        $record = SiteSetting::where('key', 'quiz_tools')->first();
        $stored = trim((string) ($record?->settings['quiz_pin'] ?? ''));

        if ($stored !== '') {
            return hash_equals($stored, $pin);
        }

        $plain = (string) config('quiz.pin', '');
        if ($plain === '') {
            throw ValidationException::withMessages([
                'pin' => 'PIN belum dikonfigurasi. Isi quiz_pin di halaman Quiz > Pengaturan atau set QUIZ_PIN di .env.',
            ]);
        }

        return hash_equals($plain, $pin);
    }

    private function generateQuizSlug(): string
    {
        do {
            $slug = strtolower(Str::random(8));
        } while (QuizSession::where('slug', $slug)->exists());

        return $slug;
    }

    private function generateQuizQr(string $slug, string $url): string
    {
        $directory = storage_path('app/public/qrcodes');

        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $filename = "quiz-{$slug}.svg";

        $renderer = new ImageRenderer(
            new RendererStyle(360),
            new SvgImageBackEnd
        );

        (new Writer($renderer))->writeFile($url, "{$directory}/{$filename}");

        return "qrcodes/{$filename}";
    }

    private function parseQuestions(UploadedFile $file): array
    {
        $extension = strtolower($file->getClientOriginalExtension());
        $rows = $extension === 'json' ? $this->readJsonQuestions($file) : $this->readCsvQuestions($file);

        if (count($rows) < 1 || count($rows) > 100) {
            throw ValidationException::withMessages([
                'soal_file' => 'Jumlah soal harus 1 sampai 100 (ditemukan '.count($rows).').',
            ]);
        }

        $errors = [];
        $seenIds = [];
        $questions = [];
        $imageRefs = [];

        foreach ($rows as $index => $row) {
            $label = $extension === 'json' ? 'Soal '.($index + 1) : 'Baris '.($row['_line'] ?? ($index + 2));

            try {
                $question = $this->normalizeQuestion($row, $imageRefs, $label);
            } catch (\InvalidArgumentException $e) {
                $errors[] = $label.': '.$e->getMessage();

                continue;
            }

            if (isset($seenIds[$question['id']])) {
                $errors[] = $label.': id "'.$question['id'].'" duplikat.';

                continue;
            }
            $seenIds[$question['id']] = true;
            $questions[] = $question;
        }

        foreach ($imageRefs as $imageUrl => $labels) {
            try {
                $this->assertImageReachable($imageUrl);
            } catch (\RuntimeException $e) {
                foreach (array_unique($labels) as $label) {
                    $errors[] = $label.': gambar '.$imageUrl.' '.$e->getMessage();
                }
            }
        }

        if ($errors !== []) {
            throw ValidationException::withMessages(['soal_file' => $errors]);
        }

        return [$questions, count($questions)];
    }

    private function readCsvQuestions(UploadedFile $file): array
    {
        $handle = fopen($file->getRealPath(), 'r');

        if ($handle === false) {
            throw ValidationException::withMessages(['soal_file' => 'File tidak dapat dibaca.']);
        }

        $headers = fgetcsv($handle);

        if ($headers === false) {
            fclose($handle);
            throw ValidationException::withMessages(['soal_file' => 'File CSV kosong.']);
        }

        $headers = array_map(fn ($h) => strtolower(trim((string) $h)), $headers);
        $headers[0] = ltrim($headers[0], "\xEF\xBB\xBF");

        foreach (['id', 'tipe', 'pertanyaan'] as $required) {
            if (! in_array($required, $headers, true)) {
                fclose($handle);
                throw ValidationException::withMessages(['soal_file' => 'Header CSV wajib memuat: id, tipe, pertanyaan.']);
            }
        }

        $rows = [];
        $line = 1;
        while (($data = fgetcsv($handle)) !== false) {
            $line++;
            if (count(array_filter($data, fn ($v) => trim((string) $v) !== '')) === 0) {
                continue;
            }
            $row = ['_line' => $line];
            foreach ($headers as $i => $name) {
                $row[$name] = $data[$i] ?? '';
            }
            $rows[] = $row;
        }
        fclose($handle);

        return $rows;
    }

    private function readJsonQuestions(UploadedFile $file): array
    {
        $decoded = json_decode(file_get_contents($file->getRealPath()), true);

        if (! is_array($decoded) || array_is_list($decoded) === false) {
            throw ValidationException::withMessages(['soal_file' => 'Format JSON harus array dari objek soal.']);
        }

        return array_map(function ($item) {
            if (! is_array($item)) {
                return [];
            }
            $options = [];
            foreach ((array) ($item['options'] ?? []) as $i => $opt) {
                $key = 'opt_'.($i + 1);
                if (is_string($opt)) {
                    $options[$key] = $opt;
                } elseif (is_array($opt)) {
                    $options[$key] = (string) ($opt['text'] ?? '');
                    $options[$key.'_img'] = (string) ($opt['image'] ?? '');
                }
            }

            return [
                'id' => (string) ($item['id'] ?? ''),
                'tipe' => (string) ($item['type'] ?? ''),
                'pertanyaan' => (string) ($item['question'] ?? ''),
                'opsi_a' => $options['opt_1'] ?? '',
                'opsi_b' => $options['opt_2'] ?? '',
                'opsi_c' => $options['opt_3'] ?? '',
                'opsi_d' => $options['opt_4'] ?? '',
                'gambar_soal' => (string) ($item['question_image'] ?? ''),
                'gambar_a' => $options['opt_1_img'] ?? '',
                'gambar_b' => $options['opt_2_img'] ?? '',
                'gambar_c' => $options['opt_3_img'] ?? '',
                'gambar_d' => $options['opt_4_img'] ?? '',
            ];
        }, $decoded);
    }

    private function normalizeQuestion(array $row, array &$imageRefs, string $label): array
    {
        $id = trim((string) ($row['id'] ?? ''));
        if ($id === '' || strlen($id) > 50) {
            throw new \InvalidArgumentException('id wajib diisi (maks 50 karakter).');
        }

        $type = strtolower(trim((string) ($row['tipe'] ?? '')));
        if (! in_array($type, ['pg', 'isian', 'essay'], true)) {
            throw new \InvalidArgumentException('tipe "'.$type.'" tidak valid (pg/isian/essay).');
        }

        $question = trim((string) ($row['pertanyaan'] ?? ''));
        if ($question === '' || strlen($question) > 2000) {
            throw new \InvalidArgumentException('pertanyaan wajib diisi (maks 2000 karakter).');
        }

        $questionImage = $this->registerQuestionImage($row['gambar_soal'] ?? '', $imageRefs, $label);

        $result = [
            'id' => $id,
            'type' => $type,
            'question' => $question,
            'question_image' => $questionImage,
        ];

        if ($type === 'pg') {
            $options = [];
            foreach (['a', 'b', 'c', 'd'] as $letter) {
                $text = trim((string) ($row['opsi_'.$letter] ?? ''));
                $image = $this->registerQuestionImage($row['gambar_'.$letter] ?? '', $imageRefs, $label);
                if ($text === '' && $image === null) {
                    continue;
                }
                $options[] = ['text' => $text, 'image' => $image];
            }
            if (count($options) < 2 || count($options) > 4) {
                throw new \InvalidArgumentException('soal pg wajib punya 2 sampai 4 opsi.');
            }
            $result['options'] = $options;
        }

        return $result;
    }

    private function registerQuestionImage(mixed $value, array &$imageRefs, string $label): ?string
    {
        $raw = trim((string) $value);
        if ($raw === '') {
            return null;
        }

        try {
            $normalized = $this->normalizeDriveUrl($raw);
        } catch (\InvalidArgumentException $e) {
            throw new \InvalidArgumentException('gambar: '.$e->getMessage());
        }

        $imageRefs[$normalized][] = $label;

        return $normalized;
    }

    private function normalizeDriveUrl(string $url): string
    {
        $url = trim($url);

        if (! str_starts_with(strtolower($url), 'https://')) {
            throw new \InvalidArgumentException('link gambar harus diawali https://');
        }

        $parts = parse_url($url);
        $host = strtolower($parts['host'] ?? '');

        if (! in_array($host, self::QUIZ_IMAGE_HOSTS, true)) {
            throw new \InvalidArgumentException('host gambar tidak diizinkan (gunakan link Google Drive).');
        }

        if ($host !== 'drive.google.com') {
            return $url;
        }

        $path = $parts['path'] ?? '';
        if (preg_match('#/file/d/([A-Za-z0-9_-]+)#', $path, $matches)) {
            return 'https://lh3.googleusercontent.com/d/'.$matches[1];
        }

        if (! empty($parts['query'])) {
            parse_str($parts['query'], $query);
            if (! empty($query['id'])) {
                return 'https://lh3.googleusercontent.com/d/'.$query['id'];
            }
        }

        if (str_starts_with($path, '/thumbnail')) {
            if (preg_match('/[?&]id=([A-Za-z0-9_-]+)/', $url, $matches)) {
                return 'https://lh3.googleusercontent.com/d/'.$matches[1];
            }

            return $url;
        }

        throw new \InvalidArgumentException('format link Drive tidak dikenali.');
    }

    private function assertImageReachable(string $url): void
    {
        // Validasi memakai GET + Range agar redirect ter-follow
        // dan body tidak diunduh penuh. Error transient (timeout,
        // 429/5xx) di-retry 3x karena endpoint Drive kadang flaky.
        $attempts = 0;
        $lastError = 'tidak dapat diakses.';

        while ($attempts < 3) {
            $attempts++;

            try {
                $response = Http::timeout(8)->withHeaders(['Range' => 'bytes=0-16383'])->get($url);
            } catch (\Throwable $e) {
                $lastError = 'tidak dapat diakses. Server Google sibuk, coba lagi.';
                sleep(1);

                continue;
            }

            $status = $response->status();

            if ($status === 429 || $status >= 500) {
                $lastError = 'tidak dapat diakses. Server Google sibuk, coba lagi.';
                sleep(1);

                continue;
            }

            $contentType = strtolower($response->header('Content-Type', ''));
            $ok = in_array($status, [200, 206], true)
                && str_starts_with($contentType, 'image/')
                && ! str_contains($contentType, 'svg');

            if (! $ok) {
                throw new \RuntimeException('bukan file gambar yang valid. Pastikan file sudah Share > Anyone with link.');
            }

            return;
        }

        throw new \RuntimeException($lastError);
    }

    public function quizShow(string $slug)
    {
        $session = QuizSession::where('slug', $slug)->firstOrFail();

        $page = $this->quizPageData(
            $session->title.' - Quiz Alhazen Academy',
            $session->description ?? 'Kerjakan quiz/ujian online dari Alhazen Academy.'
        );

        if (session('quiz_done')) {
            return view('pages.tools.quiz.quiz-result', $page + [
                'title' => $session->title,
                'slug' => $session->slug,
                'submittedBefore' => (bool) session('quiz_submitted_before', false),
            ]);
        }

        return view('pages.tools.quiz.quiz-show', $page + [
            'session' => $session,
            'expired' => $session->expires_at->isPast(),
            'oldIdentity' => [
                'nama' => old('nama', ''),
                'kelas' => old('kelas', ''),
                'instansi' => old('instansi', ''),
            ],
            'oldAnswers' => old('jawaban', []),
        ]);
    }

    public function quizSubmit(Request $request, string $slug)
    {
        $session = QuizSession::where('slug', $slug)->firstOrFail();

        if ($session->expires_at->isPast()) {
            return redirect()->route('tools.quiz.show', $slug)
                ->withErrors(['link' => 'Link ujian sudah kedaluwarsa.']);
        }

        if (trim((string) $request->input('website', '')) !== '') {
            return redirect()->route('tools.quiz.show', $slug)->with('quiz_done', true);
        }

        $data = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'kelas' => ['required', 'string', 'max:50'],
            'instansi' => ['required', 'string', 'max:100'],
            'jawaban' => ['required', 'array'],
            'idempotency_key' => ['required', 'uuid'],
        ]);

        $answers = [];
        foreach ($session->questions as $question) {
            $qid = $question['id'];

            if (! array_key_exists($qid, $data['jawaban'])) {
                throw ValidationException::withMessages(['jawaban' => 'Semua soal wajib dijawab.']);
            }

            $value = $data['jawaban'][$qid];

            if ($question['type'] === 'pg') {
                if (! is_numeric($value) || ! isset($question['options'][(int) $value])) {
                    throw ValidationException::withMessages(['jawaban' => 'Jawaban soal "'.$qid.'" tidak valid.']);
                }
                $answers[$qid] = (int) $value;

                continue;
            }

            $limit = $question['type'] === 'essay' ? 2000 : 500;
            $text = mb_substr(trim((string) $value), 0, $limit);
            if ($text === '') {
                throw ValidationException::withMessages(['jawaban' => 'Semua soal wajib dijawab.']);
            }
            $answers[$qid] = $text;
        }

        $norm = fn ($value) => mb_strtolower(trim($value), 'UTF-8');

        DB::beginTransaction();
        try {
            $answer = QuizAnswer::create([
                'session_id' => $session->id,
                'nama' => trim($data['nama']),
                'kelas' => trim($data['kelas']),
                'instansi' => trim($data['instansi']),
                'nama_norm' => $norm($data['nama']),
                'kelas_norm' => $norm($data['kelas']),
                'instansi_norm' => $norm($data['instansi']),
                'jawaban' => $answers,
                'total_soal' => $session->total_soal,
                'idempotency_key' => $data['idempotency_key'],
                'sheets_status' => 'pending',
                'submitted_ip' => $request->ip(),
                'submitted_at' => now(),
            ]);
            DB::commit();
        } catch (QueryException $e) {
            DB::rollBack();

            if (in_array($e->errorInfo[1] ?? null, [1062, 19], true)) {
                return redirect()->route('tools.quiz.show', $slug)
                    ->with('quiz_done', true)
                    ->with('quiz_submitted_before', true);
            }

            throw $e;
        }

        return redirect()->route('tools.quiz.show', $slug)->with('quiz_done', true);
    }

    public function quizResyncAll(string $slug)
    {
        if (! $this->quizPinVerified()) {
            return redirect()->route('tools.quiz.pin');
        }

        $session = QuizSession::where('slug', $slug)->firstOrFail();

        set_time_limit(300);

        $belum = $session->answers()->where('sheets_status', '!=', 'synced')->count();

        $sent = 0;
        $failed = 0;
        $session->answers()->where('sheets_status', '!=', 'synced')->each(function (QuizAnswer $answer) use (&$sent, &$failed) {
            $answer->sendToSheets() ? $sent++ : $failed++;
        });

        $notice = $belum === 0
            ? 'Semua jawaban sudah terkirim ke Google Sheets.'
            : $sent.' jawaban terkirim, '.$failed.' gagal.';

        return back()->with('quiz_notice', $notice);
    }

    public function quizMonitor(string $slug)
    {
        if (! $this->quizPinVerified()) {
            return redirect()->route('tools.quiz.pin');
        }

        $session = QuizSession::where('slug', $slug)->firstOrFail();
        $answers = $session->answers()->orderByDesc('submitted_at')->paginate(20);

        $stats = [
            'total' => $session->answers()->count(),
            'synced' => $session->answers()->where('sheets_status', 'synced')->count(),
            'pending' => $session->answers()->where('sheets_status', 'pending')->count(),
            'failed' => $session->answers()->where('sheets_status', 'failed')->count(),
        ];

        return view('pages.tools.quiz.quiz-monitor', $this->quizPageData(
            'Hasil '.$session->title.' - Quiz Alhazen Academy',
            'Rekap jawaban siswa.'
        ) + [
            'session' => $session,
            'answers' => $answers,
            'stats' => $stats,
            'quizUrl' => url('/tools/quiz/'.$session->slug),
        ]);
    }

    public function quizResync(QuizAnswer $answer)
    {
        if (! $this->quizPinVerified()) {
            return redirect()->route('tools.quiz.pin');
        }

        $ok = $answer->sendToSheets();

        return back()->with(
            'quiz_notice',
            $ok
                ? 'Jawaban '.$answer->nama.' terkirim ke Google Sheets.'
                : 'Gagal mengirim jawaban '.$answer->nama.' ('.$answer->sheets_error.'). Coba lagi.'
        );
    }

    public function quizExport(string $slug)
    {
        if (! $this->quizPinVerified()) {
            return redirect()->route('tools.quiz.pin');
        }

        $session = QuizSession::where('slug', $slug)->firstOrFail();
        $records = $session->answers()->orderBy('submitted_at')->get();

        return Excel::download(
            new QuizAnswersExport($records, $session->questions),
            'quiz-'.$session->slug.'.xlsx'
        );
    }

    public function quizReset(QuizAnswer $answer)
    {
        if (! $this->quizPinVerified()) {
            return redirect()->route('tools.quiz.pin');
        }

        $slug = $answer->session->slug;
        $answer->delete();

        return redirect()->route('tools.quiz.monitor', $slug)
            ->with('quiz_notice', 'Jawaban dihapus. Siswa bisa mengumpulkan ulang.');
    }
}
