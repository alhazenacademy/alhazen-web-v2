<section class="relative py-5">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Star decoration --}}
        <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
            class="pointer-events-none select-none absolute -left-2 -top-6 w-14 sm:w-16 z-10"
            loading="lazy" />
        <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
            class="pointer-events-none select-none absolute -right-2 -bottom-6 w-14 sm:w-16 z-10"
            loading="lazy" />

        {{-- Card --}}
        <div
            class="relative rounded-[28px] px-6 sm:px-10 py-8 sm:py-10 bg-gradient-to-b from-[#10B981] to-[#065F46] text-white shadow-[0_20px_50px_rgba(16,185,129,.25)]">

            <div class="flex flex-col sm:flex-row gap-6 items-start">

                {{-- Icon --}}
                <div
                    class="shrink-0 w-14 h-14 rounded-2xl bg-white/15 flex items-center justify-center ring-1 ring-white/30">
                    <svg viewBox="0 0 24 24" class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M12 3l9 4.5-9 4.5L3 7.5 12 3z" />
                        <path d="M21 12l-9 4.5L3 12" />
                        <path d="M21 16.5l-9 4.5-9-4.5" />
                    </svg>
                </div>

                {{-- Content --}}
                <div class="max-w-3xl">
                    <h3 class="font-semibold text-[20px] sm:text-[24px] mb-3">
                        Panduan untuk Orang Tua
                    </h3>

                    <p class="text-white/90 leading-relaxed mb-4">
                        Program ini paling sesuai untuk anak usia <strong>7 tahun ke atas</strong>.
                        Untuk anak yang lebih kecil, <strong>pendampingan orang tua sangat dianjurkan</strong>,
                        terutama saat anak perlu menyelesaikan kendala teknis selama sesi belajar.
                    </p>

                    <p class="text-white/90 leading-relaxed">
                        Dukungan sederhana seperti membantu proses login, memastikan perangkat siap digunakan,
                        atau menjaga koneksi internet tetap stabil akan sangat membantu kelancaran pembelajaran
                        dan membuat anak lebih percaya diri saat belajar.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
