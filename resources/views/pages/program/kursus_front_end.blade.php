<x-layout title="Kursus Front End Bersertifikat - Alhazen Academy"
    description="Kursus Front End bersertifikat dengan materi terkini. Belajar Front End secara online dan offline dari dasar hingga mahir di Alhazen Academy, didampingi mentor profesional dan berpengalaman."
    :sales-phone="$salesPhone"
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy.">
    <x-navbar variant="kids" />

    <x-program.hero title="Menguasai Front End Development untuk Website Modern"
        subtitle="Program pembelajaran yang membantu peserta memahami dasar Front End Development, HTML, CSS, JavaScript, serta penerapannya untuk membangun tampilan website yang responsif, interaktif, dan user-friendly."
        ctaText="Daftar Kelas Gratis" ctaHref="{{ route('trial') }}" imgHero="assets/kids/program/front-end-hero.webp" />

    @php
        $whatIsItems = [
            [
                'title' => 'Front End Website',
                'icon' => 'assets/kids/program/programming.png',
                'iconBg' => 'bg-purple-100',
                'content' => [
                    '<strong>Front End Website</strong> adalah bagian dari website yang berinteraksi langsung dengan pengguna dan menampilkan seluruh aspek visual yang dapat dilihat serta digunakan.',
                    'Front end mencakup tampilan halaman, layout, warna, animasi, dan elemen interaktif yang diakses pengguna melalui browser.',
                    'Tujuan utama front end adalah menciptakan tampilan website yang menarik, responsif, mudah digunakan, dan memberikan user experience terbaik.',
                ],
            ],
            [
                'title' => 'Front End Developer',
                'icon' => 'assets/kids/program/front-end.png',
                'iconBg' => 'bg-blue-100',
                'content' => [
                    '<strong>Front End Developer</strong> adalah profesi yang bertanggung jawab membangun dan mengoptimalkan tampilan depan website.',
                    'Seorang front end developer menggunakan teknologi seperti HTML, CSS, dan JavaScript untuk membuat website yang interaktif dan responsif.',
                    'Front end developer memastikan website dapat diakses dengan baik di berbagai perangkat dan browser.',
                ],
            ],
        ];

        $formats = [
            [
                '1',
                'Level Pemula hingga Menengah',
                'Cocok untuk peserta tanpa latar belakang IT maupun yang ingin memperkuat dasar Front End Development.',
            ],
            [
                '2',
                'Tutor Privat 1 on 1',
                'Pembelajaran personal dengan tutor berpengalaman yang fokus pada praktik dan kebutuhan peserta.',
            ],
            [
                '3',
                'Pembelajaran Interaktif',
                'Peserta berinteraksi langsung dengan tutor melalui diskusi, latihan, dan review hasil kerja.',
            ],
            [
                '4',
                '60 Menit per Sesi',
                'Durasi belajar efektif untuk memahami konsep dan langsung mempraktikkannya.',
            ],
        ];

        $learns = [
            'Pengenalan Front End & Web Development',
            'HTML untuk struktur website',
            'CSS untuk styling & layout responsif',
            'JavaScript dasar & interaksi website',
            'DOM JavaScript & event handling',
            'Bootstrap untuk desain modern',
            'Final Project: Website pertama siap dipublish',
        ];

        $targets = [
            [
                'Pemula yang ingin terjun ke Bidang IT',
                'Belajar Front End Web Development dari nol dengan metode yang terstruktur dan mudah dipahami.',
            ],
            [
                'Calon Front End atau Full Stack Developer',
                'Membangun fondasi kuat untuk karier di bidang web development.',
            ],
            [
                'Fresh Graduate & Mahasiswa IT',
                'Menambah skill praktis untuk menunjang karier dan portofolio.',
            ],
            [
                'Professional & Career Switcher',
                'Mengembangkan skill baru dan beralih karier ke dunia Web Development.',
            ],
        ];
    @endphp

    <x-program.tentang-kursus whatIsTitle="Apa Sih Front End Website Itu?" whatIsSubtitle="Bagian website yang berinteraksi langsung dengan pengguna dan menentukan pengalaman visual" :whatIsItems="$whatIsItems" :formats="$formats" :learns="$learns" :targets="$targets"
    />

    @php
        $card_paket = [
            [
                'title' => 'FRONT END FUNDAMENTAL',
                'subtitle' => 'Website Development for Beginners',
                'modules' => '50+',
                'islamic' => 0,
                'duration' => '± 3 bulan',
                'desc' =>
                    'Kelas Front End Web Developer untuk pemula yang ingin membangun website dari nol. Materi disusun secara terstruktur mulai dari HTML, CSS, hingga JavaScript dasar dengan pendekatan praktik langsung dan studi kasus sederhana.',
                'tools' => [
                    'HTML Structure',
                    'CSS Styling & Layout',
                    'Responsive Design',
                    'JavaScript Basic',
                    'Mini Project Website',
                ],
                'price' => '0',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'FRONT END INTERACTIVE',
                'subtitle' => 'DOM & Modern UI Development',
                'modules' => '70+',
                'islamic' => 0,
                'duration' => '± 4 bulan',
                'desc' =>
                    'Kelas Front End yang fokus membangun website interaktif dan modern dengan DOM JavaScript, event handling, dan Bootstrap untuk tampilan profesional dan responsif.',
                'tools' => [
                    'DOM JavaScript',
                    'Event Handling',
                    'Bootstrap Framework',
                    'Interactive Website',
                    'Final Project Website',
                ],
                'price' => '0',
                'ctaHref' => route('trial'),
            ],
        ];
    @endphp

    <x-program.paket-kursus title="Program Belajar Kami" description="Kursus Front End Web Developer Alhazen Academy dengan pendekatan praktis dan interaktif, cocok untuk pemula hingga career switcher yang ingin membangun website modern dan responsif." :cards="$card_paket"
    />

    @php
        $requirementsFrontend = [
            'Memiliki <strong>minat belajar web development</strong> dan ingin memahami cara kerja website modern.',
            'Pemula yang <strong>belum pernah belajar programming atau web</strong> dipersilakan mendaftar.',
            'Mampu <strong>mengoperasikan komputer</strong> (keyboard, mouse, dan manajemen file dasar).',
            'Memiliki <strong>laptop atau PC pribadi</strong> dengan spesifikasi minimal <strong>Intel Core i3</strong> atau setara dan <strong>RAM minimal 4 GB</strong>.',
            'Perangkat mendukung penggunaan <strong>browser (Google Chrome)</strong> dan <strong>Visual Studio Code</strong>.',
            'Mampu mengikuti pembelajaran daring menggunakan <strong>Zoom</strong> atau <strong>Google Meet</strong> secara aktif.',
        ];
    @endphp

    <x-program.panduan-ortu :umur="12" :requirements="$requirementsFrontend" />

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
