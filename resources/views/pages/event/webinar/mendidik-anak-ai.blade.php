<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mendidik Anak di Era AI — Alhazen Academy</title>
    <link rel="icon" href="{{ asset('assets/logo-new.webp') }}" type="image/x-icon">
    <meta name="description"
        content="Webinar Mendidik Anak di Era AI bersama Ustadz dr. Raehanul Bahraen. Panduan pola asuh dan wawasan teknologi untuk orang tua anak SD–SMA. Sabtu, 31 Oktober 2026 via Zoom.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mendidik Anak di Era AI — Alhazen Academy">
    <meta property="og:description"
        content="Panduan pola asuh dan wawasan teknologi untuk orang tua anak SD–SMA bersama pakar parenting Islam. Sabtu, 31 Oktober 2026 · 10.00–11.00 WIB · Zoom.">
    <meta property="og:image" content="{{ asset('assets/custom/mendidik-anak-ai/banner.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mendidik Anak di Era AI — Alhazen Academy">
    <meta name="twitter:description"
        content="Panduan pola asuh dan wawasan teknologi untuk orang tua anak SD–SMA bersama pakar parenting Islam.">
    <meta name="twitter:image" content="{{ asset('assets/custom/mendidik-anak-ai/banner.jpeg') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style type="text/tailwindcss">
        @theme {
    --color-white: #FFFEFE;
    --color-blue-spruce: #0F7D6F;
    --color-azure-mist: #DAECE6;
    --color-watermelon: #F10148;
    --color-graphite: #2E2D2C;
    --color-blue-bell: #009EE6;
}
</style>
    <style>
        :root {
            --white: #FFFEFE;
            --spruce: #0F7D6F;
            --mist: #DAECE6;
            --melon: #F10148;
            --bell: #009EE6
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--mist);
            color: var(--spruce);
            -webkit-font-smoothing: antialiased
        }

        .text-blue-spruce {
            color: var(--spruce)
        }

        .bg-blue-spruce {
            background-color: var(--spruce)
        }

        .border-blue-spruce {
            border-color: var(--spruce)
        }

        .text-azure-mist {
            color: var(--mist)
        }

        .bg-azure-mist {
            background-color: var(--mist)
        }

        .border-azure-mist {
            border-color: var(--mist)
        }

        .text-watermelon {
            color: var(--melon)
        }

        .bg-watermelon {
            background-color: var(--melon)
        }

        .border-watermelon {
            border-color: var(--melon)
        }

        .text-blue-bell {
            color: var(--bell)
        }

        .bg-blue-bell {
            background-color: var(--bell)
        }

        .border-blue-bell {
            border-color: var(--bell)
        }

        .eyebrow {
            letter-spacing: .22em
        }

        .num {
            font-variant-numeric: tabular-nums
        }

        details>summary {
            list-style: none;
            cursor: pointer
        }

        details>summary::-webkit-details-marker {
            display: none
        }

        details[open] .plus {
            transform: rotate(45deg)
        }

        .plus {
            transition: transform .2s ease
        }

        /* ── Claymorphism ── */
        .clay {
            background: var(--white);
            border-radius: 2rem;
            box-shadow:
                8px 8px 20px rgba(15, 125, 111, .14),
                -6px -6px 18px rgba(255, 255, 255, .85),
                inset 1px 1px 2px rgba(255, 255, 255, .9),
                inset -1px -1px 3px rgba(15, 125, 111, .08);
        }

        .clay-sm {
            background: var(--white);
            border-radius: 1.25rem;
            box-shadow:
                5px 5px 14px rgba(15, 125, 111, .13),
                -4px -4px 12px rgba(255, 255, 255, .85),
                inset 1px 1px 2px rgba(255, 255, 255, .9),
                inset -1px -1px 3px rgba(15, 125, 111, .07);
        }

        .clay-pill {
            border-radius: 9999px;
            box-shadow:
                4px 4px 10px rgba(15, 125, 111, .16),
                -3px -3px 8px rgba(255, 255, 255, .9),
                inset 1px 1px 2px rgba(255, 255, 255, .8),
                inset -1px -1px 3px rgba(15, 125, 111, .08);
        }

        .clay-btn {
            border-radius: 9999px;
            box-shadow:
                4px 5px 12px rgba(241, 1, 72, .28),
                -3px -3px 10px rgba(255, 255, 255, .85),
                inset 1px 1px 2px rgba(255, 255, 255, .35),
                inset -1px -1px 3px rgba(15, 125, 111, .15);
        }

        .clay-btn-ghost {
            border-radius: 9999px;
            box-shadow:
                4px 4px 10px rgba(15, 125, 111, .14),
                -3px -3px 10px rgba(255, 255, 255, .9),
                inset 1px 1px 2px rgba(255, 255, 255, .9),
                inset -1px -1px 3px rgba(15, 125, 111, .07);
        }

        .clay-inset {
            border-radius: 1.5rem;
            box-shadow:
                inset 4px 4px 10px rgba(15, 125, 111, .14),
                inset -4px -4px 10px rgba(255, 255, 255, .85);
        }

        .clay-spruce {
            background: linear-gradient(145deg, #119485, #0c6a5e);
            border-radius: 2rem;
            box-shadow:
                8px 8px 20px rgba(15, 125, 111, .3),
                -6px -6px 18px rgba(255, 255, 255, .35),
                inset 1px 1px 2px rgba(255, 255, 255, .25),
                inset -1px -1px 4px rgba(0, 0, 0, .18);
        }

        .clay-spruce-sm {
            background: linear-gradient(145deg, #119485, #0c6a5e);
            border-radius: 1.25rem;
            box-shadow:
                5px 5px 14px rgba(15, 125, 111, .28),
                -4px -4px 12px rgba(255, 255, 255, .3),
                inset 1px 1px 2px rgba(255, 255, 255, .22),
                inset -1px -1px 3px rgba(0, 0, 0, .14);
        }

        .clay-white-sm {
            background: var(--white);
            border-radius: .875rem;
            box-shadow:
                3px 3px 8px rgba(15, 125, 111, .12),
                -2px -2px 6px rgba(255, 255, 255, .85),
                inset 1px 1px 1px rgba(255, 255, 255, .9);
        }

        /* ── Cloud decorations ── */
        .cloud-deco {
            position: absolute;
            pointer-events: none;
            user-select: none;
            opacity: .85;
            display: none;
        }

        @media(min-width:1024px) {
            .cloud-deco {
                display: block
            }
        }

        /* ── Hero full-bg ── */
        .hero-full {
            position: relative;
            background: url('/assets/custom/mendidik-anak-ai/hero.jpg') center/cover no-repeat;
            border-radius: 0 0 40px 40px;
        }

        @media(min-width:640px) {
            .hero-full {
                border-radius: 0 0 64px 64px
            }
        }

        @media(min-width:1024px) {
            .hero-full {
                border-radius: 0 0 100px 100px
            }
        }

        .hero-full::before {
            content: '';
            position: absolute;
            inset: 0;
        }

        .hero-full>* {
            position: relative;
            z-index: 1;
        }

        /* ── Transparent navbar ── */
        .nav-transparent {
            background: transparent;
            backdrop-filter: none;
            border-bottom: none;
            box-shadow: none;
        }

        .nav-solid {
            background: rgba(255, 254, 254, .88);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(15, 125, 111, .08);
            box-shadow: 0 4px 18px rgba(15, 125, 111, .08);
        }

        .nav-solid .nav-link {
            color: rgba(15, 125, 111, .7);
        }

        .nav-solid .nav-link:hover {
            color: var(--spruce);
            background: rgba(218, 236, 230, .6);
        }
    </style>
</head>

<body class="bg-azure-mist text-blue-spruce selection:bg-azure-mist selection:text-blue-spruce">

    <!-- TOP BAR — transparent over hero -->
    <header id="topbar" class="nav-transparent fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-5xl mx-auto px-5 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 shrink-0">
                <img src="{{ asset('assets/nav-logo-new.webp') }}" alt="Alhazen Academy" class="h-8 object-contain">
            </a>
            <nav class="hidden lg:flex items-center gap-0.5 mx-4 overflow-x-auto">
                <a href="#penting"
                    class="nav-link text-xs font-semibold text-blue-spruce/75 hover:text-blue-spruce px-2.5 py-2 rounded-lg hover:bg-white/50 transition-all whitespace-nowrap">Mengapa</a>
                <a href="#pembicara"
                    class="nav-link text-xs font-semibold text-blue-spruce/75 hover:text-blue-spruce px-2.5 py-2 rounded-lg hover:bg-white/50 transition-all whitespace-nowrap">Pembicara</a>
                <a href="#jadwal"
                    class="nav-link text-xs font-semibold text-blue-spruce/75 hover:text-blue-spruce px-2.5 py-2 rounded-lg hover:bg-white/50 transition-all whitespace-nowrap">Jadwal</a>
                <a href="#agenda"
                    class="nav-link text-xs font-semibold text-blue-spruce/75 hover:text-blue-spruce px-2.5 py-2 rounded-lg hover:bg-white/50 transition-all whitespace-nowrap">Agenda</a>
                <a href="#benefit"
                    class="nav-link text-xs font-semibold text-blue-spruce/75 hover:text-blue-spruce px-2.5 py-2 rounded-lg hover:bg-white/50 transition-all whitespace-nowrap">Benefit</a>
                <a href="#daftar"
                    class="nav-link text-xs font-semibold text-blue-spruce/75 hover:text-blue-spruce px-2.5 py-2 rounded-lg hover:bg-white/50 transition-all whitespace-nowrap">Daftar</a>
            </nav>
            <div class="flex items-center gap-3 shrink-0">
                <button type="button" id="navToggle" aria-label="Buka menu" aria-expanded="false"
                    class="lg:hidden w-9 h-9 rounded-full border border-blue-spruce/25 flex items-center justify-center text-blue-spruce hover:border-blue-spruce transition-all">
                    <i class="fa-solid fa-bars text-sm"></i>
                </button>
                <a href="#daftar"
                    class="text-xs font-bold bg-watermelon text-white px-4 py-2 clay-btn hover:opacity-90 transition-all">Daftar</a>
            </div>
        </div>
        <div id="navMobile" class="lg:hidden hidden border-t border-blue-spruce/10 bg-white/95 backdrop-blur-md">
            <div class="max-w-5xl mx-auto px-5 py-2 flex flex-col">
                <a href="#penting"
                    class="nav-link-m px-3 py-2.5 text-sm font-semibold text-blue-spruce/80 hover:text-blue-spruce rounded-lg hover:bg-azure-mist/60 transition-all">Mengapa
                    penting</a>
                <a href="#pembicara"
                    class="nav-link-m px-3 py-2.5 text-sm font-semibold text-blue-spruce/80 hover:text-blue-spruce rounded-lg hover:bg-azure-mist/60 transition-all">Pembicara</a>
                <a href="#jadwal"
                    class="nav-link-m px-3 py-2.5 text-sm font-semibold text-blue-spruce/80 hover:text-blue-spruce rounded-lg hover:bg-azure-mist/60 transition-all">Save
                    the date</a>
                <a href="#agenda"
                    class="nav-link-m px-3 py-2.5 text-sm font-semibold text-blue-spruce/80 hover:text-blue-spruce rounded-lg hover:bg-azure-mist/60 transition-all">Rangkaian
                    agenda</a>
                <a href="#benefit"
                    class="nav-link-m px-3 py-2.5 text-sm font-semibold text-blue-spruce/80 hover:text-blue-spruce rounded-lg hover:bg-azure-mist/60 transition-all">Benefit</a>
                <a href="#daftar"
                    class="nav-link-m px-3 py-2.5 text-sm font-semibold text-blue-spruce/80 hover:text-blue-spruce rounded-lg hover:bg-azure-mist/60 transition-all">Pendaftaran</a>
            </div>
        </div>
    </header>

    <!-- HERO — full background image, text left -->
    <section class="hero-full pt-28 pb-16 lg:pt-36 lg:pb-24 text-center lg:text-left">
        <div class="max-w-5xl mx-auto px-5">
            <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3 mb-6">
                <span
                    class="eyebrow text-[11px] font-bold uppercase text-blue-spruce bg-white/60 clay-pill px-3.5 py-1.5">
                    Webinar online via Zoom · 60 menit
                </span>
                <div
                    class="inline-flex items-center gap-2.5 bg-blue-spruce text-white px-3.5 py-1 rounded-full text-[11px] clay-spruce-sm">
                    <span class="text-white/60 font-medium">Kolaborasi:</span>
                    <img src="{{ asset('assets/foot-logo-new.webp') }}" alt="Alhazen Academy"
                        class="h-4.5 w-auto object-contain">
                    <span class="text-white/30 text-[10px]">✕</span>
                    <img src="{{ asset('assets/custom/mendidik-anak-ai/logo_madinah_plus.png') }}" alt="Madinah Plus"
                        class="h-4 w-auto object-contain">
                    <span class="text-white/30 text-[10px]">✕</span>
                    <img src="{{ asset('assets/custom/mendidik-anak-ai/logo_drb.png') }}" alt="DRB"
                        class="h-4 w-auto object-contain">
                </div>
            </div>
            <div class="max-w-2xl mx-auto lg:mx-0">
                <img src="{{ asset('assets/custom/mendidik-anak-ai/headline.png') }}"
                    alt="Mendidik Anak di Era AI. Mana yang Harus Dibatasi, Mana yang Harus Dipelajari?"
                    class="w-full max-w-xl mx-auto lg:mx-0" width="2000" height="933">
                <div
                    class="relative mt-5 max-w-xl mx-auto lg:mx-0 py-4 px-5 sm:px-7"
                    style="background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.72) 18%, rgba(255,255,255,.78) 50%, rgba(255,255,255,.72) 82%, rgba(255,255,255,0) 100%);">
                    <p class="relative text-[15px] leading-relaxed text-blue-spruce/85 text-center lg:text-left">Panduan
                        pola asuh dan
                        wawasan teknologi untuk orang tua anak SD–SMA bersama pakar parenting Islam.</p>
                </div>
                <div class="mt-7 flex flex-wrap items-center justify-center lg:justify-start gap-3">
                    <a href="#daftar"
                        class="bg-watermelon text-white text-sm font-bold px-6 py-3 clay-btn hover:opacity-90 transition-all">Amankan
                        kursi <i class="fa-solid fa-arrow-right ml-1 text-xs"></i></a>
                    <a href="#agenda"
                        class="text-sm font-bold px-6 py-3 bg-white/75 clay-pill text-blue-spruce hover:bg-white transition-all">Lihat
                        agenda</a>
                </div>
                <div
                    class="mt-8 flex flex-wrap justify-center lg:justify-start gap-x-3 gap-y-2 text-[13px] text-blue-spruce/80 num">
                    <span
                        class="inline-flex items-center gap-1.5 bg-white/75 clay-pill px-3.5 py-1.5 text-blue-spruce/85"><i
                            class="fa-solid fa-calendar-days text-blue-spruce"></i>Sabtu, 31 Oktober 2026</span>
                    <span
                        class="inline-flex items-center gap-1.5 bg-white/75 clay-pill px-3.5 py-1.5 text-blue-spruce/85"><i
                            class="fa-solid fa-clock text-blue-spruce"></i>10.00–11.00 WIB</span>
                    <span
                        class="inline-flex items-center gap-1.5 bg-white/75 clay-pill px-3.5 py-1.5 text-blue-spruce/85"><i
                            class="fa-solid fa-video text-blue-spruce"></i>Zoom</span>
                </div>
            </div>
        </div>
    </section>

    <!-- LATAR -->
    <section id="penting" class="relative max-w-5xl mx-auto px-5 py-12 lg:py-16 scroll-mt-20">
        <img src="{{ asset('assets/custom/mendidik-anak-ai/cloud1.png') }}" alt="" aria-hidden="true"
            class="cloud-deco -bottom-2 -left-2 w-44 sm:w-56 lg:w-64 z-0">
        <img src="{{ asset('assets/custom/mendidik-anak-ai/cloud3.png') }}" alt="" aria-hidden="true"
            class="cloud-deco -bottom-2 right-0 w-36 sm:w-52 lg:w-60 z-10">
        <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">01 — Mengapa penting</p>
        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight max-w-xl text-blue-spruce">Dunia anak berubah.
            Pola asuh tetap
            fondasi.</h2>
        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <div class="clay p-6 sm:p-8 text-[15px] leading-relaxed text-blue-spruce/75">
                <i class="fa-solid fa-rocket text-watermelon text-xl mb-4"></i>
                <p>Teknologi digital mengubah cara hidup dalam dua dekade terakhir. Hadirnya kecerdasan buatan (AI)
                    membuat
                    perubahan bergerak lebih cepat. Anak tumbuh di dunia yang tidak sama dengan dunia tempat kita
                    dibesarkan.</p>
            </div>
            <div class="clay p-6 sm:p-8 text-[15px] leading-relaxed text-blue-spruce/75">
                <i class="fa-solid fa-compass text-blue-bell text-xl mb-4"></i>
                <p>Banyak orang tua bingung: ingin melindungi anak dari sisi negatif teknologi, tapi sadar teknologi
                    tak
                    bisa dibendung dan jadi bagian masa depan anak. Webinar ini hadir menjawab kegelisahan itu melalui
                    pendekatan pola asuh yang bijak dan relevan dengan perkembangan zaman.</p>
            </div>
        </div>
    </section>

    <!-- PEMBICARA -->
    <section id="pembicara" class="relative scroll-mt-20">
        <div class="max-w-5xl mx-auto px-5 py-12 lg:py-20">
            <div class="max-w-2xl">
                <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">02 — Pembicara</p>
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-blue-spruce">Belajar langsung dari
                    pakarnya.</h2>
                <p class="mt-3 text-[15px] text-blue-spruce/65 leading-relaxed">Parenting sebagai fondasi utama
                    membimbing
                    anak di era kecerdasan buatan.</p>
            </div>
            <div class="mt-10 clay p-6 sm:p-10 lg:px-12 relative">
                <img src="{{ asset('assets/custom/mendidik-anak-ai/cloud2.png') }}" alt="" aria-hidden="true"
                    class="cloud-deco -left-9 -bottom-10 w-44 sm:w-56 lg:w-64 z-10">
                {{-- <img src="{{ asset('assets/custom/mendidik-anak-ai/cloud4.png') }}" alt="" aria-hidden="true"
                    class="cloud-deco -right-8 -bottom-6 w-44 sm:w-56 lg:w-64 z-0"> --}}
                <div
                    class="grid md:grid-cols-[280px_1fr] lg:grid-cols-[320px_1fr] gap-8 lg:gap-12 items-center relative">
                    <img src="{{ asset('assets/custom/mendidik-anak-ai/pembicara.png') }}"
                        alt="Ustadz dr. Raehanul Bahraen, M.Sc, Sp.PK"
                        class="h-72 sm:h-100 w-auto max-w-full object-contain object-center drop-shadow-lg">
                    <div>
                        <h3 class="font-extrabold text-2xl sm:text-3xl text-blue-spruce">Ustadz dr. Raehanul Bahraen,
                            M.Sc,
                            Sp.PK</h3>
                        <p class="text-base font-semibold text-blue-bell mt-1">Dokter Sp.PK · Da'i Terstandarisasi MUI
                        </p>
                        <p class="text-sm text-blue-spruce/70 mt-3 leading-relaxed">
                            Dokter spesialis dan pendakwah yang aktif mengedukasi keluarga muslim dalam mengasuh serta
                            mendidik anak di era modern.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2 text-xs">
                            <span
                                class="clay-white-sm bg-white px-3 py-1.5 text-blue-spruce/85 font-medium"><i
                                    class="fa-solid fa-graduation-cap text-blue-spruce mr-1.5"></i>Alumni Ma'had Al-Ilmi
                                Yogyakarta</span>
                            <span
                                class="clay-white-sm bg-white px-3 py-1.5 text-blue-spruce/85 font-medium"><i
                                    class="fa-solid fa-book-bookmark text-blue-spruce mr-1.5"></i>Mahasiswa S2 Fakultas
                                Dakwah Al-Madinah International University</span>
                            <span
                                class="clay-white-sm bg-white px-3 py-1.5 text-blue-spruce/85 font-medium"><i
                                    class="fa-solid fa-award text-blue-spruce mr-1.5"></i>Da'i Terstandarisasi
                                MUI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SAVE THE DATE / CALENDAR -->
    <section id="jadwal" class="relative scroll-mt-20">
        <img src="{{ asset('assets/custom/mendidik-anak-ai/cloud3.png') }}" alt="" aria-hidden="true"
            class="cloud-deco bottom-4 -left-2 w-36 sm:w-52 lg:w-60 z-0">
        <img src="{{ asset('assets/custom/mendidik-anak-ai/cloud1.png') }}" alt="" aria-hidden="true"
            class="cloud-deco -top-2 right-0 w-44 sm:w-56 lg:w-64 z-10">
        <div class="max-w-5xl mx-auto px-5 py-12 lg:py-16">
            <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">03 — Save the date</p>
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-blue-spruce">Catat tanggalnya.</h2>
            <p class="mt-3 text-[15px] text-blue-spruce/65 leading-relaxed max-w-xl">Sabtu, 31 Oktober 2026 ·
                10.00–11.00
                WIB · Online via Zoom. Hadir 15 menit sebelumnya.</p>
            <div class="mt-8 clay overflow-hidden grid lg:grid-cols-[1fr_300px]">
                <div class="p-6 sm:p-8">
                    <div class="flex items-center justify-between mb-5">
                        <p class="font-extrabold text-lg text-blue-spruce">Oktober <span
                                class="text-blue-spruce/40 font-bold">2026</span>
                        </p>
                        <span
                            class="text-[11px] font-bold uppercase tracking-widest text-blue-spruce bg-azure-mist/60 clay-pill px-3 py-1.5">Sabtu
                            · 31</span>
                    </div>
                    <div
                        class="grid grid-cols-7 gap-1 text-center text-[11px] font-bold uppercase tracking-wider text-blue-spruce/40 mb-2">
                        <span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
                    </div>
                    <div id="octCalendar" class="grid grid-cols-7 gap-1 text-center text-sm num text-blue-spruce">
                        <span class="py-2.5"></span><span class="py-2.5"></span><span class="py-2.5"></span>
                        @for ($d = 1; $d <= 31; $d++) @if ($d===31) <span data-day="31" data-event="1"
                            class="relative py-2.5 rounded-xl bg-watermelon text-white font-extrabold clay-btn">
                            31</span>
                            @else
                            <span data-day="{{ $d }}"
                                class="relative py-2.5 rounded-xl hover:bg-azure-mist/50">{{ $d
                                }}</span>
                            @endif
                            @endfor
                    </div>
                    <div class="mt-4 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs text-blue-spruce/60">
                        <span class="inline-flex items-center gap-2"><span
                                class="w-3 h-3 rounded-md bg-watermelon inline-block"></span>Acara · 31 Okt</span>
                        <span id="todayLegend" class="hidden items-center gap-2"><span
                                class="w-3 h-3 rounded-md border-2 border-blue-spruce inline-block"></span>Hari
                            ini</span>
                    </div>
                </div>
                <div class="clay-spruce text-white p-6 sm:p-8 flex flex-col justify-center gap-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold uppercase tracking-widest opacity-70 mb-0.5">Tanggal</p>
                            <p class="text-lg font-bold num">Sabtu, 31 Okt 2026</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold uppercase tracking-widest opacity-70 mb-0.5">Jam</p>
                            <p class="text-lg font-bold num">10.00 – 11.00 WIB</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-video"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold uppercase tracking-widest opacity-70 mb-0.5">Tempat</p>
                            <p class="text-lg font-bold">Online via Zoom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AGENDA -->
    <section id="agenda" class="relative max-w-5xl mx-auto px-5 py-12 lg:py-16 scroll-mt-20">
        {{-- <img src="{{ asset('assets/custom/mendidik-anak-ai/cloud4.png') }}" alt="" aria-hidden="true"
            class="cloud-deco -top-2 -left-8 w-32 sm:w-44 lg:w-48 z-10"> --}}
        <img src="{{ asset('assets/custom/mendidik-anak-ai/cloud2.png') }}" alt="" aria-hidden="true"
            class="cloud-deco -bottom-2 right-0 w-44 sm:w-56 lg:w-64 z-0">
        <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">04 — Rangkaian</p>
        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-blue-spruce">Agenda 60 menit.</h2>
        <div class="mt-8 space-y-3">
            <div class="clay-sm flex gap-4 py-4 px-5 text-sm text-blue-spruce"><span
                    class="num w-28 shrink-0 font-bold">09.30–09.45</span><span>Masuk Zoom</span></div>
            <div class="clay-sm flex gap-4 py-4 px-5 text-sm text-blue-spruce"><span
                    class="num w-28 shrink-0 font-bold">09.45–10.00</span><span><span class="font-bold">Presentasi
                        Program Alhazen Academy</span> <span class="text-blue-bell">| Tim Alhazen</span></span></div>
            <div class="clay-sm flex gap-4 py-4 px-5 text-sm text-blue-spruce"><span
                    class="num w-28 shrink-0 font-bold">10.00–10.05</span><span>Opening MC & Sambutan</span></div>
            <div class="clay-sm py-4 px-5 text-sm text-blue-spruce">
                <div class="flex gap-4"><span class="num w-28 shrink-0 font-bold">10.05–10.45</span><span><span
                            class="font-bold">Materi Utama —
                            Mendidik Anak di Era AI.</span> <span class="text-blue-bell">| Ustadz dr. Raehanul
                        Bahraen,
                        M.Sc, Sp.PK</span></span></div>
                <ul class="mt-3 ml-4 sm:ml-[7.75rem] space-y-2 text-[13px] text-blue-spruce/75">
                    <li class="flex items-start gap-2.5"><i
                            class="fa-solid fa-circle-check text-blue-spruce mt-1 text-xs shrink-0"></i><span>Komunikasi
                            terbuka dengan anak soal teknologi</span></li>
                    <li class="flex items-start gap-2.5"><i
                            class="fa-solid fa-circle-check text-blue-spruce mt-1 text-xs shrink-0"></i><span>Kapan
                            membatasi, kapan memberi kebebasan</span></li>
                    <li class="flex items-start gap-2.5"><i
                            class="fa-solid fa-circle-check text-blue-spruce mt-1 text-xs shrink-0"></i><span>Prinsip
                            parenting yang tak lekang zaman</span></li>
                    <li class="flex items-start gap-2.5"><i
                            class="fa-solid fa-circle-check text-blue-spruce mt-1 text-xs shrink-0"></i><span>Ketahanan
                            mental agar tak bergantung berlebihan</span></li>
                </ul>
            </div>
            <div class="clay-sm flex gap-4 py-4 px-5 text-sm text-blue-spruce"><span
                    class="num w-28 shrink-0 font-bold">10.45–11.00</span><span>Tanya jawab dan penutup</span></div>
        </div>
    </section>

    <!-- DAFTAR -->
    <section id="daftar" class="relative py-30 scroll-mt-20 bg-cover bg-top"
        style="background-image: url('{{ asset('assets/custom/mendidik-anak-ai/bg-pendaftaran.png') }}');">
        <div class="max-w-5xl mx-auto px-5 py-12 lg:py-16">
            <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">05 — Benefit</p>
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-blue-spruce">Satu pendaftaran, empat
                benefit.</h2>
            <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="clay p-6">
                    <div class="w-11 h-11 rounded-xl bg-watermelon/10 clay-white-sm flex items-center justify-center">
                        <i class="fa-solid fa-video text-watermelon text-lg"></i>
                    </div>
                    <p class="num text-xs font-bold text-blue-spruce mt-4">01</p>
                    <h3 class="font-bold mt-1 text-[15px] text-blue-spruce">Rekaman Webinar</h3>
                    <p class="text-[13px] text-blue-spruce/65 mt-1 leading-relaxed">Seluruh peserta mendapatkan akses
                        rekaman lengkap untuk ditonton ulang kapan saja.</p>
                </div>
                <div class="clay p-6">
                    <div class="w-11 h-11 rounded-xl bg-blue-bell/10 clay-white-sm flex items-center justify-center">
                        <i class="fa-solid fa-ticket-simple text-blue-bell text-lg"></i>
                    </div>
                    <p class="num text-xs font-bold text-blue-spruce mt-4">02</p>
                    <h3 class="font-bold mt-1 text-[15px] text-blue-spruce">Voucher Koding</h3>
                    <p class="text-[13px] text-blue-spruce/65 mt-1 leading-relaxed">Voucher potongan harga
                        pendaftaran
                        kelas koding anak di Alhazen Academy.</p>
                </div>
                <div class="clay p-6">
                    <div class="w-11 h-11 rounded-xl bg-watermelon/10 clay-white-sm flex items-center justify-center">
                        <i class="fa-solid fa-book text-watermelon text-lg"></i>
                    </div>
                    <p class="num text-xs font-bold text-blue-spruce mt-4">03</p>
                    <h3 class="font-bold mt-1 text-[15px] text-blue-spruce">Buku Digital</h3>
                    <p class="text-[13px] text-blue-spruce/65 mt-1 leading-relaxed">Buku panduan digital 'Cepat Belajar
                        Coding untuk Anak' langsung ke email.</p>
                </div>
                <div class="clay p-6">
                    <div class="w-11 h-11 rounded-xl bg-blue-bell/10 clay-white-sm flex items-center justify-center">
                        <i class="fa-solid fa-laptop-code text-blue-bell text-lg"></i>
                    </div>
                    <p class="num text-xs font-bold text-blue-spruce mt-4">04</p>
                    <h3 class="font-bold mt-1 text-[15px] text-blue-spruce">Kelas Trial Coding</h3>
                    <p class="text-[13px] text-blue-spruce/65 mt-1 leading-relaxed">Akses kelas trial coding untuk anak
                        di
                        Alhazen Academy — kenali pengalaman belajar coding sebelum ikut kelas reguler.</p>
                </div>
            </div>
        </div>
        <div class="max-w-5xl mx-auto px-5">
            <div class="clay overflow-hidden grid lg:grid-cols-2">
            <div class="p-8 sm:p-10 bg-white flex flex-col justify-between">
                <div>
                    <p class="eyebrow text-[11px] font-bold uppercase text-watermelon mb-3">Pendaftaran</p>
                    <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-blue-spruce">Amankan kursi
                        Anda.</h2>
                    <p class="mt-4 text-sm text-blue-spruce/70 leading-relaxed">
                        Pendaftaran webinar dibuka untuk umum melalui Google Form. Klik tombol di bawah untuk mengisi
                        formulir pendaftaran.
                    </p>
                </div>
                <div class="mt-8">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTrvtT1aBXRAgQ5A_eV8SV7uH1RFwS4a82DPNdz2zoXFgG0A/viewform"
                        target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center justify-center gap-2 w-full bg-watermelon text-white text-sm font-bold py-3.5 px-6 clay-btn hover:opacity-90 transition-all text-center">
                        <span>Daftar via Google Form</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                    </a>
                </div>
            </div>
            <div class="clay-spruce text-white p-8 sm:p-10 text-sm flex flex-col justify-between">
                <div>
                    <p class="eyebrow text-[11px] font-bold uppercase text-azure-mist mb-4">Catatan Penting</p>
                    <ul class="space-y-3 text-white/80 leading-relaxed text-xs sm:text-sm">
                        <li class="flex gap-2"><span>—</span>Peserta diharapkan hadir tepat waktu untuk mendapatkan
                            pengalaman terbaik.</li>
                        <li class="flex gap-2"><span>—</span>Rekaman akan dikirimkan ke email peserta dalam waktu 3x24
                            jam setelah webinar selesai.</li>
                        <li class="flex gap-2"><span>—</span>Voucher dan benefit lainnya akan dikirimkan secara digital
                            melalui email terdaftar.</li>
                    </ul>
                </div>
                <div class="mt-8 pt-6 border-t border-white/15">
                    <p class="text-white/60 text-xs">Penyelenggara: <span class="text-white font-semibold">Alhazen
                            Academy</span><br>Sabtu, 31 Okt 2026 · Zoom</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    @php
    $company = \App\Models\SiteSetting::companySettings();
    $wa = $company['whatsapp'] ?? '+62-813-90000-332';
    $email = $company['email'] ?? 'info@alhazen.academy';
    $site = $company['website'] ?? 'www.alhazen.academy';
    $address = $company['address'] ?? 'Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, Bukit Duri, Kec. Tebet, Kota Jakarta
    Selatan, Daerah Khusus Ibukota Jakarta 12840';
    $socials = collect($company['socials'] ?? [])->where('is_active', true)->sortBy('sort_order');
    try {
        $footerPrograms = \App\Models\Program::active()->ordered()->get();
    } catch (\Throwable $e) {
        $footerPrograms = collect();
    }
    @endphp
    <footer class="bg-blue-spruce text-white">
        <div class="max-w-5xl mx-auto px-5 py-12 lg:py-16 grid gap-10 md:grid-cols-12">
            <div class="md:col-span-4">
                <img src="{{ asset('assets/foot-logo-new.webp') }}" alt="Alhazen Academy" class="h-10 w-auto mb-4"
                    loading="lazy">
                <p class="text-xs text-white/60 leading-relaxed">PT. Alhazen Global Teknologi adalah Lembaga Kursus
                    dan
                    Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan
                    adaptif.</p>
                <div class="mt-5 pt-5 border-t border-white/10">
                    <p class="eyebrow text-[10px] font-bold uppercase text-white/40 mb-2.5">Partner Kolaborasi
                        Event</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('assets/foot-logo-new.webp') }}" alt="Alhazen Academy"
                            class="h-6 w-auto object-contain opacity-80 hover:opacity-100 transition" loading="lazy">
                        <span class="text-white/20 text-xs">|</span>
                        <img src="{{ asset('assets/custom/mendidik-anak-ai/logo_madinah_plus.png') }}"
                            alt="Madinah Plus"
                            class="h-6 w-auto object-contain opacity-80 hover:opacity-100 transition"
                            loading="lazy">
                        <span class="text-white/20 text-xs">|</span>
                        <img src="{{ asset('assets/custom/mendidik-anak-ai/logo_drb.png') }}" alt="DRB"
                            class="h-6 w-auto object-contain opacity-80 hover:opacity-100 transition"
                            loading="lazy">
                    </div>
                </div>
                @if ($socials->isNotEmpty())
                <div class="flex items-center gap-2.5 mt-5">
                    @foreach ($socials as $s)
                    <a href="{{ $s['href'] }}" target="_blank" rel="noopener"
                        aria-label="{{ $s['label'] ?? 'Sosial media' }}"
                        class="w-9 h-9 rounded-full bg-white/15 hover:bg-watermelon text-white ring-1 ring-white/25 flex items-center justify-center transition-all">
                        <i class="fa-brands fa-{{ strtolower($s['label'] ?? 'globe') }} text-sm"></i>
                    </a>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="md:col-span-2">
                <p class="eyebrow text-[11px] font-bold uppercase text-white/40 mb-4">Program</p>
                <ul class="space-y-2.5 text-sm text-white/75">
                    @forelse ($footerPrograms as $p)
                    <li><a href="{{ url('program#program') }}"
                            class="hover:text-white hover:underline underline-offset-4">{{ $p->name }}</a></li>
                    @empty
                    <li><a href="{{ route('kursus-coding-anak') }}"
                            class="hover:text-white hover:underline underline-offset-4">Kursus Coding Anak</a></li>
                    <li><a href="{{ route('kursus-roblox') }}"
                            class="hover:text-white hover:underline underline-offset-4">Kursus Roblox</a></li>
                    <li><a href="{{ route('program') }}"
                            class="hover:text-white hover:underline underline-offset-4">Semua Program</a></li>
                    @endforelse
                </ul>
            </div>
            <div class="md:col-span-2">
                <p class="eyebrow text-[11px] font-bold uppercase text-white/40 mb-4">Lainnya</p>
                <ul class="space-y-2.5 text-sm text-white/75">
                    <li><a href="{{ route('program') }}"
                            class="hover:text-white hover:underline underline-offset-4">Program</a></li>
                    <li><a href="{{ route('event') }}"
                            class="hover:text-white hover:underline underline-offset-4">Event</a></li>
                    <li><a href="{{ route('artikel') }}"
                            class="hover:text-white hover:underline underline-offset-4">Artikel</a></li>
                    <li><a href="{{ route('about') }}"
                            class="hover:text-white hover:underline underline-offset-4">Tentang Kami</a></li>
                </ul>
            </div>
            <div class="md:col-span-4">
                <p class="eyebrow text-[11px] font-bold uppercase text-white/40 mb-4">Hubungi Kami</p>
                <ul class="space-y-2 text-sm text-white/75">
                    <li><a href="tel:{{ preg_replace('/\s+/', '', $wa) }}"
                            class="hover:text-white hover:underline">{{
                            $wa }}</a></li>
                    <li><a href="mailto:{{ $email }}" class="hover:text-white hover:underline">{{ $email }}</a></li>
                    <li><a href="https://{{ $site }}" target="_blank" rel="noopener"
                            class="hover:text-white hover:underline">{{ $site }}</a></li>
                </ul>
                <p class="eyebrow text-[11px] font-bold uppercase text-white/40 mt-6 mb-2">Kantor Pusat</p>
                <a href="https://maps.google.com/?q={{ urlencode($address) }}" target="_blank" rel="noopener"
                    class="text-xs text-white/60 leading-relaxed hover:text-white hover:underline">{{ $address }}</a>
            </div>
        </div>
        <div class="border-t border-white/10">
            <div class="max-w-5xl mx-auto px-5 py-5 text-center text-xs text-white/50">
                © {{ date('Y') }} <span class="font-semibold text-white/70">PT. Alhazen Global Teknologi</span>. All
                Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        (function () {
            var now = new Date();
            if (now.getFullYear() !== 2026 || now.getMonth() !== 9) return;
            var cal = document.getElementById('octCalendar');
            if (!cal) return;
            var cell = cal.querySelector('[data-day="' + now.getDate() + '"]');
            if (!cell) return;
            var isEvent = cell.getAttribute('data-event') === '1';
            if (isEvent) {
                cell.classList.add('ring-2', 'ring-offset-2', 'ring-blue-spruce');
            } else {
                cell.classList.add('border-2', 'border-blue-spruce', 'font-bold', 'text-blue-spruce');
            }
            cell.setAttribute('title', 'Hari ini');
            var legend = document.getElementById('todayLegend');
            if (legend) {
                legend.classList.remove('hidden');
                legend.classList.add('inline-flex');
            }
        })();
    </script>

    <script>
        (function () {
            var toggle = document.getElementById('navToggle');
            var mobile = document.getElementById('navMobile');
            if (toggle && mobile) {
                toggle.addEventListener('click', function () {
                    var open = !mobile.classList.contains('hidden');
                    mobile.classList.toggle('hidden', open);
                    toggle.setAttribute('aria-expanded', String(!open));
                    toggle.querySelector('i').className = open ? 'fa-solid fa-bars text-sm' :
                        'fa-solid fa-xmark text-sm';
                });
                mobile.querySelectorAll('a').forEach(function (a) {
                    a.addEventListener('click', function () {
                        mobile.classList.add('hidden');
                        toggle.setAttribute('aria-expanded', 'false');
                        toggle.querySelector('i').className = 'fa-solid fa-bars text-sm';
                    });
                });
            }

            var topbar = document.getElementById('topbar');
            var links = Array.prototype.slice.call(document.querySelectorAll('.nav-link'));
            var sections = links.map(function (l) {
                return document.querySelector(l.getAttribute('href'));
            }).filter(Boolean);

            if (topbar) {
                var onScroll = function () {
                    if (window.scrollY > 60) {
                        topbar.classList.remove('nav-transparent');
                        topbar.classList.add('nav-solid');
                    } else {
                        topbar.classList.add('nav-transparent');
                        topbar.classList.remove('nav-solid');
                    }
                };
                window.addEventListener('scroll', onScroll, {
                    passive: true
                });
                onScroll();
            }

            if (!('IntersectionObserver' in window) || !sections.length) return;
            var current = null;
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) current = e.target.id;
                });
                links.forEach(function (l) {
                    var active = l.getAttribute('href') === '#' + current;
                    l.classList.toggle('text-blue-spruce', active);
                    l.classList.toggle('bg-white/60', active);
                    l.classList.toggle('text-blue-spruce/75', !active);
                });
            }, {
                rootMargin: '-20% 0px -70% 0px',
                threshold: 0
            });
            sections.forEach(function (s) {
                observer.observe(s);
            });
        })();
    </script>

</body>

</html>
