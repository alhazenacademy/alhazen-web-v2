@props([
    'headingTitle' => 'Ketentuan Umum Lomba',
    'headingSubtitle' => 'Seluruh peserta wajib membaca dan memahami ketentuan berikut
        demi kelancaran dan keadilan selama perlombaan.',

    'sections' => [
        [
            'title' => 'Perangkat & Kebutuhan Peserta',
            'items' => [
                'Peserta wajib menggunakan <strong>laptop atau tablet layar besar</strong> milik pribadi',
                'Peserta membawa <strong>meja lipat sendiri</strong>',
                'Menyediakan koneksi internet pribadi (opsional)',
                'Menyediakan terminal listrik untuk kebutuhan perangkat sendiri',
            ],
            'colSpan' => 1,
        ],
        [
            'title' => 'Sistem & Kepesertaan',
            'items' => [
                'Peserta memilih kategori lomba sesuai jenjang masing-masing',
                'Lomba bersifat <strong>individual (1 orang)</strong>',
                'Lomba dikerjakan secara <strong>online dan live di lokasi (offline)</strong>',
            ],
            'colSpan' => 1,
        ],
        [
            'title' => 'Informasi & Komunikasi',
            'items' => [
                '<strong>Wajib bergabung grup WhatsApp</strong> setelah pendaftaran',
                'Peserta wajib mengikuti <strong>Technical Meeting</strong>',
                'Kelalaian mengikuti informasi bukan tanggung jawab panitia',
            ],
            'colSpan' => 1,
        ],
        [
            'title' => 'Etika & Disiplin',
            'items' => [
                'Peserta dan pendamping berpakaian sopan dan tidak terbuka',
                'Peserta wanita wajib berhijab atau memakai penutup kepala (scarf bagi non-muslim)',
                'Peserta wajib hadir tepat waktu sesuai jadwal',
                'Keterlambatan tidak diberikan tambahan waktu',
            ],
            'colSpan' => 1,
        ],
        [
            'title' => 'Sanksi & Keputusan Panitia',
            'items' => [
                'Peserta yang terbukti melakukan kecurangan akan <strong>didiskualifikasi</strong>',
                'Keputusan penilaian merupakan <strong>hak penuh panitia</strong>',
                'Biaya pendaftaran <strong>tidak dapat dikembalikan</strong> dengan alasan apapun',
            ],
            'colSpan' => 2,
        ],
    ],

    'noteText' => 'Dengan mendaftar dan mengikuti lomba ini, peserta dianggap telah
        membaca, memahami, dan menyetujui seluruh ketentuan yang berlaku.',
])

<section id="ketentuan-umum-lomba" class="py-12 sm:py-16 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="text-center max-w-3xl mx-auto mb-10">
            <h2 class="text-h2 font-extrabold text-primary mb-3">
                {{ $headingTitle }}
            </h2>
            <p class="text-body text-text/70">
                {{ $headingSubtitle }}
            </p>
        </div>

        {{-- Main Card --}}
        <div class="rounded-[28px] bg-white shadow-lg p-6 sm:p-10">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                @foreach($sections as $section)
                    <div class="bg-surface rounded-2xl p-5 {{ $section['colSpan'] === 2 ? 'md:col-span-2' : '' }}">
                        <h4 class="font-semibold mb-4">{{ $section['title'] }}</h4>
                        <ul class="space-y-3 text-sm text-text/80">
                            @foreach($section['items'] as $item)
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 w-1 h-1 rounded-full bg-text shrink-0"></span>
                                    <span>{!! $item !!}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>

            {{-- Note --}}
            <div class="mt-8 p-4 rounded-xl bg-primary/5 border border-primary/10">
                <p class="text-sm text-text/70">
                    {{ $noteText }}
                </p>
            </div>

        </div>
    </div>
</section>
