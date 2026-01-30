@props([
    'title' => 'Kompetisi Hackathon Alhazen Academy',
    'subtitle' => 'Ajang kompetisi teknologi bagi anak dan remaja untuk <strong>berpikir kreatif</strong>, <strong>memecahkan masalah</strong>, dan <strong>membangun solusi digital</strong> melalui coding, game, dan aplikasi.',
    'banner' => asset('assets/kids/hackathon/hero.webp'),    
])

<section class="relative overflow-hidden py-16 sm:py-20">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">

            {{-- LEFT: TEXT --}}
            <div class="relative z-10">
                {{-- IMAGE (Mobile Only) --}}
                <div class="mb-6 lg:hidden">
                    <div class="relative rounded-2xl overflow-hidden shadow-lg bg-white">
                        <img
                            src="{{ $banner }}"
                            alt="NgabuburIT Class"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        />
                    </div>
                </div>

                <h1 class="text-h2 font-bold text-primary leading-tight mb-4">
                    {{ $title }}
                </h1>

                <p class="text-body text-text/80 max-w-xl mb-6">
                    {!! $subtitle !!}
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#daftar"
                        class="inline-flex justify-center rounded-xl px-6 py-3 text-button bg-accent text-white hover:scale-105 transition-all duration-200 ease-in-out">
                        Daftar Sekarang
                    </a>

                    <a href="#tentang"
                        class="inline-flex items-center justify-center rounded-xl px-6 py-3 text-button bg-white text-accent ring-1 ring-accent hover:bg-accent/5 transition">
                        Lihat Detail Kompetisi
                    </a>
                </div>

                {{-- Info badges --}}
                <div class="mt-6 flex flex-wrap gap-3 text-sm">
                    <span class="px-3 py-1 rounded-lg bg-neutral/40">
                        👦👧 Usia 9–18 Tahun
                    </span>
                    <span class="px-3 py-1 rounded-lg bg-neutral/40">
                        💻 Online & Offline
                    </span>
                    <span class="px-3 py-1 rounded-lg bg-neutral/40">
                        🏆 Sertifikat & Hadiah
                    </span>
                </div>
            </div>

            {{-- RIGHT: IMAGE --}}
            <div class="relative hidden lg:block">

                <div
                    class="relative rounded-[28px] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,.15)] bg-white">

                    <img
                        src="{{ $banner }}"
                        alt="Kompetisi Hackathon Alhazen Academy"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    />

                </div>
            </div>

        </div>
    </div>
</section>
