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
</x-layout>
