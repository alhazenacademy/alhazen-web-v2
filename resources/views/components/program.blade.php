<section class="py-16 md:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 md:mb-12 relative">
            <div class="flex justify-center gap-3 items-center mb-2 md:mb-4 px-4 sm:px-8 md:px-12">
                <img src="{{ asset('assets/kids/icon-toga-rotasi.svg') }}" alt="Grad cap icon"
                    class="w-8 h-8 md:w-10 md:h-10 opacity-50" loading="lazy">
                <img src="{{ asset('assets/kids/icon-laptop-rotasi.svg') }}" alt="Laptop icon"
                    class="w-8 h-8 md:w-10 md:h-10 opacity-50" loading="lazy">
            </div>

            <div class="relative mb-4 md:mb-6 h-32 md:h-40 lg:h-48">
                <img src="{{ asset('assets/kids/kazen-hi.png') }}" alt="Kid waving"
                    class="absolute left-0 top-0 w-auto h-full md:h-full lg:h-full -translate-y-2 md:-translate-y-4 opacity-90 hidden sm:block object-contain"
                    loading="lazy">
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-green-600 leading-tight pl-0 sm:pl-20 md:pl-24 lg:pl-28 text-center relative z-10">
                    {{ $title }}
                </h2>
                <p
                    class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed relative z-10">
                    {{ $subtitle }}
                </p>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-2 sm:gap-4 lg:gap-7">
            @foreach ($cards as $card)
                <div class="basis-full sm:basis-1/2 lg:basis-1/4 max-w-[280px] w-full">
                    <div
                        class="group mx-auto rounded-xl relative overflow-hidden {{ $card['bg'] }} hover:shadow-xl transition-all duration-300 h-28 sm:h-36 lg:h-44 will-change-transform">

                        <img src="{{ $card['child'] }}" alt="{{ $card['title'] }} child"
                            class="absolute right-2 top-5 w-1/2 h-full object-cover z-20 pointer-events-none select-none"
                            loading="lazy">

                        <div
                            class="absolute bottom-4 left-6 w-17 h-17 flex items-center justify-center
                            transition-transform duration-300 ease-out will-change-transform origin-bottom-left
                            group-hover:-rotate-12 group-hover:-translate-y-1 group-hover:translate-x-1">
                            <img src="{{ $card['icon'] }}" alt="{{ $card['title'] }} icon"
                                class="w-auto h-full pointer-events-none select-none" loading="lazy">
                        </div>

                        <div
                            class="absolute top-3 left-6 {{ $card['text-color'] }} transition-all duration-300 ease-out
                               group-hover:z-50 group-hover:scale-[1.03] group-hover:drop-shadow-[0_2px_10px_rgba(0,0,0,0.35)]">
                            <h3
                                class="relative text-h3 sm:text-sm font-bold leading-tight mb-0.5
                               ">
                                {{ $card['title'] }}
                            </h3>
                            <p class="text-small sm:text-xs leading-tight opacity-90">{{ $card['sub'] }}</p>
                        </div>

                        <span
                            class="pointer-events-none absolute inset-0 bg-black/0 transition-colors duration-300 group-hover:bg-black/5"></span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
