<x-layout
    title="Coming Soon — Coding Experience Class | Alhazen Academy"
    description="Kelas seru lainnya akan segera hadir! Tunggu info terbaru dari Alhazen Academy."
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy."
    :sales-phone="$salesPhone"
>
    <x-error.coming-soon
        title="Akan segera datang kelas seru lainnya!"
        subtitle="Tema Coding Experience Class bulan depan sedang disiapkan. Pantau terus update dari kami ya!"
        button-text="Kembali ke Beranda"
        button-href="{{ route('home') }}"
        launch-at="{{ $launchAt }}"
    />
</x-layout>
