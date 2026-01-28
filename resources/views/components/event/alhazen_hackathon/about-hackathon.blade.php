@props([
    'title' => 'EduNation x Alhazen 2025',

    'subtitle' => 'Event tahunan besar yang menghadirkan kompetisi Coding & Pildacil untuk generasi muda Indonesia.',

    'descriptions' => [
        '<strong>Lembaga Pendidikan Alhazen Academy</strong> bersama
        <strong>Alhazen School</strong> membuka kompetisi
        <strong>Coding & Pildacil</strong> untuk siswa
        jenjang <strong>TK hingga SMP</strong> dalam event besar
        <strong>EduNation x Alhazen 2025</strong>.',

        'Kompetisi ini akan diselenggarakan pada
        <strong>Sabtu, 8 November 2025</strong>,
        bertempat di <strong>Jakarta Convention Center (JCC)</strong>.',

        'Kegiatan ini menjadi wadah bagi anak-anak Indonesia untuk
        menyalurkan bakat dan potensinya, baik di bidang teknologi
        maupun dakwah Islami.'
    ],

    'keyPoints' => [
        [
            'icon' => '💻',
            'title' => 'Teknologi & Coding',
            'description' => 'Mengasah kemampuan berpikir logis dan pemecahan masalah.'
        ],
        [
            'icon' => '🎤',
            'title' => 'Pildacil Islami',
            'description' => 'Melatih keberanian dan kemampuan komunikasi anak.'
        ],
        [
            'icon' => '🧠',
            'title' => 'Berpikir Kritis & Kreatif',
            'description' => 'Menumbuhkan kreativitas di era digital.'
        ],
        [
            'icon' => '🌙',
            'title' => 'Nilai Keislaman',
            'description' => 'Membentuk karakter dan kecerdasan emosional anak.'
        ]
    ],

    'highlight' => '📍 Jakarta Convention Center (JCC) — Jakarta Pusat'
])

<section id="tentang" class="py-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-h2 font-extrabold text-primary mb-4">
                {{ $title }}
            </h2>
            <p class="text-body text-text/70">
                {{ $subtitle }}
            </p>
        </div>

        <div class="max-w-5xl mx-auto">

            {{-- Main Explanation --}}
            <div class="rounded-[28px] bg-white p-6 sm:p-8 
                        shadow-lg hover:shadow-xl transition-shadow duration-300 mb-8">
                @foreach ($descriptions as $desc)
                    <p class="text-body text-text/80 mb-4 last:mb-0">
                        {!! $desc !!}
                    </p>
                @endforeach
            </div>

            {{-- Key Points --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                @foreach ($keyPoints as $point)
                    <div class="rounded-2xl bg-white p-5 
                                shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h4 class="font-semibold text-text mb-2">
                            {{ $point['icon'] }} {{ $point['title'] }}
                        </h4>
                        <p class="text-sm text-text/70">
                            {{ $point['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            {{-- Highlight --}}
            <div class="mt-10 rounded-2xl bg-primary/10 border border-primary/20 p-6 text-center
                        shadow-md hover:shadow-lg transition-shadow duration-300">
                <p class="text-body font-semibold text-primary">
                    {{ $highlight }}
                </p>
            </div>

        </div>
    </div>
</section>
