<x-layout title="Kursus Blender 3D - Belajar 3D Modelling dan Animasi untuk Pemula"
    description="Kursus Blender 3D untuk Pemula hingga Mahir, belajar 3D Modelling dan membuat animasi 3D. Tersedia kelas online dan offline."
    :sales-phone="$salesPhone"
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy.">
    <x-navbar variant="kids" />

    <x-program.hero title="Belajar 3D Modeling dan Animasi dengan Blender"
        subtitle="Program pembelajaran yang membantu peserta memahami dasar 3D modeling, texturing, dan animasi menggunakan Blender untuk membuat karya visual dan game asset."
        ctaText="Daftar Kelas Gratis" ctaHref="{{ route('trial') }}" imgHero="assets/kids/program/blender-hero.webp" />

    @php
        $whatIsItems = [
            [
                'title' => '3 Dimensional (3D)',
                'icon' => 'assets/kids/program/3d.png',
                'iconBg' => 'bg-primary/10',
                'content' => [
                    '<strong>3D (Three Dimensional)</strong> adalah representasi objek yang memiliki tiga dimensi: panjang, lebar, dan tinggi, sehingga terlihat lebih nyata seperti di dunia asli.',
                    'Teknologi 3D digunakan untuk membuat karakter, bangunan, dan objek visual dalam game, film animasi, arsitektur, hingga desain produk.',
                    'Dengan 3D, ide kreatif dapat diwujudkan menjadi visual yang realistis, interaktif, dan menarik.',
                ],
            ],
            [
                'title' => 'Blender 3D',
                'icon' => 'assets/kids/program/3d-blender.png',
                'iconBg' => 'bg-purple-100',
                'content' => [
                    '<strong>Blender 3D</strong> adalah software open-source yang digunakan untuk membuat dan mengolah konten 3D seperti modeling, animasi, rendering, simulasi, hingga pembuatan game.',
                    'Blender memiliki interface yang user-friendly serta komunitas global yang besar, sehingga cocok digunakan oleh pemula hingga profesional.',
                    'Dengan Blender, pengguna dapat menciptakan berbagai karya 3D untuk kebutuhan animasi, game development, arsitektur, dan industri kreatif lainnya.',
                ],
            ],
        ];

        $formats = [
            [
                '1',
                'Level Pemula hingga Menengah',
                'Cocok untuk peserta yang belum pernah menggunakan Blender maupun yang ingin memperkuat dasar 3D.',
            ],
            [
                '2',
                'Tutor Privat 1 on 1',
                'Pembelajaran personal dengan tutor berpengalaman yang menyesuaikan materi dengan kemampuan peserta.',
            ],
            [
                '3',
                'Pendampingan Langsung Tutor',
                'Peserta mendapatkan arahan teknis, koreksi modeling & animasi, serta feedback karya secara langsung.',
            ],
            [
                '4',
                '60 Menit per Sesi',
                'Sesi pembelajaran intensif untuk membangun skill 3D secara bertahap dan terarah.',
            ],
        ];

        $learns = [
            'Pengenalan Blender & interface dasar',
            'Dasar-dasar 3D Modeling (object, mesh, modifier)',
            'Texturing & material dasar',
            'Prinsip animasi & animasi objek / karakter',
            'Rendering & compositing untuk hasil visual berkualitas',
            'Final Project: Karya 3D siap portofolio',
        ];

        $targets = [
            [
                'Pemula yang tertarik dunia 3D',
                'Belajar Blender dari nol dengan panduan yang terstruktur dan mudah dipahami.',
            ],
            ['Pelajar & mahasiswa kreatif', 'Menambah skill 3D untuk menunjang studi dan karya personal.'],
            ['Calon 3D Artist & Animator', 'Mempersiapkan portofolio untuk peluang karir di industri kreatif.'],
            ['Game & creative enthusiast', 'Membuat asset 3D untuk game, animasi, atau proyek pribadi.'],
        ];
    @endphp

    <x-program.tentang-kursus whatIsTitle="Apa itu Blender 3D?"
        whatIsSubtitle="Software 3D open-source untuk modeling, animasi, dan industri kreatif" :whatIsItems="$whatIsItems"
        :formats="$formats" :learns="$learns" :targets="$targets" />

    @php
        $card_paket = [
            [
                'title' => 'BLENDER JUNIOR',
                'subtitle' => '3D Modelling & Animation for Kids',
                'modules' => '40+',
                'islamic' => 0,
                'duration' => '± 3 bulan',
                'desc' =>
                    'Kelas Blender untuk usia 5–15 tahun dengan pilihan 3D Modelling atau 3D Animation. Dirancang untuk mengasah kreativitas anak melalui pembuatan objek dan animasi 3D yang fun, ekspresif, dan mudah dipahami.',
                'tools' => ['Blender 3D', 'Basic 3D Modelling', 'Texturing & Shading', 'Basic 3D Animation'],
                'price' => '0',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'BLENDER SENIOR',
                'subtitle' => 'Professional 3D Modelling & Animation',
                'modules' => '70+',
                'islamic' => 0,
                'duration' => '± 4 bulan',
                'desc' =>
                    'Kelas lanjutan untuk usia 16 tahun ke atas yang ingin serius mendalami Blender 3D. Fokus pada 3D modelling, animasi, rendering, dan visual untuk kebutuhan profesional seperti iklan, animasi, dan industri kreatif.',
                'tools' => [
                    'Blender 3D (v3.6+)',
                    '3D Product for Advertising',
                    'Lighting & Rendering',
                    'Camera & Composition',
                ],
                'price' => '0',
                'ctaHref' => route('trial'),
            ],
        ];
    @endphp

    <x-program.paket-kursus title="Program Belajar Kami"
        description="Program Blender 3D yang dirancang untuk anak hingga dewasa. Mulai dari pengenalan 3D modeling & animasi hingga persiapan skill profesional untuk industri kreatif."
        :cards="$card_paket" />

    @php
        $requirementsBlender = [
            'Memiliki <strong>minat pada dunia 3D, animasi, atau desain visual</strong> dan ingin belajar membuat karya 3D sendiri.',
            'Sudah mengenal <strong>dasar penggunaan komputer</strong> (file, mouse, keyboard).',
            'Memiliki <strong>laptop atau PC pribadi</strong> dengan spesifikasi minimal <strong>Intel Core i3</strong> atau setara dan <strong>RAM 8 GB</strong>.',
            'Perangkat mendukung instalasi dan penggunaan <strong>Blender 3D (minimal versi 3.6)</strong>.',
            'Mampu mengikuti pembelajaran daring menggunakan <strong>Zoom</strong> atau <strong>Google Meet</strong>.',
            'Pendampingan orang tua dianjurkan untuk peserta usia <strong>di bawah 12 tahun</strong>.',
        ];
    @endphp

    <x-program.panduan-ortu :umur="12" :requirements="$requirementsBlender" />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="$cards" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy."
        source="konsultasi_program_page" :sales-phone="$salesPhone" />

    <x-faq :items="$faqs" title="Frequently Asked Questions"
        description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!" />

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>
