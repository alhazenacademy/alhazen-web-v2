<section class="py-12 sm:py-16">
    <div class="mx-auto max-w-5xl px-4 sm:px-6">
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
            <h2 class="text-h2 font-bold text-primary mb-4">{!! $title !!}</h2>
            <p class="text-body max-w-2xl mx-auto text-neutral-content">{!! $description !!}</p>
        </div>

        <div class="space-y-4">
            @foreach ($items as $i => $item)
                @php
                    $qid = 'faq-item-' . $i;
                @endphp
                <div x-data="{ open: false }"
                    class="rounded-2xl border border-[color:var(--color-neutral)] bg-white shadow-sm">
                    <h3>
                        <button :aria-expanded="open.toString()" :class="open ? 'rounded-t-2xl' : 'rounded-2xl'"
                            @click="open = !open"
                            class="w-full text-left px-5 sm:px-6 py-4 sm:py-5 flex items-center gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[color:var(--color-primary)]/60 cursor-pointer"
                            aria-controls="{{ $qid }}">
                            <span class="flex-1 font-medium text-[color:var(--color-text)]">
                                {{ $item['q'] ?? '' }}
                            </span>

                            <span
                                class="shrink-0 inline-flex items-center justify-center w-8 h-8 rounded-full bg-[color:var(--color-neutral)]/60">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 9l6 6 6-6" />
                                </svg>
                            </span>
                        </button>
                    </h3>

                    <div x-cloak x-show="open" x-collapse id="{{ $qid }}"
                        class="px-5 sm:px-6 pb-5 sm:pb-6 text-[15px] leading-relaxed text-slate-600">
                        {!! $item['a'] ?? '' !!}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-8 sm:mt-10">
            <a href="{{ $ctaHref }}"
                class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-[color:var(--color-primary)] text-white text-button  hover:scale-105 transition-all duration-200 ease-in-out text-button">
                {{ $ctaLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor">
                    <path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>
