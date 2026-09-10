<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Group Promo Coding &amp; Roblox 99K — Alhazen Academy</title>
    <meta name="description" content="Lanjutkan petualangan coding anak! Kelas promo group coding &amp; Roblox mulai Rp99.000, 90 menit live via Zoom bersama tutor berpengalaman.">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="Kelas Group Promo Coding &amp; Roblox 99K — Alhazen Academy">
    <meta property="og:description" content="Lanjutkan petualangan coding anak! Kelas promo group coding &amp; Roblox mulai Rp99.000, 90 menit live via Zoom.">
    <meta property="og:image" content="{{ asset('assets/custom/kelas_group_promo/og-image.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="https://alhazen.academy/assets/logo-new.webp" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#059669',
                        'primary-dark': '#047857',
                        accent: '#F59E0B',
                        dark: '#111827',
                    }
                }
            }
        }
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Outfit', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        .tracking-tight-custom {
            letter-spacing: -0.02em;
        }
    </style>
</head>
<body>
    <div class="min-h-screen bg-white text-dark overflow-x-hidden">

        <!-- ==================== NAVIGATION ==================== -->
        <nav class="sticky top-0 z-50 bg-white border-b-2 border-gray-200 py-4">
            <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group cursor-pointer">
                    <img src="{{ asset('assets/nav-logo-new.webp') }}" alt="Alhazen Academy" class="h-10 w-auto" loading="lazy">
                    <span class="sr-only">Alhazen Academy</span>
                </a>
                <div class="hidden md:flex items-center gap-10 font-medium">
                    <a href="#tentang" class="hover:text-primary transition-colors">Tentang</a>
                    <a href="#jalur" class="hover:text-primary transition-colors">Pilihan Jalur</a>
                    <a href="#jadwal" class="hover:text-primary transition-colors">Jadwal</a>
                    <a href="#harga" class="hover:text-primary transition-colors">Harga</a>
                </div>
                <a href="#harga" class="h-12 px-6 flex items-center justify-center bg-dark text-white rounded-md font-semibold transition-all duration-200 hover:scale-105 hover:bg-primary">
                    Daftar Sekarang
                </a>
            </div>
        </nav>

        <!-- ==================== HERO ==================== -->
        <header class="relative bg-primary text-white py-24 lg:py-32 overflow-hidden">
            {{-- Geometric shapes --}}
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-white/5 rotate-45 -translate-x-1/2 translate-y-1/2"></div>
            <div class="absolute top-1/4 left-1/4 w-20 h-20 bg-white/20 rounded-lg rotate-12"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10 grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-block py-2 px-4 bg-accent text-dark font-bold text-sm tracking-widest uppercase rounded-full mb-6">
                        Mulai 14 September 2026
                    </span>
                    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight-custom leading-[1.05] mb-8">
                        Lanjutkan <br>
                        <span class="bg-white text-primary px-2">Petualangan Coding</span><br>
                        Anak!
                    </h1>
                    <p class="text-xl md:text-2xl text-white/90 font-normal mb-10 max-w-xl leading-relaxed">
                        Kelas lanjutan dari Coding Experience Class. Pilih jalur <strong>Coding</strong> atau <strong>Roblox Game Development</strong> sesuai minat anak.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#harga" class="h-16 px-10 flex items-center justify-center bg-accent text-dark text-lg font-bold rounded-md transition-all duration-200 hover:scale-105 hover:bg-white">
                            Daftar Sekarang
                        </a>
                        <a href="#jalur" class="h-16 px-10 flex items-center justify-center border-4 border-white text-white text-lg font-bold rounded-md transition-all duration-200 hover:bg-white hover:text-primary">
                            Lihat Jalur
                        </a>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <div class="w-full aspect-square bg-dark rounded-lg relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <iconify-icon icon="lucide:code-2" class="text-white/20 text-[200px]"></iconify-icon>
                        </div>
                        <div class="absolute bottom-8 left-8 p-6 bg-white rounded-lg">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white">
                                    <iconify-icon icon="lucide:check-circle" class="text-2xl"></iconify-icon>
                                </div>
                                <div>
                                    <div class="text-dark font-bold">Coding &amp; Roblox</div>
                                    <div class="text-gray-500 text-sm">2 jalur tersedia</div>
                                </div>
                            </div>
                            <div class="w-full h-3 bg-gray-100 rounded-full">
                                <div class="w-[75%] h-full bg-primary rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== STATS BAR ==================== -->
        <section class="bg-white py-12 border-b-2 border-gray-200">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4">
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">90m</div>
                        <div class="text-gray-500 font-medium uppercase tracking-widest text-sm">Durasi / Sesi</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-extrabold text-emerald-500 mb-2">Live</div>
                        <div class="text-gray-500 font-medium uppercase tracking-widest text-sm">Via Zoom</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-extrabold text-accent mb-2">2</div>
                        <div class="text-gray-500 font-medium uppercase tracking-widest text-sm">Jalur Belajar</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-extrabold text-rose-500 mb-2">99K</div>
                        <div class="text-gray-500 font-medium uppercase tracking-widest text-sm">Mulai Harga</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== TENTANG ==================== -->
        <section id="tentang" class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Apa itu Kelas Group Promo?</h2>
                        <p class="text-xl text-gray-600 leading-relaxed mb-6">
                            Kelas Promo Group Coding &amp; Roblox adalah program <strong>lanjutan</strong> dari Coding Experience Class Rp19.000. Jika di kelas sebelumnya anak sudah merasakan "rasanya ngoding", di kelas ini anak mulai <strong>memilih jalur</strong> yang lebih serius sesuai minatnya.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8">
                            Anak bisa memilih mendalami <strong>Coding</strong> (sesuai jenjang) atau <strong>Roblox Game Development</strong> — sebagai jembatan sebelum masuk ke program reguler Alhazen Academy.
                        </p>

                        {{-- Funnel --}}
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="px-4 py-2 bg-gray-100 rounded-md font-bold text-sm">19K — Kenalan</div>
                            <iconify-icon icon="lucide:arrow-right" class="text-gray-400 text-xl"></iconify-icon>
                            <div class="px-4 py-2 bg-primary text-white rounded-md font-bold text-sm">99K — Pilih Jalur</div>
                            <iconify-icon icon="lucide:arrow-right" class="text-gray-400 text-xl"></iconify-icon>
                            <div class="px-4 py-2 bg-gray-100 rounded-md font-bold text-sm">Reguler — Full Program</div>
                        </div>
                    </div>
                    <div class="relative hidden md:block">
                        <div class="w-full aspect-square bg-dark rounded-lg relative overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <iconify-icon icon="lucide:users" class="text-white/20 text-[180px]"></iconify-icon>
                            </div>
                            <div class="absolute bottom-8 left-8 p-6 bg-white rounded-lg">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-dark">
                                        <iconify-icon icon="lucide:star" class="text-2xl"></iconify-icon>
                                    </div>
                                    <div>
                                        <div class="text-dark font-bold">Middle of Funnel</div>
                                        <div class="text-gray-500 text-sm">Lanjutan dari 19K</div>
                                    </div>
                                </div>
                                <div class="w-full h-3 bg-gray-100 rounded-full">
                                    <div class="w-[50%] h-full bg-accent rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== PILIHAN JALUR (FEATURES) ==================== -->
        <section id="jalur" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Pilih Jalur yang Sesuai Minat</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">Dua jalur belajar yang bisa dipilih sesuai passion anak. Bisa pilih satu atau bundling keduanya!</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    {{-- Card Coding --}}
                    <div class="group bg-white border-2 border-gray-200 p-10 rounded-lg transition-all duration-200 hover:scale-[1.02] cursor-pointer hover:border-primary">
                        <div class="w-16 h-16 bg-primary flex items-center justify-center rounded-lg mb-8 transition-transform duration-200 group-hover:scale-110">
                            <iconify-icon icon="lucide:code" class="text-white text-3xl"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Coding</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Pelajari logika pemrograman &amp; buat project sendiri. Materi disesuaikan jenjang anak.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-gray-600">
                                <iconify-icon icon="lucide:check" class="text-primary text-lg flex-shrink-0"></iconify-icon>
                                Kelas 1-3 SD: Code.org (blok visual)
                            </li>
                            <li class="flex items-center gap-3 text-gray-600">
                                <iconify-icon icon="lucide:check" class="text-primary text-lg flex-shrink-0"></iconify-icon>
                                Kelas 4-6 SD: Scratch (game &amp; animasi)
                            </li>
                            <li class="flex items-center gap-3 text-gray-600">
                                <iconify-icon icon="lucide:check" class="text-primary text-lg flex-shrink-0"></iconify-icon>
                                SMP/SMA: Python &amp; Web Development
                            </li>
                        </ul>
                        <div class="flex items-center text-primary font-bold gap-2">
                            Mulai Rp 99.000 <iconify-icon icon="lucide:arrow-right"></iconify-icon>
                        </div>
                    </div>

                    {{-- Card Roblox --}}
                    <div class="group bg-primary p-10 rounded-lg transition-all duration-200 hover:scale-[1.02] cursor-pointer text-white">
                        <div class="w-16 h-16 bg-white/20 flex items-center justify-center rounded-lg mb-8 transition-transform duration-200 group-hover:scale-110">
                            <iconify-icon icon="lucide:gamepad-2" class="text-white text-3xl"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Roblox Game Development</h3>
                        <p class="text-white/90 leading-relaxed mb-6">
                            Belajar bikin game sendiri di Roblox Studio. Bukan cuma main game — tapi game development sungguhan!
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white/90">
                                <iconify-icon icon="lucide:check" class="text-accent text-lg flex-shrink-0"></iconify-icon>
                                Desain level &amp; dunia game
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <iconify-icon icon="lucide:check" class="text-accent text-lg flex-shrink-0"></iconify-icon>
                                Scripting dasar (Lua)
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <iconify-icon icon="lucide:check" class="text-accent text-lg flex-shrink-0"></iconify-icon>
                                Logika interaksi objek
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <iconify-icon icon="lucide:check" class="text-accent text-lg flex-shrink-0"></iconify-icon>
                                Cocok untuk semua jenjang
                            </li>
                        </ul>
                        <div class="flex items-center text-white font-bold gap-2">
                            Mulai Rp 99.000 <iconify-icon icon="lucide:arrow-right"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== MANFAAT (CURRICULUM-STYLE) ==================== -->
        <section class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
                    <div class="max-w-2xl">
                        <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Kenapa Anak Perlu Belajar Coding?</h2>
                        <p class="text-xl text-gray-600">Kami tidak sekadar mengajak anak main game. Berikut nilai pendidikan yang didapat.</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="border-2 border-gray-200 rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-primary transition-colors">
                        <div class="w-16 h-16 bg-gray-100 flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:brain" class="text-primary text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-primary mb-1">Logika Berpikir</h4>
                            <h3 class="text-2xl font-bold mb-2">Computational Thinking</h3>
                            <p class="text-gray-500">Anak belajar memecah masalah besar menjadi langkah-langkah kecil yang sistematis, mengenali pola, dan menyusun alur logis.</p>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-emerald-500 transition-colors">
                        <div class="w-16 h-16 bg-gray-100 flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:palette" class="text-emerald-500 text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-emerald-500 mb-1">Kreativitas</h4>
                            <h3 class="text-2xl font-bold mb-2">Bukan Sekadar Mengikuti Instruksi</h3>
                            <p class="text-gray-500">Anak menciptakan game, animasi, atau cerita interaktifnya sendiri di Scratch, Code.org, maupun Roblox Studio.</p>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-accent transition-colors">
                        <div class="w-16 h-16 bg-gray-100 flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:trophy" class="text-accent text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-accent mb-1">Growth Mindset</h4>
                            <h3 class="text-2xl font-bold mb-2">Belajar Pantang Menyerah</h3>
                            <p class="text-gray-500">Menemukan bug adalah hal biasa. Anak diajarkan cara mencari solusi tanpa frustrasi, melatih ketahanan mental.</p>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-primary transition-colors">
                        <div class="w-16 h-16 bg-gray-100 flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:monitor-smartphone" class="text-primary text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-primary mb-1">Paham Teknologi</h4>
                            <h3 class="text-2xl font-bold mb-2">Dari Konsumen Jadi Kreator</h3>
                            <p class="text-gray-500">Anak jadi paham bahwa aplikasi/game yang mereka mainkan sehari-hari dibuat oleh manusia, memicu rasa penasaran ilmiah.</p>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-emerald-500 transition-colors">
                        <div class="w-16 h-16 bg-gray-100 flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:rocket" class="text-emerald-500 text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-emerald-500 mb-1">Bekal Masa Depan</h4>
                            <h3 class="text-2xl font-bold mb-2">Keterampilan untuk Profesi Apapun</h3>
                            <p class="text-gray-500">Kemampuan berpikir komputasional dan literasi teknologi menjadi bekal penting apapun profesi yang akan ditekuni anak nantinya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== JADWAL ==================== -->
        <section id="jadwal" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Jadwal Kelas</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">Pilih 1 jadwal untuk paket satuan, atau 2 jadwal (beda kelas) untuk paket bundling.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    {{-- Card 1 --}}
                    <div class="group bg-white border-2 border-gray-200 p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-primary">
                        <div class="w-14 h-14 bg-primary flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:code" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Annisa</h4>
                        <p class="text-primary font-semibold text-sm mb-3">Coding Anak &bull; Kelas 1-3 SD</p>
                        <p class="text-gray-900 font-bold">Kamis, 16.00 - 17.30</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Code.org</p>
                    </div>

                    {{-- Card 2 --}}
                    <div class="group bg-white border-2 border-gray-200 p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-accent">
                        <div class="w-14 h-14 bg-accent flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:code" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Hilyah</h4>
                        <p class="text-accent font-semibold text-sm mb-3">Coding Anak &bull; Kelas 4-6 SD</p>
                        <p class="text-gray-900 font-bold">Kamis, 16.30 - 18.00</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Scratch</p>
                    </div>

                    {{-- Card 3 --}}
                    <div class="group bg-white border-2 border-gray-200 p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-emerald-500">
                        <div class="w-14 h-14 bg-emerald-500 flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:code" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Miftah</h4>
                        <p class="text-emerald-500 font-semibold text-sm mb-3">Coding Junior/Senior &bull; SMP/SMA</p>
                        <p class="text-gray-900 font-bold">Selasa, 15.30 - 17.00</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Python / Web Dev</p>
                    </div>

                    {{-- Card 4 --}}
                    <div class="group bg-white border-2 border-gray-200 p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-violet-500">
                        <div class="w-14 h-14 bg-violet-500 flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:gamepad-2" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Adam</h4>
                        <p class="text-violet-500 font-semibold text-sm mb-3">Roblox Game Development</p>
                        <p class="text-gray-900 font-bold">Senin 15.30 / Rabu 16.00</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Roblox Studio</p>
                    </div>

                    {{-- Card 5 --}}
                    <div class="group bg-white border-2 border-gray-200 p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-rose-500">
                        <div class="w-14 h-14 bg-rose-500 flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:gamepad-2" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Husna</h4>
                        <p class="text-rose-500 font-semibold text-sm mb-3">Roblox Game Development</p>
                        <p class="text-gray-900 font-bold">Selasa, 18.30 - 20.00</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Roblox Studio</p>
                    </div>
                </div>

                <p class="text-center text-gray-500 mt-10">Kuota tiap sesi terbatas. Jadwal dapat berubah sewaktu-waktu menyesuaikan kuota.</p>
            </div>
        </section>

        <!-- ==================== HARGA (PRICING) ==================== -->
        <section id="harga" class="py-24 bg-dark text-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary/10 -rotate-12 translate-x-1/2 -translate-y-1/2"></div>
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Pilih Paket yang Cocok</h2>
                    <p class="text-xl text-gray-400 max-w-2xl mx-auto">Paket satuan untuk fokus satu jalur, atau bundling untuk pengalaman lebih lengkap!</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    {{-- Paket Satuan --}}
                    <div class="bg-white/5 border-2 border-white/10 p-10 rounded-lg hover:border-white/30 transition-colors">
                        <span class="inline-block py-1 px-3 bg-white/10 text-white font-bold text-xs tracking-widest uppercase rounded mb-6">Paket Satuan</span>
                        <h3 class="text-3xl font-extrabold mb-2">Coding <span class="text-gray-500">atau</span> Roblox</h3>
                        <p class="text-gray-400 mb-8">Pilih salah satu jalur &bull; 1 sesi 90 menit</p>

                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-gray-500 text-2xl font-bold">Rp</span>
                            <span class="text-6xl font-extrabold">99.000</span>
                        </div>
                        <p class="text-gray-500 mb-8">per jalur &bull; per sesi</p>

                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">1 sesi live Zoom 90 menit</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">Pilih Coding <strong>atau</strong> Roblox</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">Sertifikat keikutsertaan</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">Rekaman kelas + materi</span>
                            </li>
                        </ul>

                        <a href="https://wa.me/{{ $salesPhone ?? '6281390000332' }}?text=Halo%20MinZen!%20Saya%20ingin%20daftar%20Kelas%20Group%20Promo%20(99K)%20paket%20satuan."
                            class="w-full h-16 flex items-center justify-center border-4 border-white text-white text-lg font-bold rounded-md transition-all duration-200 hover:bg-white hover:text-dark">
                            Paket Rp 99.000
                        </a>
                        <p class="text-gray-600 text-sm mt-4 text-center">*Kuota terbatas &bull; Pembayaran mudah</p>
                    </div>

                    {{-- Paket Bundling --}}
                    <div class="bg-white border-2 border-accent p-10 rounded-lg relative">
                        <span class="inline-block py-1 px-3 bg-accent text-dark font-bold text-xs tracking-widest uppercase rounded mb-6">Terbaik — Hemat!</span>
                        <h3 class="text-3xl font-extrabold mb-2">Coding <span class="text-primary">dan</span> Roblox</h3>
                        <p class="text-gray-500 mb-8">Bundling 2 jalur &bull; 2 sesi 90 menit</p>

                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-gray-500 text-2xl font-bold">Rp</span>
                            <span class="text-6xl font-extrabold text-primary">149.000</span>
                        </div>
                        <p class="text-gray-500 mb-8">Hemat Rp 39.000 dari harga satuan!</p>

                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-700">2 sesi live Zoom (Coding + Roblox)</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-700">Pilih 2 jadwal berbeda</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-700">Sertifikat keikutsertaan</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-700">Rekaman kelas + materi</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-700">Pengalaman lebih lengkap!</span>
                            </li>
                        </ul>

                        <a href="https://wa.me/{{ $salesPhone ?? '6281390000332' }}?text=Halo%20MinZen!%20Saya%20ingin%20daftar%20Kelas%20Group%20Promo%20bundling%20(Coding%20%2B%20Roblox)%20seharga%20Rp%20149.000."
                            class="w-full h-16 flex items-center justify-center bg-accent text-dark text-lg font-bold rounded-md transition-all duration-200 hover:scale-105 hover:bg-primary hover:text-white">
                            Bundling Rp 149.000
                        </a>
                        <p class="text-gray-400 text-sm mt-4 text-center">*Kuota terbatas &bull; Pembayaran mudah</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== TESTIMONIALS / STAT GRID ==================== -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-8">Dibangun untuk anak,<br> oleh pendidik.</h2>
                        <div class="relative">
                            <iconify-icon icon="fa:quote-left" class="text-primary/20 text-6xl absolute -top-6 -left-6"></iconify-icon>
                            <blockquote class="text-2xl font-medium leading-relaxed mb-6 relative z-10">
                                "Anak saya jadi lebih semangat belajar setelah ikut kelas ini. Sekarang dia minta terus bikin game sendiri di Roblox!"
                            </blockquote>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-gray-200 rounded-full"></div>
                                <div>
                                    <div class="font-bold text-lg">Orang Tua Peserta</div>
                                    <div class="text-gray-500">Kelas Group Promo 99K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-8 rounded-lg flex flex-col justify-between aspect-square">
                            <div class="text-5xl font-extrabold text-primary">90m</div>
                            <div class="font-bold text-lg">Durasi per sesi yang intens &amp; efektif</div>
                        </div>
                        <div class="bg-primary p-8 rounded-lg flex flex-col justify-between aspect-square text-white">
                            <div class="text-5xl font-extrabold">2</div>
                            <div class="font-bold text-lg">Jalur belajar: Coding &amp; Roblox</div>
                        </div>
                        <div class="bg-dark p-8 rounded-lg flex flex-col justify-between aspect-square text-white">
                            <div class="text-5xl font-extrabold">Live</div>
                            <div class="font-bold text-lg">Kelas interaktif via Zoom</div>
                        </div>
                        <div class="bg-accent p-8 rounded-lg flex flex-col justify-between aspect-square text-dark">
                            <div class="text-5xl font-extrabold">99K</div>
                            <div class="font-bold text-lg">Harga promo per sesi</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== CTA ==================== -->
        <section class="py-24 bg-primary relative overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 -rotate-12 translate-x-1/2 -translate-y-1/2"></div>
            <div class="max-w-7xl mx-auto px-6 relative z-10 text-center text-white">
                <h2 class="text-5xl md:text-6xl font-extrabold tracking-tight-custom mb-8 max-w-4xl mx-auto">
                    Siap lanjutkan petualangan coding anak?
                </h2>
                <p class="text-xl mb-12 text-white/90 max-w-2xl mx-auto font-medium">
                    Kelas group kecil supaya anak dapat perhatian maksimal. Pilih jalur Coding atau Roblox, atau bundling keduanya!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#harga" class="h-16 px-12 flex items-center justify-center bg-accent text-dark text-lg font-bold rounded-md transition-all duration-200 hover:scale-105 hover:bg-white">
                        Daftar Kelas Group Promo
                    </a>
                    <a href="https://wa.me/{{ $salesPhone ?? '6281390000332' }}?text=Halo%20MinZen!%20Saya%20ingin%20tanya%20tentang%20Kelas%20Group%20Promo%2099K."
                        class="h-16 px-12 flex items-center justify-center border-4 border-white text-white text-lg font-bold rounded-md transition-all duration-200 hover:bg-white hover:text-primary">
                        Tanya via WhatsApp
                    </a>
                </div>
            </div>
        </section>

        <!-- ==================== FAQ ==================== -->
        <section class="py-24 bg-white">
            <div class="max-w-3xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Pertanyaan Umum</h2>
                    <p class="text-xl text-gray-600">Masih ragu? Cek jawabannya dulu, yuk!</p>
                </div>

                <div class="space-y-4" x-data="{ open: null }">
                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden" :class="open === 1 ? 'border-primary' : ''">
                        <button @click="open = open === 1 ? null : 1" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-gray-50 transition-colors">
                            <span>Untuk usia berapa kelas ini?</span>
                            <iconify-icon :icon="open === 1 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 1" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Kelas ini cocok untuk <strong>SD – SMA</strong>. Coding Anak untuk SD (P123 & P456), Coding Junior/Senior untuk SMP/SMA, dan Roblox untuk seluruh jenjang.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden" :class="open === 2 ? 'border-primary' : ''">
                        <button @click="open = open === 2 ? null : 2" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-gray-50 transition-colors">
                            <span>Apakah harus ikut Coding Experience Class (19K) dulu?</span>
                            <iconify-icon :icon="open === 2 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 2" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                <strong>Tidak wajib!</strong> Kelas ini memang dirancang sebagai lanjutan dari 19K, tapi anak baru yang sudah punya minat awal terhadap coding atau Roblox juga boleh langsung ikut.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden" :class="open === 3 ? 'border-primary' : ''">
                        <button @click="open = open === 3 ? null : 3" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-gray-50 transition-colors">
                            <span>Apa bedanya paket satuan dan bundling?</span>
                            <iconify-icon :icon="open === 3 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 3" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                <strong>Paket satuan (Rp99.000):</strong> Pilih satu jalur saja (Coding ATAU Roblox), 1 sesi. <strong>Paket bundling (Rp149.000):</strong> Ikut dua jalur (Coding DAN Roblox), pilih 2 jadwal berbeda. Lebih hemat Rp39.000!
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden" :class="open === 4 ? 'border-primary' : ''">
                        <button @click="open = open === 4 ? null : 4" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-gray-50 transition-colors">
                            <span>Berapa lama durasi kelasnya?</span>
                            <iconify-icon :icon="open === 4 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 4" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Setiap sesi berlangsung <strong>90 menit</strong> secara live via Zoom. Anak akan belajar interaktif bersama tutor.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden" :class="open === 5 ? 'border-primary' : ''">
                        <button @click="open = open === 5 ? null : 5" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-gray-50 transition-colors">
                            <span>Perangkat apa yang dibutuhkan?</span>
                            <iconify-icon :icon="open === 5 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 5" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Cukup <strong>laptop/PC dengan koneksi internet</strong> dan aplikasi Zoom. Untuk Roblox, dibutuhkan laptop/PC (tidak bisa dari HP). Semua tools yang dipakai gratis.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden" :class="open === 6 ? 'border-primary' : ''">
                        <button @click="open = open === 6 ? null : 6" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-gray-50 transition-colors">
                            <span>Apa yang dibawa pulang setelah kelas?</span>
                            <iconify-icon :icon="open === 6 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 6" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Anak mendapatkan <strong>sertifikat keikutsertaan</strong>, <strong>rekaman kelas</strong> untuk diputar ulang, dan <strong>materi pembelajaran</strong>. Untuk kelas Coding, anak juga membawa pulang project yang dibuat.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden" :class="open === 7 ? 'border-primary' : ''">
                        <button @click="open = open === 7 ? null : 7" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-gray-50 transition-colors">
                            <span>Bagaimana cara mendaftar?</span>
                            <iconify-icon :icon="open === 7 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 7" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Klik tombol <strong>"Daftar"</strong> di halaman ini, lalu chat WhatsApp kami. Admin akan membantu proses pendaftaran, pemilihan jadwal, dan pembayaran dengan cepat.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== FOOTER ==================== -->
        <div class="stripe-divider" aria-hidden="true"></div>
        <footer class="overflow-hidden relative rounded-t-2xl inset-0 bg-[#065F46]">
            <img src="https://alhazen.academy/assets/kids/image-footer/bg-footer.webp" alt=""
                class="absolute bottom-0 left-0 w-full object-cover object-bottom opacity-95 pointer-events-none select-none"
                loading="lazy" decoding="async" />

            <div class="relative mx-auto max-w-7xl px-5 sm:px-8 py-12 sm:py-16 text-white">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-y-12 md:gap-x-12 xl:gap-x-16">

                    <!-- Logo & About -->
                    <div class="md:col-span-3 space-y-3 md:space-y-6">
                        <img src="https://alhazen.academy/assets/foot-logo-new.webp" alt="Alhazen Academy" class="h-14 w-auto" loading="lazy"
                            decoding="async" onerror="this.src='https://lh3.googleusercontent.com/d/1_g1o1KBK2dGI9hIJVm0vJx7COTdlDuUC';">
                        <div class="flex items-center gap-3">
                            {{-- Facebook 2-tone SVG --}}
                            <a href="https://www.facebook.com/alhazenacademy" target="_blank" rel="noopener"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                                aria-label="Facebook">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 12c0-6.627-5.373-12-12-12S0 5.373 0 12c0 5.99 4.388 10.954 10.125 11.854V15.47H7.078V12h3.047V9.356c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.875V12h3.328l-.532 3.47h-2.796v8.385C19.612 22.954 24 17.99 24 12z" fill="white" fill-opacity="0.9"/>
                                    <path d="M16.671 15.47L17.203 12h-3.328V9.75c0-.95.465-1.875 1.956-1.875h1.513V4.922s-1.374-.235-2.686-.235c-2.741 0-4.533 1.662-4.533 4.669V12H7.078v3.47h3.047v8.385a12.09 12.09 0 003.75 0V15.47h2.796z" fill="white" fill-opacity="0.5"/>
                                </svg>
                            </a>
                            {{-- Instagram 2-tone SVG --}}
                            <a href="https://instagram.com/alhazenacademy" target="_blank" rel="noopener"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                                aria-label="Instagram">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="20" height="20" rx="5" stroke="white" stroke-opacity="0.5" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="5" stroke="white" stroke-opacity="0.9" stroke-width="2"/>
                                    <circle cx="17.5" cy="6.5" r="1.5" fill="white" fill-opacity="0.9"/>
                                </svg>
                            </a>
                            {{-- TikTok 2-tone SVG --}}
                            <a href="https://www.tiktok.com/@alhazenacademy" target="_blank" rel="noopener"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                                aria-label="TikTok">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.6 5.82A4.27 4.27 0 0113.2 4.15h-3.18v11.64a2.59 2.59 0 01-2.59 2.5 2.6 2.6 0 01-2.6-2.6 2.6 2.6 0 012.6-2.6c.27 0 .54.04.79.1V9.97a5.77 5.77 0 00-.79-.05 5.82 5.82 0 00-5.82 5.82 5.82 5.82 0 005.82 5.82 5.82 5.82 0 005.82-5.82V8.75a7.52 7.52 0 004.37 1.4V6.97a4.28 4.28 0 01-1.02-.15z" fill="white" fill-opacity="0.9"/>
                                    <path d="M16.6 5.82A4.27 4.27 0 0113.2 4.15h-3.18v11.64a2.59 2.59 0 01-2.59 2.5 2.6 2.6 0 01-2.6-2.6 2.6 2.6 0 012.6-2.6c.27 0 .54.04.79.1V9.97a5.77 5.77 0 00-.79-.05 5.82 5.82 0 00-5.82 5.82 5.82 5.82 0 005.82 5.82 5.82 5.82 0 005.82-5.82V8.75a7.52 7.52 0 004.37 1.4V6.97a4.28 4.28 0 01-1.02-.15z" fill="white" fill-opacity="0.4"/>
                                </svg>
                            </a>
                            {{-- LinkedIn 2-tone SVG --}}
                            <a href="https://www.linkedin.com/company/alhazen-academy" target="_blank" rel="noopener"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                                aria-label="LinkedIn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="20" height="20" rx="3" stroke="white" stroke-opacity="0.5" stroke-width="2"/>
                                    <path d="M7 10v7M7 7v.01M11 17v-4.5a2.5 2.5 0 015 0V17" stroke="white" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            {{-- YouTube 2-tone SVG --}}
                            <a href="https://www.youtube.com/@alhazenacademy" target="_blank" rel="noopener"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                                aria-label="YouTube">
                                <svg width="22" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="22" height="16" rx="4" stroke="white" stroke-opacity="0.5" stroke-width="2"/>
                                    <path d="M10 5.5l5 3.5-5 3.5V5.5z" fill="white" fill-opacity="0.9"/>
                                </svg>
                            </a>
                        </div>
                        <p class="text-white/90 text-sm max-w-sm leading-relaxed text-justify">PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.</p>
                    </div>

                    <!-- Program -->
                    <div class="md:col-span-3 md:pl-6 space-y-4">
                        <h4 class="text-xl font-bold tracking-tight-custom">Program</h4>
                        <ul class="space-y-2">
                            <li><a href="https://alhazen.academy/kursus-coding-anak?tab=coding#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Coding</a></li>
                            <li><a href="https://alhazen.academy/program?tab=animation#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Animation</a></li>
                            <li><a href="https://alhazen.academy/program?tab=iot#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">IoT</a></li>
                            <li><a href="https://alhazen.academy/kursus-roblox?tab=roblox#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Roblox</a></li>
                            <li><a href="https://alhazen.academy/program?tab=design#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Design</a></li>
                        </ul>

                        <div class="mt-6">
                            <h4 class="text-xl font-bold tracking-tight-custom mb-4">Hubungi Kami</h4>
                            <ul class="space-y-2 text-white/90 text-sm">
                                <li><a href="tel:+6281390000332" class="hover:underline hover:text-white">+62-813-90000-332</a></li>
                                <li><a href="mailto:info@alhazen.academy" class="hover:underline hover:text-white">info@alhazen.academy</a></li>
                                <li><a href="https://www.alhazen.academy" target="_blank" rel="noopener" class="hover:underline hover:text-white">www.alhazen.academy</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Lainnya -->
                    <div class="md:col-span-3 md:pl-6 space-y-4">
                        <h4 class="text-xl font-bold tracking-tight-custom">Lainnya</h4>
                        <ul class="space-y-2">
                            <li><a href="https://alhazen.academy/program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Program</a></li>
                            <li><a href="https://alhazen.academy/event" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Event</a></li>
                            <li><a href="https://alhazen.academy/artikel" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Artikel</a></li>
                            <li><a href="https://alhazen.academy/tentang-kami" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Tentang Kami</a></li>
                        </ul>

                        <div class="pt-4">
                            <h4 class="text-xl font-bold tracking-tight-custom mb-4">Tersertifikasi</h4>
                            <div class="group relative w-36 rounded-2xl bg-white p-3 overflow-hidden transition hover:ring-2 hover:ring-primary/20">
                                <a href="https://blockchain.stem.org/9faa3d1f-7825-4b4c-8967-525fa6eb08f0#gs.c2374s" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center">
                                    <img alt="Badge Sertifikasi STEM.org" class="ct-image block" width="400" height="400" loading="lazy" decoding="async"
                                        src="https://api.accredible.com/v1/frontend/credential_website_embed_image/badge/108574909"
                                        data-fallback="https://alhazen.academy/assets/stem_badge.png"
                                        onerror="this.onerror=null; this.src=this.dataset.fallback;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="md:col-span-3 md:pl-6 space-y-2">
                        <h4 class="text-xl font-bold tracking-tight-custom mb-4">Kantor Pusat</h4>
                        <a href="https://maps.google.com/?q=Plaza+Kaha%2C+Jl.+KH+Abdullah+Syafei+No.21+C%2C+Bukit+Duri%2C+Kec.+Tebet%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12840" target="_blank" rel="noopener"
                            class="text-sm text-white/90 leading-relaxed underline">Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840</a>
                    </div>
                </div>

                <div class="relative border-t border-white/20 mt-10">
                    <div class="mx-auto max-w-7xl px-5 sm:px-8 py-4 text-center text-xs sm:text-sm text-white/80">
                        © 2026 <strong>PT. Alhazen Global Teknologi</strong>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </footer>

        <!-- ==================== FLOATING WHATSAPP ==================== -->
        <a href="https://wa.me/{{ $salesPhone ?? '6281390000332' }}?text=Halo%20MinZen!%20Saya%20ingin%20daftar%20Kelas%20Group%20Promo%20Coding%20%26%20Roblox%2099K."
            target="_blank" rel="noopener"
            class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#25D366] rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-200"
            aria-label="Chat WhatsApp">
            <iconify-icon icon="lucide:message-circle" class="text-white text-2xl"></iconify-icon>
        </a>

    </div>

    {{-- Alpine.js for FAQ accordion --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
