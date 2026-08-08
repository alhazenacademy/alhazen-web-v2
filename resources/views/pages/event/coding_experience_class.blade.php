<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding Experience Class - Belajar Coding 1 Hari, Bikin Game Tangkap Kerupuk</title>
    <meta name="description" content="Kelas coding 1 hari yang dirancang khusus memfasilitasi rasa penasaran anak untuk membuat aplikasi & game. Bikin game Tangkap Kerupuk tema Kemerdekaan, online via Zoom, hanya Rp 17.826.">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="Coding Experience Class - Bikin Game Tangkap Kerupuk Tema Kemerdekaan">
    <meta property="og:description" content="Kelas coding 1 hari untuk anak. Belajar logika sambil bikin game Tangkap Kerupuk, online via Zoom. Spesial 17 Agustus: Rp 17.826 dari Rp 238.000.">
    <meta property="og:image" content="https://lh3.googleusercontent.com/d/12SMxHglLto4FGmD0Ssxl7CBTX8MddMQp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Coding Experience Class - Bikin Game Tangkap Kerupuk Tema Kemerdekaan">
    <meta name="twitter:description" content="Kelas coding 1 hari untuk anak. Belajar logika sambil bikin game Tangkap Kerupuk, online via Zoom. Spesial 17 Agustus: Rp 17.826.">
    <meta name="twitter:image" content="https://lh3.googleusercontent.com/d/12SMxHglLto4FGmD0Ssxl7CBTX8MddMQp">
    <link rel="icon" href="https://alhazen.academy/assets/logo-new.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#DC2626' }
                }
            }
        }
    </script>
    <style>
        :root {
            --color-primary: #DC2626;
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
        h1, h2, h3, h4, h5, h6 { font-family: 'Fredoka', ui-sans-serif, system-ui, sans-serif; }

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

        /* ============ HEADER (mirip contoh Alhazen) ============ */
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
            font-family: 'Fredoka'; font-weight: 600; font-size: 1.05rem;
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
        .dd { position: relative; }
        .dd-btn svg { width: 14px; height: 14px; transition: transform .25s; }
        .dd.open .dd-btn svg { transform: rotate(180deg); }
        .dd-panel {
            display: none; position: absolute; left: 0; top: 100%; margin-top: .75rem;
            width: 14rem; border-radius: .75rem; border: 1px solid var(--color-neutral);
            background: #fff; padding: .5rem 0; z-index: 50;
        }
        .dd.open .dd-panel { display: block; }
        .dd-panel a { display: block; padding: .65rem 1rem; font-size: .875rem; color: rgba(15, 23, 42, .65); border-radius: .4rem; }
        .dd-panel a:hover { color: var(--color-text); background: rgba(229, 231, 235, .4); }

        .nav-btn-primary {
            padding: .7rem 1.25rem; border-radius: .75rem; background: var(--color-primary); color: #fff;
            font-weight: 600; font-size: .95rem; white-space: nowrap;
            transition: transform .2s, background .2s;
        }
        .nav-btn-primary:hover { transform: scale(1.05); background: var(--color-accent); }
        .nav-login { color: var(--color-primary); font-size: .95rem; text-decoration: underline; white-space: nowrap; }
        .nav-login:hover { color: var(--color-accent); }

        .nav-burger {
            display: grid; place-items: center; width: 42px; height: 42px;
            border-radius: .6rem; border: 1px solid var(--color-neutral);
            background: transparent; font-size: 1.3rem; cursor: pointer; color: var(--color-text);
        }
        @media (min-width: 768px) { .nav-burger { display: none; } }

        .mobile-menu {
            position: absolute; top: 4rem; right: 1rem; z-index: 49; width: 18rem;
            background: #fff; border: 1px solid var(--color-neutral); border-radius: .75rem;
            background: #fff; display: none; backdrop-filter: blur(10px);
        }
        .mobile-menu.open { display: block; }
        .mobile-menu hr { border: 0; border-top: 1px solid var(--color-neutral); }
        .mm-title { padding: .75rem 1rem; font-weight: 600; }
        .mm-item { display: block; padding: .7rem 1rem; font-size: .95rem; }
        .mm-item:hover { background: #FEF2F2; }
        .mm-drop-btn {
            width: 100%; display: flex; justify-content: space-between; align-items: center;
            padding: .7rem 1rem; background: none; border: 0; cursor: pointer;
            font-family: inherit; font-size: .95rem; color: rgba(15, 23, 42, .65);
        }
        .mm-drop-btn:hover { background: #FEF2F2; }
        .mm-drop-btn svg { width: 14px; height: 14px; transition: transform .25s; }
        .mm-sub.open .mm-drop-btn svg { transform: rotate(180deg); }
        .mm-sub-links { display: none; padding-bottom: .25rem; }
        .mm-sub.open .mm-sub-links { display: block; }
        .mm-sub-links a { display: block; padding: .55rem 2rem; font-size: .875rem; color: rgba(15, 23, 42, .6); }
        .mm-sub-links a:hover { background: #FEF2F2; }
        .mm-cta {
            display: block; margin: .75rem 1rem .5rem; padding: .8rem; text-align: center;
            border-radius: .75rem; background: var(--color-primary); color: #fff; font-weight: 600;
        }
        .mm-cta:hover { background: var(--color-accent); }
        .mm-login { display: block; text-align: center; padding: .55rem 1rem 1rem; color: var(--color-primary); font-size: .9rem; text-decoration: underline; }

        /* ============ HERO (game cover) ============ */
        .hero { padding: 2rem 0 0; }
        .hero-banner {
            position: relative; border-radius: 1.75rem; overflow: hidden;
            background: #7F1D1D; min-height: 560px;
            display: flex; align-items: center; justify-content: center;
        }
        @media (min-width: 1024px) { .hero-banner { min-height: 660px; } }
        .hero-cover { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; }
        .hero-overlay {
            position: absolute; inset: 0; z-index: 1;
            background: rgba(15,23,42,.6);
        }
        .hero-banner::before, .hero-banner::after {
            content: ""; position: absolute; z-index: 3; pointer-events: none;
            border-radius: 4px; opacity: .9;
        }
        .hero-banner::before {
            top: 16%; left: 7%; width: 20px; height: 20px; background: #FDE047;
            transform: rotate(22deg); animation: confetti 7s ease-in-out infinite;
        }
        .hero-banner::after {
            bottom: 20%; right: 8%; width: 14px; height: 24px; background: #fff;
            border-radius: 3px; transform: rotate(-18deg);
            animation: confetti 6s ease-in-out infinite 1.6s;
        }
        @keyframes confetti { 0%, 100% { transform: translateY(0) rotate(22deg); } 50% { transform: translateY(-22px) rotate(55deg); } }
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
            border-radius: 999px; backdrop-filter: blur(4px);
        }
        .hero-title { color: #fff; font-weight: 700; margin: 1.1rem 0 .9rem; }
        .hero-title .hl { color: #FDE047; }
        .hero-sub { color: rgba(255,255,255,.96); max-width: 40rem; margin: 0 0 1.3rem; font-weight: 300; }
        .hero-chips { display: flex; flex-wrap: wrap; gap: .6rem; margin-bottom: 1.5rem; justify-content: center; }
        .chip {
            display: inline-flex; align-items: center; gap: .4rem;
            background: rgba(15,23,42,.45); color: #fff; font-size: .82rem; font-weight: 500;
            padding: .45rem .85rem; border-radius: 999px; border: 1px solid rgba(255,255,255,.3);
            backdrop-filter: blur(4px);
        }
        .hero-price { display: flex; align-items: baseline; gap: .8rem; margin-bottom: 1.4rem; flex-wrap: wrap; justify-content: center; }
        .price-strike { color: rgba(255,255,255,.85); text-decoration: line-through; font-size: 1rem; }
        .price-now { color: #FDE047; font-family: 'Fredoka'; font-weight: 700; font-size: 2.4rem; line-height: 1; }
        .price-save {
            background: #FDE047; color: #7F1D1D; font-size: .75rem; font-weight: 700;
            padding: .3rem .7rem; border-radius: 999px; transform: rotate(-3deg);
        }
        .hero-ctas { display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; }
        .btn {
            display: inline-flex; align-items: center; justify-content: center; gap: .5rem;
            padding: .9rem 1.8rem; border-radius: .8rem; font-weight: 600; cursor: pointer;
            border: 0; font-family: inherit; transition: transform .2s, background .2s;
        }
        .btn-img { width: 20px; height: 20px; object-fit: contain; flex-shrink: 0; }
        .btn-primary { background: #FDE047; color: #7F1D1D; }
        .btn-primary:hover { transform: scale(1.05); background: #FEF08A; }
        .btn-ghost { background: rgba(255,255,255,.14); color: #fff; border: 1px solid rgba(255,255,255,.4); }
        .btn-ghost:hover { transform: scale(1.05); background: rgba(255,255,255,.24); }
        .btn-red { background: var(--color-primary); color: #fff; }
        .btn-red:hover { transform: scale(1.05); background: var(--color-accent); }
        .btn-big { padding: 1.05rem 2.2rem; font-size: 1.05rem; }
        @keyframes floaty { 0%, 100% { transform: translateY(0) rotate(0); } 50% { transform: translateY(-16px) rotate(8deg); } }

        /* ============ STATS ============ */
        .stats { padding: 2.5rem 0 0.5rem; }
        .stats-grid { display: grid; grid-template-columns: 1fr; gap: .9rem; }
        @media (min-width: 768px) { .stats-grid { grid-template-columns: repeat(4, 1fr); } }
        .stat-card {
            background: #fff; border: 1px solid var(--color-neutral); border-radius: 1rem;
            padding: 1.1rem 1.25rem; display: flex; align-items: center; gap: .9rem;
        }
        .stat-icon {
            width: 46px; height: 46px; border-radius: 50%; display: grid; place-items: center;
            font-size: 1.3rem; flex-shrink: 0;
        }
        .stat-icon img { width: 27px; height: 27px; object-fit: contain; }
        .stat-card b { display: block; font-family: 'Fredoka'; font-size: 1.05rem; line-height: 1.2; }
        .stat-card span { font-size: .78rem; color: rgba(15,23,42,.6); }
        .stat-card { transition: background .25s, color .25s; }
        .stat-solid-red { background: #DC2626; border-color: #DC2626; color: #fff; }
        .stat-solid-amber { background: #F59E0B; border-color: #F59E0B; color: #7F1D1D; }
        .stat-solid-pink { background: #DB2777; border-color: #DB2777; color: #fff; }
        .stat-solid-green { background: #15803D; border-color: #15803D; color: #fff; }
        .stat-solid-red .stat-icon, .stat-solid-pink .stat-icon, .stat-solid-green .stat-icon { background: rgba(255,255,255,.22); }
        .stat-solid-amber .stat-icon { background: rgba(127,29,29,.14); }
        .stat-solid-red b, .stat-solid-pink b, .stat-solid-green b { color: #fff; }
        .stat-solid-amber b { color: #7F1D1D; }
        .stat-solid-red span, .stat-solid-pink span, .stat-solid-green span { color: rgba(255,255,255,.95); }
        .stat-solid-amber span { color: rgba(127,29,29,.85); }
        .stat-solid-red:hover { background: #FEE2E2; border-color: #FCA5A5; color: #991B1B; }
        .stat-solid-amber:hover { background: #FEF3C7; border-color: #FDE68A; color: #92400E; }
        .stat-solid-pink:hover { background: #FCE7F3; border-color: #F9A8D4; color: #9D174D; }
        .stat-solid-green:hover { background: #DCFCE7; border-color: #86EFAC; color: #166534; }
        .stat-solid-red:hover .stat-icon, .stat-solid-amber:hover .stat-icon, .stat-solid-pink:hover .stat-icon, .stat-solid-green:hover .stat-icon { background: rgba(0,0,0,.06); }
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
        .showcase-blob { position: absolute; width: 300px; height: 300px; border-radius: 50%; background: rgba(220,38,38,.1); top: -60px; right: -40px; z-index: 0; }
        .showcase {
            position: relative; z-index: 1; border-radius: 1.5rem; overflow: hidden;
            border: 6px solid #fff; background: #0F172A;
            aspect-ratio: 4 / 3;
        }
        .sc-art { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1; }
        .sc-sky { height: 210px; position: relative; background: #BFDBFE; overflow: hidden; }
        .sc-sun { position: absolute; top: 18px; right: 26px; width: 52px; height: 52px; border-radius: 50%; background: #FBBF24; }
        .sc-cloud { position: absolute; background: rgba(255,255,255,.9); border-radius: 999px; }
        .sc-cloud.k1 { width: 74px; height: 22px; top: 30px; left: 18px; }
        .sc-cloud.k2 { width: 54px; height: 16px; top: 74px; left: 64px; opacity: .8; }
        .sc-pole { position: absolute; left: 26px; bottom: 0; width: 6px; height: 150px; background: #92400E; border-radius: 3px; }
        .sc-flag { position: absolute; left: 26px; bottom: 150px; width: 84px; height: 52px; border-radius: 0 4px 4px 0; overflow: hidden; animation: wave 3.4s ease-in-out infinite; transform-origin: left center; }
        .sc-flag .red { height: 50%; background: #DC2626; }
        .sc-flag .white { height: 50%; background: #fff; }
        @keyframes wave { 0%, 100% { transform: rotate(0); } 50% { transform: rotate(3deg); } }
.sc-kerupuk { position: absolute; top: 42px; right: 70px; width: 34px; height: 34px; border-radius: 50%; background: #F59E0B; border: 3px solid #B45309; animation: fall-spin 3.2s linear infinite; }
        .sc-kerupuk::after { content: ""; position: absolute; inset: 9px; border-radius: 50%; background: #FEF3C7; }
        .sc-marble { position: absolute; top: 60px; right: 26px; width: 20px; height: 20px; border-radius: 50%; background: #6B7280; animation: fall-spin 2.6s linear infinite; }
        .sc-fire { position: absolute; top: 20px; right: 140px; width: 22px; height: 22px; border-radius: 50%; background: #F97316; animation: fall-spin 2.2s linear infinite; }
        .sc-ground { height: 96px; position: relative; background: #65A30D; }
        .sc-ground::after { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 8px; background: #FEF3C7; }
        .sc-kid {
            position: absolute; bottom: 16px; left: 30%;
            width: 40px; height: 64px; border-radius: 999px 999px 10px 10px;
            background: #DC2626;
            animation: kid-jump 1.9s ease-in-out infinite;
        }
        .sc-kid::before { content: ""; position: absolute; top: -12px; left: 6px; width: 28px; height: 28px; border-radius: 50%; background: #FCD9B8; }
        .sc-kid::after { content: ""; position: absolute; top: -18px; left: 4px; width: 32px; height: 12px; border-radius: 8px 8px 2px 2px; background: #DC2626; }
        @keyframes kid-jump { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-46px); } }
        .showcase-caption {
            position: absolute; left: 14px; bottom: 14px; z-index: 2;
            background: rgba(15,23,42,.78); color: #fff; font-size: .78rem; font-weight: 600;
            padding: .5rem .9rem; border-radius: 999px; backdrop-filter: blur(4px);
            display: inline-flex; align-items: center; gap: .45rem;
        }
        .showcase-caption img { width: 16px; height: 16px; object-fit: contain; flex-shrink: 0; }

        /* ============ FLOW GAME ============ */
        .flow-section { background: #FFF5F5; }
        .flow-grid { display: grid; gap: 1.1rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .flow-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .flow-grid { grid-template-columns: repeat(4, 1fr); } }
        .flow-card { border-radius: 1.1rem; overflow: hidden; color: #fff; position: relative; min-height: 210px; display: flex; flex-direction: column; justify-content: flex-end; padding: 1.4rem; transition: transform .25s; }
        .flow-card:hover { transform: translateY(-6px); }
        .flow-card .fc-emoji { font-size: 2.6rem; position: absolute; top: 1rem; right: 1rem; opacity: .95; transition: transform .3s; }
        .flow-card img.fc-emoji { width: 62px; height: 62px; object-fit: contain; }
        .flow-card:hover .fc-emoji { transform: scale(1.18) rotate(-8deg); }
        .flow-card h3 { margin: 0 0 .3rem; font-size: 1.3rem; }
        .flow-card p { margin: 0; font-size: .88rem; opacity: .92; }
        .flow-card .fc-point {
            display: inline-block; margin-top: .8rem; font-size: .8rem; font-weight: 700;
            padding: .3rem .7rem; border-radius: 999px; background: rgba(255,255,255,.2); border: 1px solid rgba(255,255,255,.35);
        }
        .fc-red { background: #DC2626; }
        .fc-gray { background: #64748B; }
        .fc-orange { background: #F97316; }
        .fc-green { background: #047857; }
        .flow-note { text-align: center; margin-top: 2rem; color: rgba(15,23,42,.6); font-size: .9rem; }

        /* ============ MATERI ============ */
        .materi-grid { display: grid; gap: 1.2rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .materi-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .materi-grid { grid-template-columns: repeat(3, 1fr); } }
        .materi-card { background: #fff; border: 1px solid var(--color-neutral); border-radius: 1.2rem; padding: 1.6rem; transition: transform .25s; }
        .materi-card:hover { transform: translateY(-5px); }
        .materi-num { width: 46px; height: 46px; border-radius: 50%; display: grid; place-items: center; font-family: 'Fredoka'; font-weight: 700; font-size: 1.25rem; margin-bottom: 1rem; }
        .materi-card h3 { margin: 0 0 .5rem; font-size: 1.15rem; }
        .materi-card p { margin: 0; font-size: .9rem; color: rgba(15,23,42,.7); line-height: 1.55; }
        .materi-card .m-tag { display: inline-block; margin-top: .8rem; font-size: .72rem; font-weight: 600; color: var(--color-primary); background: #FEF2F2; padding: .25rem .6rem; border-radius: 999px; }
        .m-tag img { width: 15px; height: 15px; object-fit: contain; vertical-align: -2px; margin-right: .35rem; }

        .materi-card { position: relative; overflow: hidden; }
        .materi-card::after { content: ""; position: absolute; width: 96px; height: 96px; border-radius: 50%; right: -28px; bottom: -28px; background: rgba(255,255,255,.22); pointer-events: none; }
        .materi-theme-red    { background: #DC2626; border-color: #DC2626; color: #fff; }
        .materi-theme-amber  { background: #F59E0B; border-color: #F59E0B; color: #fff; }
        .materi-theme-pink   { background: #DB2777; border-color: #DB2777; color: #fff; }
        .materi-theme-sky    { background: #0284C7; border-color: #0284C7; color: #fff; }
        .materi-theme-green  { background: #16A34A; border-color: #16A34A; color: #fff; }
        .materi-theme-orange { background: #EA580C; border-color: #EA580C; color: #fff; }
        .materi-theme-red p, .materi-theme-amber p, .materi-theme-pink p, .materi-theme-sky p, .materi-theme-green p, .materi-theme-orange p { color: rgba(255,255,255,.92); }
        .materi-theme-red h3, .materi-theme-amber h3, .materi-theme-pink h3, .materi-theme-sky h3, .materi-theme-green h3, .materi-theme-orange h3 { color: #fff; }
        .materi-theme-red .materi-num, .materi-theme-amber .materi-num, .materi-theme-pink .materi-num, .materi-theme-sky .materi-num, .materi-theme-green .materi-num, .materi-theme-orange .materi-num { color: #fff; background: rgba(255,255,255,.24); }
        .materi-theme-red .m-tag, .materi-theme-amber .m-tag, .materi-theme-pink .m-tag, .materi-theme-sky .m-tag, .materi-theme-green .m-tag, .materi-theme-orange .m-tag { background: #fff; color: #7F1D1D; }

        /* ============ JADWAL ============ */
        .jadwal-section { background: #FFF7F7; }
        .jadwal-section:before, .jadwal-section:after { display: none; }
        .jadwal-grid { display: grid; gap: 1.4rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .jadwal-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .jadwal-grid { grid-template-columns: repeat(3, 1fr); } }
        .jadwal-card {
            background: #fff; border-radius: 1.35rem; overflow: hidden;
            border: 1.5px solid #F5D0CE;
            box-shadow: 0 6px 18px rgba(15,23,42,.06);
            display: flex; flex-direction: column; transition: transform .25s, box-shadow .25s;
            position: relative;
        }
        .jadwal-card::after {
            content: ""; position: absolute; bottom: 0; left: 0; right: 0; height: 7px; z-index: 2;
            background: repeating-linear-gradient(90deg, #DC2626 0 14px, #fff 14px 28px);
            border-top: 1px solid #F6C6C6;
        }
        .jadwal-card:hover { transform: translateY(-5px); box-shadow: 0 12px 26px rgba(15,23,42,.1); }

        /* identitas warna tiap kelas (aksen, bukan background penuh) */
        .j-roblox  { --j-primary: #3B82F6; --j-tint: #EFF6FF; --j-soft: #DBEAFE; }
        .j-junior  { --j-primary: #10B981; --j-tint: #ECFDF5; --j-soft: #D1FAE5; }
        .j-senior  { --j-primary: #EF4444; --j-tint: #FEF2F2; --j-soft: #FEE2E2; }
        .j-p123    { --j-primary: #D97706; --j-tint: #FFF7ED; --j-soft: #FDEBD4; }
        .j-p456    { --j-primary: #EC4899; --j-tint: #FDF2F8; --j-soft: #FBCFE8; }

        .jadwal-head { padding: 1.4rem 1.4rem 1.1rem; display: flex; align-items: center; gap: 1rem; }
        .jadwal-head .j-icon {
            width: 86px; height: 86px; border-radius: 20px; flex-shrink: 0;
            background: var(--j-tint, #FEF2F2); border: 1px solid var(--j-soft, #FEE2E2);
            display: grid; place-items: center; padding: 14px;
            box-shadow: 0 8px 18px -8px rgba(15,23,42,.25);
        }
        .jadwal-head .j-icon img { width: 100%; height: 100%; object-fit: contain; display: block; transition: transform .3s ease; }
        .jadwal-card:hover .j-icon img { transform: scale(1.09) rotate(-4deg); }
        .jadwal-head h3 { margin: 0 0 .15rem; font-size: 1.3rem; font-weight: 700; color: var(--j-primary, var(--color-primary)); line-height: 1.15; letter-spacing: -.01em; }
        .jadwal-head .j-sub { font-size: .8rem; color: rgba(15,23,42,.6); font-weight: 400; }

        .jadwal-list { list-style: none; margin: .2rem 0 0; padding: 1.1rem 1.25rem 1.3rem; display: grid; gap: .6rem; border-top: 1px dashed var(--color-neutral); }
        @media (min-width: 768px) { .jadwal-list { grid-template-columns: repeat(2, 1fr); } }
        .jadwal-row {
            display: flex; align-items: center; gap: .6rem; flex-wrap: wrap;
            background: #F8FAFC; border: 1px solid var(--color-neutral); border-radius: .9rem; padding: .55rem .7rem;
        }
        .j-day { font-size: .7rem; font-weight: 800; text-transform: uppercase; letter-spacing: .04em; color: #fff; background: #DC2626; padding: .22rem .6rem; border-radius: 999px; }
        .j-time { font-family: 'Fredoka'; font-weight: 700; font-size: .84rem; color: var(--color-text); }
        .j-tutor { margin-left: auto; font-size: .76rem; color: #374151; display: inline-flex; align-items: center; gap: .35rem; }
        .j-tutor .dot { width: 8px; height: 8px; border-radius: 50%; background: var(--j-primary, var(--color-primary)); flex-shrink: 0; }
                .jadwal-note { text-align: center; margin-top: 1.8rem; color: rgba(15,23,42,.6); font-size: .9rem; }
        .jadwal-start {
            display: inline-flex; align-items: center; justify-content: center; gap: .55rem; flex-wrap: wrap;
            background: #fff; border: 1.5px solid #F5D0CE; color: var(--color-text);
            font-size: .92rem; padding: .72rem 1.25rem; border-radius: 999px;
            box-shadow: 0 8px 20px -12px rgba(127,29,29,.35);
            margin: 1.3rem auto 0; text-align: center; line-height: 1.5; max-width: 40rem;
        }
        .jadwal-start strong { color: var(--color-primary); }
        .jadwal-start .flag-ico { font-size: 1.05rem; line-height: 1; }

        .jadwal-table-wrap { max-width: 680px; margin: 0 auto; }
        .jadwal-table {
            width: 100%; border-collapse: collapse; border-spacing: 0;
            background: #fff; border: 1.5px solid #EDE7E0; border-radius: 1.25rem; overflow: hidden;
            box-shadow: 0 12px 30px -20px rgba(15,23,42,.18);
        }
        .jadwal-table thead th {
            background: #F7F4F0; color: #475569;
            font-size: .7rem; font-weight: 800; text-transform: uppercase; letter-spacing: .08em;
            padding: 1.05rem 1.4rem;
        }
        .jadwal-table thead th:first-child { border-radius: 1.25rem 0 0 0; }
        .jadwal-table thead th:last-child { border-radius: 0 1.25rem 0 0; }
        .jadwal-table tbody td { padding: 1.05rem 1.4rem; font-size: .95rem; color: var(--color-text); border: 0; }
        .jadwal-table th:first-child, .jadwal-table td:first-child { text-align: left; }
        .jadwal-table th:nth-child(2), .jadwal-table td:nth-child(2) { text-align: center; }
        .jadwal-table th:last-child, .jadwal-table td:last-child { text-align: left; }
        .jadwal-table tbody td:first-child { font-weight: 700; vertical-align: middle; }
        .jadwal-table .jt-time { font-family: 'Fredoka'; font-weight: 700; color: #475569; }

        /* ============ HARGA ============ */
        .harga-section { position: relative; overflow: hidden; background: #7F1D1D; }
        .harga-bg { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; }
        .harga-overlay {
            position: absolute; inset: 0; z-index: 1;
            background: rgba(127,29,29,.82);
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
            background: #FDE047; color: #7F1D1D; font-family: 'Fredoka'; font-weight: 700; font-size: .85rem;
            padding: .5rem 1.2rem; border-radius: 999px; white-space: nowrap;
            display: inline-flex; align-items: center; gap: .4rem;
        }
        .price-ribbon img { width: 18px; height: 18px; object-fit: contain; flex-shrink: 0; }
        .price-card h3 { color: var(--color-primary); margin: 1rem 0 .3rem; font-size: 1.4rem; }
        .price-card .pc-sub { color: rgba(15,23,42,.6); font-size: .9rem; margin: 0 0 1.2rem; }
        .price-old { color: rgba(15,23,42,.45); text-decoration: line-through; font-size: 1.15rem; }
        .price-main { font-family: 'Fredoka'; font-weight: 700; font-size: 3.4rem; line-height: 1; color: var(--color-primary); }
        .price-main small { font-size: 1.5rem; }
        .price-note { color: rgba(15,23,42,.6); font-size: .82rem; margin: .4rem 0 1.4rem; }
        .price-includes { list-style: none; padding: 0; margin: 0 0 1.6rem; text-align: left; display: grid; gap: .65rem; }
        .price-includes li { display: flex; gap: .7rem; align-items: flex-start; font-size: .92rem; color: rgba(15,23,42,.85); }
        .price-includes .check { width: 22px; height: 22px; border-radius: 50%; background: #DCFCE7; color: #16A34A; display: grid; place-items: center; font-size: .75rem; font-weight: 700; flex-shrink: 0; margin-top: 1px; }
        .countdown { display: flex; gap: .6rem; justify-content: center; margin: 1.2rem 0 1.5rem; }
        .cd-box { background: #FEF2F2; border: 1px solid #FECACA; border-radius: .8rem; padding: .55rem .7rem; min-width: 64px; }
        .cd-box b { font-family: 'Fredoka'; font-size: 1.3rem; color: var(--color-primary); display: block; line-height: 1.1; }
        .cd-box span { font-size: .62rem; text-transform: uppercase; letter-spacing: .06em; color: rgba(15,23,42,.55); }
        .cd-label { font-size: .8rem; color: rgba(15,23,42,.6); margin-bottom: .5rem; display: flex; align-items: center; justify-content: center; gap: .4rem; }
        .cd-label img { width: 17px; height: 17px; object-fit: contain; flex-shrink: 0; }
        .price-foot { font-size: .78rem; color: rgba(15,23,42,.55); margin-top: 1.2rem; }

        /* ============ FAQ ============ */
        .faq-list { max-width: 46rem; margin: 0 auto; display: grid; gap: .9rem; padding: 0 1rem; }
        .faq-item { background: #fff; border: 1px solid var(--color-neutral); border-radius: 1rem; }
        .faq-q { width: 100%; text-align: left; background: none; border: 0; padding: 1.1rem 1.3rem; display: flex; align-items: center; gap: 1rem; cursor: pointer; font-family: inherit; font-size: .98rem; font-weight: 600; color: var(--color-text); }
        .faq-q .chev { margin-left: auto; width: 30px; height: 30px; border-radius: 50%; background: #FEF2F2; color: var(--color-primary); display: grid; place-items: center; flex-shrink: 0; transition: transform .25s; }
        .faq-item.open .chev { transform: rotate(180deg); }
        .faq-a { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
        .faq-a-inner { padding: 0 1.3rem 1.15rem; font-size: .92rem; color: rgba(15,23,42,.7); line-height: 1.6; }

        /* ============ CTA BAWAH ============ */
        .cta-band { text-align: center; padding: 4.5rem 1.25rem; background: #FDE047; border-radius: 1.75rem; position: relative; overflow: hidden; }
        .cta-band h2 { color: #7F1D1D; margin: 0 0 .6rem; }
        .cta-band p { color: rgba(127,29,29,.85); max-width: 34rem; margin: 0 auto 1.5rem; }
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
        .float-top { right: 1.2rem; bottom: 1.2rem; width: 48px; height: 48px; background: rgba(220,38,38,.85); color: #fff; }
        .float-wa.show, .float-top.show { opacity: 1; pointer-events: auto; }
        .float-wa:hover, .float-top:hover { transform: scale(1.08); }
        .float-wa svg, .float-wa img { width: 28px; height: 28px; fill: #fff; }
        .float-wa img { fill: none; }
        .float-top svg { width: 20px; height: 20px; stroke: #fff; stroke-width: 3; }

        @media (max-width: 640px) {
            .price-main { font-size: 2.8rem; }
            .hero-banner { border-radius: 1.4rem; }
            .hero-grid { padding: 2rem 1rem; }
        }

        /* ============ DESIGN SYSTEM KEMERDEKAAN ============ */
        :root {
            --ds-radius: 1.25rem;
            --ds-radius-lg: 1.6rem;
            --ds-shadow: 0 10px 30px -12px rgba(127,29,29,.28);
            --ds-border: 1.5px solid #F3D0D0;
            --ds-red: #DC2626;
            --ds-red-dark: #7F1D1D;
            --ds-gold: #FDE047;
            --ds-cream: #FFF7F0;
            --ds-cream-light: #FFFDF8;
        }
        .stripe-divider { height: 12px; background: repeating-linear-gradient(90deg, var(--ds-red) 0 16px, #fff 16px 32px); opacity: .9; }
        .section-head h2 { position: relative; display: inline-block; padding-bottom: .7rem; }
        .section-head h2::after {
            content: ""; position: absolute; left: 50%; transform: translateX(-50%); bottom: 0;
            width: 96px; height: 9px; border-radius: 999px;
            background: repeating-linear-gradient(90deg, var(--ds-red) 0 12px, #fff 12px 24px);
            border: 1px solid #F6C6C6;
        }
        .section-head p { position: relative; margin-top: 1.1rem; }

        /* kartu seragam: radius, shadow, border tipis + aksen merah */
        .stat-card, .flow-card, .materi-card, .jadwal-card, .faq-item, .price-card {
            border-radius: var(--ds-radius);
        }
        .materi-card, .jadwal-card, .faq-item, .price-card {
            border: var(--ds-border);
            box-shadow: 0 6px 20px -14px rgba(127,29,29,.35);
        }
        .stat-card { border: var(--ds-border); }
        .flow-card { box-shadow: var(--ds-shadow); }
        .price-card { border-radius: var(--ds-radius-lg); box-shadow: 0 24px 60px -24px rgba(0,0,0,.45); }

        /* dekorasi: lingkaran transparan + titik di background section putih */
        .section { position: relative; }
        .section > .container { position: relative; z-index: 1; }
        .section::before {
            content: ""; position: absolute; width: 200px; height: 200px; border-radius: 50%;
            background: rgba(220,38,38,.05); top: -60px; right: -70px; z-index: 0; pointer-events: none;
        }
        .section::after {
            content: ""; position: absolute; width: 130px; height: 130px; border-radius: 50%;
            border: 3px dashed rgba(220,38,38,.18); bottom: -40px; left: -50px; z-index: 0; pointer-events: none;
        }
        .section h2, .section .text-h2 { position: relative; z-index: 1; }
        .section-head, .container > * { position: relative; z-index: 1; }

        /* animasi halus: countdown berkedip + kartu naik */
        @keyframes soft-pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
        .cd-box b { animation: soft-pulse 2.2s ease-in-out infinite; }
        .flow-card:hover, .materi-card:hover, .jadwal-card:hover, .faq-item:hover { transform: translateY(-5px); }
        .hero-badge { animation: soft-pulse 3s ease-in-out infinite; }
    </style>
</head>
<body class="theme-kids">

    <!-- ================= HEADER (mirip contoh Alhazen) ================= -->
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
        </div>
    </header>

    <!-- ================= HERO ================= -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-banner">
                <img src="https://lh3.googleusercontent.com/d/12SMxHglLto4FGmD0Ssxl7CBTX8MddMQp" alt="Cover game Tangkap Kerupuk tema kemerdekaan" class="hero-cover" loading="eager">
                <div class="hero-overlay"></div>

                <div class="hero-content">
                    <!-- <span class="hero-badge">🇮🇩 Special 17 Agustus, Belajar Coding 1 Hari</span> -->
                    <h1 class="hero-title text-h1">Buat Game <span class="hl">Tangkap Kerupuk</span> Tema Kemerdekaan!</h1>
                    <!-- <p class="hero-sub text-body">
                        Kelas coding 1 hari yang dirancang khusus untuk memfasilitasi rasa penasaran anak yang ingin mencoba membuat aplikasi atau game. Belajar logika sambil bikin game seru perlombaan 17-an!
                    </p> -->
                    <!-- <div class="hero-chips">
                        <span class="chip">⏱️ 1 Hari</span>
                        <span class="chip">💻 Online via Zoom</span>
                        <span class="chip">👨‍👩‍👧 Kelas Online</span>
                        <span class="chip">🏆 Hasil: Game Nyata</span>
                    </div> -->
                    <div class="hero-price">
                        <span class="price-strike">Rp 238.000</span>
                        <span class="price-now">Rp 17.826</span>
                        <span class="price-save">Hemat 93%!</span>
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
                <div class="stat-card stat-solid-red reveal">
                    <div class="stat-icon"><img src="https://lh3.googleusercontent.com/d/1dRGnpw0SVXKTGfTJN1AWggdNoASiswbH" alt="" loading="lazy"></div>
                    <div><b>1 Hari</b><span>Kelas intensif &amp; seru</span></div>
                </div>
                <div class="stat-card stat-solid-amber reveal">
                    <div class="stat-icon"><img src="https://lh3.googleusercontent.com/d/11w1j1KNpEqjJkHX1m_a1ZU8EIIRTajkt" alt="" loading="lazy"></div>
                    <div><b>Online via Zoom</b><span>Kelas online dari rumah</span></div>
                </div>
                <div class="stat-card stat-solid-pink reveal">
                    <div class="stat-icon"><img src="https://lh3.googleusercontent.com/d/10NxXk39h03z5upW6YyMhiGawk8lJ-iBL" alt="" loading="lazy"></div>
                    <div><b>Tanpa Coding Rumit</b><span>Pakai blok visual ramah anak</span></div>
                </div>
                <div class="stat-card stat-solid-green reveal">
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
                        <img src="https://lh3.googleusercontent.com/d/1fC5r-71eydaGWl2YxZX-RQSo7vpxKCxA" alt="Rekaman layar permainan Tangkap Kerupuk" class="sc-art" loading="lazy" onerror="this.remove()">
                        <div class="sc-sky" aria-hidden="true">
                            <div class="sc-sun"></div>
                            <div class="sc-cloud k1"></div>
                            <div class="sc-cloud k2"></div>
                            <div class="sc-pole"></div>
                            <div class="sc-flag"><div class="red"></div><div class="white"></div></div>
                            <div class="sc-kerupuk"></div>
                            <div class="sc-marble"></div>
                            <div class="sc-fire"></div>
                        </div>
                        <div class="sc-ground" aria-hidden="true">
                            <div class="sc-kid"></div>
                        </div>
                        <!-- <span class="showcase-caption"><img src="https://lh3.googleusercontent.com/d/1QB0x2MNGkBRYj2B0XPaa4bV_M5Eeu2kt" alt="" loading="lazy"> Hasil project: Game Tangkap Kerupuk</span> -->
                    </div>
                </div>

                <div class="tentang-text reveal">
                    <h2 class="text-h2">Apa itu Coding Experience Class?</h2>
                    <p>
                        <strong>Coding Experience Class</strong> adalah kelas <strong>belajar coding 1 hari</strong> yang dirancang khusus untuk memfasilitasi rasa penasaran anak yang ingin mencoba bagaimana cara membuat aplikasi atau game menggunakan coding.
                    </p>
                    <p>
                        Di kelas ini, anak belajar <strong>logika pemrograman</strong> sambil bikin game <strong>Tangkap Kerupuk</strong> bertema kemerdekaan. Satu hari cukup untuk merasakan serunya menjadi pembuat game!
                    </p>
                    <ul class="tentang-points">
                        <li><span class="dot"></span>Kelas online via Zoom, didampingi tutor ramah anak</li>
                        <li><span class="dot"></span>Belajar logika, variabel, kondisi &amp; perulangan dengan cara bermain</li>
                        <li><span class="dot"></span>Hasil project game siap ditunjukkan ke keluarga &amp; teman</li>
                        <li><span class="dot"></span>Modul, file project &amp; sertifikat dibawa pulang</li>
                    </ul>
                    <a href="#jadwal" class="btn btn-red">Amankan Kursi Anak Saya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CARA MAIN ================= -->
    <section id="cara-main" class="section flow-section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Gimana Serunya Game-nya?</h2>
                <p>Anak ikut lomba tangkap kerupuk khas 17-an! Tangkap kerupuk yang terbang dari depan &amp; jongkok untuk menghindari kelereng.</p>
            </div>

            <div class="flow-grid">
                <div class="flow-card fc-red reveal">
                    <img src="https://lh3.googleusercontent.com/d/15g8bAexF7Vzl-YQZc8rg3Gha1a5TMNDq" alt="" class="fc-emoji" loading="lazy">
                    <h3>Tangkap Kerupuk</h3>
                    <p>Kerupuk terbang dari depan menuju anak. Anak meloncat untuk menangkapnya dan meraih poin.</p>
                    <span class="fc-point">+10 Poin</span>
                </div>
                <div class="flow-card fc-gray reveal">
                    <img src="https://lh3.googleusercontent.com/d/1ukOGd5ZB44z1Y5YLLq360k7JvngqFXJN" alt="" class="fc-emoji" loading="lazy">
                    <h3>Jongkok &amp; Hindari</h3>
                    <p>Kelereng terbang dari depan. Anak jongkok untuk menghindarinya agar poin tidak berkurang.</p>
                    <span class="fc-point">Kena: −3 Poin</span>
                </div>
                <div class="flow-card fc-orange reveal">
                    <img src="https://lh3.googleusercontent.com/d/1VIdP3R9RgDXKVQca_Zyu14HwViVjarCt" alt="" class="fc-emoji" loading="lazy">
                    <h3>Jauhi Kelereng Api</h3>
                    <p>Rintangan paling cepat! Kelereng api terbang dari depan dengan sangat cepat, segera hindari!</p>
                    <span class="fc-point">Kena: −10 Poin</span>
                </div>
                <div class="flow-card fc-green reveal">
                    <img src="https://lh3.googleusercontent.com/d/1QB0x2MNGkBRYj2B0XPaa4bV_M5Eeu2kt" alt="" class="fc-emoji" loading="lazy">
                    <h3>Jadi Juara Lomba</h3>
                    <p>Kumpulkan poin terbanyak, raih skor tertinggi &amp; jadi juara lomba 17-an!</p>
                    <span class="fc-point">Skor Tertinggi</span>
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
                <div class="materi-card materi-theme-red reveal">
                    <div class="materi-num">1</div>
                    <h3>Logika &amp; Algoritma</h3>
                    <p>Anak belajar memecah masalah jadi langkah-langkah kecil, dasar berpikir komputasional.</p>
                </div>
                <div class="materi-card materi-theme-amber reveal">
                    <div class="materi-num">2</div>
                    <h3>Variabel &amp; Skor</h3>
                    <p>Bikin variabel skor, lalu lihat angkanya berubah saat menangkap kerupuk atau kena rintangan.</p>
                </div>
                <div class="materi-card materi-theme-pink reveal">
                    <div class="materi-num">3</div>
                    <h3>Kondisi (Jika &hellip; Maka)</h3>
                    <p>"Jika kena kelereng, maka poin berkurang". Anak belajar logika percabangan dengan cara main.</p>
                </div>
                <div class="materi-card materi-theme-sky reveal">
                    <div class="materi-num">4</div>
                    <h3>Perulangan</h3>
                    <p>Kerupuk dan kelereng terbang terus-menerus dari depan, anak belajar membuat perulangan untuk benda yang bergerak.</p>
                </div>
                <div class="materi-card materi-theme-green reveal">
                    <div class="materi-num">5</div>
                    <h3>Event &amp; Deteksi Tabrakan</h3>
                    <p>Tombol lompat, deteksi kerupuk tertangkap, dan tabrakan dengan kelereng, semua itu coding!</p>
                </div>
                <div class="materi-card materi-theme-orange reveal">
                    <div class="materi-num">6</div>
                    <h3>Kreativitas Tema Kemerdekaan</h3>
                    <p>Latar merah-putih, bendera, dan semangat 17-an, anak bebas berkreasi menghias game-nya sendiri.</p>
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
                <p>Kelas ini menggunakan <strong>Scratch</strong>, blok visual ramah anak, tanpa perlu pengalaman coding. Cukup lihat ketersediaan waktu, langsung pilih yang paling cocok!</p>
                <p class="jadwal-start reveal">Kelas berjalan mulai <strong>Senin, 10 Agustus 2026</strong> Pilih hari &amp; jam yang paling cocok di bawah ini!</p>
            </div>

            <div class="jadwal-table-wrap reveal">
                <table class="jadwal-table">
                    <thead>
                        <tr><th scope="col">Hari</th><th scope="col">Jam</th><th scope="col">Tutor</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Senin</td><td class="jt-time">18.30 WIB</td><td>Kak Hilyah</td></tr>
                        <tr><td>Selasa</td><td class="jt-time">19.00 WIB</td><td>Kak Refina</td></tr>
                        <tr><td>Rabu</td><td class="jt-time">14.00 WIB</td><td>Kak Miftah</td></tr>
                        <tr><td>Kamis</td><td class="jt-time">16.00 WIB</td><td>Kak Refina</td></tr>
                        <tr><td rowspan="3">Jumat</td><td class="jt-time">16.00 WIB</td><td>Kak Ardi</td></tr>
                        <tr><td class="jt-time" style="text-align: center;">18.30 WIB</td><td>Kak Ardi</td></tr>
                        <tr><td class="jt-time" style="text-align: center;">18.30 WIB</td><td>Kak Refina</td></tr>
                        <tr><td>Sabtu</td><td class="jt-time">13.00 WIB</td><td>Kak Miftah</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="jadwal-note reveal">Kuota tiap sesi terbatas, pilih jadwal &amp; daftar sekarang biar kursi aman!</p>
            <div style="text-align:center; margin-top:1.8rem;">
                <a href="https://goakal.com/alhazenacademy/coding-experience/2ak73/apply?promo=agustusmerdeka" target="_blank" rel="noopener" class="btn btn-red btn-big btn-shine shine-loop">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <!-- ================= HARGA ================= -->
    <section id="harga" class="section harga-section">
        <img src="https://lh3.googleusercontent.com/d/12SMxHglLto4FGmD0Ssxl7CBTX8MddMQp" alt="" class="harga-bg" loading="lazy" onerror="this.remove()">
        <div class="harga-overlay"></div>
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Harga Spesial Kemerdekaan</h2>
                <p>Promo terbatas menyambut 17 Agustus. Setelah kuota penuh, harga kembali normal.</p>
            </div>

            <div class="price-card reveal">
                <span class="price-ribbon"><img src="https://lh3.googleusercontent.com/d/1PO1NKjXbLepZsW4Jv4IWzvY5rdqX17hI" alt="" loading="lazy"> PROMO 17 AGUSTUS</span>
                <h3>Coding Experience Class</h3>
                <p class="pc-sub">1 Hari &bull; Online via Zoom</p>

                <div class="price-old">Rp 238.000</div>
                <div class="price-main"><small>Rp</small> 17.826</div>
                <p class="price-note">Hemat 93%, spesial merayakan hari kemerdekaan!</p>

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
                    <li><span class="check">✓</span>Hasil project: game Tangkap Kerupuk tema kemerdekaan</li>
                    <li><span class="check">✓</span>Modul &amp; file project dibawa pulang</li>
                    <li><span class="check">✓</span>Sertifikat keikutsertaan Coding Experience Class</li>
                </ul>

                <a href="#jadwal" class="btn btn-primary btn-big btn-shine shine-loop" style="width:100%;"> Amankan Kursi, Rp 17.826</a>
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
                    <div class="faq-a"><div class="faq-a-inner">Anak membawa pulang <strong>game Tangkap Kerupuk</strong> yang ia buat sendiri, modul pembelajaran, file project, serta <strong>sertifikat keikutsertaan</strong> Coding Experience Class.</div></div>
                </div>
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">Bagaimana cara mendaftar?<span class="chev">▼</span></button>
                    <div class="faq-a">
                        <div class="faq-a-inner">
                            Klik tombol <strong>"Daftar Sekarang"</strong>, kemudian kamu akan diarahkan ke formulir registrasi. Isi data lengkap dan jadwal yang dipilih. Lanjut ke proses pembayaran dan pendaftaran selesai. <br> Setelah itu Admin Alhazen Academy akan menghubungi Anda untuk kelanjutan kelasnya.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA BAWAH ================= -->
    <section class="section" style="padding-top:1rem;">
        <div class="container">
            <div class="cta-band reveal">
                <h2 class="text-h2">Yuk, jadi pembuat game cilik!</h2>
                <p>Kuota kelas kecil supaya anak dapat perhatian maksimal. Jangan sampai kehabisan di hari kemerdekaan!</p>
                <a href="#jadwal" class="btn btn-red btn-big btn-shine shine-loop">Daftar Coding Experience Class</a>
            </div>
        </div>
    </section>

<!-- ================= FOOTER (mirip contoh Alhazen) ================= -->
    <div class="stripe-divider" aria-hidden="true"></div>
    <footer class="overflow-hidden relative rounded-t-[56px] inset-0 bg-[#B91C1C]">
        <!-- Decorative icons background -->
        <img src="https://alhazen.academy/assets/kids/image-footer/bg-footer.webp" alt=""
            class="absolute bottom-0 left-0 w-full object-cover object-bottom opacity-95 pointer-events-none select-none"
            loading="lazy" decoding="async" />

        <!-- Footer content -->
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
                        <li>
                            <a href="https://alhazen.academy/kursus-coding-anak?tab=coding#program" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                Coding
                            </a>
                        </li>
                        <li>
                            <a href="https://alhazen.academy/program?tab=animation#program" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                Animation
                            </a>
                        </li>
                        <li>
                            <a href="https://alhazen.academy/program?tab=iot#program" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                IoT
                            </a>
                        </li>
                        <li>
                            <a href="https://alhazen.academy/kursus-roblox?tab=roblox#program" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                Roblox
                            </a>
                        </li>
                        <li>
                            <a href="https://alhazen.academy/program?tab=design#program" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                Design
                            </a>
                        </li>
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
                        <li>
                            <a href="https://alhazen.academy/program" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">
                                Program
                            </a>
                        </li>
                        <li>
                            <a href="https://alhazen.academy/event" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">
                                Event
                            </a>
                        </li>
                        <li>
                            <a href="https://alhazen.academy/artikel" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">
                                Artikel
                            </a>
                        </li>
                        <li>
                            <a href="https://alhazen.academy/tentang-kami" target="_blank" rel="noopener"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">
                                Tentang Kami
                            </a>
                        </li>
                    </ul>

                    <div class="pt-4">
                        <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Tersertifikasi</h4>
                        <div
                            class="group relative w-36 rounded-2xl bg-white p-3 overflow-hidden transition hover:ring-2 hover:ring-primary/20">
                            <a href="https://blockchain.stem.org/9faa3d1f-7825-4b4c-8967-525fa6eb08f0#gs.c2374s" target="_blank"
                                rel="noopener noreferrer" class="flex items-center justify-center">
                                <img alt="Badge Sertifikasi STEM.org" class="ct-image block" width="400"
                                    height="400" loading="lazy" decoding="async"
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
    <a href="https://wa.me/6281390000332?text=Halo%20MinZen!%20Saya%20ingin%20daftar%20Coding%20Experience%20Class%20(Game%20Tangkap%20Kerupuk)%20seharga%20Rp%2017.826." target="_blank" rel="noopener" class="float-wa" id="floatWa" aria-label="Chat WhatsApp">
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

            document.querySelectorAll('[data-mm]').forEach(function (sub) {
                var btn = sub.querySelector('.mm-drop-btn');
                btn.addEventListener('click', function () {
                    var open = sub.classList.toggle('open');
                    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
                });
            });

            var dds = document.querySelectorAll('[data-dd]');
            function closeAllDd() {
                dds.forEach(function (dd) {
                    dd.classList.remove('open');
                    dd.querySelector('.dd-btn').setAttribute('aria-expanded', 'false');
                });
            }
            dds.forEach(function (dd) {
                dd.querySelector('.dd-btn').addEventListener('click', function (e) {
                    e.stopPropagation();
                    var isOpen = dd.classList.contains('open');
                    closeAllDd();
                    if (!isOpen) {
                        dd.classList.add('open');
                        dd.querySelector('.dd-btn').setAttribute('aria-expanded', 'true');
                    }
                });
            });
            document.addEventListener('click', function (e) {
                if (!e.target.closest('[data-dd]')) closeAllDd();
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeAllDd();
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

            /* ================= COUNTDOWN 17 AGUSTUS ================= */
            var target = new Date('2026-08-17T00:00:00+07:00').getTime();
            var cdD = document.getElementById('cdD'), cdH = document.getElementById('cdH'),
                cdM = document.getElementById('cdM'), cdS = document.getElementById('cdS');
            function tick() {
                var diff = target - Date.now();
                if (diff <= 0) { cdD.textContent = '00'; cdH.textContent = '00'; cdM.textContent = '00'; cdS.textContent = '00'; return; }
                var s = Math.floor(diff / 1000);
                cdD.textContent = String(Math.floor(s / 86400)).padStart(2, '0');
                cdH.textContent = String(Math.floor((s % 86400) / 3600)).padStart(2, '0');
                cdM.textContent = String(Math.floor((s % 3600) / 60)).padStart(2, '0');
                cdS.textContent = String(s % 60).padStart(2, '0');
            }
            tick();
            setInterval(tick, 1000);

            })();
    </script>
</body>
</html>
