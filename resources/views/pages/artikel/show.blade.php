<x-layout :title="$article->title" :description="$article->meta_description" :ogImage="$ogImage" wa-message="Halo, saya mau konsultasi program belajar di Alhazen." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-artikel.post :article="$article" />
    
    
   

    <x-artikel.related :posts="$related" />

    @php
        $source = "konsultasi_article_page_".$article->id;
    @endphp
    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo, saya mau konsultasi program belajar di Alhazen."
        :sales-phone="$salesPhone" :source="$source"
    />

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />

</x-layout>
