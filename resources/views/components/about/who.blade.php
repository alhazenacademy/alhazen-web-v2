<section class="relative py-12 lg:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- content-1 --}}
        <div class="flex flex-col lg:flex-row lg:items-center gap-10 lg:min-h-[480px] mb-10">
            {{-- LEFT: logo + dekor garis tipis --}}
            <div class="relative lg:basis-[54%] lg:shrink-0 min-w-0 flex items-center justify-center p-4">
                <img src="{{ $logo }}" alt="{{ $logoAlt }}"
                    class="w-full max-w-[620px] max-h-full object-contain rounded-[20px]" loading="lazy">
            </div>

            {{-- RIGHT: card teks --}}
            <div class="space-y-6 lg:basis-[46%] min-w-0 w-full">
                <article class="relative rounded-2xl px-6 sm:px-8 py-7">
                    @if ($icon1)
                        <div class="flex justify-center mb-3">
                            <img src="{{ $icon1 }}" alt="" class="w-15 h-15 opacity-80">
                        </div>
                    @endif

                    <h3 class="text-h3 font-bold text-[var(--color-primary)] text-center mb-4">
                        {{ $titleWho }}
                    </h3>

                    <div class="space-y-4 text-body text-text text-justify">
                        @foreach ($paragraphsWho as $p)
                            <p>{!! $p !!}</p>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>
        {{-- content-2 --}}
        <div class="flex flex-col lg:flex-row lg:items-center gap-10 lg:min-h-[480px] mb-20">
            {{-- LEFT: card teks --}}
            <div class="space-y-6 lg:basis-[46%] min-w-0 w-full">
                <article class="relative rounded-2xl px-6 sm:px-8 py-7">
                    @if ($icon2)
                        <div class="flex justify-center mb-3">
                            <img src="{{ $icon2 }}" alt="" class="w-15 h-15 opacity-80">
                        </div>
                    @endif

                    <h3 class="text-h3 font-bold text-[var(--color-primary)] text-center mb-4">
                        {{ $titleVision }}
                    </h3>
                    <div class="space-y-4 text-body text-text text-justify">
                        @foreach ($paragraphsVision as $p)
                            <p>{!! $p !!}</p>
                        @endforeach
                    </div>
                </article>
            </div>
            {{-- RIGHT: img --}}
            <div class="relative inline-block w-full mx-auto max-w-[620px]">
                {{-- Bayangan offset x-30 y-30, warna #E5E7EB, full opacity --}}
                <div class="absolute left-[30px] top-[30px] -z-10 w-full h-full rounded-[20px] bg-[#E5E7EB]"></div>
                {{-- Frame persegi panjang + gambar fit --}}
                <div class="w-full rounded-[20px] overflow-hidden">
                    <img src="{{ $imgVision }}" alt="{{ $imgVisionAlt }}"
                        class="block w-full aspect-[5/3] object-cover" loading="lazy">
                </div>
            </div>
        </div>
        {{-- content-3 --}}
        <div class="flex flex-col lg:flex-row lg:items-center gap-10 lg:min-h-[480px] mb-20">
            {{-- LEFT: img --}}
            <div class="relative inline-block w-full mx-auto max-w-[620px]">
                {{-- Bayangan offset x-30 y-30, warna #E5E7EB, full opacity --}}
                <div class="absolute right-[30px] top-[30px] -z-10 w-full h-full rounded-[20px] bg-[#E5E7EB]"></div>
                {{-- Frame persegi panjang + gambar fit --}}
                <div class="w-full rounded-[20px] overflow-hidden">
                    <img src="{{ $imgMision }}" alt="{{ $imgMisionAlt }}"
                        class="block w-full aspect-[5/3] object-cover" loading="lazy">
                </div>
            </div>

            {{-- RIGHT: card teks --}}
            <div class="space-y-6 lg:basis-[46%] min-w-0 w-full">
                <article class="relative rounded-2xl px-6 sm:px-8 py-7">
                    @if ($icon3)
                        <div class="flex justify-center mb-3">
                            <img src="{{ $icon3 }}" alt="" class="w-15 h-15 opacity-80">
                        </div>
                    @endif

                    <h3 class="text-h3 font-semibold text-[var(--color-primary)] text-center mb-4">
                        {{ $titleMision }}
                    </h3>
                    <div class="space-y-4 text-body text-text text-justify">
                        @foreach ($paragraphsMision as $p)
                            <p>{!! $p !!}</p>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>
        {{-- content-4 --}}
        <div class="flex flex-col lg:flex-row lg:items-center gap-10 lg:min-h-[480px] mb-20">
            {{-- LEFT: card teks --}}
            <div class="space-y-6 lg:basis-[46%] min-w-0 w-full">
                <article class="relative rounded-2xl px-6 sm:px-8 py-7">
                    <div class="space-y-4 text-body text-text text-justify">
                        @foreach ($paragraphsLeader as $p)
                            <p>{!! $p !!}</p>
                        @endforeach
                        <h5 class="text-h4 font-medium text-right mt-10">{{ $leaderName }}</h5>
                        <p class="text-small text-right text-text/70">{{ $leaderInfo }}</p>
                        <div class="flex justify-end">
                            <a href="{{ $leaderSosmed }}" target="_blank" rel="noopener"
                                class="inline-flex items-center leading-none text-slate-400 hover:text-slate-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-slate-400/50"
                                aria-label="Instagram">
                                <span
                                    class="inline-flex w-8 h-8 rounded-full bg-slate-500 items-center justify-center hover:bg-slate-500 transition-colors">
                                    {{-- Ikon Instagram: garis & lingkaran putih --}}
                                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" aria-hidden="true">
                                        <!-- Kotak rounded -->
                                        <rect x="3" y="3" width="18" height="18" rx="5" ry="5"
                                            fill="none" stroke="currentColor" stroke-width="2" />
                                        <!-- Lensa -->
                                        <circle cx="12" cy="12" r="4.2" fill="none"
                                            stroke="currentColor" stroke-width="2" />
                                        <!-- Titik flash -->
                                        <circle cx="17.5" cy="6.5" r="1.25" fill="currentColor"
                                            stroke="none" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            {{-- RIGHT: img --}}
            <div class="relative inline-block w-full mx-auto max-w-[620px]">
                <img src="{{ $imgLeader }}" alt="{{ $imgLeaderAlt }}" class="block w-[90%]" loading="lazy">
            </div>
        </div>
    </div>

</section>
