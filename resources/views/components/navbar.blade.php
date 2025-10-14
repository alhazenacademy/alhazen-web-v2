@php
  $logo = $variant === 'adult'
      ? asset('assets/adult/logo.svg')
      : asset('assets/kids/logo.svg');

  $nav = [
    ['route' => 'home',   'label' => 'Home'],
    ['route' => 'program','label' => 'Program'],
    ['route' => 'showcase','label' => 'Showcase'],
    ['route' => 'artikel','label' => 'Artikel'],
    ['route' => 'about','label' => 'Tentang Kami'],
    ['route' => 'contact','label' => 'Kontak'],
  ];

  $isActive = fn($name) =>
    (request()->routeIs($name)
      ? 'font-semibold text-primary border-b-2 border-primary'
      : 'text-text hover:text-primary hover:border-b-2 hover:border-primary')  // Hover ke primary untuk semua
    . ' whitespace-nowrap pb-1 transition-all duration-200 ease-in-out';   // Efek warna + underline smooth
@endphp

<header class="sticky top-0 z-40 bg-background/90 backdrop-blur border-b border-neutral">
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
            <a href="#{{ $item['route'] }}" class="{{ $isActive($item['route']) }} text-body">
              {{ $item['label'] }}
            </a>
          </li>
        @endforeach
      </ul>
      <a href="#"
         class="inline-flex items-center rounded-2xl bg-primary px-5 py-2 text-background font-medium shadow-sm hover:bg-accent hover:scale-105 transition-all duration-200 ease-in-out text-button">
        Dashboard
      </a>
    </div>

    {{-- MOBILE: burger --}}
    <div class="md:hidden" x-data="{ open:false }" x-cloak>
      <button @click="open=!open" aria-label="Open menu"
              class="p-2 rounded-lg border border-neutral text-text hover:bg-neutral hover:text-primary transition-all duration-200 ease-in-out">☰</button>

      <div x-show="open" @click.outside="open=false" x-transition
           class="absolute right-4 top-16 w-72 rounded-xl border border-neutral bg-background shadow-lg backdrop-blur">
        <div class="px-4 py-3 font-semibold text-text">Menu</div>
        <hr class="border-neutral">
        <ul class="py-2">
          @foreach ($nav as $item)
            <li>
              <a href="#{{ $item['route'] }}"
                 class="block px-4 py-2 {{ str_replace('pb-1', 'py-2', str_replace('text-primary', 'text-primary hover:text-primary', $isActive($item['route']))) }} hover:bg-neutral transition-all duration-200 ease-in-out text-body"
                 @click="open=false">
                 {{ $item['label'] }}
              </a>
            </li>
          @endforeach
          <li class="px-4 py-3">
            <a href="#"
               class="w-full inline-flex justify-center rounded-2xl bg-primary px-4 py-2 text-background font-medium hover:bg-accent hover:scale-105 transition-all duration-200 ease-in-out text-button">
              Dashboard
            </a>
          </li>
        </ul>
      </div>
    </div>

  </nav>
</header>

<style>[x-cloak]{display:none!important}</style>