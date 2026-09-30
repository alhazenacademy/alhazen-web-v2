<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding Experience Class - Belajar Coding 1 Hari, Bikin Game Lari ke Sekolah</title>
    <meta name="description" content="Kelas coding 1 hari yang dirancang khusus memfasilitasi rasa penasaran anak untuk membuat aplikasi & game. Bikin game Lari ke Sekolah bersama Umar, online via Zoom, hanya Rp 19.000.">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="Coding Experience Class - Bikin Game Lari ke Sekolah bersama Umar">
    <meta property="og:description" content="Kelas coding 1 hari untuk anak. Belajar logika sambil bikin game Lari ke Sekolah, online via Zoom. Promo: Rp 19.000 dari Rp 99.000.">
    <meta property="og:image" content="{{ asset('assets/custom/coding_experience_class/september.jpeg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Coding Experience Class - Bikin Game Lari ke Sekolah bersama Umar">
    <meta name="twitter:description" content="Kelas coding 1 hari untuk anak. Belajar logika sambil bikin game Lari ke Sekolah, online via Zoom. Promo: Rp 19.000.">
    <meta name="twitter:image" content="{{ asset('assets/custom/coding_experience_class/september.jpeg') }}">
    <link rel="icon" href="https://alhazen.academy/assets/logo-new.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"></noscript>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        oxford: '#0C3363',
                        cyan: '#2CC8BF',
                        amber: '#FDBE07',
                        azure: '#3987F8',
                        periwinkle: '#927DF9',
                        pink: '#FD6F6C',
                        primary: '#2CC8BF',
                        neu: {
                            bg: '#F9FBFB',
                            surface: '#F9FBFB',
                            light: '#ffffff',
                            dark: '#D1DCDD',
                            accent: '#2CC8BF',
                            'accent-light': '#E6F8F7',
                            'accent-dark': '#0C3363',
                            gold: '#FDBE07',
                            text: '#0C3363',
                            muted: '#5A6E85'
                        }
                    },
                    fontFamily: {
                        outfit: ['Outfit', 'ui-sans-serif', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --oxford-navy: #0C3363ff;
            --black: #000000ff;
            --bright-snow: #F9FBFBff;
            --strong-cyan: #2CC8BFff;
            --amber-gold: #FDBE07ff;
            --azure-blue: #3987F8ff;
            --soft-periwinkle: #927DF9ff;
            --grapefruit-pink: #FD6F6Cff;

            --neu-bg: #F9FBFB;
            --neu-surface: #F9FBFB;
            --neu-light: #ffffff;
            --neu-dark: #D1DCDD;
            --neu-accent: #2CC8BF;
            --neu-accent-light: #E6F8F7;
            --neu-accent-dark: #0C3363;
            --neu-gold: #FDBE07;
            --neu-text: #0C3363;
            --neu-muted: #5A6E85;

            --font-size-h1: clamp(2.2rem, 5.5vw, 3.8rem);
            --font-size-h2: clamp(1.6rem, 3.5vw, 2.4rem);
            --font-size-h3: clamp(1.2rem, 2.2vw, 1.5rem);
            --font-size-h4: clamp(1.05rem, 1.8vw, 1.25rem);
            --font-size-body: 1rem;
            --font-size-small: 0.9rem;
        }

        *, *::before, *::after { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; }
        body { font-family: 'Outfit', ui-sans-serif, system-ui, sans-serif; background: var(--bright-snow); color: var(--oxford-navy); -webkit-font-smoothing: antialiased; overflow-x: hidden; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', ui-sans-serif, system-ui, sans-serif; font-weight: 700; letter-spacing: -.02em; color: var(--oxford-navy); }
        img { max-width: 100%; }
        a { text-decoration: none; color: inherit; }
        html { scroll-behavior: smooth; scroll-padding-top: 5.5rem; }
        @media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

        .text-h1 { font-size: var(--font-size-h1); line-height: 1.08; font-weight: 800; }
        .text-h2 { font-size: var(--font-size-h2); line-height: 1.15; font-weight: 700; }
        .text-h3 { font-size: var(--font-size-h3); line-height: 1.25; font-weight: 600; }
        .text-h4 { font-size: var(--font-size-h4); line-height: 1.3; font-weight: 600; }
        .text-body { font-size: var(--font-size-body); line-height: 1.65; }
        .text-small { font-size: var(--font-size-small); line-height: 1.5; }

        .container { max-width: 72rem; margin: 0 auto; padding: 0 1.25rem; }
        @media (min-width: 640px) { .container { padding: 0 1.5rem; } }
        @media (min-width: 1024px) { .container { padding: 0 2rem; } }

        /* ============ NEUMORPHISM / CLEAN PALETTE UTILS ============ */
        .neu-raised {
            background: #ffffff;
            border-radius: 1.25rem;
            box-shadow: 6px 6px 16px rgba(12, 51, 99, 0.16), -6px -6px 16px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.2);
        }
        .neu-raised-sm {
            background: #ffffff;
            border-radius: 1rem;
            box-shadow: 4px 4px 12px rgba(12, 51, 99, 0.14), -4px -4px 12px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.2);
        }
        .neu-pressed {
            background: #F2F6F6;
            border-radius: 1rem;
            box-shadow: inset 3px 3px 8px rgba(12, 51, 99, 0.14), inset -3px -3px 8px rgba(255, 255, 255, 1);
        }
        .neu-flat {
            background: #ffffff;
            border-radius: 1.25rem;
            box-shadow: 5px 5px 12px rgba(12, 51, 99, 0.14), -5px -5px 12px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.2);
        }
        .neu-pill {
            background: #ffffff;
            border-radius: 999px;
            box-shadow: 4px 4px 10px rgba(12, 51, 99, 0.14), -4px -4px 10px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.25);
        }
        .neu-inset-pill {
            background: #F2F6F6;
            border-radius: 999px;
            box-shadow: inset 2px 2px 6px rgba(12, 51, 99, 0.14), inset -2px -2px 6px rgba(255, 255, 255, 1);
        }
        .neu-circle {
            border-radius: 50%;
            box-shadow: 5px 5px 12px rgba(12, 51, 99, 0.14), -5px -5px 12px rgba(255, 255, 255, 1);
        }

        /* ============ BUTTONS ============ */
        .btn {
            display: inline-flex; align-items: center; justify-content: center; gap: .5rem;
            padding: .9rem 2rem; border-radius: 1rem; font-weight: 600; font-size: .95rem;
            cursor: pointer; border: 0; font-family: 'Outfit', sans-serif;
            transition: box-shadow .25s, transform .2s, background-color .2s;
        }
        .btn:active { transform: scale(.97); }
        .btn-primary {
            background: var(--strong-cyan); color: var(--oxford-navy);
            box-shadow: 4px 4px 12px rgba(44, 200, 191, 0.35), -4px -4px 12px rgba(255, 255, 255, 0.8);
        }
        .btn-primary:hover {
            background: #25b3ab;
            box-shadow: 2px 2px 6px rgba(44, 200, 191, 0.4), -2px -2px 6px rgba(255, 255, 255, 0.9);
            transform: translateY(1px);
        }
        .btn-ghost {
            background: #ffffff; color: var(--oxford-navy);
            box-shadow: 4px 4px 12px rgba(12, 51, 99, 0.12), -4px -4px 12px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.18);
        }
        .btn-ghost:hover {
            background: #F2F6F6;
            box-shadow: inset 2px 2px 6px rgba(12, 51, 99, 0.10), inset -2px -2px 6px rgba(255, 255, 255, 1);
            transform: translateY(1px);
        }
        .btn-big { padding: 1.05rem 2.4rem; font-size: 1.05rem; border-radius: 1.1rem; }

        /* ============ SMOOTH REVEAL & LOAD ============ */
        img { content-visibility: auto; }
        .reveal { opacity: 0; transform: translateY(20px); transition: opacity .8s cubic-bezier(0.16, 1, 0.3, 1), transform .8s cubic-bezier(0.16, 1, 0.3, 1); will-change: opacity, transform; }
        .reveal.visible { opacity: 1; transform: none; }

        /* ============ HEADER ============ */
        .sticky-header {
            position: sticky; top: 0; z-index: 40;
            background: rgba(249, 251, 251, .9);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(44, 200, 191, 0.15);
        }
        .nav { max-width: 72rem; margin: 0 auto; padding: 0 1.25rem; height: 4rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem; }
        @media (min-width: 640px) { .nav { padding: 0 1.5rem; } }
        @media (min-width: 1024px) { .nav { padding: 0 2rem; } }
        .logo { display: flex; align-items: center; gap: .6rem; flex-shrink: 0; }
        .logo-img { height: 2.4rem; width: auto; }
        .logo-fallback {
            display: none; align-items: center; gap: .6rem;
            font-family: 'Outfit'; font-weight: 700; font-size: 1rem;
            color: var(--oxford-navy); white-space: nowrap;
        }
        .logo-fallback img { width: 28px; height: 28px; object-fit: contain; flex-shrink: 0; }

        .nav-desktop { display: none; align-items: center; gap: 1.5rem; }
        @media (min-width: 768px) { .nav-desktop { display: flex; gap: 2rem; } }
        .nav-links { list-style: none; margin: 0; padding: 0; display: flex; align-items: center; gap: 2rem; }
        .nav-links a {
            font-size: .9rem; color: var(--oxford-navy); background: none; border: 0; padding: 0;
            display: inline-flex; align-items: center; gap: .25rem; cursor: pointer;
            font-family: inherit; transition: color .2s; white-space: nowrap; font-weight: 500;
            opacity: 0.8;
        }
        .nav-links a:hover { opacity: 1; color: var(--strong-cyan); }

        .nav-btn-primary {
            padding: .65rem 1.3rem; border-radius: .75rem; background: var(--strong-cyan); color: var(--oxford-navy);
            font-weight: 600; font-size: .9rem; white-space: nowrap;
            transition: box-shadow .25s, transform .2s;
            box-shadow: 3px 3px 8px rgba(44, 200, 191, 0.3), -3px -3px 8px rgba(255, 255, 255, 0.8);
        }
        .nav-btn-primary:hover { box-shadow: 1px 1px 4px rgba(44, 200, 191, 0.4), -1px -1px 4px rgba(255, 255, 255, 0.9); transform: translateY(1px); }

        .nav-burger {
            display: grid; place-items: center; width: 40px; height: 40px;
            border-radius: .75rem; background: #ffffff;
            box-shadow: 3px 3px 8px rgba(12, 51, 99, 0.08), -3px -3px 8px rgba(255, 255, 255, 0.9);
            font-size: 1.2rem; cursor: pointer; color: var(--oxford-navy); border: 1px solid rgba(44, 200, 191, 0.2);
        }
        @media (min-width: 768px) { .nav-burger { display: none; } }

        .mobile-menu {
            position: absolute; top: 4rem; right: 1rem; z-index: 49; width: 18rem;
            background: #ffffff; border-radius: 1rem;
            display: none;
            box-shadow: 8px 8px 20px rgba(12, 51, 99, 0.12), -8px -8px 20px rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(44, 200, 191, 0.2);
            overflow: hidden;
        }
        .mobile-menu.open { display: block; }
        .mobile-menu hr { border: 0; border-top: 1px solid rgba(44, 200, 191, 0.15); }
        .mm-title { padding: .75rem 1rem; font-weight: 600; font-size: .9rem; color: var(--neu-muted); }
        .mm-item { display: block; padding: .7rem 1rem; font-size: .9rem; font-weight: 500; color: var(--oxford-navy); transition: background .2s; }
        .mm-item:hover { background: rgba(44, 200, 191, 0.08); }
        .mm-cta {
            display: block; margin: .75rem 1rem .5rem; padding: .75rem; text-align: center;
            border-radius: .75rem; background: var(--strong-cyan); color: var(--oxford-navy); font-weight: 600; font-size: .9rem; transition: opacity .2s;
        }
        .mm-cta:hover { opacity: .9; }
        .mm-login { display: block; text-align: center; padding: .55rem 1rem 1rem; color: var(--strong-cyan); font-size: .85rem; font-weight: 500; }

        /* ============ HERO ============ */
        .hero { padding: 2.5rem 0 1rem; }
        .hero-inner {
            max-width: 56rem; margin: 0 auto; text-align: center;
            display: flex; flex-direction: column; align-items: center; padding: 1.5rem 1rem;
        }
        .hero-badge {
            display: inline-flex; align-items: center; gap: .45rem; width: 120px; max-width: 100%; height: auto;
        }
        .hero-title { color: var(--neu-text); margin: 1.3rem 0 .8rem; }
        .hero-title .hl { color: var(--neu-accent); }
        .hero-sub { color: var(--neu-muted); max-width: 40rem; margin: 0 0 1.5rem; font-weight: 400; }
        .hero-chips { display: flex; flex-wrap: wrap; gap: .6rem; margin-bottom: 1.8rem; justify-content: center; }
        .chip {
            display: inline-flex; align-items: center; gap: .35rem;
            padding: .45rem .9rem; border-radius: 999px; font-size: .82rem; font-weight: 500;
            color: var(--neu-text); background: var(--neu-surface);
            box-shadow: 3px 3px 6px var(--neu-dark), -3px -3px 6px var(--neu-light);
        }
        .hero-price { display: flex; align-items: center; gap: .8rem; margin-bottom: 1.6rem; flex-wrap: wrap; justify-content: center; }
        .price-old-wrap {
            padding: .4rem 1rem; border-radius: .75rem;
            box-shadow: inset 3px 3px 6px var(--neu-dark), inset -3px -3px 6px var(--neu-light);
        }
        .price-strike { color: var(--neu-muted); text-decoration: line-through; font-size: 1rem; font-weight: 500; }
        .price-now { color: var(--neu-accent); font-weight: 800; font-size: 2.6rem; line-height: 1; }
        .price-save {
            display: inline-flex; align-items: center;
            background: var(--neu-accent); color: #fff; font-size: .75rem; font-weight: 700;
            padding: .35rem .8rem; border-radius: 999px;
        }
        .hero-ctas { display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; }
        .flow-split {
            display: grid; grid-template-columns: 1fr; gap: 2rem; align-items: center;
        }
        @media (min-width: 768px) { .flow-split { grid-template-columns: 1fr 1fr; } }
        .flow-points { display: flex; flex-direction: column; gap: .9rem; }
        .flow-point {
            display: flex; gap: .85rem; align-items: flex-start;
            padding: 1.1rem 1.2rem; border-radius: 1.1rem; border-left: 3px solid var(--neu-accent);
            background: #ffffff;
            box-shadow: 5px 5px 14px rgba(12, 51, 99, 0.14), -5px -5px 14px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.12);
            transition: box-shadow .3s, transform .3s;
        }
        .flow-point:hover {
            box-shadow: inset 3px 3px 8px rgba(12, 51, 99, 0.12), inset -3px -3px 8px rgba(255, 255, 255, 1);
            transform: translateY(2px);
        }
        .flow-point h3 { margin: 0 0 .25rem; font-size: .98rem; color: var(--oxford-navy); }
        .flow-point p { margin: 0; font-size: .84rem; color: var(--neu-muted); line-height: 1.55; }
        .flow-note { margin: .6rem 0 0; color: var(--neu-muted); font-size: .86rem; line-height: 1.6; }
        .flow-note strong { color: var(--oxford-navy); }
        .flow-video-wrap {
            max-width: 600px; width: 100%; margin: 0 auto;
            border-radius: 1.5rem; padding: 10px;
            background: #ffffff;
            box-shadow: inset 5px 5px 12px rgba(12, 51, 99, 0.12), inset -5px -5px 12px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.15);
        }
        .flow-video { width: 100%; height: auto; display: block; border-radius: 1rem; }

        /* ============ STATS ============ */
        .stats { padding: 2.5rem 0 .5rem; margin-bottom: 5rem; }
        .stats-grid { display: grid; grid-template-columns: 1fr; gap: 1rem; }
        @media (min-width: 640px) { .stats-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .stats-grid { grid-template-columns: repeat(4, 1fr); } }
        .stat-card {
            background: #ffffff; border-radius: 1.25rem;
            padding: 1.2rem 1.3rem; display: flex; align-items: center; gap: .9rem;
            box-shadow: 6px 6px 14px rgba(12, 51, 99, 0.14), -6px -6px 14px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.12);
            transition: box-shadow .3s, transform .3s;
        }
        .stat-card:hover {
            box-shadow: inset 4px 4px 10px rgba(12, 51, 99, 0.12), inset -4px -4px 10px rgba(255, 255, 255, 1);
            transform: translateY(2px);
        }
        .stat-num {
            width: 44px; height: 44px; border-radius: .75rem; display: grid; place-items: center;
            font-weight: 800; font-size: 1.1rem; color: #fff; background: var(--neu-accent); flex-shrink: 0;
        }
        .stat-card:nth-child(1) { border-left: 4px solid var(--strong-cyan); }
        .stat-card:nth-child(2) { border-left: 4px solid var(--amber-gold); }
        .stat-card:nth-child(3) { border-left: 4px solid var(--azure-blue); }
        .stat-card:nth-child(4) { border-left: 4px solid var(--soft-periwinkle); }

        .stat-card:nth-child(1) .stat-num { background: var(--strong-cyan); color: var(--oxford-navy); }
        .stat-card:nth-child(2) .stat-num { background: var(--amber-gold); color: var(--oxford-navy); }
        .stat-card:nth-child(3) .stat-num { background: var(--azure-blue); color: #fff; }
        .stat-card:nth-child(4) .stat-num { background: var(--soft-periwinkle); color: #fff; }

        /* ============ SECTION ============ */
        .section { padding: 4.5rem 0; position: relative; }
        .section-head { text-align: center; max-width: 44rem; margin: 0 auto 3rem; padding: 0 1rem; }
        .section-head h2 { color: var(--oxford-navy); margin: 0 0 .7rem; position: relative; display: inline-block; }
        .section-head h2::after {
            content: ""; position: absolute; left: 50%; transform: translateX(-50%); bottom: -.45rem;
            width: 60px; height: 4px; border-radius: 2px; background: var(--strong-cyan);
        }
        .section-head p { color: var(--neu-muted); margin: 0; margin-top: 1.2rem; }

        /* ============ TENTANG ============ */
        .tentang-grid { display: grid; gap: 2.5rem; align-items: center; }
        @media (min-width: 1024px) { .tentang-grid { grid-template-columns: 1fr 1.1fr; gap: 4rem; } }
        .tentang-text h2 { color: var(--oxford-navy); margin: 0 0 1rem; }
        .tentang-text p { color: var(--neu-muted); text-align: justify; margin: 0 0 1.2rem; line-height: 1.7; }
        .tentang-text p strong { color: var(--oxford-navy); }
        .tentang-points { list-style: none; padding: 0; margin: 0 0 1.6rem; display: grid; gap: .7rem; }
        .tentang-points li { display: flex; gap: .7rem; align-items: flex-start; font-size: .92rem; color: var(--oxford-navy); font-weight: 500; }
        .tentang-points .dot {
            margin-top: .45rem; width: 10px; height: 10px; border-radius: 50%;
            background: var(--strong-cyan); flex-shrink: 0;
            box-shadow: 2px 2px 5px rgba(12, 51, 99, 0.08);
        }
        .showcase-wrap { position: relative; }
        .showcase {
            position: relative; border-radius: 1.5rem; overflow: hidden;
            background: var(--neu-surface); aspect-ratio: 1 / 1;
            box-shadow: inset 6px 6px 12px var(--neu-dark), inset -6px -6px 12px var(--neu-light);
            padding: 8px;
        }
        .sc-art { position: absolute; inset: 8px; width: calc(100% - 16px); height: calc(100% - 16px); object-fit: cover; border-radius: 1rem; z-index: 1; }

        /* CSS scene: Lari ke Sekolah */
        .sc-sky { height: 220px; position: relative; background: linear-gradient(180deg, #BAE6FD 0%, #E0F2FE 100%); overflow: hidden; border-radius: 1rem 1rem 0 0; }
        .sc-sun { position: absolute; top: 18px; right: 26px; width: 52px; height: 52px; border-radius: 50%; background: #FBBF24; box-shadow: 0 0 30px rgba(251,191,36,.4); }
        .sc-cloud { position: absolute; background: rgba(255,255,255,.9); border-radius: 999px; }
        .sc-cloud.k1 { width: 74px; height: 22px; top: 30px; left: 18px; }
        .sc-cloud.k2 { width: 54px; height: 16px; top: 74px; left: 64px; opacity: .8; }
        .sc-cloud.k3 { width: 60px; height: 18px; top: 20px; left: 55%; }
        .sc-tree { position: absolute; bottom: 0; }
        .sc-tree-trunk { position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 8px; background: #92400E; border-radius: 3px; }
        .sc-tree-top { position: absolute; left: 50%; transform: translateX(-50%); border-radius: 50%; }
        .sc-tree-1 { left: 8%; }
        .sc-tree-1 .sc-tree-trunk { height: 60px; }
        .sc-tree-1 .sc-tree-top { width: 50px; height: 50px; background: #16A34A; bottom: 50px; }
        .sc-tree-2 { left: 22%; }
        .sc-tree-2 .sc-tree-trunk { height: 45px; }
        .sc-tree-2 .sc-tree-top { width: 38px; height: 38px; background: #22C55E; bottom: 38px; }
        .sc-tree-3 { right: 10%; }
        .sc-tree-3 .sc-tree-trunk { height: 55px; }
        .sc-tree-3 .sc-tree-top { width: 46px; height: 46px; background: #16A34A; bottom: 46px; }
        .sc-tree-4 { right: 25%; }
        .sc-tree-4 .sc-tree-trunk { height: 40px; }
        .sc-tree-4 .sc-tree-top { width: 34px; height: 34px; background: #22C55E; bottom: 34px; }
        .sc-school {
            position: absolute; bottom: 0; right: 15%; width: 80px; height: 65px;
            background: #FEF3C7; border-radius: 4px 4px 0 0;
            border: 2px solid #D97706;
        }
        .sc-school::before {
            content: ""; position: absolute; top: -18px; left: -6px; right: -6px; height: 20px;
            background: #DC2626; border-radius: 4px 4px 0 0;
        }
        .sc-school-window { position: absolute; width: 16px; height: 18px; background: #7DD3FC; border: 1.5px solid #92400E; border-radius: 2px; }
        .sc-school-window.w1 { top: 14px; left: 10px; }
        .sc-school-window.w2 { top: 14px; right: 10px; }
        .sc-school-door { position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 18px; height: 26px; background: #92400E; border-radius: 3px 3px 0 0; }
        .sc-school-flag { position: absolute; top: -36px; right: 12px; width: 3px; height: 22px; background: #6B7280; }
        .sc-school-flag::after { content: ""; position: absolute; top: 0; left: 3px; width: 16px; height: 10px; background: #DC2626; border-radius: 0 2px 2px 0; }
        .sc-ground { height: 96px; position: relative; background: #65A30D; border-radius: 0 0 1rem 1rem; }
        .sc-ground::before { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 12px; background: linear-gradient(90deg, #65A30D 0%, #84CC16 50%, #65A30D 100%); }
        .sc-path { position: absolute; top: 12px; left: 35%; right: 20%; height: 84px; background: #D4A574; border-radius: 0 0 20px 20px; clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%); }
        .sc-umar { position: absolute; bottom: 20px; left: 32%; width: 36px; height: 58px; animation: umar-run 1.2s ease-in-out infinite; }
        .sc-umar-head { position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 26px; height: 26px; border-radius: 50%; background: #FCD9B8; }
        .sc-umar-hair { position: absolute; top: -3px; left: 50%; transform: translateX(-50%); width: 28px; height: 14px; border-radius: 14px 14px 0 0; background: #1F2937; }
        .sc-umar-body { position: absolute; top: 24px; left: 50%; transform: translateX(-50%); width: 22px; height: 24px; border-radius: 6px 6px 4px 4px; background: #059669; }
        .sc-umar-bag { position: absolute; top: 26px; right: -4px; width: 12px; height: 16px; border-radius: 3px; background: #F59E0B; }
        .sc-umar-leg-l, .sc-umar-leg-r { position: absolute; bottom: 0; width: 8px; height: 16px; border-radius: 0 0 4px 4px; background: #1F2937; }
        .sc-umar-leg-l { left: 6px; animation: leg-left .6s ease-in-out infinite; }
        .sc-umar-leg-r { right: 6px; animation: leg-right .6s ease-in-out infinite; }
        @keyframes umar-run { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
        @keyframes leg-left { 0%, 100% { transform: rotate(-15deg); } 50% { transform: rotate(15deg); } }
        @keyframes leg-right { 0%, 100% { transform: rotate(15deg); } 50% { transform: rotate(-15deg); } }

        .showcase-caption {
            position: absolute; left: 16px; bottom: 16px; z-index: 2;
            font-size: .78rem; font-weight: 600; padding: .5rem .9rem; border-radius: .75rem;
            display: inline-flex; align-items: center; gap: .45rem;
            background: var(--neu-surface); color: var(--neu-text);
            box-shadow: 4px 4px 8px var(--neu-dark), -4px -4px 8px var(--neu-light);
        }

        /* ============ FLOW GAME ============ */
        .flow-section { background: var(--bright-snow); }
        .flow-grid { display: grid; gap: 1.2rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .flow-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .flow-grid { grid-template-columns: repeat(4, 1fr); } }
        .flow-card {
            background: #ffffff; border-radius: 1.25rem;
            padding: 1.6rem 1.4rem; position: relative;
            box-shadow: 6px 6px 16px rgba(12, 51, 99, 0.06), -6px -6px 16px rgba(255, 255, 255, 0.9);
            transition: box-shadow .3s, transform .3s;
            display: flex; flex-direction: column; gap: .6rem;
        }
        .flow-card:hover {
            box-shadow: inset 3px 3px 6px rgba(12, 51, 99, 0.06), inset -3px -3px 6px rgba(255, 255, 255, 0.8);
            transform: translateY(2px);
        }
        .flow-point:nth-child(1) { border-left-color: var(--strong-cyan); }
        .flow-point:nth-child(1) .flow-num { background: var(--strong-cyan); color: var(--oxford-navy); }

        .flow-point:nth-child(2) { border-left-color: var(--amber-gold); }
        .flow-point:nth-child(2) .flow-num { background: var(--amber-gold); color: var(--oxford-navy); }

        .flow-point:nth-child(3) { border-left-color: var(--azure-blue); }
        .flow-point:nth-child(3) .flow-num { background: var(--azure-blue); color: #fff; }

        .flow-point:nth-child(4) { border-left-color: var(--soft-periwinkle); }
        .flow-point:nth-child(4) .flow-num { background: var(--soft-periwinkle); color: #fff; }

        .flow-num {
            width: clamp(32px, 8vw, 42px); height: clamp(32px, 8vw, 42px);
            border-radius: .7rem; display: grid; place-items: center; flex-shrink: 0;
            font-weight: 800; font-size: clamp(.85rem, 3.4vw, 1rem);
        }
        .flow-card h3 { margin: 0; font-size: 1.1rem; color: var(--oxford-navy); }
        .flow-card p { margin: 0; font-size: .85rem; color: var(--neu-muted); line-height: 1.55; }

        /* ============ MATERI ============ */
        .materi-grid { display: grid; gap: 1.2rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .materi-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .materi-grid { grid-template-columns: repeat(3, 1fr); } }
        .materi-card {
            background: #ffffff; border-radius: 1.25rem; padding: 1.6rem;
            position: relative; overflow: hidden;
            box-shadow: 6px 6px 14px rgba(12, 51, 99, 0.12), -6px -6px 14px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.12);
            transition: box-shadow .3s, transform .3s;
        }
        .materi-card:hover {
            box-shadow: inset 3px 3px 8px rgba(12, 51, 99, 0.10), inset -3px -3px 8px rgba(255, 255, 255, 1);
            transform: translateY(2px);
        }
        .materi-card:nth-child(1) { border-left: 4px solid var(--strong-cyan); }
        .materi-card:nth-child(1) .materi-num { background: var(--strong-cyan); color: var(--oxford-navy); }
        .materi-card:nth-child(1) .m-tag { color: var(--oxford-navy); background: rgba(44, 200, 191, 0.15); }

        .materi-card:nth-child(2) { border-left: 4px solid var(--amber-gold); }
        .materi-card:nth-child(2) .materi-num { background: var(--amber-gold); color: var(--oxford-navy); }
        .materi-card:nth-child(2) .m-tag { color: var(--oxford-navy); background: rgba(253, 190, 7, 0.15); }

        .materi-card:nth-child(3) { border-left: 4px solid var(--azure-blue); }
        .materi-card:nth-child(3) .materi-num { background: var(--azure-blue); color: #fff; }
        .materi-card:nth-child(3) .m-tag { color: var(--azure-blue); background: rgba(57, 135, 248, 0.12); }

        .materi-card:nth-child(4) { border-left: 4px solid var(--soft-periwinkle); }
        .materi-card:nth-child(4) .materi-num { background: var(--soft-periwinkle); color: #fff; }
        .materi-card:nth-child(4) .m-tag { color: var(--soft-periwinkle); background: rgba(146, 125, 249, 0.12); }

        .materi-card:nth-child(5) { border-left: 4px solid var(--grapefruit-pink); }
        .materi-card:nth-child(5) .materi-num { background: var(--grapefruit-pink); color: #fff; }
        .materi-card:nth-child(5) .m-tag { color: var(--grapefruit-pink); background: rgba(253, 111, 108, 0.12); }

        .materi-card:nth-child(6) { border-left: 4px solid var(--oxford-navy); }
        .materi-card:nth-child(6) .materi-num { background: var(--oxford-navy); color: #fff; }
        .materi-card:nth-child(6) .m-tag { color: var(--oxford-navy); background: rgba(12, 51, 99, 0.12); }

        .materi-num {
            width: 42px; height: 42px; border-radius: .75rem; display: grid; place-items: center;
            font-weight: 800; font-size: 1.1rem; margin-bottom: 1rem;
        }
        .materi-card h3 { margin: 0 0 .4rem; font-size: 1.05rem; color: var(--oxford-navy); }
        .materi-card p { margin: 0; font-size: .85rem; color: var(--neu-muted); line-height: 1.55; }
        .materi-card .m-tag {
            display: inline-block; margin-top: .8rem; font-size: .72rem; font-weight: 700;
            padding: .3rem .8rem; border-radius: 999px;
        }

        /* ============ JADWAL ============ */
        .jadwal-section { background: var(--neu-bg); }
        .jadwal-table-wrap {
            max-width: 680px; margin: 0 auto; padding: 1.2rem;
            background: #ffffff; border-radius: 1.5rem;
            box-shadow: 8px 8px 18px rgba(12, 51, 99, 0.14), -8px -8px 18px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.15);
        }
        .jadwal-table {
            width: 100%; border-collapse: collapse; border-spacing: 0;
            background: var(--neu-surface); border-radius: 1rem; overflow: hidden;
        }
        .jadwal-table thead th {
            background: var(--neu-accent); color: #ffffff;
            font-size: .72rem; font-weight: 700; text-transform: uppercase; letter-spacing: .08em;
            padding: 1rem 1.3rem;
        }
        .jadwal-table thead th:first-child { border-radius: .75rem 0 0 0; }
        .jadwal-table thead th:last-child { border-radius: 0 .75rem 0 0; }
        .jadwal-table tbody td {
            padding: 1rem 1.3rem; font-size: .9rem; color: var(--neu-text); border: 0;
        }
        .jadwal-table th:first-child, .jadwal-table .j-day-name { text-align: left; }
        .jadwal-table th:nth-child(2), .jadwal-table .jt-date, .jadwal-table .jt-time { text-align: center; }
        .jadwal-table th:last-child, .jadwal-table td:last-child { text-align: left; }
        .jadwal-table .j-day-name { font-weight: 700; vertical-align: middle; white-space: nowrap; }
        .jadwal-table .jt-time { font-weight: 700; color: var(--neu-muted); }
        .jadwal-table .jt-date { font-weight: 600; color: var(--neu-muted); white-space: nowrap; }
        .jadwal-table .jt-date.is-closed { font-weight: 400; color: var(--neu-muted); opacity: .5; }
        .jadwal-table .jt-note { display: block; margin-top: .2rem; font-size: .68rem; font-weight: 700; color: var(--neu-accent); white-space: normal; }
        .jadwal-table tr.row-past td { opacity: .45; }
        .jadwal-table tr.row-past .jt-date { text-decoration: line-through; }
        .jadwal-table tr.row-active td { }
        .jadwal-table tr.row-active .jt-date { color: var(--neu-accent); font-weight: 700; }
        .jadwal-table tr.row-active .j-day-name { color: var(--neu-accent); }
        .jadwal-table tr.row-active { border-left: 3px solid var(--neu-accent); }
        .jt-next-week-label {
            display: block; font-size: .62rem; font-weight: 700; color: var(--neu-muted);
            margin-top: .2rem; text-transform: uppercase; letter-spacing: .5px;
        }
        .jadwal-table tr.row-next-week td { background: rgba(0,0,0,.03); }
        .jadwal-table tr.row-next-week .jt-date { color: var(--neu-text); font-weight: 700; }
        .jadwal-table tr.row-next-week .j-day-name { color: var(--neu-muted); }
        .jadwal-table tr.row-next-week { border-left: 3px solid var(--neu-dark); }

        .jadwal-weekly-note {
            text-align: center; margin-top: 1.2rem; padding: .65rem 1.1rem;
            font-size: .82rem; color: var(--neu-accent-dark); display: inline-flex; align-items: center; gap: .5rem;
            background: var(--neu-surface); border-radius: 999px;
            box-shadow: inset 2px 2px 5px var(--neu-dark), inset -2px -2px 5px var(--neu-light);
        }
        .jadwal-note { text-align: center; margin-top: 1.5rem; color: var(--neu-muted); font-size: .88rem; }

        /* ============ HARGA ============ */
        .harga-section { background: var(--neu-bg); }
        .harga-section .section-head h2 { color: var(--neu-text); }
        .harga-section .section-head p { color: var(--neu-muted); }

        .price-card {
            max-width: 520px; margin: 0 auto; background: #ffffff; border-radius: 1.75rem;
            padding: 2.5rem 2rem; text-align: center; position: relative;
            box-shadow: 12px 12px 24px rgba(12, 51, 99, 0.16), -12px -12px 24px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.18);
        }
        .price-ribbon {
            position: absolute; top: -14px; left: 50%; transform: translateX(-50%) rotate(-2deg);
            font-weight: 700; font-size: .8rem; padding: .5rem 1.2rem; border-radius: 999px;
            white-space: nowrap; display: inline-flex; align-items: center; gap: .4rem;
            background: var(--amber-gold); color: var(--oxford-navy);
            box-shadow: 4px 4px 10px rgba(12, 51, 99, 0.14), -4px -4px 10px rgba(255, 255, 255, 1);
        }
        .price-card h3 { color: var(--oxford-navy); margin: 1rem 0 .3rem; font-size: 1.3rem; }
        .price-card .pc-sub { color: var(--neu-muted); font-size: .88rem; margin: 0 0 1.3rem; }
        .price-old { color: var(--neu-muted); text-decoration: line-through; font-size: 1.1rem; font-weight: 500; }
        .price-main { font-weight: 800; font-size: 3.4rem; line-height: 1; color: var(--strong-cyan); margin: .3rem 0; }
        .price-main small { font-size: 1.4rem; }
        .price-note { color: var(--neu-muted); font-size: .82rem; margin: .3rem 0 1.4rem; }
        .price-includes { list-style: none; padding: 0; margin: 0 0 1.6rem; text-align: left; display: grid; gap: .6rem; }
        .price-includes li { display: flex; gap: .7rem; align-items: flex-start; font-size: .88rem; color: var(--oxford-navy); }
        .price-includes .check {
            width: 22px; height: 22px; border-radius: .5rem; display: grid; place-items: center;
            font-size: .7rem; font-weight: 700; flex-shrink: 0; margin-top: 2px;
            background: var(--strong-cyan); color: var(--oxford-navy);
        }
        .countdown { display: flex; gap: .7rem; justify-content: center; margin: 1rem 0 1.4rem; }
        .cd-box {
            padding: .6rem .75rem; min-width: 64px; text-align: center;
            background: #F2F6F6; border-radius: .75rem;
            box-shadow: inset 3px 3px 8px rgba(12, 51, 99, 0.12), inset -3px -3px 8px rgba(255, 255, 255, 1);
        }
        .cd-box b { font-weight: 800; font-size: 1.3rem; color: var(--strong-cyan); display: block; line-height: 1.1; }
        .cd-box span { font-size: .6rem; text-transform: uppercase; letter-spacing: .06em; color: var(--neu-muted); }
        .cd-label {
            font-size: .8rem; color: var(--neu-muted); margin-bottom: .5rem;
            display: flex; align-items: center; justify-content: center; gap: .4rem;
        }
        .cd-label svg { width: 16px; height: 16px; stroke: var(--strong-cyan); flex-shrink: 0; }
        .price-foot { font-size: .75rem; color: var(--neu-muted); margin-top: 1.2rem; }

        /* ============ FAQ ============ */
        .faq-list { max-width: 46rem; margin: 0 auto; display: grid; gap: .9rem; padding: 0 1rem; }
        .faq-item {
            background: #ffffff; border-radius: 1.25rem;
            box-shadow: 6px 6px 14px rgba(12, 51, 99, 0.14), -6px -6px 14px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.12);
            transition: box-shadow .3s;
        }
        .faq-item.open {
            box-shadow: inset 4px 4px 10px rgba(12, 51, 99, 0.12), inset -4px -4px 10px rgba(255, 255, 255, 1);
        }
        .faq-q {
            width: 100%; text-align: left; background: none; border: 0;
            padding: 1.1rem 1.3rem; display: flex; align-items: center; gap: 1rem; cursor: pointer;
            font-family: 'Outfit', sans-serif; font-size: .92rem; font-weight: 600; color: var(--oxford-navy);
        }
        .faq-q .chev {
            margin-left: auto; width: 32px; height: 32px; border-radius: .6rem; display: grid; place-items: center;
            flex-shrink: 0; transition: transform .25s, box-shadow .25s;
            background: #F2F6F6;
            box-shadow: 3px 3px 8px rgba(12, 51, 99, 0.12), -3px -3px 8px rgba(255, 255, 255, 1);
            color: var(--strong-cyan); font-size: .8rem;
        }
        .faq-item.open .chev { transform: rotate(180deg); box-shadow: inset 2px 2px 5px rgba(12, 51, 99, 0.12), inset -2px -2px 5px rgba(255, 255, 255, 1); }
        .faq-a { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
        .faq-a-inner { padding: 0 1.3rem 1.15rem; font-size: .88rem; color: var(--neu-muted); line-height: 1.65; }
        .faq-a-inner strong { color: var(--oxford-navy); }

        /* ============ FLOATING ============ */
        .float-wa, .float-top {
            position: fixed; z-index: 60; border-radius: 50%;
            display: grid; place-items: center; opacity: 0; pointer-events: none;
            transition: opacity .3s, transform .2s; cursor: pointer; border: 0;
        }
        .float-wa {
            right: 1.2rem; bottom: 5.4rem; width: 54px; height: 54px;
            background: var(--strong-cyan);
            box-shadow: 5px 5px 14px rgba(44, 200, 191, 0.35), -5px -5px 14px rgba(255, 255, 255, 1);
        }
        .float-top {
            right: 1.2rem; bottom: 1.2rem; width: 46px; height: 46px;
            background: #ffffff;
            box-shadow: 5px 5px 14px rgba(12, 51, 99, 0.14), -5px -5px 14px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.2);
            color: var(--oxford-navy);
        }
        .float-wa.show, .float-top.show { opacity: 1; pointer-events: auto; }
        .float-wa:hover, .float-top:hover { transform: scale(1.06); }
        .float-wa svg, .float-wa img { width: 26px; height: 26px; fill: #fff; }
        .float-wa img { fill: none; }
        .float-top svg { width: 18px; height: 18px; stroke: var(--oxford-navy); stroke-width: 2.5; }

        @media (max-width: 640px) {
            .price-main { font-size: 2.8rem; }
            .jadwal-table thead th, .jadwal-table tbody td { padding: .8rem .5rem; font-size: .82rem; }
            .hero { padding: 1.5rem 0 .5rem; }
        }

        .section-divider {
            height: 2px; max-width: 160px; margin: 0 auto;
            background: linear-gradient(90deg, transparent, var(--strong-cyan), transparent);
            opacity: .18;
        }

        /* ============ GEOMETRIC DECORATIONS ============ */
        .section { position: relative; overflow: hidden; }
        .section > .container { position: relative; z-index: 1; }
        .section-head { position: relative; z-index: 1; }

        /* ============ ACCENT BORDERS ============ */
        .flow-card { border-left: 3px solid var(--neu-accent); }
        .materi-card-accent-gold { border-left: 3px solid var(--neu-gold); }
        .materi-card-accent-green { border-left: 3px solid var(--neu-accent); }
        .price-card-accent { border: 2px solid rgba(5,150,105,.2); }
        .faq-item-open-accent { border-left: 3px solid var(--neu-accent); }

        /* ============ CTA BAND ============ */
        .cta-band {
            text-align: center; padding: 4rem 1.5rem; border-radius: 1.75rem; position: relative; overflow: hidden;
            background: #ffffff;
            box-shadow: 10px 10px 22px rgba(12, 51, 99, 0.16), -10px -10px 22px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.18);
        }
        .cta-band h2 { color: var(--oxford-navy); margin: 0 0 .6rem; }
        .cta-band p { color: var(--neu-muted); max-width: 34rem; margin: 0 auto 1.5rem; }

        /* ============ FOOTER NEUMORPHISM ============ */
        .footer-neu {
            background: var(--neu-bg); color: var(--oxford-navy);
            border-top: 1px solid rgba(44, 200, 191, 0.2);
        }
        .footer-neu h4 { color: var(--oxford-navy); font-weight: 600; }
        .footer-neu a { color: var(--neu-muted); transition: color .2s; }
        .footer-neu a:hover { color: var(--strong-cyan); }
        .footer-neu p { color: var(--neu-muted); }
        .footer-social {
            display: inline-flex; align-items: center; justify-content: center;
            width: 40px; height: 40px; border-radius: 50%;
            background: #ffffff;
            box-shadow: 3px 3px 8px rgba(12, 51, 99, 0.12), -3px -3px 8px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.15);
            transition: box-shadow .25s, transform .2s;
        }
        .footer-social:hover {
            box-shadow: inset 2px 2px 6px rgba(12, 51, 99, 0.12), inset -2px -2px 6px rgba(255, 255, 255, 1);
            transform: translateY(1px);
        }
        .footer-divider {
            border: 0; height: 1px;
            background: rgba(44, 200, 191, 0.2);
            margin: 2rem 0;
        }
        .footer-copy {
            display: inline-flex; align-items: center; gap: .5rem;
            padding: .45rem 1rem; border-radius: 999px; font-size: .8rem;
            background: #F2F6F6; color: var(--neu-muted);
            box-shadow: inset 2px 2px 6px rgba(12, 51, 99, 0.12), inset -2px -2px 6px rgba(255, 255, 255, 1);
        }
        .footer-cert-card {
            display: inline-block; padding: .8rem; border-radius: 1rem;
            background: #ffffff;
            box-shadow: 4px 4px 12px rgba(12, 51, 99, 0.14), -4px -4px 12px rgba(255, 255, 255, 1);
            border: 1px solid rgba(44, 200, 191, 0.15);
            transition: box-shadow .3s, transform .2s;
        }
        .footer-cert-card:hover {
            box-shadow: inset 3px 3px 8px rgba(12, 51, 99, 0.12), inset -3px -3px 8px rgba(255, 255, 255, 1);
            transform: translateY(1px);
        }
        .footer-contact-item { display: flex; align-items: center; gap: .5rem; }
        .footer-contact-icon {
            width: 30px; height: 30px; border-radius: .5rem; display: grid; place-items: center; flex-shrink: 0;
            background: #F2F6F6;
            box-shadow: 2px 2px 6px rgba(12, 51, 99, 0.12), -2px -2px 6px rgba(255, 255, 255, 1);
            color: var(--strong-cyan); font-size: .75rem;
        }

        @keyframes soft-pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.03); } }
        .hero-badge { animation: soft-pulse 3s ease-in-out infinite; }
    </style>
</head>
<body>

    <!-- ================= HEADER ================= -->
    <header class="sticky-header">
        <nav class="nav" aria-label="Navigasi utama">
            <a href="#home" class="logo">
                <img src="https://lh3.googleusercontent.com/d/1-SohDYI3-WX1he2MFoAyv1kRNpubQPKd" alt="Alhazen Academy" class="logo-img" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                <span class="logo-fallback"><img src="https://lh3.googleusercontent.com/d/1z8V0bDG0PYTB9oXrS7jBvB9OkfSHsBf_" alt="" loading="lazy"> Coding Experience Class</span>
            </a>

            <div class="nav-desktop">
                <ul class="nav-links">
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#jadwal">Jadwal</a></li>
                    <li><a href="#harga">Harga</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
                <a href="#jadwal" class="nav-btn-primary">Daftar Kelas</a>
            </div>

            <button class="nav-burger" id="burgerBtn" aria-label="Buka menu" aria-expanded="false">&#9776;</button>
        </nav>

        <div class="mobile-menu" id="mobileMenu">
            <div class="mm-title">Menu</div>
            <hr>
            <a class="mm-item" href="#tentang">Tentang</a>
            <a class="mm-item" href="#jadwal">Jadwal</a>
            <a class="mm-item" href="#harga">Harga</a>
            <a class="mm-item" href="#faq">FAQ</a>
            <a href="#jadwal" class="mm-cta">Daftar Kelas</a>
            <a href="https://apps.alhazen.academy/#/login" class="mm-login">Masuk / Login</a>
        </div>
    </header>

    <!-- ================= HERO ================= -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-inner">
                <img class="hero-badge" src="{{asset('assets/custom/coding_experience_class/cec_logo.png')}}" alt="Coding Experience Class Logo">
                <h1 class="hero-title text-h1">Bantu Umar <span class="hl">Lari ke Sekolah</span></h1>
                <p class="hero-sub text-body">
                    Kelas coding 1 hari yang dirancang untuk memfasilitasi rasa penasaran anak yang ingin mencoba membuat game. Belajar logika sambil bikin game seru lari ke sekolah.
                </p>
                <div class="hero-chips">
                    <span class="chip">1 Hari</span>
                    <span class="chip">Online via Zoom</span>
                    <span class="chip">Kelas Online</span>
                    <span class="chip">Game Nyata</span>
                </div>
                <div class="hero-price">
                    <span class="price-old-wrap"><span class="price-strike">Rp 99.000</span></span>
                    <span class="price-now">Rp 19.000</span>
                    <span class="price-save">Hemat 81%</span>
                </div>
                <div class="hero-ctas">
                    <a href="#jadwal" class="btn btn-primary btn-big">Daftar Sekarang</a>
                    <a href="#materi" class="btn btn-ghost btn-big">Lihat Materi</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STATS ================= -->
    <section class="stats" aria-label="Fakta singkat kelas">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card reveal">
                    <div class="stat-num">01</div>
                    <div style="display:flex; flex-direction:column; gap:.15rem;"><b style="font-weight:700; font-size:.95rem; color:var(--oxford-navy);">1 Hari</b><span style="font-size:.78rem; color:var(--neu-muted);">Kelas intensif</span></div>
                </div>
                <div class="stat-card reveal">
                    <div class="stat-num">02</div>
                    <div style="display:flex; flex-direction:column; gap:.15rem;"><b style="font-weight:700; font-size:.95rem; color:var(--oxford-navy);">Online via Zoom</b><span style="font-size:.78rem; color:var(--neu-muted);">Dari rumah</span></div>
                </div>
                <div class="stat-card reveal">
                    <div class="stat-num">03</div>
                    <div style="display:flex; flex-direction:column; gap:.15rem;"><b style="font-weight:700; font-size:.95rem; color:var(--oxford-navy);">Tanpa Coding Rumit</b><span style="font-size:.78rem; color:var(--neu-muted);">Blok visual ramah anak</span></div>
                </div>
                <div class="stat-card reveal">
                    <div class="stat-num">04</div>
                    <div style="display:flex; flex-direction:column; gap:.15rem;"><b style="font-weight:700; font-size:.95rem; color:var(--oxford-navy);">Game + Sertifikat</b><span style="font-size:.78rem; color:var(--neu-muted);">Project dibawa pulang</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TENTANG ================= -->
    <section id="tentang" class="section">
        <div class="container">
            <div class="tentang-grid">
                <div class="showcase-wrap reveal">
                    <img src="{{ asset('assets/custom/coding_experience_class/september.jpeg') }}" alt="Coding Experience Class - Lari ke Sekolah" loading="lazy" style="width: 100%; height: auto; display: block; border-radius: 1.5rem;" onerror="this.remove()">
                </div>

                <div class="tentang-text reveal">
                    <h2 class="text-h2">Apa itu Coding Experience Class?</h2>
                    <p>
                        <strong>Coding Experience Class</strong> adalah kelas <strong>belajar coding 1 hari</strong> yang dirancang untuk memfasilitasi rasa penasaran anak yang ingin mencoba bagaimana cara membuat aplikasi atau game menggunakan coding.
                    </p>
                    <p>
                        Di kelas ini, anak belajar <strong>logika pemrograman</strong> sambil bikin game <strong>Lari ke Sekolah</strong> bersama karakter Umar. Satu hari cukup untuk merasakan serunya menjadi pembuat game.
                    </p>
                    <ul class="tentang-points">
                        <li><span class="dot"></span>Kelas online via Zoom, didampingi tutor ramah anak</li>
                        <li><span class="dot"></span>Belajar logika, variabel, kondisi &amp; perulangan dengan cara bermain</li>
                        <li><span class="dot"></span>Hasil project game siap ditunjukkan ke keluarga &amp; teman</li>
                        <li><span class="dot"></span>Modul, file project &amp; sertifikat dibawa pulang</li>
                    </ul>
                    <a href="#jadwal" class="btn btn-primary">Amankan Kursi Anak Saya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FLOW GAME ================= -->
    <div class="section-divider" aria-hidden="true"></div>
    <section id="cara-main" class="section flow-section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Gimana Serunya Game-nya?</h2>
                <p>Bantu Umar berlari ke sekolah melewati berbagai rintangan di jalan. Kumpulkan poin dan jangan sampai terlambat.</p>
            </div>

            <div class="flow-split">
                <div class="flow-points reveal">
                    <div class="flow-point">
                        <div class="flow-num">01</div>
                        <div>
                            <h3>Mulai Berlari</h3>
                            <p>Umar berlari dari rumah menuju sekolah. Anak mengontrol arah dan kecepatan lari Umar.</p>
                        </div>
                    </div>
                    <div class="flow-point">
                        <div class="flow-num">02</div>
                        <div>
                            <h3>Hindari Rintangan</h3>
                            <p>Rintangan muncul di jalan. Anak harus menghindari agar Umar tidak terjatuh atau terlambat.</p>
                        </div>
                    </div>
                    <div class="flow-point">
                        <div class="flow-num">03</div>
                        <div>
                            <h3>Kumpulkan Poin</h3>
                            <p>Kumpulkan bintang dan koin di sepanjang jalan untuk menambah skor Umar.</p>
                        </div>
                    </div>
                    <div class="flow-point">
                        <div class="flow-num">04</div>
                        <div>
                            <h3>Sampai di Sekolah</h3>
                            <p>Berhasil sampai sebelum bel berbunyi. Umar senang dan siap belajar.</p>
                        </div>
                    </div>
                    <p class="flow-note">Di kelas, anak belajar <strong>membuat</strong> semua ini dari nol, mulai dari karakter, skor, sampai rintangan.</p>
                </div>
                <div class="flow-video-wrap reveal">
                    <img src="{{ asset('assets/custom/coding_experience_class/september_demo.gif') }}" alt="Demo game Lari ke Sekolah" class="flow-video" loading="lazy" onerror="this.parentElement.style.display='none'">
                </div>
            </div>
        </div>
    </section>

    <!-- ================= MATERI ================= -->
    <section id="materi" class="section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Apa yang Akan Dipelajari?</h2>
                <p>Materi dikemas menyenangkan, anak belajar konsep coding sungguhan tanpa sadar sedang belajar.</p>
            </div>

            <div class="materi-grid">
                <div class="materi-card materi-card-accent-green reveal">
                    <div class="materi-num">1</div>
                    <h3>Movement &amp; Direction</h3>
                    <p>Anak belajar membuat karakter bergerak ke kiri, kanan, dan melompat. Dasar dari setiap game.</p>
                    <span class="m-tag">Fundamental</span>
                </div>
                <div class="materi-card materi-card-accent-gold reveal">
                    <div class="materi-num">2</div>
                    <h3>Obstacles &amp; Collision</h3>
                    <p>Bikin rintangan muncul dan deteksi tabrakan. Anak belajar logika "jika kena rintangan, maka...".</p>
                    <span class="m-tag">Logika</span>
                </div>
                <div class="materi-card materi-card-accent-green reveal">
                    <div class="materi-num">3</div>
                    <h3>Scoring System</h3>
                    <p>Bikin variabel skor, lalu lihat angkanya berubah saat mengumpulkan poin atau kena rintangan.</p>
                    <span class="m-tag">Variabel</span>
                </div>
                <div class="materi-card materi-card-accent-gold reveal">
                    <div class="materi-num">4</div>
                    <h3>Conditions (Jika &hellip; Maka)</h3>
                    <p>"Jika kena rintangan, maka skor berkurang". Anak belajar logika percabangan dengan cara main.</p>
                    <span class="m-tag">Percabangan</span>
                </div>
                <div class="materi-card materi-card-accent-green reveal">
                    <div class="materi-num">5</div>
                    <h3>Loops &amp; Repetition</h3>
                    <p>Rintangan dan poin terus-menerus muncul. Anak belajar membuat perulangan untuk benda yang bergerak.</p>
                    <span class="m-tag">Perulangan</span>
                </div>
                <div class="materi-card materi-card-accent-gold reveal">
                    <div class="materi-num">6</div>
                    <h3>Creativity &amp; Design</h3>
                    <p>Anak bebas berkreasi menghias jalanan, sekolah, dan karakter Umar dengan gaya sendiri.</p>
                    <span class="m-tag">Kreativitas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= JADWAL ================= -->
    <div class="section-divider" aria-hidden="true"></div>
    <section id="jadwal" class="section jadwal-section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Pilih Jadwal Kelas</h2>
                <p>Pilih hari &amp; jam yang paling cocok, lalu klik Daftar. Kelas online via Zoom, durasi +/-60 menit.</p>
                <p class="jadwal-start reveal" style="display:inline-flex; align-items:center; gap:.5rem; flex-wrap:wrap; margin-top:1rem; padding:.6rem 1.1rem; border-radius:999px; font-size:.88rem; color:var(--neu-text); background:var(--neu-surface); box-shadow:inset 3px 3px 6px var(--neu-dark), inset -3px -3px 6px var(--neu-light);">Kelas mulai: <strong id="jadwalMulai" style="color:var(--neu-accent)">Senin, 5 Oktober 2026</strong></p>
            </div>

            <div class="jadwal-table-wrap reveal">
                <table class="jadwal-table">
                    <thead>
                        <tr><th scope="col">Hari</th><th scope="col">Tanggal</th><th scope="col">Jam</th><th scope="col">Tutor</th></tr>
                    </thead>
                    <tbody>
                        <tr><td class="j-day-name">Senin</td><td class="jt-date" data-day="0"></td><td class="jt-time">18.30 WIB</td><td>Kak Hilyah</td></tr>
                        <tr><td class="j-day-name">Selasa</td><td class="jt-date" data-day="1"></td><td class="jt-time">19.00 WIB</td><td>Kak Refina</td></tr>
                        <tr><td class="j-day-name">Rabu</td><td class="jt-date" data-day="2"></td><td class="jt-time">14.00 WIB</td><td>Kak Miftah</td></tr>
                        <tr><td class="j-day-name">Kamis</td><td class="jt-date" data-day="3"></td><td class="jt-time">16.00 WIB</td><td>Kak Refina</td></tr>
                        <tr><td class="j-day-name">Kamis</td><td class="jt-date" data-day="3"></td><td class="jt-time">16.00 WIB</td><td>Kak Ardi</td></tr>
                        <tr><td class="j-day-name">Jumat</td><td class="jt-date" data-day="4"></td><td class="jt-time">18.30 WIB</td><td>Kak Ardi</td></tr>
                        <tr><td class="j-day-name">Sabtu</td><td class="jt-date" data-day="5"></td><td class="jt-time">13.00 WIB</td><td>Kak Miftah</td></tr>
                    </tbody>
                </table>
            </div>
            <div style="text-align:center;">
                <span class="jadwal-weekly-note reveal">Jadwal tersedia setiap minggu. Pilih hari yang paling cocok.</span>
            </div>
            <p class="jadwal-note reveal">Kuota tiap sesi terbatas, pilih jadwal &amp; daftar sekarang.</p>
            <div style="text-align:center; margin-top:1.6rem;">
                <a href="https://goakal.com/alhazenacademy/coding-experience/2ak73/apply?promo=janganterlambat" class="btn btn-primary btn-big">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <!-- ================= HARGA ================= -->
    <div class="section-divider" aria-hidden="true"></div>
    <section id="harga" class="section harga-section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Harga Promo Spesial</h2>
                <p>Promo terbatas untuk kelas perdana Oktober. Setelah kuota penuh, harga kembali normal.</p>
            </div>

            <div class="price-card price-card-accent reveal">
                <span class="price-ribbon">PROMO OKTOBER</span>
                <h3>Coding Experience Class</h3>
                <p class="pc-sub">1 Hari &bull; Online via Zoom</p>

                <div class="price-old">Rp 99.000</div>
                <div class="price-main"><small>Rp</small> 19.000</div>
                <p class="price-note">Hemat 81%, promo spesial kelas perdana Oktober.</p>

                <div class="cd-label">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Promo berakhir dalam:
                </div>
                <div class="countdown" id="countdown">
                    <div class="cd-box"><b id="cdD">00</b><span>Hari</span></div>
                    <div class="cd-box"><b id="cdH">00</b><span>Jam</span></div>
                    <div class="cd-box"><b id="cdM">00</b><span>Menit</span></div>
                    <div class="cd-box"><b id="cdS">00</b><span>Detik</span></div>
                </div>

                <ul class="price-includes">
                    <li><span class="check">&#10003;</span>1 sesi live Zoom 60 menit bersama tutor ramah anak</li>
                    <li><span class="check">&#10003;</span>Kelas online yang interaktif &amp; menyenangkan</li>
                    <li><span class="check">&#10003;</span>Belajar logika coding pakai blok visual, tanpa pengalaman pun bisa</li>
                    <li><span class="check">&#10003;</span>Hasil project: game Lari ke Sekolah bersama Umar</li>
                    <li><span class="check">&#10003;</span>Modul &amp; file project dibawa pulang</li>
                    <li><span class="check">&#10003;</span>Sertifikat keikutsertaan Coding Experience Class</li>
                </ul>

                <a href="#jadwal" class="btn btn-primary btn-big" style="width:100%;">Amankan Kursi, Rp 19.000</a>
                <p class="price-foot">Kuota terbatas &bull; Pembayaran mudah &bull; Link Zoom dikirim setelah pendaftaran</p>
            </div>
        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <div class="section-divider" aria-hidden="true"></div>
    <section id="faq" class="section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Pertanyaan yang Sering Ditanya</h2>
                <p>Masih ragu? Cek jawabannya di bawah.</p>
            </div>

            <div class="faq-list">
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Untuk usia berapa kelas ini?<span class="chev">&#9662;</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Kelas ini cocok untuk anak <strong>SD (usia 7-12 tahun)</strong>, terutama yang baru mau mencoba coding pertama kali. Materi dan pendampingan disesuaikan agar anak nyaman dan tetap seru.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Apakah anak harus punya pengalaman coding?<span class="chev">&#9662;</span></button>
                    <div class="faq-a"><div class="faq-a-inner"><strong>Tidak wajib.</strong> Kami mulai dari nol menggunakan blok visual yang ramah anak, jadi anak tanpa pengalaman coding pun langsung bisa ikut dan berhasil membuat game.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Perangkat apa yang dibutuhkan?<span class="chev">&#9662;</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Cukup <strong>laptop/PC dengan koneksi internet</strong> dan aplikasi Zoom. Semua tools yang dipakai gratis dan bisa diakses lewat browser.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Berapa lama kelasnya?<span class="chev">&#9662;</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Kelas berlangsung <strong>1 hari</strong> dengan durasi +/-60 menit secara live via Zoom.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Apa yang dibawa pulang setelah kelas?<span class="chev">&#9662;</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Anak membawa pulang <strong>game Lari ke Sekolah</strong> yang ia buat sendiri, modul pembelajaran, file project, serta <strong>sertifikat keikutsertaan</strong> Coding Experience Class.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Bagaimana cara mendaftar?<span class="chev">&#9662;</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Klik tombol <strong>"Daftar"</strong> di halaman ini, lalu pilih <strong>jadwal kelas</strong> yang paling cocok. Setelah itu klik <strong>"Daftar Sekarang"</strong>, kamu akan diarahkan ke form registrasi dan admin akan membantu proses pendaftaran serta pembayaran dengan cepat.</div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA BAWAH ================= -->
    <div class="section-divider" aria-hidden="true"></div>
    <section class="section" style="padding-top:1rem;">
        <div class="container">
            <div class="cta-band reveal">
                <h2 class="text-h2">Jadi pembuat game cilik</h2>
                <p>Kuota kelas kecil supaya anak dapat perhatian maksimal. Jangan sampai kehabisan di kelas perdana Oktober.</p>
                <a href="#jadwal" class="btn btn-primary btn-big">Daftar Coding Experience Class</a>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <div class="section-divider" aria-hidden="true"></div>
    <footer class="footer-neu" style="padding: 3rem 0 1.5rem;">
        <div class="mx-auto max-w-7xl px-5 sm:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-y-12 md:gap-x-12 xl:gap-x-16">

                <!-- Logo & About -->
                <div class="md:col-span-3 space-y-4 md:space-y-5">
                    <img src="https://lh3.googleusercontent.com/d/1-SohDYI3-WX1he2MFoAyv1kRNpubQPKd" alt="Alhazen Academy" class="h-10 w-auto" loading="lazy"
                        decoding="async" onerror="this.src='https://lh3.googleusercontent.com/d/1_g1o1KBK2dGI9hIJVm0vJx7COTdlDuUC';">
                    <div class="flex items-center gap-3">
                        <a href="https://www.facebook.com/alhazenacademy" target="_blank" rel="noopener" class="footer-social" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" style="width: 20px; height: 20px; fill: var(--oxford-navy);"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://instagram.com/alhazenacademy" target="_blank" rel="noopener" class="footer-social" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" style="width: 20px; height: 20px; fill: var(--oxford-navy);"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://www.tiktok.com/@alhazenacademy" target="_blank" rel="noopener" class="footer-social" aria-label="TikTok">
                            <svg viewBox="0 0 24 24" style="width: 18px; height: 18px; fill: var(--oxford-navy);"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.06-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.9-.32-1.98-.23-2.81.36-.54.38-.89.98-1.03 1.64-.17.47-.12.99.03 1.47.18.51.53.96.99 1.25.42.24.91.37 1.41.4 1.25.1 2.5-.58 3-1.67.15-.3.21-.62.22-.95.06-4.32.01-8.64.04-12.96z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/company/alhazen-academy" target="_blank" rel="noopener" class="footer-social" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" style="width: 18px; height: 18px; fill: var(--oxford-navy);"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@alhazenacademy" target="_blank" rel="noopener" class="footer-social" aria-label="YouTube">
                            <svg viewBox="0 0 24 24" style="width: 20px; height: 20px; fill: var(--oxford-navy);"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                    <p class="text-sm max-w-sm leading-relaxed text-justify">PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.</p>
                </div>

                <!-- Program -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 style="font-family: Outfit" class="text-lg font-semibold">Program</h4>
                    <ul class="space-y-2.5">
                        <li><a href="https://alhazen.academy/kursus-coding-anak?tab=coding#program" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 rounded">Coding</a></li>
                        <li><a href="https://alhazen.academy/program?tab=animation#program" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 rounded">Animation</a></li>
                        <li><a href="https://alhazen.academy/program?tab=iot#program" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 rounded">IoT</a></li>
                        <li><a href="https://alhazen.academy/kursus-roblox?tab=roblox#program" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 rounded">Roblox</a></li>
                        <li><a href="https://alhazen.academy/program?tab=design#program" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 rounded">Design</a></li>
                    </ul>

                    <div class="mt-5">
                        <h4 style="font-family: Outfit" class="text-lg font-semibold mb-3">Hubungi Kami</h4>
                        <ul class="space-y-2.5 text-sm">
                            <li class="footer-contact-item">
                                <span class="footer-contact-icon flex items-center justify-center"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--strong-cyan);">call</span></span>
                                <a href="tel:+6281390000332" class="hover:underline">+62-813-90000-332</a>
                            </li>
                            <li class="footer-contact-item">
                                <span class="footer-contact-icon flex items-center justify-center"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--strong-cyan);">mail</span></span>
                                <a href="mailto:info@alhazen.academy" class="hover:underline">info@alhazen.academy</a>
                            </li>
                            <li class="footer-contact-item">
                                <span class="footer-contact-icon flex items-center justify-center"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--strong-cyan);">globe</span></span>
                                <a href="https://www.alhazen.academy" target="_blank" rel="noopener" class="hover:underline">www.alhazen.academy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Lainnya -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 style="font-family: Outfit" class="text-lg font-semibold">Lainnya</h4>
                    <ul class="space-y-2.5">
                        <li><a href="https://alhazen.academy/program" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4">Program</a></li>
                        <li><a href="https://alhazen.academy/event" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4">Event</a></li>
                        <li><a href="https://alhazen.academy/artikel" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4">Artikel</a></li>
                        <li><a href="https://alhazen.academy/tentang-kami" target="_blank" rel="noopener" class="text-sm hover:underline underline-offset-4">Tentang Kami</a></li>
                    </ul>

                    <div class="pt-3">
                        <h4 style="font-family: Outfit" class="text-lg font-semibold mb-3">Tersertifikasi</h4>
                        <div class="footer-cert-card">
                            <a href="https://blockchain.stem.org/9faa3d1f-7825-4b4c-8967-525fa6eb08f0#gs.c2374s" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center">
                                <img alt="Badge Sertifikasi STEM.org" class="block" width="400" height="400" loading="lazy" decoding="async"
                                    src="https://api.accredible.com/v1/frontend/credential_website_embed_image/badge/108574909"
                                    data-fallback="https://alhazen.academy/assets/stem_badge.png"
                                    onerror="this.onerror=null; this.src=this.dataset.fallback;">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="md:col-span-3 md:pl-6 space-y-3">
                    <h4 style="font-family: Outfit" class="text-lg font-semibold mb-3">Kantor Pusat</h4>
                    <div class="neu-pressed" style="padding: 1rem 1.1rem; border-radius: 1rem;">
                        <a href="https://maps.google.com/?q=Plaza+Kaha%2C+Jl.+KH+Abdullah+Syafei+No.21+C%2C+Bukit+Duri%2C+Kec.+Tebet%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12840" target="_blank" rel="noopener"
                            class="text-sm leading-relaxed hover:underline" style="color: var(--neu-text);">Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840</a>
                    </div>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="text-center">
                <span class="footer-copy">&copy; 2026 <strong style="color: var(--neu-text);">PT. Alhazen Global Teknologi</strong>. All Rights Reserved.</span>
            </div>
        </div>
    </footer>

    <!-- ================= FLOATING ================= -->
    <a href="https://wa.me/6281390000332?text=Halo%20MinZen!%20Saya%20ingin%20daftar%20Coding%20Experience%20Class%20(Game%20Lari%20ke%20Sekolah)%20seharga%20Rp%2019.000." target="_blank" rel="noopener" class="float-wa" id="floatWa" aria-label="Chat WhatsApp">
        <img src="https://alhazen.academy/assets/kids/icon-wa-white.png" alt="WhatsApp icon" loading="lazy">
    </a>
    <button class="float-top" id="floatTop" aria-label="Kembali ke atas">
        <svg viewBox="0 0 24 24" fill="none"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"/></svg>
    </button>

    <script>
        (function () {
            /* NAV */
            var burger = document.getElementById('burgerBtn');
            var menu = document.getElementById('mobileMenu');

            burger.addEventListener('click', function () {
                var open = menu.classList.toggle('open');
                burger.setAttribute('aria-expanded', open ? 'true' : 'false');
            });

            function closeMobile() {
                menu.classList.remove('open');
                burger.setAttribute('aria-expanded', 'false');
            }

            menu.querySelectorAll('a').forEach(function (a) {
                a.addEventListener('click', closeMobile);
            });

            /* REVEAL */
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
                });
            }, { threshold: 0.12 });
            document.querySelectorAll('.reveal').forEach(function (el) { io.observe(el); });

            /* FAQ */
            document.querySelectorAll('.faq-q').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var item = btn.closest('.faq-item');
                    var ans = item.querySelector('.faq-a');
                    var isOpen = item.classList.contains('open');
                    document.querySelectorAll('.faq-item.open').forEach(function (o) {
                        o.classList.remove('open');
                        o.querySelector('.faq-a').style.maxHeight = null;
                        o.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
                    });
                    if (!isOpen) {
                        item.classList.add('open');
                        ans.style.maxHeight = ans.scrollHeight + 'px';
                        btn.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            /* FLOATING BTN */
            var floatWa = document.getElementById('floatWa');
            var floatTop = document.getElementById('floatTop');
            window.addEventListener('scroll', function () {
                var show = window.scrollY > 320;
                floatWa.classList.toggle('show', show);
                floatTop.classList.toggle('show', show);
            });
            floatTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });

            /* TANGGAL JADWAL (next week dynamic) */
            (function () {
                var cells = document.querySelectorAll('.jt-date');
                if (!cells.length) return;
                var fmt = new Intl.DateTimeFormat('id-ID', { day: 'numeric', month: 'short' });
                var fmtFull = new Intl.DateTimeFormat('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
                var today = new Date();
                today.setHours(0, 0, 0, 0);
                var todayIdx = (today.getDay() + 6) % 7;
                var monday = new Date(today);
                monday.setDate(today.getDate() - todayIdx);
                if (todayIdx === 6) {
                    monday.setDate(monday.getDate() + 7);
                }
                var anchor = new Date(2026, 9, 5);
                if (monday.getTime() < anchor.getTime()) {
                    monday = new Date(anchor);
                }
                var mulaiEl = document.getElementById('jadwalMulai');
                if (mulaiEl) {
                    mulaiEl.textContent = fmtFull.format(monday);
                }
                var countdownTarget = new Date(2026, 9, 31, 23, 59, 59).getTime();
                var cdD = document.getElementById('cdD'), cdH = document.getElementById('cdH'),
                    cdM = document.getElementById('cdM'), cdS = document.getElementById('cdS');
                function tickCd() {
                    var diff = countdownTarget - Date.now();
                    if (diff <= 0) { cdD.textContent = '00'; cdH.textContent = '00'; cdM.textContent = '00'; cdS.textContent = '00'; return; }
                    var s = Math.floor(diff / 1000);
                    cdD.textContent = String(Math.floor(s / 86400)).padStart(2, '0');
                    cdH.textContent = String(Math.floor((s % 86400) / 3600)).padStart(2, '0');
                    cdM.textContent = String(Math.floor((s % 3600) / 60)).padStart(2, '0');
                    cdS.textContent = String(s % 60).padStart(2, '0');
                }
                tickCd();
                setInterval(tickCd, 1000);

                cells.forEach(function (td) {
                    var i = parseInt(td.getAttribute('data-day'), 10);
                    if (isNaN(i)) return;
                    var d = new Date(monday);
                    d.setDate(monday.getDate() + i);

                    var diffMs = d.getTime() - today.getTime();
                    var isNextWeek = false;

                    if (diffMs <= 0) {
                        d.setDate(d.getDate() + 7);
                        diffMs = d.getTime() - today.getTime();
                        isNextWeek = true;
                    }

                    td.textContent = fmt.format(d);

                    if (isNextWeek) {
                        var label = document.createElement('span');
                        label.className = 'jt-next-week-label';
                        label.textContent = 'minggu depan';
                        td.appendChild(label);
                    }

                    var row = td.closest('tr');
                    if (!row) return;

                    var diffDays = Math.floor(diffMs / 86400000);

                    if (diffDays < 0) {
                        row.classList.add('row-past');
                    } else {
                        row.classList.add('row-active');
                        if (isNextWeek) {
                            row.classList.add('row-next-week');
                        }
                    }
                });
            })();

        })();
    </script>
</body>
</html>
