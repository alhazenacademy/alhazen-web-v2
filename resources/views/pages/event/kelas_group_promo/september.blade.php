<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelas Promo Group Coding & Roblox 99K - Alhazen Academy</title>
    <meta name="description" content="Kelas coding dan Roblox untuk anak SD-SMA. Pilih jalur Coding atau Roblox Game Development, 90 menit live via Zoom. Mulai Rp99.000.">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="Kelas Promo Group Coding & Roblox 99K - Alhazen Academy">
    <meta property="og:description" content="Lanjutan dari Coding Experience Class. Pilih jalur Coding atau Roblox, mulai Rp99.000.">
    <meta property="og:image" content="{{ asset('assets/custom/kelas_group_promo/og-image.jpeg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kelas Promo Group Coding & Roblox 99K - Alhazen Academy">
    <meta name="twitter:description" content="Lanjutan dari Coding Experience Class. Pilih jalur Coding atau Roblox, mulai Rp99.000.">
    <meta name="twitter:image" content="{{ asset('assets/custom/kelas_group_promo/og-image.jpeg') }}">
    <link rel="icon" href="https://alhazen.academy/assets/logo-new.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#059669',
                        coding: '#059669',
                        roblox: '#6366F1'
                    }
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
            --color-coding: #059669;
            --color-roblox: #6366F1;
            --color-coding-light: #ECFDF5;
            --color-roblox-light: #EEF2FF;
            --color-roblox-deep: #312E81;
            --color-roblox-night: #1E1B4B;
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
        .nav-links a {
            font-size: .95rem; color: rgba(15, 23, 42, .65); background: none; border: 0; padding: 0;
            display: inline-flex; align-items: center; gap: .25rem; cursor: pointer;
            font-family: inherit; transition: color .2s; white-space: nowrap;
        }
        .nav-links a:hover { color: var(--color-text); }

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
        /* Split 2 kolom, full-bleed — layout berbeda dari CEC (banner card) */
        .hero {
            position: relative; overflow: hidden;
            padding: 7rem 0 4.5rem;
            background: linear-gradient(135deg, #1E1B4B 0%, #4338CA 55%, #059669 100%);
        }
        .hero-grid { display: grid; gap: 2.5rem; align-items: center; grid-template-columns: 1fr; }
        @media (min-width: 1024px) { .hero-grid { grid-template-columns: 1.15fr 1fr; gap: 4rem; } }
        .hero-copy { text-align: left; }
        .hero-copy .hero-price, .hero-copy .hero-ctas { justify-content: flex-start; }
        .hero-panel { display: grid; gap: 1rem; }

        .hero-path-card {
            display: flex; align-items: center; gap: 1rem;
            background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.18);
            border-radius: 1rem; padding: 1.25rem 1.4rem; color: #fff;
            backdrop-filter: blur(6px);
            transition: transform .3s, background .3s;
        }
        .hero-path-card:hover { transform: translateY(-4px); background: rgba(255,255,255,.13); }
        .hpc-coding { border-left: 4px solid #34D399; }
        .hpc-roblox { border-left: 4px solid #A5B4FC; }
        .hero-path-card .hpc-icon {
            width: 48px; height: 48px; border-radius: .75rem; flex-shrink: 0;
            display: grid; place-items: center; font-size: 1.5rem; background: rgba(255,255,255,.14);
        }
        .hero-path-card h3 { margin: 0 0 .15rem; font-size: 1.05rem; color: #fff; }
        .hero-path-card p { margin: 0; font-size: .82rem; color: rgba(255,255,255,.8); line-height: 1.5; }
        .hero-path-card .hpc-price {
            margin-left: auto; flex-shrink: 0; font-family: 'Poppins'; font-weight: 700; font-size: .8rem;
            padding: .35rem .7rem; border-radius: 9999px; background: rgba(255,255,255,.14); color: #FBBF24;
        }
        @media (max-width: 640px) { .hero-path-card .hpc-price { display: none; } }

        .hero-badge {
            display: inline-flex; align-items: center; gap: .5rem;
            background: rgba(15,23,42,.45); border: 1px solid rgba(255,255,255,.35);
            color: #fff; font-size: .8rem; font-weight: 600; padding: .45rem .9rem;
            border-radius: 9999px; backdrop-filter: blur(4px);
        }
        .hero-chips { display: flex; flex-wrap: wrap; gap: .6rem; margin-bottom: 1.5rem; justify-content: flex-start; }
        .chip {
            display: inline-flex; align-items: center; gap: .4rem;
            background: rgba(15,23,42,.45); color: #fff; font-size: .82rem; font-weight: 500;
            padding: .45rem .85rem; border-radius: .375rem; border: 1px solid rgba(255,255,255,.3);
            backdrop-filter: blur(4px);
        }
        .hero-copy .hero-title { font-size: clamp(2rem, 3.8vw, 2.9rem); }
        .hero-title { color: #fff; font-weight: 700; margin: 1.4rem 0 .9rem; }
        .hero-title .hl { color: #FBBF24; }
        .hero-sub { color: rgba(255,255,255,.96); max-width: 34rem; margin: 0 0 1.5rem; font-weight: 300; }
        .hero-price { display: flex; align-items: baseline; gap: .8rem; margin-bottom: 1.4rem; flex-wrap: wrap; justify-content: center; }
        .price-tag {
            background: rgba(255,255,255,.14); border: 1px solid rgba(255,255,255,.3);
            padding: .5rem 1rem; border-radius: .5rem; text-align: center;
        }
        .price-tag-label { color: rgba(255,255,255,.8); font-size: .75rem; font-weight: 600; text-transform: uppercase; letter-spacing: .05em; }
        .price-tag-value { color: #FBBF24; font-family: 'Poppins'; font-weight: 800; font-size: 1.6rem; line-height: 1.2; }
        .hero-ctas { display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; }
        .btn {
            display: inline-flex; align-items: center; justify-content: center; gap: .5rem;
            padding: .9rem 1.8rem; border-radius: .5rem; font-weight: 600; cursor: pointer;
            border: 0; font-family: inherit; transition: transform .2s, background .2s;
        }
        .btn-primary { background: #FBBF24; color: #312E81; }
        .btn-primary:hover { transform: scale(1.05); background: #FCD34D; }
        .btn-ghost { background: rgba(255,255,255,.14); color: #fff; border: 1px solid rgba(255,255,255,.4); }
        .btn-ghost:hover { transform: scale(1.05); background: rgba(255,255,255,.24); }
        .btn-green { background: var(--color-primary); color: #fff; }
        .btn-green:hover { transform: scale(1.05); background: var(--color-accent); }
        .btn-indigo { background: #6366F1; color: #fff; }
        .btn-indigo:hover { transform: scale(1.05); background: #4F46E5; }
        .btn-big { padding: 1.05rem 2.2rem; font-size: 1.05rem; }

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
        .stat-card b { display: block; font-family: 'Poppins'; font-weight: 700; font-size: 1.05rem; line-height: 1.2; }
        .stat-card span { font-size: .78rem; color: rgba(15,23,42,.6); }
        .stat-solid-green { background: #059669; border-color: #059669; color: #fff; }
        .stat-solid-amber { background: #F59E0B; border-color: #F59E0B; color: #78350F; }
        .stat-solid-sky { background: #0284C7; border-color: #0284C7; color: #fff; }
        .stat-solid-indigo { background: #6366F1; border-color: #6366F1; color: #fff; }
        .stat-solid-green .stat-icon, .stat-solid-sky .stat-icon, .stat-solid-indigo .stat-icon { background: rgba(255,255,255,.22); }
        .stat-solid-amber .stat-icon { background: rgba(120,53,15,.14); }
        .stat-solid-green b, .stat-solid-sky b, .stat-solid-indigo b { color: #fff; }
        .stat-solid-amber b { color: #78350F; }
        .stat-solid-green span, .stat-solid-sky span, .stat-solid-indigo span { color: rgba(255,255,255,.95); }
        .stat-solid-amber span { color: rgba(120,53,15,.85); }
        .stat-solid-green:hover { background: #047857; border-color: #047857; color: #fff; }
        .stat-solid-amber:hover { background: #D97706; border-color: #D97706; }
        .stat-solid-amber:hover b, .stat-solid-amber:hover span { color: #fff; }
        .stat-solid-sky:hover { background: #0369A1; border-color: #0369A1; color: #fff; }
        .stat-solid-indigo:hover { background: #4F46E5; border-color: #4F46E5; color: #fff; }
        .stat-solid-green:hover .stat-icon, .stat-solid-amber:hover .stat-icon, .stat-solid-sky:hover .stat-icon, .stat-solid-indigo:hover .stat-icon { background: rgba(255,255,255,.28); }
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
        .showcase {
            position: relative; z-index: 1; border-radius: .75rem; overflow: hidden;
            border: 6px solid #fff; background: linear-gradient(135deg, #312E81 0%, #4F46E5 45%, #059669 100%);
            aspect-ratio: 4 / 3;
            display: flex; align-items: center; justify-content: center; gap: 2rem;
            padding: 2rem;
        }
        .showcase-item {
            display: flex; flex-direction: column; align-items: center; gap: .5rem;
            background: rgba(255,255,255,.15); border-radius: .75rem; padding: 1.5rem 1.2rem;
            backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,.25);
            color: #fff; font-weight: 700; font-size: .95rem;
            transition: transform .3s;
        }
        .showcase-item:hover { transform: scale(1.05); }
        .showcase-item .si-icon { font-size: 2.5rem; }

        /* ============ PILIHAN JALUR ============ */
        .jalur-section { background: #F0FDF4; }
        .jalur-grid { display: grid; gap: 2rem; }
        @media (min-width: 1024px) { .jalur-grid { grid-template-columns: 1fr 1fr; } }
        .jalur-card {
            background: #fff; border-radius: 1.25rem; overflow: hidden;
            border: 2px solid var(--color-neutral); transition: transform .3s, box-shadow .3s;
        }
        .jalur-card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px -16px rgba(0,0,0,.2); }
        .jalur-card-header {
            padding: 1.5rem; color: #fff; display: flex; align-items: center; gap: 1rem;
        }
        .jalur-card-header .jc-icon { font-size: 2rem; }
        .jalur-card-header h3 { margin: 0; font-size: 1.3rem; color: #fff; }
        .jalur-card-header .jc-sub { font-size: .85rem; opacity: .9; font-weight: 400; }
        .jalur-card.jc-coding .jalur-card-header { background: var(--color-coding); }
        .jalur-card.jc-roblox .jalur-card-header { background: var(--color-roblox); }
        .jalur-card.jc-coding { border-color: #A7F3D0; }
        .jalur-card.jc-roblox { border-color: #C7D2FE; }
        .jalur-card-body { padding: 1.5rem; }
        .jalur-card-body h4 { font-size: .85rem; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: rgba(15,23,42,.5); margin: 0 0 .6rem; }
        .jalur-card-body ul { list-style: none; padding: 0; margin: 0 0 1.2rem; }
        .jalur-card-body li { display: flex; gap: .5rem; align-items: flex-start; font-size: .92rem; color: rgba(15,23,42,.8); padding: .3rem 0; }
        .jalur-card-body li::before { content: "•"; font-weight: 700; flex-shrink: 0; }
        .jc-coding .jalur-card-body li::before { color: var(--color-coding); }
        .jc-roblox .jalur-card-body li::before { color: var(--color-roblox); }
        .jalur-card-footer { padding: 0 1.5rem 1.5rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: .8rem; }
        .jalur-price { font-family: 'Poppins'; font-weight: 800; font-size: 1.3rem; color: var(--color-text); }
        .jalur-price small { font-size: .8rem; font-weight: 500; color: rgba(15,23,42,.5); }

        /* ============ MATERI ============ */
        .materi-subhead { text-align: center; margin-bottom: 1.5rem; }
        .materi-subhead h3 { margin: 0 0 .3rem; font-size: 1.2rem; }
        .materi-subhead p { margin: 0; font-size: .9rem; color: rgba(15,23,42,.6); }
        .materi-grid { display: grid; gap: 1.2rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .materi-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .materi-grid { grid-template-columns: repeat(3, 1fr); } }
        .materi-card {
            background: #fff; border: 1px solid var(--color-neutral); border-radius: 1rem;
            padding: 1.4rem; transition: transform .25s; position: relative; overflow: hidden;
        }
        .materi-card:hover { transform: translateY(-5px); }
        .materi-num {
            width: 40px; height: 40px; border-radius: .375rem; display: grid; place-items: center;
            font-family: 'Poppins'; font-weight: 800; font-size: 1.1rem; margin-bottom: .8rem;
        }
        .materi-card h4 { margin: 0 0 .4rem; font-size: 1.05rem; }
        .materi-card p { margin: 0; font-size: .85rem; color: rgba(15,23,42,.7); line-height: 1.5; }
        .materi-card .m-tag { display: inline-block; margin-top: .7rem; font-size: .72rem; font-weight: 600; padding: .25rem .6rem; border-radius: .25rem; }
        .materi-theme-green { background: #059669; border-color: #059669; color: #fff; }
        .materi-theme-emerald { background: #10B981; border-color: #10B981; color: #fff; }
        .materi-theme-amber { background: #F59E0B; border-color: #F59E0B; color: #fff; }
        .materi-theme-sky { background: #0284C7; border-color: #0284C7; color: #fff; }
        .materi-theme-pink { background: #DB2777; border-color: #DB2777; color: #fff; }
        .materi-theme-orange { background: #EA580C; border-color: #EA580C; color: #fff; }
        .materi-theme-indigo { background: #6366F1; border-color: #6366F1; color: #fff; }
        .materi-theme-violet { background: #8B5CF6; border-color: #8B5CF6; color: #fff; }
        .materi-theme-purple { background: #7C3AED; border-color: #7C3AED; color: #fff; }
        .materi-theme-blue { background: #3B82F6; border-color: #3B82F6; color: #fff; }
        .materi-theme-green p, .materi-theme-emerald p, .materi-theme-amber p, .materi-theme-sky p,
        .materi-theme-pink p, .materi-theme-orange p, .materi-theme-indigo p, .materi-theme-violet p,
        .materi-theme-purple p, .materi-theme-blue p { color: rgba(255,255,255,.92); }
        .materi-theme-green h4, .materi-theme-emerald h4, .materi-theme-amber h4, .materi-theme-sky h4,
        .materi-theme-pink h4, .materi-theme-orange h4, .materi-theme-indigo h4, .materi-theme-violet h4,
        .materi-theme-purple h4, .materi-theme-blue h4 { color: #fff; }
        .materi-theme-green .materi-num, .materi-theme-emerald .materi-num, .materi-theme-amber .materi-num,
        .materi-theme-sky .materi-num, .materi-theme-pink .materi-num, .materi-theme-orange .materi-num,
        .materi-theme-indigo .materi-num, .materi-theme-violet .materi-num, .materi-theme-purple .materi-num,
        .materi-theme-blue .materi-num { color: #fff; background: rgba(255,255,255,.24); }
        .materi-theme-green .m-tag { background: #fff; color: #064E3B; }
        .materi-theme-emerald .m-tag { background: #fff; color: #064E3B; }
        .materi-theme-amber .m-tag { background: #fff; color: #78350F; }
        .materi-theme-pink .m-tag { background: #fff; color: #831843; }
        .materi-theme-orange .m-tag { background: #fff; color: #7C2D12; }
        .materi-theme-indigo .m-tag { background: #fff; color: #312E81; }
        .materi-theme-violet .m-tag { background: #fff; color: #4C1D95; }
        .materi-theme-purple .m-tag { background: #fff; color: #581C87; }
        .materi-theme-blue .m-tag { background: #fff; color: #1E3A5F; }

        /* ============ JADWAL ============ */
        .jadwal-section { background: #F0FDF4; }
        .jadwal-grid { display: grid; gap: 1.2rem; grid-template-columns: 1fr; }
        @media (min-width: 640px) { .jadwal-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .jadwal-grid { grid-template-columns: repeat(3, 1fr); } }
        .jadwal-card {
            background: #fff; border: 1px solid var(--color-neutral); border-radius: 1rem;
            padding: 1.5rem; transition: transform .25s, box-shadow .25s;
        }
        .jadwal-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px -12px rgba(0,0,0,.15); }
        .jadwal-card .jc-kelas {
            font-family: 'Poppins'; font-weight: 700; font-size: 1.05rem; color: var(--color-primary);
            margin-bottom: .8rem; display: flex; align-items: center; gap: .5rem;
        }
        .jadwal-card .jc-detail {
            display: flex; flex-direction: column; gap: .45rem;
            font-size: .9rem; color: rgba(15,23,42,.7);
        }
        .jadwal-card .jc-detail span { display: flex; align-items: center; gap: .5rem; }
        .jadwal-card .jc-detail .jc-label { font-weight: 600; color: rgba(15,23,42,.5); min-width: 70px; }
        .jadwal-card .jc-status {
            display: inline-flex; align-items: center; gap: .35rem; margin-top: .8rem;
            font-size: .8rem; font-weight: 600; color: #059669; background: #ECFDF5;
            padding: .3rem .7rem; border-radius: .25rem;
        }
        .jadwal-note { text-align: center; margin-top: 1.5rem; color: rgba(15,23,42,.55); font-size: .88rem; }

        /* ============ HARGA ============ */
        .harga-section { position: relative; overflow: hidden; background: #1E1B4B; }
        .harga-overlay {
            position: absolute; inset: 0; z-index: 1;
            background:
                radial-gradient(36rem 18rem at 12% 8%, rgba(99,102,241,.25), transparent 62%),
                radial-gradient(32rem 18rem at 88% 92%, rgba(5,150,105,.22), transparent 60%);
        }
        .harga-section .container { position: relative; z-index: 2; }
        .harga-section .section-head h2 { color: #fff; }
        .harga-section .section-head p { color: rgba(255,255,255,.92); }
        .harga-section .section-head h2::after {
            background: linear-gradient(90deg, #A5B4FC, #34D399);
        }
        .harga-grid { display: grid; gap: 2rem; max-width: 70rem; margin: 0 auto; }
        @media (min-width: 768px) { .harga-grid { grid-template-columns: 1fr 1fr; } }
        .price-card {
            background: #fff; border-radius: 1.75rem;
            padding: 2.4rem 2rem; text-align: center; position: relative;
            transition: transform .3s;
        }
        .price-card:hover { transform: translateY(-6px); }
        .price-card.pb-highlight { border: 2px solid #FBBF24; }
        .price-ribbon {
            position: absolute; top: -16px; left: 50%; transform: translateX(-50%) rotate(-2deg);
            background: #FBBF24; color: #312E81; font-family: 'Poppins'; font-weight: 700; font-size: .85rem;
            padding: .5rem 1.2rem; border-radius: .375rem; white-space: nowrap;
            display: inline-flex; align-items: center; gap: .4rem;
        }
        .price-card h3 { color: var(--color-primary); margin: 1rem 0 .3rem; font-size: 1.4rem; }
        .price-card .pc-sub { color: rgba(15,23,42,.6); font-size: .9rem; margin: 0 0 1.2rem; }
        .price-main { font-family: 'Poppins'; font-weight: 800; font-size: 3.4rem; line-height: 1; color: var(--color-primary); }
        .price-main small { font-size: 1.5rem; }
        .price-note { color: rgba(15,23,42,.6); font-size: .82rem; margin: .4rem 0 1.4rem; }
        .price-includes { list-style: none; padding: 0; margin: 0 0 1.6rem; text-align: left; display: grid; gap: .65rem; }
        .price-includes li { display: flex; gap: .7rem; align-items: flex-start; font-size: .92rem; color: rgba(15,23,42,.85); }
        .price-includes .check { width: 22px; height: 22px; border-radius: .375rem; background: #D1FAE5; color: #059669; display: grid; place-items: center; font-size: .75rem; font-weight: 700; flex-shrink: 0; margin-top: 1px; }

        /* Countdown (opsional) */
        .countdown { display: flex; gap: .6rem; justify-content: center; margin: 1.2rem 0 1.5rem; }
        .cd-box { background: #ECFDF5; border: 1px solid #A7F3D0; border-radius: .375rem; padding: .55rem .7rem; min-width: 64px; }
        .cd-box b { font-family: 'Poppins'; font-weight: 800; font-size: 1.3rem; color: var(--color-primary); display: block; line-height: 1.1; }
        .cd-box span { font-size: .62rem; text-transform: uppercase; letter-spacing: .06em; color: rgba(15,23,42,.55); }

        /* ============ FAQ ============ */
        .faq-list { max-width: 46rem; margin: 0 auto; display: grid; gap: .9rem; padding: 0 1rem; }
        .faq-item { background: #fff; border: 1px solid var(--color-neutral); border-radius: 1rem; }
        .faq-q { width: 100%; text-align: left; background: none; border: 0; padding: 1.1rem 1.3rem; display: flex; align-items: center; gap: 1rem; cursor: pointer; font-family: inherit; font-size: .98rem; font-weight: 600; color: var(--color-text); }
        .faq-q .chev { margin-left: auto; width: 30px; height: 30px; border-radius: .375rem; background: #ECFDF5; color: var(--color-primary); display: grid; place-items: center; flex-shrink: 0; transition: transform .25s; }
        .faq-item.open .chev { transform: rotate(180deg); }
        .faq-a { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
        .faq-a-inner { padding: 0 1.3rem 1.15rem; font-size: .92rem; color: rgba(15,23,42,.7); line-height: 1.6; }

        /* ============ CTA BAND ============ */
        .cta-band { text-align: center; padding: 4.5rem 1.25rem; border-radius: 1rem; position: relative; overflow: hidden; color: #fff; background: linear-gradient(120deg, #059669 0%, #4F46E5 60%, #312E81 100%); }
        .cta-band h2 { color: #fff; margin: 0 0 .6rem; }
        .cta-band p { color: rgba(255,255,255,.9); max-width: 34rem; margin: 0 auto 1.5rem; }
        .cta-band .btn-green { background: #FBBF24; color: #312E81; }
        .cta-band .btn-green:hover { background: #FCD34D; }
        .cta-band::before, .cta-band::after {
            content: "🎮"; position: absolute; font-size: 3.25rem; opacity: .45; filter: saturate(.9);
            animation: floaty 5s ease-in-out infinite; pointer-events: none;
        }
        .cta-band::before { content: "💻"; top: 1.2rem; left: 2rem; }
        .cta-band::after { bottom: 1.2rem; right: 2rem; animation-delay: 1.8s; }

        /* ============ FOOTER ============ */
        .site-footer { position: relative; overflow: hidden; border-radius: 1rem 1rem 0 0; background: #1E1B4B; color: #fff; }
        .site-footer .footer-wave {
            position: absolute; bottom: 0; left: 0; width: 100%; object-fit: cover; object-position: bottom;
            opacity: .95; pointer-events: none; user-select: none;
        }
        .site-footer .social-btn {
            display: inline-flex; align-items: center; justify-content: center;
            width: 2.5rem; height: 2.5rem; border-radius: 9999px; background: rgba(255,255,255,.1);
            transition: background .2s; box-shadow: inset 0 0 0 1px rgba(255,255,255,.1);
        }
        .site-footer .social-btn:hover { background: rgba(255,255,255,.2); }
        .site-footer .social-btn img { width: 2rem; height: auto; object-fit: contain; user-select: none; transition: transform .2s; }
        .site-footer .social-btn:hover img { transform: scale(1.05); }
        .site-footer h4 { font-family: 'Poppins'; font-size: 1.25rem; font-weight: 500; }
        .site-footer a { transition: color .2s; }

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
        }

        /* ============ DESIGN SYSTEM ============ */
        :root {
            --ds-radius: .5rem;
            --ds-radius-lg: .75rem;
            --ds-shadow: 0 4px 16px -8px rgba(5,150,105,.25);
            --ds-border: 1px solid #D1FAE5;
        }
        /* Dual-tone garis: identitas halaman ini (bukan motif CEC) */
        .stripe-divider { height: 10px; border-radius: 9999px; max-width: 72rem; margin: 0 auto; background: linear-gradient(90deg, var(--color-coding) 0%, #34D399 30%, var(--color-roblox) 70%, #A5B4FC 100%); opacity: .95; }
        .section-head h2 { position: relative; display: inline-block; padding-bottom: .7rem; }
        .section-head h2::after {
            content: ""; position: absolute; left: 50%; transform: translateX(-50%); bottom: 0;
            width: 96px; height: 6px; border-radius: 9999px;
            background: linear-gradient(90deg, var(--color-coding), var(--color-roblox));
        }
        .section-head p { position: relative; margin-top: 1.1rem; }

        .section { position: relative; }
        .section > .container { position: relative; z-index: 1; }
        /* Watermark tematik: </> & 🎮 — pengganti dekorasi lingkaran ala CEC */
        .section::before {
            content: "</>"; position: absolute; top: 2.5rem; right: 3rem; z-index: 0; pointer-events: none;
            font-family: 'Poppins'; font-weight: 800; font-size: 7rem; line-height: 1;
            color: transparent; -webkit-text-stroke: 1.5px rgba(5,150,105,.14);
            letter-spacing: -.04em;
        }
        .section::after {
            content: "🎮"; position: absolute; bottom: 2rem; left: 2.5rem; z-index: 0; pointer-events: none;
            font-size: 5.5rem; line-height: 1; opacity: .1; filter: saturate(.8);
        }
        .jalur-section::after, .jadwal-section::after { content: "🎮"; opacity: .08; }
        .section h2, .section .text-h2 { position: relative; z-index: 1; }
        .section-head, .container > * { position: relative; z-index: 1; }

        @keyframes floaty { 0%, 100% { transform: translateY(0) rotate(0); } 50% { transform: translateY(-16px) rotate(8deg); } }
        @keyframes soft-pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
        .jalur-card:hover, .materi-card:hover, .jadwal-card:hover, .faq-item:hover { transform: translateY(-5px); }
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
                <span class="logo-fallback"><img src="https://lh3.googleusercontent.com/d/1z8V0bDG0PYTB9oXrS7jBvB9OkfSHsBf_" alt="" loading="lazy"> Kelas Group Promo</span>
            </a>

            <div class="nav-desktop">
                <ul class="nav-links">
                    <li><a href="#tentang">Tentang Program</a></li>
                    <li><a href="#jalur">Pilihan Jalur</a></li>
                    <li><a href="#jadwal">Jadwal</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>

                <a href="#harga" class="nav-btn-primary">Daftar Kelas</a>
            </div>

            <button class="nav-burger" id="burgerBtn" aria-label="Buka menu" aria-expanded="false">☰</button>
        </nav>

        <div class="mobile-menu" id="mobileMenu">
            <div class="mm-title">Menu</div>
            <hr>
            <a class="mm-item" href="#tentang">Tentang Program</a>
            <a class="mm-item" href="#jalur">Pilihan Jalur</a>
            <a class="mm-item" href="#jadwal">Jadwal</a>
            <a class="mm-item" href="#faq">FAQ</a>

            <a href="#harga" class="mm-cta">Daftar Kelas</a>
            <a href="https://apps.alhazen.academy/#/login" class="mm-login">Masuk / Login</a>
        </div>
    </header>

    <!-- ================= HERO ================= -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-copy">
                    <span class="hero-badge">🎓 Lanjutan dari Coding Experience Class · Mulai 14 September 2026</span>
                    <h1 class="hero-title">Pilih Jalurmu: <span class="hl">Coding</span> atau <span class="hl">Roblox</span></h1>
                    <p class="hero-sub text-body">
                        Kelas coding & Roblox untuk anak SD–SMA. Pilih jalur yang sesuai minat dan jenjang anak — Coding (logika & pemrograman) atau Roblox Game Development (membuat game sendiri).
                    </p>
                    <div class="hero-chips">
                        <span class="chip">⏱️ 90 Menit / Sesi</span>
                        <span class="chip">💻 Online via Zoom</span>
                        <span class="chip">🏆 Sertifikat + Rekaman</span>
                    </div>
                    <div class="hero-price">
                        <div class="price-tag">
                            <div class="price-tag-label">Satuan</div>
                            <div class="price-tag-value">Rp99.000</div>
                        </div>
                        <div class="price-tag">
                            <div class="price-tag-label">Bundling</div>
                            <div class="price-tag-value">Rp149.000</div>
                        </div>
                    </div>
                    <div class="hero-ctas">
                        <a href="#harga" class="btn btn-primary btn-big btn-shine shine-loop">Daftar Sekarang</a>
                        <a href="#jalur" class="btn btn-ghost btn-big">Lihat Pilihan Jalur</a>
                    </div>
                </div>

                <div class="hero-panel">
                    <div class="hero-path-card hpc-coding">
                        <div class="hpc-icon">💻</div>
                        <div>
                            <h3>Jalur Coding</h3>
                            <p>Code.org · Scratch · Python &amp; Web Dev</p>
                        </div>
                        <span class="hpc-price">Rp99K</span>
                    </div>
                    <div class="hero-path-card hpc-roblox">
                        <div class="hpc-icon">🎮</div>
                        <div>
                            <h3>Jalur Roblox</h3>
                            <p>Roblox Studio · Desain level · Scripting Lua</p>
                        </div>
                        <span class="hpc-price">Rp99K</span>
                    </div>
                    <div class="hero-path-card">
                        <div class="hpc-icon">🎁</div>
                        <div>
                            <h3>Bundling Hemat</h3>
                            <p>Coding + Roblox dalam satu paket</p>
                        </div>
                        <span class="hpc-price">Rp149K</span>
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
                    <div class="stat-icon">⏱️</div>
                    <div><b>90 Menit / Sesi</b><span>Kelas intensif &amp; seru</span></div>
                </div>
                <div class="stat-card stat-solid-amber reveal">
                    <div class="stat-icon">💻</div>
                    <div><b>Online via Zoom</b><span>Belajar dari mana saja</span></div>
                </div>
                <div class="stat-card stat-solid-sky reveal">
                    <div class="stat-icon">🎯</div>
                    <div><b>2 Pilihan Jalur</b><span>Coding atau Roblox</span></div>
                </div>
                <div class="stat-card stat-solid-indigo reveal">
                    <div class="stat-icon">🏆</div>
                    <div><b>Sertifikat + Rekaman</b><span>Project dibawa pulang</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TENTANG ================= -->
    <section id="tentang" class="section">
        <div class="container">
            <div class="tentang-grid">
                <div class="showcase-wrap reveal">
                    <div class="showcase">
                        <div class="showcase-item">
                            <span class="si-icon">💻</span>
                            <span>Coding</span>
                        </div>
                        <div class="showcase-item">
                            <span class="si-icon">🎮</span>
                            <span>Roblox</span>
                        </div>
                    </div>
                </div>

                <div class="tentang-text reveal">
                    <h2 class="text-h2">Apa itu Kelas Group Coding &amp; Roblox?</h2>
                    <p>
                        <strong>Kelas Group Coding &amp; Roblox 99K</strong> adalah program <strong>lanjutan</strong> dari Coding Experience Class 19K. Jika di kelas 19K anak baru merasakan "rasanya ngoding" lewat 1 project singkat, di kelas ini anak mulai <strong>memilih jalur</strong> yang lebih serius sesuai minat dan jenjangnya.
                    </p>
                    <p>
                        Anak bisa memilih fokus <strong>Coding</strong> (belajar logika &amp; bahasa pemrograman sesuai jenjang) atau <strong>Roblox Game Development</strong> (membuat game sendiri lewat Roblox Studio) — sebagai jembatan sebelum masuk ke program reguler Alhazen Academy.
                    </p>
                    <ul class="tentang-points">
                        <li><span class="dot"></span>Lanjutan dari Coding Experience Class 19K</li>
                        <li><span class="dot"></span>Kelas group live via Zoom, didampingi tutor berpengalaman</li>
                        <li><span class="dot"></span>Pilih jalur Coding (sesuai jenjang) atau Roblox Game Development</li>
                        <li><span class="dot"></span>Sertifikat, rekaman, dan materi dibawa pulang</li>
                    </ul>
                    <a href="#jalur" class="btn btn-green">Pilih Jalur Saya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STRIPE DIVIDER ================= -->
    <div class="stripe-divider" aria-hidden="true"></div>

    <!-- ================= PILIHAN JALUR ================= -->
    <section id="jalur" class="section jalur-section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Pilih Jalur yang Sesuai Minat Anak</h2>
                <p>Dua jalur pengembangan, satu tujuan: membangun kemampuan berpikir komputasional dan kreativitas anak melalui coding.</p>
            </div>

            <div class="jalur-grid">
                <!-- CODING CARD -->
                <div class="jalur-card jc-coding reveal">
                    <div class="jalur-card-header">
                        <span class="jc-icon">💻</span>
                        <div>
                            <h3>Coding</h3>
                            <span class="jc-sub">Logika &amp; Pemrograman</span>
                        </div>
                    </div>
                    <div class="jalur-card-body">
                        <h4>Jenjang</h4>
                        <ul>
                            <li><strong>P123</strong> — Kelas 1-3 SD (Code.org)</li>
                            <li><strong>P456</strong> — Kelas 4-6 SD (Scratch)</li>
                            <li><strong>Junior/Senior</strong> — SMP/SMA (Python &amp; Web Dev)</li>
                        </ul>

                        <h4>Yang Dipelajari</h4>
                        <ul>
                            <li>Logika dasar: variabel, kondisi, perulangan</li>
                            <li>Bloc-based coding (drag &amp; drop)</li>
                            <li>Scratch programming &amp; animasi</li>
                            <li>Python basics &amp; web development</li>
                        </ul>

                        <h4>Tutor</h4>
                        <ul>
                            <li>Kak Annisa (P123) — Kamis 16.00</li>
                            <li>Kak Hilyah (P456) — Kamis 16.30</li>
                            <li>Kak Miftah (Junior/Senior) — Selasa 15.30</li>
                        </ul>
                    </div>
                    <div class="jalur-card-footer">
                        <div class="jalur-price">Rp99.000 <small>/ sesi</small></div>
                        <a href="#harga" class="btn btn-green">Pilih Coding</a>
                    </div>
                </div>

                <!-- ROBLOX CARD -->
                <div class="jalur-card jc-roblox reveal">
                    <div class="jalur-card-header">
                        <span class="jc-icon">🎮</span>
                        <div>
                            <h3>Roblox Game Development</h3>
                            <span class="jc-sub">Membuat Game Sendiri</span>
                        </div>
                    </div>
                    <div class="jalur-card-body">
                        <h4>Jenjang</h4>
                        <ul>
                            <li><strong>Seluruh jenjang</strong> — SD sampai SMA</li>
                        </ul>

                        <h4>Yang Dipelajari</h4>
                        <ul>
                            <li>Roblox Studio: interface &amp; tools</li>
                            <li>Desain level &amp; terrain</li>
                            <li>Scripting dasar (Lua)</li>
                            <li>Logika interaksi objek &amp; scoring</li>
                        </ul>

                        <h4>Tutor</h4>
                        <ul>
                            <li>Kak Adam — Senin 15.30 / Rabu 16.00</li>
                            <li>Kak Husna — Selasa 18.30</li>
                        </ul>
                    </div>
                    <div class="jalur-card-footer">
                        <div class="jalur-price">Rp99.000 <small>/ sesi</small></div>
                        <a href="#harga" class="btn btn-indigo">Pilih Roblox</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= MATERI CODING ================= -->
    <section id="materi-coding" class="section">
        <div class="container">
            <div class="materi-subhead reveal">
                <h3 class="text-h3" style="color: var(--color-coding);">Materi Coding</h3>
                <p>Materi disesuaikan dengan jenjang — mulai dari bloc-based hingga Python &amp; web development.</p>
            </div>

            <div class="materi-grid">
                <div class="materi-card materi-theme-green reveal">
                    <div class="materi-num">1</div>
                    <h4>Logika Dasar</h4>
                    <p>Variabel, kondisi, perulangan — fondasi berpikir komputasional.</p>
                    <span class="m-tag">P123</span>
                </div>
                <div class="materi-card materi-theme-emerald reveal">
                    <div class="materi-num">2</div>
                    <h4>Bloc-based Coding</h4>
                    <p>Drag &amp; drop blok visual untuk membuat program sederhana.</p>
                    <span class="m-tag">P123</span>
                </div>
                <div class="materi-card materi-theme-amber reveal">
                    <div class="materi-num">3</div>
                    <h4>Scratch Programming</h4>
                    <p>Animasi &amp; interaksi karakter dengan Scratch.</p>
                    <span class="m-tag">P456</span>
                </div>
                <div class="materi-card materi-theme-sky reveal">
                    <div class="materi-num">4</div>
                    <h4>Event &amp; Control Flow</h4>
                    <p>Tombol, sensor, gerakan — mengontrol program secara interaktif.</p>
                    <span class="m-tag">P456</span>
                </div>
                <div class="materi-card materi-theme-pink reveal">
                    <div class="materi-num">5</div>
                    <h4>Python Basics</h4>
                    <p>Syntax, variabel, fungsi — pengenalan bahasa pemrograman nyata.</p>
                    <span class="m-tag">Junior/Senior</span>
                </div>
                <div class="materi-card materi-theme-orange reveal">
                    <div class="materi-num">6</div>
                    <h4>Web Development</h4>
                    <p>HTML, CSS, JavaScript dasar — membangun halaman web pertama.</p>
                    <span class="m-tag">Junior/Senior</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= MATERI ROBLOX ================= -->
    <section id="materi-roblox" class="section" style="background: #F5F3FF;">
        <div class="container">
            <div class="materi-subhead reveal">
                <h3 class="text-h3" style="color: var(--color-roblox);">Materi Roblox Game Development</h3>
                <p>Belajar game development sungguhan — dari desain level hingga scripting.</p>
            </div>

            <div class="materi-grid" style="max-width: 56rem; margin: 0 auto;">
                <div class="materi-card materi-theme-indigo reveal">
                    <div class="materi-num">1</div>
                    <h4>Kenalan Roblox Studio</h4>
                    <p>Interface, tools, dan navigasi di Roblox Studio.</p>
                    <span class="m-tag">Semua Jenjang</span>
                </div>
                <div class="materi-card materi-theme-violet reveal">
                    <div class="materi-num">2</div>
                    <h4>Desain Level</h4>
                    <p>Membuat world, terrain, dan menempatkan objek di game.</p>
                    <span class="m-tag">Semua Jenjang</span>
                </div>
                <div class="materi-card materi-theme-purple reveal">
                    <div class="materi-num">3</div>
                    <h4>Scripting Dasar</h4>
                    <p>Belajar Lua programming untuk mengontrol objek dalam game.</p>
                    <span class="m-tag">Semua Jenjang</span>
                </div>
                <div class="materi-card materi-theme-blue reveal">
                    <div class="materi-num">4</div>
                    <h4>Game Logic</h4>
                    <p>Interaksi objek, scoring system, dan mekanisme game.</p>
                    <span class="m-tag">Semua Jenjang</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= JADWAL ================= -->
    <section id="jadwal" class="section jadwal-section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Jadwal Kelas</h2>
                <p>Pilih jadwal sesuai paket yang kamu ambil — 1 jadwal untuk satuan, 2 jadwal untuk bundling.</p>
            </div>

            <div class="jadwal-grid">
                <!-- Coding P123 -->
                <div class="jadwal-card reveal">
                    <div class="jc-kelas">📅 Coding Anak (P123)</div>
                    <div class="jc-detail">
                        <span><span class="jc-label">📚 Materi</span> Code.org</span>
                        <span><span class="jc-label">👩‍🏫 Tutor</span> Kak Annisa</span>
                        <span><span class="jc-label">🕓 Jadwal</span> Kamis, 16.00–17.30 WIB</span>
                    </div>
                    <div class="jc-status">✅ Tersedia</div>
                </div>

                <!-- Coding P456 -->
                <div class="jadwal-card reveal">
                    <div class="jc-kelas">📅 Coding Anak (P456)</div>
                    <div class="jc-detail">
                        <span><span class="jc-label">📚 Materi</span> Scratch</span>
                        <span><span class="jc-label">👩‍🏫 Tutor</span> Kak Hilyah</span>
                        <span><span class="jc-label">🕓 Jadwal</span> Kamis, 16.30–18.00 WIB</span>
                    </div>
                    <div class="jc-status">✅ Tersedia</div>
                </div>

                <!-- Coding Junior/Senior -->
                <div class="jadwal-card reveal">
                    <div class="jc-kelas">📅 Coding Junior/Senior</div>
                    <div class="jc-detail">
                        <span><span class="jc-label">📚 Materi</span> Python &amp; Web Dev</span>
                        <span><span class="jc-label">👨‍🏫 Tutor</span> Kak Miftah</span>
                        <span><span class="jc-label">👲 Jadwal</span> Selasa, 15.30–17.00 WIB</span>
                    </div>
                    <div class="jc-status">✅ Tersedia</div>
                </div>

                <!-- Roblox Kak Adam -->
                <div class="jadwal-card reveal">
                    <div class="jc-kelas">📅 Roblox (Kak Adam)</div>
                    <div class="jc-detail">
                        <span><span class="jc-label">📚 Materi</span> Roblox Studio</span>
                        <span><span class="jc-label">👨‍🏫 Tutor</span> Kak Adam</span>
                        <span><span class="jc-label">🕜 Jadwal</span> Senin 15.30 / Rabu 16.00 WIB</span>
                    </div>
                    <div class="jc-status">✅ Tersedia</div>
                </div>

                <!-- Roblox Kak Husna -->
                <div class="jadwal-card reveal">
                    <div class="jc-kelas">📅 Roblox (Kak Husna)</div>
                    <div class="jc-detail">
                        <span><span class="jc-label">📚 Materi</span> Roblox Studio</span>
                        <span><span class="jc-label">👩‍🏫 Tutor</span> Kak Husna</span>
                        <span><span class="jc-label">🕡 Jadwal</span> Selasa, 18.30–20.00 WIB</span>
                    </div>
                    <div class="jc-status">✅ Tersedia</div>
                </div>
            </div>

            <p class="jadwal-note reveal">Jadwal dapat berubah sewaktu-waktu menyesuaikan kuota. Hubungi kami untuk info terbaru.</p>
        </div>
    </section>

    <!-- ================= HARGA ================= -->
    <section id="harga" class="section harga-section">
        <div class="harga-overlay"></div>
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Pilih Paket Kamu</h2>
                <p>Satuan untuk fokus satu jalur, bundling untuk pengalaman lebih lengkap.</p>
            </div>

            <div class="harga-grid">
                <!-- SATUAN -->
                <div class="price-card reveal">
                    <span class="price-ribbon">⭐ Satuan</span>
                    <h3>Coding <em>atau</em> Roblox</h3>
                    <p class="pc-sub">Pilih salah satu jalur</p>
                    <div class="price-main"><small>Rp</small>99.000</div>
                    <p class="price-note">per sesi (90 menit)</p>
                    <ul class="price-includes">
                        <li><span class="check">✅</span> 1 sesi 90 menit live via Zoom</li>
                        <li><span class="check">✅</span> Pilih 1 jadwal sesuai minat</li>
                        <li><span class="check">✅</span> Sertifikat elektronik</li>
                        <li><span class="check">✅</span> Rekaman kelas</li>
                        <li><span class="check">✅</span> Materi pembelajaran</li>
                    </ul>
                    <a href="https://goakal.com/alhazenacademy/kelas-group-promo/satuan" class="btn btn-green btn-big btn-shine shine-loop" target="_blank" rel="noopener">Pilih Satuan</a>
                </div>

                <!-- BUNDLING -->
                <div class="price-card pb-highlight reveal">
                    <span class="price-ribbon">🌟 Paling Hemat</span>
                    <h3>Coding <em>dan</em> Roblox</h3>
                    <p class="pc-sub">Pilih kedua jalur sekaligus</p>
                    <div class="price-main"><small>Rp</small>149.000</div>
                    <p class="price-note">untuk 2 sesi (90 menit masing-masing)</p>
                    <ul class="price-includes">
                        <li><span class="check">✅</span> 2 sesi 90 menit live via Zoom</li>
                        <li><span class="check">✅</span> Pilih 2 jadwal (beda kelas)</li>
                        <li><span class="check">✅</span> Sertifikat elektronik</li>
                        <li><span class="check">✅</span> Rekaman kelas</li>
                        <li><span class="check">✅</span> Materi pembelajaran</li>
                        <li><span class="check">✅</span> Hemat Rp49.000</li>
                    </ul>
                    <a href="https://goakal.com/alhazenacademy/kelas-group-promo/bundling" class="btn btn-primary btn-big btn-shine shine-loop" target="_blank" rel="noopener">Pilih Bundling ⭐</a>
                </div>
            </div>

            {{-- Countdown: opsional — uncomment jika ingin menampilkan countdown timer --}}
            {{-- <div class="countdown reveal" style="margin-top: 2rem;">
                <div class="cd-box"><b id="cd-days">--</b><span>Hari</span></div>
                <div class="cd-box"><b id="cd-hours">--</b><span>Jam</span></div>
                <div class="cd-box"><b id="cd-mins">--</b><span>Menit</span></div>
                <div class="cd-box"><b id="cd-secs">--</b><span>Detik</span></div>
            </div> --}}
        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section id="faq" class="section">
        <div class="container">
            <div class="section-head reveal">
                <h2 class="text-h2">Pertanyaan Umum</h2>
            </div>

            <div class="faq-list">
                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">
                        Apa bedanya kelas 99K dengan Coding Experience Class 19K?
                        <span class="chev">▾</span>
                    </button>
                    <div class="faq-a">
                        <div class="faq-a-inner">
                            Kelas 19K dirancang sebagai pengalaman pertama — anak membuat 1 game sederhana dalam 1 sesi untuk merasakan "rasanya ngoding". Kelas 99K lebih mendalam: anak memilih jalur Coding atau Roblox sesuai minat dan jenjangnya, dengan materi yang lebih terarah sebagai jembatan ke program reguler.
                        </div>
                    </div>
                </div>

                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">
                        Anak saya belum ikut kelas 19K, bisakah langsung daftar 99K?
                        <span class="chev">▾</span>
                    </button>
                    <div class="faq-a">
                        <div class="faq-a-inner">
                            Bisa! Meskipun kelas 99K adalah lanjutan dari 19K, kami tetap menerima peserta baru yang sudah punya minat awal terhadap coding atau Roblox dan siap langsung memilih jalur.
                        </div>
                    </div>
                </div>

                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">
                        Bagaimana cara memilih paket satuan vs bundling?
                        <span class="chev">▾</span>
                    </button>
                    <div class="faq-a">
                        <div class="faq-a-inner">
                            <strong>Satuan (Rp99.000):</strong> Pilih 1 jalur (Coding ATAU Roblox) dan 1 jadwal.<br>
                            <strong>Bundling (Rp149.000):</strong> Pilih kedua jalur (Coding DAN Roblox) dengan 2 jadwal berbeda. Lebih hemat Rp49.000!
                        </div>
                    </div>
                </div>

                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">
                        Apakah bisa ganti jadwal setelah daftar?
                        <span class="chev">▾</span>
                    </button>
                    <div class="faq-a">
                        <div class="faq-a-inner">
                            Hubungi admin via WhatsApp untuk perubahan jadwal. Perubahan bergantung pada kuota kelas yang tersedia.
                        </div>
                    </div>
                </div>

                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">
                        Berapa lama durasi kelas?
                        <span class="chev">▾</span>
                    </button>
                    <div class="faq-a">
                        <div class="faq-a-inner">
                            90 menit per sesi, live via Zoom. Anak belajar langsung dengan tutor berpengalaman secara interaktif.
                        </div>
                    </div>
                </div>

                <div class="faq-item reveal">
                    <button class="faq-q" aria-expanded="false">
                        Apakah dapat sertifikat?
                        <span class="chev">▾</span>
                    </button>
                    <div class="faq-a">
                        <div class="faq-a-inner">
                            Ya! Sertifikat elektronik diberikan setelah mengikuti kelas sampai selesai. Selain itu, anak juga mendapatkan rekaman kelas dan materi pembelajaran.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA BAND ================= -->
    <section class="section">
        <div class="container">
            <div class="cta-band reveal">
                <h2 class="text-h2">Siap Pilih Jalur Coding atau Roblox?</h2>
                <p>Mulai dari Rp99.000. Daftar sekarang dan lanjutkan momentum belajar coding anak!</p>
                <a href="#harga" class="btn btn-green btn-big btn-shine shine-loop">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="site-footer overflow-hidden relative rounded-t-2xl">
        <img src="https://alhazen.academy/assets/kids/image-footer/bg-footer.webp" alt=""
            class="footer-wave"
            loading="lazy" decoding="async" />

        <div class="relative mx-auto max-w-7xl px-5 sm:px-8 py-12 sm:py-16 text-white">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-y-12 md:gap-x-12 xl:gap-x-16">

                <!-- Logo & About -->
                <div class="md:col-span-3 space-y-3 md:space-y-6">
                    <img src="https://alhazen.academy/assets/foot-logo-new.webp" alt="Alhazen Academy" class="h-14 w-auto" loading="lazy"
                        decoding="async" onerror="this.src='https://lh3.googleusercontent.com/d/1_g1o1KBK2dGI9hIJVm0vJx7COTdlDuUC';">
                    <div class="flex items-center gap-3">
                        <a href="https://www.facebook.com/alhazenacademy" target="_blank" rel="noopener"
                            class="social-btn" aria-label="Facebook">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-fb.png" alt="Facebook icon"
                                loading="lazy" decoding="async" />
                        </a>
                        <a href="https://instagram.com/alhazenacademy" target="_blank" rel="noopener"
                            class="social-btn" aria-label="Instagram">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-ig.png" alt="Instagram icon"
                                loading="lazy" decoding="async" />
                        </a>
                        <a href="https://www.tiktok.com/@alhazenacademy" target="_blank" rel="noopener"
                            class="social-btn" aria-label="TikTok">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-tkt.png" alt="TikTok icon"
                                loading="lazy" decoding="async" />
                        </a>
                        <a href="https://www.linkedin.com/company/alhazen-academy" target="_blank" rel="noopener"
                            class="social-btn" aria-label="LinkedIn">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-lkn.png" alt="LinkedIn icon"
                                loading="lazy" decoding="async" />
                        </a>
                        <a href="https://www.youtube.com/@alhazenacademy" target="_blank" rel="noopener"
                            class="social-btn" aria-label="YouTube">
                            <img src="https://alhazen.academy/assets/kids/index-footer/icon-ytb.png" alt="YouTube icon"
                                loading="lazy" decoding="async" />
                        </a>
                    </div>
                    <p class="text-white/90 text-sm max-w-sm leading-relaxed text-justify">PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.</p>
                </div>

                <!-- Program -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 class="text-xl font-medium">Program</h4>
                    <ul class="space-y-2">
                        <li><a href="https://alhazen.academy/kursus-coding-anak?tab=coding#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Coding</a></li>
                        <li><a href="https://alhazen.academy/program?tab=animation#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Animation</a></li>
                        <li><a href="https://alhazen.academy/program?tab=iot#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">IoT</a></li>
                        <li><a href="https://alhazen.academy/kursus-roblox?tab=roblox#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Roblox</a></li>
                        <li><a href="https://alhazen.academy/program?tab=design#program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">Design</a></li>
                    </ul>

                    <div class="mt-6">
                        <h4 class="text-xl font-medium mb-4">Hubungi Kami</h4>
                        <ul class="space-y-2 text-white/90 text-sm">
                            <li><a href="tel:+6281390000332" class="hover:underline hover:text-white">+62-813-90000-332</a></li>
                            <li><a href="mailto:info@alhazen.academy" class="hover:underline hover:text-white">info@alhazen.academy</a></li>
                            <li><a href="https://www.alhazen.academy" target="_blank" rel="noopener" class="hover:underline hover:text-white">www.alhazen.academy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Lainnya -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 class="text-xl font-medium">Lainnya</h4>
                    <ul class="space-y-2">
                        <li><a href="https://alhazen.academy/program" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Program</a></li>
                        <li><a href="https://alhazen.academy/event" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Event</a></li>
                        <li><a href="{{ route('coding-experience') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Coding Experience Class</a></li>
                        <li><a href="https://alhazen.academy/artikel" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Artikel</a></li>
                        <li><a href="https://alhazen.academy/tentang-kami" target="_blank" rel="noopener" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Tentang Kami</a></li>
                    </ul>

                    <div class="pt-4">
                        <h4 class="text-xl font-medium mb-4">Tersertifikasi</h4>
                        <div class="group relative w-36 rounded-2xl bg-white p-3 overflow-hidden transition hover:ring-2 hover:ring-white/40">
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
                <div class="md:col-span-3 md:pl-6 space-y-2">
                    <h4 class="text-xl font-medium mb-4">Kantor Pusat</h4>
                    <a href="https://maps.google.com/?q=Plaza+Kaha%2C+Jl.+KH+Abdullah+Syafei+No.21+C%2C+Bukit+Duri%2C+Kec.+Tebet%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12840" target="_blank" rel="noopener"
                        class="text-sm text-white/90 leading-relaxed underline">Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840</a>
                </div>
            </div>

            <div class="relative border-t border-white/20 mt-10">
                <div class="mx-auto max-w-7xl px-5 sm:px-8 py-4 text-center text-xs sm:text-sm text-white/80">
                    © {{ date('Y') }} <strong>PT. Alhazen Global Teknologi</strong>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= FLOATING BUTTONS ================= -->
    <a href="https://wa.me/{{ $salesPhone ?? '6281234567890' }}?text=Halo%20Kak%2C%20saya%20tertarik%20dengan%20Kelas%20Group%20Coding%20%26%20Roblox%2099K" class="float-wa" id="floatWa" target="_blank" rel="noopener" aria-label="Chat WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.132 6.744 3.054 9.374L1.054 31.25l6.118-1.97C9.868 31.104 12.848 32 16.004 32 24.83 32 32 24.822 32 16S24.83 0 16.004 0zm9.338 22.608c-.39 1.096-1.932 2.006-3.164 2.27-.844.18-1.946.322-5.656-1.216-4.746-1.966-7.796-6.79-8.034-7.104-.23-.314-1.886-2.506-1.886-4.78 0-2.272 1.196-3.386 1.62-3.844.39-.42.924-.54 1.228-.54h.89c.284 0 .668-.108 1.044.796.39.934 1.324 3.222 1.44 3.456.116.234.194.504.038.818-.156.314-.234.512-.462.79-.228.278-.48.62-.684.832-.228.234-.464.486-.196.954.268.468 1.19 1.96 2.554 3.176 1.754 1.562 3.232 2.046 3.7 2.274.468.228.742.19 1.012-.114.27-.304 1.156-1.344 1.464-1.804.304-.46.614-.384 1.036-.23.426.154 2.702 1.272 3.166 1.5.464.23.774.346.888.536.116.19.116 1.096-.274 2.192z"/></svg>
    </a>

    <button class="float-top" id="floatTop" aria-label="Kembali ke atas">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path d="M18 15l-6-6-6 6"/></svg>
    </button>

    <!-- ================= SCRIPTS ================= -->
    <script>
        /* ── Mobile menu ── */
        const burger = document.getElementById('burgerBtn');
        const menu = document.getElementById('mobileMenu');
        burger.addEventListener('click', () => {
            const open = menu.classList.toggle('open');
            burger.setAttribute('aria-expanded', open);
        });
        document.addEventListener('click', e => {
            if (!burger.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.remove('open');
                burger.setAttribute('aria-expanded', 'false');
            }
        });
        menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
            menu.classList.remove('open');
            burger.setAttribute('aria-expanded', 'false');
        }));

        /* ── FAQ accordion ── */
        document.querySelectorAll('.faq-q').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.faq-item');
                const answer = item.querySelector('.faq-a');
                const isOpen = item.classList.contains('open');

                document.querySelectorAll('.faq-item.open').forEach(openItem => {
                    openItem.classList.remove('open');
                    openItem.querySelector('.faq-a').style.maxHeight = null;
                    openItem.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
                });

                if (!isOpen) {
                    item.classList.add('open');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        });

        /* ── Reveal on scroll ── */
        const revealEls = document.querySelectorAll('.reveal');
        const revealObs = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); revealObs.unobserve(e.target); } });
        }, { threshold: 0.12 });
        revealEls.forEach(el => revealObs.observe(el));

        /* ── Floating buttons ── */
        const floatWa = document.getElementById('floatWa');
        const floatTop = document.getElementById('floatTop');
        window.addEventListener('scroll', () => {
            const show = window.scrollY > 300;
            floatWa.classList.toggle('show', show);
            floatTop.classList.toggle('show', show);
        });
        floatTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        {{-- Countdown: opsional — uncomment jika countdown diaktifkan --}}
        {{-- const target = new Date('2026-09-14T00:00:00+07:00').getTime();
        function updateCountdown() {
            const now = Date.now();
            const diff = Math.max(0, target - now);
            const d = Math.floor(diff / 86400000);
            const h = Math.floor((diff % 86400000) / 3600000);
            const m = Math.floor((diff % 3600000) / 60000);
            const s = Math.floor((diff % 60000) / 1000);
            document.getElementById('cd-days').textContent = d;
            document.getElementById('cd-hours').textContent = h;
            document.getElementById('cd-mins').textContent = m;
            document.getElementById('cd-secs').textContent = s;
        }
        updateCountdown();
        setInterval(updateCountdown, 1000); --}}
    </script>
</body>
</html>
