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
                        primary: '#3B82F6',
                        'primary-dark': '#2563EB',
                        accent: '#F59E0B',
                        emerald: '#10B981',
                        rose: '#EF4444',
                        violet: '#8B5CF6',
                        indigo: '#6366F1',
                        dark: '#111827',
                        surface: '#F3F4F6',
                        outline: '#E5E7EB',
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
        <nav class="sticky top-0 z-50 bg-white border-b-2 border-outline py-4">
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
                        Kelas Spesial September
                    </span>
                    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight-custom leading-[1.05] mb-8">
                        Lanjutkan<br>
                        <span class="inline-block py-3 my-2">
                            <span class="bg-white text-primary ">Petualangan Coding</span>
                        </span><br>
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
                                <div class="w-12 h-12 bg-emerald rounded-full flex items-center justify-center text-white">
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
        <section class="bg-white py-12 border-b-2 border-outline">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4">
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">90m</div>
                        <div class="text-gray-500 font-medium uppercase tracking-widest text-sm">Durasi / Sesi</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-extrabold text-emerald mb-2">Live</div>
                        <div class="text-gray-500 font-medium uppercase tracking-widest text-sm">Via Zoom</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-extrabold text-accent mb-2">2</div>
                        <div class="text-gray-500 font-medium uppercase tracking-widest text-sm">Jalur Belajar</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-extrabold text-rose mb-2">99K</div>
                        <div class="text-gray-500 font-medium uppercase tracking-widest text-sm">Mulai Harga</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== TENTANG ==================== -->
        <section id="tentang" class="py-24 bg-surface">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Apa itu Kelas Group Promo?</h2>
                        <p class="text-xl text-gray-600 leading-relaxed mb-6">
                            Kelas Promo Group Coding &amp; Roblox adalah <strong>program baru yang fresh</strong> untuk anak mulai belajar coding dari nol. Dalam <strong>1 sesi 90 menit live via Zoom</strong>, anak langsung praktik bikin project seru bareng tutor.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8">
                            Tidak perlu pengalaman sebelumnya. Anak tinggal pilih jalur sesuai minat <strong>Coding (sesuai jenjang) atau Roblox Game Development</strong> dan mulai dari dasar sampai jadi.
                        </p>

                        <div class="flex flex-wrap items-center gap-3">
                            <div class="px-4 py-2 bg-primary text-white rounded-md font-bold text-sm">Mulai dari Nol</div>
                            <div class="px-4 py-2 bg-emerald text-white rounded-md font-bold text-sm">100% Ramah Pemula</div>
                            <div class="px-4 py-2 bg-accent text-white rounded-md font-bold text-sm">Langsung Praktik</div>
                        </div>
                    </div>
                    <div class="relative hidden md:block">
                        <div class="w-full aspect-square bg-dark rounded-lg relative overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <iconify-icon icon="lucide:users" class="text-white/20 text-[180px]"></iconify-icon>
                            </div>
                            <div class="absolute bottom-8 left-8 p-6 bg-white rounded-lg">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-12 h-12 bg-dark rounded-full flex items-center justify-center text-accent">
                                        <iconify-icon icon="lucide:star" class="text-2xl"></iconify-icon>
                                    </div>
                                    <div>
                                        <div class="text-dark font-bold">Mulai Dari Nol</div>
                                        <div class="text-gray-500 text-sm">100% Ramah Pemula</div>
                                    </div>
                                </div>
                                <div class="w-full h-3 bg-gray-100 rounded-full">
                                    <div class="w-[100%] h-full bg-primary rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center gap-6 mt-16">
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border-2 border-outline p-8 rounded-lg hover:border-primary transition-colors">
                        <div class="w-14 h-14 bg-primary flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:blocks" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Apa itu Code.org?</h4>
                        <p class="text-gray-600 leading-relaxed">Platform belajar coding visual dengan blok warna-warni. Anak susun puzzle logika tanpa perlu mengetik kode. Cocok untuk kelas 1-3 SD.</p>
                    </div>
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border-2 border-outline p-8 rounded-lg hover:border-emerald transition-colors">
                        <div class="w-14 h-14 bg-emerald flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:cat" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Apa itu Scratch?</h4>
                        <p class="text-gray-600 leading-relaxed">Bahasa visual drag-and-drop untuk bikin game, animasi, dan cerita interaktif sendiri. Cocok untuk kelas 4-6 SD.</p>
                    </div>
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border-2 border-outline p-8 rounded-lg hover:border-accent transition-colors">
                        <div class="w-14 h-14 bg-accent flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:terminal" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Apa itu Python?</h4>
                        <p class="text-gray-600 leading-relaxed">Bahasa pemrograman teks populer yang mudah dibaca. Anak belajar logika serius dan bikin program sungguhan. Cocok untuk SMP/SMA.</p>
                    </div>
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border-2 border-outline p-8 rounded-lg hover:border-violet transition-colors">
                        <div class="w-14 h-14 bg-violet flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:globe" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Apa itu Pemrograman Web?</h4>
                        <p class="text-gray-600 leading-relaxed">Belajar bikin website sendiri dengan HTML, CSS, dan JavaScript. Anak paham cara kerja situs yang dibuka tiap hari. Cocok untuk SMP/SMA.</p>
                    </div>
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border-2 border-outline p-8 rounded-lg hover:border-rose transition-colors">
                        <div class="w-14 h-14 bg-rose flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:gamepad-2" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Apa itu Roblox?</h4>
                        <p class="text-gray-600 leading-relaxed">Belajar game development sungguhan di Roblox Studio. Bukan cuma main, tapi desain level, scripting Lua, dan logika interaksi objek.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== PILIHAN JALUR (FEATURES) ==================== -->
        <section id="jalur" class="py-24 bg-surface">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Pilih Jalur yang Sesuai Minat</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">Dua jalur belajar yang bisa dipilih sesuai passion anak.<br>Bisa pilih satu atau bundling keduanya!</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    {{-- Card Coding --}}
                    <div class="group relative bg-primary p-10 rounded-lg transition-all duration-200 hover:scale-[1.02]">
                        <div class="absolute -top-5 -right-5 rotate-6 bg-accent text-dark font-extrabold px-5 py-3 rounded-full border-4 border-white shadow-lg text-sm md:text-base">
                            Mulai Rp 99.000
                        </div>
                        <div class="w-16 h-16 bg-dark flex items-center justify-center rounded-lg mb-8 transition-transform duration-200 group-hover:scale-110">
                            <iconify-icon icon="lucide:code" class="text-white text-3xl"></iconify-icon>
                        </div>
                        <h3 class="text-white text-2xl font-bold mb-4">Coding</h3>
                        <p class="text-white leading-relaxed mb-6">
                            Pelajari logika pemrograman &amp; buat project sendiri. Materi disesuaikan jenjang anak.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-white">
                                <iconify-icon icon="lucide:check" class="text-lg flex-shrink-0"></iconify-icon>
                                Kelas 1-3 SD: Code.org (blok visual)
                            </li>
                            <li class="flex items-center gap-3 text-white">
                                <iconify-icon icon="lucide:check" class="text-lg flex-shrink-0"></iconify-icon>
                                Kelas 4-6 SD: Scratch (game &amp; animasi)
                            </li>
                            <li class="flex items-center gap-3 text-white">
                                <iconify-icon icon="lucide:check" class="text-lg flex-shrink-0"></iconify-icon>
                                SMP/SMA: Python &amp; Web Development
                            </li>
                        </ul>
                    </div>

                    {{-- Card Roblox --}}
                    <div class="group relative bg-emerald p-10 rounded-lg transition-all duration-200 hover:scale-[1.02]">
                        <div class="absolute -top-5 -right-5 rotate-6 bg-accent text-dark font-extrabold px-5 py-3 rounded-full border-4 border-white shadow-lg text-sm md:text-base">
                            Mulai Rp 99.000
                        </div>
                        <div class="w-16 h-16 bg-dark flex items-center justify-center rounded-lg mb-8 transition-transform duration-200 group-hover:scale-110">
                            <iconify-icon icon="lucide:gamepad-2" class="text-white text-3xl"></iconify-icon>
                        </div>
                        <h3 class="text-white text-2xl font-bold mb-4">Roblox Game Development</h3>
                        <p class="text-white leading-relaxed mb-6">
                            Belajar bikin game sendiri di Roblox Studio. Bukan cuma main game, tapi game development sungguhan!
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-white">
                                <iconify-icon icon="lucide:check" class="text-lg flex-shrink-0"></iconify-icon>
                                Desain level &amp; dunia game
                            </li>
                            <li class="flex items-center gap-3 text-white">
                                <iconify-icon icon="lucide:check" class="text-lg flex-shrink-0"></iconify-icon>
                                Scripting dasar (Lua)
                            </li>
                            <li class="flex items-center gap-3 text-white">
                                <iconify-icon icon="lucide:check" class="text-lg flex-shrink-0"></iconify-icon>
                                Logika interaksi objek
                            </li>
                            <li class="flex items-center gap-3 text-white">
                                <iconify-icon icon="lucide:check" class="text-lg flex-shrink-0"></iconify-icon>
                                Cocok untuk semua jenjang
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== MANFAAT (CURRICULUM-STYLE) ==================== -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
                    <div class="max-w-2xl">
                        <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight-custom mb-6">Kenapa Anak Perlu Belajar Coding?</h2>
                        <p class="text-xl text-gray-600">Kami tidak sekadar mengajak anak main game. Berikut nilai pendidikan yang didapat.</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="border-2 border-outline rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-primary transition-colors">
                        <div class="w-16 h-16 bg-surface flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:brain" class="text-primary text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-primary mb-1">Logika Berpikir</h4>
                            <h3 class="text-2xl font-bold mb-2">Computational Thinking</h3>
                            <p class="text-gray-500">Anak belajar memecah masalah besar menjadi langkah-langkah kecil yang sistematis, mengenali pola, dan menyusun alur logis.</p>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-emerald transition-colors">
                        <div class="w-16 h-16 bg-surface flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:palette" class="text-emerald text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-emerald mb-1">Kreativitas</h4>
                            <h3 class="text-2xl font-bold mb-2">Bukan Sekadar Mengikuti Instruksi</h3>
                            <p class="text-gray-500">Anak menciptakan game, animasi, atau cerita interaktifnya sendiri di Scratch, Code.org, maupun Roblox Studio.</p>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-accent transition-colors">
                        <div class="w-16 h-16 bg-surface flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:trophy" class="text-accent text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-accent mb-1">Growth Mindset</h4>
                            <h3 class="text-2xl font-bold mb-2">Belajar Pantang Menyerah</h3>
                            <p class="text-gray-500">Menemukan bug adalah hal biasa. Anak diajarkan cara mencari solusi tanpa frustrasi, melatih ketahanan mental.</p>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-rose transition-colors">
                        <div class="w-16 h-16 bg-surface flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:monitor-smartphone" class="text-rose text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-rose mb-1">Paham Teknologi</h4>
                            <h3 class="text-2xl font-bold mb-2">Dari Konsumen Jadi Kreator</h3>
                            <p class="text-gray-500">Anak jadi paham bahwa aplikasi/game yang mereka mainkan sehari-hari dibuat oleh manusia, memicu rasa penasaran ilmiah.</p>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg p-8 flex flex-col md:flex-row gap-8 items-start md:items-center hover:border-violet transition-colors">
                        <div class="w-16 h-16 bg-surface flex-shrink-0 flex items-center justify-center rounded-md">
                            <iconify-icon icon="lucide:rocket" class="text-violet text-3xl"></iconify-icon>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-lg font-bold uppercase tracking-widest text-violet mb-1">Bekal Masa Depan</h4>
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

                <div class="flex flex-wrap justify-center gap-6 max-w-5xl mx-auto">
                    {{-- Card 1 --}}
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] group bg-white border-2 border-outline p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-primary">
                        <div class="w-14 h-14 bg-primary flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:code" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Annisa</h4>
                        <p class="text-primary font-semibold text-sm mb-3">Coding Anak &bull; Kelas 1-3 SD</p>
                        <p class="text-gray-900 font-bold">Kamis, 16.00 - 17.30</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Code.org</p>
                    </div>

                    {{-- Card 2 --}}
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] group bg-white border-2 border-outline p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-emerald">
                        <div class="w-14 h-14 bg-emerald flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:code" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Hilyah</h4>
                        <p class="text-emerald font-semibold text-sm mb-3">Coding Anak &bull; Kelas 4-6 SD</p>
                        <p class="text-gray-900 font-bold">Kamis, 16.30 - 18.00</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Scratch</p>
                    </div>

                    {{-- Card 3 --}}
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] group bg-white border-2 border-outline p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-accent">
                        <div class="w-14 h-14 bg-accent flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:code" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Miftah</h4>
                        <p class="text-accent font-semibold text-sm mb-3">Coding Junior/Senior &bull; SMP/SMA</p>
                        <p class="text-gray-900 font-bold">Selasa, 15.30 - 17.00</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Python / Web Dev</p>
                    </div>

                    {{-- Card 4 --}}
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] group bg-white border-2 border-outline p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-rose">
                        <div class="w-14 h-14 bg-rose flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:gamepad-2" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Adam</h4>
                        <p class="text-rose font-semibold text-sm mb-3">Roblox Game Development</p>
                        <p class="text-gray-900 font-bold">Senin 15.30 / Rabu 16.00</p>
                        <p class="text-gray-500 text-sm">WIB &bull; Materi: Roblox Studio</p>
                    </div>

                    {{-- Card 5 --}}
                    <div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] group bg-white border-2 border-outline p-8 rounded-lg transition-all duration-200 hover:scale-[1.02] hover:border-violet">
                        <div class="w-14 h-14 bg-violet flex items-center justify-center rounded-lg mb-6">
                            <iconify-icon icon="lucide:gamepad-2" class="text-white text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-bold text-lg mb-1">Kak Husna</h4>
                        <p class="text-violet font-semibold text-sm mb-3">Roblox Game Development</p>
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

                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-8">
                    {{-- Paket Coding --}}
                    <div class="bg-white/5 border-2 border-white/10 p-10 rounded-lg hover:border-white/30 transition-colors">
                        <span class="inline-block py-1 px-3 bg-primary text-white font-bold text-xs tracking-widest uppercase rounded mb-6">Paket Coding</span>
                        <h3 class="text-3xl font-extrabold mb-2">Coding</h3>
                        <p class="text-gray-400 mb-8">1 jalur &bull; 1 sesi 90 menit</p>

                        <p class="text-gray-500 text-xl font-bold line-through mb-2">Rp 150.000</p>
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-gray-500 text-2xl font-bold">Rp</span>
                            <span class="text-6xl font-extrabold">99.000</span>
                        </div>
                        <p class="text-gray-500 mb-8">per paket &bull; per sesi</p>

                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">1 sesi live Zoom 90 menit</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-primary text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">Jalur Coding sesuai jenjang</span>
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

                        <a target="_blank" href="https://goakal.com/alhazenacademy/coding-roblox/r5hoa/apply?promo=voucher99"
                            class="w-full h-16 flex items-center justify-center border-4 border-white text-white text-lg font-bold rounded-md transition-all duration-200 hover:bg-white hover:text-dark">
                            Paket Rp 99.000
                        </a>
                        <p class="text-gray-600 text-sm mt-4 text-center">*Kuota terbatas &bull; Pembayaran mudah</p>
                    </div>
                    {{-- Paket Roblox --}}
                    <div class="bg-white/5 border-2 border-white/10 p-10 rounded-lg hover:border-white/30 transition-colors">
                        <span class="inline-block py-1 px-3 bg-emerald text-white font-bold text-xs tracking-widest uppercase rounded mb-6">Paket Roblox</span>
                        <h3 class="text-3xl font-extrabold mb-2">Roblox</h3>
                        <p class="text-gray-400 mb-8">1 jalur &bull; 1 sesi 90 menit</p>

                        <p class="text-gray-500 text-xl font-bold line-through mb-2">Rp 150.000</p>
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-gray-500 text-2xl font-bold">Rp</span>
                            <span class="text-6xl font-extrabold">99.000</span>
                        </div>
                        <p class="text-gray-500 mb-8">per paket &bull; per sesi</p>

                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-emerald text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">1 sesi live Zoom 90 menit</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-emerald text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">Jalur Roblox Game Development</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-emerald text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">Sertifikat keikutsertaan</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-emerald text-xl flex-shrink-0"></iconify-icon>
                                <span class="text-gray-300">Rekaman kelas + materi</span>
                            </li>
                        </ul>

                        <a target="_blank" href="https://goakal.com/alhazenacademy/coding-roblox/g1too/apply?promo=voucher99"
                            class="w-full h-16 flex items-center justify-center border-4 border-white text-white text-lg font-bold rounded-md transition-all duration-200 hover:bg-white hover:text-dark">
                            Paket Rp 99.000
                        </a>
                        <p class="text-gray-600 text-sm mt-4 text-center">*Kuota terbatas &bull; Pembayaran mudah</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    {{-- Paket Bundling --}}
                    <div class="bg-white border-2 border-accent p-10 rounded-lg relative w-full md:max-w-lg">
                        <span class="inline-block py-1 px-3 bg-accent text-dark font-bold text-xs tracking-widest uppercase rounded mb-6">Terbaik — Hemat!</span>
                        <h3 class="text-3xl font-extrabold mb-2 text-dark">
                            Coding dan Roblox
                        </h3>
                        <p class="text-gray-500 mb-8">Bundling 2 jalur &bull; 2 sesi 90 menit</p>

                        <p class="text-gray-400 text-xl font-bold line-through mb-2">Rp 300.000</p>
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-gray-500 text-2xl font-bold">Rp</span>
                            <span class="text-6xl font-extrabold text-dark">149.000</span>
                        </div>
                        <p class="text-gray-500 mb-8">Hemat Rp 151.000 dari harga normal!</p>

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

                        <a target="_blank" href="https://goakal.com/alhazenacademy/coding-roblox/g75fe/apply?promo=voucher99"
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
                        <div class="bg-surface p-8 rounded-lg flex flex-col justify-between aspect-square">
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
        <section class="py-24 bg-emerald relative overflow-hidden">
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
                        class="h-16 px-12 flex items-center justify-center border-4 border-white text-white text-lg font-bold rounded-md transition-all duration-200 hover:bg-white hover:text-emerald">
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
                    <div class="border-2 border-outline rounded-lg overflow-hidden" :class="open === 1 ? 'border-primary' : ''">
                        <button @click="open = open === 1 ? null : 1" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-surface transition-colors">
                            <span>Untuk usia berapa kelas ini?</span>
                            <iconify-icon :icon="open === 1 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 1" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Kelas ini cocok untuk <strong>SD – SMA</strong>. Coding Anak untuk SD (P123 & P456), Coding Junior/Senior untuk SMP/SMA, dan Roblox untuk seluruh jenjang.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg overflow-hidden" :class="open === 2 ? 'border-primary' : ''">
                        <button @click="open = open === 2 ? null : 2" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-surface transition-colors">
                            <span>Apakah harus ikut Coding Experience Class (19K) dulu?</span>
                            <iconify-icon :icon="open === 2 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 2" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                <strong>Tidak wajib!</strong> Kelas ini memang dirancang sebagai lanjutan dari 19K, tapi anak baru yang sudah punya minat awal terhadap coding atau Roblox juga boleh langsung ikut.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg overflow-hidden" :class="open === 3 ? 'border-primary' : ''">
                        <button @click="open = open === 3 ? null : 3" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-surface transition-colors">
                            <span>Apa bedanya paket satuan dan bundling?</span>
                            <iconify-icon :icon="open === 3 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 3" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                <ul class="list-disc pl-5 space-y-2">
                                    <li><strong>Paket satuan (Rp99.000):</strong> Pilih satu jalur saja (Coding ATAU Roblox), 1 sesi.</li>
                                    <li><strong>Paket bundling (Rp149.000):</strong> Ikut dua jalur (Coding DAN Roblox), pilih 2 jadwal berbeda. <strong>[Lebih hemat Rp39.000!]</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg overflow-hidden" :class="open === 4 ? 'border-primary' : ''">
                        <button @click="open = open === 4 ? null : 4" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-surface transition-colors">
                            <span>Berapa lama durasi kelasnya?</span>
                            <iconify-icon :icon="open === 4 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 4" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Setiap sesi berlangsung <strong>90 menit</strong> secara live via Zoom. Anak akan belajar interaktif bersama tutor.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg overflow-hidden" :class="open === 5 ? 'border-primary' : ''">
                        <button @click="open = open === 5 ? null : 5" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-surface transition-colors">
                            <span>Perangkat apa yang dibutuhkan?</span>
                            <iconify-icon :icon="open === 5 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 5" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Cukup <strong>laptop/PC dengan koneksi internet</strong> dan aplikasi Zoom. Untuk Roblox, dibutuhkan laptop/PC (tidak bisa dari HP). Semua tools yang dipakai gratis.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg overflow-hidden" :class="open === 6 ? 'border-primary' : ''">
                        <button @click="open = open === 6 ? null : 6" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-surface transition-colors">
                            <span>Apa yang dibawa pulang setelah kelas?</span>
                            <iconify-icon :icon="open === 6 ? 'lucide:minus' : 'lucide:plus'" class="text-2xl text-primary flex-shrink-0"></iconify-icon>
                        </button>
                        <div x-show="open === 6" x-collapse>
                            <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                Anak mendapatkan <strong>sertifikat keikutsertaan</strong>, <strong>rekaman kelas</strong> untuk diputar ulang, dan <strong>materi pembelajaran</strong>. Untuk kelas Coding, anak juga membawa pulang project yang dibuat.
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-outline rounded-lg overflow-hidden" :class="open === 7 ? 'border-primary' : ''">
                        <button @click="open = open === 7 ? null : 7" class="w-full p-6 flex items-center justify-between text-left font-bold text-lg hover:bg-surface transition-colors">
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
        <footer class="bg-dark text-white py-20 font-sans">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-4 gap-12 mb-20">
                    <div class="col-span-2 space-y-6">
                        <img src="https://alhazen.academy/assets/foot-logo-new.webp" alt="Alhazen Academy" class="h-14 w-auto mb-8" loading="lazy" decoding="async" onerror="this.src='https://lh3.googleusercontent.com/d/1_g1o1KBK2dGI9hIJVm0vJx7COTdlDuUC';">
                        <p class="text-gray-400 text-xl max-w-sm mb-8 leading-relaxed">
                            PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.
                        </p>
                        <div class="flex gap-4">
                            <a href="https://www.facebook.com/alhazenacademy" target="_blank" rel="noopener" class="w-12 h-12 bg-white/10 flex items-center justify-center rounded-md hover:bg-primary transition-colors" aria-label="Facebook">
                                <iconify-icon icon="lucide:facebook" class="text-xl"></iconify-icon>
                            </a>
                            <a href="https://instagram.com/alhazenacademy" target="_blank" rel="noopener" class="w-12 h-12 bg-white/10 flex items-center justify-center rounded-md hover:bg-primary transition-colors" aria-label="Instagram">
                                <iconify-icon icon="lucide:instagram" class="text-xl"></iconify-icon>
                            </a>
                            <a href="https://www.tiktok.com/@alhazenacademy" target="_blank" rel="noopener" class="w-12 h-12 bg-white/10 flex items-center justify-center rounded-md hover:bg-primary transition-colors" aria-label="TikTok">
                                <iconify-icon icon="lucide:video" class="text-xl"></iconify-icon>
                            </a>
                            <a href="https://www.linkedin.com/company/alhazen-academy" target="_blank" rel="noopener" class="w-12 h-12 bg-white/10 flex items-center justify-center rounded-md hover:bg-primary transition-colors" aria-label="LinkedIn">
                                <iconify-icon icon="lucide:linkedin" class="text-xl"></iconify-icon>
                            </a>
                            <a href="https://www.youtube.com/@alhazenacademy" target="_blank" rel="noopener" class="w-12 h-12 bg-white/10 flex items-center justify-center rounded-md hover:bg-primary transition-colors" aria-label="YouTube">
                                <iconify-icon icon="lucide:youtube" class="text-xl"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold mb-6">Program</h5>
                        <ul class="space-y-4 text-gray-400 font-medium">
                            <li><a href="https://alhazen.academy/kursus-coding-anak?tab=coding#program" target="_blank" rel="noopener" class="hover:text-white transition-colors">Coding</a></li>
                            <li><a href="https://alhazen.academy/program?tab=animation#program" target="_blank" rel="noopener" class="hover:text-white transition-colors">Animation</a></li>
                            <li><a href="https://alhazen.academy/program?tab=iot#program" target="_blank" rel="noopener" class="hover:text-white transition-colors">IoT</a></li>
                            <li><a href="https://alhazen.academy/kursus-roblox?tab=roblox#program" target="_blank" rel="noopener" class="hover:text-white transition-colors">Roblox</a></li>
                            <li><a href="https://alhazen.academy/program?tab=design#program" target="_blank" rel="noopener" class="hover:text-white transition-colors">Design</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold mb-6">Lainnya</h5>
                        <ul class="space-y-4 text-gray-400 font-medium mb-8">
                            <li><a href="https://alhazen.academy/program" target="_blank" rel="noopener" class="hover:text-white transition-colors">Program</a></li>
                            <li><a href="https://alhazen.academy/event" target="_blank" rel="noopener" class="hover:text-white transition-colors">Event</a></li>
                            <li><a href="https://alhazen.academy/artikel" target="_blank" rel="noopener" class="hover:text-white transition-colors">Artikel</a></li>
                            <li><a href="https://alhazen.academy/tentang-kami" target="_blank" rel="noopener" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        </ul>
                        <h5 class="text-xl font-bold mb-4">Hubungi Kami</h5>
                        <ul class="space-y-2 text-gray-400 font-medium text-sm">
                            <li><a href="tel:+6281390000332" class="hover:text-white transition-colors">+62-813-90000-332</a></li>
                            <li><a href="mailto:info@alhazen.academy" class="hover:text-white transition-colors">info@alhazen.academy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between gap-6 text-gray-500 font-medium">
                    <p>© 2026 <strong>PT. Alhazen Global Teknologi</strong>. All rights reserved.</p>
                    <div class="flex gap-8">
                        <a href="https://maps.google.com/?q=Plaza+Kaha%2C+Jl.+KH+Abdullah+Syafei+No.21+C%2C+Bukit+Duri%2C+Kec.+Tebet%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12840" target="_blank" rel="noopener" class="hover:text-white transition-colors text-sm">Kantor Pusat: Plaza Kaha, Tebet, Jakarta Selatan</a>
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
