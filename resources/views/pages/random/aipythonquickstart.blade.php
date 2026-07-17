<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI & Python Quickstart · Alhazen Plus</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:opsz,wght@20..12,400;20..12,500;20..12,600;20..12,700;20..12,800&display=swap"
        rel="stylesheet" />

    <style>
        :root {
            --navy: #0B1A33;
            --navy-soft: #111f3a;
            --blue: #1A5CFF;
            --blue-hover: #1249d4;
            --blue-light: #E8EEFF;
            --blue-glow: rgba(26, 92, 255, 0.12);
            --gray-50: #F8F9FA;
            --gray-100: #F1F3F5;
            --gray-200: #E9ECEF;
            --gray-300: #DEE2E6;
            --gray-400: #ADB5BD;
            --gray-500: #6C757D;
            --gray-600: #495057;
            --gray-700: #343A40;
            --gray-800: #212529;
            --white: #FFFFFF;
            --radius: 14px;
            --radius-sm: 10px;
            --radius-lg: 20px;
            --shadow-xs: 0 1px 3px rgba(0, 0, 0, 0.04);
            --shadow-sm: 0 2px 12px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 8px 32px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 16px 48px rgba(0, 0, 0, 0.10);
            --shadow-blue: 0 8px 32px rgba(26, 92, 255, 0.18);
            --transition: 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--white);
            color: var(--gray-700);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--navy);
            font-weight: 700;
            line-height: 1.25;
            letter-spacing: -0.025em;
        }

        .container {
            max-width: 1120px;
        }

        /* ── NAVBAR ── */
        .navbar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid rgba(0, 0, 0, 0.04);
            padding: 0 0;
            transition: var(--transition);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.15rem;
            color: var(--navy);
            letter-spacing: -0.03em;
        }

        .navbar-brand img {
            display: block;
        }

        .navbar-brand span {
            color: var(--blue);
        }

        .nav-link {
            font-weight: 500;
            font-size: 0.88rem;
            color: var(--gray-600);
            padding: 0.6rem 1rem;
            border-radius: var(--radius-sm);
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--blue);
            background: var(--blue-light);
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* ── BUTTONS ── */
        .btn-blue {
            background: var(--blue);
            color: var(--white);
            font-weight: 600;
            font-size: 0.9rem;
            padding: 14px 32px;
            border: none;
            border-radius: var(--radius-sm);
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-blue:hover {
            background: var(--blue-hover);
            color: var(--white);
            transform: translateY(-1px);
            box-shadow: var(--shadow-blue);
        }

        .btn-blue-outline {
            background: transparent;
            color: var(--blue);
            font-weight: 600;
            font-size: 0.9rem;
            padding: 13px 32px;
            border: 1.5px solid var(--blue);
            border-radius: var(--radius-sm);
            transition: var(--transition);
            text-decoration: none;
        }

        .btn-blue-outline:hover {
            background: var(--blue);
            color: var(--white);
            transform: translateY(-1px);
        }

        .btn-white {
            background: var(--white);
            color: var(--navy);
            font-weight: 700;
            font-size: 0.9rem;
            padding: 14px 32px;
            border: none;
            border-radius: var(--radius-sm);
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-white:hover {
            color: var(--blue);
            transform: translateY(-1px);
            box-shadow: 0 8px 32px rgba(255, 255, 255, 0.2);
        }

        .btn-ghost {
            background: rgba(255, 255, 255, 0.1);
            color: var(--white);
            font-weight: 600;
            font-size: 0.9rem;
            padding: 14px 32px;
            border: 1.5px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-sm);
            transition: var(--transition);
            text-decoration: none;
        }

        .btn-ghost:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.35);
            color: var(--white);
        }

        /* ── HERO ── */
        .hero {
            padding: 140px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, var(--blue-glow) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--blue-light);
            color: var(--blue);
            font-weight: 600;
            font-size: 0.78rem;
            padding: 6px 16px;
            border-radius: 100px;
            margin-bottom: 24px;
            letter-spacing: 0.01em;
        }

        .hero h1 {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.12;
            margin-bottom: 20px;
        }

        .hero h1 .hl {
            color: var(--blue);
        }

        .hero .lead {
            font-size: 1.1rem;
            color: var(--gray-500);
            max-width: 520px;
            line-height: 1.75;
            margin-bottom: 32px;
        }

        .hero-meta {
            display: flex;
            gap: 32px;
            margin-bottom: 36px;
        }

        .hero-meta-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .hero-meta-item .meta-icon {
            width: 40px;
            height: 40px;
            border-radius: var(--radius-sm);
            background: var(--blue-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            font-size: 1rem;
        }

        .hero-meta-item .meta-label {
            font-size: 0.78rem;
            color: var(--gray-400);
            text-transform: uppercase;
            letter-spacing: 0.04em;
            font-weight: 500;
        }

        .hero-meta-item .meta-value {
            font-size: 0.92rem;
            color: var(--navy);
            font-weight: 600;
        }

        .hero-price {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 8px;
        }

        .hero-price .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #22c55e;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.4;
                transform: scale(0.8);
            }
        }

        .hero-price span {
            font-size: 0.85rem;
            color: var(--gray-600);
            font-weight: 500;
        }

        .hero-price strong {
            color: var(--navy);
            font-weight: 700;
            font-size: 0.95rem;
        }

        .hero-visual {
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 40px;
            position: relative;
        }

        .hero-visual-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
        }

        .hero-visual-header .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .hero-visual-icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .hero-visual-icon i {
            font-size: 2.5rem;
            color: var(--blue);
            opacity: 0.6;
        }

        .hero-visual-label {
            text-align: center;
            font-size: 0.88rem;
            color: var(--gray-500);
            margin-bottom: 24px;
        }

        .hero-visual-label strong {
            color: var(--navy);
        }

        /* ── CODE BLOCK ── */
        .code-block {
            background: var(--navy);
            border-radius: var(--radius);
            padding: 20px 24px;
            font-family: 'SF Mono', 'Fira Code', 'Consolas', monospace;
            font-size: 0.8rem;
            line-height: 2;
            color: #e2e8f0;
            overflow-x: auto;
        }

        .code-block .dim {
            color: #64748b;
        }

        .code-block .hl {
            color: #60a5fa;
        }

        /* ── SECTIONS ── */
        section {
            padding: 100px 0;
        }

        .section-bg {
            background: var(--gray-50);
        }

        .section-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--blue);
            background: var(--blue-light);
            padding: 5px 14px;
            border-radius: 100px;
            margin-bottom: 16px;
        }

        .section-heading {
            font-size: 2.4rem;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 12px;
        }

        .section-desc {
            color: var(--gray-500);
            font-size: 1.05rem;
            max-width: 560px;
        }

        .text-center .section-desc {
            margin-left: auto;
            margin-right: auto;
        }

        /* ── CARDS ── */
        .card-clean {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 32px 28px;
            height: 100%;
            transition: var(--transition);
        }

        .card-clean:hover {
            border-color: transparent;
            box-shadow: var(--shadow-md);
            transform: translateY(-4px);
        }

        .card-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-sm);
            background: var(--blue-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
            color: var(--blue);
            margin-bottom: 20px;
        }

        .card-clean h5 {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .card-clean p {
            color: var(--gray-500);
            font-size: 0.9rem;
            margin-bottom: 0;
            line-height: 1.7;
        }

        /* ── FEATURES ROW ── */
        .feature-row {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 20px 0;
            border-bottom: 1px solid var(--gray-100);
        }

        .feature-row:last-child {
            border-bottom: none;
        }

        .feature-row .feat-icon {
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            border-radius: var(--radius-sm);
            background: var(--blue-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            font-size: 1rem;
        }

        .feature-row h6 {
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 2px;
        }

        .feature-row p {
            color: var(--gray-500);
            font-size: 0.88rem;
            margin-bottom: 0;
        }

        /* ── FACILITY ── */
        .facility-item {
            text-align: center;
            padding: 32px 20px;
            border-radius: var(--radius);
            border: 1px solid var(--gray-200);
            background: var(--white);
            transition: var(--transition);
            height: 100%;
        }

        .facility-item:hover {
            border-color: transparent;
            box-shadow: var(--shadow-md);
            transform: translateY(-4px);
        }

        .facility-item .fi-icon {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--blue-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: var(--blue);
            margin: 0 auto 16px;
        }

        .facility-item h6 {
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .facility-item p {
            color: var(--gray-400);
            font-size: 0.84rem;
            margin-bottom: 0;
        }

        /* ── SCHEDULE ── */
        .schedule-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 48px 40px;
        }

        .schedule-meta {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            margin-bottom: 36px;
        }

        .schedule-meta-item .sm-label {
            font-size: 0.72rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--gray-400);
            margin-bottom: 4px;
        }

        .schedule-meta-item .sm-value {
            font-size: 1rem;
            font-weight: 700;
            color: var(--navy);
        }

        .timeline-step {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 14px 0;
        }

        .timeline-num {
            flex-shrink: 0;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--blue-light);
            color: var(--blue);
            font-weight: 700;
            font-size: 0.82rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .timeline-content strong {
            font-size: 0.92rem;
        }

        .timeline-content .dur {
            font-size: 0.8rem;
            color: var(--gray-400);
            font-weight: 400;
        }

        /* ── PRICING ── */
        .pricing-box {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 48px 40px;
            text-align: center;
            transition: var(--transition);
        }

        .pricing-box:hover {
            box-shadow: var(--shadow-lg);
            border-color: transparent;
        }

        .pricing-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--blue-light);
            color: var(--blue);
            font-weight: 700;
            font-size: 0.8rem;
            padding: 6px 16px;
            border-radius: 100px;
            margin-bottom: 16px;
        }

        .pricing-box h3 {
            font-size: 1.4rem;
            margin-bottom: 4px;
        }

        .pricing-box .subtitle {
            color: var(--gray-400);
            font-size: 0.88rem;
            margin-bottom: 20px;
        }

        .pricing-amount {
            font-size: 3.2rem;
            font-weight: 800;
            color: var(--navy);
            line-height: 1;
            margin-bottom: 4px;
        }

        .pricing-amount small {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--gray-400);
        }

        .pricing-list {
            list-style: none;
            padding: 0;
            margin: 28px 0 36px;
            text-align: left;
        }

        .pricing-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
            font-size: 0.9rem;
            color: var(--gray-600);
        }

        .pricing-list li i {
            color: var(--blue);
            font-size: 1rem;
            flex-shrink: 0;
        }

        /* ── FAQ ── */
        .faq-item {
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-sm);
            margin-bottom: 8px;
            background: var(--white);
            overflow: hidden;
            transition: var(--transition);
        }

        .faq-item:hover {
            border-color: var(--gray-300);
        }

        .faq-q {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 24px;
            background: transparent;
            border: none;
            cursor: pointer;
            font-family: inherit;
            font-weight: 600;
            font-size: 0.92rem;
            color: var(--gray-700);
            text-align: left;
            gap: 16px;
            transition: var(--transition);
        }

        .faq-q:hover {
            color: var(--blue);
        }

        .faq-q .chevron {
            color: var(--blue);
            font-size: 0.9rem;
            transition: transform var(--transition);
            flex-shrink: 0;
        }

        .faq-q.active .chevron {
            transform: rotate(180deg);
        }

        .faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1), padding 0.3s ease;
            padding: 0 24px;
        }

        .faq-a.open {
            max-height: 300px;
            padding: 0 24px 20px;
        }

        .faq-a p {
            color: var(--gray-500);
            font-size: 0.88rem;
            line-height: 1.75;
            margin-bottom: 0;
        }

        /* ── TERMINAL ── */
        .terminal {
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius);
            overflow: hidden;
        }

        .terminal-bar {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 12px 16px;
            background: var(--gray-100);
            border-bottom: 1px solid var(--gray-200);
        }

        .terminal-bar .tdot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .terminal-bar span:last-child {
            margin-left: auto;
            font-size: 0.72rem;
            color: var(--gray-400);
            font-weight: 500;
        }

        .terminal-body {
            padding: 20px 24px;
        }

        /* ── BADGES ── */
        .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            color: var(--gray-700);
            font-weight: 500;
            font-size: 0.82rem;
            padding: 8px 16px;
            border-radius: 100px;
        }

        .badge-pill i {
            color: var(--blue);
        }

        /* ── CTA ── */
        .cta-section {
            background: var(--navy);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -40%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(26, 92, 255, 0.15) 0%, transparent 70%);
            pointer-events: none;
        }

        .cta-section h2 {
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 16px;
        }

        .cta-section p {
            color: rgba(255, 255, 255, 0.55);
            font-size: 1.05rem;
            max-width: 540px;
            margin: 0 auto 32px;
        }

        .cta-hint {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.3);
            margin-top: 24px;
        }

        /* ── IFRAME ── */
        .iframe-wrapper {
            width: 100%;
            border-radius: var(--radius);
            overflow: hidden;
            border: 1px solid var(--gray-200);
            background: var(--white);
            box-shadow: var(--shadow-sm);
        }

        .iframe-wrapper iframe {
            width: 100%;
            height: 1400px;
            border: 0;
            display: block;
        }

        /* ── FOOTER ── */
        .site-footer {
            position: relative;
            overflow: hidden;
            background: linear-gradient(160deg, #1A5CFF 0%, #1249d4 35%, #0B1A33 75%, #061024 100%);
            color: var(--white);
            padding: 64px 5vw 0;
        }

        .site-footer .deco {
            position: absolute;
            pointer-events: none;
            opacity: 0.08;
            z-index: 0;
        }

        .site-footer .deco--controller {
            left: -40px;
            bottom: 40px;
            width: 260px;
            height: 260px;
            transform: rotate(-8deg);
        }

        .site-footer .deco--clock {
            left: 8%;
            top: 8%;
            width: 140px;
            height: 140px;
        }

        .site-footer .deco--plus {
            left: 22%;
            bottom: 18%;
            width: 60px;
            height: 60px;
        }

        .site-footer .deco--star {
            position: absolute;
            right: -60px;
            bottom: -40px;
            width: 420px;
            height: 420px;
            opacity: 0.95;
            z-index: 0;
        }

        .footer-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1.1fr;
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .brand-logo img {
            width: 56px;
            height: 56px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .brand-logo .brand-name {
            font-weight: 700;
            font-size: 1.35rem;
            line-height: 1.15;
            color: var(--white);
        }

        .social-row {
            display: flex;
            gap: 12px;
            margin-bottom: 22px;
        }

        .social-row a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.1rem;
            text-decoration: none;
            transition: transform 0.15s ease, filter 0.15s ease;
        }

        .social-row a:hover {
            transform: translateY(-3px);
            filter: brightness(1.08);
        }

        .social-row a.fb {
            background: #1877F2;
        }

        .social-row a.ig {
            background: radial-gradient(circle at 30% 110%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }

        .social-row a.tiktok {
            background: #000;
        }

        .social-row a.li {
            background: #0A66C2;
        }

        .social-row a.yt {
            background: #FF0000;
        }

        .brand-desc {
            max-width: 420px;
            color: rgba(255, 255, 255, 0.88);
            line-height: 1.7;
            font-size: 0.92rem;
            text-align: justify;
        }

        .footer-col h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--white);
            margin: 0 0 20px;
        }

        .footer-col ul {
            list-style: none;
            margin: 0 0 8px;
            padding: 0;
        }

        .footer-col ul li {
            margin-bottom: 14px;
        }

        .footer-col ul li a {
            color: rgba(255, 255, 255, 0.88);
            text-decoration: none;
            font-size: 0.95rem;
            transition: opacity 0.15s ease;
        }

        .footer-col ul li a:hover {
            opacity: 0.75;
            text-decoration: underline;
        }

        /*.contact-block { margin-top: 36px; }*/
        .contact-block p {
            margin: 0 0 14px;
            color: rgba(255, 255, 255, 0.88);
        }

        .contact-block a {
            color: rgba(255, 255, 255, 0.88);
            text-decoration: none;
        }

        .contact-block a:hover {
            text-decoration: underline;
        }

        .cert-block {
            margin-top: 36px;
        }

        .cert-badge {
            width: 120px;
            background: #fff;
            border-radius: 16px;
            padding: 14px;
            display: block;
        }

        .cert-badge img {
            width: 100%;
            display: block;
        }

        .address-col a {
            color: rgba(255, 255, 255, 0.88);
            text-decoration: underline;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .footer-bottom {
            position: relative;
            z-index: 1;
            max-width: 1400px;
            margin: 56px auto 0;
            border-top: 1px solid rgba(255, 255, 255, 0.25);
            padding: 24px 0;
            text-align: center;
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.88);
        }

        @media (max-width: 980px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                padding: 2rem;
            }
        }

        @media (max-width: 620px) {
            .footer-grid {
                grid-template-columns: 1fr;
                padding: 2rem;
            }

            .site-footer {
                padding: 48px 6vw 0;
            }
        }

        /* ── REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.7s cubic-bezier(0.4, 0, 0.2, 1), transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-delay-1 {
            transition-delay: 0.1s;
        }

        .reveal-delay-2 {
            transition-delay: 0.2s;
        }

        .reveal-delay-3 {
            transition-delay: 0.3s;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 992px) {
            .hero {
                padding: 110px 0 60px;
            }

            .hero h1 {
                font-size: 2.4rem;
            }

            .section-heading {
                font-size: 2rem;
            }

            section {
                padding: 72px 0;
            }

            .cta-section h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 100px 0 48px;
            }

            .hero h1 {
                font-size: 1.9rem;
            }

            .hero .lead {
                font-size: 0.95rem;
            }

            .hero-meta {
                flex-direction: column;
                gap: 16px;
            }

            .section-heading {
                font-size: 1.7rem;
            }

            .schedule-card {
                padding: 32px 20px;
            }

            .pricing-box {
                padding: 36px 24px;
            }

            .pricing-amount {
                font-size: 2.6rem;
            }

            .site-footer {
                padding: 48px 0 0;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.6rem;
            }

            .hero-visual {
                padding: 24px 16px;
            }

            .section-heading {
                font-size: 1.5rem;
            }

            .card-clean {
                padding: 24px 20px;
            }

            .btn-blue,
            .btn-blue-outline,
            .btn-white,
            .btn-ghost {
                padding: 12px 24px;
                font-size: 0.85rem;
            }
        }

        /* ── IFRAME RESPONSIVE ── */
        @media (max-width: 992px) {
            .iframe-wrapper iframe {
                height: 1500px;
            }

            .iframe-wrapper {
                margin: auto;
                width: 60%;
            }
        }

        @media (max-width: 768px) {
            .iframe-wrapper iframe {
                height: 1550px;
            }

            .iframe-wrapper {
                margin: auto;
                width: 80%;
            }
        }

        @media (max-width: 576px) {
            .iframe-wrapper iframe {
                height: 1600px;
            }

            .iframe-wrapper {
                margin: auto;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- ══════════════════════════════════════════════════════════════
     NAVBAR
     ══════════════════════════════════════════════════════════════ -->
    <nav class="navbar navbar-expand-lg fixed-top py-2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://lh3.googleusercontent.com/d/1Otrb-FnAy3zpUSdE003Em617u4DPlUEE" alt="Alhazen Plus"
                    style="height:36px; width:auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <i class="bi bi-list fs-3" style="color:var(--navy)"></i>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
                    <li class="nav-item"><a class="nav-link" href="#kelas">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#jadwal">Jadwal</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    <li class="nav-item ms-lg-2">
                        <a href="#registration-form" class="btn btn-blue" style="padding:10px 24px;font-size:0.82rem;">
                            Daftar Sekarang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ══════════════════════════════════════════════════════════════
     HERO
     ══════════════════════════════════════════════════════════════ -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="hero-badge">
                        <i class="bi bi-live"></i> Live Online · 2 Jam
                    </div>
                    <h1>
                        Bikin Aplikasi Pertamamu dalam<br>
                        <span class="hl">2 Jam</span> · Tanpa Background IT
                    </h1>
                    <p class="lead">
                        Ngoding yang dulu terasa rumit, kini jadi mudah dengan AI sebagai asisten pribadimu.
                        Kelas santai khusus pemula ini akan membantumu membangun aplikasi nyata.
                    </p>

                    <div class="hero-meta">
                        <div class="hero-meta-item">
                            <div class="meta-icon"><i class="bi bi-calendar-event"></i></div>
                            <div>
                                <div class="meta-label">Tanggal</div>
                                <div class="meta-value">Jumat, 21 Agt 2026</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#registration-form" class="btn btn-blue">
                            <i class="bi bi-arrow-right-circle"></i> Amankan Kursi
                        </a>
                        <a href="#kelas" class="btn btn-blue-outline">Pelajari Dulu</a>
                    </div>

                    <div class="hero-price">
                        <span class="dot"></span>
                        <span>Hanya <strong>Rp49.000</strong></span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-visual">
                        <div class="hero-visual-header">
                            <span class="tdot" style="background:#ff5f57"></span>
                            <span class="tdot" style="background:#febc2e"></span>
                            <span class="tdot" style="background:#28c840"></span>
                        </div>
                        <div class="hero-visual-icon">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <div class="hero-visual-label">
                            <strong>Aplikasi Penarik Data Otomatis</strong><br>
                            Yang akan kamu buat di kelas ini
                        </div>
                        <div class="code-block">
                            <span class="dim"># Output data dari web</span><br>
                            <span class="hl">Judul</span>&nbsp;&nbsp;&nbsp;&nbsp;: "Python untuk Pemula"<br>
                            <span class="hl">Harga</span>&nbsp;&nbsp;&nbsp;&nbsp;: Rp 49.000<br>
                            <span class="hl">Penulis</span>&nbsp;&nbsp;: Tim Alhazen Plus<br>
                            <span class="hl">Rating</span>&nbsp;&nbsp;&nbsp;: 4.8 / 5.0
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     PAIN POINTS
     ══════════════════════════════════════════════════════════════ -->
    <section class="section-bg" id="kelas">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-7">
                    <div class="section-tag"><i class="bi bi-question-circle"></i> Apakah kamu sering merasa begini?
                    </div>
                    <h2 class="section-heading">Kelas ini untukmu jika…</h2>
                    <p class="section-desc mx-auto">Tiga masalah umum yang membuat banyak orang menunda belajar coding.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 reveal">
                    <div class="card-clean">
                        <div class="card-icon"><i class="bi bi-headset"></i></div>
                        <h5>Bahasa Terlalu Teknis</h5>
                        <p>Pengen belajar coding atau bikin tools, tapi bahasanya terasa terlalu teknis dan bikin pusing
                            duluan.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal reveal-delay-1">
                    <div class="card-clean">
                        <div class="card-icon"><i class="bi bi-chat-dots"></i></div>
                        <h5>AI cuma buat nanya-nanya</h5>
                        <p>Sering dengar kehebatan AI, tapi sejauh ini baru sebatas pakai buat nanya-nanya doang.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal reveal-delay-2">
                    <div class="card-clean">
                        <div class="card-icon"><i class="bi bi-rocket-takeoff"></i></div>
                        <h5>Mau otomatisasi, bingung mulai</h5>
                        <p>Mau punya skill bikin aplikasi otomatis buat narik data web, tapi nggak tahu harus mulai dari
                            mana.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <p class="fs-5 fw-bold" style="color:var(--navy)">
                    Jika jawabannya <span style="color:var(--blue)">"YA"</span>, berarti kamu ada di tempat yang tepat!
                </p>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     WHAT YOU'LL BUILD
     ══════════════════════════════════════════════════════════════ -->
    <section>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 reveal">
                    <div class="section-tag"><i class="bi bi-code-square"></i> Hasil Nyata</div>
                    <h2 class="section-heading">Apa yang akan kamu buat?</h2>
                    <p class="fs-5 fw-semibold" style="color:var(--navy); line-height:1.6;">
                        Sebuah <strong>"Robot Pintar"</strong> (Aplikasi Penarik Data) yang bisa menarik, menyalin, dan
                        merapikan data dari halaman web secara instan.
                    </p>
                    <p style="color:var(--gray-500); margin-top:12px;">
                        Nggak perlu khawatir soal ngetik kode rumit. <strong style="color:var(--navy)">AI yang akan
                            menulis kodenya</strong> untukmu, kamu tinggal menjalankan dan memodifikasinya tanpa harus
                        menghafal sintaks.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-pill"><i class="bi bi-check-circle-fill"></i> Tanpa hafalan</span>
                        <span class="badge-pill"><i class="bi bi-check-circle-fill"></i> AI sebagai co-pilot</span>
                        <span class="badge-pill"><i class="bi bi-check-circle-fill"></i> Hasil langsung jadi</span>
                    </div>
                </div>
                <div class="col-lg-6 reveal reveal-delay-1">
                    <div class="terminal">
                        <div class="terminal-bar">
                            <span class="tdot" style="background:#ff5f57"></span>
                            <span class="tdot" style="background:#febc2e"></span>
                            <span class="tdot" style="background:#28c840"></span>
                            <span>Terminal, output data</span>
                        </div>
                        <div class="terminal-body">
                            <div class="code-block">
                                <span class="hl">Judul</span>&nbsp;&nbsp;&nbsp;&nbsp;: "Python untuk Pemula"<br>
                                <span class="hl">Harga</span>&nbsp;&nbsp;&nbsp;&nbsp;: Rp 49.000<br>
                                <span class="hl">Penulis</span>&nbsp;&nbsp;: Tim Alhazen Plus<br>
                                <span class="hl">Rating</span>&nbsp;&nbsp;&nbsp;: 4.8 / 5.0<br>
                                <span class="dim">---</span><br>
                                <span class="hl">Judul</span>&nbsp;&nbsp;&nbsp;&nbsp;: "AI &amp; Otomatisasi"<br>
                                <span class="hl">Harga</span>&nbsp;&nbsp;&nbsp;&nbsp;: Rp 89.000<br>
                                <span class="hl">Penulis</span>&nbsp;&nbsp;: Alhazen Labs<br>
                                <span class="hl">Rating</span>&nbsp;&nbsp;&nbsp;: 4.9 / 5.0
                            </div>
                        </div>
                    </div>
                    <p style="color:var(--gray-400); font-size:0.82rem; margin-top:12px;">
                        <i class="bi bi-arrow-right" style="color:var(--blue)"></i> Data terstruktur rapi, siap pakai!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     WHY JOIN
     ══════════════════════════════════════════════════════════════ -->
    <section class="section-bg">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-7">
                    <div class="section-tag"><i class="bi bi-stars"></i> Kenapa Harus Ikut</div>
                    <h2 class="section-heading">3 Alasan Ikut Kelas Ini</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 reveal">
                    <div class="card-clean">
                        <div class="feature-row" style="border:none;padding:0;">
                            <div class="feat-icon"><i class="bi bi-clock-history"></i></div>
                            <div>
                                <h6>Anti Ribet &amp; Cepat</h6>
                                <p>Cukup 2 jam, dari nol sampai punya aplikasi pengumpul data otomatis buatan sendiri.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 reveal reveal-delay-1">
                    <div class="card-clean">
                        <div class="feature-row" style="border:none;padding:0;">
                            <div class="feat-icon"><i class="bi bi-person-heart"></i></div>
                            <div>
                                <h6>Ramah Pemula Total</h6>
                                <p>Didesain khusus buat mahasiswa, pekerja kantoran, career switcher, atau siapa saja
                                    yang belum pernah coding.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 reveal reveal-delay-2">
                    <div class="card-clean">
                        <div class="feature-row" style="border:none;padding:0;">
                            <div class="feat-icon"><i class="bi bi-robot"></i></div>
                            <div>
                                <h6>AI sebagai Partner</h6>
                                <p>Kamu akan belajar rahasia memberikan instruksi ke AI agar AI bekerja mengekstrak data
                                    persis seperti yang kamu butuhkan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     FACILITIES
     ══════════════════════════════════════════════════════════════ -->
    <section id="fasilitas">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-7">
                    <div class="section-tag"><i class="bi bi-gift"></i> Fasilitas Lengkap</div>
                    <h2 class="section-heading">Yang Kamu Bawa Pulang</h2>
                    <p class="section-desc mx-auto">Selain ilmu dan praktik langsung, dapatkan fasilitas eksklusif ini.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 col-lg reveal">
                    <div class="facility-item">
                        <div class="fi-icon"><i class="bi bi-laptop"></i></div>
                        <h6>Panduan Instalasi</h6>
                        <p>Step-by-step, dibagikan sebelum kelas. Sangat mudah diikuti.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg reveal reveal-delay-1">
                    <div class="facility-item">
                        <div class="fi-icon"><i class="bi bi-file-earmark-code"></i></div>
                        <h6>Cheat Sheet Prompt AI</h6>
                        <p>Contekan cara menyuruh AI bikin kode yang benar.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg reveal reveal-delay-2">
                    <div class="facility-item">
                        <div class="fi-icon"><i class="bi bi-play-circle"></i></div>
                        <h6>Rekaman Kelas</h6>
                        <p>Bisa ditonton ulang kalau ada yang terlewat.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg reveal">
                    <div class="facility-item">
                        <div class="fi-icon"><i class="bi bi-award"></i></div>
                        <h6>E-Sertifikat</h6>
                        <p>Bukti kamu sudah upgrade skill.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg reveal reveal-delay-1">
                    <div class="facility-item">
                        <div class="fi-icon"><i class="bi bi-whatsapp"></i></div>
                        <h6>Grup Komunitas WA</h6>
                        <p>Tempat diskusi bareng peserta lain.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     SCHEDULE
     ══════════════════════════════════════════════════════════════ -->
    <section class="section-bg" id="jadwal">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-7">
                    <div class="section-tag"><i class="bi bi-calendar3"></i> Detail Jadwal</div>
                    <h2 class="section-heading">Kapan Kelas Berlangsung?</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="schedule-card">
                        <div class="schedule-meta">
                            <div class="schedule-meta-item text-center">
                                <div class="sm-label">Hari &amp; Tanggal</div>
                                <div class="sm-value">Jumat, 21 Agustus 2026</div>
                            </div>
                            <div class="schedule-meta-item text-center">
                                <div class="sm-label">Waktu</div>
                                <div class="sm-value">20.00 – 22.00 WIB</div>
                            </div>
                            <div class="schedule-meta-item text-center">
                                <div class="sm-label">Format</div>
                                <div class="sm-value"><i class="bi bi-live text-blue me-1"></i> Live Online</div>
                            </div>
                        </div>
                        <hr style="border-color:var(--gray-200); margin:0 0 28px;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-num">1</div>
                                    <div class="timeline-content">
                                        <strong>Pembukaan &amp; Mindset Shift</strong>
                                        <div class="dur">15 menit</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-num">2</div>
                                    <div class="timeline-content">
                                        <strong>Fundamental Prompting</strong>
                                        <div class="dur">20 menit</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-num">3</div>
                                    <div class="timeline-content">
                                        <strong>Praktik Project</strong>
                                        <div class="dur">45 menit</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-num">4</div>
                                    <div class="timeline-content">
                                        <strong>Sesi Tantangan</strong>
                                        <div class="dur">25 menit</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="timeline-step">
                                    <div class="timeline-num">5</div>
                                    <div class="timeline-content">
                                        <strong>Debrief &amp; Transisi</strong>
                                        <div class="dur">15 menit</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     PRICING
     ══════════════════════════════════════════════════════════════ -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="pricing-box">
                        <div class="pricing-tag">
                            <i class="bi bi-rocket-takeoff"></i> Early Bird
                        </div>
                        <h3>AI &amp; Python Quickstart</h3>
                        <p class="subtitle">Batch perdana, kuota terbatas</p>
                        <div class="pricing-amount">Rp49.000 <small>/ peserta</small></div>
                        <ul class="pricing-list">
                            <li><i class="bi bi-check-circle-fill"></i> 2 jam live online interaktif</li>
                            <li><i class="bi bi-check-circle-fill"></i> Cheat Sheet Prompt AI</li>
                            <li><i class="bi bi-check-circle-fill"></i> Panduan instalasi step-by-step</li>
                            <li><i class="bi bi-check-circle-fill"></i> Rekaman kelas &amp; e-sertifikat</li>
                            <li><i class="bi bi-check-circle-fill"></i> Grup komunitas WhatsApp</li>
                        </ul>
                        <a href="#registration-form" class="btn btn-blue w-100 justify-content-center">
                            <i class="bi bi-arrow-right-circle"></i> Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     FAQ
     ══════════════════════════════════════════════════════════════ -->
    <section class="section-bg" id="faq">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-7">
                    <div class="section-tag"><i class="bi bi-question-lg"></i> Pertanyaan Umum</div>
                    <h2 class="section-heading">FAQ</h2>
                    <p class="section-desc mx-auto">Semua yang perlu kamu tahu sebelum mendaftar.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="faq-item">
                        <button class="faq-q" data-faq="f1">
                            <span>Apa itu "Aplikasi Penarik Data Otomatis"?</span>
                            <i class="bi bi-chevron-down chevron"></i>
                        </button>
                        <div class="faq-a" id="f1">
                            <p>Ini adalah program sederhana (web scraper) yang bisa mengambil data dari halaman web,
                                seperti judul, harga, atau daftar produk, dan menyusunnya secara rapi. Di kelas ini,
                                kamu akan membuatnya dengan bantuan AI, tanpa perlu menulis kode dari nol.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q" data-faq="f2">
                            <span>Apakah saya harus punya background IT atau coding?</span>
                            <i class="bi bi-chevron-down chevron"></i>
                        </button>
                        <div class="faq-a" id="f2">
                            <p>Sama sekali tidak. Kelas ini dirancang khusus untuk pemula total. Kamu tidak perlu tahu
                                apa pun tentang pemrograman. Kami akan memandu langkah demi langkah, dan AI akan
                                menuliskan kodenya.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q" data-faq="f3">
                            <span>Bagaimana cara mengikuti kelas live online?</span>
                            <i class="bi bi-chevron-down chevron"></i>
                        </button>
                        <div class="faq-a" id="f3">
                            <p>Kelas akan diselenggarakan via Zoom. Setelah mendaftar dan melakukan pembayaran, kamu
                                akan diundang ke grup WhatsApp dan mendapatkan link Zoom + panduan instalasi H-1 sebelum
                                kelas.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q" data-faq="f4">
                            <span>Apakah kelas ini direkam?</span>
                            <i class="bi bi-chevron-down chevron"></i>
                        </button>
                        <div class="faq-a" id="f4">
                            <p>Ya. Rekaman kelas akan dibagikan kepada peserta setelah sesi selesai, akses terbatas 7
                                hari. Jadi kamu tetap bisa menonton ulang jika ada yang terlewat.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q" data-faq="f6">
                            <span>Apakah setelah kelas ini saya jadi mahir coding?</span>
                            <i class="bi bi-chevron-down chevron"></i>
                        </button>
                        <div class="faq-a" id="f6">
                            <p>Tidak. Fokus kelas ini adalah memberi pengalaman pertama yang menyenangkan dan
                                membuktikan bahwa coding tidak sesulit yang dibayangkan. Untuk pendalaman, ada kelas
                                lanjutan yang akan dibahas di akhir sesi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     CTA
     ══════════════════════════════════════════════════════════════ -->
    <section class="cta-section">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h2>Siap Membuat Aplikasi Pertamamu?</h2>
                    <p>Bergabunglah bersama puluhan peserta lain dan rasakan sendiri bagaimana AI membantumu menulis
                        kode dalam hitungan detik.</p>
                    <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                        <a href="#registration-form" class="btn btn-white">
                            <i class="bi bi-arrow-right-circle"></i> Daftar Sekarang
                        </a>
                        <a href="https://wa.me/6281390000332?text=Halo%20Minzen,%20saya%20ingin%20bertanya%20tentang%20program%20AI%20%26%20Python%20Quickstart:%20Bikin%20Aplikasi%20Pertama%20dalam%202%20Jam."
                            class="btn btn-ghost" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-chat"></i> Tanya Admin
                        </a>
                    </div>
                    <p class="cta-hint">
                        <i class="bi bi-clock me-1"></i> Kelas terbatas · Daftar sebelum kuota habis
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     REGISTRATION FORM
     ══════════════════════════════════════════════════════════════ -->
    <section id="registration-form" style="padding: 56px 0; background: var(--gray-50);">
        <div class="container">
            <h2 class="section-title text-center mb-4">Formulir <span class="text-blue">Pendaftaran</span></h2>
            <p class="text-center text-muted mb-4">Isi formulir di bawah ini untuk mendaftar kelas.</p>
            <div class="iframe-wrapper">
                <iframe src="https://goakal.com/alhazenacademy/python-ai-quickstart-1/7z5pn/apply"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════════
     FOOTER
     ══════════════════════════════════════════════════════════════ -->
    <footer class="site-footer">

        <!-- decorative ornaments -->
        <svg class="deco deco--controller" viewBox="0 0 200 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M50 40h100c27.6 0 50 22.4 50 50s-22.4 50-50 50c-13 0-19-6-27-16l-6-8c-4-5-9-8-17-8s-13 3-17 8l-6 8c-8 10-14 16-27 16C22.4 140 0 117.6 0 90S22.4 40 50 40Z"
                stroke="white" stroke-width="6" />
            <circle cx="45" cy="90" r="6" fill="white" />
            <circle cx="45" cy="70" r="6" fill="white" />
            <path d="M35 80h20M45 70v20" stroke="white" stroke-width="5" stroke-linecap="round" />
            <circle cx="150" cy="85" r="7" fill="white" />
            <circle cx="130" cy="100" r="7" fill="white" />
        </svg>
        <svg class="deco deco--clock" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="42" stroke="white" stroke-width="5" />
            <path d="M50 26v26l16 10" stroke="white" stroke-width="5" stroke-linecap="round" />
        </svg>
        <svg class="deco deco--plus" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 4v32M4 20h32" stroke="white" stroke-width="6" stroke-linecap="round" />
        </svg>
        <svg class="deco deco--star" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 0C104 60 140 96 200 100C140 104 104 140 100 200C96 140 60 104 0 100C60 96 96 60 100 0Z"
                fill="#1A5CFF" />
        </svg>

        <div class="footer-grid">

            <!-- Brand -->
            <div class="footer-col brand-col">
                <div class="brand-logo">
                    <img src="https://lh3.googleusercontent.com/d/13CRZKjcL8rwmnIugzzvOII2Kv46LLj9V" alt="Alhazen Plus"
                        style="height:50px; width:auto;">
                    <span class="brand-name">Alhazen Plus</span>
                </div>

                <div class="social-row">
                    <a href="https://www.facebook.com/alhazenacademy" class="fb" aria-label="Facebook" target="_blank"
                        rel="noopener"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/alhazenacademy" class="ig" aria-label="Instagram" target="_blank"
                        rel="noopener"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.tiktok.com/@alhazenacademy" class="tiktok" aria-label="TikTok" target="_blank"
                        rel="noopener"><i class="bi bi-tiktok"></i></a>
                    <a href="https://www.linkedin.com/company/alhazenacademy" class="li" aria-label="LinkedIn"
                        target="_blank" rel="noopener"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.youtube.com/@alhazenacademy" class="yt" aria-label="YouTube" target="_blank"
                        rel="noopener"><i class="bi bi-youtube"></i></a>
                </div>

                <p class="brand-desc">
                    PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan
                    Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif,
                    inovatif, dan adaptif.
                </p>
            </div>

            <!-- Program -->
            <div class="footer-col">
                <div class="contact-block">
                    <h4>Hubungi Kami</h4>
                    <p><a href="https://wa.me/6281390000332" target="_blank" rel="noopener">+62-813-90000-332</a></p>
                    <p><a href="mailto:info@alhazen.academy">info@alhazen.academy</a></p>
                    <p><a href="https://www.alhazen.academy" target="_blank" rel="noopener">www.alhazen.academy</a></p>
                </div>
            </div>

            <!-- Lainnya -->
            <div class="footer-col">
                <h4>Lainnya</h4>
                <ul>
                    <li><a href="https://alhazen.academy/program">Program</a></li>
                    <li><a href="https://alhazen.academy/event/ngabuburit-class">Event</a></li>
                    <li><a href="https://alhazen.academy/artikel">Artikel</a></li>
                    <li><a href="https://alhazen.academy/tentang-kami">Tentang Kami</a></li>
                </ul>
            </div>

            <!-- Kantor Pusat -->
            <div class="footer-col address-col">
                <h4>Kantor Pusat</h4>
                <a href="https://maps.app.goo.gl/MMT5Y439Du4f4FkB9" target="_blank" rel="noopener">
                    Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah
                    Khusus Ibukota Jakarta 12840
                </a>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; <span id="footerYear"></span> <strong>PT. Alhazen Global Teknologi</strong>. All Rights Reserved.
        </div>

    </footer>

    <!-- ══════════════════════════════════════════════════════════════
     SCRIPTS
     ══════════════════════════════════════════════════════════════ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

    // ── Scroll Reveal ──
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    reveals.forEach(el => observer.observe(el));

    // ── FAQ Accordion ──
    document.querySelectorAll('.faq-q').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.faq;
            const answer = document.getElementById(id);
            const isOpen = answer.classList.contains('open');

            // Close all
            document.querySelectorAll('.faq-a').forEach(a => a.classList.remove('open'));
            document.querySelectorAll('.faq-q').forEach(q => q.classList.remove('active'));

            // Toggle current
            if (!isOpen) {
                answer.classList.add('open');
                btn.classList.add('active');
            }
        });
    });

    // ── Smooth Scroll ──
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const navH = document.querySelector('.navbar').offsetHeight;
                const top = target.getBoundingClientRect().top + window.scrollY - navH - 16;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    // ── Footer Year ──
    document.getElementById('footerYear').textContent = new Date().getFullYear();

});
    </script>

</body>

</html>
