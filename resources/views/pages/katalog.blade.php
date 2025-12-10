<x-layout wa-message="Halo, saya mau konsultasi program belajar di Alhazen." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-katalog.hero />

    @php
    $books = [
        ['title' => 'Math', 'image' => asset('assets/kids/katalog-book/1.png')],
        ['title' => 'Science', 'image' => asset('assets/kids/katalog-book/2.png')],
        ['title' => 'English', 'image' => asset('assets/kids/katalog-book/3.png')],
        ['title' => 'Bahasa Indonesia', 'image' => asset('assets/kids/katalog-book/4.png')],
        ['title' => 'Mathematics', 'image' => asset('assets/kids/katalog-book/5.png')],
        ['title' => 'Civic Education', 'image' => asset('assets/kids/katalog-book/6.png')],
        ['title' => 'Physical Education', 'image' => asset('assets/kids/katalog-book/7.png')],
        ['title' => 'Arts', 'image' => asset('assets/kids/katalog-book/8.png')],
        ['title' => 'Natural and Social Sciences', 'image' => asset('assets/kids/katalog-book/9.png')],
        ['title' => 'Aqidah and Islamic Manner', 'image' => asset('assets/kids/katalog-book/10.png')],
        ['title' => 'Fiqh', 'image' => asset('assets/kids/katalog-book/11.png')],
        ['title' => 'Sirah Nabawiyah', 'image' => asset('assets/kids/katalog-book/12.png')],
        ["title" => "Al - Qur'an", "image" => asset('assets/kids/katalog-book/13.png')],
        ['title' => 'Arabic', 'image' => asset('assets/kids/katalog-book/14.png')],
        ['title' => 'Coding', 'image' => asset('assets/kids/katalog-book/15.png')],
        ['title' => 'Microsoft Office', 'image' => asset('assets/kids/katalog-book/16.png')],
    ]
    @endphp

    <x-katalog.book-section :books="$books" />

    <x-katalog.cta-book :sales-phone="$salesPhone" wa-message="Halo Admin Alhazen, saya ingin pesan buku / minta rekomendasi." />
    
    <x-faq :items="$faqs" title="Frequently Asked Questions" description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!"/>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>