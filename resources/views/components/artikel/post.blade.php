@props([
    'title' => 'Judul Artikel Dummy',
    'date' => 'October 15, 2025',
    'authorName' => 'Alhazen Team',
    'authorAvatar' => asset('assets/kids/artikel/icon-penulis.png'),
    'readingTime' => '6 menit baca',
    'cover' => asset('assets/kids/artikel/thumbnail-article-2.webp'),
    'tags' => ['Coding For Kids', 'Tutorial'],
    'content' => null, // kalau null, pakai dummy HTML di bawah
    'backHref' => route('artikel', absolute: false),
])

@php
    $dummy = <<<HTML
    <p><strong>Coding Starter Kit</strong> adalah paket panduan praktis agar anak bisa mulai belajar coding dari rumah dengan perangkat dan software yang mudah diakses. Di artikel ini kamu akan menemukan daftar alat, software yang direkomendasikan, langkah instalasi, hingga aktivitas pertama yang menyenangkan.</p>

    <h2>Mengapa Starter Kit Penting?</h2>
    <ul>
      <li><strong>Struktur jelas</strong> – orang tua dan siswa tahu harus mulai dari mana.</li>
      <li><strong>Biaya efisien</strong> – memaksimalkan software gratis/edu.</li>
      <li><strong>Belajar mandiri</strong> – aktivitas langkah-demi-langkah yang bisa diikuti di rumah.</li>
    </ul>

    <h2>Perangkat yang Direkomendasikan</h2>
    <ul>
      <li><strong>Laptop/PC</strong> Windows/macOS (RAM minimal 4 GB; ideal 8 GB), koneksi internet stabil.</li>
      <li><strong>Browser</strong> modern (Chrome/Edge/Firefox) untuk akses platform coding berbasis web.</li>
      <li><strong>Opsional</strong>: Headset & webcam untuk kelas online, mouse agar lebih nyaman.</li>
    </ul>

    <h2>Software & Akun yang Dibutuhkan</h2>
    <ol>
      <li><strong>Scratch</strong> (web/app) – pemrograman blok visual untuk pemula.</li>
      <li><strong>Code.org</strong> (akun gratis) – latihan konsep dasar & puzzle.</li>
      <li><strong>Visual Studio Code</strong> – editor untuk HTML/CSS/JS saat mulai teks-based.</li>
      <li><strong>Python</strong> (opsional untuk usia lebih besar) – via <em>python.org</em> atau Replit.</li>
      <li><strong>Replit</strong> / <strong>Glitch</strong> – coding langsung di browser tanpa instalasi.</li>
    </ol>

    <h2>Langkah Persiapan (Setup)</h2>
    <ol>
      <li>Perbarui OS dan browser ke versi terbaru.</li>
      <li>Instal VS Code (jika akan coba HTML/CSS/JS) dan aktifkan ekstensi <em>Live Server</em>.</li>
      <li>Buat akun di Scratch dan Code.org (pakai email orang tua).</li>
      <li>Siapkan folder belajar: <code>Documents/Alhazen/Coding-Starter</code>.</li>
    </ol>

    <h2>Aktivitas Pertama (60–90 menit)</h2>
    <h3>A. Scratch – Animasi Karakter (30–40 menit)</h3>
    <ul>
      <li>Buat proyek baru, ganti <em>sprite</em> jadi karakter yang disukai.</li>
      <li>Tambahkan event <code>when green flag clicked</code> lalu gerakkan karakter dan tampilkan <em>say</em>.</li>
      <li>Eksplorasi <em>sound</em> dan <em>backdrop</em> untuk efek seru.</li>
    </ul>

    <h3>B. Web Dasar – Halaman “Hello, World!” (30–40 menit)</h3>
    <p>Buka VS Code, buat file <code>index.html</code>, lalu tempel kode ini:</p>
    <pre><code>&lt;!doctype html&gt;
    &lt;html lang="id"&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
      &lt;title&gt;Hello, World!&lt;/title&gt;
      &lt;style&gt;
        body { font-family: system-ui, sans-serif; display:grid; place-content:center; min-height:100vh; }
        h1 { color:#10B981; }
      &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Hello, World!&lt;/h1&gt;
      &lt;p&gt;Ini proyek web pertamaku 🚀&lt;/p&gt;
      &lt;script&gt;console.log('Belajar coding itu seru!');&lt;/script&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </code></pre>
    <p>Jalankan dengan ekstensi <em>Live Server</em> agar langsung terlihat di browser.</p>

    <h2>Rencana Belajar 4 Minggu</h2>
    <ol>
      <li><strong>Minggu 1</strong>: Scratch – Event & Motion (2 proyek mini).</li>
      <li><strong>Minggu 2</strong>: Scratch – Loop & Kondisi (game sederhana).</li>
      <li><strong>Minggu 3</strong>: HTML & CSS – Struktur & styling dasar (homepage pribadi).</li>
      <li><strong>Minggu 4</strong>: JavaScript dasar – interaksi (tombol & event click).</li>
    </ol>

    <h2>Tips untuk Orang Tua</h2>
    <ul>
      <li>Tetapkan waktu belajar rutin (45–60 menit, 2–3x per minggu).</li>
      <li>Rayakan progres kecil (selesaikan 1 proyek = 1 lencana).</li>
      <li>Dampingi saat membuat akun & mengunggah karya.</li>
    </ul>

    <blockquote>Konsistensi lebih penting daripada durasi sekali belajar. Sedikit tapi sering menghasilkan kebiasaan baik dalam jangka panjang.</blockquote>

    <h2>FAQ Ringkas</h2>
    <p><strong>1) Mulai usia berapa?</strong> Scratch ideal mulai 7–8 tahun. HTML/CSS/JS bisa mulai 10–12 tahun, tergantung kesiapan.</p>
    <p><strong>2) Apakah harus laptop mahal?</strong> Tidak. Yang penting stabil, RAM minimal 4 GB, dan browser modern.</p>
    <p><strong>3) Perlu internet?</strong> Ya, untuk platform web & materi. Namun banyak proyek bisa disimpan offline.</p>

    <h2>Langkah Selanjutnya</h2>
    <ul>
      <li>Seleseikan 2 proyek Scratch + 1 halaman HTML sederhana.</li>
      <li>Publikasikan hasil di akun Scratch/host statis gratis.</li>
      <li>Ikuti kelas trial/mentoring untuk umpan balik.</li>
    </ul>
    HTML;
@endphp


<section class="relative">
    {{-- Progress baca --}}
    <div class="fixed left-0 top-0 h-1.5 w-full bg-[var(--color-neutral)]/30 z-40">
        <div id="readProgressBar" class="h-full bg-[var(--color-primary)]"
            style="transform-origin:0 0; transform:scaleX(0)"></div>
    </div>

    <div class="mx-auto max-w-3xl px-4 sm:px-6">
        {{-- Back link --}}
        <div class="pt-8">
            <a href="{{ $backHref }}"
                class="text-small text-text/70 hover:text-[var(--color-primary)] underline underline-offset-2">
                ← Kembali ke Artikel
            </a>
        </div>

        {{-- Header --}}
        <header class="mt-6 mb-5">
            <h1 class="text-h2 md:text-h1 font-extrabold">{{ $title }}</h1>
            <div class="mt-4 flex flex-wrap items-center gap-3 text-small text-text/70">
                <img src="{{ $authorAvatar }}" alt="{{ $authorName }}" class="size-9 rounded-full object-cover"
                    loading="lazy" decoding="async">
                <span class="font-medium text-text/90">{{ $authorName }}</span>
                @if ($date)
                    <span>• {{ $date }}</span>
                @endif
                @if ($readingTime)
                    <span>• {{ $readingTime }}</span>
                @endif
            </div>
        </header>

        {{-- Cover --}}
        @if ($cover)
            <figure class="my-6">
                <img src="{{ $cover }}" alt="" class="w-full h-auto rounded-2xl object-cover">
            </figure>
        @endif

        {{-- Content --}}
        <article class="prose">
            {!! $content ?? $dummy !!}
        </article>

        {{-- Tags + share --}}
        <div class="mt-8 flex flex-wrap items-center justify-between gap-4">
            <div class="flex flex-wrap gap-2">
                @foreach ($tags as $t)
                    <span
                        class="px-3 py-1 rounded-full border border-[var(--color-neutral)]/70 bg-white text-small">{{ $t }}</span>
                @endforeach
            </div>
            <div class="flex items-center gap-3">
                {{-- Twitter / X --}}
                <a class="size-9 grid place-items-center rounded-full border border-[var(--color-neutral)]/70 hover:text-[var(--color-primary)]"
                    target="_blank" rel="noopener"
                    href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($title) }}"
                    aria-label="Bagikan ke X">
                    <svg viewBox="0 0 24 24" class="size-5" aria-hidden="true">
                        <path fill="currentColor"
                            d="M22 5.8c-.7.3-1.4.5-2.2.6.8-.5 1.3-1.2 1.6-2.1-.7.4-1.5.8-2.4 1A3.8 3.8 0 0 0 12 7.9c0 .3 0 .6.1.9-3.2-.2-6-1.7-7.9-4.1-.3.6-.5 1.2-.5 1.9 0 1.3.7 2.5 1.8 3.2-.6 0-1.2-.2-1.7-.5v.1c0 1.9 1.3 3.5 3.1 3.8-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.6 1.9 2.7 3.6 2.8A7.6 7.6 0 0 1 2 18.6 10.7 10.7 0 0 0 7.8 20c7.6 0 11.8-6.3 11.8-11.8v-.5c.8-.5 1.4-1.2 1.9-1.9z" />
                    </svg>
                </a>

                {{-- Facebook --}}
                <a class="size-9 grid place-items-center rounded-full border border-[var(--color-neutral)]/70 hover:text-[var(--color-primary)]"
                    target="_blank" rel="noopener"
                    href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                    aria-label="Bagikan ke Facebook">
                    <svg viewBox="0 0 24 24" class="size-5" aria-hidden="true">
                        <path fill="currentColor"
                            d="M22 12a10 10 0 1 0-11.6 9.9v-7h-2.3V12h2.3V9.8c0-2.3 1.3-3.6 3.4-3.6.99 0 2.02.18 2.02.18v2.2h-1.14c-1.12 0-1.47.7-1.47 1.4V12h2.5l-.4 2.9h-2.1v7A10 10 0 0 0 22 12" />
                    </svg>
                </a>

                {{-- LinkedIn --}}
                <a class="size-9 grid place-items-center rounded-full border border-[var(--color-neutral)]/70 hover:text-[var(--color-primary)]"
                    target="_blank" rel="noopener"
                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                    aria-label="Bagikan ke LinkedIn">
                    <svg viewBox="0 0 24 24" class="size-5" aria-hidden="true">
                        <path fill="currentColor"
                            d="M22.225 0H1.771C.792 0 0 .77 0 1.723v20.555C0 23.23.792 24 1.771 24h20.451C23.2 24 24 23.23 24 22.278V1.723C24 .77 23.2 0 22.225 0zM6.812 20.452H3.861V9h2.951v11.452zM5.337 7.433a1.744 1.744 0 1 1 .001-3.488 1.744 1.744 0 0 1-.001 3.488zM20.447 20.452H17.3v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.448-2.136 2.944v5.662H10.17V9h3.012v1.561h.043c.42-.796 1.446-1.636 2.977-1.636 3.183 0 3.77 2.095 3.77 4.819v6.708z" />
                    </svg>
                </a>

                {{-- WhatsApp --}}
                <a class="size-9 grid place-items-center rounded-full border border-[var(--color-neutral)]/70 hover:text-[var(--color-primary)]"
                    target="_blank" rel="noopener"
                    href="https://wa.me/?text={{ urlencode($title . ' ' . url()->current()) }}"
                    aria-label="Bagikan ke WhatsApp">
                    <svg viewBox="0 0 24 24" class="size-5" aria-hidden="true">
                        <path fill="currentColor"
                            d="M20.52 3.48A11.78 11.78 0 0 0 12.004 0C5.373 0 .002 5.373.002 12.004c0 2.114.552 4.172 1.6 5.98L0 24l6.18-1.613a11.96 11.96 0 0 0 5.826 1.486h.005c6.63 0 12.002-5.373 12.002-12.004a11.94 11.94 0 0 0-3.494-8.389zM12.01 22.06h-.004a9.96 9.96 0 0 1-5.08-1.393l-.364-.216-3 .7.98-3.572-.237-.367a9.96 9.96 0 0 1-1.534-5.307c0-5.503 4.476-9.98 9.983-9.98 2.668 0 5.175 1.04 7.063 2.928a9.93 9.93 0 0 1 2.92 7.06c0 5.506-4.477 9.99-9.982 9.99zm5.49-7.466c-.3-.15-1.77-.87-2.043-.969-.273-.1-.472-.15-.67.151-.198.3-.77.968-.944 1.169-.173.2-.348.225-.648.075-.3-.15-1.26-.463-2.397-1.476-.885-.788-1.48-1.761-1.653-2.061-.2-.3-.05-.463.1-.612.134-.133.3-.348.448-.522.15-.173.2-.3.3-.5.1-.2.05-.375-.025-.524-.075-.15-.67-1.611-.916-2.206-.24-.577-.484-.5-.67-.51l-.57-.01c-.2 0-.524.075-.8.375s-1.05 1.025-1.05 2.5c0 1.475 1.075 2.9 1.225 3.1.15.2 2.11 3.225 5.112 4.514.715.308 1.27.492 1.703.63.715.227 1.366.195 1.879.118.572-.085 1.77-.724 2.02-1.423.25-.7.25-1.3.175-1.425-.075-.125-.273-.2-.572-.35z" />
                    </svg>
                </a>

            </div>
        </div>

        {{-- Author bio ringkas --}}
        <aside class="mt-10 p-5 rounded-2xl border border-[var(--color-neutral)]/70 bg-white/80">
            <div class="flex items-center gap-4">
                <img src="{{ $authorAvatar }}" alt="{{ $authorName }}" class="size-12 rounded-full object-cover" loading="lazy" decoding="async">
                <div>
                    <div class="font-semibold">{{ $authorName }}</div>
                    <div class="text-small text-text/70">Penulis di Alhazen Academy</div>
                </div>
            </div>
        </aside>
    </div>
</section>

{{-- Progress bar script --}}
<script>
    (() => {
        const bar = document.getElementById('readProgressBar');
        if (!bar) return;
        const onScroll = () => {
            const el = document.documentElement;
            const body = document.body;
            const st = el.scrollTop || body.scrollTop;
            const h = (body.scrollHeight || el.scrollHeight) - el.clientHeight;
            const p = Math.max(0, Math.min(1, st / Math.max(1, h)));
            bar.style.transform = `scaleX(${p})`;
        };
        document.addEventListener('scroll', onScroll, {
            passive: true
        });
        onScroll();
    })();
</script>

{{-- Tipografi sederhana ala Medium (pakai token kamu) --}}
<style>
    .prose {
        color: var(--color-text)
    }

    .prose h1,
    .prose h2,
    .prose h3,
    .prose h4,
    .prose h5 {
        font-weight: 500;
        letter-spacing: -.01em
    }

    .prose h1 {
        font-size: var(--font-size-h2);
        line-height: 1.16;
        margin: 1.2em 0 .4em
    }

    .prose h2 {
        font-size: var(--font-size-h3);
        line-height: 1.2;
        margin: 1.2em 0 .35em
    }

    .prose h3 {
        font-size: var(--font-size-h4);
        line-height: 1.25;
        margin: 1em 0 .3em
    }

    .prose p {
        font-size: var(--font-size-body);
        line-height: 1.8;
        margin: .85em 0
    }

    .prose ul,
    .prose ol {
        padding-left: 1.25rem;
        margin: .75em 0
    }

    .prose li {
        margin: .35em 0
    }

    .prose a {
        color: var(--color-primary);
        text-decoration: underline;
        text-underline-offset: 3px
    }

    .prose blockquote {
        border-left: 4px solid var(--color-primary);
        padding-left: 1rem;
        margin: 1.25rem 0;
        color: color-mix(in oklab, var(--color-text) 85%, #000);
        font-style: italic;
        background: color-mix(in oklab, #fff 88%, var(--color-primary));
        border-radius: 8px
    }

    .prose img {
        border-radius: 16px
    }

    .prose pre {
        background: #0b1220;
        color: #e5e7eb;
        padding: 1rem;
        border-radius: 14px;
        overflow: auto
    }

    .prose code {
        font-family: ui-monospace, SFMono-Regular, Menlo, monospace
    }
</style>
