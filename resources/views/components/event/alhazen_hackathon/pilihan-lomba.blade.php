@props([
    'title' => 'Pilihan Lomba untuk Anak',

    'description' => 'Kompetisi dirancang sesuai usia dan jenjang pendidikan agar anak dapat belajar, berkreasi, dan berkompetisi dengan nyaman.',

    
])

<section id="pilihan-lomba" class="py-16 sm:py-20 bg-surface" x-data="{ showSyarat: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="text-center max-w-3xl mx-auto mb-14">
            <h2 class="text-h2 font-extrabold text-primary mb-4">
                {{ $title }}
            </h2>
            <p class="text-body text-text/70">
                {{ $description }}
            </p>
        </div>

        {{-- Kompetisi Coding --}}
        <div x-data="{ showSyarat: false }" class="space-y-10">
            {{-- ================= CARD 1 : INFO LOMBA ================= --}}
            <div class="max-w-5xl mx-auto mb-10">
                <div class="rounded-[28px] bg-white shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2 items-stretch">

                    {{-- Content --}}
                    <div class="p-6 sm:p-10">
                        <h3 class="text-xl sm:text-3xl font-semibold mb-3">
                            🧠 Kompetisi Coding
                        </h3>

                        <p class="text-text/80 mb-4">
                            Kompetisi Coding untuk
                            <strong>SD (kelas 4–6) dan SMP (kelas 7–9)</strong>
                            guna melatih logika, kreativitas, dan problem solving.
                        </p>

                        <ul class="space-y-3 text-text/80 mb-6 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 w-1 h-1 rounded-full bg-text shrink-0"></span>
                                <span>SD : Game / Animasi / Cerita Interaktif (Scratch)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 w-1 h-1 rounded-full bg-text shrink-0"></span>
                                <span>SMP : Website atau Web App sederhana</span>
                            </li>
                        </ul>

                        {{-- Fee --}}
                        <div class="mb-6">
                            <p class="text-sm text-text/60">Biaya Pendaftaran</p>
                            <p class="text-[22px] sm:text-[24px] font-extrabold text-[#EF4444]">
                                Rp. 49.000,-
                            </p>
                        </div>

                        {{-- CTA --}}
                        <div class="flex flex-wrap gap-4">
                            <a href="https://goakal.com/alhazenacademy/lomba-alhazen-aifest-25/8bmhi/apply"
                                target="_blank"
                                class="px-6 py-3 rounded-xl bg-accent text-white font-semibold hover:scale-105">
                                Daftar Kompetisi
                            </a>

                            <button @click="showSyarat = !showSyarat"
                                class="px-6 py-3 rounded-xl border border-primary/30 text-primary font-semibold hover:bg-primary/5">
                                Syarat & Ketentuan
                            </button>
                        </div>
                    </div>

                    {{-- Image (Full Height) --}}
                    <div class="relative hidden md:block">
                        <img src="{{ asset('assets/kids/hackathon/kompetisi-coding.webp') }}"
                            alt="Kegiatan Kompetisi Coding Alhazen Academy"
                            class="absolute inset-0 w-full h-full object-cover select-none" loading="lazy" />
                    </div>

                </div>
            </div>

            {{-- ================= CARD 2 : SYARAT & KETENTUAN ================= --}}
            <div x-show="showSyarat" x-transition class="max-w-5xl mx-auto mb-10">

                <div class="rounded-[28px] bg-white shadow-soft p-6 sm:p-10">

                    <h3 class="text-xl font-semibold mb-6">
                        📋 Syarat & Ketentuan Kompetisi Coding
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Ketentuan Umum --}}
                        <div class="bg-surface rounded-2xl p-5">
                            <h4 class="font-semibold mb-3">Ketentuan Umum</h4>
                            <ul class="space-y-2 text-sm text-text/80">
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Lomba offline (live di lokasi)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Individual (1 peserta)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Bergabung komunitas Alhazen</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Waktu pengerjaan 60 menit</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Membawa alat tulis sendiri</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Mengikuti instruksi panitia</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Penilaian --}}
                        <div class="bg-surface rounded-2xl p-5">
                            <h4 class="font-semibold mb-3">Kriteria Penilaian</h4>
                            <ul class="space-y-2 text-sm text-text/80">
                                <li><strong>Ketepatan</strong> – Akurasi pengerjaan</li>
                                <li><strong>Logika</strong> – Pola & urutan</li>
                                <li><strong>Kecepatan</strong> – Efisien & tepat</li>
                            </ul>
                        </div>

                        {{-- Tujuan --}}
                        <div class="bg-surface rounded-2xl p-5">
                            <h4 class="font-semibold mb-3">Tujuan Lomba</h4>
                            <ul class="space-y-2 text-sm text-text/80">
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Pengenalan coding dasar</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Melatih logika & problem solving</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Mengembangkan kreativitas</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Lokasi --}}
                        <div class="bg-surface rounded-2xl p-5">
                            <h4 class="font-semibold mb-3">Lokasi & Tipe</h4>
                            <p class="text-sm text-text/80 mb-2">
                                Kampus Muslimah Mahad Aisyah Jami – Bogor
                            </p>
                            <span class="inline-block text-xs px-3 py-1 rounded-full bg-primary/10 text-primary">
                                Offline – Aisyah Festival
                            </span>
                        </div>
                    </div>

                    {{-- Buku Panduan --}}
                    <div class="bg-surface rounded-2xl p-5">
                        <h4 class="font-semibold mb-3">Buku Panduan Lomba</h4>
                        <p class="text-sm text-text/80 mb-2">
                            Panduan lengkap teknis lomba, timeline, dan pengumpulan project
                            Kompetisi Coding (SD – SMP).
                        </p>
                        <a href="https://heyzine.com/flip-book/6ba3f379fb.html" target="_blank"
                            class="inline-block text-xs px-3 py-1 rounded-full bg-primary/10 text-primary font-semibold hover:bg-primary/20">
                            📘 Download Buku Panduan
                        </a>
                    </div>

                    {{-- Timeline --}}
                    <div class="bg-surface rounded-2xl p-5">
                        <h4 class="font-semibold mb-6 flex items-center gap-2">
                            Timeline & Roadmap Lomba
                        </h4>

                        <div class="relative">

                            {{-- Line --}}
                            <div class="hidden md:block absolute top-6 left-0 right-0 h-1 bg-primary/20"></div>

                            {{-- Steps --}}
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 relative">

                                {{-- Step 1 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        1
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Pendaftaran
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        3 Maret – 18 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Online (Website)
                                    </span>
                                </div>

                                {{-- Step 2 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        2
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Technical Meeting
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        23 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Online (Zoom)
                                    </span>
                                </div>

                                {{-- Step 3 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        3
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Penyisihan
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        27 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Offline (Aisyah Festival)
                                    </span>
                                </div>

                                {{-- Step 4 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        4
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Semi Final
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        27 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Offline (Aisyah Festival)
                                    </span>
                                </div>

                                {{-- Step 5 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        5
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Final
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        27 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Offline (Aisyah Festival)
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Coding for Teens --}}
        <div x-data="{ showSyaratTeens: false }" class="space-y-10">
            {{-- ================= CARD 1 : CODING FOR TEENS ================= --}}
            <div class="max-w-5xl mx-auto">
                <div class="rounded-[28px] bg-white shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2 items-stretch">

                    {{-- Content --}}
                    <div class="p-6 sm:p-10">
                        <h3 class="text-xl sm:text-3xl font-semibold mb-3">
                            💻 Coding for Teens
                        </h3>

                        <p class="text-text/80 mb-4">
                            Kategori junior diperuntukkan untuk
                            <strong>anak SD – SMP (usia 6 – 14 tahun)</strong>.
                        </p>

                        <p class="text-text/80 mb-4">
                            Peserta ditantang membuat:
                        </p>

                        <ul class="space-y-3 text-text/80 mb-6 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 w-1 h-1 rounded-full bg-text shrink-0"></span>
                                <span>SD : Game & Animasi (Scratch)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 w-1 h-1 rounded-full bg-text shrink-0"></span>
                                <span>SMP : Aplikasi Mobile (Thunkable)</span>
                            </li>
                        </ul>

                        {{-- Fee --}}
                        <div class="mb-6">
                            <p class="text-sm text-text/60">Biaya Pendaftaran</p>
                            <p class="text-[22px] sm:text-[24px] font-extrabold text-[#EF4444]">
                                Rp. 29.000,-
                            </p>
                        </div>

                        {{-- CTA --}}
                        <div class="flex flex-wrap gap-4">
                            <a href="https://goakal.com/alhazenacademy/lomba-alhazen-aifest-25/qjj9r/apply"
                                target="_blank"
                                class="px-6 py-3 rounded-xl bg-accent text-white font-semibold hover:scale-105">
                                Daftar Kompetisi
                            </a>

                            <button @click="showSyaratTeens = !showSyaratTeens"
                                class="px-6 py-3 rounded-xl border border-primary/30 text-primary font-semibold hover:bg-primary/5">
                                Syarat & Ketentuan
                            </button>
                        </div>
                    </div>

                    {{-- Image --}}
                    <div class="relative hidden md:block">
                        <img src="{{ asset('assets/kids/hackathon/coding-for-teens.webp') }}"
                            alt="Coding for Teens Alhazen"
                            class="absolute inset-0 w-full h-full object-cover select-none" loading="lazy" />
                    </div>

                </div>
            </div>

            {{-- ================= CARD 2 : SYARAT & KETENTUAN ================= --}}
            <div x-show="showSyaratTeens" x-transition class="max-w-5xl mx-auto mb-10">
                <div class="rounded-[28px] bg-white shadow-soft p-6 sm:p-10">

                    <h3 class="text-xl font-semibold mb-6">
                        📋 Ketentuan Umum Coding for Teens (SD – SMP)
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Ketentuan Umum --}}
                        <div class="bg-surface rounded-2xl p-5">
                            <h4 class="font-semibold mb-3">Ketentuan Umum</h4>
                            <ul class="space-y-2 text-sm text-text/80">
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Lomba online & offline (final)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Individual (1 peserta)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Project remix dari panitia</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Aset dasar disediakan panitia</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>
                                        Wajib bergabung komunitas Alhazen :
                                        <a href="https://chat.whatsapp.com/EffWdvBw65SI1LTCDUqkKr" target="_blank"
                                            class="text-primary underline">
                                            Alhazen x AiFest
                                        </a>
                                    </span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Kelalaian peserta di luar tanggung jawab panitia</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Penilaian --}}
                        <div class="bg-surface rounded-2xl p-5">
                            <h4 class="font-semibold mb-3">Kriteria Penilaian</h4>
                            <ul class="space-y-2 text-sm text-text/80">
                                <li>
                                    <strong>Penyisihan</strong>
                                    <ul class="ml-5">
                                        <li>- UI (25%)</li>
                                        <li>- Tema (15%)</li>
                                        <li>- Logika (60%)</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Semi Final</strong>
                                    <ul class="ml-5">
                                        <li>- Debugging (50%)</li>
                                        <li>- Kecepatan Debugging (40%)</li>
                                        <li>- Kecepatan Pengerjaan (10%)</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Final</strong>
                                    <ul class="ml-5">
                                        <li>- Presentasi</li>
                                        <li>- Pemahaman project</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        {{-- SD --}}
                        <div class="bg-surface rounded-2xl p-5">
                            <h4 class="font-semibold mb-3">Kategori SD (Scratch)</h4>
                            <ul class="space-y-2 text-sm text-text/80">
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Tema: <strong>Stop Bullying</strong></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Durasi maksimal 2 menit</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Maks. 2 level, skor 10, nyawa 3</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Wajib mencantumkan aset & credit</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Project Scratch publik</span>
                                </li>
                            </ul>
                        </div>

                        {{-- SMP --}}
                        <div class="bg-surface rounded-2xl p-5">
                            <h4 class="font-semibold mb-3">Kategori SMP (Thunkable)</h4>
                            <ul class="space-y-2 text-sm text-text/80">
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Tema: <strong>Stop Bullying</strong></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Minimal 5 screen</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Pesan jelas & mudah dipahami</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-1 w-1 rounded-full bg-text"></span>
                                    <span>Project Thunkable publik</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Buku Panduan --}}
                    <div class="bg-surface rounded-2xl p-5">
                        <h4 class="font-semibold mb-3">Buku Panduan Lomba</h4>
                        <p class="text-sm text-text/80 mb-2">
                            Panduan lengkap teknis lomba, timeline, dan pengumpulan project
                            Coding for Teens (SD – SMP).
                        </p>
                        <a href="https://drive.google.com/file/d/1mXcMnt1fUQFYTHUujZTpFCFLUUCsQhhC/view"
                            target="_blank"
                            class="inline-block text-xs px-3 py-1 rounded-full bg-primary/10 text-primary font-semibold hover:bg-primary/20">
                            📘 Download Buku Panduan
                        </a>
                    </div>

                    {{-- Timeline --}}
                    <div class="bg-surface rounded-2xl p-5">
                        <h4 class="font-semibold mb-6 flex items-center gap-2">
                            Timeline & Jadwal Lomba
                        </h4>

                        <div class="relative">

                            {{-- Line --}}
                            <div class="hidden md:block absolute top-6 left-0 right-0 h-1 bg-primary/20"></div>

                            {{-- Steps --}}
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 relative">

                                {{-- Step 1 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        1
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Pendaftaran
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        3 Maret – 14 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Online (Website)
                                    </span>
                                </div>

                                {{-- Step 2 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        2
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Pengumpulan Project
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        3 Maret – 15 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Online (Website)
                                    </span>
                                </div>

                                {{-- Step 3 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        3
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Penyisihan
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        17 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Online (Website)
                                    </span>
                                </div>

                                {{-- Step 4 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        4
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Technical Meeting
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        22 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Online (Zoom)
                                    </span>
                                </div>

                                {{-- Step 5 --}}
                                <div class="text-center md:text-left">
                                    <div class="mx-auto md:mx-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold mb-3 relative z-10">
                                        5
                                    </div>
                                    <h5 class="font-semibold text-sm mb-1">
                                        Final
                                    </h5>
                                    <p class="text-xs text-text/70">
                                        27 April 2025
                                    </p>
                                    <span class="inline-block mt-1 text-[9px] px-2 py-1 rounded-full bg-primary/10 text-primary">
                                        Offline – Aisyah Festival
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
