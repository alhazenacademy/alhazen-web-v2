<x-layout title="Program — Alhazen Academy" description="Berbagai Program Alhazen Academy">
    <x-navbar variant="kids" />

    <x-program.hero title="Bangun Kreativitas Anak Lewat Teknologi !"
        subtitle="Alhazen Academy membantu anak memahami teknologi lewat program coding, animasi, robotika, dan desain interaktif."
        ctaText="Daftar Kelas Gratis" ctaHref="#" imgHero="assets/kids/program/card-photo.jpg" />

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
