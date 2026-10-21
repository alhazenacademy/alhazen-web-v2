<x-layout title="Kerjakan Quiz - Alhazen Academy"
    description="Kerjakan quiz/ujian online dari Alhazen Academy."
    wa-message="Halo MinZen, saya butuh bantuan terkait Quiz/Ujian Online Alhazen Academy."
    :focus="true"
    :sales-phone="$salesPhone">

    <main class="max-w-3xl mx-auto px-4 py-10 pt-16">
        <button type="button" id="quiz-fs-btn" onclick="toggleQuizFullscreen()"
            class="fixed top-4 right-4 z-40 inline-flex items-center gap-2 rounded-full bg-white/90 backdrop-blur border border-gray-200 shadow-lg px-4 py-2.5 text-sm font-bold text-primary hover:bg-white transition-all cursor-pointer"
            title="Aktifkan layar penuh">
            <svg id="quiz-fs-enter" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9M3.75 20.25h4.5m-4.5 0v-4.5m0 4.5L9 15M20.25 20.25v-4.5m0 4.5h-4.5m4.5 0L15 15" />
            </svg>
            <svg id="quiz-fs-exit" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25" />
            </svg>
            <span id="quiz-fs-label">Layar penuh</span>
        </button>
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

        @if ($expired)
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                <h1 class="text-2xl font-bold mb-2">Link Kedaluwarsa</h1>
                <p class="text-sm text-gray-500">Maaf, link ujian "{{ $session->title }}" sudah tidak berlaku. Hubungi tutor untuk link baru.</p>
            </div>
        @else
            <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-center text-primary mb-2">{{ $session->title }}</h1>
            @if ($session->description)
                <p class="text-sm text-gray-500 text-center mb-2">{{ $session->description }}</p>
            @endif
            <p class="text-xs text-gray-400 text-center mb-8">{{ $session->total_soal }} soal &bull; Berlaku sampai {{ $session->expires_at->format('d M Y H:i') }}</p>

            <div x-data="quizApp()" x-init="init()">
                <div x-show="alreadyDone" class="mb-6 p-4 rounded-2xl bg-amber-50 text-amber-700 text-sm">
                    Browser ini sudah mengumpulkan jawaban. Jika ini bukan jawabanmu (perangkat dipakai bersama), pastikan identitas di bawah benar sebelum kirim ulang.
                </div>

                <form method="POST" action="{{ route('tools.quiz.submit', $session->slug) }}" x-ref="quizForm" @submit="handleSubmit" class="space-y-5">
                    @csrf
                    <input type="hidden" name="idempotency_key" :value="uuid">

                    <input type="text" name="website" value="" tabindex="-1" autocomplete="off"
                        class="hidden" aria-hidden="true">

                    <style>
                        .quiz-siswa h2 { font-size: 1.3rem; font-weight: 800; }
                        .quiz-siswa label { display: block; font-size: 1rem; font-weight: 700; margin-bottom: .45rem; }
                        .quiz-siswa input { width: 100%; font-size: 1.05rem; padding: .9rem 1.1rem; border: 1px solid #e5e7eb; border-radius: .9rem; }
                        .quiz-siswa input:focus { outline: none; border-color: #059669; box-shadow: 0 0 0 3px rgba(5, 150, 105, .15); }
                    </style>

                    <div class="bg-white rounded-2xl shadow p-6 sm:p-8 space-y-5 quiz-siswa">
                        <h2>Data Siswa</h2>
                        <div>
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" required maxlength="100" x-model="nama"
                                placeholder="Nama kamu">
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label for="kelas">Kelas</label>
                                <input type="text" name="kelas" id="kelas" required maxlength="50" x-model="kelas"
                                    placeholder="Contoh: 6A">
                            </div>
                            <div>
                                <label for="instansi">Sekolah</label>
                                <input type="text" name="instansi" id="instansi" required maxlength="100" x-model="instansi"
                                    placeholder="Contoh: SDN 1 Jakarta">
                            </div>
                        </div>
                    </div>

                    <template x-for="(q, qi) in display" :key="q.id">
                        <div class="bg-white rounded-2xl shadow p-6">
                            <p class="font-bold mb-3"><span x-text="qi + 1"></span>. <span x-text="q.question"></span></p>
                            <template x-if="q.question_image">
                                <img :src="q.question_image" :alt="'Gambar soal ' + (qi + 1)" loading="lazy"
                                    referrerpolicy="no-referrer" onerror="this.style.display='none'"
                                    class="rounded-xl mb-3 w-full max-h-96 object-contain bg-gray-50">
                            </template>

                            <template x-if="q.type === 'pg'">
                                <div class="space-y-2">
                                    <template x-for="opt in q._opts" :key="opt.idx">
                                        <div>
                                            <label class="block p-3 rounded-xl text-sm cursor-pointer bg-gray-50 hover:bg-gray-100 has-[:checked]:bg-primary/10 has-[:checked]:text-primary transition-colors">
                                                <span class="flex items-center gap-3">
                                                    <input type="radio" :name="'jawaban[' + q.id + ']'" :value="opt.idx"
                                                        x-model="answers[q.id]" required class="w-4 h-4 shrink-0 cursor-pointer">
                                                    <span x-text="opt.text"></span>
                                                </span>
                                                <template x-if="opt.image">
                                                    <img :src="opt.image" :alt="'Gambar opsi ' + (qi + 1)" loading="lazy"
                                                        referrerpolicy="no-referrer" onerror="this.style.display='none'"
                                                        class="rounded-xl mt-3 w-full max-h-96 object-contain bg-gray-50">
                                                </template>
                                            </label>
                                        </div>
                                    </template>
                                </div>
                            </template>

                            <template x-if="q.type === 'isian'">
                                <input type="text" :name="'jawaban[' + q.id + ']'" x-model="answers[q.id]"
                                    required maxlength="500"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50"
                                    placeholder="Tulis jawaban singkatmu">
                            </template>

                            <template x-if="q.type === 'essay'">
                                <textarea :name="'jawaban[' + q.id + ']'" x-model="answers[q.id]" rows="4"
                                    required maxlength="2000"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50"
                                    placeholder="Tulis jawabanmu (maks 2000 karakter)"></textarea>
                            </template>
                        </div>
                    </template>

                    <button type="button" @click="askConfirm"
                        class="w-full py-4 bg-primary text-white rounded-2xl font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all cursor-pointer">
                        Kumpulkan Jawaban
                    </button>
                    <p class="text-xs text-gray-400 text-center">Jawaban tersimpan otomatis di browser ini tiap 5 detik. Satu siswa satu pengumpulan.</p>
                </form>

                <div x-show="confirmOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4">
                    <div class="absolute inset-0 bg-black/50" @click="confirmOpen = false"></div>
                    <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-md overflow-hidden">
                        <div class="bg-primary/10 px-6 pt-6 pb-4 text-center">
                            <span class="inline-flex w-14 h-14 rounded-full bg-primary text-white items-center justify-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                                </svg>
                            </span>
                            <h3 class="font-bold text-lg">Kumpulkan jawaban?</h3>
                        </div>
                        <div class="p-6 pt-4">
                        <p class="text-sm text-gray-600 mb-1 text-center">Terjawab <span class="font-bold" x-text="answeredCount"></span> dari <span x-text="display.length"></span> soal.</p>
                        <template x-if="missingNumbers.length">
                            <div class="mb-4 p-3 rounded-xl bg-amber-50 text-amber-700 text-sm text-center">
                                <p class="font-bold mb-1">Belum dijawab:</p>
                                <p>Soal no. <span x-text="missingNumbers.join(', ')"></span></p>
                            </div>
                        </template>
                        <template x-if="!missingNumbers.length">
                            <p class="text-sm text-gray-600 mb-4 text-center">Semua soal sudah dijawab. Nilai diumumkan tutor.</p>
                        </template>
                        <div class="flex gap-2 mt-4">
                            <button type="button" @click="confirmOpen = false" :disabled="submitting"
                                class="flex-1 py-3 border border-gray-200 rounded-xl font-bold text-sm cursor-pointer disabled:opacity-50">Kembali periksa</button>
                            <button type="button" @click="doSubmit" :disabled="submitting"
                                class="flex-1 py-3 bg-primary text-white rounded-xl font-bold text-sm shadow-lg shadow-primary/20 cursor-pointer disabled:opacity-50"
                                x-text="submitting ? 'Mengirim...' : 'Ya, kumpulkan'"></button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>

    <script>
        function quizApp() {
            return {
                questions: @json($session->questions),
                shuffleQ: @json((bool) $session->shuffle_questions),
                shuffleO: @json((bool) $session->shuffle_options),
                slug: @json($session->slug),
                oldIdentity: @json($oldIdentity),
                oldAnswers: @json($oldAnswers),
                nama: '',
                kelas: '',
                instansi: '',
                answers: {},
                uuid: '',
                alreadyDone: false,
                display: [],
                confirmOpen: false,
                submitting: false,
                confirmed: false,
                timer: null,
                get answeredCount() {
                    return this.display.filter(q => this.isAnswered(q)).length;
                },
                get missingNumbers() {
                    const missing = [];
                    this.display.forEach((q, i) => {
                        if (!this.isAnswered(q)) missing.push(i + 1);
                    });
                    return missing;
                },
                isAnswered(q) {
                    const v = this.answers[q.id];
                    if (v === undefined || v === null || v === '') return false;
                    return String(v).trim() !== '';
                },
                askConfirm() {
                    this.confirmOpen = true;
                },
                doSubmit() {
                    this.confirmed = true;
                    this.submitting = true;
                    // Hentikan autosave dulu, supaya tidak menulis ulang draft
                    // selama proses kirim ke server (round-trip bisa lama).
                    this.stopAutosave();
                    this.$refs.quizForm.requestSubmit();
                    setTimeout(() => {
                        this.submitting = false;
                    }, 1000);
                },
                stopAutosave() {
                    if (this.timer) {
                        clearInterval(this.timer);
                        this.timer = null;
                    }
                },
                handleSubmit(e) {
                    if (!this.confirmed) {
                        e.preventDefault();
                        this.askConfirm();
                        return;
                    }
                    this.onSubmit();
                },
                init() {
                    // UUID anti-duplikat dibuat BARU setiap halaman dimuat,
                    // agar browser dipakai bergantian tetap bisa kirim.
                    // Duplikat dalam 1x buka halaman (klik 2x/retry)
                    // tetap tertolak karena kuncinya sama.
                    const uuid = crypto.randomUUID();
                    localStorage.setItem('quiz_uuid_' + this.slug, uuid);
                    this.uuid = uuid;
                    this.alreadyDone = localStorage.getItem('quiz_done_' + this.slug) === '1';

                    let draft = {};
                    try {
                        draft = JSON.parse(localStorage.getItem('quiz_draft_' + this.slug) || '{}');
                    } catch (e) {
                        draft = {};
                    }
                    this.nama = this.oldIdentity.nama || draft.nama || '';
                    this.kelas = this.oldIdentity.kelas || draft.kelas || '';
                    this.instansi = this.oldIdentity.instansi || draft.instansi || '';
                    this.answers = Object.assign({}, draft.answers || {}, this.oldAnswers);

                    this.buildOrder();

                    this.timer = setInterval(() => this.save(), 5000);
                },
                shuffle(arr) {
                    for (let i = arr.length - 1; i > 0; i--) {
                        const j = Math.floor(Math.random() * (i + 1));
                        [arr[i], arr[j]] = [arr[j], arr[i]];
                    }
                    return arr;
                },
                // Urutan acak DISIMPAN di browser supaya refresh tidak mengacak
                // ulang — soal dan opsi tetap di posisi yang sama. Yang disimpan
                // hanya urutan (id soal + index opsi aslinya), bukan isi soal.
                // Urutan dihapus di halaman terima kasih, jadi siswa berikutnya
                // pada device yang sama langsung mendapat acakan baru.
                orderKey() {
                    return 'quiz_order_' + this.slug;
                },
                loadOrder() {
                    try {
                        return JSON.parse(localStorage.getItem(this.orderKey()) || 'null');
                    } catch (e) {
                        return null;
                    }
                },
                saveOrder(ids, opts) {
                    try {
                        localStorage.setItem(this.orderKey(), JSON.stringify({ ids: ids, opts: opts }));
                    } catch (e) {
                        // localStorage bisa diblokir (mode privasi); abaikan,
                        // acakan hanya berlaku untuk halaman ini saja.
                    }
                },
                // Simpanan hanya dipakai bila masih cocok dengan soal sekarang
                // (jumlah & isi id sama, urutan opsi = permutasi lengkap).
                // Kalau tidak cocok, diacak ulang — bukan error.
                isValidOrder(order) {
                    if (!order || !Array.isArray(order.ids) || !order.opts || typeof order.opts !== 'object') {
                        return false;
                    }
                    const idList = this.questions.map(q => String(q.id));
                    if (order.ids.length !== this.questions.length) return false;
                    if (new Set(order.ids.map(String)).size !== order.ids.length) return false;
                    if (!order.ids.every(id => idList.indexOf(String(id)) >= 0)) return false;
                    return this.questions.every(q => {
                        const permut = order.opts[q.id];
                        const n = (q.options || []).length;
                        if (!Array.isArray(permut) || permut.length !== n) return false;
                        if (new Set(permut.map(Number)).size !== n) return false;
                        return permut.every(v => Number.isInteger(Number(v)) && Number(v) >= 0 && Number(v) < n);
                    });
                },
                // Susun opsi sesuai urutan tersimpan (nilai jawaban tetap index
                // asli opsi, jadi draft yang sudah tersimpan tidak berubah).
                applyOrder(q, permut) {
                    const opts = (q.options || []).map((o, i) => Object.assign({ idx: i }, o));
                    if (!Array.isArray(permut)) return opts;
                    return permut.map(i => opts[Number(i)]);
                },
                buildOrder() {
                    const order = this.loadOrder();
                    if (this.isValidOrder(order)) {
                        this.display = order.ids
                            .map(id => this.questions.filter(q => String(q.id) === String(id))[0])
                            .filter(q => !!q);
                        this.display.forEach(q => {
                            q._opts = this.applyOrder(q, order.opts[q.id]);
                        });
                        return;
                    }

                    const display = this.shuffleQ ? this.shuffle(this.questions.slice()) : this.questions.slice();
                    const opts = {};
                    display.forEach(q => {
                        q._opts = this.shuffleO ? this.shuffle(this.applyOrder(q, null)) : this.applyOrder(q, null);
                        opts[q.id] = q._opts.map(o => o.idx);
                    });
                    this.display = display;
                    this.saveOrder(display.map(q => q.id), opts);
                },
                save() {
                    // Jangan simpan draft kosong (belum ada isian sama sekali).
                    const kosong = !this.nama && !this.kelas && !this.instansi
                        && !Object.values(this.answers).some(v => v !== undefined && v !== null && String(v).trim() !== '');
                    if (kosong) {
                        return;
                    }
                    localStorage.setItem('quiz_draft_' + this.slug, JSON.stringify({
                        nama: this.nama,
                        kelas: this.kelas,
                        instansi: this.instansi,
                        answers: this.answers,
                    }));
                },
                onSubmit() {
                    // Draft TIDAK dihapus di sini — penghapusan otoritatif
                    // dilakukan di halaman terima kasih setelah server
                    // memastikan jawaban tersimpan (berhasil/duplikat).
                    this.stopAutosave();
                },
            };
        }
    </script>

    <script>
        function updateQuizFullscreenUI() {
            const active = !!document.fullscreenElement;
            const btn = document.getElementById('quiz-fs-btn');
            if (!btn) return;
            document.getElementById('quiz-fs-enter').classList.toggle('hidden', active);
            document.getElementById('quiz-fs-exit').classList.toggle('hidden', !active);
            document.getElementById('quiz-fs-label').textContent = active ? 'Keluar layar penuh' : 'Layar penuh';
            btn.title = active ? 'Keluar layar penuh' : 'Aktifkan layar penuh';
        }

        function toggleQuizFullscreen() {
            const el = document.documentElement;
            if (!document.fullscreenElement) {
                const req = el.requestFullscreen || el.webkitRequestFullscreen || el.msRequestFullscreen;
                if (req) req.call(el);
            } else {
                const exit = document.exitFullscreen || document.webkitExitFullscreen || document.msExitFullscreen;
                if (exit) exit.call(document);
            }
        }

        document.addEventListener('fullscreenchange', updateQuizFullscreenUI);
        document.addEventListener('webkitfullscreenchange', updateQuizFullscreenUI);
    </script>

</x-layout>
