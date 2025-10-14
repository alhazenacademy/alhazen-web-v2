@props([
    'title' => 'Alhazen Academy',
    'description' => 'Belajar Coding dengan tutor berpengalaman dan professional di Alhazen Academy. Kami menyediakan program pelatihan online, offline, dan privat',
    'ogImage' => 'https://alhazen.academy/wp-content/uploads/2024/01/alhazen-logo-transparent-background.png',
    'theme' => 'kids', // 'kids' | 'adult'
])

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- DARK PRELOAD: class "dark" SEBELUM CSS --}}
    <script>
        // (function() {
        //     let useDark = false;
        //     try {
        //         const saved = localStorage.getItem('theme');
        //         if (saved === 'dark') useDark = true;
        //         else if (saved === 'light') useDark = false;
        //         else useDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        //     } catch (e) {
        //         useDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        //     }
        //     document.documentElement.classList.toggle('dark', useDark);
        // })();
    </script>

    <title>{{ $title }}</title>
    <x-og :title="$title" :description="$description" :image="$ogImage" />

    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
</head>

<body class="min-h-dvh bg-background text-text dark:bg-background dark:text-text antialiased">
    <div class="{{ $theme === 'adult' ? 'theme-adult' : 'theme-kids' }}">
        {{ $slot }}
    </div>

    {{-- Back-to-top --}}
    <button x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 })" x-show="show"
        @click="window.scrollTo({top:0,behavior:'smooth'})"
        class="fixed bottom-5 right-5 z-50 rounded-full p-3 shadow-lg bg-primary/80 text-white dark:bg-accent dark:text-background"
        aria-label="Back to top">↑</button>
</body>

</html>
