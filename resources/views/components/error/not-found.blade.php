@props([
    'title' => 'Ups! Halaman tidak ditemukan.',
    'subtitle' =>'Tautan yang kamu buka tidak tersedia atau sudah dipindahkan. Kembali ke beranda atau jelajahi halaman lain.',
    'buttonText' => 'Kembali ke Home',
    'buttonHref' => route('home', absolute: false),
    'image' => '/assets/kids/not-found/img-not-found.png',
    'imageAlt' => '404 Not Found',
])

<section class="relative min-h-[70vh] flex flex-col items-center justify-center gap-8 text-center px-4 py-14">

    {{-- Headline (setema dengan Coming Soon) --}}
    <div class="max-w-3xl">
        <span
            class="inline-block rounded-full px-3 py-1 text-[12px] font-semibold ring-1 ring-[var(--color-neutral)]/70 bg-[var(--color-background)]/80 mb-3">
            404 Not Found
        </span>
        <h1 class="text-h2 font-extrabold text-[var(--color-primary)] leading-tight mb-2">
            {{ $title }}
        </h1>
        <p class="text-body text-[var(--color-text)]/85">
            {{ $subtitle }}
        </p>
    </div>

    {{-- Illustration (ukuran & posisi setema) --}}
    <figure class="max-w-2xl w-full">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-80 h-auto object-contain mx-auto select-none"
            loading="lazy" decoding="async">
    </figure>

    {{-- Actions (gaya tombol sama) --}}
    <div class="flex flex-col sm:flex-row items-center gap-3 mt-2">
        <a href="{{ $buttonHref }}"
            class="inline-flex items-center gap-2 rounded-2xl px-6 py-3 text-button bg-[var(--color-accent)] text-white hover:opacity-95 hover:scale-[1.02] transition">
            {{ $buttonText }}
        </a>
    </div>

    {{-- Small note --}}
    <p class="text-small text-[var(--color-text)]/55">
        Cobalah memeriksa kembali URL untuk memastikan tidak ada kesalahan pengetikan.
    </p>
</section>

