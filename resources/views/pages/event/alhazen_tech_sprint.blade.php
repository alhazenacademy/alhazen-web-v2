<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alhazen Tech Sprint - Bootcamp UI/UX & Frontend 2026</title>
    <meta name="description"
        content="Bootcamp UI UX dan Frontend untuk pemula. Bangun portfolio digital dalam 3 minggu bersama mentor praktisi industri di Alhazen Tech Sprint.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Alhazen Tech Sprint - Bootcamp UI/UX & Frontend 2026">
    <meta property="og:description"
        content="Bangun portfolio digital pertamamu dalam 3 minggu. Program intensif untuk pemula & career switcher.">
    <meta property="og:image" content="https://lh3.googleusercontent.com/d/1S4WqpE4jM1TrkbaQyCsaMFQuoIjF_yg_">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ============================================================
           VARIABLES & RESET
        ============================================================ */
        :root {
            --primary: #00AE90;
            --secondary: #2D6DD9;
            --accent: #FFBC00;
            --dark: #1E293B;
            --light-text: #64748B;
            --bg-light: #F8FAFC;
            --white: #FFFFFF;

            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.05);

            --font-display: 'Poppins', sans-serif;
            --font-body: 'Inter', sans-serif;
            --transition: all 0.3s ease;
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
            scroll-padding-top: 80px;
        }

        body {
            font-family: var(--font-body);
            color: var(--dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        .font-display {
            font-family: var(--font-display);
            font-weight: 700;
            line-height: 1.2;
        }

        p {
            color: var(--light-text);
            font-size: 1.1rem;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .text-center {
            text-align: center;
        }

        .text-primary {
            color: var(--primary);
        }

        .text-secondary {
            color: var(--secondary);
        }

        .text-accent {
            color: var(--accent);
        }

        .bg-light {
            background-color: var(--bg-light);
        }

        /* ============================================================
           BUTTONS
        ============================================================ */
        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 1.75rem;
            border-radius: 8px;
            font-weight: 600;
            font-family: var(--font-display);
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 14px rgba(0, 174, 144, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 174, 144, 0.4);
            background-color: #00997e;
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: var(--white);
            box-shadow: 0 4px 14px rgba(45, 109, 217, 0.3);
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(45, 109, 217, 0.4);
            background-color: #245abc;
        }

        .btn-accent {
            background-color: var(--accent);
            color: var(--dark);
            box-shadow: 0 4px 14px rgba(255, 188, 0, 0.3);
        }

        .btn-accent:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 188, 0, 0.4);
            background-color: #e6a800;
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        .btn-large {
            padding: 1rem 2rem;
            font-size: 1.125rem;
            width: 100%;
        }

        .btn-microcopy {
            display: block;
            font-size: 0.8rem;
            color: var(--light-text);
            margin-top: 0.5rem;
            font-weight: 500;
        }

        /* ============================================================
           NAVBAR
        ============================================================ */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 1rem 0;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: var(--transition);
            border-bottom: 1px solid #e2e8f0;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark);
            cursor: pointer;
            z-index: 1001;
        }

        /* ============================================================
           HERO
        ============================================================ */
        .hero {
            padding: 8rem 0 5rem;
            background: linear-gradient(135deg, rgba(0, 174, 144, 0.05) 0%, rgba(45, 109, 217, 0.05) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-container {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 188, 0, 0.15);
            color: #d97706;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(255, 188, 0, 0.3);
        }

        .hero-pulse {
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
            box-shadow: 0 0 0 0 rgba(255, 188, 0, 0.7);
            animation: pulse 2s infinite;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 4vw, 3.2rem);
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .price-highlight {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            font-family: var(--font-display);
            margin-bottom: 0.5rem;
        }

        .vip-hook {
            display: inline-block;
            background: #FA4E26;
            color: white;
            font-weight: 700;
            font-size: 0.85rem;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
            animation: bounce 2s infinite;
        }

        .hero-benefits {
            list-style: none;
            margin-bottom: 2rem;
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.75rem;
        }

        .hero-benefits li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
            color: var(--dark);
            font-size: 0.95rem;
        }

        .hero-benefits i {
            color: var(--primary);
            font-size: 1.1rem;
        }

        .hero-image-wrapper {
            position: relative;
        }

        .hero-image {
            width: auto;
            max-width: 380px;
            max-height: 280px;
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }

        .hero-float-card {
            position: absolute;
            bottom: -20px;
            left: -20px;
            background: white;
            padding: 1.25rem;
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 1rem;
            animation: float 4s ease-in-out infinite;
            border: 1px solid #e2e8f0;
            z-index: 10;
        }

        .hero-float-icon {
            width: 48px;
            height: 48px;
            background: rgba(45, 109, 217, 0.1);
            color: var(--secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .trust-bar {
            margin-top: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.9rem;
            color: var(--light-text);
            font-weight: 500;
        }

        /* ============================================================
           SECTION SHARED
        ============================================================ */
        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 4rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        /* ============================================================
           PROBLEM SECTION
        ============================================================ */
        .problem-section {
            padding: 6rem 0;
            background: var(--white);
            border-bottom: 1px solid #e2e8f0;
        }

        .problem-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .problem-card {
            background: var(--bg-light);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            border: 1px solid #e2e8f0;
            transition: var(--transition);
        }

        .problem-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: #cbd5e1;
        }

        .problem-number {
            font-size: 3rem;
            font-weight: 800;
            color: rgba(250, 78, 38, 0.1);
            margin-bottom: -1.5rem;
            font-family: var(--font-display);
        }

        .problem-card h3 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--dark);
            position: relative;
            z-index: 1;
        }

        /* ============================================================
           WHY SKILL IMPORTANT
        ============================================================ */
        .why-important-section {
            padding: 6rem 0;
            background: var(--bg-light);
        }

        .why-important-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .why-list {
            list-style: none;
            margin-bottom: 2rem;
        }

        .why-list li {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .why-list i {
            color: var(--primary);
            font-size: 1.25rem;
            margin-top: 3px;
        }

        /* ============================================================
           CAREER SECTION
        ============================================================ */
        .career-section {
            padding: 6rem 0;
            background: white;
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
        }

        .career-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .career-card {
            background: var(--bg-light);
            padding: 2rem 1.5rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            transition: var(--transition);
        }

        .career-card:hover {
            transform: translateY(-5px);
            border-color: var(--secondary);
            box-shadow: var(--shadow-md);
        }

        .salary-box {
            display: inline-block;
            background: rgba(0, 174, 144, 0.1);
            color: var(--primary);
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1.1rem;
            border: 1px dashed var(--primary);
        }

        /* ============================================================
           CURRICULUM / SPRINT TABLES
        ============================================================ */
        .curriculum-section {
            padding: 6rem 0;
            background: var(--bg-light);
        }

        .sprint-format-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .overview-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            text-align: center;
        }

        /* ============================================================
           ROADMAP
        ============================================================ */
        .roadmap-container {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            max-width: 900px;
            margin: 0 auto;
        }

        .roadmap-item {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            border: 1px solid #e2e8f0;
            display: flex;
            gap: 2.5rem;
            align-items: center;
            transition: var(--transition);
        }

        .roadmap-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            border-color: #cbd5e1;
        }

        .roadmap-level {
            width: 140px;
            height: 140px;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
            box-shadow: inset 0 -4px 0 rgba(0, 0, 0, 0.15);
        }

        .roadmap-level span {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.25rem;
        }

        .roadmap-level strong {
            font-size: 1.8rem;
            font-family: var(--font-display);
            line-height: 1;
            margin-bottom: 0.5rem;
        }

        .roadmap-date {
            font-size: 0.7rem;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.2);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
        }

        .roadmap-content {
            flex: 1;
        }

        .roadmap-content h3 {
            font-size: 1.35rem;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }

        .roadmap-content p {
            font-size: 0.95rem;
            color: var(--light-text);
            margin-bottom: 1.25rem;
            line-height: 1.5;
        }

        .roadmap-content ul {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            padding: 0;
        }

        .roadmap-content li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.95rem;
            color: var(--dark);
            font-weight: 500;
        }

        .roadmap-content li i {
            background: rgba(45, 109, 217, 0.1);
            color: var(--secondary);
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 0.7rem;
            flex-shrink: 0;
        }

        /* ============================================================
           PROJECTS
        ============================================================ */
        .projects-section {
            padding: 6rem 0;
            background: var(--dark);
            color: white;
            text-align: center;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 1.5rem;
            text-align: left;
        }

        .project-card h3 {
            color: white;
            font-size: 1.1rem;
            margin-top: 1rem;
        }

        /* ============================================================
           PORTFOLIO RESULTS
        ============================================================ */
        .portfolio-result-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .portfolio-item {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }

        .portfolio-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
        }

        /* ============================================================
           LEARNING JOURNEY
        ============================================================ */
        .journey-section {
            padding: 6rem 0;
            background: white;
            border-bottom: 1px solid #e2e8f0;
        }

        .journey-grid {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-top: 3rem;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .journey-grid::before {
            content: '';
            position: absolute;
            top: 25px;
            left: 0;
            width: 100%;
            height: 2px;
            border-top: 2px dashed #cbd5e1;
            z-index: 1;
        }

        .journey-step {
            text-align: center;
            position: relative;
            z-index: 2;
            background: white;
            padding: 0 1rem;
            width: 30%;
        }

        .step-circle {
            width: 50px;
            height: 50px;
            background: var(--secondary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin: 0 auto 1rem;
            border: 4px solid white;
            box-shadow: 0 0 0 2px var(--secondary);
        }

        /* ============================================================
           MENTOR
        ============================================================ */
        .mentor-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 0;
        }

        .mentor-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow-md);
            text-align: center;
            border: 1px solid #e2e8f0;
            transition: var(--transition);
        }

        .mentor-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .mentor-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            object-fit: cover;
            border: 4px solid var(--bg-light);
        }

        .mentor-cred {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
            font-size: 0.85rem;
            color: var(--light-text);
        }

        .mentor-cred span {
            background: var(--bg-light);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
        }

        /* ============================================================
           PRICING
        ============================================================ */
        .pricing-section {
            padding: 6rem 0;
            background: var(--bg-light);
        }

        .level-selector {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 4rem;
            flex-wrap: wrap;
        }

        .level-btn {
            background: white;
            border: 2px solid #e2e8f0;
            padding: 1.25rem 2rem;
            border-radius: 16px;
            cursor: pointer;
            text-align: center;
            transition: var(--transition);
            min-width: 200px;
            flex: 1;
            max-width: 300px;
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
        }

        .level-btn.active {
            border-color: var(--primary);
            background: rgba(0, 174, 144, 0.05);
            box-shadow: 0 8px 20px rgba(0, 174, 144, 0.1);
        }

        .level-btn:hover:not(.active) {
            border-color: #cbd5e1;
            background: #f8fafc;
        }

        .level-btn .level-tag {
            font-size: 0.8rem;
            font-weight: 800;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .level-btn .level-date {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark);
        }

        .level-btn .level-desc {
            font-size: 0.85rem;
            color: var(--light-text);
        }

        .pricing-group {
            display: none;
            animation: fadeInPricing 0.4s ease forwards;
        }

        .pricing-group.active {
            display: block;
        }

        @keyframes fadeInPricing {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Pricing grid — menggunakan fixed 4-col, bukan auto-fit agar mobile override bisa berfungsi */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .pricing-card {
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            border: 1px solid #e2e8f0;
            padding: 2rem 1.5rem;
            position: relative;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            /* Hapus transform scale dari desktop agar mobile tidak keluar viewport */
        }

        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .pricing-card.bundle {
            border: 2px solid var(--accent);
            background: #FFFAEB;
        }

        .pricing-card.vip {
            border: 2px solid var(--primary);
            background: rgba(0, 174, 144, 0.05);
        }

        .pricing-card.vip-bundle {
            border: 3px solid var(--accent);
            background: #FFFAEB;
            box-shadow: 0 10px 30px rgba(255, 188, 0, 0.15);
        }

        /* Glow hanya di desktop */
        @media (min-width: 993px) {
            .pricing-card.bundle {
                transform: scale(1.02);
            }

            .pricing-card.bundle:hover {
                transform: scale(1.02) translateY(-5px);
            }

            .pricing-card.vip-bundle {
                transform: scale(1.04);
                z-index: 5;
            }

            .pricing-card.vip-bundle:hover {
                transform: scale(1.04) translateY(-5px);
            }
        }

        .best-seller-badge {
            position: absolute;
            top: -14px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--accent);
            color: var(--dark);
            padding: 0.3rem 1.25rem;
            border-radius: 50px;
            font-weight: 800;
            font-size: 0.8rem;
            text-transform: uppercase;
            white-space: nowrap;
            box-shadow: 0 4px 10px rgba(255, 188, 0, 0.3);
        }

        .early-bird-badge {
            background: #FEE2E2;
            color: #EF4444;
            padding: 0.2rem 0.6rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        .old-price {
            text-decoration: line-through;
            color: #94A3B8;
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 0.25rem;
            display: block;
        }

        .tier-price {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            line-height: 1;
        }

        .vip .tier-price {
            color: #FA4E26;
        }

        .price-tagline {
            font-size: 0.8rem;
            color: #64748b;
            margin-top: 0.5rem;
            display: block;
        }

        .vip-benefit-highlight {
            font-size: 0.85rem;
            color: var(--primary);
            font-weight: 600;
            background: rgba(0, 174, 144, 0.08);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
            display: block;
            border-left: 3px solid var(--primary);
        }

        .pricing-features {
            list-style: none;
            margin: 1.5rem 0;
            flex-grow: 1;
        }

        .pricing-features li {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
            color: var(--dark);
        }

        .pricing-features i {
            color: var(--primary);
            margin-top: 4px;
        }

        /* ============================================================
           URGENCY
        ============================================================ */
        .urgency-section {
            padding: 5rem 0;
            background: var(--dark);
            color: white;
            text-align: center;
        }

        .progress-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            padding: 0.4rem;
            max-width: 500px;
            margin: 2rem auto;
            position: relative;
        }

        .progress-bar {
            background: var(--accent);
            width: 63.5%;
            height: 24px;
            border-radius: 50px;
        }

        .progress-text {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--dark);
        }

        .countdown-wrapper {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 2.5rem 0;
            flex-wrap: wrap;
        }

        .countdown-box {
            background: rgba(255, 255, 255, 0.1);
            width: 80px;
            height: 80px;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .countdown-box strong {
            font-size: 1.8rem;
            font-family: var(--font-display);
            line-height: 1;
        }

        .countdown-box span {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #cbd5e1;
        }

        /* ============================================================
           WEBINAR
        ============================================================ */
        .webinar-section {
            padding: 5rem 0;
            background: var(--secondary);
            color: white;
        }

        .webinar-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
            background: rgba(255, 255, 255, 0.05);
            padding: 3rem;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* ============================================================
           FAQ
        ============================================================ */
        .faq-section {
            padding: 6rem 0;
            background: var(--bg-light);
        }

        .faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            margin-bottom: 1rem;
            background: white;
            overflow: hidden;
        }

        .faq-question {
            padding: 1.5rem;
            cursor: pointer;
            font-weight: 600;
            font-family: var(--font-display);
            display: flex;
            justify-content: space-between;
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: 0.3s ease;
            color: var(--light-text);
        }

        .faq-item.active .faq-answer {
            padding: 0 1.5rem 1.5rem;
            max-height: 300px;
        }

        /* ============================================================
           FOOTER
        ============================================================ */
        .footer {
            background: var(--dark);
            color: #cbd5e1;
            padding: 4rem 0 2rem;
            border-top: 5px solid var(--primary);
        }

        /* ============================================================
           FLOATING CTAs — dipisah posisinya agar tidak tumpang tindih
        ============================================================ */
        .floating-cta {
            position: fixed;
            bottom: 5.5rem;
            /* di atas wa-float */
            right: 1.5rem;
            z-index: 998;
            animation: bounce 2s infinite;
            box-shadow: var(--shadow-lg);
        }

        .wa-float {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            background-color: #25d366;
            color: white;
            border-radius: 50px;
            padding: 0.8rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 700;
            font-family: var(--font-display);
            box-shadow: var(--shadow-lg);
            z-index: 999;
            transition: var(--transition);
        }

        .wa-float:hover {
            transform: translateY(-3px) scale(1.05);
            color: white;
        }

        .wa-float i {
            font-size: 1.5rem;
        }


        .bundle-vip-glow {
            position: relative;
        }

        .bundle-vip-glow::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, var(--accent), var(--primary), var(--accent));
            z-index: -1;
            border-radius: 22px;
            filter: blur(10px);
            opacity: 0.5;
            animation: border-glow 3s linear infinite;
        }

        /* ============================================================
           ANIMATIONS
        ============================================================ */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 188, 0, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(255, 188, 0, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 188, 0, 0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }


        @keyframes border-glow {
            0% {
                opacity: 0.3;
            }

            50% {
                opacity: 0.7;
            }

            100% {
                opacity: 0.3;
            }
        }

        .mobile-only {
            display: none;
        }

        /* ============================================================
           RESPONSIVE — TABLET (max 992px)
        ============================================================ */
        @media (max-width: 992px) {

            /* Hero */
            .hero-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 2rem;
            }

            .hero-content {
                order: 1;
                width: 100%;
                max-width: 520px;
                margin: auto;
            }

            .hero-image-wrapper {
                order: 2;
                width: 100%;
                max-width: 360px;
                margin: auto;
            }

            .hero-benefits {
                max-width: 400px;
                margin: 0 auto 2rem;
                text-align: left;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center !important;
            }

            /* Sections */
            .why-important-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .why-important-grid img {
                width: 100%;
                max-width: 380px;
                margin: auto;
            }

            .webinar-container {
                flex-direction: column;
                text-align: center;
                gap: 2rem;
            }

            /* Grids to 2-col */
            .career-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .mentor-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            /* sudah 2 kolom, tetap */
            .portfolio-result-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .pricing-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .sprint-format-grid {
                grid-template-columns: 1fr;
            }

            .overview-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .roadmap-content ul {
                grid-template-columns: 1fr;
            }

            /* Journey */
            .journey-grid::before {
                display: none;
            }

            .journey-grid {
                flex-direction: column;
                gap: 2rem;
                align-items: center;
            }

            .journey-step {
                width: 100%;
                max-width: 300px;
            }

            /* Level selector */
            .level-selector {
                gap: 1rem;
            }

            .level-btn {
                min-width: 160px;
                max-width: none;
                flex: 1;
            }
        }

        /* ============================================================
           RESPONSIVE — MOBILE (max 768px)
        ============================================================ */
        @media (max-width: 768px) {

            /* ---- NAVBAR ---- */
            .menu-toggle {
                display: block;
            }

            .nav-content {
                flex-direction: row;
                justify-content: space-between;
                padding: 0 1rem;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                padding: 1rem;
                border-top: 1px solid #f1f5f9;
                box-shadow: var(--shadow-md);
                align-items: center;
                gap: 1.5rem;
                z-index: 1000;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                width: 100%;
                text-align: center;
            }

            .navbar .btn {
                display: none;
            }

            .mobile-only {
                display: block;
            }

            .nav-cta {
                display: none;
            }

            /* ---- HERO ---- */
            .hero {
                padding-top: 7rem !important;
                padding-bottom: 3.5rem !important;
            }

            .hero h1 {
                font-size: 1.85rem;
                line-height: 1.3;
            }

            /* Float card: non-absolute di mobile */
            .hero-float-card {
                position: relative !important;
                left: auto !important;
                right: auto !important;
                bottom: auto !important;
                margin-top: 1rem;
                width: 100%;
                max-width: 280px;
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
                animation: none;
                /* matikan animasi agar tidak glitch */
            }

            /* Hero image dikecilkan agar muat */
            .hero-image {
                max-width: 100%;
                max-height: 220px;
            }

            /* ---- TYPOGRAPHY ---- */
            .section-header h2 {
                font-size: 1.65rem;
            }

            /* ---- BUTTONS ---- */
            .btn-large {
                width: 100% !important;
                max-width: 340px !important;
                margin-left: auto;
                margin-right: auto;
                display: flex;
            }

            /* ---- GRIDS: SEMUA 1 KOLOM DI MOBILE ---- */
            .career-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .problem-grid {
                grid-template-columns: 1fr;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .mentor-grid {
                grid-template-columns: 1fr;
            }

            .portfolio-result-grid {
                grid-template-columns: 1fr;
            }

            .why-important-grid {
                grid-template-columns: 1fr;
            }

            .sprint-format-grid {
                grid-template-columns: 1fr;
            }

            .overview-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .roadmap-content ul {
                grid-template-columns: 1fr;
            }

            /* ---- PRICING SECTION ---- */
            .level-selector {
                flex-direction: column;
                align-items: stretch;
                gap: 0.75rem;
                margin-bottom: 2rem;
            }

            .level-btn {
                min-width: unset;
                max-width: 100%;
                flex: none;
                width: 100%;
                padding: 1rem 1.25rem;
            }

            .level-btn .level-date {
                font-size: 0.95rem;
            }

            /* Pricing grid 1 kolom, hapus semua transform/scale */
            .pricing-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }

            .pricing-card.bundle,
            .pricing-card.vip-bundle {
                transform: none !important;
            }

            .pricing-card.bundle:hover,
            .pricing-card.vip-bundle:hover {
                transform: translateY(-5px) !important;
            }

            /* Badge posisi aman */
            .best-seller-badge {
                position: static;
                transform: none;
                display: inline-block;
                margin-bottom: 0.75rem;
                left: auto;
            }

            /* ---- ROADMAP ---- */
            .roadmap-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.25rem;
            }

            .roadmap-level {
                width: 100%;
                height: 80px;
                flex-direction: row;
                gap: 1rem;
                border-radius: 12px;
            }

            .roadmap-level strong {
                font-size: 1.4rem;
                margin-bottom: 0;
            }

            /* ---- CURRICULUM TABLES ---- */
            .week-schedule {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .week-schedule table {
                min-width: 600px;
            }

            /* Stack table rows untuk layar sangat kecil (< 480px) */
        }

        /* ============================================================
           RESPONSIVE — SMALL MOBILE (max 480px)
           Stacking tabel ke mode card
        ============================================================ */
        @media (max-width: 480px) {
            .container {
                padding: 0 14px;
            }

            /* ---- CURRICULUM TABLE → card mode ---- */
            .week-schedule table,
            .week-schedule thead,
            .week-schedule tbody,
            .week-schedule th,
            .week-schedule td,
            .week-schedule tr {
                display: block;
            }

            .week-schedule thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            .week-schedule tr {
                border: 1px solid #e2e8f0;
                margin-bottom: 1rem;
                border-radius: 12px;
                overflow: hidden;
                background: white;
            }

            .week-schedule td {
                border: none;
                border-bottom: 1px solid #f1f5f9;
                padding: 0.65rem 1rem 0.65rem 40% !important;
                position: relative;
                text-align: left;
                font-size: 0.85rem;
                word-break: break-word;
            }

            .week-schedule td:last-child {
                border-bottom: 0;
            }

            .week-schedule td::before {
                position: absolute;
                top: 50%;
                left: 1rem;
                width: 35%;
                transform: translateY(-50%);
                font-weight: 700;
                color: var(--primary);
                font-size: 0.72rem;
                text-transform: uppercase;
                white-space: nowrap;
            }

            .week-schedule td:nth-of-type(1)::before {
                content: "Program";
            }

            .week-schedule td:nth-of-type(2)::before {
                content: "Topik";
            }

            .week-schedule td:nth-of-type(3)::before {
                content: "Tanggal";
            }

            .week-schedule td:nth-of-type(4)::before {
                content: "Hari";
            }

            .week-schedule td:nth-of-type(5)::before {
                content: "Waktu";
            }

            .week-schedule td:nth-of-type(6)::before {
                content: "Peserta";
            }

            /* ---- COUNTDOWN ---- */
            .countdown-wrapper {
                gap: 0.6rem;
            }

            .countdown-box {
                width: 68px;
                height: 68px;
            }

            .countdown-box strong {
                font-size: 1.5rem;
            }

            /* ---- HERO ---- */
            .hero h1 {
                font-size: 1.65rem;
            }

            .section-header h2 {
                font-size: 1.45rem;
            }

            /* ---- OVERVIEW GRID ---- */
            .overview-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.75rem;
            }

            .overview-grid>div>div:first-child {
                font-size: 2rem !important;
            }

            /* ---- SPRINT FORMAT ---- */
            .sprint-format-box div[style*="grid"] {
                grid-template-columns: 1fr !important;
            }

            /* ---- ROADMAP LEVEL ---- */
            .roadmap-level {
                padding: 0.75rem 1rem;
            }

            /* ---- URGENCY ---- */
            .urgency-section h2 {
                font-size: 1.6rem;
            }

            .urgency-section .btn-large {
                max-width: 100% !important;
            }

            .progress-container {
                max-width: 100%;
            }

            /* ---- FLOATING CTAs ---- */
            .floating-cta {
                display: none;
            }

            /* sembunyikan di HP kecil, wa-float sudah cukup */

            .wa-float {
                bottom: 1rem;
                right: 1rem;
                padding: 0.65rem 1.1rem;
                font-size: 0.88rem;
            }

            /* ---- PORTFOLIO GRID ---- */
            .portfolio-result-grid {
                grid-template-columns: 1fr;
            }

            /* ---- JOURNEY STEP ---- */
            .journey-step {
                max-width: 100%;
            }

            /* ---- WEBINAR ---- */
            .webinar-container {
                padding: 1.75rem;
            }
        }

        /* ============================================================
           RESPONSIVE — EXTRA SMALL (max 360px)
        ============================================================ */
        @media (max-width: 360px) {
            .container {
                padding: 0 12px;
            }

            .hero h1 {
                font-size: 1.5rem;
            }

            .section-header h2 {
                font-size: 1.3rem;
            }

            .tier-price {
                font-size: 1.75rem;
            }

            .level-btn .level-date {
                font-size: 0.875rem;
            }

            .countdown-box {
                width: 60px;
                height: 60px;
            }

            .countdown-box strong {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar" id="navbar">
        <div class="container nav-content">
            <img src="https://lh3.googleusercontent.com/d/1S4WqpE4jM1TrkbaQyCsaMFQuoIjF_yg_" alt="Alhazen Academy"
                style="max-height: 40px;">
            <button class="menu-toggle" id="menu-toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-links" id="nav-links">
                <li><a href="#problem">Mengapa Gagal?</a></li>
                <li><a href="#curriculum">Kurikulum</a></li>
                <li><a href="#projects">Portofolio</a></li>
                <li><a href="#pricing">Paket & Harga</a></li>
                <li class="mobile-only"><a href="#pricing" class="btn btn-primary" style="margin-top: 1rem;">Amankan
                        Kursi</a></li>
            </ul>
            <a href="#pricing" class="btn btn-primary nav-cta"
                style="padding: 0.5rem 1.25rem; font-size: 0.9rem;">Amankan Kursi Saya</a>
        </div>
    </nav>

    <section id="hero" class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="hero-pulse"></span> Batch berikutnya: 27 Maret 2026
                </div>
                <div
                    style="background: rgba(255,188,0,0.1); border: 1px solid var(--accent); color: var(--dark); padding: 0.5rem 1rem; border-radius: 50px; display: inline-block; font-size: 0.85rem; font-weight: 700; margin-bottom: 1rem;">
                    <i class="fa-solid fa-clock-rotate-left"></i> Pendaftaran Terakhir: 26 Maret 2026
                </div>

                <h1>Bootcamp UI/UX dan Frontend untuk Pemula</h1>
                <h2 style="font-size: 1.5rem; color: var(--secondary); margin-bottom: 1rem;">Bangun Portfolio Digital
                    Pertamamu dalam 3 Minggu</h2>
                <p>Program belajar intensif yang dirancang khusus untuk mahasiswa, fresh graduate, dan career switcher
                    yang ingin masuk industri teknologi tanpa background IT.</p>

                <div style="margin-top: 2rem; margin-bottom: 2rem;">
                    <div style="font-size: 1.1rem; color: var(--dark); font-weight: 700;">Mulai belajar dari Rp49.000
                    </div>
                    <div class="vip-hook" style="margin-top: 0.5rem;">🔥 Upgrade ke VIP hanya tambah 50K</div>
                </div>

                <ul class="hero-benefits">
                    <li><i class="fa-solid fa-check-circle"></i> Belajar langsung dari mentor praktisi industri</li>
                    <li><i class="fa-solid fa-check-circle"></i> Membuat portfolio digital nyata</li>
                    <li><i class="fa-solid fa-check-circle"></i> Roadmap belajar yang terstruktur</li>
                    <li><i class="fa-solid fa-check-circle"></i> Akses rekaman kelas (VIP)</li>
                </ul>

                <div class="hero-buttons"
                    style="display: flex; flex-direction: column; gap: 1rem; align-items: flex-start;">
                    <div style="width: 100%; max-width: 400px;">
                        <a href="#pricing" class="btn btn-primary btn-large">Amankan Kursi Saya Sekarang</a>
                        <span class="btn-microcopy text-center">Mulai belajar dari Rp49.000.</span>
                    </div>
                    <a href="#curriculum" class="btn btn-outline" style="width: 100%; max-width: 400px;">Lihat
                        Kurikulum</a>
                </div>

                <div class="trust-bar" style="margin-top: 2.5rem;">
                    <div style="display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap;">
                        <div style="display: flex; flex-direction: column;">
                            <div style="font-size: 1.25rem; font-weight: 800; color: var(--dark);">1200+</div>
                            <div style="font-size: 0.8rem; color: var(--light-text);">Peserta Belajar</div>
                        </div>
                        <div style="width: 1px; height: 30px; background: #E2E8F0;"></div>
                        <div style="display: flex; flex-direction: column;">
                            <div style="font-size: 1.25rem; font-weight: 800; color: var(--dark);">300+</div>
                            <div style="font-size: 0.8rem; color: var(--light-text);">Portfolio Berhasil</div>
                        </div>
                        <div style="width: 1px; height: 30px; background: #E2E8F0;"></div>
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex; align-items: center; gap: 0.25rem; color: #F59E0B;">
                                <i class="fa-solid fa-star"></i>
                                <span style="font-size: 1.25rem; font-weight: 800; color: var(--dark);">4.8</span>
                            </div>
                            <div style="font-size: 0.8rem; color: var(--light-text);">Rating Peserta</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-image-wrapper">
                <img src="https://lh3.googleusercontent.com/d/1M7KKAOTU654nvHqlmJyVjEJZTaX6t72H"
                    alt="Alhazen Tech Sprint" class="hero-image" loading="lazy"
                    style="width: 100%; height: auto; display: block; border-radius: 16px;">

                <div class="hero-float-card">
                    <div class="hero-float-icon"><i class="fa-solid fa-briefcase"></i></div>
                    <div>
                        <div class="font-display" style="font-size: 1.1rem; color: var(--dark);">Portofolio Ready</div>
                        <div style="font-size: 0.85rem; color: var(--light-text);">Siap lamar kerja</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="problem" class="problem-section">
        <div class="container">
            <div class="section-header">
                <h2>Kenapa Banyak Orang Gagal Masuk Industri IT?</h2>
                <p>Banyak pemula yang semangat di awal, tapi akhirnya menyerah karena 3 hal ini.</p>
            </div>
            <div class="problem-grid">
                <div class="problem-card">
                    <div class="problem-number">1</div>
                    <h3 class="font-display">Belajar Sendiri Membingungkan</h3>
                    <p>Terlalu banyak tutorial tersebar di internet tanpa ada roadmap yang jelas dari mana harus memulai
                        dan apa yang dipelajari.</p>
                </div>
                <div class="problem-card">
                    <div class="problem-number">2</div>
                    <h3 class="font-display">Tutorial Gratis Tidak Terstruktur</h3>
                    <p>Belajar dari YouTube memang gratis, tapi tidak ada mentor yang membimbing atau memberikan
                        feedback saat kamu mengalami error.</p>
                </div>
                <div class="problem-card">
                    <div class="problem-number">3</div>
                    <h3 class="font-display">Tidak Punya Portfolio Nyata</h3>
                    <p>Di dunia digital, HRD perusahaan lebih melihat project nyata apa yang pernah kamu buat
                        dibandingkan sekadar sertifikat teori.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 4rem;">
                <h3 class="font-display" style="color: var(--primary); font-size: 1.5rem;">Itulah alasan kami membuat
                    Alhazen Tech Sprint.</h3>
            </div>
        </div>
    </section>

    <section class="why-important-section">
        <div class="container">
            <div class="why-important-grid">
                <div>
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=800"
                        alt="Skill Demand" style="border-radius: 20px; box-shadow: var(--shadow-md); width: 100%;"
                        loading="lazy">
                </div>
                <div>
                    <h2 style="font-size: 2.2rem; margin-bottom: 1.5rem;">Kenapa Skill UI/UX dan Frontend Sangat
                        Dibutuhkan?</h2>
                    <ul class="why-list">
                        <li><i class="fa-solid fa-check-circle"></i> <span>Hampir semua bisnis hari ini membutuhkan
                                website dan aplikasi untuk bertahan.</span></li>
                        <li><i class="fa-solid fa-check-circle"></i> <span>Permintaan pekerjaan di sektor digital terus
                                meningkat drastis setiap tahun.</span></li>
                        <li><i class="fa-solid fa-check-circle"></i> <span>Banyak profesional sukses masuk industri IT
                                tanpa background sarjana teknologi.</span></li>
                    </ul>
                    <div
                        style="background: white; padding: 1.5rem; border-radius: 12px; border-left: 4px solid var(--accent); box-shadow: var(--shadow-sm);">
                        <strong style="display: block; margin-bottom: 0.5rem;">Skill ini dapat kamu gunakan
                            untuk:</strong>
                        Bekerja tetap di perusahaan teknologi, mengambil project freelance, atau bahkan membangun produk
                        digital untuk bisnismu sendiri.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="career-section">
        <div class="container">
            <div class="section-header" style="margin-bottom: 2rem;">
                <h2>Karir Digital yang Bisa Kamu Mulai</h2>
                <p>Mulai karir di industri dengan gaji yang menjanjikan setelah menguasai skill fundamental ini.</p>
            </div>
            <div class="career-grid">
                <div class="career-card">
                    <i class="fa-solid fa-pen-nib"
                        style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;"></i>
                    <h4 class="font-display" style="margin-bottom: 0.5rem;">Junior UI Designer</h4>
                    <div class="salary-box" style="margin-top: 1rem; font-size: 0.9rem;">6 – 10 Juta/Bulan</div>
                </div>
                <div class="career-card">
                    <i class="fa-solid fa-code"
                        style="font-size: 2rem; color: var(--secondary); margin-bottom: 1rem;"></i>
                    <h4 class="font-display" style="margin-bottom: 0.5rem;">Frontend Developer</h4>
                    <div class="salary-box"
                        style="margin-top: 1rem; font-size: 0.9rem; color: var(--secondary); background: rgba(45,109,217,0.1); border-color: var(--secondary);">
                        7 – 12 Juta/Bulan</div>
                </div>
                <div class="career-card">
                    <i class="fa-solid fa-laptop-code"
                        style="font-size: 2rem; color: var(--accent); margin-bottom: 1rem;"></i>
                    <h4 class="font-display" style="margin-bottom: 0.5rem;">Web Designer</h4>
                    <div class="salary-box"
                        style="margin-top: 1rem; font-size: 0.9rem; color: #D97706; background: rgba(255,188,0,0.1); border-color: var(--accent);">
                        5 – 9 Juta/Bulan</div>
                </div>
                <div class="career-card">
                    <i class="fa-solid fa-globe" style="font-size: 2rem; color: var(--dark); margin-bottom: 1rem;"></i>
                    <h4 class="font-display" style="margin-bottom: 0.5rem;">Freelance Web Dev</h4>
                    <div class="salary-box"
                        style="margin-top: 1rem; font-size: 0.9rem; color: var(--dark); background: rgba(30,41,59,0.1); border-color: var(--dark);">
                        10 – 20+ Juta/Bulan</div>
                </div>
            </div>
        </div>
    </section>

    <section class="mentor-section" style="padding: 6rem 0; background: var(--bg-light);">
        <div class="container">
            <div class="section-header text-center">
                <h2>Meet Your Mentor</h2>
                <p style="max-width: 700px; margin: 0 auto;">Belajar langsung dari tutor expert Alhazen Academy —
                    praktisi aktif di industri yang siap membimbing kamu dari nol hingga portfolio siap kerja.</p>
            </div>

            <!-- Label kategori UI/UX -->
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                <div
                    style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(0,174,144,0.1); color: var(--primary); padding: 0.4rem 1rem; border-radius: 50px; font-size: 0.8rem; font-weight: 700; font-family: var(--font-display); letter-spacing: 0.5px; border: 1px solid rgba(0,174,144,0.2);">
                    <i class="fa-solid fa-pen-nib"></i> UI/UX Design Tutor
                </div>
                <div style="flex: 1; height: 1px; background: #e2e8f0;"></div>
            </div>

            <div class="mentor-grid" style="margin-bottom: 3rem;">
                <!-- UI/UX Tutor 1 -->
                <div class="mentor-card">
                    <div
                        style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), #00c9a7); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 4px solid var(--bg-light);">
                        <span
                            style="font-family: var(--font-display); font-weight: 800; font-size: 1.5rem; color: white;">MA</span>
                    </div>
                    <h4 class="font-display">Muhammad Agung<br>Pratama Tresna</h4>
                    <p style="color: var(--primary); font-weight: 700; font-size: 0.88rem; margin-top: 0.5rem;">UI/UX
                        Design Expert</p>
                    <p style="font-size: 0.85rem; margin-top: 0.5rem; line-height: 1.5;">Tutor Expert Alhazen Academy
                        bidang UI/UX Design. Berpengalaman merancang antarmuka produk digital yang berpusat pada
                        pengalaman pengguna.</p>
                    <div class="mentor-cred">
                        <span><i class="fa-solid fa-pen-nib" style="color: var(--primary); margin-right: 0.25rem;"></i>
                            UI/UX Design</span>
                        <span><i class="fa-solid fa-star" style="color: var(--accent); margin-right: 0.25rem;"></i>
                            Expert</span>
                    </div>
                </div>

                <!-- UI/UX Tutor 2 -->
                <div class="mentor-card">
                    <div
                        style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #00997e, var(--primary)); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 4px solid var(--bg-light);">
                        <span
                            style="font-family: var(--font-display); font-weight: 800; font-size: 1.5rem; color: white;">FM</span>
                    </div>
                    <h4 class="font-display">Fajar Malkan</h4>
                    <p style="color: var(--primary); font-weight: 700; font-size: 0.88rem; margin-top: 0.5rem;">UI/UX
                        Design Expert</p>
                    <p style="font-size: 0.85rem; margin-top: 0.5rem; line-height: 1.5;">Tutor Expert Alhazen Academy
                        bidang UI/UX Design. Ahli dalam design thinking, wireframing, dan pembuatan prototype interaktif
                        menggunakan Figma.</p>
                    <div class="mentor-cred">
                        <span><i class="fa-solid fa-pen-nib" style="color: var(--primary); margin-right: 0.25rem;"></i>
                            UI/UX Design</span>
                        <span><i class="fa-solid fa-star" style="color: var(--accent); margin-right: 0.25rem;"></i>
                            Expert</span>
                    </div>
                </div>
            </div>

            <!-- Label kategori Frontend -->
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                <div
                    style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(45,109,217,0.1); color: var(--secondary); padding: 0.4rem 1rem; border-radius: 50px; font-size: 0.8rem; font-weight: 700; font-family: var(--font-display); letter-spacing: 0.5px; border: 1px solid rgba(45,109,217,0.2);">
                    <i class="fa-solid fa-code"></i> Frontend Development Tutor
                </div>
                <div style="flex: 1; height: 1px; background: #e2e8f0;"></div>
            </div>

            <div class="mentor-grid">
                <!-- Frontend Tutor 1 -->
                <div class="mentor-card">
                    <div
                        style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--secondary), #5b8dee); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 4px solid var(--bg-light);">
                        <span
                            style="font-family: var(--font-display); font-weight: 800; font-size: 1.5rem; color: white;">BA</span>
                    </div>
                    <h4 class="font-display">Bagus Adam Farizi</h4>
                    <p style="color: var(--secondary); font-weight: 700; font-size: 0.88rem; margin-top: 0.5rem;">
                        Frontend Development Expert</p>
                    <p style="font-size: 0.85rem; margin-top: 0.5rem; line-height: 1.5;">Tutor Expert Alhazen Academy
                        bidang Frontend Development. Spesialis HTML, CSS, dan JavaScript yang berpengalaman membangun
                        website responsif dan modern.</p>
                    <div class="mentor-cred">
                        <span><i class="fa-solid fa-code" style="color: var(--secondary); margin-right: 0.25rem;"></i>
                            Frontend Dev</span>
                        <span><i class="fa-solid fa-star" style="color: var(--accent); margin-right: 0.25rem;"></i>
                            Expert</span>
                    </div>
                </div>

                <!-- Frontend Tutor 2 -->
                <div class="mentor-card">
                    <div
                        style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #245abc, var(--secondary)); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 4px solid var(--bg-light);">
                        <span
                            style="font-family: var(--font-display); font-weight: 800; font-size: 1.5rem; color: white;">TR</span>
                    </div>
                    <h4 class="font-display">Teddy Ronaldo</h4>
                    <p style="color: var(--secondary); font-weight: 700; font-size: 0.88rem; margin-top: 0.5rem;">
                        Frontend Development Expert</p>
                    <p style="font-size: 0.85rem; margin-top: 0.5rem; line-height: 1.5;">Tutor Expert Alhazen Academy
                        bidang Frontend Development. Berpengalaman mengembangkan antarmuka web interaktif dan menerapkan
                        best practice pengembangan frontend modern.</p>
                    <div class="mentor-cred">
                        <span><i class="fa-solid fa-code" style="color: var(--secondary); margin-right: 0.25rem;"></i>
                            Frontend Dev</span>
                        <span><i class="fa-solid fa-star" style="color: var(--accent); margin-right: 0.25rem;"></i>
                            Expert</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="curriculum" class="curriculum-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>Sprint Learning Schedule</h2>
                <p>Jadwal intensif 3 minggu dengan model Hybrid Sprint Learning.</p>
            </div>

            <div class="sprint-format-box"
                style="background: white; padding: 2.5rem; border-radius: 20px; border: 1px solid #e2e8f0; margin-bottom: 3rem; box-shadow: var(--shadow-sm);">
                <h3 class="font-display" style="margin-bottom: 1.5rem; color: var(--primary);">Sprint Learning Format
                </h3>
                <p style="margin-bottom: 1.5rem;">Program berlangsung selama 3 minggu intensif dengan format:</p>
                <div class="sprint-format-grid">
                    <div
                        style="background: rgba(0,174,144,0.05); padding: 1rem; border-radius: 12px; border-left: 4px solid var(--primary);">
                        <strong style="display: block; color: var(--primary);">Jumat</strong>
                        <span>UI/UX Sprint Class</span>
                    </div>
                    <div
                        style="background: rgba(45,109,217,0.05); padding: 1rem; border-radius: 12px; border-left: 4px solid var(--secondary);">
                        <strong style="display: block; color: var(--secondary);">Sabtu</strong>
                        <span>Frontend Sprint Class</span>
                    </div>
                    <div
                        style="background: rgba(250,78,38,0.05); padding: 1rem; border-radius: 12px; border-left: 4px solid #FA4E26;">
                        <strong style="display: block; color: #FA4E26;">Malam hari</strong>
                        <span>VIP Mentoring Session</span>
                    </div>
                </div>
                <p style="font-size: 0.9rem; color: var(--light-text); font-style: italic; margin-top: 1rem;">Peserta
                    dapat mengikuti salah satu kelas sprint atau mengikuti keduanya untuk pemahaman lebih lengkap.</p>
            </div>

            <!-- Level 1 Table -->
            <div class="week-schedule" style="margin-bottom: 3rem;">
                <h4 class="font-display"
                    style="margin-bottom: 1rem; color: var(--dark); background: #e2e8f0; padding: 0.5rem 1rem; border-radius: 8px; display: inline-block;">
                    Level 1 – Starter Sprint</h4>
                <div style="overflow-x: auto; -webkit-overflow-scrolling: touch;">
                    <table
                        style="width: 100%; border-collapse: collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm);">
                        <thead>
                            <tr style="background: var(--dark); color: white; text-align: left;">
                                <th style="padding: 1rem;">Program</th>
                                <th style="padding: 1rem;">Topik</th>
                                <th style="padding: 1rem;">Tanggal</th>
                                <th style="padding: 1rem;">Hari</th>
                                <th style="padding: 1rem;">Waktu</th>
                                <th style="padding: 1rem;">Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600;">UI/UX Sprint</td>
                                <td style="padding: 1rem;">Fundamental UI/UX Design & Design Thinking</td>
                                <td style="padding: 1rem;">27 Maret 2026</td>
                                <td style="padding: 1rem;">Jumat</td>
                                <td style="padding: 1rem;">16.00 – 18.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #e2e8f0; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">General</span>
                                </td>
                            </tr>
                            <tr style="background: rgba(250,78,38,0.03); border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600; color: #FA4E26;">VIP Mentoring</td>
                                <td style="padding: 1rem;">Design Review & Q&A</td>
                                <td style="padding: 1rem;">27 Maret 2026</td>
                                <td style="padding: 1rem;">Jumat</td>
                                <td style="padding: 1rem;">19.30 – 21.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #FA4E26; color: white; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">VIP</span>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600;">Frontend Sprint</td>
                                <td style="padding: 1rem;">HTML Structure & Website Layout</td>
                                <td style="padding: 1rem;">28 Maret 2026</td>
                                <td style="padding: 1rem;">Sabtu</td>
                                <td style="padding: 1rem;">16.00 – 18.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #e2e8f0; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">General</span>
                                </td>
                            </tr>
                            <tr style="background: rgba(250,78,38,0.03);">
                                <td style="padding: 1rem; font-weight: 600; color: #FA4E26;">VIP Mentoring</td>
                                <td style="padding: 1rem;">Live Coding & Debugging</td>
                                <td style="padding: 1rem;">28 Maret 2026</td>
                                <td style="padding: 1rem;">Sabtu</td>
                                <td style="padding: 1rem;">19.30 – 21.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #FA4E26; color: white; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">VIP</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Level 2 Table -->
            <div class="week-schedule" style="margin-bottom: 3rem;">
                <h4 class="font-display"
                    style="margin-bottom: 1rem; color: var(--dark); background: #e2e8f0; padding: 0.5rem 1rem; border-radius: 8px; display: inline-block;">
                    Level 2 – Builder Sprint</h4>
                <div style="overflow-x: auto; -webkit-overflow-scrolling: touch;">
                    <table
                        style="width: 100%; border-collapse: collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm);">
                        <thead>
                            <tr style="background: var(--dark); color: white; text-align: left;">
                                <th style="padding: 1rem;">Program</th>
                                <th style="padding: 1rem;">Topik</th>
                                <th style="padding: 1rem;">Tanggal</th>
                                <th style="padding: 1rem;">Hari</th>
                                <th style="padding: 1rem;">Waktu</th>
                                <th style="padding: 1rem;">Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600;">UI/UX Sprint</td>
                                <td style="padding: 1rem;">Layout UI, Typography & Color System</td>
                                <td style="padding: 1rem;">2 April 2026</td>
                                <td style="padding: 1rem;">Kamis</td>
                                <td style="padding: 1rem;">16.00 – 18.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #e2e8f0; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">General</span>
                                </td>
                            </tr>
                            <tr style="background: rgba(250,78,38,0.03); border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600; color: #FA4E26;">VIP Mentoring</td>
                                <td style="padding: 1rem;">UI Design Feedback</td>
                                <td style="padding: 1rem;">2 April 2026</td>
                                <td style="padding: 1rem;">Kamis</td>
                                <td style="padding: 1rem;">19.30 – 21.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #FA4E26; color: white; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">VIP</span>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600;">Frontend Sprint</td>
                                <td style="padding: 1rem;">CSS Layout & Responsive Design</td>
                                <td style="padding: 1rem;">4 April 2026</td>
                                <td style="padding: 1rem;">Sabtu</td>
                                <td style="padding: 1rem;">16.00 – 18.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #e2e8f0; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">General</span>
                                </td>
                            </tr>
                            <tr style="background: rgba(250,78,38,0.03);">
                                <td style="padding: 1rem; font-weight: 600; color: #FA4E26;">VIP Mentoring</td>
                                <td style="padding: 1rem;">Coding Practice & Debugging</td>
                                <td style="padding: 1rem;">4 April 2026</td>
                                <td style="padding: 1rem;">Sabtu</td>
                                <td style="padding: 1rem;">19.30 – 21.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #FA4E26; color: white; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">VIP</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Level 3 Table -->
            <div class="week-schedule" style="margin-bottom: 3rem;">
                <h4 class="font-display"
                    style="margin-bottom: 1rem; color: var(--dark); background: #e2e8f0; padding: 0.5rem 1rem; border-radius: 8px; display: inline-block;">
                    Level 3 – Master Sprint</h4>
                <div style="overflow-x: auto; -webkit-overflow-scrolling: touch;">
                    <table
                        style="width: 100%; border-collapse: collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm);">
                        <thead>
                            <tr style="background: var(--dark); color: white; text-align: left;">
                                <th style="padding: 1rem;">Program</th>
                                <th style="padding: 1rem;">Topik</th>
                                <th style="padding: 1rem;">Tanggal</th>
                                <th style="padding: 1rem;">Hari</th>
                                <th style="padding: 1rem;">Waktu</th>
                                <th style="padding: 1rem;">Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600;">UI/UX Sprint</td>
                                <td style="padding: 1rem;">UI Project & Prototype</td>
                                <td style="padding: 1rem;">10 April 2026</td>
                                <td style="padding: 1rem;">Jumat</td>
                                <td style="padding: 1rem;">16.00 – 18.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #e2e8f0; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">General</span>
                                </td>
                            </tr>
                            <tr style="background: rgba(250,78,38,0.03); border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600; color: #FA4E26;">VIP Mentoring</td>
                                <td style="padding: 1rem;">UI Project Review</td>
                                <td style="padding: 1rem;">10 April 2026</td>
                                <td style="padding: 1rem;">Jumat</td>
                                <td style="padding: 1rem;">19.30 – 21.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #FA4E26; color: white; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">VIP</span>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem; font-weight: 600;">Frontend Sprint</td>
                                <td style="padding: 1rem;">Build Portfolio Website</td>
                                <td style="padding: 1rem;">11 April 2026</td>
                                <td style="padding: 1rem;">Sabtu</td>
                                <td style="padding: 1rem;">16.00 – 18.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #e2e8f0; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">General</span>
                                </td>
                            </tr>
                            <tr style="background: rgba(250,78,38,0.03);">
                                <td style="padding: 1rem; font-weight: 600; color: #FA4E26;">VIP Mentoring</td>
                                <td style="padding: 1rem;">Portfolio Review & Career Coaching</td>
                                <td style="padding: 1rem;">11 April 2026</td>
                                <td style="padding: 1rem;">Sabtu</td>
                                <td style="padding: 1rem;">19.30 – 21.00</td>
                                <td style="padding: 1rem;"><span
                                        style="background: #FA4E26; color: white; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem;">VIP</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Program Overview -->
            <div class="program-overview"
                style="background: var(--dark); color: white; padding: 3rem; border-radius: 24px; margin-top: 4rem;">
                <h3 class="font-display text-center" style="margin-bottom: 2rem; color: var(--accent);">Program Overview
                </h3>
                <div class="overview-grid">
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--accent);">6</div>
                        <div style="font-size: 0.9rem; opacity: 0.8;">Sprint Class</div>
                    </div>
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--accent);">6</div>
                        <div style="font-size: 0.9rem; opacity: 0.8;">VIP Mentoring</div>
                    </div>
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--accent);">12</div>
                        <div style="font-size: 0.9rem; opacity: 0.8;">Total Pertemuan</div>
                    </div>
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--accent);">±18</div>
                        <div style="font-size: 0.9rem; opacity: 0.8;">Jam Belajar</div>
                    </div>
                </div>
                <p
                    style="text-align: center; margin-top: 2.5rem; font-size: 1.1rem; color: #cbd5e1; max-width: 800px; margin-left: auto; margin-right: auto;">
                    Program ini dirancang agar peserta dapat memahami alur kerja industri digital mulai dari <strong>UI
                        Design → Frontend Development → Portfolio Project.</strong></p>
            </div>

            <!-- Timeline -->
            <div class="mini-timeline"
                style="margin-top: 4rem; padding-top: 4rem; border-top: 1px solid #e2e8f0; text-align: center;">
                <h4 class="font-display" style="margin-bottom: 3rem;">Sprint Learning Timeline</h4>
                <div class="journey-grid">
                    <div class="journey-step">
                        <strong style="color: var(--primary); display: block; margin-bottom: 0.5rem;">Week 1</strong>
                        <div style="padding: 1rem; background: white; border-radius: 12px; border: 1px solid #e2e8f0;">
                            UI/UX Design</div>
                        <div style="margin: 0.5rem 0; color: #cbd5e1;"><i class="fa-solid fa-arrow-down"></i></div>
                        <div style="padding: 1rem; background: white; border-radius: 12px; border: 1px solid #e2e8f0;">
                            Frontend Layout</div>
                    </div>
                    <div class="journey-step">
                        <strong style="color: var(--secondary); display: block; margin-bottom: 0.5rem;">Week 2</strong>
                        <div style="padding: 1rem; background: white; border-radius: 12px; border: 1px solid #e2e8f0;">
                            UI Design System</div>
                        <div style="margin: 0.5rem 0; color: #cbd5e1;"><i class="fa-solid fa-arrow-down"></i></div>
                        <div style="padding: 1rem; background: white; border-radius: 12px; border: 1px solid #e2e8f0;">
                            Responsive Website</div>
                    </div>
                    <div class="journey-step">
                        <strong style="color: var(--dark); display: block; margin-bottom: 0.5rem;">Week 3</strong>
                        <div style="padding: 1rem; background: white; border-radius: 12px; border: 1px solid #e2e8f0;">
                            UI Project</div>
                        <div style="margin: 0.5rem 0; color: #cbd5e1;"><i class="fa-solid fa-arrow-down"></i></div>
                        <div style="padding: 1rem; background: white; border-radius: 12px; border: 1px solid #e2e8f0;">
                            Portfolio Website</div>
                    </div>
                </div>
                <p style="margin-top: 2rem; font-size: 0.85rem; color: var(--light-text);">Setiap sprint menghasilkan
                    project nyata yang dapat dimasukkan ke portfolio digital peserta.</p>
            </div>
        </div>
    </section>

    <section id="projects" class="projects-section">
        <div class="container">
            <div class="section-header">
                <h2 style="color: white;">Project yang Akan Kamu Bangun</h2>
                <p style="color: #cbd5e1;">Buktikan skill kamu dengan portfolio nyata yang akan dibangun selama program
                    berlangsung.</p>
            </div>
            <div class="projects-grid">
                <div class="project-card">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;"><i
                            class="fa-solid fa-mobile-screen"></i></div>
                    <h3 class="font-display">Desain Aplikasi Mobile</h3>
                    <p style="font-size: 0.9rem; color: #94A3B8; margin-top: 0.5rem;">Merancang antarmuka UI aplikasi
                        mobile e-commerce menggunakan Figma.</p>
                </div>
                <div class="project-card">
                    <div style="font-size: 2rem; color: var(--secondary); margin-bottom: 1rem;"><i
                            class="fa-solid fa-window-maximize"></i></div>
                    <h3 class="font-display">Landing Page Website</h3>
                    <p style="font-size: 0.9rem; color: #94A3B8; margin-top: 0.5rem;">Membuat company profile responsif
                        yang cantik dengan HTML & CSS.</p>
                </div>
                <div class="project-card">
                    <div style="font-size: 2rem; color: var(--accent); margin-bottom: 1rem;"><i
                            class="fa-solid fa-calculator"></i></div>
                    <h3 class="font-display">Interactive JS App</h3>
                    <p style="font-size: 0.9rem; color: #94A3B8; margin-top: 0.5rem;">Menerapkan interaktivitas dasar
                        Javascript pada aplikasi to-do list.</p>
                </div>
                <div class="project-card">
                    <div style="font-size: 2rem; color: white; margin-bottom: 1rem;"><i
                            class="fa-solid fa-address-card"></i></div>
                    <h3 class="font-display">Portfolio Website Pribadi</h3>
                    <p style="font-size: 0.9rem; color: #94A3B8; margin-top: 0.5rem;">Membangun rumah digital untuk
                        memamerkan semua project-mu ke rekruter.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-result-section" style="padding: 6rem 0; background: var(--bg-light);">
        <div class="container">
            <div class="section-header text-center">
                <h2>Portfolio yang Bisa Kamu Bangun</h2>
                <p>Project ini dapat langsung dimasukkan ke portfolio LinkedIn atau GitHub untuk memikat rekruter.</p>
            </div>
            <div class="portfolio-result-grid">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&q=80&w=800"
                        alt="UI Design Result" loading="lazy">
                    <div class="portfolio-caption">Landing Page Conversion Design</div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80&w=800"
                        alt="Mobile UI Result" loading="lazy">
                    <div class="portfolio-caption">Mobile App UI Kit</div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&q=80&w=800"
                        alt="Web Project Result" loading="lazy">
                    <div class="portfolio-caption">Interactive Web Portfolio</div>
                </div>
            </div>
        </div>
    </section>

    <section class="journey-section">
        <div class="container text-center">
            <h2>Perjalanan Belajar Kamu</h2>
            <div class="journey-grid">
                <div class="journey-step">
                    <div class="step-circle">1</div>
                    <h4 class="font-display">UI/UX Design</h4>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Merancang solusi & visual</p>
                </div>
                <div class="journey-step">
                    <div class="step-circle" style="background: var(--primary); box-shadow: 0 0 0 2px var(--primary);">2
                    </div>
                    <h4 class="font-display">Frontend Development</h4>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Mengubah desain jadi code</p>
                </div>
                <div class="journey-step">
                    <div class="step-circle" style="background: var(--dark); box-shadow: 0 0 0 2px var(--dark);">3</div>
                    <h4 class="font-display">Portfolio & Career Prep</h4>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Siap lamar kerja</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PRICING SECTION
    ============================================================ -->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>Pilih Paket Belajarmu</h2>
                <p>Investasi sekali untuk karir masa depan. Pilih jalur yang sesuai dengan kebutuhanmu.</p>
            </div>

            <div class="level-selector">
                <button class="level-btn active" data-level="starter">
                    <span class="level-tag">Level 1 – Starter</span>
                    <span class="level-date">27–28 Maret 2026</span>
                    <span class="level-desc">Fundamental UI/UX & HTML Basic</span>
                </button>
                <button class="level-btn" data-level="builder">
                    <span class="level-tag">Level 2 – Builder</span>
                    <span class="level-date">2–4 April 2026</span>
                    <span class="level-desc">Responsive Layout & UI Component</span>
                </button>
                <button class="level-btn" data-level="master">
                    <span class="level-tag">Level 3 – Master</span>
                    <span class="level-date">10–11 April 2026</span>
                    <span class="level-desc">Portfolio Website & Career Preparation</span>
                </button>
            </div>

            <!-- STARTER -->
            <div id="pricing-starter" class="pricing-group active">
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Starter Reguler</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp79.000</span>
                            <div class="tier-price">Rp49.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses Level 1 Starter</li>
                            <li><i class="fa-solid fa-check"></i> Kelas Live (27–28 Mar)</li>
                            <li><i class="fa-solid fa-check"></i> Sertifikat Starter</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/xuk5w/apply"
                                class="btn btn-outline" style="width: 100%;">Amankan Kursi</a>
                            <span class="btn-microcopy text-center">Mulai belajar dari Rp49.000.</span>
                        </div>
                    </div>
                    <div class="pricing-card vip">
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Starter VIP</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp129.000</span>
                            <div class="tier-price">Rp99.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                            <span class="vip-benefit-highlight">🔥 Upgrade VIP hanya tambah 50K dan tetap mendapatkan
                                rekaman kelas.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses rekaman seluruh kelas</li>
                            <li><i class="fa-solid fa-check"></i> Rekaman mentoring VIP</li>
                            <li><i class="fa-solid fa-check"></i> Review tugas oleh mentor</li>
                            <li><i class="fa-solid fa-check"></i> Template design premium</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/tjaxu/apply"
                                class="btn btn-primary" style="width: 100%;">Daftar VIP Sekarang</a>
                            <span class="btn-microcopy text-center">Peserta VIP tetap mendapatkan rekaman mentoring
                                meskipun tidak hadir live.</span>
                        </div>
                    </div>
                    <div class="pricing-card bundle">
                        <div class="best-seller-badge">MOST POPULAR</div>
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Bundle Reguler</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp158.000</span>
                            <div class="tier-price">Rp98.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses UI/UX + Frontend</li>
                            <li><i class="fa-solid fa-check"></i> 12 Misi Full Portfolio</li>
                            <li><i class="fa-solid fa-check"></i> Sertifikat Bundle</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/f75nj/apply"
                                class="btn btn-outline" style="width: 100%;">Pilih Bundle Reguler</a>
                            <span class="btn-microcopy text-center">Mulai Rp49.000 / Level.</span>
                        </div>
                    </div>
                    <div class="pricing-card vip-bundle bundle-vip-glow">
                        <div class="best-seller-badge">BEST VALUE</div>
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Bundle VIP</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Best Value Package</div>
                            <span class="old-price">Rp258.000</span>
                            <div class="tier-price">Rp198.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                            <span class="vip-benefit-highlight">🔥 Hemat 60K dibanding daftar eceran Starter +
                                VIP.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Semua Benefit VIP</li>
                            <li><i class="fa-solid fa-check"></i> Akses UI/UX + Frontend</li>
                            <li><i class="fa-solid fa-check"></i> Career Coaching Session</li>
                            <li><i class="fa-solid fa-check"></i> Template design premium</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/am3bm/apply"
                                class="btn btn-accent" style="width: 100%;">Daftar Bundle VIP</a>
                            <span class="btn-microcopy text-center">Tetap dapat rekaman kelas dan mentoring meskipun
                                tidak hadir live.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BUILDER -->
            <div id="pricing-builder" class="pricing-group">
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Builder Reguler</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp149.000</span>
                            <div class="tier-price">Rp119.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses Level 2 Builder</li>
                            <li><i class="fa-solid fa-check"></i> Kelas Live (2–4 Apr)</li>
                            <li><i class="fa-solid fa-check"></i> Sertifikat Builder</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/rzd11/apply"
                                class="btn btn-outline" style="width: 100%;">Amankan Kursi</a>
                            <span class="btn-microcopy text-center">Mulai belajar dari Rp119.000.</span>
                        </div>
                    </div>
                    <div class="pricing-card vip">
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Builder VIP</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp199.000</span>
                            <div class="tier-price">Rp169.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                            <span class="vip-benefit-highlight">🔥 Upgrade VIP hanya tambah 50K dan tetap mendapatkan
                                rekaman kelas.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses rekaman seluruh kelas</li>
                            <li><i class="fa-solid fa-check"></i> Rekaman mentoring VIP</li>
                            <li><i class="fa-solid fa-check"></i> Review tugas oleh mentor</li>
                            <li><i class="fa-solid fa-check"></i> Template design premium</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/3exem/apply"
                                class="btn btn-primary" style="width: 100%;">Daftar VIP Sekarang</a>
                            <span class="btn-microcopy text-center">Peserta VIP tetap mendapatkan rekaman mentoring
                                meskipun tidak hadir live.</span>
                        </div>
                    </div>
                    <div class="pricing-card bundle">
                        <div class="best-seller-badge">MOST POPULAR</div>
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Bundle Reguler</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp298.000</span>
                            <div class="tier-price">Rp238.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses UI/UX + Frontend</li>
                            <li><i class="fa-solid fa-check"></i> Advance Components</li>
                            <li><i class="fa-solid fa-check"></i> Sertifikat Bundle</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/9b5an/apply"
                                class="btn btn-outline" style="width: 100%;">Pilih Bundle Reguler</a>
                            <span class="btn-microcopy text-center">Mulai Rp119.000 / Level.</span>
                        </div>
                    </div>
                    <div class="pricing-card vip-bundle bundle-vip-glow">
                        <div class="best-seller-badge">BEST VALUE</div>
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Bundle VIP</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Best Value Package</div>
                            <span class="old-price">Rp398.000</span>
                            <div class="tier-price">Rp338.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                            <span class="vip-benefit-highlight">🔥 Hemat 69K dibanding daftar eceran Builder +
                                VIP.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Semua Benefit VIP</li>
                            <li><i class="fa-solid fa-check"></i> Akses UI/UX + Frontend</li>
                            <li><i class="fa-solid fa-check"></i> Career Coaching Session</li>
                            <li><i class="fa-solid fa-check"></i> Template design premium</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/0hs9m/apply"
                                class="btn btn-accent" style="width: 100%;">Daftar Bundle VIP</a>
                            <span class="btn-microcopy text-center">Tetap dapat rekaman kelas dan mentoring meskipun
                                tidak hadir live.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MASTER -->
            <div id="pricing-master" class="pricing-group">
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Master Reguler</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp179.000</span>
                            <div class="tier-price">Rp149.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses Level 3 Master</li>
                            <li><i class="fa-solid fa-check"></i> Kelas Live (10–11 Apr)</li>
                            <li><i class="fa-solid fa-check"></i> Sertifikat Master</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/8pmn9/apply"
                                class="btn btn-outline" style="width: 100%;">Amankan Kursi</a>
                            <span class="btn-microcopy text-center">Mulai belajar dari Rp149.000.</span>
                        </div>
                    </div>
                    <div class="pricing-card vip">
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Master VIP</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp229.000</span>
                            <div class="tier-price">Rp199.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                            <span class="vip-benefit-highlight">🔥 Upgrade VIP hanya tambah 50K dan tetap mendapatkan
                                rekaman kelas.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses rekaman seluruh kelas</li>
                            <li><i class="fa-solid fa-check"></i> Rekaman mentoring VIP</li>
                            <li><i class="fa-solid fa-check"></i> Review tugas oleh mentor</li>
                            <li><i class="fa-solid fa-check"></i> Template design premium</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/q9gwa/apply"
                                class="btn btn-primary" style="width: 100%;">Daftar VIP Sekarang</a>
                            <span class="btn-microcopy text-center">Peserta VIP tetap mendapatkan rekaman mentoring
                                meskipun tidak hadir live.</span>
                        </div>
                    </div>
                    <div class="pricing-card bundle">
                        <div class="best-seller-badge">MOST POPULAR</div>
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Bundle Reguler</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Early Bird Price</div>
                            <span class="old-price">Rp358.000</span>
                            <div class="tier-price">Rp298.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Akses UI/UX + Frontend</li>
                            <li><i class="fa-solid fa-check"></i> High Fidelity Project</li>
                            <li><i class="fa-solid fa-check"></i> Sertifikat Bundle</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/ki5r6/apply"
                                class="btn btn-outline" style="width: 100%;">Pilih Bundle Reguler</a>
                            <span class="btn-microcopy text-center">Mulai Rp149.000 / Level.</span>
                        </div>
                    </div>
                    <div class="pricing-card vip-bundle bundle-vip-glow">
                        <div class="best-seller-badge">BEST VALUE</div>
                        <h3 class="font-display" style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark);">
                            Bundle VIP</h3>
                        <div style="margin-bottom: 1rem;">
                            <div class="early-bird-badge">Best Value Package</div>
                            <span class="old-price">Rp458.000</span>
                            <div class="tier-price">Rp398.000</div>
                            <span class="price-tagline">Harga Early Bird terbatas untuk batch ini.</span>
                            <span class="vip-benefit-highlight">🔥 Hemat 79K dibanding daftar eceran Master +
                                VIP.</span>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check"></i> Semua Benefit VIP</li>
                            <li><i class="fa-solid fa-check"></i> Akses UI/UX + Frontend</li>
                            <li><i class="fa-solid fa-check"></i> Career Coaching Session</li>
                            <li><i class="fa-solid fa-check"></i> Template design premium</li>
                        </ul>
                        <div style="margin-top: auto;">
                            <a href="https://goakal.com/alhazenacademy/intensive-UIUX-frontend-bootcamp-alhazen/d6a0q/apply"
                                class="btn btn-accent" style="width: 100%;">Daftar Bundle VIP</a>
                            <span class="btn-microcopy text-center">Tetap dapat rekaman kelas dan mentoring meskipun
                                tidak hadir live.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="urgency-section">
        <div class="container">
            <h2>Batch Tech Sprint Segera Dimulai</h2>
            <div class="early-bird-badge" style="margin-bottom: 1rem;">Early Bird Price</div>
            <p style="color: #cbd5e1;">Kuota batch terbatas hanya untuk <strong>200 peserta</strong>. Pendaftaran akan
                ditutup otomatis saat kuota sudah terpenuhi.</p>
            <p style="font-size: 0.85rem; color: var(--accent); margin-bottom: 2rem;">* Harga promo dapat berubah kapan
                saja setelah kuota terpenuhi.</p>

            <div class="countdown-wrapper">
                <div class="countdown-box"><strong id="cd-days">00</strong><span>Hari</span></div>
                <div class="countdown-box"><strong id="cd-hours">00</strong><span>Jam</span></div>
                <div class="countdown-box"><strong id="cd-minutes">00</strong><span>Menit</span></div>
                <div class="countdown-box"><strong id="cd-seconds">00</strong><span>Detik</span></div>
            </div>

            <div style="margin-top: 2rem; max-width: 340px; margin-left: auto; margin-right: auto;">
                <a href="#pricing" class="btn btn-primary btn-large">Amankan Kursi Saya Sekarang</a>
                <span class="btn-microcopy"
                    style="color: #cbd5e1; margin-top: 0.5rem; text-align: center; display: block;">Mulai belajar dari
                    Rp49.000.</span>
            </div>
            <p style="font-size: 0.85rem; color: #cbd5e1; margin-top: 1rem;">Mulai Batch: 27 Maret 2026</p>
        </div>
    </section>

    <section class="faq-section">
        <div class="container" style="max-width: 800px;">
            <div class="section-header text-center">
                <h2>Pertanyaan Sering Diajukan</h2>
            </div>
            <div class="faq-item">
                <div class="faq-question">Apakah program ini cocok untuk pemula? <i
                        class="fa-solid fa-chevron-down"></i></div>
                <div class="faq-answer">
                    <p style="margin-top: 1rem;">Sangat cocok! Program ini memang dirancang khusus untuk peserta yang
                        benar-benar mulai dari nol tanpa pengetahuan IT sebelumnya.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Apakah harus belajar coding sebelumnya? <i
                        class="fa-solid fa-chevron-down"></i></div>
                <div class="faq-answer">
                    <p style="margin-top: 1rem;">Tidak perlu. Kami akan mengajarkan dasar-dasar HTML, CSS, dan logika
                        pemrograman Javascript dari tahap paling mendasar.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Apakah ada rekaman kelas jika berhalangan hadir? <i
                        class="fa-solid fa-chevron-down"></i></div>
                <div class="faq-answer">
                    <p style="margin-top: 1rem;">Ya, rekaman kelas tersedia khusus untuk peserta yang meng-upgrade paket
                        mereka ke tingkat VIP.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Apakah harus mengikuti semua level? <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p style="margin-top: 1rem;">Tidak wajib, namun kami sangat menyarankan paket Bundle (UI/UX +
                        Frontend) atau Master untuk hasil portofolio yang komprehensif.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Apakah ada fasilitas mentoring? <i class="fa-solid fa-chevron-down"></i></div>
                <div class="faq-answer">
                    <p style="margin-top: 1rem;">Tentu. Mentoring tersedia di dalam grup eksklusif untuk tanya jawab dan
                        review tugas secara langsung oleh mentor praktisi.</p>
                </div>
            </div>
        </div>
    </section>

    <div style="text-align: center; padding: 6rem 0; background: white;">
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Mulai Perjalanan Karir Digitalmu Hari Ini</h2>
        <p style="font-size: 1.1rem; color: var(--light-text); margin-bottom: 2rem;">Jangan menunggu sampai tahun
            depan.<br>Skill digital adalah investasi terbaik untuk masa depan.</p>
        <div style="width: 100%; max-width: 400px; margin: 0 auto;">
            <a href="#pricing" class="btn btn-primary btn-large"
                style="padding: 1.25rem 2rem; font-size: 1.25rem;">Amankan Kursi Saya Sekarang</a>
            <span class="btn-microcopy text-center">Mulai belajar dari Rp49.000.</span>
        </div>
    </div>


    <!-- Floating CTAs -->
    <a href="#pricing" class="btn btn-primary floating-cta">
        <i class="fa-solid fa-bolt text-accent"></i> Amankan Kursi Saya
    </a>

    <a href="https://wa.me/6281390000332?text=Halo%20Admin%20Alhazen%20Academy%2C%20saya%20tertarik%20dengan%20program%20Alhazen%20Tech%20Sprint%202026.%20Boleh%20minta%20informasi%20lebih%20lanjut%3F"
        class="wa-float" target="_blank">
        <i class="fa-brands fa-whatsapp"></i> Chat Admin
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Navbar shadow
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                navbar.style.boxShadow = window.scrollY > 50 ? '0 4px 6px -1px rgba(0,0,0,0.1)' : 'none';
            });

            // FAQ Accordion
            document.querySelectorAll('.faq-question').forEach(q => {
                q.addEventListener('click', () => {
                    const item = q.parentElement;
                    const isActive = item.classList.contains('active');
                    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
                    if (!isActive) item.classList.add('active');
                });
            });

            // Countdown Timer
            const targetDate = new Date("March 27, 2026 00:00:00").getTime();
            const countdownInterval = setInterval(() => {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.querySelector(".countdown-wrapper").innerHTML = "<div style='font-size: 1.5rem; font-weight: bold; color: var(--accent);'>Pendaftaran Batch Ini Telah Ditutup!</div>";
                    return;
                }

                document.getElementById("cd-days").innerText = Math.floor(distance / 86400000).toString().padStart(2, '0');
                document.getElementById("cd-hours").innerText = Math.floor((distance % 86400000) / 3600000).toString().padStart(2, '0');
                document.getElementById("cd-minutes").innerText = Math.floor((distance % 3600000) / 60000).toString().padStart(2, '0');
                document.getElementById("cd-seconds").innerText = Math.floor((distance % 60000) / 1000).toString().padStart(2, '0');
            }, 1000);


            // Level Selector
            document.querySelectorAll('.level-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const level = btn.getAttribute('data-level');
                    document.querySelectorAll('.level-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    document.querySelectorAll('.pricing-group').forEach(group => {
                        group.classList.toggle('active', group.id === `pricing-${level}`);
                    });
                    // Scroll to pricing grid on mobile
                    if (window.innerWidth <= 768) {
                        document.getElementById(`pricing-${level}`).scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });

            // Mobile Menu Toggle
            const menuToggle = document.getElementById('menu-toggle');
            const navLinks = document.getElementById('nav-links');

            if (menuToggle && navLinks) {
                menuToggle.addEventListener('click', () => {
                    navLinks.classList.toggle('active');
                    const icon = menuToggle.querySelector('i');
                    icon.classList.toggle('fa-bars', !navLinks.classList.contains('active'));
                    icon.classList.toggle('fa-xmark', navLinks.classList.contains('active'));
                });

                navLinks.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        navLinks.classList.remove('active');
                        const icon = menuToggle.querySelector('i');
                        icon.classList.add('fa-bars');
                        icon.classList.remove('fa-xmark');
                    });
                });
            }
        });
    </script>
</body>

</html>
