<x-layout title="Artikel — Alhazen Academy" description="Artikel Alhazen Academy">
    <x-error.not-found />
    {{-- <x-navbar variant="kids" />
    <x-artikel.hero title="Artikel Alhazen Academy"
        subtitle="Telusuri artikel kami untuk mendapatkan saran praktis dan wawasan tentang pembelajaran di setiap tahap, bersama dengan studi kasus, testimoni, dan berita terbaru dari komunitas sekolah kami."
        icon1="/assets/kids/artikel/icon1.png" />
    @php
        $posts = [
            [
                'title' => 'Coding Starter Kit: Langkah Awal Menjadi Guru Koding',
                'slug' => 'coding-starter-kit-langkah-awal-menjadi-guru-koding',
                'date' => 'October 15, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-2.webp'),
                'url' => 'https://alhazen.academy/coding-starter-kit/',
            ],
            [
                'title' => '10 Cara Mendampingi Anak Belajar untuk Orang Tua yang Bekerja',
                'slug' => '10-cara-mendampingi-anak-belajar-untuk-orang-tua-yang-bekerja',
                'date' => 'July 9, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-3.webp'),
                'url' => 'https://alhazen.academy/cara-mendampingi-anak-belajar-untuk-orang-tua-bekerja/',
            ],
            [
                'title' => '5 Keunggulan Program Kursus Coding Anak di Alhazen Academy',
                'slug' => '5-keunggulan-program-kursus-coding-anak-di-alhazen-academy',
                'date' => 'June 17, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-4.webp'),
                'url' => 'https://alhazen.academy/keunggulan-kursus-coding-anak-alhazen-academy/',
            ],
            [
                'title' => 'Wih! 15 Cara Mengetahui Bakat Anak Sejak Dini',
                'slug' => 'wih-15-cara-mengetahui-bakat-anak-sejak-dini',
                'date' => 'June 17, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-5.webp'),
                'url' => 'https://alhazen.academy/cara-mengetahui-bakat-anak/',
            ],
            [
                'title' => 'Coding Starter Kit: Langkah Awal Menjadi Guru Koding',
                'slug' => 'coding-starter-kit-langkah-awal-menjadi-guru-koding',
                'date' => 'October 15, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-2.webp'),
                'url' => 'https://alhazen.academy/coding-starter-kit/',
            ],
            [
                'title' => '10 Cara Mendampingi Anak Belajar untuk Orang Tua yang Bekerja',
                'slug' => '10-cara-mendampingi-anak-belajar-untuk-orang-tua-yang-bekerja',
                'date' => 'July 9, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-3.webp'),
                'url' => 'https://alhazen.academy/cara-mendampingi-anak-belajar-untuk-orang-tua-bekerja/',
            ],
            [
                'title' => '5 Keunggulan Program Kursus Coding Anak di Alhazen Academy',
                'slug' => '5-keunggulan-program-kursus-coding-anak-di-alhazen-academy',
                'date' => 'June 17, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-4.webp'),
                'url' => 'https://alhazen.academy/keunggulan-kursus-coding-anak-alhazen-academy/',
            ],
            [
                'title' => 'Wih! 15 Cara Mengetahui Bakat Anak Sejak Dini',
                'slug' => 'wih-15-cara-mengetahui-bakat-anak-sejak-dini',
                'date' => 'June 17, 2025',
                'image' => asset('assets/kids/artikel/thumbnail-article-5.webp'),
                'url' => 'https://alhazen.academy/cara-mengetahui-bakat-anak/',
            ],
        ];
    @endphp

    <x-artikel.list :posts="$posts" :categories="[
        ['label' => 'Blog', 'href' => route('artikel', ['cat' => 'blog']), 'active' => true],
        ['label' => 'Our Community', 'href' => route('artikel', ['cat' => 'community'])],
        ['label' => 'Coding For Kids', 'href' => route('artikel', ['cat' => 'kids'])],
        ['label' => 'Blender', 'href' => route('artikel', ['cat' => 'blender'])],
        ['label' => 'Parenting', 'href' => route('artikel', ['cat' => 'parenting'])],
    ]" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo, saya mau konsultasi program belajar di Alhazen." 
    />

    @php
        $faqs = [
            [
                'q' => 'Untuk usia berapa kelas di Alhazen Academy?', 
                'a' => 'Kelas tersedia untuk TK hingga Dewasa. Kami membagi kurikulum per level agar nyaman untuk setiap usia.'],
            [
                'q' => 'Apakah kelas dilakukan secara online atau offline?', 
                'a' => 'Keduanya tersedia. Kamu bisa pilih kelas online via Zoom/Meet atau offline di cabang terdekat.'],
            [
                'q' => 'Apakah anak harus punya pengalaman coding sebelumnya?', 
                'a' => 'Tidak wajib. Untuk pemula kami mulai dari konsep dasar dan proyek seru yang ramah anak.'],
            [
                'q' => 'Berapa lama durasi setiap pertemuan?', 
                'a' => 'Rata-rata 60–90 menit per sesi, tergantung program yang dipilih.'],
        ];
    @endphp

    <x-faq
        :items="$faqs"
        title="Frequently Asked Questions"
        description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!"
        cta-label="Lihat Semua Pertanyaan"
        cta-href="#"
    />

    <x-footer
        address="Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, RT.5/RW.6, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840"
        :socials="[
            ['name' => 'facebook', 'href' => '#', 'img' => asset('assets/kids/index-footer/icon-fb.png')],
            ['name' => 'instagram', 'href' => '#', 'img' => asset('assets/kids/index-footer/icon-ig.png')],
            ['name' => 'linkedin', 'href' => '#', 'img' => asset('assets/kids/index-footer/icon-lkn.png')],
            ['name' => 'youtube', 'href' => '#', 'img' => asset('assets/kids/index-footer/icon-ytb.png')],
        ]" :contact="['phone' => '+62-813-90000-332', 'email' => 'info@alhazen.academy', 'site' => 'www.alhazen.academy']" /> --}}

</x-layout>
