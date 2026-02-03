<section id="akreditasi-stem" class="relative py-5 my-5">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Star decoration --}}
        <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
            class="pointer-events-none select-none absolute -left-2 -top-6 w-14 sm:w-16 z-10" loading="lazy" />
        <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
            class="pointer-events-none select-none absolute -right-2 -bottom-6 w-14 sm:w-16 z-10" loading="lazy" />

        {{-- Card --}}
        <div
            class="relative rounded-[28px] px-6 sm:px-10 py-8 sm:py-20 bg-gradient-to-b from-[#10B981] to-[#065F46] text-white shadow-[0_20px_50px_rgba(16,185,129,.25)]">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

                {{-- Embed Sertifikat --}}
                <div class="flex justify-center">
                    <div class="w-full max-w-sm rounded-2xl overflow-hidden bg-white shadow-lg ring-1 ring-black/10">
                        <img src="https://api.accredible.com/v1/frontend/credential_website_embed_image/certificate/108574909"
                            alt="STEM.org Accreditation Certificate - Alhazen Academy" class="w-full h-auto"
                            loading="lazy" data-fallback="{{ asset('assets/stem_certificate.png') }}"
                            onerror="this.onerror=null; this.src=this.dataset.fallback;">
                    </div>
                </div>

                {{-- Content --}}
                <div class="md:pr-10">
                    {{-- Title --}}
                    <h2 class="text-h2 font-extrabold leading-tight mb-4">
                        Semua program anak di Alhazen Academy
                        telah terakreditasi oleh <span>STEM.org</span>
                    </h2>

                    {{-- Description --}}
                    <p class="leading-relaxed mb-4 text-justify">
                        Akreditasi ini menandakan bahwa program pembelajaran Alhazen Academy
                        telah memenuhi standar internasional pendidikan
                        <strong>Science, Technology, Engineering, dan Mathematics (STEM)</strong>.
                    </p>

                    <p class="leading-relaxed text-justify">
                        Kurikulum disusun secara terstruktur, relevan dengan perkembangan zaman,
                        serta berfokus pada penguatan logika, kreativitas, dan kemampuan problem
                        solving anak sejak dini.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>
