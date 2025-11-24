@php
    $logo = asset('assets/nav-logo.png');

    $nav = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'program', 'label' => 'Program'],
        // ['route' => 'event', 'label' => 'Event'],
        ['route' => 'artikel', 'label' => 'Artikel'],
        ['route' => 'about', 'label' => 'Tentang Kami'],
    ];

    $isActive = fn($name) => (request()->routeIs($name)
        ? 'font-medium text-[var(--color-text)]/100' // aktif: full opacity
        : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100') . // non-aktif: 50%
        ' whitespace-nowrap pb-1 transition-all duration-200 ease-in-out';
    // Efek warna + underline smooth
@endphp

<header class="sticky top-0 z-40 bg-background/90 backdrop-blur">
    <nav role="navigation" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

        {{-- LEFT: Brand --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ $logo }}" alt="Alhazen Academy" class="h-8 w-auto" loading="lazy">
            <span class="sr-only">Alhazen</span>
        </a>

        {{-- RIGHT: Desktop menu and Dashboard --}}
        <div class="hidden md:flex items-center gap-8">
            <ul class="flex items-center gap-8">
                @foreach ($nav as $item)
                    <li>
                        <a href="{{ route($item['route']) }}" class="{{ $isActive($item['route']) }} text-body">
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- Button: Daftar Kelas Gratis (primary, hover accent) --}}
            <a href="{{ route('trial') }}"
                class="my-5 px-4 py-3 inline-flex items-center rounded-xl text-button bg-primary text-white hover:bg-accent hover:scale-105 transition-all duration-200 ease-in-out">
                Daftar Kelas Gratis
            </a>

            {{-- Link: Masuk / Login (underlined) --}}
            <a href="https://apps.alhazen.academy/#/login"
                class="my-5 inline-flex items-center text-button text-primary underline hover:text-accent transition-all duration-200 ease-in-out">
                Masuk / Login
            </a>
        </div>

        {{-- MOBILE: burger --}}
        <div class="md:hidden" x-data="{ open: false }" x-cloak>
            <button @click="open=!open" aria-label="Open menu"
                class="p-2 rounded-lg border border-neutral text-text hover:bg-neutral hover:text-primary transition-all duration-200 ease-in-out">☰</button>

            <div x-show="open" @click.outside="open=false" x-transition
                class="absolute right-4 top-16 w-72 rounded-xl border border-neutral bg-background shadow-lg backdrop-blur">
                <div class="px-4 py-3 font-semibold text-text">Menu</div>
                <hr class="border-neutral">
                <ul class="py-2">
                    @foreach ($nav as $item)
                        <li>
                            <a href="{{ route($item['route']) }}"
                                class="{{ $isActive($item['route']) }} text-body block px-4 py-2" @click="open=false">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach

                    {{-- Mobile: Daftar Kelas Gratis (primary, hover accent) --}}
                    <li class="px-4 pt-3">
                        <a href="{{ route('trial') }}"
                            class="w-full px-4 py-3 inline-flex justify-center rounded-xl text-button bg-primary text-white hover:bg-accent hover:scale-105 transition-all duration-200 ease-in-out"
                            @click="open=false">
                            Daftar Kelas Gratis
                        </a>
                    </li>

                    {{-- Mobile: Masuk / Login (link underlined) --}}
                    <li class="px-4 pb-3">
                        <a href="https://apps.alhazen.academy/#/login"
                            class="mt-3 w-full inline-flex justify-center text-button text-primary underline hover:text-accent transition-all duration-200 ease-in-out"
                            @click="open=false">
                            Masuk / Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>

<style>
    [x-cloak] {
        display: none !important
    }
</style>
