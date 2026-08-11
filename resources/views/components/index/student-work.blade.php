<section id="student-work" class="py-8 sm:py-16 lg:py-20 relative overflow-visible">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
            class="mb-8 lg:mb-12 flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 lg:gap-8 relative z-10">
            <div class="text-center mx-auto">
                <h2 class="text-h2 font-bold text-primary leading-tight text-center mb-4">{!! $title !!}</h2>
                <p class="text-body text-text max-w-xl md:max-w-2xl mx-auto md:mx-0">{!! $description !!}</p>
            </div>
        </div>

        <div class="relative overflow-visible pt-4">
            <div class="flex flex-wrap justify-center gap-6">
                @forelse ($cards as $card)
                <div class="w-full md:w-[calc(50%-12px)] xl:w-[calc(25%-18px)] z-10">
                    <article class="group bg-white rounded-2xl border border-slate-200 shadow-sm
                        hover:shadow-xl hover:-translate-y-2
                        transition-all duration-300 overflow-hidden flex flex-col">

                        {{-- Image + Badge --}}
                        <div class="relative">
                            <div class="relative overflow-hidden">
                                <img src="{{ asset($card['image'] ?? 'assets/kids/student-work/student_work_dummy.png') }}"
                                    alt="{{ $card['alt'] }}"
                                    class="w-full aspect-[12/6] object-cover transition-all duration-500 group-hover:opacity-0 group-hover:scale-105">

                                <img src="{{ asset($card['hover_image'] ?? 'assets/kids/student-work/student_work_hover_dummy.png') }}"
                                    alt="{{ $card['alt'] }}"
                                    class="absolute inset-0 w-full h-full object-cover opacity-0 transition-all duration-500 group-hover:opacity-100 group-hover:scale-105">
                            </div>

                            <span
                                class="absolute top-4 right-4 inline-flex px-3 py-1 rounded-full text-xs font-semibold text-white {{ $card['bg-text'] }}">
                                {{ $card['category'] }}
                            </span>
                        </div>

                        {{-- Content --}}
                        <div class="flex flex-col flex-1 p-5">
                            <h3 class="text-xl font-semibold text-primary mb-2">
                                {{ $card['title'] }}
                            </h3>

                            <p
                                class="text-sm text-gray-600 flex-1 overflow-hidden line-clamp-3 group-hover:line-clamp-none transition-all duration-300">
                                {{ $card['description'] }}
                            </p>

                            <a href="{{ $card['demo_link'] ?: '404' }}" target="_blank"
                                class="mt-5 flex items-center justify-center rounded-xl bg-primary text-white py-3 font-medium transition-all duration-300 hover:bg-accent hover:shadow-lg hover:shadow-primary/20">
                                ▶ Demo
                            </a>
                        </div>

                    </article>
                </div>
                @empty
                <div class="w-full flex justify-center z-10">
                    <div class="w-full max-w-6xl h-80 rounded-2xl border-2 border-dashed border-gray-300 bg-gray-50 flex flex-col items-center justify-center text-center transition-all duration-300 hover:border-primary hover:bg-primary/5">

                        <div class="w-16 h-16 rounded-full bg-white shadow flex items-center justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L15 12l-5.25-5" />
                            </svg>
                        </div>

                        <p class="max-w-md text-gray-500">
                            Hasil karya terbaik siswa Alhazen Academy akan ditampilkan di sini.
                            Nantikan berbagai game, aplikasi, robot, dan project menarik lainnya!
                        </p>

                    </div>
                </div>
                @endforelse
            </div>

            <div
                class="hidden lg:block absolute top-0 right-3 z-0 pointer-events-none select-none translate-y-[calc(-100%+1rem)]">
                <img src="{{ asset('assets/kids/index-student-work/maskot-mendali.webp') }}"
                    class="w-32 sm:w-40 lg:w-52 object-contain drop-shadow-xl" alt="Maskot Alhazen Academy Student Work"
                    loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>
