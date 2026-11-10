<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <title>Santri dan Teknologi - Setelah Lulus Dari Pesantren, Anak Siap Jadi Apa? | Alhazen Academy</title>
    <link rel="icon" href="{{ asset('assets/logo-new.webp') }}" type="image/x-icon">
    <meta name="description"
        content="Kajian bersama Al Minhaj dan Alhazen Academy: Setelah Lulus Dari Pesantren, Anak Siap Jadi Apa? Jumat, 27 November 2026, 08.00-09.30 WIB via Zoom. Narasumber Ustadz Raehanul Bahraen.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Santri dan Teknologi - Setelah Lulus Dari Pesantren, Anak Siap Jadi Apa?">
    <meta property="og:description"
        content="Kajian bersama Al Minhaj dan Alhazen Academy. Menyiapkan generasi yang kuat iman, adab, dan melek teknologi. Jumat, 27 November 2026 - 08.00-09.30 WIB - Zoom.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/custom/santri-dan-teknologi/poster.jpeg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Santri dan Teknologi - Setelah Lulus Dari Pesantren, Anak Siap Jadi Apa?">
    <meta name="twitter:description"
        content="Kajian bersama Al Minhaj dan Alhazen Academy. Jumat, 27 November 2026 - 08.00-09.30 WIB - Zoom.">
    <meta name="twitter:image" content="{{ asset('assets/custom/santri-dan-teknologi/Cover.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Geist+Mono:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --bg: #ffffff;
            --surface: #F2E8D8;
            --white: #494640;
            --silver: #4D5442;
            --muted: #77743A;
            --border: rgba(85, 85, 31, 0.16);
            --glass: rgba(242, 232, 216, 0.55);
            --gradient: linear-gradient(135deg, #A89A35 0%, #D0B95A 50%, #F2E8D8 100%);
            --serif: 'DM Serif Display', serif;
            --mono: 'Geist Mono', monospace;
            --sans: 'Inter', sans-serif;
            --ease: cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            background: var(--bg);
            color: var(--white);
            font-family: var(--sans);
            font-weight: 400;
            overflow-x: hidden;
        }

        /* Noise texture */

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 100;
            opacity: 0.05;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.5'/%3E%3C/svg%3E");
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button,
        input {
            font: inherit;
        }

        ul,
        ol {
            list-style: none;
        }

        .container {
            width: 92%;
            max-width: 1800px;
            margin: auto;
        }

        .mono {
            font-family: var(--mono);
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-size: 11px;
        }

        .muted {
            color: var(--muted);
        }

        .silver-text {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .serif {
            font-family: var(--serif);
            font-style: italic;
            font-weight: 400;
        }

        /* Navigation */

        .navbar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 32px 4%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 20;
        }

        .brand {
            font-family: var(--mono);
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.3em;
        }

        .nav-links {
            display: flex;
            align-items: center;
            border: 1px solid var(--border);
            border-radius: 50px;
            padding: 5px;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
        }

        .nav-links a {
            padding: 12px 20px;
            font-family: var(--mono);
            font-size: 11px;
            letter-spacing: 0.1em;
            color: #4D5442;
            transition: .3s;
        }

        .nav-links a:hover {
            color: #494640;
        }

        .silver-btn {
            background: var(--gradient);
            color: #494640 !important;
            border: none;
            padding: 13px 25px;
            border-radius: 12px;
            font-family: var(--mono);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            cursor: pointer;
            transition: transform .3s var(--ease),
                box-shadow .3s var(--ease);
        }

        .silver-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(168, 154, 53, 0.35);
        }

        /* Hero */

        .hero {
            min-height: 900px;
            min-height: 100svh;
            padding: 150px 0 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .hero-card {
            width: 100%;
            min-height: 650px;
            border-radius: 4rem;
            border: 1px solid var(--border);
            background: linear-gradient(to top, rgba(242, 232, 216, .5), transparent 45%),
            linear-gradient(rgba(255, 255, 255, .58), rgba(255, 255, 255, .58)),
            url("{{ asset('assets/custom/santri-dan-teknologi/Cover.png') }}") center/cover no-repeat;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 70px 20px;
            position: relative;
            overflow: hidden;
        }

        .hero-card::before {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            border: 1px solid rgba(85, 85, 31, .08);
            box-shadow:
                0 0 0 70px rgba(216, 199, 173, .25),
                0 0 0 140px rgba(216, 199, 173, .15);
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .hero-logo {
            display: block;
            width: min(400px, 70%);
            height: auto;
            margin: 0 auto 38px;
            filter: drop-shadow(0 2px 10px rgba(255, 255, 255, .55));
        }

        .hero h1 {
            font-family: var(--serif);
            font-size: clamp(44px, 8vw, 120px);
            font-weight: 400;
            line-height: .95;
            letter-spacing: -0.04em;
            margin-bottom: 35px;
        }

        .hero h1 span {
            display: block;
        }

        .hero-description {
            max-width: 560px;
            margin: 0 auto 40px;
            color: #4D5442;
            font-size: 17px;
            font-weight: 500;
            line-height: 1.85;
        }

        .hero-actions {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        /* Metadata */

        .metadata {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            max-width: 700px;
            width: 90%;
            margin: 60px auto 0;
            border-top: 1px solid var(--border);
            padding-top: 25px;
        }

        .metadata-item {
            display: flex;
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }

        .metadata-item:not(:last-child) {
            border-right: 1px solid var(--border);
        }

        .metadata-item strong {
            font-family: var(--mono);
            font-size: 13px;
            font-weight: 500;
            letter-spacing: .08em;
        }

        .metadata-item span {
            color: var(--muted);
            font-family: var(--mono);
            font-size: 10px;
            letter-spacing: .15em;
        }

        /* Countdown */

        .countdown-section {
            text-align: center;
            padding: 100px 0;
            border-bottom: 1px solid var(--border);
        }

        .section-label {
            color: var(--muted);
            margin-bottom: 25px;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 35px;
        }

        .countdown-item {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .countdown-item strong {
            font-family: var(--serif);
            font-size: clamp(55px, 9vw, 100px);
            font-weight: 400;
            line-height: 1;
        }

        .countdown-item span {
            font-family: var(--mono);
            color: var(--muted);
            font-size: 10px;
            letter-spacing: .2em;
        }

        .countdown-divider {
            font-family: var(--serif);
            font-size: 60px;
            color: #D8C7AD;
        }

        /* Centered prose section (replaces registration) */

        .prose-section {
            padding: 110px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            border-bottom: 1px solid var(--border);
        }

        .prose-section h2 {
            font-size: clamp(45px, 7vw, 90px);
            line-height: .95;
            letter-spacing: -.03em;
            margin-bottom: 30px;
            font-family: var(--serif);
            font-weight: 400;
        }

        .prose-section .prose {
            max-width: 660px;
            color: #4D5442;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.95;
            display: grid;
            gap: 20px;
            text-align: center;
            margin-top: 10px;
            margin-inline: auto;
        }

        /* Section headings */

        .section-heading {
            margin-bottom: 55px;
        }

        .section-heading h2 {
            font-family: var(--serif);
            font-size: clamp(45px, 7vw, 90px);
            font-weight: 400;
            line-height: .95;
            letter-spacing: -.03em;
        }

        /* Bento Grid */

        .features {
            padding: 100px 0;
            border-top: 1px solid var(--border);
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border-top: 1px solid var(--border);
            border-left: 1px solid var(--border);
        }

        .bento-card {
            min-height: 320px;
            padding: 30px;
            border-right: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            background: transparent;
            position: relative;
            overflow: hidden;
            transition: background .4s, border-color .4s;
        }

        .bento-card:hover {
            background: rgba(168, 154, 53, .06);
            border-color: #A89A35;
        }

        .bento-card.wide {
            grid-column: span 2;
        }

        .bento-index {
            font-family: var(--mono);
            font-size: 14px;
            font-weight: 500;
            color: #77743A;
            letter-spacing: .12em;
        }

        .bento-icon {
            position: absolute;
            top: 25px;
            right: 25px;
            font-size: 22px;
            color: #A89A35;
        }

        .bento-content {
            position: absolute;
            bottom: 30px;
            left: 30px;
            right: 30px;
        }

        .bento-content h3 {
            font-family: var(--serif);
            font-size: clamp(26px, 3vw, 40px);
            font-weight: 400;
            margin-bottom: 15px;
        }

        .bento-content p {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.8;
            color: #4D5442;
            max-width: 360px;
        }

        /* Value proposition */

        .manifesto {
            padding: 150px 0;
            text-align: center;
            background: rgba(242, 232, 216, .5);
            border-bottom: 1px solid var(--border);
        }

        .manifesto h2 {
            font-family: var(--serif);
            font-size: clamp(45px, 7vw, 90px);
            font-weight: 400;
            line-height: .95;
            letter-spacing: -.03em;
            max-width: 1100px;
            margin: 0 auto 35px;
        }

        .manifesto p {
            color: #4D5442;
            max-width: 560px;
            margin: auto;
            font-size: 16px;
            line-height: 1.9;
            text-align: center;
        }

        .manifesto p.mono,
        .final-cta p.mono {
            font-family: var(--mono);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            line-height: 1.6;
            max-width: none;
            color: var(--muted);
        }

        .prose-highlight {
            font-family: var(--serif);
            font-style: italic;
            font-size: 26px;
            line-height: 1.5;
            color: #55551F;
            padding-top: 25px;
            border-top: 1px solid #D8C7AD;
        }

        /* Speaker section */

        .testimonials {
            padding: 120px 0;
            background: rgba(242, 232, 216, .5);
        }

        /* Speaker */

        .speaker-card {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 50px;
            align-items: center;
            background: rgba(255, 255, 255, .8);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 45px;
        }

        .speaker-photo-wrap {
            display: flex;
            justify-content: center;
        }

        .speaker-photo {
            width: 100%;
            max-width: 300px;
            height: auto;
            filter: drop-shadow(0 14px 26px rgba(85, 85, 31, .22));
        }

        .speaker-quote {
            font-family: var(--serif);
            font-style: italic;
            font-size: clamp(24px, 3vw, 36px);
            line-height: 1.25;
            margin-bottom: 20px;
        }

        .speaker-role {
            font-family: var(--mono);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #77743A;
            margin-bottom: 18px;
        }

        .speaker-bio {
            color: #4D5442;
            font-size: 15px;
            line-height: 1.9;
            margin-bottom: 25px;
        }

        .speaker-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .speaker-chips li {
            font-family: var(--mono);
            font-size: 11px;
            letter-spacing: .05em;
            color: #55551F;
            background: var(--surface);
            border: 1px solid #D8C7AD;
            border-radius: 999px;
            padding: 9px 16px;
        }

        /* Schedule */

        .schedule {
            padding: 110px 0;
            border-top: 1px solid var(--border);
        }

        .schedule-list {
            border-top: 1px solid var(--border);
        }

        .schedule-row {
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 40px;
            padding: 32px 10px;
            border-bottom: 1px solid var(--border);
            align-items: baseline;
            transition: background .4s;
        }

        .schedule-row:hover {
            background: rgba(168, 154, 53, .06);
        }

        .schedule-time {
            font-family: var(--mono);
            font-size: 14px;
            font-weight: 500;
            letter-spacing: .08em;
            color: #77743A;
        }

        .schedule-session {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .schedule-session strong {
            font-family: var(--serif);
            font-weight: 400;
            font-size: clamp(20px, 2.5vw, 28px);
        }

        .schedule-session span {
            color: #4D5442;
            font-size: 14px;
            line-height: 1.7;
        }

        /* Questions */

        .questions {
            padding: 120px 0;
            background: rgba(242, 232, 216, .5);
            border-top: 1px solid var(--border);
        }

        .question-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
        }

        .question-item {
            background: var(--bg);
            padding: 45px 40px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            min-height: 240px;
            transition: background .4s;
        }

        .question-item:hover {
            background: rgba(168, 154, 53, .06);
        }

        .question-index {
            font-family: var(--mono);
            font-size: 14px;
            font-weight: 500;
            color: #77743A;
            letter-spacing: .12em;
        }

        .question-item p {
            font-family: var(--serif);
            font-size: clamp(22px, 2.5vw, 32px);
            line-height: 1.25;
            margin-top: auto;
        }

        /* Benefits */

        .benefits {
            padding: 110px 0;
            border-top: 1px solid var(--border);
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border-top: 1px solid var(--border);
            border-left: 1px solid var(--border);
        }

        .benefit-card {
            min-height: 300px;
            padding: 30px;
            border-right: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            position: relative;
            display: flex;
            flex-direction: column;
            transition: background .4s;
        }

        .benefit-card:hover {
            background: rgba(168, 154, 53, .06);
        }

        .benefit-card .bento-index {
            margin-bottom: auto;
        }

        .benefit-card h3 {
            font-family: var(--serif);
            font-size: clamp(24px, 2.5vw, 32px);
            font-weight: 400;
            margin: 40px 0 14px;
        }

        .benefit-card p {
            font-size: 14px;
            line-height: 1.8;
            color: #4D5442;
        }

        /* Criteria */

        .criteria {
            padding: 110px 0;
            background: rgba(242, 232, 216, .5);
            border-top: 1px solid var(--border);
        }

        .criteria-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px 70px;
            counter-reset: criteria;
        }

        .criteria-item {
            counter-increment: criteria;
            display: grid;
            grid-template-columns: 60px 1fr;
            gap: 25px;
            align-items: start;
            padding-bottom: 35px;
            border-bottom: 1px solid var(--border);
        }

        .criteria-item::before {
            content: counter(criteria, decimal-leading-zero);
            font-family: var(--mono);
            font-size: 14px;
            font-weight: 500;
            color: #A89A35;
            letter-spacing: .12em;
            padding-top: 6px;
        }

        .criteria-item p {
            font-size: 16px;
            line-height: 1.8;
            color: #4D5442;
        }

        /* Notes */

        .notes {
            padding: 110px 0;
            border-top: 1px solid var(--border);
        }

        /* Final CTA */

        .final-cta {
            padding: 140px 20px;
            text-align: center;
            border-top: 1px solid var(--border);
        }

        .final-cta h2 {
            font-family: var(--serif);
            font-size: clamp(55px, 10vw, 120px);
            font-weight: 400;
            line-height: .9;
            margin-bottom: 35px;
        }

        .final-cta p {
            color: #4D5442;
            font-size: 16px;
            margin-bottom: 35px;
        }

        .final-schedule {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            max-width: 780px;
            margin: 0 auto 35px;
            background: rgba(255, 255, 255, .8);
            border: 1px solid var(--border);
            border-radius: 24px;
            overflow: hidden;
        }

        .final-schedule .sched-item {
            display: grid;
            gap: 10px;
            align-content: start;
            text-align: center;
            padding: 32px 25px;
        }

        .final-schedule .sched-item+.sched-item {
            border-left: 1px solid var(--border);
        }

        .final-schedule .sched-label {
            font-family: var(--mono);
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: #A89A35;
        }

        .final-schedule .sched-date {
            font-family: var(--serif);
            font-weight: 400;
            font-size: 27px;
            line-height: 1.2;
            color: #494640;
        }

        .final-schedule .sched-sub {
            font-size: 13px;
            color: #4D5442;
            line-height: 1.6;
        }

        .final-cta .final-note {
            font-family: var(--mono);
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: #77743A;
            margin-bottom: 35px;
        }

        .cta-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .silver-btn.btn-ghost {
            background: #FFFFFF;
            border: 1px solid #D8C7AD;
        }

        /* Footer */

        footer {
            padding: 35px 4%;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        footer p,
        footer a {
            color: #77743A;
            font-family: var(--mono);
            font-size: 10px;
            letter-spacing: .1em;
        }

        .footer-links {
            display: flex;
            gap: 25px;
        }

        footer a:hover {
            color: #494640;
        }

        /* Floating mobile navigation */

        .mobile-nav {
            display: none;
            position: fixed;
            z-index: 90;
            bottom: 25px;
            left: 50%;
            transform: translate(-50%, 150px);
            opacity: 0;
            transition: all .6s var(--ease);
            padding: 7px;
            background: rgba(255, 255, 255, .92);
            backdrop-filter: blur(24px);
            border: 1px solid #D8C7AD;
            border-radius: 50px;
            align-items: center;
            gap: 5px;
        }

        .mobile-nav.visible {
            transform: translate(-50%, 0);
            opacity: 1;
        }

        .mobile-nav a {
            min-width: 48px;
            padding: 10px 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            color: #4D5442;
            font-size: 16px;
        }

        .mobile-nav span {
            font-family: var(--mono);
            font-size: 7px;
            letter-spacing: .05em;
        }

        .mobile-nav .mobile-primary {
            background: var(--gradient);
            color: #494640;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            justify-content: center;
        }

        .mobile-nav .mobile-primary span {
            color: #494640;
        }

        /* Animations */

        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition: opacity .8s var(--ease),
                transform .8s var(--ease);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */

        @media (max-width: 900px) {
            .bento-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .benefit-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .question-grid {
                grid-template-columns: 1fr;
            }

            .criteria-list {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .criteria-item {
                margin-bottom: 0;
            }

            .speaker-card {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 30px;
                text-align: center;
            }

            .speaker-chips {
                justify-content: center;
            }
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 25px 4%;
            }

            .nav-links {
                display: none;
            }

            .hero {
                min-height: auto;
                padding: 110px 0 50px;
            }

            .hero-card {
                min-height: 600px;
                border-radius: 2rem;
                padding: 60px 15px;
            }

            .hero h1 {
                font-size: clamp(40px, 12vw, 64px);
            }

            .hero-description {
                font-size: 15px;
                padding: 0 10px;
            }

            .metadata {
                margin-top: 45px;
                width: 100%;
                gap: 0;
            }

            .metadata-item strong {
                font-size: 11px;
            }

            .metadata-item span {
                font-size: 9px;
                letter-spacing: .08em;
            }

            .countdown-section {
                padding: 80px 0;
            }

            .countdown {
                gap: 12px;
            }

            .countdown-item strong {
                font-size: 40px;
            }

            .countdown-item span {
                font-size: 9px;
            }

            .countdown-divider {
                font-size: 35px;
            }

            .prose-section {
                padding: 80px 0;
            }

            .prose-section .prose,
            .manifesto p {
                text-align: left;
            }

            .prose-highlight {
                font-size: 21px;
            }

            .features {
                padding: 80px 0;
            }

            .bento-grid {
                grid-template-columns: 1fr;
            }

            .bento-card {
                min-height: 260px;
            }

            .bento-card.wide {
                grid-column: span 1;
            }

            .manifesto {
                padding: 100px 0;
            }

            .speaker-card {
                padding: 25px 18px;
            }

            .speaker-photo {
                max-width: 230px;
            }

            .schedule-row {
                grid-template-columns: 1fr;
                gap: 12px;
                padding: 25px 5px;
            }

            .benefit-grid {
                grid-template-columns: 1fr;
            }

            .benefit-card {
                min-height: 220px;
            }

            .question-item {
                padding: 35px 25px;
                min-height: 200px;
            }

            .criteria-item {
                grid-template-columns: 40px 1fr;
                gap: 15px;
            }

            .final-cta {
                padding: 100px 15px;
            }

            .final-schedule {
                grid-template-columns: 1fr;
            }

            .final-schedule .sched-item+.sched-item {
                border-left: none;
                border-top: 1px solid var(--border);
            }

            .final-schedule .sched-item {
                padding: 25px 20px;
            }

            footer {
                flex-direction: column;
                text-align: center;
                padding-bottom: 110px;
            }

            .footer-links {
                gap: 15px;
            }

            .mobile-nav {
                display: flex;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <header class="navbar">
        <a href="#" class="brand">AL MINHAJ<span class="muted">×</span>ALHAZEN</a>

        <nav class="nav-links">
            <a href="#fokus">FOKUS</a>
            <a href="#narasumber">NARASUMBER</a>
            <a href="#agenda">AGENDA</a>
            <a href="#manfaat" class="silver-btn">MANFAAT ↗</a>
        </nav>

        <a href="#agenda" class="mono" style="color:#77743A;">27 NOV ↗</a>
    </header>

    <main>

        <!-- HERO -->
        <section class="hero container" id="home">
            <div class="hero-card">
                <div class="hero-content reveal">

                    <img class="hero-logo" src="{{ asset('assets/custom/santri-dan-teknologi/Logo.png') }}"
                        alt="Dokter Raehanul Bahraen · Alhazen Academy · Pesantren Minhajussalamah · Madinah Plus">

                    <h1>
                        <span>Setelah Lulus</span>
                        <span class="silver-text serif">Dari Pesantren,</span>
                        <span>Anak Siap Jadi Apa?</span>
                    </h1>

                    <p class="hero-description">
                        Menyiapkan generasi yang kuat iman, adab,
                        dan melek teknologi - menghubungkan adab dan
                        ilmu agama dengan penguasaan teknologi.
                    </p>

                    <div class="hero-actions">
                        <a href="#daftar" class="silver-btn">
                            Daftar Sekarang ↗
                        </a>

                        <a href="#fokus" class="silver-btn btn-ghost">
                            Jelajahi Kajian ↗
                        </a>
                    </div>

                    <div class="metadata">
                        <div class="metadata-item">
                            <strong>27 NOV 2026</strong>
                            <span>JUMAT · 08.00 WIB</span>
                        </div>

                        <div class="metadata-item">
                            <strong>90 MENIT</strong>
                            <span>08.00 – 09.30 WIB</span>
                        </div>

                        <div class="metadata-item">
                            <strong>ZOOM</strong>
                            <span>ONLINE · GRATIS</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- COUNTDOWN -->
        <section class="countdown-section">
            <div class="container reveal">

                <p class="section-label mono">
                    MENUJU WAKTU KAJIAN
                </p>

                <div class="countdown" id="countdown">
                    <div class="countdown-item">
                        <strong id="days">00</strong>
                        <span>HARI</span>
                    </div>

                    <div class="countdown-divider">/</div>

                    <div class="countdown-item">
                        <strong id="hours">00</strong>
                        <span>JAM</span>
                    </div>

                    <div class="countdown-divider">/</div>

                    <div class="countdown-item">
                        <strong id="minutes">00</strong>
                        <span>MENIT</span>
                    </div>

                    <div class="countdown-divider">/</div>

                    <div class="countdown-item">
                        <strong id="seconds">00</strong>
                        <span>DETIK</span>
                    </div>
                </div>

                <p class="mono muted" style="margin-top:30px;">
                    JUMAT, 27 NOVEMBER 2026 · 08.00 WIB
                </p>

            </div>
        </section>

        <!-- LATAR BELAKANG -->
        <section class="prose-section container" id="penting">
            <div class="reveal">
                <p class="mono muted" style="margin-bottom:20px;">
                    01 - MENGAPA KAJIAN INI PENTING
                </p>

                <h2>
                    Tantangan teknologi<br>
                    <span class="silver-text">tidak boleh dianggap remeh.</span>
                </h2>

                <div class="prose">
                    <p>
                        Perkembangan teknologi berjalan lebih cepat daripada
                        kemampuan masyarakat menyesuaikan diri. Kecerdasan
                        buatan, media sosial, gim daring, dan ekonomi digital
                        telah menjadi bagian dari kehidupan santri, termasuk
                        di lingkungan pesantren.
                    </p>

                    <p>
                        Teknologi masih sering dipandang sebagai pelengkap
                        atau gangguan, bukan sebagai bagian dari masa depan
                        yang perlu disiapkan. Tantangan teknologi sudah sangat
                        besar dan tidak boleh dianggap remeh oleh pesantren
                        dan komunitas remaja Islam.
                    </p>

                    <p>
                        Setelah lulus, santri tidak hanya menghadapi persoalan
                        identitas dan akhlak, tetapi juga persaingan keterampilan.
                        Jika santri hanya dibekali hafalan dan ijazah tanpa
                        literasi teknologi dan keterampilan praktis, mereka
                        berisiko tertinggal karena kurang kesiapan.
                    </p>

                    <p class="prose-highlight">
                        Santri yang kuat adabnya dan memahami teknologi
                        berpeluang memberi manfaat yang lebih luas.
                    </p>
                </div>
            </div>
        </section>

        <!-- TUJUAN KAJIAN -->
        <section class="manifesto" id="tujuan">
            <div class="container reveal">

                <p class="mono muted" style="margin-bottom:20px;">
                    02 - TUJUAN KAJIAN
                </p>

                <h2>
                    Ilmu, adab,<br>
                    <span class="silver-text">dan keterampilan.</span>
                </h2>

                <p>
                    Menghubungkan kekuatan adab dan ilmu agama dengan
                    penguasaan teknologi, serta membuka wawasan peserta
                    agar tidak memandang teknologi sebagai ancaman semata —
                    tetapi sebagai bagian masa depan yang perlu disikapi
                    dengan ilmu, adab, dan keterampilan. Santri didorong
                    membangun literasi digital dan kemampuan berpikir melalui
                    coding tanpa meninggalkan nilai keislaman, dengan wali
                    santri dan pesantren sebagai pendamping dan fasilitator.
                </p>

            </div>
        </section>

        <!-- FOKUS PEMBAHASAN -->
        <section class="features" id="fokus">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        03 — FOKUS PEMBAHASAN
                    </p>

                    <h2>
                        Delapan arah<br>
                        <span class="silver-text">pembahasan.</span>
                    </h2>
                </div>

                <div class="bento-grid">

                    <article class="bento-card wide reveal">
                        <span class="bento-index">01 / REALITAS ZAMAN</span>
                        <span class="bento-icon">↗</span>

                        <div class="bento-content">
                            <h3>Memahami realitas zaman.</h3>
                            <p>
                                Santri hidup di zaman yang berbeda dari para
                                pendahulu, sehingga perubahan zaman perlu
                                dipahami sebagai bagian dari sikap keagamaan.
                            </p>
                        </div>
                    </article>

                    <article class="bento-card wide reveal">
                        <span class="bento-index">02 / TIMBANGAN SYARIAT</span>
                        <span class="bento-icon">◈</span>

                        <div class="bento-content">
                            <h3>Ilmu &amp; teknologi dalam syariat.</h3>
                            <p>
                                Kedudukan ilmu dan teknologi dalam Islam,
                                serta cara menimbang maslahat dan mafsadat
                                dalam penggunaannya.
                            </p>
                        </div>
                    </article>

                    <article class="bento-card reveal">
                        <span class="bento-index">03 / BAHAYA</span>
                        <span class="bento-icon">⌑</span>

                        <div class="bento-content">
                            <h3>Melalaikan ibadah.</h3>
                            <p>
                                Dampak teknologi yang dapat melalaikan ibadah
                                dan merusak akhlak: ghibah, hoaks, konten
                                negatif, dan judi online.
                            </p>
                        </div>
                    </article>

                    <article class="bento-card reveal">
                        <span class="bento-index">04 / ADAB DIGITAL</span>
                        <span class="bento-icon">✳</span>

                        <div class="bento-content">
                            <h3>Bermuamalah di ruang digital.</h3>
                            <p>
                                Menjaga lisan dan tulisan, tabayyun,
                                menjaga privasi, serta menjaga akhlak
                                di dunia maya.
                            </p>
                        </div>
                    </article>

                    <article class="bento-card reveal">
                        <span class="bento-index">05 / NIAT</span>
                        <span class="bento-icon">◇</span>

                        <div class="bento-content">
                            <h3>Menjaga niat &amp; tujuan hidup.</h3>
                            <p>
                                Niat yang benar serta keseimbangan antara
                                urusan dunia, akhirat, ibadah, dan belajar.
                            </p>
                        </div>
                    </article>

                    <article class="bento-card reveal">
                        <span class="bento-index">06 / TARBIYAH</span>
                        <span class="bento-icon">○</span>

                        <div class="bento-content">
                            <h3>Peran wali santri &amp; pesantren.</h3>
                            <p>
                                Mendampingi, memberikan teladan, dan
                                memfasilitasi pembelajaran teknologi
                                yang sehat.
                            </p>
                        </div>
                    </article>

                    <article class="bento-card wide reveal">
                        <span class="bento-index">07 / GENERASI BERMANFAAT</span>
                        <span class="bento-icon">↗</span>

                        <div class="bento-content">
                            <h3>Kesiapan setelah lulus.</h3>
                            <p>
                                Baik dari sisi ilmu agama maupun keterampilan,
                                agar santri dapat memberi manfaat bagi umat.
                            </p>
                        </div>
                    </article>

                    <article class="bento-card wide reveal">
                        <span class="bento-index">08 / PENUTUP</span>
                        <span class="bento-icon">◈</span>

                        <div class="bento-content">
                            <h3>Semangat ilmu dan adab.</h3>
                            <p>
                                Teknologi adalah sarana, bukan tujuan.
                                Niat, adab, serta manfaat tetap menjadi
                                hal utama.
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- NARASUMBER -->
        <section class="testimonials" id="narasumber">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        04 — NARASUMBER
                    </p>

                    <h2>
                        Ustadz dr. Raehanul<br>
                        <span class="silver-text">Bahraen, M.Sc, Sp.PK.</span>
                    </h2>
                </div>

                <div class="speaker-card reveal">

                    <div class="speaker-photo-wrap">
                        <img class="speaker-photo" src="{{ asset('assets/custom/santri-dan-teknologi/pembicara.png') }}"
                            alt="Ustadz dr. Raehanul Bahraen, M.Sc, Sp.PK" loading="lazy">
                    </div>

                    <div class="speaker-body">
                        <blockquote class="speaker-quote">
                            "Menyiapkan generasi yang kuat iman,
                            adab, dan melek teknologi."
                        </blockquote>

                        <p class="speaker-role">
                            Dokter Sp.PK · Da'i Terstandarisasi MUI
                        </p>

                        <p class="speaker-bio">
                            Dokter spesialis dan pendakwah yang aktif mengedukasi
                            keluarga muslim dalam mengasuh serta mendidik anak di
                            era modern. Dalam kajian ini beliau membahas tantangan
                            teknologi dari sudut pandang nilai agama, adab, dan
                            kesiapan generasi, dengan penekanan pada peran wali
                            santri dan pesantren dalam mendampingi santri
                            menghadapi perkembangan teknologi.
                        </p>

                        <ul class="speaker-chips">
                            <li>Alumni Ma'had Al-Ilmi Yogyakarta</li>
                            <li>Mahasiswa S2 Fakultas Dakwah Al-Madinah International University</li>
                            <li>Da'i Terstandarisasi MUI</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- RANGKAIAN ACARA -->
        <section class="schedule" id="agenda">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        05 — RANGKAIAN ACARA
                    </p>

                    <h2>
                        90 menit,<br>
                        <span class="silver-text">satu arah pembahasan.</span>
                    </h2>
                </div>

                <div class="schedule-list reveal">

                    <div class="schedule-row">
                        <div class="schedule-time">08.00 – 08.30</div>
                        <div class="schedule-session">
                            <strong>Pembukaan</strong>
                            <span>
                                Registrasi ulang, pembukaan oleh MC,
                                dan penjelasan program lain.
                            </span>
                        </div>
                    </div>

                    <div class="schedule-row">
                        <div class="schedule-time">08.30 – 09.10</div>
                        <div class="schedule-session">
                            <strong>Sesi Materi: Santri dan Teknologi</strong>
                            <span>
                                Pemaparan materi oleh Ustadz Raehanul Bahraen —
                                mengacu pada delapan fokus pembahasan.
                            </span>
                        </div>
                    </div>

                    <div class="schedule-row">
                        <div class="schedule-time">09.10 – 09.25</div>
                        <div class="schedule-session">
                            <strong>Tanya Jawab</strong>
                            <span>
                                Diskusi dipandu dengan pertanyaan
                                pemandu agar arah pembahasan tetap terjaga.
                            </span>
                        </div>
                    </div>

                    <div class="schedule-row">
                        <div class="schedule-time">09.25 – 09.30</div>
                        <div class="schedule-session">
                            <strong>Penutup</strong>
                            <span>
                                Penutup dan dokumentasi.
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- PERTANYAAN PEMANDU -->
        <section class="questions" id="pertanyaan">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        06 — PERTANYAAN PEMANDU DISKUSI
                    </p>

                    <h2>
                        Menjaga arah<br>
                        <span class="silver-text">tanya jawab.</span>
                    </h2>
                </div>

                <div class="question-grid reveal">

                    <article class="question-item">
                        <span class="question-index">Q / 01</span>
                        <p>
                            Apa tantangan teknologi yang paling nyata
                            dihadapi santri saat ini?
                        </p>
                    </article>

                    <article class="question-item">
                        <span class="question-index">Q / 02</span>
                        <p>
                            Setelah lulus, keterampilan apa yang paling
                            menentukan daya saing santri?
                        </p>
                    </article>

                    <article class="question-item">
                        <span class="question-index">Q / 03</span>
                        <p>
                            Bagaimana cara memulai belajar coding tanpa
                            meninggalkan rutinitas pesantren?
                        </p>
                    </article>

                    <article class="question-item">
                        <span class="question-index">Q / 04</span>
                        <p>
                            Bagaimana membedakan penggunaan teknologi
                            yang produktif dan yang merusak?
                        </p>
                    </article>

                    <article class="question-item">
                        <span class="question-index">Q / 05</span>
                        <p>
                            Apa peran wali santri ketika anak lebih cepat
                            memahami teknologi daripada orang tuanya?
                        </p>
                    </article>

                    <article class="question-item">
                        <span class="question-index">Q / 06</span>
                        <p>
                            Bagaimana pesantren mengambil peran dalam
                            pendidikan teknologi tanpa kehilangan identitasnya?
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <!-- BENEFIT -->
        <section class="benefits" id="manfaat">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        07 — BENEFIT UNTUK PESERTA
                    </p>

                    <h2>
                        Empat hal<br>
                        <span class="silver-text">untuk dibawa pulang.</span>
                    </h2>
                </div>

                <div class="benefit-grid reveal">

                    <article class="benefit-card">
                        <span class="bento-index">01</span>
                        <h3>Rekaman Kajian</h3>
                        <p>
                            Akses ke rekaman lengkap kajian sehingga
                            dapat ditonton ulang kapan saja.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span class="bento-index">02</span>
                        <h3>Voucher Kelas Koding</h3>
                        <p>
                            Voucher potongan harga untuk pendaftaran
                            kelas koding di Alhazen Academy.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span class="bento-index">03</span>
                        <h3>Buku Panduan Coding Singkat</h3>
                        <p>
                            Panduan singkat dasar-dasar coding yang
                            dapat dipelajari santri secara mandiri.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span class="bento-index">04</span>
                        <h3>Materi Pendukung</h3>
                        <p>
                            Ringkasan materi dan daftar rekomendasi
                            belajar teknologi untuk santri.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <!-- KRITERIA KEBERHASILAN -->
        <section class="criteria" id="kriteria">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        08 — KRITERIA KEBERHASILAN
                    </p>

                    <h2>
                        Peserta pulang<br>
                        <span class="silver-text">dengan ini.</span>
                    </h2>
                </div>

                <div class="criteria-list reveal">

                    <div class="criteria-item">
                        <p>
                            Memahami bahwa tantangan teknologi bersifat besar
                            dan tidak boleh diabaikan.
                        </p>
                    </div>

                    <div class="criteria-item">
                        <p>
                            Menyadari bahwa masa depan santri juga ditentukan
                            oleh penguasaan keterampilan, bukan hanya ijazah.
                        </p>
                    </div>

                    <div class="criteria-item">
                        <p>
                            Mengetahui perbedaan antara yang perlu dipelajari
                            dan yang perlu dihindari.
                        </p>
                    </div>

                    <div class="criteria-item">
                        <p>
                            Memiliki gambaran awal tentang langkah belajar
                            teknologi, termasuk coding.
                        </p>
                    </div>

                    <div class="criteria-item">
                        <p>
                            Terdorong untuk mendampingi dan memfasilitasi
                            anak, bukan hanya melarang.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- CATATAN -->
        <section class="notes" id="catatan">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        09 - CATATAN
                    </p>

                    <h2>
                        Yang perlu<br>
                        <span class="silver-text">diperhatikan.</span>
                    </h2>
                </div>

                <div class="criteria-list reveal">

                    <div class="criteria-item">
                        <p>
                            Sesi materi narasumber murni berisi pembelajaran
                            agama dan tidak digunakan untuk promosi produk,
                            kelas, atau voucher.
                        </p>
                    </div>

                    <div class="criteria-item">
                        <p>
                            Informasi benefit dan penawaran pendidikan teknologi
                            disampaikan oleh penyelenggara di luar sesi materi.
                        </p>
                    </div>

                    <div class="criteria-item">
                        <p>
                            Peserta diharapkan hadir tepat waktu untuk
                            mendapatkan pengalaman terbaik.
                        </p>
                    </div>

                    <div class="criteria-item">
                        <p>
                            Rekaman dan benefit dikirimkan ke email peserta
                            dalam waktu 3x24 jam setelah kajian selesai.
                        </p>
                    </div>

                    <div class="criteria-item">
                        <p>
                            Jadwal, media, dan detail teknis dapat disesuaikan
                            dengan kebutuhan Al Minhaj dan Alhazen Academy.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="final-cta" id="daftar">
            <div class="container reveal">

                <p class="mono muted" style="margin-bottom:20px;">
                    10 — SAMPAI JUMAT PAGI
                </p>

                <h2>
                    Amankan<br>
                    <span class="silver-text">waktunya.</span>
                </h2>

                <div class="final-schedule">
                    <div class="sched-item">
                        <span class="sched-label">Tanggal</span>
                        <span class="sched-date">
                            Jumat<br>
                            27 November 2026
                        </span>
                        <span class="sched-sub">
                            Pendaftaran dibuka sekarang
                        </span>
                    </div>

                    <div class="sched-item">
                        <span class="sched-label">Waktu</span>
                        <span class="sched-date">
                            08.00–09.30
                        </span>
                        <span class="sched-sub">
                            WIB · durasi 90 menit
                        </span>
                    </div>

                    <div class="sched-item">
                        <span class="sched-label">Media</span>
                        <span class="sched-date">
                            Zoom
                        </span>
                        <span class="sched-sub">
                            Online · gratis · tautan via email
                        </span>
                    </div>
                </div>

                <p class="final-note">
                    Terbuka untuk wali santri dan masyarakat umum
                </p>

                <div class="cta-actions">
                    <a href="https://forms.gle/ryMJ7cGqnpaZGv1B8" target="_blank" rel="noopener noreferrer"
                        class="silver-btn">
                        Daftar Sekarang ↗
                    </a>

                    <a href="#home" class="silver-btn btn-ghost">
                        Lihat Detail Kajian
                    </a>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <a href="#" class="brand">AL MINHAJ × ALHAZEN.</a>

        <p>© 2026 KAJIAN SANTRI DAN TEKNOLOGI. SEMUA HAK DILINDUNGI.</p>

        <div class="footer-links">
            <a href="#fokus">FOKUS</a>
            <a href="#agenda">AGENDA</a>
            <a href="#manfaat">MANFAAT</a>
        </div>
    </footer>

    <!-- MOBILE FLOATING NAV -->
    <nav class="mobile-nav" id="mobileNav">

        <a href="#home">
            ⌂
            <span>HOME</span>
        </a>

        <a href="#fokus">
            ◈
            <span>FOKUS</span>
        </a>

        <a href="#daftar" class="mobile-primary">
            ↗
            <span>CTA</span>
        </a>

        <a href="#agenda">
            ◉
            <span>AGENDA</span>
        </a>

        <a href="#manfaat">
            ⌑
            <span>MANFAAT</span>
        </a>

    </nav>

    <script>
        /* =================================
           COUNTDOWN TIMER
        ================================= */

        // Kajian: Jumat, 27 November 2026, 08.00 WIB (UTC+7).
        const launchDate = new Date(
            "2026-11-27T08:00:00+07:00"
        ).getTime();

        function updateCountdown() {
            const now = Date.now();
            const distance = launchDate - now;

            const days = document.getElementById("days");
            const hours = document.getElementById("hours");
            const minutes = document.getElementById("minutes");
            const seconds = document.getElementById("seconds");

            if (distance <= 0) {
                days.textContent = "00";
                hours.textContent = "00";
                minutes.textContent = "00";
                seconds.textContent = "00";
                return;
            }

            const totalDays = Math.floor(
                distance / (1000 * 60 * 60 * 24)
            );

            const totalHours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );

            const totalMinutes = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );

            const totalSeconds = Math.floor(
                (distance % (1000 * 60)) / 1000
            );

            days.textContent = String(totalDays).padStart(2, "0");
            hours.textContent = String(totalHours).padStart(2, "0");
            minutes.textContent = String(totalMinutes).padStart(2, "0");
            seconds.textContent = String(totalSeconds).padStart(2, "0");
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);


        /* =================================
           SCROLL REVEAL
        ================================= */

        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.12
            }
        );

        document.querySelectorAll(".reveal").forEach(element => {
            revealObserver.observe(element);
        });


        /* =================================
           MOBILE FLOATING NAVIGATION
        ================================= */

        const mobileNav = document.getElementById("mobileNav");
        const hero = document.querySelector(".hero");

        const navObserver = new IntersectionObserver(
            ([entry]) => {
                mobileNav.classList.toggle(
                    "visible",
                    !entry.isIntersecting
                );
            },
            {
                threshold: 0.1
            }
        );

        navObserver.observe(hero);


        /* =================================
           SMOOTH SCROLL
        ================================= */

        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener("click", function(event) {
                const target = document.querySelector(
                    this.getAttribute("href")
                );

                if (target) {
                    event.preventDefault();

                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            });
        });
    </script>

</body>

</html>