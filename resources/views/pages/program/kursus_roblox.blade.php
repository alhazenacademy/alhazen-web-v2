<x-layout title="Kursus Roblox Studio untuk Anak - Alhazen Academy" 
    description="Kursus Roblox untuk anak dengan metode pembelajaran yang fun dan interaktif. Asah logika dan kreativitas dengan membuat game 3D sendiri sejak dini."
    wa-message="Halo, saya mau konsultasi Roblox Studio di Alhazen." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-program.hero title="Belajar Coding dan Game Development dengan Roblox Studio"
        subtitle="Program pembelajaran yang membantu anak memahami logika pemrograman dan scripting Lua melalui pembuatan game Roblox."
        ctaText="Daftar Kelas Gratis" ctaHref="{{ route('trial') }}"
        imgHero="assets/kids/program/roblox-hero.webp" />

    @php
        $formats = [
            [
                '1',
                'Level Pemula Roblox Studio',
                'Cocok untuk anak yang belum pernah membuat game atau menggunakan Roblox Studio sebelumnya.',
            ],
            [
                '2',
                'Tutor Privat 1 on 1',
                'Pembelajaran personal dengan tutor yang fokus mendampingi satu anak sesuai ritmenya.',
            ],
            [
                '3',
                'Pendampingan Langsung Tutor',
                'Anak mendapatkan arahan, koreksi, dan feedback langsung saat membuat game Roblox.',
            ],
            ['4', '60 Menit per Sesi', 'Sesi intensif selama 60 menit untuk membangun dan mengembangkan game Roblox.'],
        ];

        $learns = [
            'Pengenalan Roblox Studio & tools dasar',
            'Membuat map & world sederhana di Roblox',
            'Dasar scripting Lua (tanpa rumit)',
            'Membuat gameplay interaktif (spawn, score, obstacle)',
            'Mini Project setiap sesi',
            'Final Project: Publish game Roblox buatan sendiri!',
        ];

        $targets = [
            ['Anak yang terlalu sering bermain Roblox', 'Mengubah dari pemain menjadi kreator game Roblox.'],
            ['Anak yang suka game tapi belum produktif', 'Menyalurkan hobi game menjadi skill masa depan.'],
            ['Anak yang tertarik dunia game & teknologi', 'Belajar game development dengan cara seru & mudah.'],
            ['Anak yang kurang percaya diri', 'Bangga karena berhasil membuat dan mempublikasikan game sendiri.'],
        ];
    @endphp

    <x-program.tentang-kursus :formats="$formats" :learns="$learns" :targets="$targets" />

    @php
        $card_paket = [
            [
                'title' => 'ROBLOX BEGINNER',
                'subtitle' => 'Game Development for Kids',
                'modules' => '30+',
                'islamic' => 2,
                'duration' => '± 4 bulan',
                'desc' =>
                    'Pengenalan Roblox Studio untuk anak melalui pembuatan game sederhana, memahami basic coding, dan eksplorasi dunia 3D yang fun dan interaktif.',
                'tools' => ['Roblox Studio', 'Introduction to Game Dev', 'Basic Coding', '3D Environment'],
                'price' => 'Rp. 7.881.000',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'ROBLOX INTERMEDIATE',
                'subtitle' => 'Game Systems & World Building',
                'modules' => '60+',
                'islamic' => 2,
                'duration' => '± 9 bulan',
                'desc' =>
                    'Pendalaman pengembangan game Roblox dengan fokus pada sistem game, spatial data, 3D building, serta challenge-based project.',
                'tools' => ['Roblox Studio', 'Lua Programming', 'Game Systems', '3D Building'],
                'price' => 'Rp. 13.209.000',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'ROBLOX ADVANCE',
                'subtitle' => 'Multiplayer & Tycoon Games',
                'modules' => '90+',
                'islamic' => 2,
                'duration' => '± 12 bulan',
                'desc' =>
                    'Level advanced untuk membuat game kompleks seperti multiplayer dan tycoon games, lengkap dengan testing, leveling system, dan monetization.',
                'tools' => ['Roblox Studio', 'Advanced Lua', 'Multiplayer System', 'Tycoon Games'],
                'price' => 'Rp. 17.760.000',
                'ctaHref' => route('trial'),
            ],
        ];
    @endphp

    <x-program.paket-kursus title="Program Belajar Kami"
        description="Program ini mengajak anak belajar membuat game Roblox sendiri menggunakan Roblox Studio. Mulai dari dasar pembuatan game hingga membangun dunia 3D yang seru dan interaktif."
        :cards="$card_paket" />
    
    <x-program.panduan-ortu :umur="10" />

    @php
        $image_preview = [
            'assets/kids/program/preview/roblox1.webp',
            'assets/kids/program/preview/roblox2.webp',
            'assets/kids/program/preview/roblox3.webp',
            'assets/kids/program/preview/roblox4.webp',
            'assets/kids/program/preview/roblox5.webp',
        ];
    @endphp

    <x-program.class-preview :images="$image_preview" />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="$cards" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo, saya mau konsultasi program belajar di Alhazen." source="konsultasi_program_page"
        :sales-phone="$salesPhone" />

    <x-faq :items="$faqs" title="Frequently Asked Questions"
        description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!" />

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>
