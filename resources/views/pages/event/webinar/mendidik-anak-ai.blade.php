<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mendidik Anak di Era AI — Alhazen Academy</title>
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
            --graphite: #2E2D2C;
            --bell: #009EE6
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--white);
            color: var(--graphite);
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

        .text-graphite {
            color: var(--graphite)
        }

        .bg-graphite {
            background-color: var(--graphite)
        }

        .border-graphite {
            border-color: var(--graphite)
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

        .rule {
            height: 1px;
            background: color-mix(in srgb, var(--mist) 70%, transparent)
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

        .hero-img {
            aspect-ratio: 4/3;
            object-fit: cover
        }

        @media(min-width:1024px) {
            .hero-img {
                aspect-ratio: 3/3.4
            }
        }
    </style>
</head>

<body class="bg-white text-graphite selection:bg-azure-mist selection:text-blue-spruce">

    <!-- TOP BAR -->
    <header id="topbar" class="sticky top-0 z-50 bg-white/85 backdrop-blur-md border-b border-graphite/10">
        <div class="max-w-5xl mx-auto px-5 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                <img src="{{ asset('assets/nav-logo-new.webp') }}" alt="Alhazen Academy" class="h-8 object-contain">
            </a>
            <div class="flex items-center gap-4">
                <a href="#daftar"
                    class="text-xs font-bold bg-watermelon text-white px-4 py-2 rounded-full hover:opacity-90 transition-all">Daftar</a>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="max-w-5xl mx-auto px-5 pt-14 pb-12 lg:pt-20 lg:pb-16">
        <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-5">Webinar online via Zoom · 90 menit</p>
        <div class="grid lg:grid-cols-[1.15fr_.85fr] gap-10 items-end">
            <div>
                <h1 class="text-4xl sm:text-5xl lg:text-[3.6rem] font-extrabold leading-[1.05] tracking-tight">Mendidik
                    Anak<br>di Era AI.</h1>
                <p class="mt-4 text-xl sm:text-2xl font-medium text-graphite/80 leading-snug">Mana yang harus
                    dibatasi,<br class="hidden sm:block"> mana yang harus dipelajari?</p>
                <p class="mt-5 text-[15px] leading-relaxed text-graphite/70 max-w-xl">Panduan pola asuh + wawasan
                    teknologi untuk orang tua anak SD–SMA. Dua sisi saling melengkapi: parenting dan teknologi.</p>
                <div class="mt-7 flex flex-wrap items-center gap-3">
                    <a href="#daftar"
                        class="bg-watermelon text-white text-sm font-bold px-6 py-3 rounded-full hover:opacity-90 shadow-md shadow-watermelon/20 transition-all">Amankan
                        kursi <i class="fa-solid fa-arrow-right ml-1 text-xs"></i></a>
                    <a href="#agenda"
                        class="text-sm font-bold px-6 py-3 rounded-full border border-graphite/15 hover:border-blue-spruce hover:text-blue-spruce transition-all">Lihat
                        agenda</a>
                </div>
                <div class="mt-8 flex flex-wrap gap-x-6 gap-y-2 text-[13px] text-graphite/70 num">
                    <span><i class="fa-solid fa-calendar-days text-blue-spruce mr-1.5"></i>Sabtu, 18 Oktober 2026</span>
                    <span><i class="fa-solid fa-clock text-blue-spruce mr-1.5"></i>09.00–10.30 WIB</span>
                    <span><i class="fa-solid fa-video text-blue-spruce mr-1.5"></i>Zoom</span>
                </div>
            </div>
            <div>
                <div class="rounded-2xl overflow-hidden border border-graphite/10 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1419833173245-f59e1b93f9ee?q=80&w=1200&auto=format&fit=crop"
                        alt="Langit biru berawan" class="hero-img w-full">
                </div>
                <div class="mt-3 flex items-center justify-between text-xs text-graphite/60">
                    <span><i class="fa-solid fa-circle text-[6px] text-blue-bell mr-1.5"></i>Untuk orang tua SD–SMA,
                        guru, pendidik</span>
                    <span class="num">Alhazen Academy</span>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-5">
        <div class="rule"></div>
    </div>

    <!-- LATAR -->
    <section class="max-w-5xl mx-auto px-5 py-12 lg:py-16">
        <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">01 — Mengapa penting</p>
        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight max-w-xl">Dunia anak berubah. Pola asuh tetap
            fondasi.</h2>
        <div class="mt-8 grid md:grid-cols-2 gap-8 text-[15px] leading-relaxed text-graphite/75">
            <p>Teknologi digital mengubah cara hidup dalam dua dekade terakhir. Hadirnya kecerdasan buatan (AI) membuat
                perubahan bergerak lebih cepat. Anak tumbuh di dunia yang tidak sama dengan dunia tempat kita
                dibesarkan.</p>
            <p>Banyak orang tua bingung: ingin melindungi anak dari sisi negatif teknologi, tapi sadar teknologi tak
                bisa dibendung dan jadi bagian masa depan anak. Webinar ini menjawab kegelisahan itu dari dua sisi:
                <span class="font-bold text-graphite">parenting</span> dan <span
                    class="font-bold text-graphite">teknologi</span>.</p>
        </div>
    </section>

    <!-- PEMBICARA -->
    <section class="border-y border-graphite/10">
        <div class="max-w-5xl mx-auto px-5 py-12 lg:py-20">
            <div class="max-w-2xl">
                <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">02 — Pembicara</p>
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Dua sisi, saling melengkapi.</h2>
                <p class="mt-3 text-[15px] text-graphite/65 leading-relaxed">Satu panggung, dua sudut pandang. Parenting
                    sebagai fondasi, teknologi sebagai bekal masa depan.</p>
            </div>
            <div class="mt-10 grid md:grid-cols-2 gap-10 lg:gap-14">
                <div class="relative">
                    <span
                        class="pointer-events-none select-none absolute -top-7 left-0 text-[5rem] leading-none font-extrabold text-watermelon/80 num">01</span>
                    <div
                        class="relative flex items-end justify-center bg-graphite/[0.04] rounded-[2rem] px-6 pt-8 overflow-hidden">
                        <span
                            class="absolute top-5 left-5 text-[11px] font-bold uppercase tracking-widest text-blue-spruce bg-white px-3 py-1.5 rounded-full shadow-sm">Parenting</span>
                        <img src="https://www.pngall.com/wp-content/uploads/2016/05/Man-Download-PNG.png"
                            alt="Ustadz Awang Insandaru"
                            class="h-80 sm:h-96 w-auto max-w-full object-contain object-bottom drop-shadow-xl">
                    </div>
                    <h3 class="font-bold text-2xl mt-6">Ustadz Awang Insandaru</h3>
                    <p class="text-sm font-medium text-graphite/60 mt-1">Sisi Parenting dalam Mendidik Anak di Era AI
                    </p>
                    <ul class="mt-5 space-y-2.5 text-sm text-graphite/75">
                        <li class="flex gap-2.5"><i
                                class="fa-solid fa-check text-blue-spruce mt-1 text-xs"></i>Komunikasi terbuka dengan
                            anak soal teknologi</li>
                        <li class="flex gap-2.5"><i class="fa-solid fa-check text-blue-spruce mt-1 text-xs"></i>Kapan
                            membatasi, kapan memberi kebebasan</li>
                        <li class="flex gap-2.5"><i class="fa-solid fa-check text-blue-spruce mt-1 text-xs"></i>Prinsip
                            parenting yang tak lekang zaman</li>
                        <li class="flex gap-2.5"><i
                                class="fa-solid fa-check text-blue-spruce mt-1 text-xs"></i>Ketahanan mental agar tak
                            bergantung berlebihan</li>
                    </ul>
                </div>
                <div class="relative md:mt-12">
                    <span
                        class="pointer-events-none select-none absolute -top-7 left-0 text-[5rem] leading-none font-extrabold text-watermelon/80 num">02</span>
                    <div
                        class="relative flex items-end justify-center bg-graphite/[0.04] rounded-[2rem] px-6 pt-8 overflow-hidden">
                        <span
                            class="absolute top-5 left-5 text-[11px] font-bold uppercase tracking-widest text-blue-bell bg-white px-3 py-1.5 rounded-full shadow-sm">Teknologi</span>
                        <img src="https://www.pngall.com/wp-content/uploads/2016/05/Man-Download-PNG.png"
                            alt="Reza Malik"
                            class="h-80 sm:h-96 w-auto max-w-full object-contain object-bottom drop-shadow-xl">
                    </div>
                    <h3 class="font-bold text-2xl mt-6">Reza Malik</h3>
                    <p class="text-sm font-medium text-graphite/60 mt-1">Sisi Teknologi yang Perlu Dipahami Orang Tua
                    </p>
                    <ul class="mt-5 space-y-2.5 text-sm text-graphite/75">
                        <li class="flex gap-2.5"><i
                                class="fa-solid fa-check text-blue-bell mt-1 text-xs"></i>Perkembangan AI terkini dan
                            dampak ke pendidikan</li>
                        <li class="flex gap-2.5"><i class="fa-solid fa-check text-blue-bell mt-1 text-xs"></i>AI hadir
                            sehari-hari, tanpa disadari orang tua</li>
                        <li class="flex gap-2.5"><i
                                class="fa-solid fa-check text-blue-bell mt-1 text-xs"></i>Kompetensi masa depan sejak
                            dini</li>
                        <li class="flex gap-2.5"><i class="fa-solid fa-check text-blue-bell mt-1 text-xs"></i>Peluang
                            pendidikan teknologi yang bisa difasilitasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SAVE THE DATE / CALENDAR -->
    <section id="jadwal" class="bg-azure-mist/40 border-y border-graphite/10">
        <div class="max-w-5xl mx-auto px-5 py-12 lg:py-16">
            <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">03 — Save the date</p>
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Catat tanggalnya.</h2>
            <p class="mt-3 text-[15px] text-graphite/65 leading-relaxed max-w-xl">Sabtu, 18 Oktober 2026 · 09.00–10.30 WIB · Online via Zoom. Hadir 15 menit sebelumnya.</p>
            <div class="mt-8 bg-white border border-graphite/10 rounded-3xl overflow-hidden shadow-sm grid lg:grid-cols-[1fr_300px]">
                <div class="p-6 sm:p-8">
                    <div class="flex items-center justify-between mb-5">
                        <p class="font-extrabold text-lg">Oktober <span class="text-graphite/40 font-bold">2026</span></p>
                        <span class="text-[11px] font-bold uppercase tracking-widest text-blue-spruce bg-azure-mist/60 px-3 py-1.5 rounded-full">Sabtu · 18</span>
                    </div>
                    <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-bold uppercase tracking-wider text-graphite/40 mb-2">
                        <span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
                    </div>
                    <div id="octCalendar" class="grid grid-cols-7 gap-1 text-center text-sm num">
                        <span class="py-2.5"></span><span class="py-2.5"></span><span class="py-2.5"></span>
                        @for ($d = 1; $d <= 31; $d++)
                            @if ($d === 18)
                                <span data-day="18" data-event="1" class="relative py-2.5 rounded-xl bg-watermelon text-white font-extrabold shadow-md shadow-watermelon/30">18</span>
                            @else
                                <span data-day="{{ $d }}" class="relative py-2.5 rounded-xl hover:bg-azure-mist/50">{{ $d }}</span>
                            @endif
                        @endfor
                    </div>
                    <div class="mt-4 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs text-graphite/60">
                        <span class="inline-flex items-center gap-2"><span class="w-3 h-3 rounded-md bg-watermelon inline-block"></span>Acara · 18 Okt</span>
                        <span id="todayLegend" class="hidden items-center gap-2"><span class="w-3 h-3 rounded-md border-2 border-blue-spruce inline-block"></span>Hari ini</span>
                    </div>
                </div>
                <div class="bg-blue-spruce text-white p-6 sm:p-8 flex flex-col justify-center gap-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold uppercase tracking-widest opacity-70 mb-0.5">Tanggal</p>
                            <p class="text-lg font-bold num">Sabtu, 18 Okt 2026</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold uppercase tracking-widest opacity-70 mb-0.5">Jam</p>
                            <p class="text-lg font-bold num">09.00 – 10.30 WIB</p>
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
    <section id="agenda" class="max-w-5xl mx-auto px-5 py-12 lg:py-16">
        <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">04 — Rangkaian</p>
        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Agenda 90 menit.</h2>
        <div class="mt-8 border-t border-graphite/10">
            <div class="flex gap-4 py-4 border-b border-graphite/10 text-sm"><span
                    class="num w-28 shrink-0 font-bold">08.30–09.00</span><span>Registrasi dan enter Zoom</span></div>
            <div class="flex gap-4 py-4 border-b border-graphite/10 text-sm"><span
                    class="num w-28 shrink-0 font-bold">09.00–09.05</span><span>Opening MC</span></div>
            <div class="flex gap-4 py-4 border-b border-graphite/10 text-sm"><span
                    class="num w-28 shrink-0 font-bold">09.05–09.10</span><span>Sambutan Alhazen Academy</span></div>
            <div class="flex gap-4 py-4 border-b border-graphite/10 text-sm"><span
                    class="num w-28 shrink-0 font-bold">09.10–09.45</span><span><span class="font-bold">Sesi 1 —
                        Parenting.</span> <span class="text-blue-spruce">Ustadz Awang Insandaru</span></span></div>
            <div class="flex gap-4 py-4 border-b border-graphite/10 text-sm"><span
                    class="num w-28 shrink-0 font-bold">09.45–09.50</span><span>Break singkat</span></div>
            <div class="flex gap-4 py-4 border-b border-graphite/10 text-sm"><span
                    class="num w-28 shrink-0 font-bold">09.50–10.20</span><span><span class="font-bold">Sesi 2 —
                        Teknologi AI.</span> <span class="text-blue-bell">Reza Malik</span></span></div>
            <div class="flex gap-4 py-4 border-b border-graphite/10 text-sm"><span
                    class="num w-28 shrink-0 font-bold">10.20–10.30</span><span>Tanya jawab dan penutup</span></div>
        </div>
    </section>

    <!-- BENEFIT -->
    <section class="bg-azure-mist/40 border-y border-graphite/10">
        <div class="max-w-5xl mx-auto px-5 py-12 lg:py-16">
            <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">04 — Benefit</p>
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Satu pendaftaran, empat benefit.</h2>
            <div
                class="mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-px bg-graphite/10 border border-graphite/10 rounded-2xl overflow-hidden shadow-sm">
                <div class="bg-white p-6">
                    <p class="num text-xs font-bold text-blue-spruce">01</p><i
                        class="fa-solid fa-video text-watermelon mt-3 text-lg"></i>
                    <h3 class="font-bold mt-2 text-[15px]">Rekaman Webinar</h3>
                    <p class="text-[13px] text-graphite/65 mt-1 leading-relaxed">Seluruh peserta mendapatkan akses
                        rekaman lengkap untuk ditonton ulang kapan saja.</p>
                </div>
                <div class="bg-white p-6">
                    <p class="num text-xs font-bold text-blue-spruce">02</p><i
                        class="fa-solid fa-ticket-simple text-watermelon mt-3 text-lg"></i>
                    <h3 class="font-bold mt-2 text-[15px]">Voucher Koding</h3>
                    <p class="text-[13px] text-graphite/65 mt-1 leading-relaxed">Voucher potongan harga pendaftaran
                        kelas koding anak di Alhazen Academy.</p>
                </div>
                <div class="bg-white p-6">
                    <p class="num text-xs font-bold text-blue-spruce">03</p><i
                        class="fa-solid fa-book text-watermelon mt-3 text-lg"></i>
                    <h3 class="font-bold mt-2 text-[15px]">Buku Digital</h3>
                    <p class="text-[13px] text-graphite/65 mt-1 leading-relaxed">Buku panduan digital 'Cepat Belajar
                        Coding untuk Anak' langsung ke email.</p>
                </div>
                <div class="bg-white p-6">
                    <p class="num text-xs font-bold text-blue-spruce">04</p><i
                        class="fa-solid fa-medal text-watermelon mt-3 text-lg"></i>
                    <h3 class="font-bold mt-2 text-[15px]">Sertifikat</h3>
                    <p class="text-[13px] text-graphite/65 mt-1 leading-relaxed">Sertifikat digital partisipasi acara
                        sebagai bukti dokumentasi pribadi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TUJUAN + TARGET -->
    <section class="max-w-5xl mx-auto px-5 py-12 lg:py-16 grid lg:grid-cols-2 gap-10">
        <div>
            <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">05 — Tujuan</p>
            <h2 class="text-2xl font-extrabold tracking-tight">Tidak panik. Fasilitasi.</h2>
            <div class="mt-6 space-y-5 text-sm leading-relaxed">
                <div class="border-l-2 border-blue-spruce pl-4">
                    <p class="font-bold mb-1">Eksplisit</p>
                    <p class="text-graphite/70">Siap hadapi perkembangan AI. Tidak berlebihan melarang; teknologi terus
                        berkembang. Pola asuh tak berubah — hanya sarana berubah.</p>
                </div>
                <div class="border-l-2 border-watermelon pl-4">
                    <p class="font-bold mb-1">Implisit</p>
                    <p class="text-graphite/70">Terbuka fasilitasi anak belajar teknologi, termasuk les koding formal.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <p class="eyebrow text-[11px] font-bold uppercase text-blue-spruce mb-3">06 — Untuk siapa</p>
            <h2 class="text-2xl font-extrabold tracking-tight">Target peserta.</h2>
            <ul class="mt-6 space-y-3 text-sm">
                <li class="flex gap-2.5"><i class="fa-solid fa-check text-blue-spruce mt-1 text-xs"></i>Orang tua anak
                    SD–SMA</li>
                <li class="flex gap-2.5"><i class="fa-solid fa-check text-blue-spruce mt-1 text-xs"></i>Orang tua yang
                    perlu paham AI untuk mendidik</li>
                <li class="flex gap-2.5"><i class="fa-solid fa-check text-blue-spruce mt-1 text-xs"></i>Guru / pendidik
                    konteks teknologi pendidikan</li>
                <li class="flex gap-2.5"><i class="fa-solid fa-check text-blue-spruce mt-1 text-xs"></i>Peduli masa
                    depan pendidikan era AI</li>
            </ul>
        </div>
    </section>

    <!-- DAFTAR -->
    <section id="daftar" class="max-w-5xl mx-auto px-5 pb-16">
        <div class="rounded-2xl border border-graphite/10 overflow-hidden grid lg:grid-cols-2 shadow-sm">
            <div class="p-8 sm:p-10 bg-white">
                <p class="eyebrow text-[11px] font-bold uppercase text-watermelon mb-3">Pendaftaran</p>
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Amankan kursi Anda.</h2>
                <form id="regForm"
                    onsubmit="event.preventDefault(); alert('Terima kasih! Pendaftaran berhasil dicatat.'); this.reset();"
                    class="mt-6 space-y-3">
                    <input required placeholder="Nama lengkap orang tua"
                        class="w-full text-sm px-4 py-3 rounded-xl border border-graphite/15 focus:outline-none focus:border-blue-spruce">
                    <input required type="email" placeholder="Email aktif"
                        class="w-full text-sm px-4 py-3 rounded-xl border border-graphite/15 focus:outline-none focus:border-blue-spruce">
                    <input required type="tel" placeholder="WhatsApp 08…"
                        class="w-full text-sm px-4 py-3 rounded-xl border border-graphite/15 focus:outline-none focus:border-blue-spruce">
                    <button type="submit"
                        class="w-full bg-watermelon text-white text-sm font-bold py-3.5 rounded-xl hover:opacity-90 shadow-md shadow-watermelon/20 transition-all">Daftar
                        Webinar</button>
                </form>
            </div>
            <div class="bg-graphite text-white p-8 sm:p-10 text-sm flex flex-col justify-between">
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
                            Academy</span><br>Sabtu, 18 Okt 2026 · Zoom</p>
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
        $address = $company['address'] ?? 'Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840';
        $socials = collect($company['socials'] ?? [])->where('is_active', true)->sortBy('sort_order');
        try {
            $footerPrograms = \App\Models\Program::active()->ordered()->get();
        } catch (\Throwable $e) {
            $footerPrograms = collect();
        }
    @endphp
    <footer class="bg-graphite text-white">
        <div class="max-w-5xl mx-auto px-5 py-12 lg:py-16 grid gap-10 md:grid-cols-12">
            <div class="md:col-span-4">
                <img src="{{ asset('assets/foot-logo-new.webp') }}" alt="Alhazen Academy" class="h-10 w-auto mb-4" loading="lazy">
                <p class="text-xs text-white/60 leading-relaxed">PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.</p>
                @if ($socials->isNotEmpty())
                    <div class="flex items-center gap-2.5 mt-5">
                        @foreach ($socials as $s)
                            <a href="{{ $s['href'] }}" target="_blank" rel="noopener" aria-label="{{ $s['label'] ?? 'Sosial media' }}" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 ring-1 ring-white/10 flex items-center justify-center transition">
                                <img src="{{ asset($s['icon_path'] ?? 'assets/kids/index-footer/Alhazen-Logo-white.png') }}" alt="{{ $s['label'] ?? 'sosmed' }}" class="w-6 h-auto object-contain" loading="lazy">
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="md:col-span-2">
                <p class="eyebrow text-[11px] font-bold uppercase text-white/40 mb-4">Program</p>
                <ul class="space-y-2.5 text-sm text-white/75">
                    @forelse ($footerPrograms as $p)
                        <li><a href="{{ url('program#program') }}" class="hover:text-white hover:underline underline-offset-4">{{ $p->name }}</a></li>
                    @empty
                        <li><a href="{{ route('kursus-coding-anak') }}" class="hover:text-white hover:underline underline-offset-4">Kursus Coding Anak</a></li>
                        <li><a href="{{ route('kursus-roblox') }}" class="hover:text-white hover:underline underline-offset-4">Kursus Roblox</a></li>
                        <li><a href="{{ route('program') }}" class="hover:text-white hover:underline underline-offset-4">Semua Program</a></li>
                    @endforelse
                </ul>
            </div>
            <div class="md:col-span-2">
                <p class="eyebrow text-[11px] font-bold uppercase text-white/40 mb-4">Lainnya</p>
                <ul class="space-y-2.5 text-sm text-white/75">
                    <li><a href="{{ route('program') }}" class="hover:text-white hover:underline underline-offset-4">Program</a></li>
                    <li><a href="{{ route('event') }}" class="hover:text-white hover:underline underline-offset-4">Event</a></li>
                    <li><a href="{{ route('artikel') }}" class="hover:text-white hover:underline underline-offset-4">Artikel</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white hover:underline underline-offset-4">Tentang Kami</a></li>
                </ul>
            </div>
            <div class="md:col-span-4">
                <p class="eyebrow text-[11px] font-bold uppercase text-white/40 mb-4">Hubungi Kami</p>
                <ul class="space-y-2 text-sm text-white/75">
                    <li><a href="tel:{{ preg_replace('/\s+/', '', $wa) }}" class="hover:text-white hover:underline">{{ $wa }}</a></li>
                    <li><a href="mailto:{{ $email }}" class="hover:text-white hover:underline">{{ $email }}</a></li>
                    <li><a href="https://{{ $site }}" target="_blank" rel="noopener" class="hover:text-white hover:underline">{{ $site }}</a></li>
                </ul>
                <p class="eyebrow text-[11px] font-bold uppercase text-white/40 mt-6 mb-2">Kantor Pusat</p>
                <a href="https://maps.google.com/?q={{ urlencode($address) }}" target="_blank" rel="noopener" class="text-xs text-white/60 leading-relaxed hover:text-white hover:underline">{{ $address }}</a>
            </div>
        </div>
        <div class="border-t border-white/10">
            <div class="max-w-5xl mx-auto px-5 py-5 text-center text-xs text-white/50">
                © {{ date('Y') }} <span class="font-semibold text-white/70">PT. Alhazen Global Teknologi</span>. All Rights Reserved.
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
        if (legend) { legend.classList.remove('hidden'); legend.classList.add('inline-flex'); }
    })();
</script>

</body>

</html>
