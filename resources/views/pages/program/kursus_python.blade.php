<x-layout title="Kursus Python Bersertifikat - Alhazen Academy"
    description="Kursus Python bersertifikat dengan materi paling update. Belajar Python secara online dan offline dari dasar hingga mahir, didampingi tutor berpengalaman."
    :sales-phone="$salesPhone"
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy.">
    <x-navbar variant="kids" />

    <x-program.hero title="Menguasai Pemrograman Python untuk Berbagai Kebutuhan"
        subtitle="Program pembelajaran yang membantu peserta memahami dasar pemrograman Python, logika algoritma, dan penerapannya untuk membuat aplikasi, automasi, dan analisis data."
        ctaText="Daftar Kelas Gratis" ctaHref="{{ route('trial') }}" imgHero="assets/kids/program/python-hero.webp" />

    @php
        $whatIsItems = [
            [
                'title' => 'Pemrograman',
                'icon' => 'assets/kids/program/programming.png',
                'iconBg' => 'bg-purple-100',
                'content' => [
                    '<strong>Pemrograman</strong> adalah proses memberi instruksi kepada komputer untuk menyelesaikan masalah atau menjalankan tugas tertentu secara otomatis.',
                    'Dengan pemrograman, kita dapat membuat aplikasi, mengolah data, membangun sistem, hingga melakukan automasi pekerjaan sehari-hari.',
                    'Pemrograman melatih logika berpikir, pemecahan masalah, dan kreativitas dalam menciptakan solusi digital.',
                ],
            ],
            [
                'title' => 'Python',
                'icon' => 'assets/kids/program/python.png',
                'iconBg' => 'bg-blue-100',
                'content' => [
                    '<strong>Python</strong> adalah bahasa pemrograman populer yang dikenal dengan sintaks sederhana, mudah dipelajari, dan sangat powerful.',
                    'Python digunakan secara luas dalam pengembangan aplikasi, data analysis, machine learning, automasi, web development, dan teknologi modern lainnya.',
                    'Dengan Python, peserta dapat membangun solusi nyata yang relevan dengan kebutuhan industri dan dunia digital saat ini.',
                ],
            ],
        ];

        $formats = [
            [
                '1',
                'Level Pemula hingga Menengah',
                'Cocok untuk peserta yang belum pernah belajar pemrograman maupun yang ingin memperkuat dasar Python.',
            ],
            [
                '2',
                'Tutor Privat 1 on 1',
                'Pembelajaran personal dengan tutor berpengalaman yang menyesuaikan materi dengan kecepatan dan tujuan peserta.',
            ],
            [
                '3',
                'Pendampingan Langsung Tutor',
                'Peserta mendapatkan bimbingan, koreksi kode, serta penjelasan konsep secara langsung dan interaktif.',
            ],
            [
                '4',
                '60 Menit per Sesi',
                'Sesi pembelajaran efektif untuk membangun pemahaman logika dan skill coding secara bertahap.',
            ],
        ];

        $learns = [
            'Pengenalan Python & setup environment',
            'Dasar sintaks Python (variabel, tipe data, operator)',
            'Logika pemrograman & control flow (if, loop)',
            'Function & modular programming',
            'Pengolahan data sederhana & automasi',
            'Final Project: Program Python siap dipresentasikan',
        ];

        $targets = [
            [
                'Pemula di dunia pemrograman',
                'Belajar Python dari nol dengan metode yang terstruktur dan mudah dipahami.',
            ],
            ['Pelajar & mahasiswa', 'Menambah skill pemrograman untuk menunjang akademik dan proyek pribadi.'],
            ['Calon programmer & data enthusiast', 'Membangun fondasi Python untuk pengembangan skill lanjutan.'],
            ['Career switcher & tech learner', 'Mempersiapkan diri memasuki dunia teknologi dengan skill Python.'],
        ];
    @endphp

    <x-program.tentang-kursus whatIsTitle="Apa itu Python?"
        whatIsSubtitle="Bahasa pemrograman serbaguna yang digunakan di berbagai bidang teknologi" :whatIsItems="$whatIsItems"
        :formats="$formats" :learns="$learns" :targets="$targets" />

    @php
        $card_paket = [
            [
                'title' => 'PYTHON FUNDAMENTAL',
                'subtitle' => 'Python Programming for Beginners',
                'modules' => '50+',
                'islamic' => 0,
                'duration' => '± 3 bulan',
                'desc' =>
                    'Kelas Python untuk pemula yang ingin memahami pemrograman dari nol. Materi disusun secara sistematis mulai dari dasar Python, struktur data, logika program, hingga pembuatan project Python pertama berbasis studi kasus.',
                'tools' => [
                    'Python Fundamental',
                    'Data Structures',
                    'Flow Control',
                    'Functions',
                    'Basic Project Python',
                ],
                'price' => '0',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'PYTHON ADVANCE',
                'subtitle' => 'Object Oriented & API Implementation',
                'modules' => '70+',
                'islamic' => 0,
                'duration' => '± 4 bulan',
                'desc' =>
                    'Kelas lanjutan Python yang fokus pada penerapan konsep profesional seperti Object Oriented Programming (OOP), modularisasi, penggunaan API, serta studi kasus implementasi Python di lingkungan kerja nyata.',
                'tools' => [
                    'Python OOP',
                    'Python Modules',
                    'API Integration',
                    'Project Based Learning',
                    'Professional Case Study',
                ],
                'price' => '0',
                'ctaHref' => route('trial'),
            ],
        ];
    @endphp

    <x-program.paket-kursus title="Program Belajar Kami"
        description="Program kursus Python Alhazen Academy yang dirancang untuk pemula hingga menengah, berfokus pada pemahaman konsep, praktik langsung, dan penerapan Python dalam studi kasus nyata."
        :cards="$card_paket" />

    @php
        $requirementsPython = [
            'Memiliki <strong>minat belajar pemrograman</strong> dan ingin memahami cara kerja aplikasi serta sistem digital.',
            'Pemula yang <strong>belum pernah belajar programming</strong> maupun yang ingin memperkuat dasar Python dipersilakan mendaftar.',
            'Mampu <strong>mengoperasikan komputer</strong> (menggunakan keyboard, mouse, dan manajemen file dasar).',
            'Memiliki <strong>laptop atau PC pribadi</strong> dengan spesifikasi minimal <strong>Intel Core i3</strong> atau setara dan <strong>RAM minimal 4 GB</strong>.',
            'Perangkat mendukung instalasi dan penggunaan <strong>Python</strong>, <strong>Visual Studio Code</strong>, serta tools pendukung lainnya.',
            'Mampu mengikuti pembelajaran daring menggunakan <strong>Zoom</strong> atau <strong>Google Meet</strong> secara aktif.',
        ];
    @endphp

    <x-program.panduan-ortu :umur="12" :requirements="$requirementsPython" />

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
