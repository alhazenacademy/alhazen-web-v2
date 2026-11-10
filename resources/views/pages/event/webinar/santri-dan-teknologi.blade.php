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
        href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        @font-face {
            font-family: 'TNR Cond';
            src: url("{{ asset('assets/custom/santri-dan-teknologi/Times New Roman MT Condensed Regular.otf') }}") format('opentype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        :root {
            --bg: #ffffff;
            --surface: #F2E8D8;
            --white: #494640;
            --silver: #4D5442;
            --muted: #77743A;
            --border: rgba(85, 85, 31, 0.16);
            --glass: rgba(242, 232, 216, 0.55);
            --serif: 'TNR Cond', 'Times New Roman', serif;
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

        .ms-icon {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            font-feature-settings: 'liga';
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 16px;
            color: inherit;
            -webkit-font-smoothing: antialiased;
        }

        .silver-btn .ms-icon {
            font-size: 14px;
            vertical-align: -2px;
        }

        .navbar .ms-icon {
            font-size: 13px;
            vertical-align: -2px;
        }

        .silver-text {
            color: #A89A35;
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
            background: #A89A35;
            color: #FFFFFF !important;
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
            background: rgba(242, 232, 216, .5);
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

        /* Value proposition */

        .manifesto {
            padding: 150px 0;
            text-align: center;
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
            font-family: var(--mono);
            font-size: 14px;
            font-weight: 500;
            color: #77743A;
            letter-spacing: .12em;
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

        /* Final CTA */

        .final-cta {
            padding: 140px 20px;
            text-align: center;
            background: rgba(242, 232, 216, .5);
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

        /* Registration form (custom → Google Sheets) */

        .reg-form-card {
            max-width: 780px;
            margin: 0 auto 30px;
            background: rgba(255, 255, 255, .9);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 45px;
            text-align: left;
        }

        #form-alert {
            margin-bottom: 22px;
            padding: 13px 17px;
            border-radius: 12px;
            background: rgba(180, 69, 56, .07);
            border: 1px solid rgba(180, 69, 56, .35);
            color: #B44538;
            font-size: 13.5px;
            font-weight: 500;
            line-height: 1.6;
        }

        .reg-form .reg-form-part {
            font-family: var(--mono);
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: #A89A35;
            margin: 35px 0 25px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--border);
        }

        .reg-form .reg-form-part:first-child {
            margin-top: 0;
        }

        .reg-form .field {
            margin-bottom: 22px;
        }

        .reg-form .field>label,
        .reg-form legend {
            display: block;
            font-family: var(--mono);
            font-size: 14px;
            font-weight: 500;
            line-height: 1.55;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #55551F;
            margin-bottom: 10px;
            padding: 0;
        }

        .reg-form fieldset {
            border: 0;
            padding: 0;
            margin: 0 0 22px;
            min-width: 0;
        }

        .reg-form input[type="text"],
        .reg-form input[type="tel"],
        .reg-form select,
        .reg-form textarea {
            width: 100%;
            padding: 13px 16px;
            font-family: var(--sans);
            font-size: 16px;
            color: #494640;
            background: #FFFFFF;
            border: 1px solid var(--border);
            border-radius: 12px;
            outline: none;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        .reg-form select {
            appearance: none;
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8' fill='none'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%2355551F' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 42px;
            cursor: pointer;
        }

        .reg-form textarea {
            min-height: 130px;
            resize: vertical;
            line-height: 1.7;
        }

        .reg-form input:focus,
        .reg-form select:focus,
        .reg-form textarea:focus {
            border-color: #A89A35;
            box-shadow: 0 0 0 3px rgba(168, 154, 53, .15);
        }

        .reg-form input[aria-invalid="true"],
        .reg-form select[aria-invalid="true"],
        .reg-form textarea[aria-invalid="true"] {
            border-color: #B44538;
            box-shadow: 0 0 0 3px rgba(180, 69, 56, .12);
        }

        .reg-form .helper {
            display: block;
            margin-top: 7px;
            font-size: 12px;
            color: #77743A;
        }

        .reg-form .helper.error {
            color: #B44538;
            font-weight: 500;
        }

        .reg-form .choices {
            display: grid;
            gap: 10px;
        }

        .reg-form .choice {
            display: flex;
            align-items: flex-start;
            gap: 11px;
            padding: 12px 15px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: rgba(255, 255, 255, .7);
            font-size: 14.5px;
            line-height: 1.55;
            color: #4D5442;
            cursor: pointer;
            transition: border-color .2s ease, background .2s ease;
        }

        .reg-form .choice:hover {
            border-color: #D0B95A;
            background: rgba(242, 232, 216, .35);
        }

        .reg-form .choice:has(input:checked) {
            border-color: #A89A35;
            background: rgba(168, 154, 53, .06);
            color: #494640;
        }

        .reg-form .choice input {
            margin-top: 3px;
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            accent-color: #A89A35;
            cursor: pointer;
        }

        .reg-form fieldset[aria-invalid="true"] .choice {
            border-color: rgba(180, 69, 56, .55);
        }

        .reg-form .reg-submit {
            width: 100%;
            justify-content: center;
            padding: 16px;
            font-size: 12px;
            margin-top: 6px;
        }

        .reg-step-actions {
            display: flex;
            gap: 12px;
            align-items: stretch;
            margin-top: 6px;
        }

        .reg-step-actions .reg-submit {
            margin-top: 0;
        }

        .reg-step-actions #step-back {
            flex: 0 0 auto;
            padding-left: 22px;
            padding-right: 22px;
            background: #FFFFFF;
            color: #494640 !important;
            border: 1px solid #D8C7AD;
        }

        .reg-step-actions #step-back:hover {
            border-color: #A89A35;
        }

        .reg-step-actions #submit-button {
            flex: 1;
        }

        .reg-form #form-status {
            display: block;
            text-align: center;
            margin-top: 13px;
            font-size: 12.5px;
            color: #77743A;
            min-height: 1em;
        }

        .reg-form-success {
            text-align: center;
        }

        .reg-form-success .success-icon {
            font-size: 46px;
            color: #A89A35;
        }

        .reg-form-success h3 {
            font-family: var(--serif);
            font-weight: 400;
            font-size: 40px;
            line-height: 1.1;
            color: #494640;
            margin: 16px 0 12px;
        }

        .reg-form-success p {
            font-size: 15px;
            line-height: 1.8;
            color: #4D5442;
            max-width: 540px;
            margin: 0 auto;
        }

        .reg-form-success #success-name {
            font-weight: 500;
            color: #55551F;
        }

        .reg-form-success .success-note {
            margin-top: 20px;
            padding: 17px 19px;
            background: rgba(242, 232, 216, .5);
            border: 1px solid var(--border);
            border-radius: 14px;
            font-size: 13px;
            line-height: 1.7;
            color: #55551F;
            text-align: left;
        }

        .reg-form-success .success-note strong {
            font-weight: 500;
            color: #494640;
        }

        .cta-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .silver-btn.btn-ghost {
            background: #FFFFFF;
            color: #494640 !important;
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

        .mobile-nav span.ms-icon {
            font-family: 'Material Symbols Outlined';
            font-size: 20px;
            font-weight: normal;
            letter-spacing: normal;
            text-transform: none;
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .mobile-nav .mobile-primary {
            background: #A89A35;
            color: #FFFFFF;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            justify-content: center;
        }

        .mobile-nav .mobile-primary span {
            color: #FFFFFF;
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
            .benefit-grid {
                grid-template-columns: repeat(2, 1fr);
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

            .manifesto {
                padding: 100px 0;
            }

            .speaker-card {
                padding: 25px 18px;
            }

            .speaker-photo {
                max-width: 230px;
            }

            .benefit-grid {
                grid-template-columns: 1fr;
            }

            .benefit-card {
                min-height: 220px;
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

            .reg-form-card {
                padding: 25px 18px;
            }

            .reg-form-success h3 {
                font-size: 32px;
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
        <a href="#" class="brand">AL MINHAJ<span class="muted"> × </span>ALHAZEN ACADEMY</a>

        <nav class="nav-links">
            <a href="#tujuan">TUJUAN</a>
            <a href="#narasumber">NARASUMBER</a>
            <a href="#manfaat">MANFAAT</a>
            <a href="#daftar" class="silver-btn">DAFTAR <span class="ms-icon">north_east</span></a>
        </nav>

        <a href="#daftar" class="mono" style="color:#77743A;">27 NOV <span class="ms-icon">north_east</span></a>
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
                            Daftar Sekarang <span class="ms-icon">north_east</span>
                        </a>

                        <a href="#tujuan" class="silver-btn btn-ghost">
                            Jelajahi Kajian <span class="ms-icon">north_east</span>
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
        <section class="prose-section" id="penting">
            <div class="container">
                <div class="reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        01 — MENGAPA KAJIAN INI PENTING
                    </p>

                    <h2>
                        Dunia Terus Berubah,<br>
                        <span class="silver-text">Apakah Bekal Anak Sudah Cukup?</span>
                    </h2>

                    <div class="prose">
                        <p>
                            Setelah lulus dari pesantren, anak akan menghadapi dunia yang jauh lebih luas. Cara manusia
                            belajar, bekerja, berkomunikasi, dan mencari peluang terus berubah.
                        </p>

                        <p>
                            Ilmu agama menjadi fondasi utama. Namun, anak juga perlu memiliki wawasan luas, keterampilan
                            praktis, dan kemampuan beradaptasi agar tidak tertinggal dalam menghadapi perubahan.

                        </p>

                        <p>
                            Orang tua perlu mempersiapkan anak bukan hanya untuk menjadi pribadi yang baik, tetapi juga
                            agar mampu mengambil peran dan memberi manfaat di tengah masyarakat.
                        </p>

                        <p class="prose-highlight">
                            Santri yang kuat adabnya dan memahami teknologi
                            berpeluang memberi manfaat yang lebih luas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TUJUAN KAJIAN -->
        <section class="manifesto" id="tujuan">
            <div class="container reveal">

                <p class="mono muted" style="margin-bottom:20px;">
                    02 — TUJUAN KAJIAN
                </p>

                <h2>
                    Ilmu, adab,<br>
                    <span class="silver-text">dan keterampilan.</span>
                </h2>

                <p style="margin-bottom: 20px">
                    Mendorong orang tua untuk membekali santri dengan ilmu agama, adab, wawasan luas, dan keterampilan
                    yang relevan dengan kebutuhan zaman.
                </p>

                <p style="margin-bottom: 20px">
                    Membuka pemahaman bahwa santri memiliki kesempatan untuk mengembangkan potensi, menciptakan karya,
                    dan mengambil peran di berbagai bidang tanpa meninggalkan prinsip Islam.
                </p>

                <p style="margin-bottom: 20px">
                    Membentuk generasi yang tidak hanya mampu mengikuti perubahan, tetapi juga menciptakan peluang dan memberi manfaat bagi umat.
                </p>

            </div>
        </section>

        <!-- NARASUMBER -->
        <section class="testimonials" id="narasumber">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        03 — NARASUMBER
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
                        {{-- <blockquote class="speaker-quote">
                            "Menyiapkan generasi yang kuat iman,
                            adab, dan melek teknologi."
                        </blockquote> --}}

                        <p class="speaker-role">
                            Dokter Sp.PK · Da'i Terstandarisasi MUI
                        </p>

                        <p class="speaker-bio">
                            Aktif mengedukasi keluarga Muslim tentang pengasuhan dan pendidikan anak. Dalam kajian ini, beliau mengajak orang tua memahami pentingnya mendampingi perkembangan potensi anak, membangun karakter, serta mempersiapkan masa depan mereka tanpa mengesampingkan nilai-nilai agama.
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

        <!-- BENEFIT -->
        <section class="benefits" id="manfaat">
            <div class="container">

                <div class="section-heading reveal">
                    <p class="mono muted" style="margin-bottom:20px;">
                        04 — BENEFIT UNTUK PESERTA
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
                            Akses rekaman lengkap kajian agar bisa disimak kembali kapan saja.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span class="bento-index">02</span>
                        <h3>Voucher Kelas Koding</h3>
                        <p>
                            Voucher harga khusus untuk mengikuti kelas coding di Alhazen Academy.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span class="bento-index">03</span>
                        <h3>Buku Panduan Coding Singkat</h3>
                        <p>
                            Panduan praktis untuk mengenal dasar-dasar coding dan mulai belajar secara mandiri.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span class="bento-index">04</span>
                        <h3>Materi Pendukung</h3>
                        <p>
                            Ringkasan materi dan rekomendasi sumber belajar untuk membantu santri mengembangkan wawasan dan keterampilan.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="final-cta" id="daftar">
            <div class="container reveal">

                <p class="mono muted" style="margin-bottom:20px;">
                    05 — JANGAN LEWATKAN
                </p>

                <h2>
                    CATAT<br>
                    <span class="silver-text">JADWALNYA</span>
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
                            Online · gratis · tautan via WhatsApp Group
                        </span>
                    </div>
                </div>

                <p class="final-note">
                    Terbuka untuk wali santri dan masyarakat umum
                </p>

                <div class="reg-form-card" id="reg-form-card">
                    <div id="form-alert" hidden></div>

                    <form id="registration-form" class="reg-form" novalidate>
                        <div class="reg-step" id="step-1">
                            <p class="reg-form-part">Bagian 1 — Data Diri Peserta</p>

                            <div class="field">
                                <label for="nama">Siapa nama lengkap Ayah/Bunda?</label>
                                <input type="text" id="nama" name="nama" required minlength="3" autocomplete="name"
                                    placeholder="Nama lengkap">
                                <small class="helper" id="nama-helper">Nama sesuai identitas Ayah/Bunda.</small>
                            </div>

                            <div class="field">
                                <label for="kota">Di kota mana Ayah/Bunda berdomisili?</label>
                                <input type="text" id="kota" name="kota" required minlength="2"
                                    placeholder="Kota domisili saat ini">
                                <small class="helper" id="kota-helper">Cukup nama kota, contoh: Yogyakarta.</small>
                            </div>

                            <div class="field">
                                <label for="no_wa">Berapa nomor WhatsApp aktif Ayah/Bunda?</label>
                                <input type="tel" id="no_wa" name="no_wa" required
                                    pattern="^(0|\+62|62)8[1-9][0-9]{7,11}$"
                                    title="Contoh: 08123456789 atau +628123456789" inputmode="numeric"
                                    autocomplete="tel" placeholder="08xxxxxxxxxx">
                                <small class="helper" id="no_wa-helper">Format: 08xxxxxxxxxx atau +628xxxxxxxxxx —
                                    tautan Zoom dikirim ke nomor ini.</small>
                            </div>

                            <div class="field">
                                <label for="asal_pesantren">Dari pesantren mana putra/putri Ayah/Bunda berasal?
                                    (Opsional)</label>
                                <input type="text" id="asal_pesantren" name="asal_pesantren"
                                    placeholder="Nama pesantren">
                                <small class="helper" id="asal_pesantren-helper">Kosongkan bila putra/putri belum
                                    mondok.</small>
                            </div>

                            <div class="field">
                                <label for="status">Apa status Ayah/Bunda saat ini?</label>
                                <select id="status" name="status" required>
                                    <option value="" selected disabled>Pilih status…</option>
                                    <option value="Orang Tua">Orang Tua</option>
                                    <option value="Calon Orang Tua">Calon Orang Tua</option>
                                    <option value="Guru / Pendidik">Guru / Pendidik</option>
                                    <option value="Santri">Santri</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <small class="helper" id="status-helper">Pilih salah satu.</small>
                            </div>

                            <div class="field">
                                <label for="jenjang">Jenjang pendidikan putra/putri Ayah/Bunda saat ini?</label>
                                <select id="jenjang" name="jenjang" required>
                                    <option value="" selected disabled>Pilih jenjang…</option>
                                    <option value="SD/MI">SD/MI</option>
                                    <option value="SMP/MTs">SMP/MTs</option>
                                    <option value="SMA/MA">SMA/MA</option>
                                    <option value="Sudah lulus pesantren">Sudah lulus pesantren</option>
                                    <option value="Belum mondok, tetapi berencana memasukkan anak ke pesantren">Belum
                                        mondok, tetapi berencana memasukkan anak ke pesantren</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <small class="helper" id="jenjang-helper">Pilih satu.</small>
                            </div>

                            <div class="field">
                                <label for="sumber_info">Dari mana Ayah/Bunda mengetahui kajian ini?</label>
                                <select id="sumber_info" name="sumber_info" required>
                                    <option value="" selected disabled>Pilih sumber…</option>
                                    <option value="Instagram Alhazen Academy & Al-Minhaj">Instagram Alhazen Academy
                                        &amp; Al-Minhaj</option>
                                    <option value="Grup WhatsApp Sekolah">Grup WhatsApp Sekolah</option>
                                    <option value="Grup WhatsApp Kajian">Grup WhatsApp Kajian</option>
                                    <option value="Grup Facebook">Grup Facebook</option>
                                    <option value="Teman / Keluarga">Teman / Keluarga</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <small class="helper" id="sumber_info-helper">Pilih salah satu.</small>
                            </div>

                            <button type="button" id="step-next" class="silver-btn reg-submit">
                                Selanjutnya <span class="ms-icon">arrow_forward</span>
                            </button>
                        </div>

                        <div class="reg-step" id="step-2" hidden>
                            <p class="reg-form-part">Bagian 2 — Pandangan dan Harapan Orang Tua</p>

                            <fieldset data-max="2" id="bekal_penting_group" aria-describedby="bekal_penting-helper">
                                <legend>Bekal apa yang paling penting setelah lulus pesantren?</legend>
                                <div class="choices">
                                    <label class="choice"><input type="checkbox" name="bekal_penting"
                                            value="Ilmu agama dan hafalan Al-Qur'an">Ilmu agama dan hafalan
                                        Al-Qur'an</label>
                                    <label class="choice"><input type="checkbox" name="bekal_penting"
                                            value="Adab dan akhlak">Adab dan akhlak</label>
                                    <label class="choice"><input type="checkbox" name="bekal_penting"
                                            value="Keterampilan praktis untuk bekerja atau berwirausaha">Keterampilan
                                        praktis untuk bekerja atau berwirausaha</label>
                                    <label class="choice"><input type="checkbox" name="bekal_penting"
                                            value="Kemampuan memanfaatkan teknologi">Kemampuan memanfaatkan
                                        teknologi</label>
                                    <label class="choice"><input type="checkbox" name="bekal_penting"
                                            value="Kemampuan berpikir kritis dan memecahkan masalah">Kemampuan berpikir
                                        kritis dan memecahkan masalah</label>
                                    <label class="choice"><input type="checkbox" name="bekal_penting"
                                            value="Kemandirian dan kepercayaan diri">Kemandirian dan kepercayaan
                                        diri</label>
                                    <label class="choice"><input type="checkbox" name="bekal_penting"
                                            value="Lainnya">Lainnya</label>
                                </div>
                                <small class="helper" id="bekal_penting-helper">Pilih maksimal 2.</small>
                            </fieldset>

                            <fieldset id="penting_teknologi_group" aria-describedby="penting_teknologi-helper">
                                <legend>Seberapa penting kemampuan teknologi untuk masa depan putra/putri?</legend>
                                <div class="choices">
                                    <label class="choice"><input type="radio" name="penting_teknologi"
                                            value="1 — Tidak Penting" required>1 — Tidak Penting</label>
                                    <label class="choice"><input type="radio" name="penting_teknologi"
                                            value="2 — Kurang Penting">2 — Kurang Penting</label>
                                    <label class="choice"><input type="radio" name="penting_teknologi"
                                            value="3 — Cukup Penting">3 — Cukup Penting</label>
                                    <label class="choice"><input type="radio" name="penting_teknologi"
                                            value="4 — Penting">4 — Penting</label>
                                    <label class="choice"><input type="radio" name="penting_teknologi"
                                            value="5 — Sangat Penting">5 — Sangat Penting</label>
                                </div>
                                <small class="helper" id="penting_teknologi-helper">Skala 1–5, pilih satu.</small>
                            </fieldset>

                            <fieldset id="waktu_tepat_group" aria-describedby="waktu_tepat-helper">
                                <legend>Kapan waktu tepat santri mulai mempelajari teknologi?</legend>
                                <div class="choices">
                                    <label class="choice"><input type="radio" name="waktu_tepat"
                                            value="Selama di pesantren, sebagai bagian dari pelajaran" required>Selama
                                        di pesantren, sebagai bagian dari pelajaran</label>
                                    <label class="choice"><input type="radio" name="waktu_tepat"
                                            value="Selama di pesantren, sebagai kegiatan tambahan">Selama di pesantren,
                                        sebagai kegiatan tambahan</label>
                                    <label class="choice"><input type="radio" name="waktu_tepat"
                                            value="Di luar pesantren, misalnya saat liburan">Di luar pesantren, misalnya
                                        saat liburan</label>
                                    <label class="choice"><input type="radio" name="waktu_tepat"
                                            value="Setelah lulus pesantren">Setelah lulus pesantren</label>
                                    <label class="choice"><input type="radio" name="waktu_tepat"
                                            value="Belum perlu">Belum perlu</label>
                                    <label class="choice"><input type="radio" name="waktu_tepat"
                                            value="Lainnya">Lainnya</label>
                                </div>
                                <small class="helper" id="waktu_tepat-helper">Pilih satu.</small>
                            </fieldset>

                            <fieldset data-max="2" id="manfaat_group" aria-describedby="manfaat-helper">
                                <legend>Manfaat apa yang paling diharapkan dari teknologi &amp; ilmu umum?</legend>
                                <div class="choices">
                                    <label class="choice"><input type="checkbox" name="manfaat"
                                            value="Lebih siap melanjutkan pendidikan ke jenjang berikutnya">Lebih siap
                                        melanjutkan pendidikan ke jenjang berikutnya</label>
                                    <label class="choice"><input type="checkbox" name="manfaat"
                                            value="Lebih siap bersaing di dunia kerja atau berwirausaha">Lebih siap
                                        bersaing di dunia kerja atau berwirausaha</label>
                                    <label class="choice"><input type="checkbox" name="manfaat"
                                            value="Terlatih berpikir logis dan memecahkan masalah">Terlatih berpikir
                                        logis dan memecahkan masalah</label>
                                    <label class="choice"><input type="checkbox" name="manfaat"
                                            value="Mampu memanfaatkan teknologi untuk dakwah dan kebaikan">Mampu
                                        memanfaatkan teknologi untuk dakwah dan kebaikan</label>
                                    <label class="choice"><input type="checkbox" name="manfaat"
                                            value="Lebih bijak dan terlindungi dari dampak buruk teknologi">Lebih bijak
                                        dan terlindungi dari dampak buruk teknologi</label>
                                    <label class="choice"><input type="checkbox" name="manfaat"
                                            value="Saya belum mengetahui manfaatnya">Saya belum mengetahui
                                        manfaatnya</label>
                                    <label class="choice"><input type="checkbox" name="manfaat"
                                            value="Lainnya">Lainnya</label>
                                </div>
                                <small class="helper" id="manfaat-helper">Pilih maksimal 2.</small>
                            </fieldset>

                            <fieldset id="kekhawatiran_group" aria-describedby="kekhawatiran-helper">
                                <legend>Apa yang paling Ayah/Bunda khawatirkan bila anak tak paham teknologi?</legend>
                                <div class="choices">
                                    <label class="choice"><input type="radio" name="kekhawatiran"
                                            value="Kesulitan melanjutkan pendidikan ke jenjang berikutnya"
                                            required>Kesulitan melanjutkan pendidikan ke jenjang berikutnya</label>
                                    <label class="choice"><input type="radio" name="kekhawatiran"
                                            value="Sulit bersaing di dunia kerja atau berwirausaha">Sulit bersaing di
                                        dunia kerja atau berwirausaha</label>
                                    <label class="choice"><input type="radio" name="kekhawatiran"
                                            value="Mudah terjebak hoaks, penipuan, atau judi online">Mudah terjebak
                                        hoaks, penipuan, atau judi online</label>
                                    <label class="choice"><input type="radio" name="kekhawatiran"
                                            value="Kurang percaya diri saat terjun ke masyarakat">Kurang percaya diri
                                        saat terjun ke masyarakat</label>
                                    <label class="choice"><input type="radio" name="kekhawatiran"
                                            value="Kurang mampu berdakwah sesuai tantangan zaman">Kurang mampu berdakwah
                                        sesuai tantangan zaman</label>
                                    <label class="choice"><input type="radio" name="kekhawatiran"
                                            value="Tidak ada kekhawatiran, bekal ilmu agama sudah cukup">Tidak ada
                                        kekhawatiran, bekal ilmu agama sudah cukup</label>
                                    <label class="choice"><input type="radio" name="kekhawatiran"
                                            value="Belum terpikirkan">Belum terpikirkan</label>
                                    <label class="choice"><input type="radio" name="kekhawatiran"
                                            value="Lainnya">Lainnya</label>
                                </div>
                                <small class="helper" id="kekhawatiran-helper">Pilih satu.</small>
                            </fieldset>

                            <div class="field">
                                <label for="keresahan">Hal yang paling Ayah/Bunda resahkan soal masa depan anak?
                                    (Opsional)</label>
                                <textarea id="keresahan" name="keresahan"
                                    placeholder="Silakan ceritakan keresahan, harapan, atau tantangan mengenai masa depan putra/putri…"></textarea>
                                <small class="helper" id="keresahan-helper">Jawaban ini menjadi bahan pembahasan bersama
                                    Ustadz dalam kajian.</small>
                            </div>

                            <div class="reg-step-actions">
                                <button type="button" id="step-back" class="silver-btn btn-ghost reg-back">
                                    <span class="ms-icon">arrow_back</span> Kembali
                                </button>

                                <button type="submit" id="submit-button" class="silver-btn reg-submit">
                                    <span id="submit-label">Daftar Sekarang</span>
                                    <span class="ms-icon">north_east</span>
                                </button>
                            </div>
                            <small id="form-status" role="status" aria-live="polite"></small>
                        </div>
                    </form>
                </div>

                <div class="reg-form-card reg-form-success" id="success-card" hidden>
                    <span class="ms-icon success-icon">check_circle</span>
                    <h3>Pendaftaran tercatat!</h3>
                    <p>
                        Terima kasih, <span id="success-name"></span>. Jawaban Ayah/Bunda sudah
                        tersimpan dan akan menjadi bahan pembahasan bersama Ustadz dalam kajian.
                    </p>
                    <div class="success-note">
                        <strong>Tautan Zoom</strong> dikirim ke WhatsApp Group Anda menjelang hari-H —
                        Jumat, 27 November 2026, 08.00 WIB. Jika belum bergabung dengan WhatsApp Group, silakan hubungi Admin Alhazen Academy.
                    </div>
                </div>

                <div class="cta-actions">
                    <a href="https://forms.gle/ryMJ7cGqnpaZGv1B8" target="_blank" rel="noopener noreferrer"
                        class="silver-btn btn-ghost">
                        Daftar via Google Form <span class="ms-icon">north_east</span>
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
        <a href="#" class="brand">AL MINHAJ × ALHAZEN ACADEMY.</a>

        <p>© 2026 KAJIAN SANTRI DAN TEKNOLOGI. SEMUA HAK DILINDUNGI.</p>

        <div class="footer-links">
            <a href="#tujuan">TUJUAN</a>
            <a href="#narasumber">NARASUMBER</a>
            <a href="#manfaat">MANFAAT</a>
        </div>
    </footer>

    <!-- MOBILE FLOATING NAV -->
    <nav class="mobile-nav" id="mobileNav">

        <a href="#home">
            <span class="ms-icon">home</span>
            <span>HOME</span>
        </a>

        <a href="#tujuan">
            <span class="ms-icon">flag</span>
            <span>TUJUAN</span>
        </a>

        <a href="#daftar" class="mobile-primary">
            <span class="ms-icon">north_east</span>
            <span>CTA</span>
        </a>

        <a href="#manfaat">
            <span class="ms-icon">card_giftcard</span>
            <span>MANFAAT</span>
        </a>

        <a href="#narasumber">
            <span class="ms-icon">person</span>
            <span>NARASUMBER</span>
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


        /* =================================
           REGISTRATION FORM (SHEETS)
        ================================= */

        (function() {
            // URL Web App Google Apps Script yang sudah di-deploy.
            // Panduan: .ai/brief/santri-dan-teknologi/apps-script.md
            var APPS_SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbxgpH_MTaDReWIV-ZP_61LtuGBQcYwgZEHPYDJxBdugSynT2e6ik6mjo_fUh7mmrC2_/exec';

            var form = document.getElementById('registration-form');
            if (!form) return;

            var formCard = document.getElementById('reg-form-card');
            var successCard = document.getElementById('success-card');
            var successName = document.getElementById('success-name');
            var alertBox = document.getElementById('form-alert');
            var submitButton = document.getElementById('submit-button');
            var submitLabel = document.getElementById('submit-label');
            var statusText = document.getElementById('form-status');
            var step1 = document.getElementById('step-1');
            var step2 = document.getElementById('step-2');
            var stepNext = document.getElementById('step-next');
            var stepBack = document.getElementById('step-back');

            var textFields = {
                nama: {
                    input: document.getElementById('nama'),
                    helper: document.getElementById('nama-helper'),
                    def: 'Nama sesuai identitas Ayah/Bunda.',
                    err: 'Nama minimal 3 karakter.'
                },
                kota: {
                    input: document.getElementById('kota'),
                    helper: document.getElementById('kota-helper'),
                    def: 'Cukup nama kota, contoh: Yogyakarta.',
                    err: 'Kota minimal 2 karakter.'
                },
                no_wa: {
                    input: document.getElementById('no_wa'),
                    helper: document.getElementById('no_wa-helper'),
                    def: 'Format: 08xxxxxxxxxx atau +628xxxxxxxxxx — tautan Zoom dikirim ke nomor ini.',
                    err: 'Nomor HP tidak valid. Contoh: 08123456789'
                }
            };

            Object.keys(textFields).forEach(function(key) {
                var f = textFields[key];

                function update() {
                    if (f.input.value.trim() === '') {
                        f.input.removeAttribute('aria-invalid');
                        f.helper.textContent = f.def;
                        f.helper.classList.remove('error');
                        return;
                    }
                    var ok = f.input.checkValidity();
                    f.input.setAttribute('aria-invalid', ok ? 'false' : 'true');
                    f.helper.textContent = ok ? f.def : f.err;
                    f.helper.classList.toggle('error', !ok);
                }
                f.input.addEventListener('input', update);
                f.input.addEventListener('blur', update);
            });

            Array.prototype.forEach.call(form.querySelectorAll('select[required]'), function(select) {
                var helper = document.getElementById(select.id + '-helper');
                helper._def = helper.textContent;

                select.addEventListener('change', function() {
                    var ok = select.value !== '';
                    select.setAttribute('aria-invalid', ok ? 'false' : 'true');
                    helper.classList.toggle('error', !ok);
                    helper.textContent = ok ? helper._def : 'Pilih salah satu.';
                });
            });

            Array.prototype.forEach.call(form.querySelectorAll('fieldset'), function(group) {
                var helper = group.querySelector('.helper');
                helper._def = helper.textContent;

                var boxes = group.querySelectorAll('input[type="checkbox"]');
                var radios = group.querySelectorAll('input[type="radio"]');
                var max = parseInt(group.getAttribute('data-max') || '', 10);

                function clearInvalid() {
                    group.removeAttribute('aria-invalid');
                    helper.classList.remove('error');
                    helper.textContent = helper._def;
                }

                if (boxes.length) {
                    Array.prototype.forEach.call(boxes, function(box) {
                        box.addEventListener('change', function() {
                            var checked = group.querySelectorAll('input:checked');
                            Array.prototype.forEach.call(boxes, function(b) {
                                b.disabled = checked.length >= max && !b.checked;
                            });
                            if (checked.length >= 1) clearInvalid();
                        });
                    });
                }

                if (radios.length) {
                    Array.prototype.forEach.call(radios, function(radio) {
                        radio.addEventListener('change', clearInvalid);
                    });
                }
            });

            function validateGroups() {
                var firstInvalid = null;

                Array.prototype.forEach.call(form.querySelectorAll('fieldset'), function(group) {
                    var helper = group.querySelector('.helper');
                    var checked = group.querySelectorAll('input:checked').length;
                    var maxAttr = group.getAttribute('data-max');
                    var ok = maxAttr
                        ? (checked >= 1 && checked <= parseInt(maxAttr, 10))
                        : checked >= 1;

                    if (!ok) {
                        group.setAttribute('aria-invalid', 'true');
                        helper.classList.add('error');
                        helper.textContent = maxAttr
                            ? 'Pilih minimal 1 dan maksimal ' + maxAttr + '.'
                            : 'Pilih salah satu.';
                        if (!firstInvalid) firstInvalid = group;
                    } else {
                        group.removeAttribute('aria-invalid');
                        helper.classList.remove('error');
                        helper.textContent = helper._def;
                    }
                });

                return firstInvalid;
            }

            function validateStep(container) {
                var els = container.querySelectorAll('input, select, textarea');
                var firstInvalid = null;

                Array.prototype.forEach.call(els, function(el) {
                    if (el.disabled) return;
                    if (!el.checkValidity()) {
                        if (!firstInvalid) firstInvalid = el;
                        el.dispatchEvent(new Event(el.tagName === 'SELECT' ? 'change' : 'input'));
                    }
                });

                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstInvalid.reportValidity();
                    return false;
                }
                return true;
            }

            function goToStep(step) {
                step1.hidden = step !== 1;
                step2.hidden = step !== 2;
                formCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }

            stepNext.addEventListener('click', function() {
                alertBox.hidden = true;
                if (!validateStep(step1)) return;
                goToStep(2);
            });

            stepBack.addEventListener('click', function() {
                alertBox.hidden = true;
                goToStep(1);
            });

            function showAlert(message) {
                alertBox.textContent = message;
                alertBox.hidden = false;
            }

            function setLoading(isLoading) {
                submitButton.disabled = isLoading;
                submitButton.setAttribute('aria-busy', String(isLoading));
                submitLabel.textContent = isLoading ? 'Mengirim...' : 'Daftar Sekarang';
                statusText.textContent = isLoading ? 'Mohon tunggu, sedang menyimpan data...' : '';
            }

            function checkedValues(name) {
                return Array.prototype.map.call(
                    form.querySelectorAll('input[name="' + name + '"]:checked'),
                    function(el) { return el.value; }
                ).join('; ');
            }

            function radioValue(name) {
                var el = form.querySelector('input[name="' + name + '"]:checked');
                return el ? el.value : '';
            }

            function fieldValue(id) {
                var el = document.getElementById(id);
                return el ? el.value.trim() : '';
            }

            form.addEventListener('submit', async function(event) {
                event.preventDefault();
                alertBox.hidden = true;

                if (APPS_SCRIPT_URL === 'GANTI_DENGAN_URL_WEB_APP_ANDA') {
                    showAlert('Formulir belum aktif. Silakan coba lagi beberapa saat lagi atau hubungi admin.');
                    return;
                }

                var invalidGroup = validateGroups();

                if (!form.checkValidity()) {
                    form.reportValidity();
                    if (invalidGroup) invalidGroup.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    return;
                }

                if (invalidGroup) {
                    invalidGroup.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    return;
                }

                var payload = {
                    'nama': fieldValue('nama'),
                    'kota': fieldValue('kota'),
                    'no_wa': fieldValue('no_wa'),
                    'asal_pesantren': fieldValue('asal_pesantren'),
                    'status': fieldValue('status'),
                    'jenjang': fieldValue('jenjang'),
                    'sumber_info': fieldValue('sumber_info'),
                    'bekal_penting': checkedValues('bekal_penting'),
                    'penting_teknologi': radioValue('penting_teknologi'),
                    'waktu_tepat': radioValue('waktu_tepat'),
                    'manfaat': checkedValues('manfaat'),
                    'kekhawatiran': radioValue('kekhawatiran'),
                    'keresahan': fieldValue('keresahan')
                };

                setLoading(true);

                try {
                    var response = await fetch(APPS_SCRIPT_URL, {
                        method: 'POST',
                        body: new URLSearchParams(payload)
                    });

                    if (!response.ok) {
                        throw new Error('HTTP ' + response.status);
                    }

                    var result;
                    try {
                        result = await response.json();
                    } catch (e) {
                        result = { result: 'success' };
                    }

                    if (result && result.result === 'error') {
                        throw new Error(result.message || 'Gagal menyimpan data.');
                    }

                    successName.textContent = payload.nama;
                    formCard.hidden = true;
                    successCard.hidden = false;
                    successCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } catch (err) {
                    console.error('[pendaftaran] Gagal kirim:', err);
                    showAlert('Pendaftaran gagal terkirim. Silakan coba lagi atau hubungi admin Alhazen Academy.');
                    setLoading(false);
                }
            });
        })();
    </script>

</body>

</html>
