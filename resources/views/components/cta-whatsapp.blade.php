<section class="relative py-8">
    <div x-data="" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <img src="{{ asset('assets/kids/icon-start.png') }}" alt=""
            class="pointer-events-none select-none absolute -left-2 sm:-left-2 -top-6 w-14 sm:w-16 z-50" loading="lazy" />
        <img src="{{ asset('assets/kids/icon-start.png') }}" alt=""
            class="pointer-events-none select-none absolute -right-2 sm:-right-1 -bottom-5 w-14 sm:w-16 z-50"
            loading="lazy" />
        <div
            class="relative rounded-[28px] px-5 sm:px-8 lg:px-10 py-6 sm:py-7
                bg-gradient-to-b from-emerald-400 to-emerald-700 text-white shadow-[0_20px_50px_rgba(16,185,129,.25)]">
            <div class="flex flex-col lg:flex-row lg:items-center gap-4 lg:gap-8">
                <h3
                    class="flex-1 font-extrabold leading-tight
                   text-[20px] sm:text-[24px] lg:text-[28px] tracking-tight">
                    {!! $title !!}
                </h3>
                <div class="w-full lg:w-auto flex items-stretch gap-3">
                    <input x-model="phone" x-ref="input" type="tel" inputmode="numeric" autocomplete="tel"
                        placeholder="{{ $placeholder }}"
                        class="w-full lg:w-[360px] h-11 sm:h-12 rounded-xl bg-white text-slate-800
                        placeholder:text-slate-400 px-4 outline-none
                        ring-2 ring-transparent focus:ring-white/60 shadow-inner" />
                    <button @click="submit()"
                        class="h-11 sm:h-12 px-5 sm:px-6 rounded-xl font-semibold
                         bg-orange-500 hover:bg-orange-600 text-white
                         shadow-[0_10px_18px_rgba(234,88,12,.35)] transition">
                        {{ $button }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
