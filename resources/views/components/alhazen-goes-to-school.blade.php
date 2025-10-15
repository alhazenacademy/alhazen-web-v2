<section class="py-8 sm:py-12 lg:py-16 bg-background">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-left order-2 lg:order-1">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('assets/kids/icon-bus.svg') }}" alt="Bus Icon" class="w-12 h-12 sm:w-16 sm:h-16">
            </div>
            <h2 class="text-h2 font-bold text-primary mb-4 text-center lg:text-left">
                {{ $title }}
            </h2>
            <p class="text-body text-text max-w-full sm:max-w-2xl leading-relaxed text-justify">
                {!! $description !!}
            </p>
            <p class="text-small mt-4 max-w-full sm:max-w-2xl text-justify">
                {!! $content !!}
            </p>
        </div>

        <div
            class="absolute -bottom-6 -right-2 sm:-bottom-8 sm:-right-4 sm:w-64 sm:h-64 md:w-80 md:h-80 lg:w-80 lg:h-80 bg-[#10B981] rounded-full opacity-12 z-0">
        </div>

        <img src="{{ $image }}" alt="Students in Classroom"
            class="relative rounded-2xl shadow-lg max-w-sm sm:max-w-md lg:max-w-lg w-full rotate-[4deg] transform-gpu mr-4 sm:mr-8 mb-4 sm:mb-8 z-10 hover:scale-105 hover:shadow-2xl transition-all duration-300 ease-in-out">
    </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 mt-6 lg:mt-16">
        @foreach ($cards as $card)
            <div class="text-left flex flex-col h-full p-4 md:p-0">
                <div class="flex justify-start mb-4">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 {{ $card['bg'] }} rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-xl md:text-2xl font-bold {{ $card['text-color'] }}">{{ $card['no'] }}</span>
                    </div>
                </div>
                <h3
                    class="text-h4 font-bold text-text mb-6 md:mb-8 h-12 md:h-16 flex items-start leading-tight text-base md:text-h4">
                    {!! $card['title'] !!}
                </h3>
                <p class="text-small leading-relaxed flex-1 text-justify text-sm md:text-small">
                    {!! $card['description'] !!}
                </p>
            </div>
        @endforeach
    </div>
    </div>
</section>
