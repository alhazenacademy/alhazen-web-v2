<x-layout title="Program — Alhazen Academy" description="Berbagai Program Alhazen Academy">
    <x-navbar variant="kids" />

    <x-program.hero title="Bangun Kreativitas Anak Lewat Teknologi !"
        subtitle="Alhazen Academy membantu anak memahami teknologi lewat program coding, animasi, robotika, dan desain interaktif."
        ctaText="Daftar Kelas Gratis" ctaHref="{{ route('trial') }}" imgHero="assets/kids/program/card-photo.jpg" />

    @php
        $tabs = [
            [
                'key' => 'coding',
                'label' => 'Coding',
                'icon' => asset('assets/kids/index-program/icon-program1.png'),
                'bg' => 'bg-[#38BDF8]',
                'textColor' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'sub' => 'Create with logic',
            ],
            [
                'key' => 'animation',
                'label' => 'Animation',
                'icon' => asset('assets/kids/index-program/icon-program2.png'),
                'bg' => 'bg-[#F97316]',
                'textColor' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'sub' => 'Bring stories to life',
            ],
            [
                'key' => 'iot',
                'label' => 'IoT',
                'icon' => asset('assets/kids/index-program/icon-program3.png'),
                'bg' => 'bg-[#059669]',
                'textColor' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'sub' => 'Connect the real world',
            ],
            [
                'key' => 'roblox',
                'label' => 'Roblox',
                'icon' => asset('assets/kids/index-program/icon-program4.png'),
                'bg' => 'bg-[#6366F1]',
                'textColor' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'sub' => 'Build your own game',
            ],
            [
                'key' => 'design',
                'label' => 'Design',
                'icon' => asset('assets/kids/index-program/icon-program5.png'),
                'bg' => 'bg-[#F43F5E]',
                'textColor' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'sub' => 'Create with imagination',
            ],
        ];

        $content = [
            'coding' => [
                'title' => 'Coding',
                'subtitle' => 'Create with Logic',
                'modules' => '50+',
                'students' => '1200',
                'desc' =>
                    'Anak-anak belajar logika pemrograman melalui game dan proyek visual. Mereka membuat game, aplikasi sederhana, dan animasi interaktif menggunakan Scratch & Thunkable.',
                'tools' => ['Scratch', 'Thunkable', 'MakeCode', 'EduBlocks'],
                'price' => 'Rp. 10.000.000',
                'ctaText' => 'Daftar Kelas Gratis',
                'ctaHref' => null,
            ],

            'animation' => [
                'title' => 'Animation',
                'subtitle' => 'Bring Stories to Life',
                'modules' => '40+',
                'students' => '800',
                'desc' =>
                    'Mulai dari storyboard, keyframe, hingga render sederhana. Siswa membuat animasi karakter dan bumper video yang seru dan kreatif.',
                'tools' => ['Blender', 'Krita', 'OpenToonz', 'Canva'],
                'price' => 'Rp. 9.000.000',
                'ctaText' => 'Coba Kelas Animasi',
                'ctaHref' => null,
            ],

            'iot' => [
                'title' => 'IoT',
                'subtitle' => 'Connect the Real World',
                'modules' => '35+',
                'students' => '600',
                'desc' =>
                    'Belajar sensor, aktuator, dan otomasi sederhana lewat simulasi. Buat proyek smart home mini dan kirim data ke dashboard.',
                'tools' => ['Wokwi', 'Tinkercad Circuits', 'MQTT', 'Blynk'],
                'price' => 'Rp. 9.500.000',
                'ctaText' => 'Coba Kelas IoT',
                'ctaHref' => null,
            ],

            'roblox' => [
                'title' => 'Roblox',
                'subtitle' => 'Build Your Own World',
                'modules' => '30+',
                'students' => '700',
                'desc' =>
                    'Rancang world, obstacle, dan mini-game kolaboratif sambil mengenal scripting dasar di Roblox Studio.',
                'tools' => ['Roblox Studio', 'Lua Basics', 'Asset Manager'],
                'price' => 'Rp. 8.500.000',
                'ctaText' => 'Coba Kelas Roblox',
                'ctaHref' => null,
            ],

            'design' => [
                'title' => 'Design',
                'subtitle' => 'Create with Imagination',
                'modules' => '45+',
                'students' => '950',
                'desc' =>
                    'Belajar poster, ikon, dan UI mini. Kenal warna, tipografi, dan layout yang ramah pemula untuk karya yang rapi dan menarik.',
                'tools' => ['Figma', 'Canva', 'Photopea', 'Color Hunt'],
                'price' => 'Rp. 9.000.000',
                'ctaText' => 'Coba Kelas Desain',
                'ctaHref' => null,
            ],
        ];
    @endphp

    <x-program.detail-program slogan="Sesuaikan Program, Maksimalkan Potensi Anak"
        title="Semua kurikulum telah terakreditasi STEM.org."
        subtitle="Pendekatan personal sesuai gaya belajar tiap anak—dari bikin game & animasi sampai aplikasi yang bisa dipublikasikan."
        :tabs="$tabs" :contents="$content" />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="[
            [
                'name' => 'Bagus Adam Farizi',
                'years' => 3,
                'skills' => 'HTML, JavaScript, PHP',
                'photo' => asset('assets/kids/index-tutor/tutor-pic1.png'),
                'bio' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
            [
                'name' => 'Bagus Adam Farizi',
                'years' => 3,
                'skills' => 'HTML, JavaScript, PHP',
                'photo' => asset('assets/kids/index-tutor/tutor-pic2.png'),
                'bio' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
            [
                'name' => 'Bagus Adam Farizi',
                'years' => 3,
                'skills' => 'HTML, JavaScript, PHP',
                'photo' => asset('assets/kids/index-tutor/tutor-pic3.png'),
                'bio' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
            [
                'name' => 'Bagus Adam Farizi',
                'years' => 3,
                'skills' => 'HTML, JavaScript, PHP',
                'photo' => asset('assets/kids/index-tutor/tutor-pic1.png'),
                'bio' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
            [
                'name' => 'Bagus Adam Farizi',
                'years' => 3,
                'skills' => 'HTML, JavaScript, PHP',
                'photo' => asset('assets/kids/index-tutor/tutor-pic2.png'),
                'bio' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
            [
                'name' => 'Bagus Adam Farizi',
                'years' => 3,
                'skills' => 'HTML, JavaScript, PHP',
                'photo' => asset('assets/kids/index-tutor/tutor-pic3.png'),
                'bio' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            ],
        ]" />

    <x-cta-whatsapp title="Ayo konsultasi sekarang dan klaim diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo, saya mau konsultasi program belajar di Alhazen." />

    @php
        $faqs = [
            [
                'q' => 'Untuk usia berapa kelas di Alhazen Academy?',
                'a' =>
                    'Kelas tersedia untuk TK hingga Dewasa. Kami membagi kurikulum per level agar nyaman untuk setiap usia.',
            ],
            [
                'q' => 'Apakah kelas dilakukan secara online atau offline?',
                'a' => 'Keduanya tersedia. Kamu bisa pilih kelas online via Zoom/Meet atau offline di cabang terdekat.',
            ],
            [
                'q' => 'Apakah anak harus punya pengalaman coding sebelumnya?',
                'a' => 'Tidak wajib. Untuk pemula kami mulai dari konsep dasar dan proyek seru yang ramah anak.',
            ],
            [
                'q' => 'Berapa lama durasi setiap pertemuan?',
                'a' => 'Rata-rata 60–90 menit per sesi, tergantung program yang dipilih.',
            ],
        ];
    @endphp

    <x-faq :items="$faqs" title="Frequently Asked Questions"
        description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!"
        cta-label="Lihat Semua Pertanyaan" cta-href="#" />

    <x-footer
        address="Plaza Kaha, Lt 4 unit 402B Jl. KH. Abdullah Syafei No.21 C, RT.5/RW.6, Bukit Duri, Tebet, Jakarta Selatan, DKI Jakarta, 12840, Indonesia"
        :socials="[
            ['name' => 'facebook', 'href' => '#', 'img' => asset('assets/kids/index-footer/icon-fb.png')],
            ['name' => 'instagram', 'href' => '#', 'img' => asset('assets/kids/index-footer/icon-ig.png')],
            ['name' => 'linkedin', 'href' => '#', 'img' => asset('assets/kids/index-footer/icon-lkn.png')],
            ['name' => 'youtube', 'href' => '#', 'img' => asset('assets/kids/index-footer/icon-ytb.png')],
        ]" :contact="['phone' => '+62-813-90000-332', 'email' => 'info@alhazen.academy', 'site' => 'www.alhazen.academy']" />
</x-layout>
