<x-layout title="Tentang Kami — Alhazen Academy" description="Profil, misi, nilai, dan tim Alhazen.">
    <x-navbar variant="kids" />
    <x-about.hero title="Tentang Alhazen Academy"
        subtitle="Menginspirasi generasi digital dengan cara belajar yang menyenangkan dan bermakna."
        ctaText="Pelajari Program Kami" ctaHref="{{ route('program') }}" imgLT="assets/kids/about/hero-1.jpg"
        imgLB="assets/kids/about/hero-2.jpg" imgRT="assets/kids/about/hero-3.jpg" imgRB="assets/kids/about/hero-4.jpg"
        mascot="/assets/kids/about/mascot-about.png" />
    <x-about.who logo="/assets/kids/about/logo-about.png" titleWho="Siapa Kami ?" :paragraphsWho="[
        'Alhazen Academy merupakan lembaga kursus dan konsultan Pendidikan khususnya dalam bidang pendidikan teknologi, mendukung pengembangan teknologi industri 4.0 dengan Islamic Leadership dan STEM (Science, Technology, Engineering, Math).',
        'Berdiri pada tahun 2022 dengan nama <strong>PT. Alhazen Global Teknologi</strong>, Alhazen Academy dengan lebih dari 2000 alumni murid yang telah kami edukasi, merupakan destinasi utama bagi siapa saja yang mencari pendidikan coding berkualitas.',
        'Dengan kolaborasi yang telah kami bangun dengan lebih dari 10 sekolah terkemuka dan program inovatif <strong>Alhazen goes to School</strong> yang telah menjangkau lebih dari 100 sekolah di seluruh Indonesia, kami menawarkan pengalaman belajar yang menyenangkan. ',
        'Ditunjang oleh puluhan trainer profesional kami, Alhazen Academy bukan hanya tentang belajar coding, tapi tentang membentuk inovator masa depan yang siap menghadapi tantangan teknologi.',
    ]"
        imgVision="/assets/kids/about/img-vision.png" imgVisionAlt="Visi Alhazen Academy" titleVision="Visi Kami"
        :paragraphsVision="[
            'Alhazen Academy berkomitmen untuk menjadi pelopor dalam pendidikan teknologi untuk anak-anak di Indonesia.',
            'Dengan visi mempersiapkan generasi muda yang kreatif, inovatif, dan siap menghadapi tantangan era digital, Alhazen Academy menawarkan pendekatan pembelajaran coding yang tidak hanya menyenangkan tetapi juga mendalam.',
        ]"
        imgMision="/assets/kids/about/img-mision.jpg" imgMisionAlt="Misi Alhazen Academy" titleMision="Misi Kami"
        :paragraphsMision="[
            'Alhazen Academy memiliki misi untuk membangun fondasi kuat dalam pemrograman bagi anak-anak, dengan mengajarkan mereka mulai dari konsep dasar hingga lanjutan melalui cara yang interaktif dan menarik.',
            'Kami bertujuan menginspirasi siswa agar berinovasi dan berkreasi dengan teknologi, mendorong mereka untuk menerapkan pengetahuan dalam proyek nyata yang memecahkan masalah sehari-hari.',
            'Selain itu, kami berupaya membuka peluang baru bagi siswa dalam mengeksplorasi dunia teknologi, mempersiapkan mereka menjadi generasi yang cerdas secara teknologi dan siap untuk menjadi pencipta solusi inovatif di masa depan.',
        ]"
        imgLeader="/assets/kids/about/img-leader.png" imgLeaderAlt="Misi Alhazen Academy"
        leaderName="Ramadhoni Chandra Utama S.A.B" leaderInfo="Ketua Yayasan Alhazen Bintang Utama" leaderSosmed="#"
        :paragraphsLeader="[
            '&quot;Sebagai Ketua Yayasan, saya merasa terhormat dan gembira dapat menyambut Anda ke dalam komunitas belajar kami yang dinamis dan penuh inspirasi.',
            'Di Alhazen Academy, kami berkomitmen untuk membuka pintu menuju masa depan digital bagi setiap siswa, dengan menyediakan pendidikan coding yang berkualitas dan inovatif.',
            'Kami percaya bahwa pendidikan adalah kunci untuk membuka potensi tak terbatas setiap individu. ',
            'Oleh karena itu, kami dengan bangga menawarkan program-program yang dirancang untuk mempersiapkan siswa kami tidak hanya menjadi programmer yang handal, tetapi juga pemikir kreatif dan inovator masa depan.&quot;',
        ]" />
    <x-about.contact title="Hubungi Kami"
        desc="Kami hadir di berbagai kota untuk mendukung pendidikan teknologi anak Indonesia. Hubungi tim kami untuk konsultasi program atau kerja sama sekolah."
        :address="$address"
        :phone="$whatsapp" :email="$email" :website="$website"
        :mapEmbed="$mapembed"
        bgPattern="/assets/kids/about/bg-contact.jpg" icon4="/assets/kids/about/icon4.png" />
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
