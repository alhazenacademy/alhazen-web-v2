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
</x-layout>
