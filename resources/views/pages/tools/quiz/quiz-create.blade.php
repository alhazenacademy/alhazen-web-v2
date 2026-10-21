<x-layout title="Buat Quiz/Ujian Online - Tools Tutor Alhazen Academy"
    description="Upload file soal dan dapatkan link ujian unik untuk dibagikan ke siswa. Hasil jawaban otomatis terkirim ke Google Sheets."
    wa-message="Halo MinZen, saya butuh bantuan terkait Quiz/Ujian Online Alhazen Academy."
    :sales-phone="$salesPhone">

    <x-navbar variant="kids" />

    <main class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-extrabold tracking-tight text-center text-primary mb-2">Buat Quiz / Ujian Online</h1>
        <p class="text-sm text-gray-500 text-center mb-8">Upload soal, dapatkan link, bagikan ke siswa.</p>

        @if (session('quiz_created'))
            <div class="mb-8 p-6 rounded-2xl bg-green-50 border border-green-200">
                <h2 class="font-bold text-green-700 mb-1">Link ujian berhasil dibuat!</h2>
                <p class="text-sm text-gray-600 mb-4">{{ session('quiz_created.title') }} — berlaku sampai {{ session('quiz_created.expires_at') }}</p>
                <div class="flex flex-col sm:flex-row gap-4 items-center">
                    @if (! empty(session('quiz_created.qr_url')))
                        <img src="{{ session('quiz_created.qr_url') }}" alt="QR link ujian" class="w-36 h-36 rounded-xl bg-white p-2">
                    @endif
                    <div class="flex-1 w-full">
                        <input id="quiz-link" type="text" readonly value="{{ session('quiz_created.url') }}"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 bg-white text-sm">
                        <div class="flex gap-2 mt-3">
                            <button type="button" id="copy-quiz-link" onclick="copyQuizLink()"
                                class="flex-1 py-2.5 bg-primary text-white rounded-xl font-bold text-sm shadow-lg shadow-primary/20 cursor-pointer">
                                Salin Link
                            </button>
                            <a href="{{ session('quiz_created.wa_url') }}" target="_blank" rel="noopener"
                                class="flex-1 py-2.5 text-center bg-white border border-gray-200 rounded-xl font-bold text-sm">
                                Bagikan WA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 p-4 rounded-2xl bg-red-50 text-red-600 text-sm">
                <p class="font-bold mb-1">Ada yang perlu diperbaiki:</p>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-6 p-4 rounded-2xl bg-primary/5 text-sm">
            <p class="font-bold text-primary mb-2">Checklist sebelum upload:</p>
            <ul class="list-disc list-inside text-gray-600 space-y-1">
                <li>File CSV/JSON mengikuti format Alhazen. Format dapat diminta ke tim kurikulum.</li>
                <li>Gambar soal di Google Drive sudah Share &rarr; Anyone with link.</li>
                <li>URL Web App Apps Script sudah di-deploy (https://script.google.com/...).</li>
                <li>Jangan hapus/pindah file Drive selama ujian berlangsung.</li>
            </ul>
        </div>

        <form method="POST" action="{{ route('tools.quiz.store') }}" enctype="multipart/form-data"
            class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 space-y-5">
            @csrf

            <div>
                <label for="title" class="block text-sm font-bold mb-2">Judul Ujian</label>
                <input type="text" name="title" id="title" required maxlength="150" value="{{ old('title') }}"
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50"
                    placeholder="Contoh: Kuis Coding Kelas 6 - Pertemuan 4">
                <p class="text-xs text-gray-400 mt-1">Judul juga dipakai sebagai nama tab di Google Sheets (otomatis dibuat bila belum ada). Gunakan judul yang unik dan jangan diubah setelah ujian dimulai.</p>
            </div>

            <div>
                <label for="description" class="block text-sm font-bold mb-2">Petunjuk (opsional)</label>
                <textarea name="description" id="description" rows="2" maxlength="2000"
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50"
                    placeholder="Contoh: Kerjakan sendiri, waktu 30 menit.">{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="soal_file" class="block text-sm font-bold mb-2">File Soal (CSV / JSON, maks 1 MB)</label>
                <input type="file" name="soal_file" id="soal_file" required accept=".csv,.txt,.json"
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50 text-sm">
                <div id="image-preview" class="hidden mt-3">
                    <p class="text-xs font-bold text-gray-500 mb-2">Preview gambar yang terdeteksi di file:</p>
                    <div id="image-preview-list" class="flex flex-wrap gap-2"></div>
                </div>
            </div>

            <div>
                <label for="sheets_webhook_url" class="block text-sm font-bold mb-2">URL Web App Google Sheets (opsional)</label>
                <input type="url" name="sheets_webhook_url" id="sheets_webhook_url" maxlength="500"
                    value="{{ old('sheets_webhook_url') }}"
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50"
                    placeholder="https://script.google.com/macros/s/.../exec">
                <p class="text-xs text-gray-400 mt-1">Boleh dikosongkan — hasil tetap tersimpan dan bisa di-Export Excel.</p>
            </div>

            <div>
                <label for="expires_in" class="block text-sm font-bold mb-2">Link berlaku selama</label>
                <select name="expires_in" id="expires_in"
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 bg-white">
                    <option value="2" @selected(old('expires_in') === '2')>2 jam</option>
                    <option value="4" @selected(old('expires_in', '4') === '4')>4 jam (disarankan)</option>
                    <option value="12" @selected(old('expires_in') === '12')>12 jam</option>
                    <option value="24" @selected(old('expires_in') === '24')>24 jam</option>
                </select>
            </div>

            <div class="flex flex-col gap-3">
                <label class="flex items-center gap-3 cursor-pointer select-none">
                    <input type="checkbox" name="shuffle_questions" value="1" @checked(old('shuffle_questions', true)) class="w-5 h-5 rounded accent-primary cursor-pointer">
                    <span class="text-sm font-bold">Acak urutan soal</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer select-none">
                    <input type="checkbox" name="shuffle_options" value="1" @checked(old('shuffle_options', true)) class="w-5 h-5 rounded accent-primary cursor-pointer">
                    <span class="text-sm font-bold">Acak urutan opsi</span>
                </label>
            </div>

            <button type="submit"
                class="w-full py-4 mt-3 bg-primary text-white rounded-2xl font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all cursor-pointer">
                Generate Link Ujian
            </button>
        </form>
    </main>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />

    <script>
        function copyQuizLink() {
            const input = document.getElementById('quiz-link');
            const btn = document.getElementById('copy-quiz-link');
            const original = btn.innerHTML;
            const done = () => {
                btn.innerHTML = 'Tersalin!';
                btn.classList.add('opacity-80');
                setTimeout(() => {
                    btn.innerHTML = original;
                    btn.classList.remove('opacity-80');
                }, 2000);
            };
            input.select();
            input.setSelectionRange(0, 99999);
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(input.value).then(done).catch(() => {
                    document.execCommand('copy');
                    done();
                });
            } else {
                document.execCommand('copy');
                done();
            }
        }

        function normalizeDrivePreviewUrl(url) {
            try {
                const u = new URL(url.trim());
                if (u.protocol !== 'https:') return null;
                if (u.hostname === 'drive.google.com') {
                    const fileMatch = u.pathname.match(/\/file\/d\/([A-Za-z0-9_-]+)/);
                    if (fileMatch) return 'https://lh3.googleusercontent.com/d/' + fileMatch[1];
                    const idParam = u.searchParams.get('id');
                    if (idParam) return 'https://lh3.googleusercontent.com/d/' + idParam;
                    const thumbMatch = (u.pathname + u.search).match(/[?&]id=([A-Za-z0-9_-]+)/);
                    if (thumbMatch) return 'https://lh3.googleusercontent.com/d/' + thumbMatch[1];
                    return null;
                }
                if (['lh3.googleusercontent.com', 'drive.usercontent.google.com', 'docs.google.com'].includes(u.hostname)) {
                    return url.trim();
                }
                return null;
            } catch (e) {
                return null;
            }
        }

        document.getElementById('soal_file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const box = document.getElementById('image-preview');
            const list = document.getElementById('image-preview-list');
            list.innerHTML = '';
            if (!file) {
                box.classList.add('hidden');
                return;
            }
            const reader = new FileReader();
            reader.onload = function() {
                const urls = [...new Set((reader.result.match(/https:\/\/[^\s"'<>]+/g) || []))].slice(0, 20);
                if (!urls.length) {
                    box.classList.add('hidden');
                    return;
                }
                box.classList.remove('hidden');
                let shown = 0;
                urls.forEach(url => {
                    const src = normalizeDrivePreviewUrl(url);
                    if (!src) return;
                    shown++;
                    const img = document.createElement('img');
                    img.src = src;
                    img.alt = 'Preview gambar soal';
                    img.loading = 'lazy';
                    img.referrerPolicy = 'no-referrer';
                    img.className = 'w-20 h-20 object-cover rounded-lg border border-gray-200';
                    img.onerror = function() {
                        img.classList.add('opacity-30');
                        img.title = 'Gagal dimuat: ' + url;
                    };
                    list.appendChild(img);
                });
                if (!shown) box.classList.add('hidden');
            };
            reader.readAsText(file);
        });
    </script>

</x-layout>
