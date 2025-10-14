<x-layout>
    <x-navbar variant="kids" />
    <x-hero heroTitle="Build the Future, One Code at a Time!"
        heroSubtitle="Temukan dunia seru penuh imajinasi lewat Coding, AI, dan Robotika! Belajar teknologi kini bisa semenyenangkan bermain."
        heroCtaText="Daftar Kelas Gratis" heroCtaHref="#contact" :heroImages="[asset('assets/kids/banner.png')]"
        stemIcon="{{ asset('assets/kids/stem-icon.svg') }}" googleIcon="{{ asset('assets/kids/google-icon.svg') }}" />
    <x-about-section id="about" image="{{ asset('assets/kids/maskot-alhazen-laptop.png') }}"
        title="Tentang Alhazen Academy"
        description="<strong>Alhazen Academy</strong> adalah tempat belajar teknologi yang dirancang khusus untuk anak-anak. Kami membantu mereka memahami dunia digital melalui <strong>coding, AI, dan robotika</strong> — bukan sekadar menonton, tapi menciptakan karya sendiri."
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." />
</x-layout>
