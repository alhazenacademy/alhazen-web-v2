<x-layout title="Artikel — Alhazen Academy" description="Artikel Alhazen Academy" wa-message="Halo, saya mau konsultasi program belajar di Alhazen." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />
    <x-artikel.hero title="Artikel Alhazen Academy"
        subtitle="Telusuri artikel kami untuk mendapatkan saran praktis dan wawasan tentang pembelajaran di setiap tahap, bersama dengan studi kasus, testimoni, dan berita terbaru dari komunitas sekolah kami."
        icon1="/assets/kids/artikel/icon1.png" />

    <x-artikel.list :posts="$posts" :categories="$categories" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo, saya mau konsultasi program belajar di Alhazen."
        :sales-phone="$salesPhone" source="konsultasi_article_page"
    />

    <x-faq :items="$faqs" title="Frequently Asked Questions" description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!"/>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />

</x-layout>
