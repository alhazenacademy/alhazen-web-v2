<x-layout title="Kursus PHP Bersertifikat - Alhazen Academy"
    description="Kursus PHP untuk pemula hingga mahir dengan metode belajar fun dan terupdate. Belajar membuat website dinamis menggunakan PHP bersama tutor professional."
    :sales-phone="$salesPhone"
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy.">
    <x-navbar variant="kids" />

    <x-program.hero title="Kuasai PHP dan Bangun Website Profesional"
        subtitle="Kursus PHP praktis untuk pemula yang ingin memahami logika pemrograman, mengelola database, dan membuat website dinamis dengan mudah."
        ctaText="Daftar Kelas Gratis" ctaHref="{{ route('trial') }}" imgHero="assets/kids/program/php-hero.webp" />

    @php
        $whatIsItems = [
            [
                'title' => 'Pemrograman Web',
                'icon' => 'assets/kids/program/webdev.png',
                'iconBg' => 'bg-purple-100',
                'content' => [
                    '<strong>Pemrograman Web</strong> adalah proses membuat dan mengembangkan website agar dapat menampilkan informasi serta berinteraksi dengan pengguna melalui browser.',
                    'Dengan pemrograman web, kita dapat membangun website statis maupun dinamis, seperti website company profile, sistem informasi, hingga aplikasi berbasis web.',
                    'Pemrograman web melatih logika berpikir, pemecahan masalah, serta pemahaman alur kerja aplikasi berbasis internet.',
                ],
            ],
            [
                'title' => 'PHP',
                'icon' => 'assets/kids/program/php.png',
                'iconBg' => 'bg-blue-100',
                'content' => [
                    '<strong>PHP</strong> adalah bahasa pemrograman server-side yang digunakan untuk mengelola logika backend pada website dinamis.',
                    'PHP memungkinkan pengolahan data, pembuatan sistem login, manajemen database, hingga pengembangan aplikasi web yang interaktif dan aman.',
                    'Dengan PHP, peserta dapat membangun website dinamis yang terhubung dengan database dan siap digunakan dalam kebutuhan nyata.',
                ],
            ],
        ];

        $formats = [
            [
                '1',
                'Level Pemula hingga Menengah',
                'Dirancang untuk peserta yang belum pernah belajar web development maupun yang ingin memperkuat dasar PHP dan backend.',
            ],
            [
                '2',
                'Tutor Privat 1 on 1',
                'Pembelajaran personal bersama tutor berpengalaman yang menyesuaikan materi dengan kebutuhan dan target peserta.',
            ],
            [
                '3',
                'Pendampingan Langsung Tutor',
                'Peserta mendapatkan bimbingan langsung, review kode, serta penjelasan konsep backend dan web secara interaktif.',
            ],
            [
                '4',
                '60 Menit per Sesi',
                'Sesi efektif untuk membangun pemahaman logika backend dan praktik pemrograman web secara bertahap.',
            ],
        ];

        $learns = [
            'Pengenalan Web Development & cara kerja website',
            'Dasar PHP & setup environment (XAMPP / Laragon)',
            'Sintaks dasar PHP (variabel, tipe data, operator)',
            'Logika pemrograman PHP (if, loop, function)',
            'Pengolahan form & sistem login sederhana',
            'Koneksi database MySQL & CRUD dasar',
            'Final Project: Website dinamis berbasis PHP',
        ];

        $targets = [
            [
                'Pemula di dunia Web Development',
                'Belajar membuat website dinamis dengan PHP dari nol secara terstruktur dan mudah dipahami.',
            ],
            ['Pelajar & Mahasiswa', 'Menambah skill web development untuk tugas, portofolio, dan proyek pribadi.'],
            ['Calon Web / Backend Developer', 'Membangun fondasi PHP dan backend sebagai bekal masuk dunia kerja.'],
            [
                'Career Switcher & Tech Learner',
                'Mempersiapkan diri beralih ke dunia teknologi dengan skill web development berbasis PHP.',
            ],
        ];
    @endphp

    <x-program.tentang-kursus whatIsTitle="Apa itu Web Development & PHP?"
        whatIsSubtitle="Di balik website yang cerdas, PHP bekerja tanpa terlihat." :whatIsItems="$whatIsItems" :formats="$formats"
        :learns="$learns" :targets="$targets" />

    @php
        $card_paket = [
            [
                'title' => 'PHP FUNDAMENTAL',
                'subtitle' => 'PHP Web Programming for Beginners',
                'modules' => '50+',
                'islamic' => 0,
                'duration' => '± 3 bulan',
                'desc' =>
                    'Kelas PHP untuk pemula yang ingin belajar web development dari nol. Materi disusun sistematis mulai dari dasar PHP, logika backend, pengolahan form, hingga pembuatan website dinamis pertama berbasis studi kasus.',
                'tools' => [
                    'PHP Basic Syntax',
                    'Web Programming Concept',
                    'Flow Control & Function',
                    'Form Handling',
                    'Basic Dynamic Website Project',
                ],
                'price' => '0',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'PHP ADVANCE',
                'subtitle' => 'Backend System & Database Integration',
                'modules' => '70+',
                'islamic' => 0,
                'duration' => '± 4 bulan',
                'desc' =>
                    'Kelas lanjutan PHP yang berfokus pada pengembangan backend profesional, pengelolaan database MySQL, sistem autentikasi, serta penerapan PHP dalam studi kasus aplikasi web nyata.',
                'tools' => [
                    'Advanced PHP Logic',
                    'MySQL Database & CRUD',
                    'Authentication System',
                    'Session & Security',
                    'Project Based Web Application',
                ],
                'price' => '0',
                'ctaHref' => route('trial'),
            ],
        ];
    @endphp

    <x-program.paket-kursus title="Program Belajar Kami"
        description="Program kursus PHP Alhazen Academy yang dirancang untuk pemula hingga menengah, berfokus pada pemahaman backend web, praktik langsung, dan pengembangan website dinamis berbasis studi kasus nyata."
        :cards="$card_paket" />

    @php
        $requirementsPHP = [
            'Memiliki <strong>minat belajar web development</strong> dan ingin memahami cara kerja website serta sistem berbasis web.',
            'Terbuka untuk <strong>pemula yang belum pernah belajar programming</strong> maupun peserta yang ingin memperkuat dasar PHP.',
            'Mampu <strong>mengoperasikan komputer</strong> (menggunakan keyboard, mouse, dan manajemen file dasar).',
            'Memiliki <strong>laptop atau PC pribadi</strong> dengan spesifikasi minimal <strong>Intel Core i3</strong> atau setara dan <strong>RAM minimal 4 GB</strong>.',
            'Perangkat mendukung instalasi dan penggunaan <strong>PHP</strong>, <strong>Web Server (XAMPP/Laragon)</strong>, <strong>MySQL</strong>, serta <strong>Visual Studio Code</strong>.',
            'Mampu mengikuti pembelajaran daring menggunakan <strong>Zoom</strong> atau <strong>Google Meet</strong> secara aktif.',
        ];
    @endphp

    <x-program.panduan-ortu :umur="12" :requirements="$requirementsPHP" />

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
