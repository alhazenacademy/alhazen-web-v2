@props([
    'title' => 'Title Class Here',

    'description' => 'Description class here',

    'discountLabel' => 'Discount Label Here',
    'discountAmount' => 'Discount Amount Here',

    'benefitsLeft' => [
        'Benefit 1',
        'Benefit 2',
        'Benefit 3',
        'Benefit 4',
    ],

    'benefitsRight' => [
        'Benefit 1',
        'Benefit 2',
        'Benefit 3',
        'Benefit 4',
    ],

    'closing' => 'Closing text here.',
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
                            {{ $discountLabel }}
                            <span class="text-yellow-300">{{ $discountAmount }}</span>
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
