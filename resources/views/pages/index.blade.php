<x-layout>
    <x-navbar variant="kids" />
    <x-hero heroTitle="Build the Future, One Code at a Time!"
        heroSubtitle="Temukan dunia seru penuh imajinasi lewat Coding, AI, dan Robotika! Belajar teknologi kini bisa semenyenangkan bermain."
        heroCtaText="Daftar Kelas Gratis" heroCtaHref="#contact" :heroImages="[asset('assets/kids/banner.png')]"
        stemIcon="{{ asset('assets/kids/stem-icon.svg') }}" googleIcon="{{ asset('assets/kids/google-icon.svg') }}" />
    <x-about-section id="about" image="{{ asset('assets/kids/maskot-alhazen-laptop.png') }}"
        title="Tentang Alhazen Academy"
        description="<strong>Alhazen Academy</strong> adalah tempat belajar teknologi yang dirancang khusus untuk anak-anak. Kami membantu mereka memahami dunia digital melalui <strong>coding, AI, dan robotika</strong> — bukan sekadar menonton, tapi menciptakan karya sendiri."
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." />
    <x-why-alhazen title="Kenapa Belajar di Alhazen Academy?" :cards="[
        [
            'icon' => asset('assets/kids/icon-puzzle.svg'),
            'title' => 'Tutor Profesional',
            'description' =>
                'Tutor berpengalaman di bidang <strong> IT dan pendidikan anak.</strong> Setiap sesi dirancang agar siswa paham, bukan sekadar hafalan.',
        ],
        [
            'icon' => asset('assets/kids/icon-puzzle.svg'),
            'title' => 'Tutor Profesional',
            'description' =>
                'Tutor berpengalaman di bidang <strong> IT dan pendidikan anak.</strong> Setiap sesi dirancang agar siswa paham, bukan sekadar hafalan.',
        ],
        [
            'icon' => asset('assets/kids/icon-puzzle.svg'),
            'title' => 'Tutor Profesional',
            'description' =>
                'Tutor berpengalaman di bidang <strong> IT dan pendidikan anak.</strong> Setiap sesi dirancang agar siswa paham, bukan sekadar hafalan.',
        ],
        [
            'icon' => asset('assets/kids/icon-puzzle.svg'),
            'title' => 'Tutor Profesional',
            'description' =>
                'Tutor berpengalaman di bidang <strong> IT dan pendidikan anak.</strong> Setiap sesi dirancang agar siswa paham, bukan sekadar hafalan.',
        ],
        [
            'icon' => asset('assets/kids/icon-puzzle.svg'),
            'title' => 'Tutor Profesional',
            'description' =>
                'Tutor berpengalaman di bidang <strong> IT dan pendidikan anak.</strong> Setiap sesi dirancang agar siswa paham, bukan sekadar hafalan.',
        ],
        [
            'icon' => asset('assets/kids/icon-puzzle.svg'),
            'title' => 'Tutor Profesional',
            'description' =>
                'Tutor berpengalaman di bidang <strong> IT dan pendidikan anak.</strong> Setiap sesi dirancang agar siswa paham, bukan sekadar hafalan.',
        ],
    ]" />
    <x-program title="Program Belajar di Alhazen Academy"
        subtitle="Setiap program dirancang agar anak belajar sambil bermain, menumbuhkan rasa ingin tahu dan semangat berkreasi."
        view-all-href="" :cards="[
            [
                'bg' => 'bg-[#38BDF8]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/anak.png'),
                'icon' => asset('assets/kids/icon-chip.png'),
                'title' => 'Coding',
                'sub' => 'Create with logic',
            ],
            [
                'bg' => 'bg-[#F97316]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/anak.png'),
                'icon' => asset('assets/kids/icon-robot-ai.png'),
                'title' => 'Gen AI',
                'sub' => 'Future-ready thinking',
            ],
            [
                'bg' => 'bg-[#059669]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/anak.png'),
                'icon' => asset('assets/kids/icon-stick-game.png'),
                'title' => 'Game Design',
                'sub' => 'Turn ideas into games',
            ],
            [
                'bg' => 'bg-[#38BDF8]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/anak.png'),
                'icon' => asset('assets/kids/icon-chip.png'),
                'title' => 'Coding',
                'sub' => 'Create with logic',
            ],
            [
                'bg' => 'bg-[#F97316]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/anak.png'),
                'icon' => asset('assets/kids/icon-robot-ai.png'),
                'title' => 'Gen AI',
                'sub' => 'Future-ready thinking',
            ],
            [
                'bg' => 'bg-[#E5E7EB]',
                'text-color' => 'text-[#0F172A]',
                'child' => asset('assets/kids/anak.png'),
                'icon' => asset('assets/kids/icon-view-all.png'),
                'title' => 'View All',
                'sub' => 'Explore all our courses',
            ],
        ]" />

    <x-alhazen-goes-to-school title="Alhazen Goes to School"
        description="Kami percaya bahwa pemahaman teknologi harus dimulai sejak dini. Oleh karena itu, kami membawa program Alhazem Coding dan Robotika langsung ke ruang kelas – menyenangkan, interaktif, dan inspiratif."
        content="Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
        image="{{ asset('assets/kids/coding-school.jpg') }}" :cards="[
            [
                'no' => '1',
                'text-color' => 'text-[#FACC15]',
                'bg' => 'bg-[#FEF3C7]',
                'title' => 'Mengunjungi Ratusan Sekolah',
                'description' =>
                    'Sekolah menginspirasi lebih dari <strong> 2.000 siswa </strong> dari jenjang SD hingga SMA di <strong> seluruh Indonesia </strong> melalui kegiatan workshop dan demo teknologi.',
            ],
            [
                'no' => '2',
                'text-color' => 'text-primary',
                'bg' => 'bg-[#B3FFE6]',
                'title' => 'Terdapat Program After School',
                'description' =>
                    'Kolaborasi langsung dengan sekolah untuk menghadirkan kelas coding reguler bersama <strong>tutor profesional</strong> dari Alhazen.',
            ],
            [
                'no' => '3',
                'text-color' => 'text-[#3B82F6]',
                'bg' => 'bg-[#CADEFF]',
                'title' => 'Membangun Rasa Percaya Diri Anak',
                'description' =>
                    'Setiap sesi dirancang untuk membantu anak <strong> berani berkreasi, berpikir logis,</strong> dan menjadi <strong>pemimpin masa depan</strong> di era digital.',
            ],
        ]"
    />

    <x-student-work title="Hasil Karya Murid Alhazen Academy"
        description="Siswa anak nya imajinasi bisa luar biasa. Di Alhazzen kami membantunya mengembangkan imajinasi nya dengan cara digital yang nyata - dari game, aplikasi, hingga robot pintar!"
        :cards="[
            [
                'image' => asset('assets/kids/student-work/student-work-1.avif'),
                'title' => 'Learning tumbuhan',
                'description' => 'Dibuat oleh Ghazan Akhyar (Kelas 2 SD) menggunakan Scratch',
                'category' => 'Game & Animation',
                'bg-text' => 'bg-[#EB5353]',
            ],
            [
                'image' => asset('assets/kids/student-work/student-work-2.avif'),
                'title' => 'Ping-Pong Game',
                'description' => 'Dibuat oleh Tsaqif Luqmana (Kelas 5 SD) menggunakan Scratch',
                'category' => 'Game & Animation',
                'bg-text' => 'bg-[#EB5353]',
            ],
            [
                'image' => asset('assets/kids/student-work/student-work-3.avif'),
                'title' => 'Car Race Game',
                'description' => 'Dibuat oleh Muhammad Karim (Kelas 3 SD) menggunakan Scratch',
                'category' => 'Game & Animation',
                'bg-text' => 'bg-[#EB5353]',
            ],
            [
                'image' => asset('assets/kids/student-work/student-work-4.jpg'),
                'title' => 'Dzikir App',
                'description' => 'Dibuat oleh Shofiyya Edi (Kelas 5 SD) menggunakan Thunkable',
                'category' => 'Application',
                'bg-text' => 'bg-[#faa52d]',
            ],
            [
                'image' => asset('assets/kids/student-work/student-work-5.jpg'),
                'title' => 'Camping and Glamping',
                'description' => 'Dibuat oleh Karenita (Kelas 4 SD) menggunakan Thunkable',
                'category' => 'Application',
                'bg-text' => 'bg-[#faa52d]',
            ],
        ]"
    />

    <x-student-review title="Review Murid Alhazen"
        description="Cerita inspiratif dari murid-murid Alhazen yang membuat perubahan. Mereka bukan hanya belajar coding — mereka berkarya, berinovasi, dan berbagi inspirasi."
        :cards="[
            [
                'image' => asset('assets/kids/student-review/thumbnail/thumbnail-review-1.png'),
                'name' => 'Alya',
                'quote' =>
                    'Belajar di Alhazen itu seru banget! Aku bisa bikin game sendiri pakai Scratch dan ngerti logika program tanpa merasa sulit. Sekarang aku malah bantu teman lain buat belajar coding juga!',
                'school' => 'SMPN 1 Jonggol',
                'mode' => 'Online',
                'rating' => 5,
                'video_type' => 'youtube', // atau 'mp4'
                'video_url' => 'https://www.youtube.com/embed/TD_mEqbTlcM', // untuk youtube pakai /embed
            ],
            [
                'image' => asset('assets/kids/student-review/thumbnail/thumbnail-review-2.jpg'),
                'name' => 'Malfy',
                'quote' =>
                    'Seru, belajarnya santai dan kakak tutornya baik. Jelasinnya pelan² jadi gampang buat paham materinya, dan juga dapat tantangan baru belajar dunia coding',
                'school' => 'SMP',
                'mode' => 'Online',
                'rating' => 5,
                'video_type' => 'mp4', // atau 'mp4'
                'video_url' => asset('assets/kids/student-review/video/video-review-1.mp4'), // untuk youtube pakai /embed
            ],
            [
                'image' => asset('assets/kids/student-review/thumbnail/thumbnail-review-3.jpg'),
                'name' => 'Rauf Deriel',
                'quote' =>
                    'Menurutku kelas ini sangat menyenangkan, dan materi dapat dipahami dengan mudah.',
                'school' => 'SMP',
                'mode' => 'Online',
                'rating' => 5,
                'video_type' => 'mp4', // atau 'mp4'
                'video_url' => asset('assets/kids/student-review/video/video-review-1.mp4'), // untuk youtube pakai /embed
            ],]" 
    />

    <x-cta-whatsapp title="Ayo konsultasi sekarang dan klaim diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo, saya mau konsultasi program belajar di Alhazen." 
    />

    <x-clients title="Partner  & Kolaborator Kami" description="Kami berkolaborasi dengan berbagai sekolah, lembaga, dan komunitas pendidikan untuk menghadirkan pembelajaran teknologi terbaik bagi anak Indonesia." 
        :logos="
        [
            [
                'src' => asset('assets/kids/client/al-wafi-islamic-boarding-school.png'),
                'alt' => 'al-wafi-islamic-boarding-school',
            ],
            [
                'src' => asset('assets/kids/client/ibnu-taimiyah-islamic-boarding-school.png'), 
                'alt' => 'ibnu-taimiyah-islamic-boarding-school'
            ],
            [
                'src' => asset('assets/kids/client/madrasah-aliyah-salafiyah-ulya.jpg'),
                'alt' => 'madrasah-aliyah-salafiyah-ulya',
            ],
            [
                'src' => asset('assets/kids/client/metropolitan-islamic-school.jpg'), 
                'alt' => 'metropolitan-islamic-school'
            ],
            [
                'src' => asset('assets/kids/client/pendidikan-integral-hidayatullah.png'),
                'alt' => 'pendidikan-integral-hidayatullah',
            ],
            [
                'src' => asset('assets/kids/client/sekolah-bina-insan-mandiri.jpeg'), 
                'alt' => 'sekolah-bina-insan-mandiri'
            ],
            [
                'src' => asset('assets/kids/client/sma-it-putri-al-hanif.jpg'),
                'alt' => 'sma-it-putri-al-hanif',
            ],
        ]"
    />

    @php
        $featured = [
            'title' => 'Alhazen Academy Bagikan 1000 Beasiswa Coding Gratis untuk Siswa Tanah Datar!',
            'date' => 'July 9, 2025',
            'image' => asset('assets/kids/artikel/thumbnail-article-1.avif'),
            'url' => 'https://alhazen.academy/1000-beasiswa-coding-gratis-untuk-siswa-tanah-datar/',
        ];
        $posts = [
            [
                'title' => 'Coding Starter Kit: Langkah Awal Menjadi Guru Koding',
                'date' => 'October 15, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-2.webp'),
                'url' => 'https://alhazen.academy/coding-starter-kit/',
            ],
            [
                'title' => '10 Cara Mendampingi Anak Belajar untuk Orang Tua yang Bekerja',
                'date' => 'July 9, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-3.webp'),
                'url' => 'https://alhazen.academy/cara-mendampingi-anak-belajar-untuk-orang-tua-bekerja/',
            ],
            [
                'title' => '5 Keunggulan Program Kursus Coding Anak di Alhazen Academy',
                'date' => 'June 17, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-4.webp'),
                'url' => 'https://alhazen.academy/keunggulan-kursus-coding-anak-alhazen-academy/',
            ],
            [
                'title' => 'Wih! 15 Cara Mengetahui Bakat Anak Sejak Dini',
                'date' => 'June 17, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-5.webp'),
                'url' => 'https://alhazen.academy/cara-mengetahui-bakat-anak/',
            ],
        ];
    @endphp

    <x-articles title="Artikel & Insight Terbaru" description="Bacaan seru dan inspiratif seputar teknologi, pendidikan, dan dunia digital untuk anak dan guru." allUrl="https://alhazen.academy/artikel/" :featured="$featured" :posts="$posts"/>

    <x-tutors title="Tim Pengajar Alhazen" description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="
        [
            [
            'name' => 'Bagus Adam Farizi',
            'years' => 3,
            'skills' => 'HTML, JavaScript, PHP',
            'photo' => asset('assets/kids/berita-2.avif'),
            'bio'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
            [
            'name' => 'Bagus Adam Farizi',
            'years' => 3,
            'skills' => 'HTML, JavaScript, PHP',
            'photo' => asset('assets/kids/berita-2.avif'),
            'bio'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
            [
            'name' => 'Bagus Adam Farizi',
            'years' => 3,
            'skills' => 'HTML, JavaScript, PHP',
            'photo' => asset('assets/kids/berita-2.avif'),
            'bio'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
        ]" 
    />
</x-layout>
