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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#059669' }
                }
            }
        }
    </script>
    <style>
        :root {
            --color-primary: #059669;
            --color-secondary: #F59E0B;
            --color-accent: #F97316;
            --color-background: #FFFDFB;
            --color-text: #0F172A;
            --color-neutral: #E5E7EB;
            --font-size-h1: clamp(2rem, 5vw, 3.4rem);
            --font-size-h2: clamp(1.7rem, 3.6vw, 2.4rem);
            --font-size-h3: clamp(1.25rem, 2.4vw, 1.6rem);
            --font-size-h4: clamp(1.05rem, 2vw, 1.25rem);
            --font-size-body: 1.063rem;
            --font-size-small: 0.95rem;
        }

        *, *::before, *::after { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; }
        body, .theme-kids * { font-family: 'Poppins', ui-sans-serif, system-ui, sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', ui-sans-serif, system-ui, sans-serif; font-weight: 700; letter-spacing: -.01em; }

        body {
            background: var(--color-background);
            color: var(--color-text);
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }
        img { max-width: 100%; }
        a { text-decoration: none; color: inherit; }
        html { scroll-behavior: smooth; scroll-padding-top: 5.5rem; }
        @media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

        .text-h1 { font-size: var(--font-size-h1); line-height: 1.1; }
        .text-h2 { font-size: var(--font-size-h2); line-height: 1.2; }
        .text-h3 { font-size: var(--font-size-h3); line-height: 1.3; }
        .text-h4 { font-size: var(--font-size-h4); line-height: 1.3; }
        .text-body { font-size: var(--font-size-body); line-height: 1.6; }
        .text-small { font-size: var(--font-size-small); line-height: 1.5; }
        .text-button { font-size: 0.95rem; font-weight: 600; }

        .container { max-width: 80rem; margin: 0 auto; padding: 0 1.25rem; }
        @media (min-width: 640px) { .container { padding: 0 1.5rem; } }
        @media (min-width: 1024px) { .container { padding: 0 2rem; } }

        .btn-shine { isolation: isolate; position: relative; overflow: hidden; }
        .btn-shine::after { content: ""; pointer-events: none; mix-blend-mode: screen; position: absolute; inset: -12% -35%; }
        .reveal { opacity: 0; transform: translateY(28px); transition: opacity .7s ease, transform .7s ease; }
        .reveal.visible { opacity: 1; transform: none; }

        /* ============ HEADER ============ */
        .sticky-header {
            position: sticky; top: 0; z-index: 40;
            background: rgba(255, 253, 251, .92);
            backdrop-filter: blur(10px);
        }
        .nav { max-width: 80rem; margin: 0 auto; padding: 0 1.25rem; height: 4rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem; }
        @media (min-width: 640px) { .nav { padding: 0 1.5rem; } }
        @media (min-width: 1024px) { .nav { padding: 0 2rem; } }
        .logo { display: flex; align-items: center; gap: .6rem; flex-shrink: 0; }
        .logo-img { height: 2.5rem; width: auto; }
        .logo-fallback {
            display: none; align-items: center; gap: .6rem;
            font-family: 'Poppins'; font-weight: 700; font-size: 1.05rem;
            color: var(--color-primary); white-space: nowrap;
        }
        .logo-fallback img { width: 30px; height: 30px; object-fit: contain; flex-shrink: 0; }

        .nav-desktop { display: none; align-items: center; gap: 1.5rem; }
        @media (min-width: 768px) { .nav-desktop { display: flex; gap: 2rem; } }
        .nav-links { list-style: none; margin: 0; padding: 0; display: flex; align-items: center; gap: 2rem; }
        .nav-links a, .dd-btn {
            font-size: .95rem; color: rgba(15, 23, 42, .65); background: none; border: 0; padding: 0;
            display: inline-flex; align-items: center; gap: .25rem; cursor: pointer;
            font-family: inherit; transition: color .2s; white-space: nowrap;
        }
        .nav-links a:hover, .dd-btn:hover { color: var(--color-text); }

        .nav-btn-primary {
            padding: .7rem 1.25rem; border-radius: .375rem; background: var(--color-primary); color: #fff;
            font-weight: 600; font-size: .95rem; white-space: nowrap;
            transition: transform .2s, background .2s;
        }
        .nav-btn-primary:hover { transform: scale(1.05); background: var(--color-accent); }

        .nav-burger {
            display: grid; place-items: center; width: 42px; height: 42px;
            border-radius: .375rem; border: 1px solid var(--color-neutral);
            background: transparent; font-size: 1.3rem; cursor: pointer; color: var(--color-text);
        }
        @media (min-width: 768px) { .nav-burger { display: none; } }

        .mobile-menu {
            position: absolute; top: 4rem; right: 1rem; z-index: 49; width: 18rem;
            background: #fff; border: 1px solid var(--color-neutral); border-radius: .5rem;
            display: none; backdrop-filter: blur(10px);
        }
        .mobile-menu.open { display: block; }
        .mobile-menu hr { border: 0; border-top: 1px solid var(--color-neutral); }
        .mm-title { padding: .75rem 1rem; font-weight: 600; }
        .mm-item { display: block; padding: .7rem 1rem; font-size: .95rem; }
        .mm-item:hover { background: #ECFDF5; }
        .mm-cta {
            display: block; margin: .75rem 1rem .5rem; padding: .8rem; text-align: center;
            border-radius: .375rem; background: var(--color-primary); color: #fff; font-weight: 600;
        }
        .mm-cta:hover { background: var(--color-accent); }
        .mm-login { display: block; text-align: center; padding: .55rem 1rem 1rem; color: var(--color-primary); font-size: .9rem; text-decoration: underline; }

        /* ============ HERO ============ */
        .hero { padding: 2rem 0 0; }
        .hero-banner {
            position: relative; border-radius: 1rem; overflow: hidden;
            background: #065F46; min-height: 560px;
            display: flex; align-items: center; justify-content: center;
        }
        @media (min-width: 1024px) { .hero-banner { min-height: 660px; } }
        .hero-cover { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; }
        .hero-overlay {
            position: absolute; inset: 0; z-index: 1;
            background: rgba(15,23,42,.55);
        }
        .hero-content {
            position: relative; z-index: 2; max-width: 54rem; margin: 0 auto;
            padding: 3.5rem 1.25rem; text-align: center;
            display: flex; flex-direction: column; align-items: center;
        }
        @media (min-width: 1024px) { .hero-content { padding: 4rem 2rem; } }
        .hero-badge {
            display: inline-flex; align-items: center; gap: .5rem;
            background: rgba(15,23,42,.45); border: 1px solid rgba(255,255,255,.35);
            color: #fff; font-size: .8rem; font-weight: 600; padding: .45rem .9rem;
            border-radius: .375rem; backdrop-filter: blur(4px);
        }
        .hero-title { color: #fff; font-weight: 700; margin: 1.1rem 0 .9rem; }
        .hero-title .hl { color: #FDE047; }
        .hero-sub { color: rgba(255,255,255,.96); max-width: 40rem; margin: 0 0 1.3rem; font-weight: 300; }
        .hero-chips { display: flex; flex-wrap: wrap; gap: .6rem; margin-bottom: 1.5rem; justify-content: center; }
        .chip {
            display: inline-flex; align-items: center; gap: .4rem;
            background: rgba(15,23,42,.45); color: #fff; font-size: .82rem; font-weight: 500;
            padding: .45rem .85rem; border-radius: .375rem; border: 1px solid rgba(255,255,255,.3);
            backdrop-filter: blur(4px);
        }
        .hero-price { display: flex; align-items: baseline; gap: .8rem; margin-bottom: 1.4rem; flex-wrap: wrap; justify-content: center; }
        .price-strike { color: rgba(255,255,255,.85); text-decoration: line-through; font-size: 1rem; }
        .price-now { color: #FDE047; font-family: 'Poppins'; font-weight: 800; font-size: 2.4rem; line-height: 1; }
        .price-save {
            background: #FDE047; color: #065F46; font-size: .75rem; font-weight: 700;
            padding: .3rem .7rem; border-radius: .375rem; transform: rotate(-3deg);
        }
        .hero-ctas { display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; }
        .btn {
            display: inline-flex; align-items: center; justify-content: center; gap: .5rem;
            padding: .9rem 1.8rem; border-radius: .5rem; font-weight: 600; cursor: pointer;
            border: 0; font-family: inherit; transition: transform .2s, background .2s;
        }
        .btn-img { width: 20px; height: 20px; object-fit: contain; flex-shrink: 0; }
        .btn-primary { background: #FDE047; color: #065F46; }
        .btn-primary:hover { transform: scale(1.05); background: #FEF08A; }
        .btn-ghost { background: rgba(255,255,255,.14); color: #fff; border: 1px solid rgba(255,255,255,.4); }
        .btn-ghost:hover { transform: scale(1.05); background: rgba(255,255,255,.24); }
        .btn-green { background: var(--color-primary); color: #fff; }
        .btn-green:hover { transform: scale(1.05); background: var(--color-accent); }
        .btn-big { padding: 1.05rem 2.2rem; font-size: 1.05rem; }
        @keyframes floaty { 0%, 100% { transform: translateY(0) rotate(0); } 50% { transform: translateY(-16px) rotate(8deg); } }

        /* ============ STATS ============ */
        .stats { padding: 2.5rem 0 0.5rem; }
        .stats-grid { display: grid; grid-template-columns: 1fr; gap: .9rem; }
        @media (min-width: 768px) { .stats-grid { grid-template-columns: repeat(4, 1fr); } }
        .stat-card {
            background: #fff; border: 1px solid var(--color-neutral); border-radius: 1rem;
            padding: 1.1rem 1.25rem; display: flex; align-items: center; gap: .9rem;
            transition: background .25s, color .25s;
        }
        .stat-icon {
            width: 46px; height: 46px; border-radius: .375rem; display: grid; place-items: center;
            font-size: 1.3rem; flex-shrink: 0;
        }
        .stat-icon img { width: 27px; height: 27px; object-fit: contain; }
        .stat-card b { display: block; font-family: 'Poppins'; font-weight: 700; font-size: 1.05rem; line-height: 1.2; }
        .stat-card span { font-size: .78rem; color: rgba(15,23,42,.6); }
        .stat-solid-green { background: #059669; border-color: #059669; color: #fff; }
        .stat-solid-amber { background: #F59E0B; border-color: #F59E0B; color: #78350F; }
        .stat-solid-sky { background: #0284C7; border-color: #0284C7; color: #fff; }
        .stat-solid-emerald { background: #10B981; border-color: #10B981; color: #fff; }
        .stat-solid-green .stat-icon, .stat-solid-sky .stat-icon, .stat-solid-emerald .stat-icon { background: rgba(255,255,255,.22); }
        .stat-solid-amber .stat-icon { background: rgba(120,53,15,.14); }
        .stat-solid-green b, .stat-solid-sky b, .stat-solid-emerald b { color: #fff; }
        .stat-solid-amber b { color: #78350F; }
        .stat-solid-green span, .stat-solid-sky span, .stat-solid-emerald span { color: rgba(255,255,255,.95); }
        .stat-solid-amber span { color: rgba(120,53,15,.85); }
        .stat-solid-green:hover { background: #D1FAE5; border-color: #6EE7B7; color: #065F46; }
        .stat-solid-amber:hover { background: #FEF3C7; border-color: #FDE68A; color: #92400E; }
        .stat-solid-sky:hover { background: #E0F2FE; border-color: #7DD3FC; color: #0C4A6E; }
        .stat-solid-emerald:hover { background: #D1FAE5; border-color: #6EE7B7; color: #065F46; }
        .stat-solid-green:hover .stat-icon, .stat-solid-amber:hover .stat-icon, .stat-solid-sky:hover .stat-icon, .stat-solid-emerald:hover .stat-icon { background: rgba(0,0,0,.06); }
        .stat-card:hover b, .stat-card:hover span { color: inherit; }

        /* ============ SECTION HEAD ============ */
        .section { padding: 4rem 0; position: relative; overflow: hidden; }
        .section-head { text-align: center; max-width: 44rem; margin: 0 auto 3rem; padding: 0 1rem; }
        .section-head h2 { color: var(--color-primary); margin: 0 0 .8rem; }
        .section-head p { color: rgba(15,23,42,.7); margin: 0; }

        /* ============ TENTANG ============ */
        .tentang-grid { display: grid; gap: 2.5rem; align-items: center; }
        @media (min-width: 1024px) { .tentang-grid { grid-template-columns: 1fr 1fr; gap: 4rem; } }
        .tentang-text h2 { color: var(--color-primary); margin: 0 0 1rem; }
        .tentang-text p { color: rgba(15,23,42,.75); text-align: justify; margin: 0 0 1.2rem; }
        .tentang-points { list-style: none; padding: 0; margin: 0 0 1.6rem; display: grid; gap: .7rem; }
        .tentang-points li { display: flex; gap: .7rem; align-items: flex-start; font-size: .95rem; color: rgba(15,23,42,.85); }
        .tentang-points .dot { margin-top: .45rem; width: 11px; height: 11px; border-radius: 50%; background: var(--color-primary); flex-shrink: 0; }
        .showcase-wrap { position: relative; }
        .showcase-blob { position: absolute; width: 300px; height: 300px; border-radius: 50%; background: rgba(5,150,105,.1); top: -60px; right: -40px; z-index: 0; }
        .showcase {
            position: relative; z-index: 1; border-radius: .75rem; overflow: hidden;
            border: 6px solid #fff; background: #0F172A;
            aspect-ratio: 1 / 1;
        }
        .sc-art { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1; }
        /* CSS scene: Lari ke Sekolah */
        .sc-sky { height: 220px; position: relative; background: linear-gradient(180deg, #7DD3FC 0%, #BAE6FD 100%); overflow: hidden; }
        .sc-sun { position: absolute; top: 18px; right: 26px; width: 52px; height: 52px; border-radius: 50%; background: #FBBF24; box-shadow: 0 0 30px rgba(251,191,36,.5); }
        .sc-cloud { position: absolute; background: rgba(255,255,255,.9); border-radius: 999px; }
        .sc-cloud.k1 { width: 74px; height: 22px; top: 30px; left: 18px; }
        .sc-cloud.k2 { width: 54px; height: 16px; top: 74px; left: 64px; opacity: .8; }
        .sc-cloud.k3 { width: 60px; height: 18px; top: 20px; left: 55%; }
        /* Trees */
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
        /* School building */
        .sc-school {
            position: absolute; bottom: 0; right: 15%; width: 80px; height: 65px;
            background: #FEF3C7; border-radius: 4px 4px 0 0;
            border: 2px solid #D97706;
        }
        .sc-school::before {
            content: ""; position: absolute; top: -18px; left: -6px; right: -6px; height: 20px;
            background: #DC2626; border-radius: 4px 4px 0 0;
        }
        .sc-school-window {
            position: absolute; width: 16px; height: 18px; background: #7DD3FC;
            border: 1.5px solid #92400E; border-radius: 2px;
        }
        .sc-school-window.w1 { top: 14px; left: 10px; }
        .sc-school-window.w2 { top: 14px; right: 10px; }
        .sc-school-door {
            position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);
            width: 18px; height: 26px; background: #92400E; border-radius: 3px 3px 0 0;
        }
        .sc-school-flag {
            position: absolute; top: -36px; right: 12px; width: 3px; height: 22px; background: #6B7280;
        }
        .sc-school-flag::after {
            content: ""; position: absolute; top: 0; left: 3px; width: 16px; height: 10px;
            background: #DC2626; border-radius: 0 2px 2px 0;
        }
        /* Ground & path */
        .sc-ground { height: 96px; position: relative; background: #65A30D; }
        .sc-ground::before {
            content: ""; position: absolute; top: 0; left: 0; right: 0; height: 12px;
            background: linear-gradient(90deg, #65A30D 0%, #84CC16 50%, #65A30D 100%);
        }
        .sc-path {
            position: absolute; top: 12px; left: 35%; right: 20%; height: 84px;
            background: #D4A574; border-radius: 0 0 20px 20px;
            clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);
        }
        /* Umar character running */
        .sc-umar {
            position: absolute; bottom: 20px; left: 32%;
            width: 36px; height: 58px;
            animation: umar-run 1.2s ease-in-out infinite;
        }
        .sc-umar-head {
            position: absolute; top: 0; left: 50%; transform: translateX(-50%);
            width: 26px; height: 26px; border-radius: 50%; background: #FCD9B8;
        }
        .sc-umar-hair {
            position: absolute; top: -3px; left: 50%; transform: translateX(-50%);
            width: 28px; height: 14px; border-radius: 14px 14px 0 0; background: #1F2937;
        }
        .sc-umar-body {
            position: absolute; top: 24px; left: 50%; transform: translateX(-50%);
            width: 22px; height: 24px; border-radius: 6px 6px 4px 4px; background: #059669;
        }
        .sc-umar-bag {
            position: absolute; top: 26px; right: -4px;
            width: 12px; height: 16px; border-radius: 3px; background: #F59E0B;
        }
        .sc-umar-leg-l, .sc-umar-leg-r {
            position: absolute; bottom: 0; width: 8px; height: 16px;
            border-radius: 0 0 4px 4px; background: #1F2937;
        }
        .sc-umar-leg-l { left: 6px; animation: leg-left .6s ease-in-out infinite; }
        .sc-umar-leg-r { right: 6px; animation: leg-right .6s ease-in-out infinite; }
        @keyframes umar-run { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
        @keyframes leg-left { 0%, 100% { transform: rotate(-15deg); } 50% { transform: rotate(15deg); } }
        @keyframes leg-right { 0%, 100% { transform: rotate(15deg); } 50% { transform: rotate(-15deg); } }

        .showcase-caption {
            position: absolute; left: 14px; bottom: 14px; z-index: 2;
            background: rgba(15,23,42,.78); color: #fff; font-size: .78rem; font-weight: 600;
            padding: .5rem .9rem; border-radius: .375rem; backdrop-filter: blur(4px);
            display: inline-flex; align-items: center; gap: .45rem;
        }
        .showcase-caption img { width: 16px; height: 16px; object-fit: contain; flex-shrink: 0; }

        /* ============ FLOW GAME ============ */
        .flow-section { background: #ECFDF5; }
        .flow-grid { display: grid; gap: 1.1rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .flow-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .flow-grid { grid-template-columns: repeat(4, 1fr); } }
        .flow-card { border-radius: .5rem; overflow: hidden; color: #fff; position: relative; min-height: 210px; display: flex; flex-direction: column; justify-content: flex-end; padding: 1.4rem; transition: transform .25s; }
        .flow-card:hover { transform: translateY(-6px); }
        .flow-card .fc-emoji { font-size: 2.6rem; position: absolute; top: 1rem; right: 1rem; opacity: .95; transition: transform .3s; }
        .flow-card img.fc-emoji { width: 62px; height: 62px; object-fit: contain; }
        .flow-card:hover .fc-emoji { transform: scale(1.18) rotate(-8deg); }
        .flow-card h3 { margin: 0 0 .3rem; font-size: 1.3rem; }
        .flow-card p { margin: 0; font-size: .88rem; opacity: .92; }
        .flow-card .fc-point {
            display: inline-block; margin-top: .8rem; font-size: .8rem; font-weight: 700;
            padding: .3rem .7rem; border-radius: .375rem; background: rgba(255,255,255,.2); border: 1px solid rgba(255,255,255,.35);
        }
        .fc-green { background: #059669; }
        .fc-amber { background: #D97706; }
        .fc-sky { background: #0284C7; }
        .fc-emerald { background: #047857; }
        .flow-note { text-align: center; margin-top: 2rem; color: rgba(15,23,42,.6); font-size: .9rem; }

        /* ============ MATERI ============ */
        .materi-grid { display: grid; gap: 1.2rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .materi-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .materi-grid { grid-template-columns: repeat(3, 1fr); } }
        .materi-card { background: #fff; border: 1px solid var(--color-neutral); border-radius: 1.2rem; padding: 1.6rem; transition: transform .25s; position: relative; overflow: hidden; }
        .materi-card:hover { transform: translateY(-5px); }
        .materi-num { width: 46px; height: 46px; border-radius: .375rem; display: grid; place-items: center; font-family: 'Poppins'; font-weight: 800; font-size: 1.25rem; margin-bottom: 1rem; }
        .materi-card h3 { margin: 0 0 .5rem; font-size: 1.15rem; }
        .materi-card p { margin: 0; font-size: .9rem; color: rgba(15,23,42,.7); line-height: 1.55; }
        .materi-card .m-tag { display: inline-block; margin-top: .8rem; font-size: .72rem; font-weight: 600; color: var(--color-primary); background: #ECFDF5; padding: .25rem .6rem; border-radius: .25rem; }
        .materi-card::after { content: ""; position: absolute; width: 96px; height: 96px; border-radius: 50%; right: -28px; bottom: -28px; background: rgba(255,255,255,.22); pointer-events: none; }
        .materi-theme-green   { background: #059669; border-color: #059669; color: #fff; }
        .materi-theme-amber   { background: #F59E0B; border-color: #F59E0B; color: #fff; }
        .materi-theme-pink    { background: #DB2777; border-color: #DB2777; color: #fff; }
        .materi-theme-sky     { background: #0284C7; border-color: #0284C7; color: #fff; }
        .materi-theme-emerald { background: #10B981; border-color: #10B981; color: #fff; }
        .materi-theme-orange  { background: #EA580C; border-color: #EA580C; color: #fff; }
        .materi-theme-green p, .materi-theme-amber p, .materi-theme-pink p, .materi-theme-sky p, .materi-theme-emerald p, .materi-theme-orange p { color: rgba(255,255,255,.92); }
        .materi-theme-green h3, .materi-theme-amber h3, .materi-theme-pink h3, .materi-theme-sky h3, .materi-theme-emerald h3, .materi-theme-orange h3 { color: #fff; }
        .materi-theme-green .materi-num, .materi-theme-amber .materi-num, .materi-theme-pink .materi-num, .materi-theme-sky .materi-num, .materi-theme-emerald .materi-num, .materi-theme-orange .materi-num { color: #fff; background: rgba(255,255,255,.24); }
        .materi-theme-green .m-tag, .materi-theme-amber .m-tag, .materi-theme-pink .m-tag, .materi-theme-sky .m-tag, .materi-theme-emerald .m-tag, .materi-theme-orange .m-tag { background: #fff; color: #065F46; }

        /* ============ JADWAL ============ */
        .jadwal-section { background: #F0FDF4; }
        .jadwal-section:before, .jadwal-section:after { display: none; }
        .jadwal-table-wrap { max-width: 680px; margin: 0 auto; }
        .jadwal-table {
            width: 100%; border-collapse: collapse; border-spacing: 0;
            background: #fff; border: 1.5px solid #D1FAE5; border-radius: .5rem; overflow: hidden;
            box-shadow: 0 12px 30px -20px rgba(15,23,42,.18);
        }
        .jadwal-table thead th {
            background: #000000a1; color: #ffffff;
            font-size: .7rem; font-weight: 800; text-transform: uppercase; letter-spacing: .08em;
            padding: 1.05rem 1.4rem;
        }
        .jadwal-table thead th:first-child { border-radius: .5rem 0 0 0; }
        .jadwal-table thead th:last-child { border-radius: 0 .5rem 0 0; }
        .jadwal-table tbody td { padding: 1.05rem 1.4rem; font-size: .95rem; color: var(--color-text); border: 0; }
        .jadwal-table th:first-child, .jadwal-table .j-day-name { text-align: left; }
        .jadwal-table th:nth-child(2), .jadwal-table .jt-date, .jadwal-table .jt-time { text-align: center; }
        .jadwal-table th:last-child, .jadwal-table td:last-child { text-align: left; }
        .jadwal-table .j-day-name { font-weight: 700; vertical-align: middle; white-space: nowrap; }
        .jadwal-table .jt-time { font-family: 'Poppins'; font-weight: 700; color: #475569; }
        .jadwal-table .jt-date { font-weight: 600; color: #475569; white-space: nowrap; }
        .jadwal-table .jt-date.is-closed { font-weight: 400; color: rgba(15,23,42,.45); }
        .jadwal-table .jt-note { display: block; margin-top: .25rem; font-size: .68rem; font-weight: 700; color: #059669; white-space: normal; }
        /* Row states: past vs upcoming */
        .jadwal-table tr.row-past td { background: rgba(0,0,0,.03); opacity: .5; }
        .jadwal-table tr.row-past .jt-date { text-decoration: line-through; color: rgba(15,23,42,.35); }
        .jadwal-table tr.row-past .j-day-name { color: rgba(15,23,42,.4); }
        .jadwal-table tr.row-past .jt-time { color: rgba(71,85,105,.4); }
        .jadwal-table tr.row-closed td { background: #FEF2F2; opacity: .6; }
        .jadwal-table tr.row-closed .jt-date { color: #DC2626; font-weight: 600; }
        .jadwal-table tr.row-closed .j-day-name { color: rgba(15,23,42,.4); }
        .jadwal-table tr.row-closed .jt-time { color: rgba(71,85,105,.4); text-decoration: line-through; }
        .jadwal-table .jt-closed-note { display: block; font-size: .68rem; font-weight: 700; color: #DC2626; margin-top: .2rem; white-space: normal; }
        .jadwal-table tr.row-active td { background: #ffffff; }
        .jadwal-table tr.row-active .jt-date { color: #059669; font-weight: 700; }
        .jadwal-table tr.row-active .j-day-name { color: #059669; }
        .jadwal-table tr.row-active { border-left: 3px solid #059669; }
        .jadwal-weekly-note {
            text-align: center; margin-top: 1.2rem; padding: .7rem 1rem;
            background: #ECFDF5; border: 1px solid #A7F3D0; border-radius: .5rem;
            font-size: .85rem; color: #065F46; display: inline-flex; align-items: center; gap: .5rem;
        }
        .jadwal-weekly-note .rec-icon { font-size: 1.1rem; }
        .jadwal-note { text-align: center; margin-top: 1.8rem; color: rgba(15,23,42,.6); font-size: .9rem; }
        .jadwal-start {
            display: inline-flex; align-items: center; justify-content: center; gap: .55rem; flex-wrap: wrap;
            background: #fff; border: 1.5px solid #D1FAE5; color: var(--color-text);
            font-size: .92rem; padding: .72rem 1.25rem; border-radius: .5rem;
            box-shadow: 0 8px 20px -12px rgba(5,150,105,.35);
            margin: 1.3rem auto 0; text-align: center; line-height: 1.5; max-width: 40rem;
        }
        .jadwal-start strong { color: var(--color-primary); }

        /* ============ HARGA ============ */
        .harga-section { position: relative; overflow: hidden; background: #065F46; }
        .harga-bg { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; }
        .harga-overlay {
            position: absolute; inset: 0; z-index: 1;
            background: rgba(6,95,70,.82);
        }
        .harga-section .container { position: relative; z-index: 2; }
        .harga-section .section-head h2 { color: #fff; }
        .harga-section .section-head p { color: rgba(255,255,255,.92); }
        .price-card {
            max-width: 560px; margin: 0 auto; background: #fff; border-radius: 1.75rem;
            padding: 2.4rem 2rem; text-align: center; position: relative;
        }
        .price-ribbon {
            position: absolute; top: -16px; left: 50%; transform: translateX(-50%) rotate(-2deg);
            background: #FDE047; color: #065F46; font-family: 'Poppins'; font-weight: 700; font-size: .85rem;
            padding: .5rem 1.2rem; border-radius: .375rem; white-space: nowrap;
            display: inline-flex; align-items: center; gap: .4rem;
        }
        .price-ribbon img { width: 18px; height: 18px; object-fit: contain; flex-shrink: 0; }
        .price-card h3 { color: var(--color-primary); margin: 1rem 0 .3rem; font-size: 1.4rem; }
        .price-card .pc-sub { color: rgba(15,23,42,.6); font-size: .9rem; margin: 0 0 1.2rem; }
        .price-old { color: rgba(15,23,42,.45); text-decoration: line-through; font-size: 1.15rem; }
        .price-main { font-family: 'Poppins'; font-weight: 800; font-size: 3.4rem; line-height: 1; color: var(--color-primary); }
        .price-main small { font-size: 1.5rem; }
        .price-note { color: rgba(15,23,42,.6); font-size: .82rem; margin: .4rem 0 1.4rem; }
        .price-includes { list-style: none; padding: 0; margin: 0 0 1.6rem; text-align: left; display: grid; gap: .65rem; }
        .price-includes li { display: flex; gap: .7rem; align-items: flex-start; font-size: .92rem; color: rgba(15,23,42,.85); }
        .price-includes .check { width: 22px; height: 22px; border-radius: .375rem; background: #D1FAE5; color: #059669; display: grid; place-items: center; font-size: .75rem; font-weight: 700; flex-shrink: 0; margin-top: 1px; }
        .countdown { display: flex; gap: .6rem; justify-content: center; margin: 1.2rem 0 1.5rem; }
        .cd-box { background: #ECFDF5; border: 1px solid #A7F3D0; border-radius: .375rem; padding: .55rem .7rem; min-width: 64px; }
        .cd-box b { font-family: 'Poppins'; font-weight: 800; font-size: 1.3rem; color: var(--color-primary); display: block; line-height: 1.1; }
        .cd-box span { font-size: .62rem; text-transform: uppercase; letter-spacing: .06em; color: rgba(15,23,42,.55); }
        .cd-label { font-size: .8rem; color: rgba(15,23,42,.6); margin-bottom: .5rem; display: flex; align-items: center; justify-content: center; gap: .4rem; }
        .cd-label img { width: 17px; height: 17px; object-fit: contain; flex-shrink: 0; }
        .price-foot { font-size: .78rem; color: rgba(15,23,42,.55); margin-top: 1.2rem; }

        /* ============ FAQ ============ */
        .faq-list { max-width: 46rem; margin: 0 auto; display: grid; gap: .9rem; padding: 0 1rem; }
        .faq-item { background: #fff; border: 1px solid var(--color-neutral); border-radius: 1rem; }
        .faq-q { width: 100%; text-align: left; background: none; border: 0; padding: 1.1rem 1.3rem; display: flex; align-items: center; gap: 1rem; cursor: pointer; font-family: inherit; font-size: .98rem; font-weight: 600; color: var(--color-text); }
        .faq-q .chev { margin-left: auto; width: 30px; height: 30px; border-radius: .375rem; background: #ECFDF5; color: var(--color-primary); display: grid; place-items: center; flex-shrink: 0; transition: transform .25s; }
        .faq-item.open .chev { transform: rotate(180deg); }
        .faq-a { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
        .faq-a-inner { padding: 0 1.3rem 1.15rem; font-size: .92rem; color: rgba(15,23,42,.7); line-height: 1.6; }

        /* ============ CTA BAWAH ============ */
        .cta-band { text-align: center; padding: 4.5rem 1.25rem; background: #FDE047; border-radius: .75rem; position: relative; overflow: hidden; }
        .cta-band h2 { color: #065F46; margin: 0 0 .6rem; }
        .cta-band p { color: rgba(6,95,70,.85); max-width: 34rem; margin: 0 auto 1.5rem; }
        .cta-band::before, .cta-band::after {
            content: ""; position: absolute; width: 52px; height: 52px; opacity: .5;
            background: url('https://lh3.googleusercontent.com/d/1PO1NKjXbLepZsW4Jv4IWzvY5rdqX17hI') center / contain no-repeat;
            animation: floaty 5s ease-in-out infinite;
        }
        .cta-band::before { top: 1.2rem; left: 2rem; }
        .cta-band::after { bottom: 1.2rem; right: 2rem; animation-delay: 1.8s; }

        /* ============ FLOATING ============ */
        .float-wa, .float-top {
            position: fixed; z-index: 60; border-radius: 50%;
            display: grid; place-items: center; opacity: 0; pointer-events: none; transition: opacity .3s, transform .2s; cursor: pointer; border: 0;
        }
        .float-wa { right: 1.2rem; bottom: 5.4rem; width: 56px; height: 56px; background: #25D366; }
        .float-top { right: 1.2rem; bottom: 1.2rem; width: 48px; height: 48px; background: rgba(5,150,105,.85); color: #fff; }
        .float-wa.show, .float-top.show { opacity: 1; pointer-events: auto; }
        .float-wa:hover, .float-top:hover { transform: scale(1.08); }
        .float-wa svg, .float-wa img { width: 28px; height: 28px; fill: #fff; }
        .float-wa img { fill: none; }
        .float-top svg { width: 20px; height: 20px; stroke: #fff; stroke-width: 3; }

        @media (max-width: 640px) {
            .price-main { font-size: 2.8rem; }
            .hero-banner { border-radius: .75rem; }
            .jadwal-table thead th, .jadwal-table tbody td { padding: .85rem .55rem; font-size: .875rem; }
        }

        /* ============ DESIGN SYSTEM ============ */
        :root {
            --ds-radius: .5rem;
            --ds-radius-lg: .75rem;
            --ds-shadow: 0 4px 16px -8px rgba(5,150,105,.25);
            --ds-border: 1px solid #D1FAE5;
            --ds-green: #059669;
            --ds-green-dark: #065F46;
            --ds-gold: #FDE047;
            --ds-cream: #F0FDF4;
        }
        .stripe-divider { height: 12px; background: repeating-linear-gradient(90deg, var(--ds-green) 0 16px, #fff 16px 32px); opacity: .9; }
        .section-head h2 { position: relative; display: inline-block; padding-bottom: .7rem; }
        .section-head h2::after {
            content: ""; position: absolute; left: 50%; transform: translateX(-50%); bottom: 0;
            width: 96px; height: 9px; border-radius: .25rem;
            background: repeating-linear-gradient(90deg, var(--ds-green) 0 12px, #fff 12px 24px);
            border: 1px solid #A7F3D0;
        }
        .section-head p { position: relative; margin-top: 1.1rem; }

        .stat-card, .flow-card, .materi-card, .faq-item, .price-card {
            border-radius: var(--ds-radius);
        }
        .materi-card, .faq-item, .price-card {
            border: var(--ds-border);
            box-shadow: 0 6px 20px -14px rgba(5,150,105,.35);
        }
        .stat-card { border: var(--ds-border); }
        .flow-card { box-shadow: var(--ds-shadow); }
        .price-card { border-radius: var(--ds-radius-lg); box-shadow: 0 24px 60px -24px rgba(0,0,0,.45); }

        .section { position: relative; }
        .section > .container { position: relative; z-index: 1; }
        .section::before {
            content: ""; position: absolute; width: 200px; height: 200px; border-radius: 50%;
            background: rgba(5,150,105,.05); top: -60px; right: -70px; z-index: 0; pointer-events: none;
        }
        .section::after {
            content: ""; position: absolute; width: 130px; height: 130px; border-radius: 50%;
            border: 3px dashed rgba(5,150,105,.18); bottom: -40px; left: -50px; z-index: 0; pointer-events: none;
        }
        .section h2, .section .text-h2 { position: relative; z-index: 1; }
        .section-head, .container > * { position: relative; z-index: 1; }

        @keyframes soft-pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
        .cd-box b { animation: soft-pulse 2.2s ease-in-out infinite; }
        .flow-card:hover, .materi-card:hover, .faq-item:hover { transform: translateY(-5px); }
        .hero-badge { animation: soft-pulse 3s ease-in-out infinite; }
    </style>
</head>
<body class="theme-kids">

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
                    <li><a href="#tentang">Tentang Program</a></li>
                    <li><a href="#jadwal">Jadwal</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>

                <a href="#jadwal" class="nav-btn-primary">Daftar Kelas</a>
            </div>

            <button class="nav-burger" id="burgerBtn" aria-label="Buka menu" aria-expanded="false">☰</button>
        </nav>

        <div class="mobile-menu" id="mobileMenu">
            <div class="mm-title">Menu</div>
            <hr>
            <a class="mm-item" href="#tentang">Tentang Program</a>
            <a class="mm-item" href="#jadwal">Jadwal</a>
            <a class="mm-item" href="#faq">FAQ</a>

            <a href="#jadwal" class="mm-cta">Daftar Kelas</a>
            <a href="https://apps.alhazen.academy/#/login" class="mm-login">Masuk / Login</a>
        </div>
    </header>

    <!-- ================= HERO ================= -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-banner">
                {{-- Ganti dengan cover image September setelah tersedia --}}
                <img src="{{ asset('assets/custom/coding_experience_class/september.jpeg') }}" alt="Cover game Lari ke Sekolah bersama Umar" class="hero-cover" loading="eager"
                    onerror="this.style.display='none'">
                <div class="hero-overlay"></div>

                <div class="hero-content">
                    <span class="hero-badge">🏫 Mulai 14 September 2026</span>
                    <h1 class="hero-title text-h1">Bantu Umar <span class="hl">Lari ke Sekolah</span>!</h1>
                    <p class="hero-sub text-body">
                        Kelas coding 1 hari yang dirancang khusus untuk memfasilitasi rasa penasaran anak yang ingin mencoba membuat game. Belajar logika sambil bikin game seru lari ke sekolah!
                    </p>
                    <div class="hero-chips">
                        <span class="chip">⏱️ 1 Hari</span>
                        <span class="chip">💻 Online via Zoom</span>
                        <span class="chip">👨‍👩‍👧 Kelas Online</span>
                        <span class="chip">🏆 Hasil: Game Nyata</span>
                    </div>
                    <div class="hero-price">
                        <span class="price-strike">Rp 99.000</span>
                        <span class="price-now">Rp 19.000</span>
                        <span class="price-save">Hemat 81%!</span>
                    </div>
                    <div class="hero-ctas">
                        <a href="#jadwal" class="btn btn-primary btn-big btn-shine shine-loop"><img src="https://lh3.googleusercontent.com/d/1PO1NKjXbLepZsW4Jv4IWzvY5rdqX17hI" alt="" class="btn-img"> Daftar Sekarang</a>
                        <a href="#materi" class="btn btn-ghost btn-big">Lihat Materi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STATS ================= -->
    <section class="stats" aria-label="Fakta singkat kelas">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card stat-solid-green reveal">
                    <div class="stat-icon"><img src="https://lh3.googleusercontent.com/d/1dRGnpw0SVXKTGfTJN1AWggdNoASiswbH" alt="" loading="lazy"></div>
                    <div><b>1 Hari</b><span>Kelas intensif &amp; seru</span></div>
                </div>
                <div class="stat-card stat-solid-amber reveal">
                    <div class="stat-icon"><img src="https://lh3.googleusercontent.com/d/11w1j1KNpEqjJkHX1m_a1ZU8EIIRTajkt" alt="" loading="lazy"></div>
                    <div><b>Online via Zoom</b><span>Kelas online dari rumah</span></div>
                </div>
                <div class="stat-card stat-solid-sky reveal">
                    <div class="stat-icon"><img src="https://lh3.googleusercontent.com/d/10NxXk39h03z5upW6YyMhiGawk8lJ-iBL" alt="" loading="lazy"></div>
                    <div><b>Tanpa Coding Rumit</b><span>Pakai blok visual ramah anak</span></div>
                </div>
                <div class="stat-card stat-solid-emerald reveal">
                    <div class="stat-icon"><img src="https://lh3.googleusercontent.com/d/1urGtnu8WHvHsXzCGqP9zljpc4Pe52OWc" alt="" loading="lazy"></div>
                    <div><b>Game + Sertifikat</b><span>Project dibawa pulang</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TENTANG ================= -->
    <section id="tentang" class="section">
        <div class="container">
            <div class="tentang-grid">
                <div class="showcase-wrap reveal">
                    <div class="showcase-blob"></div>
                    <div class="showcase">
                        {{-- Poster placeholder — nanti diganti dengan demo game jika sudah jadi --}}
                        <img src="{{ asset('assets/custom/coding_experience_class/september.jpeg') }}" alt="Poster Coding Experience Class - Belajar Bikin Game Lari ke Sekolah" class="sc-art" loading="lazy" onerror="this.remove()">
                    </div>
                </div>

                <div class="tentang-text reveal">
                    <h2 class="text-h2">Apa itu Coding Experience Class?</h2>
                    <p>
                        <strong>Coding Experience Class</strong> adalah kelas <strong>belajar coding 1 hari</strong> yang dirancang khusus untuk memfasilitasi rasa penasaran anak yang ingin mencoba bagaimana cara membuat aplikasi atau game menggunakan coding.
                    </p>
                    <p>
                        Di kelas ini, anak belajar <strong>logika pemrograman</strong> sambil bikin game <strong>Lari ke Sekolah</strong> bersama karakter Umar. Satu hari cukup untuk merasakan serunya menjadi pembuat game!
                    </p>
                    <ul class="tentang-points">
                        <li><span class="dot"></span>Kelas online via Zoom, didampingi tutor ramah anak</li>
                        <li><span class="dot"></span>Belajar logika, variabel, kondisi &amp; perulangan dengan cara bermain</li>
                        <li><span class="dot"></span>Hasil project game siap ditunjukkan ke keluarga &amp; teman</li>
                        <li><span class="dot"></span>Modul, file project &amp; sertifikat dibawa pulang</li>
                    </ul>
                    <a href="#jadwal" class="btn btn-green">Amankan Kursi Anak Saya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FLOW GAME ================= -->
    <section id="cara-main" class="section flow-section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Gimana Serunya Game-nya?</h2>
                <p>Bantu Umar berlari ke sekolah melewati berbagai rintangan di jalan! Kumpulkan poin dan jangan sampai terlambat.</p>
            </div>

            <div class="flow-grid">
                <div class="flow-card fc-green reveal">
                    <img src="https://lh3.googleusercontent.com/d/1EDiHrGMklBcuLokp2ttLQ6bSlZkJJv8l" alt="" class="fc-emoji" loading="lazy">
                    <h3>Mulai Berlari</h3>
                    <p>Umar berlari dari rumah menuju sekolah. Anak mengontrol arah dan kecepatan lari Umar.</p>
                    <span class="fc-point">🏃 Mulai Petualangan</span>
                </div>
                <div class="flow-card fc-amber reveal">
                    <img src="https://lh3.googleusercontent.com/d/1WMjLnnYs3uFyB-BCV_nn6_gjNzM77tjm" alt="" class="fc-emoji" loading="lazy">
                    <h3>Hindari Rintangan</h3>
                    <p>Rintangan muncul di jalan. Anak harus menghindari agar Umar tidak terjatuh atau terlambat.</p>
                    <span class="fc-point">⚠️ Waspada!</span>
                </div>
                <div class="flow-card fc-sky reveal">
                    <img src="https://lh3.googleusercontent.com/d/1qTGHT4Je_SJIYUbnqlaJ_c56g5CRBwbQ" alt="" class="fc-emoji" loading="lazy">
                    <h3>Kumpulkan Poin</h3>
                    <p>Kumpulkan bintang dan koin di sepanjang jalan untuk menambah skor Umar.</p>
                    <span class="fc-point">⭐ +10 Poin</span>
                </div>
                <div class="flow-card fc-emerald reveal">
                    <img src="https://lh3.googleusercontent.com/d/1DsPWyF6wjaeYY-qYeMkHXJUVdWEWKtBp" alt="" class="fc-emoji" loading="lazy">
                    <h3>Sampai di Sekolah</h3>
                    <p>Berhasil sampai sebelum bel berbunyi! Umar senang dan siap belajar.</p>
                    <span class="fc-point">🏫 Selamat Datang!</span>
                </div>
            </div>
            <p class="flow-note reveal">Di kelas, anak belajar <strong>membuat</strong> semua ini dari nol, mulai dari karakter, skor, sampai rintangan.</p>
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
                <div class="materi-card materi-theme-green reveal">
                    <div class="materi-num">1</div>
                    <h3>Movement &amp; Direction</h3>
                    <p>Anak belajar membuat karakter bergerak ke kiri, kanan, dan melompat. Dasar dari setiap game.</p>
                </div>
                <div class="materi-card materi-theme-amber reveal">
                    <div class="materi-num">2</div>
                    <h3>Obstacles &amp; Collision</h3>
                    <p>Bikin rintangan muncul dan deteksi tabrakan. Anak belajar logika "jika kena rintangan, maka...".</p>
                </div>
                <div class="materi-card materi-theme-pink reveal">
                    <div class="materi-num">3</div>
                    <h3>Scoring System</h3>
                    <p>Bikin variabel skor, lalu lihat angkanya berubah saat mengumpulkan poin atau kena rintangan.</p>
                </div>
                <div class="materi-card materi-theme-sky reveal">
                    <div class="materi-num">4</div>
                    <h3>Conditions (Jika &hellip; Maka)</h3>
                    <p>"Jika kena rintangan, maka skor berkurang". Anak belajar logika percabangan dengan cara main.</p>
                </div>
                <div class="materi-card materi-theme-emerald reveal">
                    <div class="materi-num">5</div>
                    <h3>Loops &amp; Repetition</h3>
                    <p>Rintangan dan poin terus-menerus muncul. Anak belajar membuat perulangan untuk benda yang bergerak.</p>
                </div>
                <div class="materi-card materi-theme-orange reveal">
                    <div class="materi-num">6</div>
                    <h3>Creativity &amp; Design</h3>
                    <p>Anak bebas berkreasi menghias jalanan, sekolah, dan karakter Umar dengan gaya sendiri.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= JADWAL ================= -->
    <div class="stripe-divider" aria-hidden="true"></div>
    <section id="jadwal" class="section jadwal-section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Pilih Jadwal Kelas-mu</h2>
                <p>Pilih hari &amp; jam yang paling cocok, lalu klik Daftar. Kelas online via Zoom, durasi ±60 menit.</p>
                <p class="jadwal-start reveal">Kelas mulai: <strong id="jadwalMulai">Senin, 7 September 2026</strong></p>
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
                <span class="jadwal-weekly-note reveal"><span class="rec-icon">🔄</span> Jadwal akan ada setiap minggu — pilih hari yang paling cocok!</span>
            </div>
            <p class="jadwal-note reveal">Kuota tiap sesi terbatas, pilih jadwal &amp; daftar sekarang biar kursi aman!</p>
            <div style="text-align:center; margin-top:1.8rem;">
                {{-- Ganti dengan link pendaftaran September yang sesuai --}}
                <a href="https://goakal.com/alhazenacademy/coding-experience/2ak73/apply?promo=janganterlambat" class="btn btn-green btn-big btn-shine shine-loop">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <!-- ================= HARGA ================= -->
    <section id="harga" class="section harga-section">
        <img src="{{ asset('assets/custom/coding_experience_class/september.jpeg') }}" alt="" class="harga-bg" loading="lazy" onerror="this.remove()">
        <div class="harga-overlay"></div>
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Harga Promo Spesial</h2>
                <p>Promo terbatas untuk kelas perdana September. Setelah kuota penuh, harga kembali normal.</p>
            </div>

            <div class="price-card reveal">
                <span class="price-ribbon"><img src="https://lh3.googleusercontent.com/d/1PO1NKjXbLepZsW4Jv4IWzvY5rdqX17hI" alt="" loading="lazy"> PROMO SEPTEMBER</span>
                <h3>Coding Experience Class</h3>
                <p class="pc-sub">1 Hari &bull; Online via Zoom</p>

                <div class="price-old">Rp 99.000</div>
                <div class="price-main"><small>Rp</small> 19.000</div>
                <p class="price-note">Hemat 81%, promo spesial kelas perdana September!</p>

                <div class="cd-label"><img src="https://lh3.googleusercontent.com/d/1zXrTucBaCRUIBZSQz1EjPQ_IpEZtRc3m" alt="" loading="lazy">Promo berakhir dalam:</div>
                <div class="countdown" id="countdown">
                    <div class="cd-box"><b id="cdD">00</b><span>Hari</span></div>
                    <div class="cd-box"><b id="cdH">00</b><span>Jam</span></div>
                    <div class="cd-box"><b id="cdM">00</b><span>Menit</span></div>
                    <div class="cd-box"><b id="cdS">00</b><span>Detik</span></div>
                </div>

                <ul class="price-includes">
                    <li><span class="check">✓</span>1 sesi live Zoom 60 menit bersama tutor ramah anak</li>
                    <li><span class="check">✓</span>Kelas online yang interaktif &amp; menyenangkan</li>
                    <li><span class="check">✓</span>Belajar logika coding pakai blok visual, tanpa pengalaman pun bisa</li>
                    <li><span class="check">✓</span>Hasil project: game Lari ke Sekolah bersama Umar</li>
                    <li><span class="check">✓</span>Modul &amp; file project dibawa pulang</li>
                    <li><span class="check">✓</span>Sertifikat keikutsertaan Coding Experience Class</li>
                </ul>

                <a href="#jadwal" class="btn btn-primary btn-big btn-shine shine-loop" style="width:100%;"> Amankan Kursi, Rp 19.000</a>
                <p class="price-foot">*Kuota terbatas &bull; Pembayaran mudah &bull; Link Zoom dikirim setelah pendaftaran</p>
            </div>
        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <div class="stripe-divider" aria-hidden="true"></div>
    <section id="faq" class="section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Pertanyaan yang Sering Ditanya</h2>
                <p>Masih ragu? Cek jawabannya dulu, yuk!</p>
            </div>

            <div class="faq-list">
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Untuk usia berapa kelas ini?<span class="chev">▼</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Kelas ini cocok untuk anak <strong>SD (usia 7-12 tahun)</strong>, terutama yang baru mau mencoba coding pertama kali. Materi dan pendampingan disesuaikan agar anak nyaman dan tetap seru.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Apakah anak harus punya pengalaman coding?<span class="chev">▼</span></button>
                    <div class="faq-a"><div class="faq-a-inner"><strong>Tidak wajib!</strong> Kami mulai dari nol menggunakan blok visual yang ramah anak, jadi anak tanpa pengalaman coding pun langsung bisa ikut dan berhasil membuat game.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Perangkat apa yang dibutuhkan?<span class="chev">▼</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Cukup <strong>laptop/PC dengan koneksi internet</strong> dan aplikasi Zoom. Semua tools yang dipakai gratis dan bisa diakses lewat browser.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Berapa lama kelasnya?<span class="chev">▼</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Kelas berlangsung <strong>1 hari</strong> dengan durasi ±60 menit secara live via Zoom.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Apa yang dibawa pulang setelah kelas?<span class="chev">▼</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Anak membawa pulang <strong>game Lari ke Sekolah</strong> yang ia buat sendiri, modul pembelajaran, file project, serta <strong>sertifikat keikutsertaan</strong> Coding Experience Class.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Bagaimana cara mendaftar?<span class="chev">▼</span></button>
                    <div class="faq-a"><div class="faq-a-inner">Klik tombol <strong>"Daftar"</strong> di halaman ini, lalu pilih <strong>jadwal kelas</strong> yang paling cocok. Setelah itu klik <strong>"Daftar Sekarang"</strong>, kamu akan diarahkan ke form registrasi dan admin akan membantu proses pendaftaran serta pembayaran dengan cepat.</div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA BAWAH ================= -->
    <section class="section" style="padding-top:1rem;">
        <div class="container">
            <div class="cta-band reveal">
                <h2 class="text-h2">Yuk, jadi pembuat game cilik!</h2>
                <p>Kuota kelas kecil supaya anak dapat perhatian maksimal. Jangan sampai kehabisan di kelas perdana September!</p>
                <a href="#jadwal" class="btn btn-green btn-big btn-shine shine-loop">Daftar Coding Experience Class</a>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <div class="stripe-divider" aria-hidden="true"></div>
    <footer class="overflow-hidden relative rounded-t-2xl inset-0 bg-[#065F46]">
        <img src="https://alhazen.academy/assets/kids/image-footer/bg-footer.webp" alt=""
            class="absolute bottom-0 left-0 w-full object-cover object-bottom opacity-95 pointer-events-none select-none"
            loading="lazy" decoding="async" />

        <div class="relative mx-auto max-w-7xl px-5 sm:px-8 py-12 sm:py-16 text-white">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-y-12 md:gap-x-12 xl:gap-x-16">

                <!-- Logo & About -->
                <div class="md:col-span-3 space-y-3 md:space-y-6">
                    <img src="https://alhazen.academy/assets/foot-logo-new.webp" alt="Alhazen Academy" class="h-14 w-auto" loading="lazy"
                        decoding="async" onerror="this.src='https://lh3.googleusercontent.com/d/1_g1o1KBK2dGI9hIJVm0vJx7COTdlDuUC';">
                    <div class="flex items-center gap-3">
                        <a href="https://www.facebook.com/alhazenacademy" target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                            aria-label="Facebook">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-fb.png" alt="Facebook icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>
                        <a href="https://instagram.com/alhazenacademy" target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                            aria-label="Instagram">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-ig.png" alt="Instagram icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>
                        <a href="https://www.tiktok.com/@alhazenacademy" target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                            aria-label="TikTok">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-tkt.png" alt="TikTok icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>
                        <a href="https://www.linkedin.com/company/alhazen-academy" target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                            aria-label="LinkedIn">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-lkn.png" alt="LinkedIn icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>
                        <a href="https://www.youtube.com/@alhazenacademy" target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                            aria-label="YouTube">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-ytb.png" alt="YouTube icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>
                    </div>
                    <p class="text-white/90 text-sm max-w-sm leading-relaxed text-justify">PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.</p>
                </div>

                <!-- Program -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 style="font-family: Poppins" class="text-xl font-medium">Program</h4>
                    <ul class="space-y-2">
                        <li><a href="https://alhazen.academy/kursus-coding-anak?tab=coding#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Coding</a></li>
                        <li><a href="https://alhazen.academy/program?tab=animation#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Animation</a></li>
                        <li><a href="https://alhazen.academy/program?tab=iot#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">IoT</a></li>
                        <li><a href="https://alhazen.academy/kursus-roblox?tab=roblox#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Roblox</a></li>
                        <li><a href="https://alhazen.academy/program?tab=design#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Design</a></li>
                    </ul>

                    <div class="mt-6">
                        <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Hubungi Kami</h4>
                        <ul class="space-y-2 text-white/90 text-sm">
                            <li><a href="tel:+6281390000332" class="hover:underline hover:text-white">+62-813-90000-332</a></li>
                            <li><a href="mailto:info@alhazen.academy" class="hover:underline hover:text-white">info@alhazen.academy</a></li>
                            <li><a href="https://www.alhazen.academy" target="_blank" rel="noopener" class="hover:underline hover:text-white">www.alhazen.academy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Lainnya -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 style="font-family: Poppins" class="text-xl font-medium">Lainnya</h4>
                    <ul class="space-y-2">
                        <li><a href="https://alhazen.academy/program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Program</a></li>
                        <li><a href="https://alhazen.academy/event" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Event</a></li>
                        <li><a href="https://alhazen.academy/artikel" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Artikel</a></li>
                        <li><a href="https://alhazen.academy/tentang-kami" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Tentang Kami</a></li>
                    </ul>

                    <div class="pt-4">
                        <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Tersertifikasi</h4>
                        <div class="group relative w-36 rounded-2xl bg-white p-3 overflow-hidden transition hover:ring-2 hover:ring-primary/20">
                            <a href="https://blockchain.stem.org/9faa3d1f-7825-4b4c-8967-525fa6eb08f0#gs.c2374s" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center">
                                <img alt="Badge Sertifikasi STEM.org" class="ct-image block" width="400" height="400" loading="lazy" decoding="async"
                                    src="https://api.accredible.com/v1/frontend/credential_website_embed_image/badge/108574909"
                                    data-fallback="https://alhazen.academy/assets/stem_badge.png"
                                    onerror="this.onerror=null; this.src=this.dataset.fallback;">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="md:col-span-3 md:pl-6 space-y-2">
                    <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Kantor Pusat</h4>
                    <a href="https://maps.google.com/?q=Plaza+Kaha%2C+Jl.+KH+Abdullah+Syafei+No.21+C%2C+Bukit+Duri%2C+Kec.+Tebet%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12840" target="_blank" rel="noopener"
                        class="text-sm text-white/90 leading-relaxed underline">Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840</a>
                </div>
            </div>

            <div class="relative border-t border-white/20 mt-10">
                <div class="mx-auto max-w-7xl px-5 sm:px-8 py-4 text-center text-xs sm:text-sm text-white/80">
                    © 2026 <strong>PT. Alhazen Global Teknologi</strong>. All Rights Reserved.
                </div>
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
            /* ================= NAV ================= */
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

            /* ================= REVEAL ================= */
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
                });
            }, { threshold: 0.12 });
            document.querySelectorAll('.reveal').forEach(function (el) { io.observe(el); });

            /* ================= FAQ ================= */
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

            /* ================= FLOATING BTN ================= */
            var floatWa = document.getElementById('floatWa');
            var floatTop = document.getElementById('floatTop');
            window.addEventListener('scroll', function () {
                var show = window.scrollY > 320;
                floatWa.classList.toggle('show', show);
                floatTop.classList.toggle('show', show);
            });
            floatTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });

            /* ================= TANGGAL JADWAL (next week dynamic) ================= */
            (function () {
                var cells = document.querySelectorAll('.jt-date');
                if (!cells.length) return;
                var fmt = new Intl.DateTimeFormat('id-ID', { day: 'numeric', month: 'short' });
                var fmtFull = new Intl.DateTimeFormat('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
                var today = new Date();
                today.setHours(0, 0, 0, 0);
                var todayIdx = (today.getDay() + 6) % 7; // 0=Mon ... 6=Sun
                var monday = new Date(today);
                monday.setDate(today.getDate() - todayIdx); // this week Monday
                // If today is Mon-Sat, show THIS week; if Sun, show NEXT week
                if (todayIdx === 6) {
                    monday.setDate(monday.getDate() + 7);
                }
                // Anchor: earliest start is 7 Sep 2026 (Monday)
                var anchor = new Date(2026, 8, 7); // Sep 7 2026
                if (monday.getTime() < anchor.getTime()) {
                    monday = new Date(anchor);
                }
                // Update "Kelas mulai" text
                var mulaiEl = document.getElementById('jadwalMulai');
                if (mulaiEl) {
                    mulaiEl.textContent = fmtFull.format(monday);
                }
                // Update countdown target to next Monday 00:00
                var countdownTarget = monday.getTime();
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
                // Fill each row's date and mark state: past / closed (H-3) / active
                var CLOSED_DAYS = 1; // max H-3
                cells.forEach(function (td) {
                    var i = parseInt(td.getAttribute('data-day'), 10);
                    if (isNaN(i)) return;
                    var d = new Date(monday);
                    d.setDate(monday.getDate() + i);
                    td.textContent = fmt.format(d);
                    var row = td.closest('tr');
                    if (!row) return;
                    var diffMs = d.getTime() - today.getTime();
                    var diffDays = Math.floor(diffMs / 86400000);
                    if (diffDays < 0) {
                        // sudah lewat
                        row.classList.add('row-past');
                    } else if (diffDays < CLOSED_DAYS) {
                        // mepet H-3, pendaftaran ditutup
                        row.classList.add('row-closed');
                        var note = document.createElement('span');
                        note.className = 'jt-closed-note';
                        note.textContent = '⚠️ Pendaftaran ditutup';
                        td.appendChild(note);
                    } else {
                        // available
                        row.classList.add('row-active');
                    }
                });
            })();

        })();
    </script>
</body>
</html>
