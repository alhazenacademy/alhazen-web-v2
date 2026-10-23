@php
    $salesPhone = $salesPhone ?? optional(\App\Models\SalesNumber::active()->inRandomOrder()->first())->phone_number;
    $waText = urlencode('Halo MinZen, Saya Mau Tanya Info & Pendaftaran Alhazen Holiday Bootcamp 2026.');
    $waUrl = 'https://wa.me/' . ($salesPhone ?: '6281234567890') . '?text=' . $waText;

    // Data footer (Alhazen design) — aman jika tidak dikirim dari route
    $socials = collect($socials ?? []);
    $contact = $contact ?? ['phone' => '', 'email' => '', 'site' => 'alhazenacademy.com'];
    $address = $address ?? '';
    $programLinks = $programLinks ?? [];
@endphp
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alhazen Holiday Bootcamp 2026 — Liburan Seru Bikin Karya Digital & Portofolio</title>
    <meta name="description" content="Program liburan sekolah 8 hari intensif online via Zoom untuk jenjang SD–SMA. Bikin karya 3D di Roblox Studio, animasi Scratch, dan pemrograman Python bareng mentor Alhazen!">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="Alhazen Holiday Bootcamp 2026 — Liburan Seru Bikin Karya Digital & Portofolio">
    <meta property="og:description" content="Program liburan sekolah 8 hari intensif online via Zoom untuk SD–SMA. Bikin karya 3D di Roblox Studio, animasi Scratch, dan pemrograman Python bareng mentor Alhazen!">
    <meta property="og:image" content="{{ asset('assets/custom/holiday_bootcamp/poster.jpeg') }}">
    <link rel="icon" href="{{ asset('assets/logo-new.webp') }}" type="image/x-icon">

    <!-- Google Fonts: Fredoka (Headings) & Poppins (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        main: '#00AF91',
                        'main-dark': '#008A72',
                        canvas: '#FBF4EE',
                        accent: '#FFBD01',
                        'accent-dark': '#D99F00',
                        scratch: '#FB4F27',
                        'scratch-dark': '#CF3A17',
                        roblox: '#FFBD01',
                        'roblox-dark': '#D99F00',
                        python: '#2D6DD8',
                        'python-dark': '#1F4FB0',
                        ink: '#1E293B',
                        muted: '#475569',
                    },
                    fontFamily: {
                        heading: ['Fredoka', 'sans-serif'],
                        body: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Iconify CDN -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!-- Alpine.js CDN for interactive FAQ -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Notebook Graph Paper Background Texture (Transparent Subtle Grid) */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FBF4EE;
            background-image:
                linear-gradient(rgba(205, 190, 175, 0.20) 1.5px, transparent 1.5px),
                linear-gradient(90deg, rgba(205, 190, 175, 0.20) 1.5px, transparent 1.5px);
            background-size: 26px 26px;
            color: #1E293B;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, .font-heading {
            font-family: 'Fredoka', cursive, sans-serif;
        }

        /* Claymorphism Cards */
        .clay-card {
            background: #ffffff;
            border-radius: 28px;
            box-shadow:
                0 16px 32px -8px rgba(0, 0, 0, 0.06),
                inset 0 3px 6px rgba(255, 255, 255, 0.95),
                inset 0 -3px 6px rgba(0, 0, 0, 0.03);
            transition: all 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .clay-card:hover {
            transform: translateY(-4px);
            box-shadow:
                0 22px 36px -8px rgba(0, 0, 0, 0.09),
                inset 0 3px 6px rgba(255, 255, 255, 0.95),
                inset 0 -3px 6px rgba(0, 0, 0, 0.03);
        }

        /* Clay Pill Badge */
        .clay-pill {
            box-shadow:
                0 4px 10px rgba(0, 0, 0, 0.05),
                inset 0 2px 4px rgba(255, 255, 255, 0.8),
                inset 0 -2px 4px rgba(0, 0, 0, 0.04);
        }

        /* Tactile 3D Buttons (Duolingo Style Push-Button) */
        .btn-3d {
            transition: transform 0.1s ease, box-shadow 0.1s ease;
            user-select: none;
        }
        .btn-3d:active {
            transform: translateY(4px);
        }

        /* Specific Button Shadows */
        .btn-main {
            background-color: #00AF91;
            color: #ffffff;
            box-shadow: 0 5px 0 0 #008A72;
        }
        .btn-main:active {
            box-shadow: 0 1px 0 0 #008A72;
        }

        .btn-scratch {
            background-color: #FB4F27;
            color: #ffffff;
            box-shadow: 0 5px 0 0 #CF3A17;
        }
        .btn-scratch:active {
            box-shadow: 0 1px 0 0 #CF3A17;
        }

        .btn-roblox {
            background-color: #FFBD01;
            color: #1E293B;
            box-shadow: 0 5px 0 0 #D99F00;
        }
        .btn-roblox:active {
            box-shadow: 0 1px 0 0 #D99F00;
        }

        .btn-python {
            background-color: #2D6DD8;
            color: #ffffff;
            box-shadow: 0 5px 0 0 #1F4FB0;
        }
        .btn-python:active {
            box-shadow: 0 1px 0 0 #1F4FB0;
        }

        .btn-white {
            background-color: #ffffff;
            color: #1E293B;
            box-shadow: 0 5px 0 0 #CBD5E1;
            border: 2px solid #E2E8F0;
        }
        .btn-white:active {
            box-shadow: 0 1px 0 0 #CBD5E1;
        }

        /* Floating decoration animation */
        @keyframes gentle-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .animate-float {
            animation: gentle-bounce 3.5s ease-in-out infinite;
        }
        .animate-float-delayed {
            animation: gentle-bounce 4s ease-in-out infinite 1.5s;
        }
    </style>
</head>
<body class="bg-canvas text-ink antialiased">

    <!-- ==================== STICKY NAVIGATION ==================== -->
    <header class="sticky top-0 z-50 bg-[#FBF4EE]/90 backdrop-blur-md border-b-2 border-[#E2E8F0] transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('assets/nav-logo-new.webp') }}" alt="Alhazen Academy" class="h-10 sm:h-11 w-auto" onerror="this.onerror=null; this.src='https://akalstorageaccount1.blob.core.windows.net/akalcontainer1/logo%20update.png'">
            </a>

            <!-- Anchor Nav -->
            <nav class="hidden lg:flex items-center gap-8 font-semibold text-muted text-sm lg:text-base">
                <a href="#tentang" class="hover:text-main transition-colors">Tentang Program</a>
                <a href="#kurikulum" class="hover:text-main transition-colors">Kurikulum 8 Hari</a>
                <a href="#jalur" class="hover:text-main transition-colors">Pilihan Kelas</a>
                <a href="#Mentor" class="hover:text-main transition-colors">Mentor</a>
                <a href="#faq" class="hover:text-main transition-colors">FAQ</a>
            </nav>

            <!-- Quick Action CTA -->
            <div class="flex items-center gap-3">
                <a href="#jalur" class="btn-3d btn-main px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2">
                    <iconify-icon icon="lucide:sparkles" class="text-base"></iconify-icon>
                    <span>Pilih Kelas</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ==================== HERO SECTION ==================== -->
    <section class="relative pt-10 pb-20 md:pt-16 md:pb-28 overflow-hidden">
        <!-- Background Bubbles Decoration -->
        <div class="absolute -top-16 -left-16 w-80 h-80 bg-emerald-100/60 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 -right-20 w-96 h-96 bg-amber-100/70 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">

                <!-- Left Column: Copywriting & CTA -->
                <div class="lg:col-span-7 text-center lg:text-left space-y-6">

                    <!-- Campaign Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/20 border-2 border-accent text-ink font-bold text-xs sm:text-sm clay-pill">
                        <iconify-icon icon="lucide:rocket" class="text-scratch text-base"></iconify-icon>
                        <span>#HolidayCodingClassProgram 2026</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-ink leading-[1.15] tracking-tight">
                        Liburan Tetap <span class="text-main underline decoration-accent decoration-wavy decoration-2">Produktif</span>, Berkarya & <span class="text-scratch">Raih Hadiah!</span>
                    </h1>

                    <!-- Persuasive Subtitle -->
                    <p class="text-base sm:text-lg lg:text-xl text-muted font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Liburan produktif dengan pengalaman belajar teknologi yang seru! Selama 8 hari, anak mengeksplorasi kreasi dunia 3D, animasi digital, dan pemrograman Python bersama mentor yang ramah anak.
                    </p>

                    <!-- Key Event Pills -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3 pt-2">
                        <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-2xl border-2 border-[#E2E8F0] shadow-sm text-xs sm:text-sm font-semibold">
                            <iconify-icon icon="lucide:calendar" class="text-main text-lg"></iconify-icon>
                            <span>21 Des 2026 – 7 Jan 2027</span>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-2xl border-2 border-[#E2E8F0] shadow-sm text-xs sm:text-sm font-semibold">
                            <iconify-icon icon="lucide:video" class="text-python text-lg"></iconify-icon>
                            <span>Live Online via Zoom</span>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-2xl border-2 border-[#E2E8F0] shadow-sm text-xs sm:text-sm font-semibold">
                            <iconify-icon icon="lucide:award" class="text-accent text-lg"></iconify-icon>
                            <span>Hadiah Menarik Untuk 3 Karya Terbaik</span>
                        </div>
                    </div>

                    <!-- Call To Action Group -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#jalur" class="btn-3d btn-main px-8 py-4 rounded-2xl font-bold text-lg flex items-center justify-center gap-3 w-full sm:w-auto">
                            <span>Daftar Kelas Sekarang</span>
                            <iconify-icon icon="lucide:arrow-right" class="text-xl"></iconify-icon>
                        </a>
                        <a href="{{ $waUrl }}" target="_blank" class="btn-3d btn-white px-7 py-4 rounded-2xl font-bold text-base flex items-center justify-center gap-2.5 w-full sm:w-auto text-ink">
                            <iconify-icon icon="logos:whatsapp-icon" class="text-xl"></iconify-icon>
                            <span>Konsultasi WhatsApp</span>
                        </a>
                    </div>

                    <!-- Mini Trust Factor -->
                    <div class="pt-2 flex items-center justify-center lg:justify-start gap-3 text-xs sm:text-sm text-muted">
                        <span class="flex text-accent text-sm">★★★★★</span>
                        <span class="font-medium">100% Ramah Pemula & Bebas Pengalaman Coding</span>
                    </div>

                </div>

                <!-- Right Column: Visual Hero with Floating Badges -->
                <div class="lg:col-span-5 relative flex justify-center">

                    <!-- Decorative Mascot/Kids Image Container -->
                    <div class="relative w-full max-w-md">
                        <!-- Backdrop Clay Frame -->
                        <div class="clay-card border-4 border-white p-3 sm:p-4 bg-white relative z-10 overflow-hidden">
                            <img src="{{ asset('assets/custom/holiday_bootcamp/poster.jpeg') }}" alt="Alhazen Holiday Bootcamp 2026" class="w-full h-auto rounded-2xl object-cover" onerror="this.onerror=null; this.src='https://akalstorageaccount1.blob.core.windows.net/akalcontainer1/alhazenacademy/33sfTJUPfIuh4sR3iQGXI'">
                        </div>

                        <!-- Floating Badge 1: Controller (Left Top) -->
                        <div class="absolute -top-6 -left-6 z-20 hidden sm:flex items-center gap-2 bg-white px-4 py-2.5 rounded-2xl border-2 border-scratch shadow-lg clay-pill animate-float">
                            <img src="{{ asset('assets/custom/holiday_bootcamp/controller.webp') }}" alt="Controller" class="w-8 h-8 object-contain">
                            <div class="text-left">
                                <p class="text-[10px] text-muted font-bold uppercase tracking-wider">Hasil Karya</p>
                                <p class="text-xs font-heading font-bold text-scratch">Karya Digital Sendiri!</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2: Prize Money (Bottom Right) -->
                        <div class="absolute -bottom-6 -right-6 z-20 flex items-center gap-2.5 bg-white px-4 py-3 rounded-2xl border-2 border-accent shadow-xl clay-pill animate-float-delayed">
                            <img src="{{ asset('assets/custom/holiday_bootcamp/money.webp') }}" alt="Hadiah" class="w-10 h-10 object-contain">
                            <div class="text-left">
                                <span class="bg-accent/30 text-ink text-[10px] font-bold px-2 py-0.5 rounded-full">Showcase Day</span>
                                <p class="text-xs sm:text-sm font-heading font-bold text-ink">Hadiah Uang Tunai, Voucher kelas, E-sertifikat</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== 4 METRIC HIGHLIGHT PILLS ==================== -->
    <section class="py-6 relative z-20 -mt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

                <div class="clay-card p-5 border-2 border-emerald-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-main/15 text-main flex items-center justify-center shrink-0">
                        <iconify-icon icon="lucide:clock" class="text-2xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-ink">8 Hari Belajar</h4>
                        <p class="text-xs text-muted">Intensif & terarah</p>
                    </div>
                </div>

                <div class="clay-card p-5 border-2 border-sky-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-python/15 text-python flex items-center justify-center shrink-0">
                        <iconify-icon icon="lucide:video" class="text-2xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-ink">Online Via Zoom</h4>
                        <p class="text-xs text-muted">Belajar dari rumah</p>
                    </div>
                </div>

                <div class="clay-card p-5 border-2 border-amber-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-accent/20 text-ink flex items-center justify-center shrink-0">
                        <iconify-icon icon="lucide:users" class="text-2xl text-accent-dark"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-ink">Grup Interaktif</h4>
                        <p class="text-xs text-muted">Teman baru & kolaboratif</p>
                    </div>
                </div>

                <div class="clay-card p-5 border-2 border-orange-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-scratch/15 text-scratch flex items-center justify-center shrink-0">
                        <iconify-icon icon="lucide:trophy" class="text-2xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-ink">Karya Nyata</h4>
                        <p class="text-xs text-muted">Portofolio & reward</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== TENTANG PROGRAM ==================== -->
    <section id="tentang" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="clay-card p-8 sm:p-12 lg:p-16 border-2 border-white bg-gradient-to-br from-white to-[#FAF6F0]">
                <div class="grid lg:grid-cols-12 gap-12 items-center">

                    <!-- Left: Illustration Characters -->
                    <div class="lg:col-span-5 relative flex justify-center order-2 lg:order-1">
                        <div class="relative">
                            <div class="w-64 h-64 sm:w-80 sm:h-80 bg-accent/20 rounded-full blur-2xl absolute inset-0 m-auto"></div>
                            <img src="{{ asset('assets/custom/holiday_bootcamp/girl.webp') }}" alt="Siswa Alhazen" class="relative z-10 w-64 sm:w-80 h-auto object-contain drop-shadow-md">
                        </div>
                    </div>

                    <!-- Right: Narrative & Features -->
                    <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-main/15 text-main text-xs sm:text-sm font-bold clay-pill">
                            <iconify-icon icon="lucide:check-circle-2"></iconify-icon>
                            <span>Bukan Sekadar Main Gadget</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink leading-tight">
                            Apa itu Alhazen Holiday Bootcamp?
                        </h2>

                        <p class="text-muted text-base sm:text-lg leading-relaxed">
                            <strong>Alhazen Holiday Bootcamp</strong> adalah program liburan sekolah intensif berbasis <em>Project-Based Learning</em> yang dirancang untuk anak jenjang SD hingga SMA agar dapat mengembangkan kreativitas, logika, dan keterampilan teknologi digital melalui pengalaman belajar yang menyenangkan.
                        </p>

                        <p class="text-muted text-base sm:text-lg leading-relaxed">
                            Selama 8 hari pertemuan terstruktur, anak akan didampingi mentor berpengalaman untuk merancang kreasi dunia 3D dengan Roblox Studio, membuat animasi interaktif dengan Scratch, hingga mengolah dan memvisualisasikan data menggunakan Python.
                        </p>

                        <div class="grid sm:grid-cols-2 gap-4 pt-2">
                            <div class="flex items-start gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-main text-2xl shrink-0 mt-0.5"></iconify-icon>
                                <span class="text-sm font-semibold text-ink">Bimbingan intensif 1-on-1 debugging clinic</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-main text-2xl shrink-0 mt-0.5"></iconify-icon>
                                <span class="text-sm font-semibold text-ink">Showcase Day melatih kepercayaan diri anak</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-main text-2xl shrink-0 mt-0.5"></iconify-icon>
                                <span class="text-sm font-semibold text-ink">Portofolio karya nyata siap dipamerkan</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <iconify-icon icon="lucide:check-circle" class="text-main text-2xl shrink-0 mt-0.5"></iconify-icon>
                                <span class="text-sm font-semibold text-ink">Mentor sabar & ramah anak terverifikasi</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== KURIKULUM 8 HARI (ROADMAP) ==================== -->
    <section id="kurikulum" class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-accent/20 border border-accent text-xs font-bold text-ink uppercase tracking-wider clay-pill">
                    Roadmap Belajar Terarah
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Detail Program & Jadwal 8 Hari
                </h2>
                <p class="text-muted text-base sm:text-lg">
                    Kurikulum bertahap 2 pekan agar anak paham dasar logika sebelum merancang karya mandirinya.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <!-- Stage 1 Card -->
                <div class="clay-card p-8 border-2 border-main/30 relative overflow-hidden">
                    <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-main/10 rounded-full pointer-events-none"></div>
                    <div class="flex items-center justify-between mb-6">
                        <span class="px-4 py-2 bg-main text-white font-heading font-bold text-sm rounded-2xl shadow-sm">
                            Pekan 1 (Hari 1–4)
                        </span>
                        <span class="text-xs font-bold uppercase tracking-wider text-main bg-main/10 px-3 py-1 rounded-full">
                            Guided Mastery
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold font-heading text-ink mb-4">Fondasi Konsep & Prototype</h3>
                    <p class="text-muted text-sm sm:text-base leading-relaxed mb-6">
                        Siswa mempelajari dasar-dasar logika pemrograman dan mengenal antarmuka software melalui studi kasus dan latihan praktik yang terarah bersama mentor.
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-main flex items-center justify-center shrink-0 text-xs font-bold">1</span>
                            <span>Pengenalan software & pemahaman antarmuka</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-main flex items-center justify-center shrink-0 text-xs font-bold">2</span>
                            <span>Pemahaman alur logika komputasi bertahap</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-main flex items-center justify-center shrink-0 text-xs font-bold">3</span>
                            <span>Praktik coding terbimbing bareng mentor</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-main flex items-center justify-center shrink-0 text-xs font-bold">4</span>
                            <span>Penyelesaian purwarupa (prototype) Karya pertama</span>
                        </li>
                    </ul>
                </div>

                <!-- Stage 2 Card -->
                <div class="clay-card p-8 border-2 border-accent/60 relative overflow-hidden">
                    <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-accent/15 rounded-full pointer-events-none"></div>
                    <div class="flex items-center justify-between mb-6">
                        <span class="px-4 py-2 bg-accent text-ink font-heading font-bold text-sm rounded-2xl shadow-sm">
                            Pekan 2 (Hari 5–8)
                        </span>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full">
                            Personal Project Incubator
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold font-heading text-ink mb-4">Karya Mandiri & Showcase Day</h3>
                    <p class="text-muted text-sm sm:text-base leading-relaxed mb-6">
                        Siswa mengembangkan karya digital berdasarkan ide dan kreativitas masing-masing, menyempurnakan fitur bersama mentor, lalu mempresentasikan hasil karyanya pada hari terakhir.
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-900 flex items-center justify-center shrink-0 text-xs font-bold">5</span>
                            <span>Mengembangkan ide karya dan memilih aset yang sesuai</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-900 flex items-center justify-center shrink-0 text-xs font-bold">6</span>
                            <span>Membuat kode dan fitur sesuai kreativitas siswa</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-900 flex items-center justify-center shrink-0 text-xs font-bold">7</span>
                            <span>Memperbaiki dan menyempurnakan karya bersama mentor</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-900 flex items-center justify-center shrink-0 text-xs font-bold">8</span>
                            <span><strong>Showcase Day</strong>: Presentasi hasil karya dan pengumuman pemenang</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== BENEFIT PESERTA (6 CLAY CARDS) ==================== -->
    <section class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-main/15 text-xs font-bold text-main uppercase tracking-wider clay-pill">
                    Fasilitas Lengkap
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Apa Saja yang Didapatkan Anak?
                </h2>
                <p class="text-muted text-base sm:text-lg">
                    Investasi liburan dengan fasilitas belajar komprehensif dari awal hingga akhir.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- 1. Live Zoom — main -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-main/80 hover:bg-gradient-to-br hover:from-white hover:to-main/10">
                    <div class="w-14 h-14 rounded-2xl bg-main/15 text-main flex items-center justify-center mb-5 text-2xl">
                        <iconify-icon icon="lucide:video"></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Live Zoom Interaktif</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Kelas online tatap muka kelompok interaktif yang dibimbing oleh Mentor ramah anak dan sabar.
                    </p>
                </div>

                <!-- 2. Rekaman — python -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-python/80 hover:bg-gradient-to-br hover:from-white hover:to-python/10">
                    <div class="w-14 h-14 rounded-2xl bg-python/15 text-python flex items-center justify-center mb-5 text-2xl">
                        <iconify-icon icon="lucide:film"></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Rekaman Kelas Lengkap</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Seluruh sesi direkam dan dapat ditonton kembali jika anak ingin mengulang langkah praktek di rumah.
                    </p>
                </div>

                <!-- 3. Modul — accent -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-accent/80 hover:bg-gradient-to-br hover:from-white hover:to-accent/10">
                    <div class="w-14 h-14 rounded-2xl bg-accent/20 text-amber-800 flex items-center justify-center mb-5 text-2xl">
                        <iconify-icon icon="lucide:book-open"></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Akses Modul Belajar</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Modul panduan langkah-demi-langkah yang mudah dipahami anak pemula untuk materi coding.
                    </p>
                </div>

                <!-- 4. Sertifikat — purple -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-purple-500/80 hover:bg-gradient-to-br hover:from-white hover:to-purple-50">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center mb-5 text-2xl">
                        <iconify-icon icon="lucide:award"></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">E-Sertifikat</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Sertifikat resmi dari Alhazen Academy sebagai bukti portofolio pencapaian keterampilan anak.
                    </p>
                </div>

                <!-- 5. Voucher — scratch -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-scratch/80 hover:bg-gradient-to-br hover:from-white hover:to-scratch/10">
                    <div class="w-14 h-14 rounded-2xl bg-scratch/15 text-scratch flex items-center justify-center mb-5 text-2xl">
                        <iconify-icon icon="lucide:ticket"></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Voucher 20% Private Class</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Voucher diskon khusus untuk melanjutkan belajar coding secara intensif di Private Class Alhazen.
                    </p>
                </div>

                <!-- 6. Hadiah Uang Tunai — accent (disamakan gaya tinted dgn kartu lain) -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-accent/80 hover:bg-gradient-to-br hover:from-white hover:to-accent/10">
                    <div class="w-14 h-14 rounded-2xl bg-accent/20 text-amber-800 flex items-center justify-center mb-5 text-2xl">
                        <iconify-icon icon="lucide:gift"></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Hadiah Uang Tunai!</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Di akhir bootcamp diadakan <strong>Lomba Adu Karya</strong>. 3 karya terbaik berhak mendapatkan hadiah uang tunai!
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== LOMBA AKHIR & HADIAH UANG TUNAI ==================== -->
    <section id="lomba" class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="clay-card border-2 border-accent/40 bg-gradient-to-br from-white to-amber-50/60 p-8 sm:p-12 relative overflow-hidden">
                <!-- decorative -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-accent/15 rounded-full blur-2xl pointer-events-none"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-main/10 rounded-full blur-2xl pointer-events-none"></div>

                <div class="text-center max-w-3xl mx-auto mb-10 space-y-4 relative z-10">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-accent/20 border border-accent text-xs font-bold text-ink uppercase tracking-wider clay-pill">
                        Puncak Acara: Lomba Adu Karya
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink leading-tight">
                        Tampilkan <span class="text-main">Karyamu</span>, Raih <span class="text-scratch">Hadiahnya</span>!
                    </h2>
                    <p class="text-muted text-base sm:text-lg">
                        Di akhir program, siswa berkesempatan mempresentasikan hasil karyanya dalam <strong>Showcase Day</strong>. Karya terbaik berkesempatan meraih hadiah <strong>uang tunai dan voucher kelas</strong>, sementara seluruh peserta mendapatkan e-sertifikat serta voucher spesial.
                    </p>
                </div>

                <!-- Hadiah Pemenang -->
                <div class="text-center mb-8 relative z-10">
                    <h3 class="inline-flex items-center gap-2 font-heading font-bold text-lg sm:text-xl text-ink uppercase tracking-wide">
                        <iconify-icon icon="lucide:trophy" class="text-amber-500 text-xl"></iconify-icon>
                        Hadiah Pemenang
                    </h3>
                </div>

                <div class="grid sm:grid-cols-3 gap-6 max-w-4xl mx-auto relative z-10 items-start">
                    <!-- Juara 1 (featured, tengah) -->
                    <div class="clay-card bg-white border-4 border-accent p-6 text-center relative shadow-xl sm:order-2">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-ink text-xs font-heading font-bold px-4 py-1 rounded-full border-2 border-white shadow clay-pill whitespace-nowrap">Juara 1</div>
                        <div class="text-5xl mb-3 mt-5 text-amber-500"><iconify-icon icon="lucide:trophy"></iconify-icon></div>
                        <p class="font-heading font-extrabold text-3xl sm:text-4xl text-main">Rp200.000</p>
                        <p class="text-muted text-xs mt-1">Uang Tunai</p>
                        <div class="h-px bg-[#E2E8F0] my-4"></div>
                        <ul class="space-y-2 text-sm text-left text-ink">
                            <li class="flex items-start gap-2"><iconify-icon icon="lucide:check-circle-2" class="text-main mt-0.5 shrink-0"></iconify-icon><span>Voucher <strong>50%</strong> kelas Coding Private</span></li>
                            <li class="flex items-start gap-2"><iconify-icon icon="lucide:check-circle-2" class="text-main mt-0.5 shrink-0"></iconify-icon><span>Voucher <strong>30%</strong> After School Program (ASP) Group</span></li>
                        </ul>
                    </div>
                    <!-- Juara 2 -->
                    <div class="clay-card bg-white border-2 border-[#E2E8F0] p-6 text-center sm:order-1 sm:mt-8">
                        <div class="text-4xl mb-2 text-slate-400"><iconify-icon icon="lucide:medal"></iconify-icon></div>
                        <h4 class="font-heading font-bold text-lg text-ink mb-1">Juara 2</h4>
                        <p class="font-heading font-extrabold text-3xl text-main">Rp150.000</p>
                        <p class="text-muted text-xs mt-1">Uang Tunai</p>
                        <div class="h-px bg-[#E2E8F0] my-4"></div>
                        <ul class="space-y-2 text-sm text-left text-ink">
                            <li class="flex items-start gap-2"><iconify-icon icon="lucide:check-circle-2" class="text-main mt-0.5 shrink-0"></iconify-icon><span>Voucher <strong>50%</strong> kelas Coding Private</span></li>
                            <li class="flex items-start gap-2"><iconify-icon icon="lucide:check-circle-2" class="text-main mt-0.5 shrink-0"></iconify-icon><span>Voucher <strong>30%</strong> After School Program (ASP) Group</span></li>
                        </ul>
                    </div>
                    <!-- Juara 3 -->
                    <div class="clay-card bg-white border-2 border-[#E2E8F0] p-6 text-center sm:order-3 sm:mt-8">
                        <div class="text-4xl mb-2 text-orange-500"><iconify-icon icon="lucide:medal"></iconify-icon></div>
                        <h4 class="font-heading font-bold text-lg text-ink mb-1">Juara 3</h4>
                        <p class="font-heading font-extrabold text-3xl text-main">Rp100.000</p>
                        <p class="text-muted text-xs mt-1">Uang Tunai</p>
                        <div class="h-px bg-[#E2E8F0] my-4"></div>
                        <ul class="space-y-2 text-sm text-left text-ink">
                            <li class="flex items-start gap-2"><iconify-icon icon="lucide:check-circle-2" class="text-main mt-0.5 shrink-0"></iconify-icon><span>Voucher <strong>50%</strong> kelas Coding Private</span></li>
                            <li class="flex items-start gap-2"><iconify-icon icon="lucide:check-circle-2" class="text-main mt-0.5 shrink-0"></iconify-icon><span>Voucher <strong>30%</strong> After School Program (ASP) Group</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Hadiah untuk Seluruh Peserta -->
                <div class="mt-10 max-w-4xl mx-auto relative z-10">
                    <div class="clay-card bg-main/5 border-2 border-main/30 p-6 sm:p-8">
                        <h3 class="font-heading font-bold text-lg sm:text-xl text-ink mb-4 flex items-center gap-2">
                            <iconify-icon icon="lucide:gift" class="text-main text-xl"></iconify-icon>
                            Hadiah untuk Seluruh Peserta
                        </h3>
                        <ul class="grid sm:grid-cols-2 gap-3 text-sm text-ink">
                            <li class="flex items-start gap-2"><iconify-icon icon="lucide:check-circle-2" class="text-main mt-0.5 shrink-0"></iconify-icon><span>E-sertifikat keikutsertaan</span></li>
                            <li class="flex items-start gap-2"><iconify-icon icon="lucide:check-circle-2" class="text-main mt-0.5 shrink-0"></iconify-icon><span>Voucher diskon <strong>20%</strong> kelas Coding Private dan ASP Group bagi peserta di luar Juara 1, 2, dan 3</span></li>
                        </ul>
                        <p class="text-muted text-xs sm:text-sm mt-5 italic">
                            <strong>Kriteria penilaian:</strong> kreativitas, fungsi program, dan kepercayaan diri saat presentasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PILIHAN JALUR & PRICING ==================== -->
    <section id="jalur" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-accent/20 border border-accent text-xs font-bold text-ink uppercase tracking-wider clay-pill">
                    3 Pilihan Jalur Kelas
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Pilih Kelas Sesuai Usia & Minat Anak
                </h2>
                <p class="text-muted text-base sm:text-lg">
                    Tersedia 3 jalur coding interaktif. Klik daftar untuk reservasi langsung via GoAkal.
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 items-stretch pt-4">

                <!-- Track 1: Scratch -->
                <div class="clay-card p-8 border-2 border-scratch/50 flex flex-col justify-between relative hover:border-scratch">
                    <div>
                        <!-- Large Character Illustration -->
                        <div class="flex justify-center mb-5">
                            <div class="relative w-40 h-40 sm:w-44 sm:h-44 rounded-3xl bg-orange-100 flex items-center justify-center overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-orange-50 to-orange-200/60"></div>
                                <img src="{{ asset('assets/custom/holiday_bootcamp/scratch_char.webp') }}" alt="Scratch Character" class="relative z-10 w-full h-full object-contain p-2 drop-shadow-md scale-110" onerror="this.onerror=null; this.src='https://upload.wikimedia.org/wikipedia/commons/7/77/Scratch_logo.svg'">
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="flex justify-center mb-4">
                            <span class="px-4 py-1.5 rounded-full bg-scratch text-white text-xs font-bold clay-pill">
                                SD / Pemula
                            </span>
                        </div>

                        <h3 class="text-2xl font-bold font-heading text-ink mb-2 text-center">Coding &amp; Animation <br> with Scratch</h3>
                        <p class="text-muted text-sm leading-relaxed mb-6">
                            Susun blok visual, ciptakan karya interaktif, animasi seru, dan rilis portofolio digital pertamamu! Cocok untuk anak yang baru pertama kali mengenal coding.
                        </p>

                        <!-- Price Tag -->
                        <div class="p-4 bg-orange-50/60 rounded-2xl border border-orange-100 mb-6">
                            <p class="text-xs text-muted mb-1">Biaya Investasi Liburan:</p>
                            <div class="flex items-center gap-3 flex-wrap">
                                <p class="text-lg text-muted line-through">Rp499.000</p>
                                <span class="px-2 py-0.5 rounded-full bg-scratch text-white text-[10px] font-bold">HEMAT 70%</span>
                            </div>
                            <p class="text-3xl font-extrabold font-heading text-scratch">Rp149.000</p>
                        </div>

                        <!-- Facilities -->
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-scratch text-lg shrink-0"></iconify-icon>
                                <span>8 Hari Kelas Online via Zoom</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-scratch text-lg shrink-0"></iconify-icon>
                                <span>Rekaman kelas & modul materi</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-scratch text-lg shrink-0"></iconify-icon>
                                <span>Sertifikat resmi Alhazen</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-scratch text-lg shrink-0"></iconify-icon>
                                <span>Voucher 20% Private Class</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-scratch text-lg shrink-0"></iconify-icon>
                                <span>Kesempatan hadiah 3 karya terbaik</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://goakal.com/alhazenacademy/holiday-bootcamp-2026/8r9fa/apply?promo=liburanproduktif" target="_blank" class="btn-3d btn-scratch py-3.5 px-6 rounded-2xl font-bold text-center text-base flex items-center justify-center gap-2">
                        <span>Daftar Kelas Scratch</span>
                        <iconify-icon icon="lucide:external-link" class="text-lg"></iconify-icon>
                    </a>
                </div>

                <!-- Track 2: Roblox (Featured / Paling Populer) -->
                <div class="clay-card p-8 border-4 border-roblox flex flex-col justify-between relative shadow-xl lg:-translate-y-3 bg-gradient-to-b from-white to-amber-50/40">

                    <!-- Sticker Floating Badge -->
                    <div class="absolute -top-4 -right-2 bg-roblox text-ink font-heading font-bold text-xs sm:text-sm px-4 py-1.5 rounded-full border-2 border-white shadow-md rotate-3 clay-pill inline-flex items-center gap-1.5">
                        <iconify-icon icon="lucide:flame" class="text-scratch"></iconify-icon> PALING DIMINATI
                    </div>

                    <div>
                        <!-- Large Character Illustration -->
                        <div class="flex justify-center mb-5">
                            <div class="relative w-40 h-40 sm:w-44 sm:h-44 rounded-3xl bg-amber-100 flex items-center justify-center overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-amber-50 to-amber-200/60"></div>
                                <img src="{{ asset('assets/custom/holiday_bootcamp/roblox_char.webp') }}" alt="Roblox Character" class="relative z-10 w-full h-full object-contain p-2 drop-shadow-md scale-110" onerror="this.onerror=null; this.src='https://cdn.iconscout.com/icon/free/png-256/free-roblox-logo-icon-download-in-svg-png-gif-file-formats--social-media-pack-logos-icons-4325251.png'">
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="flex justify-center mb-4">
                            <span class="px-4 py-1.5 rounded-full bg-roblox text-ink text-xs font-bold clay-pill">
                                SD Lanjutan – SMP
                            </span>
                        </div>

                        <h3 class="text-2xl font-bold font-heading text-ink mb-2 text-center">3D Creation <br> with Roblox Studio</h3>
                        <p class="text-muted text-sm leading-relaxed mb-6">
                            Desain map 3D, buat rintangan tantangan seru, dan ciptakan petualangan Roblox Studio yang bisa dimainkan online bersama teman-teman!
                        </p>

                        <!-- Price Tag -->
                        <div class="p-4 bg-amber-100/70 rounded-2xl border border-amber-200 mb-6">
                            <p class="text-xs text-muted mb-1">Biaya Investasi Liburan:</p>
                            <div class="flex items-center gap-3 flex-wrap">
                                <p class="text-lg text-muted line-through">Rp699.000</p>
                                <span class="px-2 py-0.5 rounded-full bg-roblox text-ink text-[10px] font-bold">HEMAT 72%</span>
                            </div>
                            <p class="text-3xl font-extrabold font-heading text-ink">Rp199.000</p>
                        </div>

                        <!-- Facilities -->
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <iconify-icon icon="lucide:check-circle-2" class="text-amber-600 text-lg shrink-0"></iconify-icon>
                                <span>8 Hari Kelas Online via Zoom</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <iconify-icon icon="lucide:check-circle-2" class="text-amber-600 text-lg shrink-0"></iconify-icon>
                                <span>Praktik Roblox Studio 3D</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <iconify-icon icon="lucide:check-circle-2" class="text-amber-600 text-lg shrink-0"></iconify-icon>
                                <span>Rekaman kelas & modul materi</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <iconify-icon icon="lucide:check-circle-2" class="text-amber-600 text-lg shrink-0"></iconify-icon>
                                <span>Sertifikat resmi Alhazen</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <iconify-icon icon="lucide:check-circle-2" class="text-amber-600 text-lg shrink-0"></iconify-icon>
                                <span>Voucher 20% Private Class</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <iconify-icon icon="lucide:check-circle-2" class="text-amber-600 text-lg shrink-0"></iconify-icon>
                                <span>Kesempatan hadiah 3 karya terbaik</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://goakal.com/alhazenacademy/holiday-bootcamp-2026/1lze1/apply?promo=liburanproduktif" target="_blank" class="btn-3d btn-roblox py-3.5 px-6 rounded-2xl font-bold text-center text-base flex items-center justify-center gap-2">
                        <span>Daftar Kelas Roblox</span>
                        <iconify-icon icon="lucide:external-link" class="text-lg"></iconify-icon>
                    </a>
                </div>

                <!-- Track 3: Python -->
                <div class="clay-card p-8 border-2 border-python/50 flex flex-col justify-between relative hover:border-python">
                    <div>
                        <!-- Large Character Illustration -->
                        <div class="flex justify-center mb-5">
                            <div class="relative w-40 h-40 sm:w-44 sm:h-44 rounded-3xl bg-sky-100 flex items-center justify-center overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-sky-50 to-sky-200/60"></div>
                                <img src="{{ asset('assets/custom/holiday_bootcamp/python_char.webp') }}" alt="Python Character" class="relative z-10 w-full h-full object-contain p-2 drop-shadow-md scale-110" onerror="this.onerror=null; this.src='https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg'">
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="flex justify-center mb-4">
                            <span class="px-4 py-1.5 rounded-full bg-python text-white text-xs font-bold clay-pill">
                                SMP – SMA
                            </span>
                        </div>

                        <h3 class="text-2xl font-bold font-heading text-ink mb-2 text-center">Python Programming</h3>
                        <p class="text-muted text-sm leading-relaxed mb-6">
                            Tulis baris kode Python pertamamu, eksplorasi logika data futuristik, dan kuasai fondasi pemrograman modern persiapan era digital!
                        </p>

                        <!-- Price Tag -->
                        <div class="p-4 bg-sky-50/60 rounded-2xl border border-sky-100 mb-6">
                            <p class="text-xs text-muted mb-1">Biaya Investasi Liburan:</p>
                            <div class="flex items-center gap-3 flex-wrap">
                                <p class="text-lg text-muted line-through">Rp499.000</p>
                                <span class="px-2 py-0.5 rounded-full bg-python text-white text-[10px] font-bold">HEMAT 70%</span>
                            </div>
                            <p class="text-3xl font-extrabold font-heading text-python">Rp149.000</p>
                        </div>

                        <!-- Facilities -->
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-python text-lg shrink-0"></iconify-icon>
                                <span>8 Hari Kelas Online via Zoom</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-python text-lg shrink-0"></iconify-icon>
                                <span>Rekaman kelas & modul materi</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-python text-lg shrink-0"></iconify-icon>
                                <span>Sertifikat resmi Alhazen</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-python text-lg shrink-0"></iconify-icon>
                                <span>Voucher 20% Private Class</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <iconify-icon icon="lucide:check-circle-2" class="text-python text-lg shrink-0"></iconify-icon>
                                <span>Kesempatan hadiah 3 karya terbaik</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://goakal.com/alhazenacademy/holiday-bootcamp-2026/dsdpn/apply?promo=liburanproduktif" target="_blank" class="btn-3d btn-python py-3.5 px-6 rounded-2xl font-bold text-center text-base flex items-center justify-center gap-2">
                        <span>Daftar Kelas Python</span>
                        <iconify-icon icon="lucide:external-link" class="text-lg"></iconify-icon>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== Mentor SECTION ==================== -->
    <section id="Mentor" class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="clay-card p-8 sm:p-12 border-2 border-white bg-gradient-to-r from-emerald-50/60 to-white">
                <div class="grid lg:grid-cols-12 gap-8 items-center">

                    <div class="lg:col-span-4 flex justify-center">
                        <div class="relative">
                            <div class="w-48 h-48 sm:w-56 sm:h-56 rounded-full border-4 border-white shadow-xl overflow-hidden bg-main/20 flex items-center justify-center">
                                <img src="{{ asset('assets/custom/holiday_bootcamp/boy.webp') }}" alt="Mentor Alhazen" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='https://akalstorageaccount1.blob.core.windows.net/akalcontainer1/alhazenacademy/G4Ja_8JpWPWtkLZTdQ9p0'">
                            </div>
                            <div class="absolute -bottom-2 -right-2 bg-main text-white px-3 py-1 rounded-full text-xs font-bold clay-pill">
                                Verified Mentor
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-8 space-y-4 text-center lg:text-left">
                        <span class="inline-block px-3.5 py-1 rounded-full bg-main/15 text-main text-xs font-bold clay-pill">
                            Pendampingan Penuh
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-ink">
                            Dibimbing Langsung oleh Alhazen Elite Mentor
                        </h2>
                        <p class="text-muted text-base leading-relaxed">
                            Mentor kami adalah instruktur profesional yang tidak hanya menguasai coding teknis, tetapi juga dibekali sertifikasi pedagogi ramah anak. Setiap peserta mendapatkan ruang berpendapat, bertanya, dan bereksperimen dengan santai dan menyenangkan.
                        </p>
                        <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-2">
                            <div class="flex items-center gap-2 text-sm font-semibold text-ink">
                                <iconify-icon icon="lucide:smile" class="text-main text-xl"></iconify-icon>
                                <span>Komunikatif & Sabar</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold text-ink">
                                <iconify-icon icon="lucide:heart-handshake" class="text-main text-xl"></iconify-icon>
                                <span>1-on-1 Group Debugging Clinic</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold text-ink">
                                <iconify-icon icon="lucide:sparkles" class="text-main text-xl"></iconify-icon>
                                <span>Apresiasi Setiap Karya</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FAQ ACCORDION ==================== -->
    <section id="faq" class="py-20 relative" x-data="{ openFaq: 1 }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-14 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-main/15 text-xs font-bold text-main uppercase tracking-wider clay-pill">
                    Tanya Jawab
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="text-muted text-base">
                    Informasi penting seputar pelaksanaan Alhazen Holiday Bootcamp 2026.
                </p>
            </div>

            <div class="space-y-4">

                <!-- FAQ 1 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 1 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 1 ? null : 1)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Apakah anak yang belum pernah coding sama sekali bisa ikut?</span>
                        <iconify-icon icon="lucide:chevron-down" class="text-2xl transition-transform duration-200" :class="openFaq === 1 ? 'rotate-180 text-main' : 'text-muted'"></iconify-icon>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Tentu bisa! Seluruh jalur (terutama Scratch dan Roblox) dirancang mulai dari nol (beginner-friendly). Mentor akan memandu langkah demi langkah dari pengenalan antarmuka hingga anak bisa membuat Karyanya sendiri.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 2 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 2 ? null : 2)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Perangkat apa saja yang perlu disiapkan?</span>
                        <iconify-icon icon="lucide:chevron-down" class="text-2xl transition-transform duration-200" :class="openFaq === 2 ? 'rotate-180 text-main' : 'text-muted'"></iconify-icon>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Peserta membutuhkan Laptop atau Komputer (PC) dengan sistem operasi Windows atau Mac yang terkoneksi internet lancar, webcam, dan aplikasi Zoom. Mouse eksternal sangat disarankan untuk kemudahan navigasi saat membuat proyek.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 3 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 3 ? null : 3)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Bagaimana jika anak berhalangan hadir di salah satu sesi?</span>
                        <iconify-icon icon="lucide:chevron-down" class="text-2xl transition-transform duration-200" :class="openFaq === 3 ? 'rotate-180 text-main' : 'text-muted'"></iconify-icon>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Setiap sesi kelas Zoom direkam secara penuh. Peserta dapat memutar kembali rekaman kapan saja dan mengajukan pertanyaan perbaikan Karya kepada tim Mentor.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 4 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 4 ? null : 4)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Kapan sertifikat dan hadiah diserahkan?</span>
                        <iconify-icon icon="lucide:chevron-down" class="text-2xl transition-transform duration-200" :class="openFaq === 4 ? 'rotate-180 text-main' : 'text-muted'"></iconify-icon>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Sertifikat digital kelulusan akan dikirimkan maksimal 3–5 hari kerja setelah Showcase Day. Pemenang 3 karya terbaik akan dihubungi langsung oleh admin Alhazen untuk proses pengiriman hadiah uang tunai.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 5 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 5 ? null : 5)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Ada lomba di akhir bootcamp? Siapa yang dapat hadiah?</span>
                        <iconify-icon icon="lucide:chevron-down" class="text-2xl transition-transform duration-200" :class="openFaq === 5 ? 'rotate-180 text-main' : 'text-muted'"></iconify-icon>
                    </button>
                    <div x-show="openFaq === 5" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Ya. Di akhir program diadakan <strong>Lomba Adu Karya (Showcase Day)</strong> tempat siswa mempresentasikan Karya buatannya. Juara 1, 2, dan 3 (3 karya terbaik pilihan mentor) berhak mendapatkan <strong>hadiah uang tunai</strong>. Penilaian berdasarkan kreativitas, fungsi program, dan kepercayaan diri saat presentasi.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==================== FINAL CTA BANNER (Alhazen Design, warna Holiday) ==================== -->
    <section class="relative py-10">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
                class="pointer-events-none select-none absolute -left-2 sm:-left-2 -top-6 w-14 sm:w-16 z-50" loading="lazy" />
            <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
                class="pointer-events-none select-none absolute -right-2 sm:-right-1 -bottom-5 w-14 sm:w-16 z-50" loading="lazy" />

            <div class="relative rounded-[28px] px-5 sm:px-8 lg:px-10 py-8 sm:py-10
                bg-gradient-to-b from-main to-[#008A72] text-white shadow-[0_20px_50px_rgba(0,175,145,.25)]">
                <div class="flex flex-col lg:flex-row lg:items-center gap-6 lg:gap-8">
                    <div class="flex-1 text-center lg:text-left">
                        <span class="inline-block px-4 py-1.5 rounded-full bg-white/20 text-white font-bold text-xs uppercase tracking-wider backdrop-blur-md mb-4">
                            Tempat Terbatas Tiap Kelas
                        </span>
                        <h3 class="font-semibold leading-tight text-[22px] sm:text-[26px] lg:text-[30px] font-heading">
                            Jadikan Liburan Ini Titik Awal Anak Menjadi Kreator Teknologi!
                        </h3>
                        <p class="text-white/90 text-sm sm:text-base mt-3 max-w-xl mx-auto lg:mx-0">
                            Amankan slot belajar interaktif bersama Alhazen Academy sekarang juga.
                        </p>
                    </div>
                    <div class="w-full lg:w-auto flex flex-col sm:flex-row items-stretch gap-3">
                        <a href="#jalur" class="w-full sm:w-auto px-6 py-3 inline-flex justify-center items-center rounded-xl font-semibold bg-accent text-ink hover:scale-105 transition-all duration-200 ease-in-out">
                            Pilih Jalur Belajar
                        </a>
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-6 py-3 inline-flex justify-center items-center rounded-xl font-semibold bg-white text-main hover:scale-105 transition-all duration-200 ease-in-out gap-2">
                            <iconify-icon icon="logos:whatsapp-icon" class="text-lg"></iconify-icon>
                            Konsultasi WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FOOTER (Alhazen Design, warna Holiday) ==================== -->
    <footer class="overflow-hidden relative rounded-t-[56px] inset-0 bg-gradient-to-b from-main to-[#008A72]">
        <!-- Decorative icons background -->
        <img src="{{ asset('assets/kids/image-footer/bg-footer.webp') }}" alt=""
            class="absolute bottom-0 left-0 w-full object-cover object-bottom opacity-95 pointer-events-none select-none"
            loading="lazy" decoding="async" />

        <!-- Footer content -->
        <div class="relative mx-auto max-w-7xl px-5 sm:px-8 py-12 sm:py-16 text-white">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-y-12 md:gap-x-12 xl:gap-x-16">

                <!-- Logo & About -->
                <div class="md:col-span-3 space-y-3 md:space-y-6">
                    <img src="{{ asset('assets/foot-logo-new.webp') }}" alt="Alhazen Academy" class="h-15 w-auto" loading="lazy" decoding="async">
                    <div class="flex items-center gap-3">
                        @foreach ($socials as $s)
                            <a href="{{ $s['href'] }}" target="_blank" rel="noopener"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                                aria-label="{{ ucfirst($s['label']) }}">
                                <img src="{{ asset($s['icon_path'] ?? 'assets/kids/index-footer/Alhazen-Logo-white.png') }}" alt="{{ ucfirst($s['label']) }} icon"
                                    class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                    loading="lazy" decoding="async" />
                            </a>
                        @endforeach
                    </div>
                    <p class="text-white/90 text-sm max-w-sm leading-relaxed text-justify">
                        PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.
                    </p>
                </div>

                <!-- Program & Hubungi Kami -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 style="font-family: Poppins" class="text-xl font-medium">Program</h4>
                    <ul class="space-y-2">
                        @forelse ($programLinks as $ln)
                            <li>
                                <a href="{{ route($ln['url'], ['tab' => $ln['key']], false) . '#program' }}"
                                    class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                    {{ $ln['label'] }}
                                </a>
                            </li>
                        @empty
                            <li><a href="{{ route('program') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Program</a></li>
                        @endforelse
                    </ul>

                    <div class="mt-6">
                        <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Hubungi Kami</h4>
                        <ul class="space-y-2 text-white/90 text-sm">
                            @if ($contact['phone'])
                                <li><a href="tel:{{ preg_replace('/\s+/', '', $contact['phone']) }}" class="hover:underline hover:text-white">{{ $contact['phone'] }}</a></li>
                            @endif
                            @if ($contact['email'])
                                <li><a href="mailto:{{ $contact['email'] }}" class="hover:underline hover:text-white">{{ $contact['email'] }}</a></li>
                            @endif
                            <li><a href="https://{{ $contact['site'] }}" target="_blank" rel="noopener" class="hover:underline hover:text-white">{{ $contact['site'] }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Lainnya & Tersertifikasi -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 style="font-family: Poppins" class="text-xl font-medium">Lainnya</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Beranda</a></li>
                        <li><a href="{{ route('event') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Event</a></li>
                        <li><a href="{{ route('artikel') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Artikel</a></li>
                        <li><a href="{{ route('about') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Tentang Kami</a></li>
                    </ul>

                    <div class="pt-4">
                        <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Tersertifikasi</h4>
                        <div class="group relative w-35 rounded-2xl bg-white p-3 shadow-lg shadow-black/10 overflow-hidden transition hover:ring-2 hover:ring-white/20">
                            <a href="https://blockchain.stem.org/9faa3d1f-7825-4b4c-8967-525fa6eb08f0#gs.c2374s" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center">
                                <img alt="Badge Sertifikasi STEM.org" class="ct-image block" width="400" height="400" loading="lazy" decoding="async"
                                    src="https://api.accredible.com/v1/frontend/credential_website_embed_image/badge/108574909"
                                    data-fallback="{{ asset('assets/stem_badge.png') }}"
                                    onerror="this.onerror=null; this.src=this.dataset.fallback;">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="md:col-span-3 md:pl-6 space-y-2">
                    <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Kantor Pusat</h4>
                    <a href="https://maps.google.com/?q={{ urlencode($address) }}" target="_blank" rel="noopener"
                        class="text-sm text-white/90 leading-relaxed underline">{{ $address }}</a>
                </div>
            </div>

            {{-- Copyright --}}
            <div class="relative border-t border-white/20 mt-10">
                <div class="mx-auto max-w-7xl px-5 sm:px-8 py-4 text-center text-xs sm:text-sm text-white/80">
                    © {{ date('Y') }} <strong>PT. Alhazen Global Teknologi</strong>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== FLOATING WHATSAPP BUTTON ==================== -->
    <a href="{{ $waUrl }}" target="_blank" class="fixed bottom-6 right-6 z-50 flex items-center gap-2.5 bg-[#25D366] text-white px-4 py-3 rounded-full shadow-2xl hover:scale-105 active:scale-95 transition-all duration-200">
        <iconify-icon icon="logos:whatsapp-icon" class="text-2xl"></iconify-icon>
        <span class="font-bold text-sm hidden sm:inline">Tanya MinZen</span>
    </a>

</body>
</html>
