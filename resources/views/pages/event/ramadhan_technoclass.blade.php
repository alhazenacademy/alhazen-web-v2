<x-layout title="Ramadhan Technoclass - Alhazen Academy" description="Ramadhan Technoclass membantu anak belajar coding, game, dan web development selama Ramadan sebagai bekal skill digital masa depan." :sales-phone="$salesPhone" wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy.">
    <x-navbar variant="kids" />

    @php
        $title_hero = 'NgabuburIT Class Bekal Technopreneur Sejak Dini';
        $subtitle_hero = 'Isi waktu ngabuburit anak dengan kelas teknologi yang produktif, seru, dan penuh bekal masa depan selama Ramadan.';
        $banner_hero = asset('assets/kids/ramadhan-technoclass/hero.webp');
        $highlight_hero = [
            'Kelas teknologi khusus jam ngabuburit (16.00 WIB)',
            'Pilihan kelas: Animation & Game, Roblox, dan Web Development',
            'Dibimbing mentor berpengalaman & ramah anak',
        ];
    @endphp

    <x-event.ramadhan_technoclass.hero :title="$title_hero" :subtitle="$subtitle_hero" :banner="$banner_hero" :highlights="$highlight_hero" />

    @php
        $whatIsItems = [
            [
                'title' => 'NgabuburIT Class',
                'icon' => 'assets/kids/ramadhan-technoclass/ngabuburit-icon.png',
                'iconBg' => 'bg-orange-100',
                'content' => [
                    '<strong>NgabuburIT Class</strong> adalah program kelas teknologi spesial Ramadan yang dirancang untuk mengisi waktu <strong>ngabuburit anak</strong> dengan kegiatan yang produktif dan bermakna.',
                    'Anak tidak hanya belajar menggunakan teknologi, tetapi juga memahami <strong>logika, kreativitas, dan cara berpikir solutif</strong> melalui praktik langsung.',
                    'Program ini membantu orang tua memanfaatkan momen Ramadan sebagai <strong>investasi skill masa depan</strong> bagi anak di era digital dan AI.',
                ],
            ],
            [
                'title' => 'Belajar Singkat, Dampak Jangka Panjang',
                'icon' => 'assets/kids/ramadhan-technoclass/future-skill-icon.png',
                'iconBg' => 'bg-emerald-100',
                'content' => [
                    'NgabuburIT Class berlangsung secara <strong>intensif selama 3 hari</strong> dengan kurikulum terarah dan mudah dipahami oleh anak dan remaja.',
                    'Setiap sesi diisi dengan <strong>praktik langsung dan interaksi aktif</strong> bersama mentor berpengalaman.',
                    'Di akhir program, peserta memiliki <strong>hasil karya digital</strong> sebagai bukti nyata proses belajar selama Ramadan.',
                ],
            ],
        ];

        $formats = [
            [
                '1',
                'Program Intensif 3 Hari',
                'Belajar teknologi secara terfokus selama 3 hari tanpa mengganggu aktivitas Ramadan anak.',
            ],
            [
                '2',
                'Live Session Interaktif',
                'Pembelajaran dilakukan secara live agar anak bisa bertanya dan berinteraksi langsung dengan mentor.',
            ],
            [
                '3',
                'Ramah untuk Pemula',
                'Materi disusun dari dasar dan cocok untuk anak yang baru pertama kali belajar coding.',
            ],
            [
                '4',
                'Waktu Ngabuburit (16.00 WIB)',
                'Jadwal ideal untuk mengisi waktu sore menjelang berbuka dengan kegiatan produktif.',
            ],
        ];

        $learns = [
            'Pengenalan dasar teknologi, coding, dan logika berpikir',
            'Belajar melalui aktivitas visual dan praktik langsung',
            'Membuat animasi, game, atau website sederhana',
            'Melatih fokus, kreativitas, dan problem solving',
            'Belajar disiplin dan bertanggung jawab selama Ramadan',
            'Hasil karya digital yang bisa dibanggakan',
        ];

        $targets = [
            [
                'Anak yang sering menghabiskan waktu ngabuburit tanpa aktivitas jelas',
                'Mengubah waktu menunggu berbuka menjadi momen belajar yang bermakna.',
            ],
            [
                'Anak yang tertarik game & teknologi',
                'Mengenalkan teknologi dengan cara yang positif dan terarah.',
            ],
            [
                'Orang tua yang ingin anak tetap produktif selama Ramadan',
                'Memberikan aktivitas edukatif tanpa mengganggu ibadah dan keluarga.',
            ],
            [
                'Anak & remaja pemula di dunia coding',
                'Belajar dari nol dengan metode yang fun dan mudah dipahami.',
            ],
        ];
    @endphp

    <x-program.tentang-kursus whatIsTitle="Apa itu NgabuburIT Class?"
        whatIsSubtitle="Program kelas teknologi Ramadan untuk mengisi waktu ngabuburit anak dengan aktivitas produktif, kreatif, dan bernilai masa depan."
        :whatIsItems="$whatIsItems" :formats="$formats" :learns="$learns" :targets="$targets" />

    @php
        $title_benefits = 'Benefit Mengikuti NgabuburIT Class';
        $description_benefits = 'NgabuburIT Class dirancang sebagai pengalaman belajar teknologi yang menyenangkan, terarah, dan relevan dengan kebutuhan anak di era digital dan AI.';
        $discountLabel = 'Investasi Belajar Spesial Ramadan';
        $discountAmount = 'Hemat 400 Ribu (Diskon ±44%)';
        $benefits_left = [
            '3 hari <strong>Live Session</strong> bersama mentor berpengalaman',
            'Belajar teknologi dengan metode <strong>interaktif & fun</strong>',
            'Materi disesuaikan untuk <strong>anak & remaja pemula</strong>',
            'Waktu belajar ideal saat <strong>ngabuburit (16.00 WIB)</strong>',
        ];
        $benefits_right = [
            '<strong>E-Module</strong> terstruktur & mudah dipahami',
            '<strong>E-Certificate</strong> resmi setelah program selesai',
            'Bonus <strong>Free 1 Session English Class</strong>',
            'Membangun <strong>logika, kreativitas, dan problem solving</strong>',
        ];
        $closing = 'Dengan NgabuburIT Class, anak tidak hanya mengisi waktu Ramadan dengan kegiatan positif, tetapi juga mendapatkan bekal skill penting untuk masa depan.';
    @endphp
    
    <x-event.ramadhan_technoclass.benefits :title="$title_benefits" :description="$description_benefits" :discountLabel="$discountLabel" :discountAmount="$discountAmount" :benefitsLeft="$benefits_left" :benefitsRight="$benefits_right" :closing="$closing" />
    
    @php
        $card_paket = [
            [
                'title' => 'Animation & Games',
                'subtitle' => 'Menggunakan Scratch',
                'modules' => 'Scratch',
                'duration' => '3 Hari (90 Menit/Sesi)',
                'desc' =>
                    'Kelas animasi dan game untuk anak yang ingin belajar logika coding, kreativitas, dan problem solving melalui visual programming yang menyenangkan.',
                'class_type' => 'Online',
                'schedules' => [
                    [
                        'batch' => 'Batch 1',
                        'date' => '24 – 26 Februari',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 2',
                        'date' => '3 – 5 Maret',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 3',
                        'date' => '10 – 12 Maret',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                ],
                'price-before' => 'Rp 899.000',
                'price-after' => 'Rp 499.000',
                'ctaHref' => 'https://s.id/ngabuburIT-2026',
            ],
            [
                'title' => 'Roblox Development',
                'subtitle' => 'Game Creation with Roblox Studio',
                'modules' => 'Roblox Studio',
                'duration' => '3 Hari (90 Menit/Sesi)',
                'desc' =>
                    'Belajar membuat game dan dunia virtual menggunakan Roblox Studio sambil melatih logika coding, desain game, dan kreativitas digital.',
                'class_type' => 'Online',
                'schedules' => [
                    [
                        'batch' => 'Batch 1',
                        'date' => '24 – 26 Februari',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 2',
                        'date' => '3 – 5 Maret',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 3',
                        'date' => '10 – 12 Maret',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                ],
                'price-before' => 'Rp 899.000',
                'price-after' => 'Rp 499.000',
                'ctaHref' => 'https://s.id/ngabuburIT-2026',
            ],
            [
                'title' => 'Web Development',
                'subtitle' => 'Front End Development (Bootstrap)',
                'modules' => 'HTML, CSS, Bootstrap',
                'duration' => '3 Hari (90 Menit/Sesi)',
                'desc' =>
                    'Kelas web development untuk anak dan remaja yang ingin memahami cara membuat website modern serta mengenal dasar dunia digital.',
                'class_type' => 'Online',
                'schedules' => [
                    [
                        'batch' => 'Batch 1',
                        'date' => '24 – 26 Februari',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 2',
                        'date' => '3 – 5 Maret',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 3',
                        'date' => '10 – 12 Maret',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                ],
                'price-before' => 'Rp 899.000',
                'price-after' => 'Rp 499.000',
                'ctaHref' => 'https://s.id/ngabuburIT-2026',
            ],
        ];
    @endphp

    <x-event.ramadhan_technoclass.paket-program title="Pilihan Kelas NgabuburIT Class" description="Pilih kelas teknologi yang sesuai minat anak untuk mengisi waktu ngabuburit dengan kegiatan produktif, edukatif, dan menyenangkan selama Ramadan." :cards="$card_paket" />

    @php
        $requirementsNgabuburIT = [
            'Program dirancang untuk anak usia <strong>7 tahun ke atas</strong> yang ingin belajar teknologi secara terarah selama bulan Ramadan.',
            'Peserta mampu <strong>membaca dan mengikuti instruksi sederhana</strong> dari mentor selama sesi live berlangsung.',
            'Memiliki <strong>laptop atau PC pribadi</strong> dengan koneksi internet yang stabil untuk mengikuti kelas online.',
            'Mampu menggunakan <strong>mouse dan keyboard</strong> secara dasar (tidak perlu pengalaman coding sebelumnya).',
            'Bersedia menggunakan aplikasi <strong>Zoom</strong> atau <strong>Google Meet</strong> sebagai media pembelajaran.',
            'Pendampingan orang tua <strong>sangat dianjurkan</strong>, terutama bagi peserta usia <strong>7–9 tahun</strong> atau yang baru pertama kali mengikuti kelas online.',
        ];
    @endphp

    <x-program.panduan-ortu :umur="7" :requirements="$requirementsNgabuburIT" />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="$cards" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy."
        source="konsultasi_program_page" :sales-phone="$salesPhone" />

    @php
        $faqs_custom = [
            [
                'question' => 'Apa itu NgabuburIT Class?',
                'answer' =>
                    'NgabuburIT Class adalah program kelas teknologi khusus Ramadan yang dirancang untuk mengisi waktu ngabuburit anak dengan aktivitas belajar yang produktif, menyenangkan, dan bernilai masa depan.',
            ],
            [
                'question' => 'Program ini cocok untuk usia berapa?',
                'answer' =>
                    'NgabuburIT Class terbuka untuk anak usia <strong>7 tahun ke atas</strong>. Materi disusun dari dasar sehingga cocok untuk pemula, baik anak-anak maupun remaja.',
            ],
            [
                'question' => 'Apakah anak harus sudah bisa coding sebelumnya?',
                'answer' =>
                    'Tidak perlu. Program ini dirancang <strong>ramah untuk pemula</strong>. Anak akan dibimbing dari konsep dasar hingga praktik langsung oleh mentor.',
            ],
            [
                'question' => 'Kelas dilaksanakan secara online atau offline?',
                'answer' =>
                    'Seluruh kelas dilaksanakan secara <strong>online (live session)</strong> sehingga anak bisa belajar dari rumah dengan tetap berinteraksi langsung bersama mentor.',
            ],
            [
                'question' => 'Jam berapa kelas berlangsung?',
                'answer' =>
                    'Kelas dilaksanakan pada waktu <strong>ngabuburit (pukul 16.00 WIB)</strong>, sehingga tidak mengganggu waktu sekolah maupun ibadah.',
            ],
            [
                'question' => 'Berapa lama durasi program?',
                'answer' =>
                    'NgabuburIT Class berlangsung selama <strong>3 hari</strong>, dengan durasi sekitar <strong>60–90 menit per sesi</strong>.',
            ],
            [
                'question' => 'Apa saja yang perlu dipersiapkan sebelum kelas?',
                'answer' =>
                    'Peserta perlu menyiapkan <strong>laptop atau PC</strong>, koneksi internet yang stabil, serta aplikasi <strong>Zoom atau Google Meet</strong>. Tidak diperlukan perangkat atau software khusus.',
            ],
            [
                'question' => 'Apakah orang tua perlu mendampingi anak?',
                'answer' =>
                    'Pendampingan orang tua <strong>sangat dianjurkan</strong>, terutama untuk peserta usia <strong>7–9 tahun</strong> atau anak yang baru pertama kali mengikuti kelas online.',
            ],
            [
                'question' => 'Apakah peserta mendapatkan sertifikat?',
                'answer' =>
                    'Ya. Setiap peserta akan mendapatkan <strong>E-Certificate</strong> sebagai bukti keikutsertaan dan pencapaian selama program berlangsung.',
            ],
            [
                'question' => 'Bagaimana cara mendaftar NgabuburIT Class?',
                'answer' =>
                    'Pendaftaran dapat dilakukan melalui tombol <strong>Daftar Sekarang</strong> di halaman ini. Setelah mendaftar, orang tua akan mendapatkan informasi lengkap melalui WhatsApp.',
            ],
        ];
    @endphp

    <x-faq :items="$faqs_custom" title="Frequently Asked Questions"
        description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!" />

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>
