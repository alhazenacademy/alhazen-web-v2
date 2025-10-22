@props([
    'bgImage' => asset('assets/kids/footer.png'),
    'socials' => [],
    'logo' => asset('assets/kids/Alhazen-Logo-white.png'),
    'logoAlt' => 'Alhazen Academy',
    'about' =>
        'Alhazen adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.',
    'columns' => [
        [
            'title' => 'Program',
            'links' => [
                ['label' => 'Coding', 'href' => '#'],
                ['label' => 'Gen AI', 'href' => '#'],
                ['label' => 'Game Design', 'href' => '#'],
                ['label' => 'Creative Tech', 'href' => '#'],
                ['label' => 'Robotics', 'href' => '#'],
                ['label' => 'Data Science', 'href' => '#'],
            ],
        ],
        [
            'title' => 'Lainnya',
            'links' => [
                ['label' => 'Profil Alhazen', 'href' => '#'],
                ['label' => 'Program Kerjasama', 'href' => '#'],
                ['label' => 'Artikel', 'href' => '#'],
                ['label' => 'Lokasi Alhazen', 'href' => '#'],
            ],
        ],
    ],

    'contact' => [],
    'addressTitle' => 'Kantor Pusat',
    'address' => '',

    'certificateImg' => asset('assets/kids/logo-stem.png'),
    'certificateAlt' => 'STEM Certified',
])

@php
    $programCol = $columns[0] ?? ['title' => 'Program', 'links' => []];
    $otherCol = $columns[1] ?? ['title' => 'Lainnya', 'links' => []];
@endphp

<footer class="full-bg-footer overflow-hidden rounded-t-[56px]"
    style="
      background-image: url('{{ $bgImage }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    ">
    <div class="mx-auto max-w-7xl px-5 sm:px-8 py-12 sm:py-16">

        <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-y-12 md:gap-x-12 xl:gap-x-16 text-white">
            <div class="md:col-span-3 space-y-3 md:space-y-6">
                <img src="{{ $logo }}" alt="{{ $logoAlt }}" class="h-10 w-auto" loading="lazy" decoding="async">
                <div class="flex items-center gap-3">
                    @foreach ($socials as $s)
                        <a href="{{ $s['href'] }}" target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                            aria-label="{{ ucfirst($s['name']) }}">
                            <img src="{{ $s['img'] }}" alt="{{ ucfirst($s['name']) }} icon"
                                class="w-18 h-18 object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" width="18" height="18" decoding="async" />
                            <span class="sr-only">{{ ucfirst($s['name']) }}</span>
                        </a>
                    @endforeach
                </div>
                <p class="text-white/90 text-small max-w-sm leading-relaxed">{{ $about }}</p>
            </div>

            <div class="md:col-span-3 md:pl-6 md:border-none space-y-4">
                <h4 class="text-h5 font-medium">{{ $programCol['title'] }}</h4>
                <ul class="space-y-2">
                    @foreach ($programCol['links'] as $ln)
                        <li>
                            <a href="{{ $ln['href'] }}"
                                class="text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                {{ $ln['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="pt-4">
                    <h4 class="text-h5 font-medium mb-3">Hubungi Kami</h4>
                    <ul class="space-y-2 text-white/90">
                        <li>
                            <a href="tel:{{ preg_replace('/\s+/', '', $contact['phone']) }}"
                                class="hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                {{ $contact['phone'] }}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ $contact['email'] }}"
                                class="hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                {{ $contact['email'] }}
                            </a>
                        </li>
                        <li>
                            <a href="https://{{ $contact['site'] }}" target="_blank" rel="noopener"
                                class="hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                {{ $contact['site'] }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="md:col-span-3 md:pl-6 md:border-none space-y-4">
                <h4 class="text-h5 font-medium">{{ $otherCol['title'] }}</h4>
                <ul class="space-y-2">
                    @foreach ($otherCol['links'] as $ln)
                        <li>
                            <a href="{{ $ln['href'] }}"
                                class="text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                {{ $ln['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="pt-4">
                    <h4 class="text-h5 font-medium mb-3">Tersertifikasi</h4>

                    <div
                        class="group relative w-44 rounded-2xl bg-white p-3 shadow/20 overflow-hidden
           transition hover:shadow-lg hover:shadow-black/10
           ring-0 hover:ring-2 hover:ring-primary/20">
                        <img src="{{ $certificateImg }}" alt="{{ $certificateAlt }}"
                            class="w-full h-auto select-none
             motion-safe:transition-transform motion-safe:duration-300 motion-safe:ease-out
             will-change-transform
             group-hover:scale-[1.06] group-hover:-translate-y-0.5"
                            loading="lazy" decoding="async">
                    </div>
                </div>

            </div>

            <div class="md:col-span-3 md:pl-6 md:border-none space-y-2">
                <h4 class="text-h5 font-medium">{{ $addressTitle }}</h4>
                <p class="text-white/90 text-small leading-relaxed">{{ $address }}</p>
            </div>
        </div>
    </div>
</footer>
