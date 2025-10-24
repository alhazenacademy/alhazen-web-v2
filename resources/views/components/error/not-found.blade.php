@props([
    'title' => 'Maaf, halaman yang Anda cari tampaknya sedang dalam pemeliharaan.',
    'subtitle' =>
        'Tapi jangan khawatir, kami akan membantu memandu Anda kembali ke home. Klik tautan di bawah ini untuk menjelajahi dunia kami.',
    'buttonText' => 'Kembali Ke Home',
    'buttonHref' => route('home', absolute: false),
    'image' => '/assets/kids/not-found/img-not-found.png',
    'imageAlt' => 'Oops 404',
])

<section class="relative min-h-[70vh] flex flex-col items-center justify-center gap-8 text-center px-2 py-12">
    <h2 class="text-h3 font-extrabold text-[var(--color-text)]/95 max-w-6xl">
        {{ $title }}
    </h2>

    {{-- Ilustrasi 404 --}}
    <figure class="max-w-2xl w-full">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-100 h-auto object-contain mx-auto" loading="lazy" decoding="async">
    </figure>

    <p class="text-[var(--color-text)] max-w-4xl leading-relaxed">
        {{ $subtitle }}
    </p>

    <div>
        <a href="{{ $buttonHref }}"
            class="mt-3 mb-5 inline-flex items-center gap-2 rounded-2xl px-8 py-3 text-button bg-[var(--color-accent)] text-white hover:opacity-95 hover:scale-[1.02] transition">
            {{ $buttonText }}
        </a>
    </div>
</section>
