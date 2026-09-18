@php
    $logo = asset('assets/nav-logo-new.webp');

    $nav = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'artikel', 'label' => 'Artikel'],
        ['route' => 'about', 'label' => 'Tentang Kami'],
        ['route' => 'katalog', 'label' => 'Katalog Buku'],
    ];

    // Dropdown "Program"
    $moreProgramNav = [
        ['route' => 'kursus-coding-anak', 'label' => 'Kursus Coding Anak'],
        ['route' => 'kursus-roblox', 'label' => 'Kursus Roblox Studio'],
        ['route' => 'kursus-blender', 'label' => 'Kursus Blender 3D'],
        ['route' => 'kursus-python', 'label' => 'Kursus Python'],
        ['route' => 'kursus-php', 'label' => 'Kursus PHP'],
        ['route' => 'kursus-front-end', 'label' => 'Kursus Front End'],
        ['route' => 'program', 'label' => 'Program Lainnya'],
    ];

    // Dropdown "Event"
    $moreEventNav = [
        // ['route' => 'holiday-program', 'label' => 'Holiday Program'],
        ['route' => 'ramadhan-technoclass', 'label' => 'Ramadhan NgabuburIT Class'],
        ['route' => 'coding-experience', 'label' => 'Coding Experience Class'],
        // ['route' => 'starter-project', 'label' => 'Starter Project'],
        // ['route' => 'master-gpt', 'label' => 'Master GPT'],
        // ['route' => 'master-gemini', 'label' => 'Master Gemini'],
        // ['route' => 'alhazen-tech-sprint', 'label' => 'Alhazen Tech Sprint'],
        // ['route' => 'mini-bootcamp-2026', 'label' => 'Mini Bootcamp 2026'],
        // ['route' => 'alhazen-hackathon', 'label' => 'Alhazen Hackathon'],
    ];

    $isActive = fn($name) => (request()->routeIs($name)
        ? 'font-medium text-[var(--color-text)]/100'
        : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100') .
        ' whitespace-nowrap pb-1 transition-all duration-200 ease-in-out';
@endphp

<header class="sticky top-0 z-40 bg-background/90 backdrop-blur">
    <nav role="navigation" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-16 grid grid-cols-[auto_1fr_auto] items-center gap-4">

        {{-- LEFT: Brand --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ $logo }}" alt="Alhazen Academy" class="h-10 w-auto" loading="lazy">
            <span class="sr-only">Alhazen</span>
        </a>

        {{-- CENTER: Desktop menu --}}
        <div class="hidden lg:flex justify-center items-center">
            <ul class="flex items-center gap-6">
                @foreach ($nav as $item)
                    {{-- Menu utama --}}
                    <li>
                        <a href="{{ route($item['route']) }}" class="{{ $isActive($item['route']) }} text-body">
                            {{ $item['label'] }}
                        </a>
                    </li>

                    {{-- Dropdown Program --}}
                    @if ($item['route'] === 'home' && !empty($moreProgramNav))
                        <li x-data="{ openMore: false }" class="relative">
                            <button type="button"
                                @click="openMore = !openMore" @keydown.escape.window="openMore = false"
                                class="inline-flex items-center gap-1 text-body {{ request()->routeIs(collect($moreProgramNav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} pb-1 transition-all duration-200 ease-in-out">
                                <span>Program</span>
                                <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openMore }" viewBox="0 0 20 20"
                                    fill="none">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <div x-show="openMore" x-cloak @click.outside="openMore = false"
                                x-transition.origin.top.right
                                class="absolute left-0 mt-3 w-56 rounded-xl border border-neutral bg-background shadow-lg py-2 z-50">

                                @foreach ($moreProgramNav as $more)
                                    <a href="{{ route($more['route']) }}"
                                        class="block px-4 py-2.5 text-sm {{ request()->routeIs($more['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} hover:bg-neutral/40 transition">
                                        {{ $more['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    @endif

                    {{-- Dropdown Event --}}
                    @if ($item['route'] === 'home' && !empty($moreEventNav))
                        <li x-data="{ openEvent: false }" class="relative">
                            <button type="button" @click="openEvent = !openEvent"
                                @keydown.escape.window="openEvent = false"
                                class="inline-flex items-center gap-1 text-body {{ request()->routeIs(collect($moreEventNav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} pb-1 transition-all duration-200 ease-in-out">

                                <span>Event</span>
                                <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openEvent }" viewBox="0 0 20 20"
                                    fill="none">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <div x-show="openEvent" x-cloak @click.outside="openEvent = false"
                                x-transition.origin.top.right
                                class="absolute left-0 mt-3 w-56 rounded-xl border border-neutral bg-background shadow-lg py-2 z-50">

                                @foreach ($moreEventNav as $event)
                                    <a href="{{ route($event['route']) }}"
                                        class="block px-4 py-2.5 text-sm {{ request()->routeIs($event['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} hover:bg-neutral/40 transition">
                                        {{ $event['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>

        {{-- RIGHT (Desktop): Actions --}}
        <div class="hidden lg:flex items-center justify-end gap-4">
            {{-- Button: Daftar Kelas Gratis --}}
            <a href="{{ route('trial') }}"
                class="px-4 py-3 inline-flex items-center rounded-xl text-button bg-primary text-white hover:bg-accent hover:scale-105 transition-all duration-200 ease-in-out whitespace-nowrap">
                Daftar Kelas Gratis
            </a>

            {{-- Link: Login --}}
            <a href="https://apps.alhazen.academy/#/login"
                class="inline-flex items-center text-button text-primary underline hover:text-accent transition-all duration-200 ease-in-out whitespace-nowrap">
                Masuk / Login
            </a>
        </div>

        {{-- RIGHT (Mobile/Tablet): Burger --}}
        <div class="lg:hidden flex items-center justify-end" x-data="{ open: false, openMore: false }" x-cloak>
            <button @click="open = !open" aria-label="Open menu"
                class="p-2 rounded-lg border border-neutral text-text hover:bg-neutral hover:text-primary transition-all duration-200 ease-in-out">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" x-cloak />
                </svg>
            </button>

            <div x-show="open" @click.outside="open = false" x-transition
                class="absolute right-4 top-16 w-72 rounded-xl border border-neutral bg-background shadow-lg backdrop-blur">
                <div class="px-4 py-3 font-semibold text-text">Menu</div>
                <hr class="border-neutral">
                <ul class="py-2">
                    @foreach ($nav as $item)
                        {{-- Menu utama --}}
                        <li>
                            <a href="{{ route($item['route']) }}"
                                class="{{ $isActive($item['route']) }} text-body block px-4 py-2"
                                @click="open = false">
                                {{ $item['label'] }}
                            </a>
                        </li>

                        {{-- Dropdown Program --}}
                        @if ($item['route'] === 'home' && !empty($moreProgramNav))
                            <li x-data="{ openProgram: false }">
                                <button type="button" @click="openProgram = !openProgram"
                                    class="w-full flex items-center justify-between px-4 py-2 text-body {{ request()->routeIs(collect($moreProgramNav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} transition-all duration-200 ease-in-out">

                                    <span>Program</span>
                                    <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openProgram }" viewBox="0 0 20 20"
                                        fill="none">
                                        <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <div x-show="openProgram" x-cloak class="mt-1 pb-1">
                                    @foreach ($moreProgramNav as $more)
                                        <a href="{{ route($more['route']) }}"
                                            class="block px-6 py-2 text-sm {{ request()->routeIs($more['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} hover:bg-neutral/40 transition"
                                            @click="open = false; openProgram = false">
                                            {{ $more['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @endif

                        {{-- Dropdown Event --}}
                        @if ($item['route'] === 'home' && !empty($moreEventNav))
                            <li x-data="{ openEvent: false }">
                                <button type="button" @click="openEvent = !openEvent"
                                    class="w-full flex items-center justify-between px-4 py-2 text-body {{ request()->routeIs(collect($moreEventNav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} transition-all duration-200 ease-in-out">

                                    <span>Event</span>
                                    <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openEvent }" viewBox="0 0 20 20" fill="none">
                                        <path d="M5 7.5L10 12.5L15 7.5"
                                            stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <div x-show="openEvent" x-cloak class="mt-1 pb-1">
                                    @foreach ($moreEventNav as $event)
                                        <a href="{{ route($event['route']) }}"
                                            class="block px-6 py-2 text-sm {{ request()->routeIs($event['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }}
                                            hover:bg-neutral/40 transition" @click="open = false; openEvent = false">
                                            {{ $event['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>

                        @endif
                    @endforeach

                    {{-- Mobile: Daftar Kelas Gratis --}}
                    <li class="px-4 pt-3">
                        <a href="{{ route('trial') }}"
                            class="w-full px-4 py-3 inline-flex justify-center rounded-xl text-button bg-primary text-white hover:bg-accent hover:scale-105 transition-all duration-200 ease-in-out"
                            @click="open = false">
                            Daftar Kelas Gratis
                        </a>
                    </li>

                    {{-- Mobile: Masuk / Login --}}
                    <li class="px-4 pb-3">
                        <a href="https://apps.alhazen.academy/#/login"
                            class="mt-3 w-full inline-flex justify-center text-button text-primary underline hover:text-accent transition-all duration-200 ease-in-out"
                            @click="open = false">
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
        display: none !important;
    }
</style>
