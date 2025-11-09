<x-layout>
    <x-navbar variant="kids" />

    <x-index.hero
        heroTitle="Build the <span class='text-secondary' style='font-family: inherit'>Future</span>, One Code at a Time!"
        heroSubtitle="Temukan dunia seru penuh imajinasi lewat Coding, AI, dan Robotika! Belajar teknologi kini bisa semenyenangkan bermain."
        heroCtaText="Daftar Kelas Gratis" heroCtaHref="{{ route('trial') }}" :heroImages="[asset('assets/kids/index-hero/banner.png')]"
        googleIcon="{{ asset('assets/kids/index-hero/google-rate.png') }}" />

    <x-index.about-section id="about" title="Tentang Alhazen Academy"
        content="<strong>Alhazen Academy</strong> adalah lembaga kursus dan konsultan pendidikan teknologi yang berfokus menyiapkan generasi muda untuk era industri 4.0. Pendekatannya memadukan nilai <strong>Islamic Leadership</strong> dan kerangka <strong>STEM (Science, Technology, Engineering, Math)</strong> agar belajar teknologi tetap berkarakter dan relevan.  <br> <br> Layanan Alhazen meliputi program belajar yang menyenangkan dan terstruktur untuk anak—mulai dari <strong>coding, AI, hingga robotika</strong>. Mereka juga aktif menjangkau sekolah melalui program “Alhazen goes to School” untuk menghadirkan kurikulum dan ekskul coding langsung di lingkungan belajar siswa." />

    <x-index.why-alhazen title="Kenapa Belajar di Alhazen Academy?" :cards="[
        [
            'icon' => asset('assets/kids/index-why/icon-why1.png'),
            'title' => 'Tutor Profesional',
            'description' =>
                'Tutor berpengalaman di bidang <strong> IT dan pendidikan anak.</strong> Setiap sesi dirancang agar siswa paham, bukan sekadar hafalan.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why2.png'),
            'title' => 'Dapat Sertifikat Resmi',
            'description' =>
                'Setiap siswa akan menerima sertifikat kelulusan yang diakui oleh Alhazen Academy dan terintegrasi dengan <strong>STEM.org Certified Program</strong>.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why3.png'),
            'title' => 'Materi & Silabus Lengkap',
            'description' =>
                'Semua siswa mendapatkan <strong>materi pembelajaran digital</strong> dan silabus interaktif agar bisa belajar ulang kapan saja, di mana saja.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why4.png'),
            'title' => 'Ikut Event Hackathon',
            'description' =>
                'Kesempatan berpartisipasi dalam <strong>Hackathon dan Coding Challenge</strong> bersama ratusan peserta dari berbagai sekolah di Indonesia.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why5.png'),
            'title' => 'Dashboard Report',
            'description' =>
                'Orang tua dapat <strong>memantau progres belajar anak secara real-time</strong> melalui dashboard khusus yang menampilkan laporan mingguan.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why6.png'),
            'title' => 'Sesi 1-on-1 dengan Pengajar',
            'description' =>
                'Dapatkan <strong>bimbingan personal langsung</strong> dari tutor untuk memastikan setiap anak benar-benar memahami konsep yang dipelajari.',
        ],
    ]" />

    <x-index.program title="Program Belajar di Alhazen Academy"
        subtitle="Setiap program dirancang agar anak belajar sambil bermain, menumbuhkan rasa ingin tahu dan semangat berkreasi."
        view-all-href="" :cards="[
            [
                'bg' => 'bg-[#38BDF8]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'icon' => asset('assets/kids/index-program/icon-program1.png'),
                'title' => 'Coding',
                'sub' => 'Create with logic',
                'url' => 'program',
            ],
            [
                'bg' => 'bg-[#F97316]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'icon' => asset('assets/kids/index-program/icon-program2.png'),
                'title' => 'Animation',
                'sub' => 'Bring stories to life',
                'url' => 'program',
            ],
            [
                'bg' => 'bg-[#059669]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'icon' => asset('assets/kids/index-program/icon-program3.png'),
                'title' => 'IoT',
                'sub' => 'Connect the real world',
                'url' => 'program',
            ],
            [
                'bg' => 'bg-[#6366F1]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'icon' => asset('assets/kids/index-program/icon-program4.png'),
                'title' => 'Roblox',
                'sub' => 'Build your own game',
                'url' => 'program',
            ],
            [
                'bg' => 'bg-[#F43F5E]',
                'text-color' => 'text-[#F9FAFB]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'icon' => asset('assets/kids/index-program/icon-program5.png'),
                'title' => 'Design',
                'sub' => 'Create with imagination',
                'url' => 'program',
            ],
            [
                'bg' => 'bg-[#E5E7EB]',
                'text-color' => 'text-[#0F172A]',
                'child' => asset('assets/kids/index-program/anak.png'),
                'icon' => asset('assets/kids/index-program/icon-program6.png'),
                'title' => 'View All',
                'sub' => 'Explore all our courses',
                'url' => 'program',
            ],
        ]" />

    <x-index.alhazen-goes-to-school title="Alhazen Goes to School"
        content="<strong>Alhazen goes to School</strong> adalah program yang bekerjasama dengan beberapa sekolah maupun pesantren dalam bentuk ekstrakulikuler maupun tambahan kurikulum koding di sekolah/pesantren.<br><br>Bertujuan untuk melihat <strong>peluang, kesiapan kemajuan pendidikan, dan perkembangan teknologi</strong> masa kini dan masa yang akan datang sehingga dapat meluluskan SDM Muslim yang berkualitas dan dapat bersaing di era teknologi 4.0."
        image="{{ asset('assets/kids/index-alhazen-goes-to-school/coding-school.jpg') }}" :cards="[
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
        ]" />

    <x-index.program-kerjasama title="Program Kerjasama Alhazen"
        subtitle="Alhazen membuka program kerjasama untuk sekolah SD, SMP, SMA/K berupa Kurikulum Teknologi dan Ekskul Coding. Kami hadir untuk membentuk generasi muda yang siap menghadapi tantangan teknologi."
        :cards="[
            [
                'title' => 'Curriculum',
                'sub' => 'Technology curriculum',
                'bg' => 'bg-[#0EA5A0]',
                'text-color' => 'text-[#F9FAFB]',
                'icon' => asset('assets/kids/program-kerjasama/icon1.png'),
                'child' => asset('assets/kids/program-kerjasama/anak.png'),
                'url' => '#',
            ],
            [
                'title' => 'Textbook',
                'sub' => 'School material books',
                'bg' => 'bg-[#FACC15]',
                'text-color' => 'text-[#F9FAFB]',
                'icon' => asset('assets/kids/program-kerjasama/icon2.png'),
                'child' => asset('assets/kids/program-kerjasama/anak.png'),
                'url' => '#',
            ],
            [
                'title' => 'Coding Club',
                'sub' => 'Coding extracurricular',
                'bg' => 'bg-[#9333EA]',
                'text-color' => 'text-[#F9FAFB]',
                'icon' => asset('assets/kids/program-kerjasama/icon3.png'),
                'child' => asset('assets/kids/program-kerjasama/anak.png'),
                'url' => '#',
            ],
            [
                'title' => 'Other Collab',
                'sub' => 'Special cooperation',
                'bg' => 'bg-[#E5E7EB]',
                'text-color' => 'text-[#0F172A]',
                'icon' => asset('assets/kids/program-kerjasama/icon4.png'),
                'child' => asset('assets/kids/program-kerjasama/anak.png'),
                'url' => '#',
            ],
        ]" />

    <x-index.student-work title="Hasil Karya Murid Alhazen Academy"
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
        ]" />

    <x-index.student-review title="Review Murid Alhazen"
        description="Cerita inspiratif dari murid-murid Alhazen yang membuat perubahan. Mereka bukan hanya belajar coding — mereka berkarya, berinovasi, dan berbagi inspirasi."
        :cards="[
            [
                'image' => asset('assets/kids/index-student-review/thumbnail/thumbnail-review-1.png'),
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
                'image' => asset('assets/kids/index-student-review/thumbnail/thumbnail-review-2.jpg'),
                'name' => 'Malfy',
                'quote' =>
                    'Seru, belajarnya santai dan kakak tutornya baik. Jelasinnya pelan² jadi gampang buat paham materinya, dan juga dapat tantangan baru belajar dunia coding',
                'school' => 'SMP',
                'mode' => 'Online',
                'rating' => 5,
                'video_type' => 'mp4', // atau 'mp4'
                'video_url' => asset('assets/index-kids/student-review/video/video-review-1.mp4'), // untuk youtube pakai /embed
            ],
            [
                'image' => asset('assets/kids/index-student-review/thumbnail/thumbnail-review-3.jpg'),
                'name' => 'Rauf Deriel',
                'quote' => 'Menurutku kelas ini sangat menyenangkan, dan materi dapat dipahami dengan mudah.',
                'school' => 'SMP',
                'mode' => 'Online',
                'rating' => 5,
                'video_type' => 'mp4', // atau 'mp4'
                'video_url' => asset('assets/kids/index-student-review/video/video-review-1.mp4'), // untuk youtube pakai /embed
            ],
        ]" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo, saya mau konsultasi program belajar di Alhazen." source="konsultasi_index_page" :sales-phone="$salesPhone" />

    <x-index.clients title="Partner  & Kolaborator Kami"
        description="Kami berkolaborasi dengan berbagai sekolah, lembaga, dan komunitas pendidikan untuk menghadirkan pembelajaran teknologi terbaik bagi anak Indonesia."
        :logos="[
            [
                'src' => asset('assets/kids/client/al-wafi-islamic-boarding-school.png'),
                'alt' => 'al-wafi-islamic-boarding-school',
            ],
            [
                'src' => asset('assets/kids/client/ibnu-taimiyah-islamic-boarding-school.png'),
                'alt' => 'ibnu-taimiyah-islamic-boarding-school',
            ],
            [
                'src' => asset('assets/kids/client/madrasah-aliyah-salafiyah-ulya.jpg'),
                'alt' => 'madrasah-aliyah-salafiyah-ulya',
            ],
            [
                'src' => asset('assets/kids/client/metropolitan-islamic-school.jpg'),
                'alt' => 'metropolitan-islamic-school',
            ],
            [
                'src' => asset('assets/kids/client/pendidikan-integral-hidayatullah.png'),
                'alt' => 'pendidikan-integral-hidayatullah',
            ],
            [
                'src' => asset('assets/kids/client/sekolah-bina-insan-mandiri.jpeg'),
                'alt' => 'sekolah-bina-insan-mandiri',
            ],
            [
                'src' => asset('assets/kids/client/sma-it-putri-al-hanif.jpg'),
                'alt' => 'sma-it-putri-al-hanif',
            ],
        ]" />



    <x-articles title="Artikel & Insight Terbaru"
        description="Bacaan seru dan inspiratif seputar teknologi, pendidikan, dan dunia digital untuk anak dan guru."
        allUrl="{{ route('artikel') }}" :featured="$featured" :posts="$latestArticle" />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="$cards" />

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

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" />
</x-layout>
