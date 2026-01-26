@props([
    'title' => 'Benefit Mengikuti Hackathon',

    'description' => 'Hackathon Alhazen Academy bukan hanya ajang lomba, tetapi pengalaman belajar yang berkesan, penuh apresiasi, dan membuka peluang baru bagi anak.',

    'prizeLabel' => 'Total Hadiah Hingga',
    'prizeAmount' => 'Rp. 6.000.000',

    'benefitsLeft' => [
        'Piala untuk pemenang',
        'Total hadiah uang tunai <strong>Rp. 6 Juta</strong>',
        'Beasiswa program Alhazen Academy hingga <strong>Rp. 1,5 Juta</strong>',
        'Free 1 session English / Arabic / Coding Class',
    ],

    'benefitsRight' => [
        'Sertifikat Kompetensi & E-Sertifikat',
        'Merchandise & Goodie Bag eksklusif',
        'Akses ke Komunitas After Class Alhazen',
        'Relasi dengan mentor & peserta lain',
    ],

    'closing' => 'Semua peserta akan pulang membawa pengalaman berharga, rasa percaya diri, dan semangat untuk terus berkembang di dunia teknologi.',
])

<section id="benefit-hackathon" class="relative py-10 sm:py-14">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Decorative stars (STATIC IMAGE) --}}
        <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
            class="pointer-events-none select-none absolute -left-3 -top-6 w-14 sm:w-16 z-10" loading="lazy" />
        <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
            class="pointer-events-none select-none absolute -right-3 -bottom-6 w-14 sm:w-16 z-10" loading="lazy" />

        {{-- Card --}}
        <div
            class="relative rounded-[28px] px-6 sm:px-10 py-8 sm:py-10 bg-gradient-to-b from-[#10B981] to-[#065F46] text-white shadow-[0_20px_50px_rgba(16,185,129,.25)]">

            <div class="flex flex-col sm:flex-row gap-6 items-start">

                {{-- Icon (STATIC SVG) --}}
                <div
                    class="shrink-0 w-14 h-14 rounded-2xl bg-white/15 flex items-center justify-center ring-1 ring-white/30">
                    <svg viewBox="0 0 24 24" class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M12 2l3 7h7l-5.5 4.2L18 21l-6-4-6 4 1.5-7.8L2 9h7l3-7z" />
                    </svg>
                </div>

                {{-- Content --}}
                <div class="flex-1">

                    <h3 class="font-semibold text-[22px] sm:text-[26px] mb-3">
                        {{ $title }}
                    </h3>

                    <p class="text-white/90 leading-relaxed mb-6">
                        {{ $description }}
                    </p>

                    {{-- Highlight Prize --}}
                    <div class="mb-6">
                        <p class="font-bold text-[18px] sm:text-[25px]">
                            {{ $prizeLabel }}
                            <span class="text-yellow-300">{{ $prizeAmount }}</span>
                        </p>
                    </div>

                    {{-- Benefit List --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        {{-- Column 1 --}}
                        <ul class="space-y-3 text-white/90">
                            @foreach ($benefitsLeft as $item)
                                <li class="flex gap-3 items-start">
                                    <span class="mt-1 w-2 h-2 rounded-full bg-white shrink-0"></span>
                                    <span>{!! $item !!}</span>
                                </li>
                            @endforeach
                        </ul>

                        {{-- Column 2 --}}
                        <ul class="space-y-3 text-white/90">
                            @foreach ($benefitsRight as $item)
                                <li class="flex gap-3 items-start">
                                    <span class="mt-1 w-2 h-2 rounded-full bg-white shrink-0"></span>
                                    <span>{!! $item !!}</span>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                    {{-- Closing --}}
                    <p class="mt-6 text-white/90 leading-relaxed">
                        {{ $closing }}
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
