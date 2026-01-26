<x-layout title="Lomba Coding Anak - Alhazen Academy" description="Ikuti lomba coding dan design terbesar untuk anak di Alhazen Hackathon. Kategori lomba dari TK, SD, dan SMP. Yuk daftar sekarang!" :sales-phone="$salesPhone" wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy.">
    <x-navbar variant="kids" />

    <x-event.alhazen_hackathon.hero />

    <x-event.alhazen_hackathon.about-hackathon />

    <x-event.alhazen_hackathon.benefits />
    
    <x-event.alhazen_hackathon.pilihan-lomba />

    <x-event.alhazen_hackathon.ketentuan-umum />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="$cards" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy."
        source="konsultasi_program_page" :sales-phone="$salesPhone" />

    <x-faq :items="$faqs" title="Frequently Asked Questions"
        description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!" />

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>
