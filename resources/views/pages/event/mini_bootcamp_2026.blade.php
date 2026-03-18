<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Mini Bootcamp Coding – One Day One Project dari Alhazen Academy. Belajar teknologi praktis dalam satu sesi kelas.">
    <title>ALHAZEN MINI BOOTCAMP 2026 | One Day One Project</title>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alhazenacademy.com/minibotcamp/">
    <meta property="og:title" content="ALHAZEN MINI BOOTCAMP 2026 | One Day One Project">
    <meta property="og:description"
        content="Mini Bootcamp Coding – One Day One Project dari Alhazen Academy. Belajar teknologi praktis dalam satu sesi kelas.">
    <meta property="og:image"
        content="https://ui-avatars.com/api/?name=Alhazen+Bootcamp&background=00AE90&color=fff&size=600">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Custom Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        /* Glassmorphism */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Section Transitions */
        section {
            transition: all 0.5s ease-in-out;
        }

        /* Card Hover Effects */
        .hover-lift {
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
        }

        /* Calendar Styling */
        .calendar-day {
            aspect-ratio: 1 / 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 500;
        }

        .calendar-day:hover {
            background-color: #f1f5f9;
        }

        .calendar-day.has-event {
            background-color: rgba(0, 174, 144, 0.1);
            color: #00AE90;
            position: relative;
            font-weight: 700;
        }

        .calendar-day.active {
            background-color: #00AE90 !important;
            color: white !important;
        }

        /* Scroll Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Sticky Notification Bar Animation */
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        .animate-slide-down {
            animation: slideDown 0.5s ease-out forwards;
        }

        /* Project Card Hover Animation Enhancement */
        .project-card-icon {
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
        }

        .group:hover .project-card-icon {
            transform: scale(1.15);
            opacity: 0.8 !important;
        }

        /* Mobile Calendar Optimizations */
        @media (max-width: 480px) {
            #calendar .calendar-grid {
                gap: 0.75rem !important;
                /* gap-3 */
            }

            .calendar-day {
                height: 4.5rem !important;
                /* h-72px increased height */
                padding: 0.5rem 0.25rem !important;
                flex-direction: column !important;
                justify-content: center !important;
                gap: 0.375rem !important;
                /* gap-1.5 */
                border-radius: 0.75rem !important;
                /* rounded-xl */
                font-weight: 600;
                font-size: 0.875rem;
            }

            /* Primary selection state - High Contrast */
            .calendar-day.calendar-active {
                background-color: #00AE90 !important;
                /* bg-primary */
                color: white !important;
                box-shadow: 0 10px 15px -3px rgba(0, 174, 144, 0.3), 0 4px 6px -2px rgba(0, 174, 144, 0.1) !important;
                font-weight: 700 !important;
                transform: scale(1.05) !important;
                box-shadow: inset 0 0 0 2px white !important;
                /* ring-2 white inner border */
                z-index: 10;
                font-size: 1rem !important;
            }

            /* Open Registration Highlight (March 28) */
            .calendar-day.open-registration:not(.calendar-active) {
                box-shadow: inset 0 0 0 2px #00AE90 !important;
                /* ring-2 primary */
                background-color: rgba(0, 174, 144, 0.1) !important;
                /* bg-primary/10 */
                font-weight: 700 !important;
            }

            /* General Event Background */
            .calendar-day.has-event:not(.calendar-active):not(.open-registration) {
                background-color: rgba(0, 174, 144, 0.08) !important;
            }

            /* Event Dot */
            .calendar-day .event-dot {
                width: 0.625rem !important;
                /* w-2.5 */
                height: 0.625rem !important;
                /* h-2.5 */
                background-color: #00AE90 !important;
                margin-top: 0.125rem;
                /* fine-tuned spacing */
                transition: background-color 0.2s;
            }

            /* Label Bootcamp */
            .calendar-day .mobile-badge {
                display: block !important;
                font-size: 9px !important;
                font-weight: 500 !important;
                color: #00AE90 !important;
                line-height: 1;
                margin-top: 2px;
                transition: color 0.2s;
            }

            /* Active State for Indicators */
            .calendar-day.calendar-active .mobile-badge {
                color: white !important;
                font-weight: 600 !important;
            }

            .calendar-day.calendar-active .event-dot,
            .calendar-day.calendar-active .open-badge {
                background-color: white !important;
                color: #00AE90 !important;
            }

            /* Open Silver/Green Badge (Normal) */
            .open-badge {
                font-size: 8px !important;
                background-color: #00AE90 !important;
                color: white !important;
                padding: 1px 6px !important;
                border-radius: 9999px !important;
                margin-top: 2px;
            }
        }

        /* Very Small Screen Overrides */
        @media (max-width: 420px) {
            #calendar .calendar-grid {
                gap: 0.625rem !important;
                /* gap-2.5 */
            }
        }

        .calendar-day {
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .calendar-day:active {
            transform: scale(0.95) !important;
        }

        .calendar-day .mobile-badge {
            display: none;
        }
    </style>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00AE90',
                        secondary: '#2D6DD9',
                        accent: '#FFBC00',
                        background: '#F8FAFC',
                        darkText: '#1E293B',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'premium': '0 10px 30px -5px rgba(0, 0, 0, 0.05), 0 5px 15px -5px rgba(0, 0, 0, 0.04)',
                        'hover': '0 20px 40px -5px rgba(0, 0, 0, 0.1), 0 10px 20px -5px rgba(0, 0, 0, 0.05)',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-darkText font-sans overflow-x-hidden">

    <!-- Sticky Notification Bar -->
    <div class="fixed top-0 left-0 w-full bg-primary text-white py-2 z-[60] shadow-md animate-slide-down">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-center gap-4">
            <p class="text-[10px] md:text-sm font-bold tracking-wide">
                <span class="mr-2">⚡</span> Batch 1 Registration Open: Scratch Game & Python Basic – 28 Maret
            </p>
            <a href="#calendar"
                class="bg-white text-primary px-3 py-1 rounded-full text-[10px] md:text-xs font-bold hover:bg-slate-50 transition-colors">Daftar
                Sekarang</a>
        </div>
    </div>


    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden reveal">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10 pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/10 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-secondary/10 blur-[120px] rounded-full">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 bg-primary/5 border border-primary/10 rounded-full text-primary text-sm font-bold mb-6 animate-fade-in">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                MINI BOOTCAMP 2026
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-poppins font-bold text-darkText leading-[1.1] mb-8">
                ONE DAY <br> <span class="text-primary italic">ONE PROJECT</span>
            </h1>

            <!-- Countdown Hero -->
            <div id="hero-countdown-container" class="hidden mb-10 flex flex-col items-center">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">Pendaftaran ditutup dalam:
                </p>
                <div id="hero-countdown"
                    class="bg-primary/10 text-primary font-bold rounded-full px-6 py-2 text-sm md:text-lg">
                    00 : 00 : 00 : 00
                </div>
            </div>

            <p class="max-w-2xl mx-auto text-lg md:text-xl text-slate-500 mb-10 leading-relaxed">
                Belajar teknologi dalam satu sesi kelas dan langsung menghasilkan <span
                    class="text-darkText font-bold">1 project nyata</span>. Siapkan dirimu menjadi tech-talent masa
                depan.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                <a href="#calendar"
                    class="w-full sm:w-auto px-8 py-4 bg-primary text-white rounded-full font-bold shadow-xl shadow-primary/20 hover:shadow-2xl hover:-translate-y-1 transition-all">
                    Lihat Jadwal Bootcamp
                </a>
                <div class="flex -space-x-4">
                    <div class="w-12 h-12 rounded-full border-4 border-white bg-slate-200 overflow-hidden"><img
                            src="https://ui-avatars.com/api/?name=User+1&background=random" alt="User"
                            loading="lazy"></div>
                    <div class="w-12 h-12 rounded-full border-4 border-white bg-slate-200 overflow-hidden"><img
                            src="https://ui-avatars.com/api/?name=User+2&background=random" alt="User"
                            loading="lazy"></div>
                    <div class="w-12 h-12 rounded-full border-4 border-white bg-slate-200 overflow-hidden"><img
                            src="https://ui-avatars.com/api/?name=User+3&background=random" alt="User"
                            loading="lazy"></div>
                    <div
                        class="w-12 h-12 rounded-full border-4 border-white bg-slate-300 flex items-center justify-center text-[10px] font-bold">
                        +500</div>
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="flex flex-wrap justify-center gap-6 md:gap-10 opacity-70 mb-16">
                <div class="flex items-center gap-2 text-sm text-slate-500 font-medium">
                    <i class="fas fa-check-circle text-primary"></i> 500+ peserta belajar
                </div>
                <div class="flex items-center gap-2 text-sm text-slate-500 font-medium">
                    <i class="fas fa-check-circle text-primary"></i> Project-based learning
                </div>
                <div class="flex items-center gap-2 text-sm text-slate-500 font-medium">
                    <i class="fas fa-check-circle text-primary"></i> Mentor praktisi teknologi
                </div>
            </div>

            <!-- Categories -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 max-w-4xl mx-auto">
                <div
                    class="p-4 bg-white border border-slate-100 rounded-2xl shadow-premium hover:shadow-hover transition-all group">
                    <div
                        class="w-10 h-10 mx-auto bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 block mb-1">PROGRAMMING</span>
                    <span class="text-sm font-bold">Scratch</span>
                </div>
                <div
                    class="p-4 bg-white border border-slate-100 rounded-2xl shadow-premium hover:shadow-hover transition-all group">
                    <div
                        class="w-10 h-10 mx-auto bg-secondary/10 rounded-lg flex items-center justify-center text-secondary mb-3 group-hover:scale-110 transition-transform">
                        <i class="fab fa-python"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 block mb-1">CODING</span>
                    <span class="text-sm font-bold">Python</span>
                </div>
                <div
                    class="p-4 bg-white border border-slate-100 rounded-2xl shadow-premium hover:shadow-hover transition-all group">
                    <div
                        class="w-10 h-10 mx-auto bg-accent/10 rounded-lg flex items-center justify-center text-accent mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 block mb-1">HARDWARE</span>
                    <span class="text-sm font-bold">IoT Project</span>
                </div>
                <div
                    class="p-4 bg-white border border-slate-100 rounded-2xl shadow-premium hover:shadow-hover transition-all group">
                    <div
                        class="w-10 h-10 mx-auto bg-orange-100 rounded-lg flex items-center justify-center text-orange-500 mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-cube"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 block mb-1">CREATIVE</span>
                    <span class="text-sm font-bold">3D Animation</span>
                </div>
                <div
                    class="p-4 bg-white border border-slate-100 rounded-2xl shadow-premium hover:shadow-hover transition-all group col-span-2 md:col-span-1">
                    <div
                        class="w-10 h-10 mx-auto bg-blue-100 rounded-lg flex items-center justify-center text-blue-500 mb-3 group-hover:scale-110 transition-transform">
                        <i class="fab fa-microsoft"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 block mb-1">DIGITAL SKILL</span>
                    <span class="text-sm font-bold">Productivity</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Section -->
    <section id="why" class="py-24 bg-white reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Kenapa Mini Bootcamp Ini
                    Berbeda?</h2>
                <div class="w-20 h-1.5 bg-primary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div
                    class="p-8 rounded-3xl bg-background border border-slate-100 hover:border-primary/20 hover:shadow-premium transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-2xl text-primary shadow-sm mb-6 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Project Based Learning</h3>
                    <p class="text-slate-500 leading-relaxed">Setiap kelas menghasilkan project nyata yang bisa
                        langsung
                        kamu pamerkan.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="p-8 rounded-3xl bg-background border border-slate-100 hover:border-primary/20 hover:shadow-premium transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-2xl text-primary shadow-sm mb-6 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Short Learning Session</h3>
                    <p class="text-slate-500 leading-relaxed">Durasi efisien, hanya sekitar 1–2 jam per sesi kelas.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="p-8 rounded-3xl bg-background border border-slate-100 hover:border-primary/20 hover:shadow-premium transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-2xl text-primary shadow-sm mb-6 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Beginner Friendly</h3>
                    <p class="text-slate-500 leading-relaxed">Cocok untuk pemula bahkan tanpa pengalaman coding sama
                        sekali.</p>
                </div>
                <!-- Card 4 -->
                <div
                    class="p-8 rounded-3xl bg-background border border-slate-100 hover:border-primary/20 hover:shadow-premium transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-2xl text-primary shadow-sm mb-6 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Affordable Learning</h3>
                    <p class="text-slate-500 leading-relaxed">Investasi masa depan hanya Rp29.000 per kelas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Interactive Timeline -->
    <section id="timeline" class="py-24 bg-slate-50 overflow-hidden reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Interactive Timeline
                    Learning
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto">Perjalanan belajar seru yang dirancang untuk mengasah skill
                    teknologimu step-by-step.</p>
            </div>

            <div class="relative">
                <!-- Progress Line (Desktop) -->
                <div class="hidden lg:block absolute top-[4.5rem] left-0 w-full h-1 bg-slate-200">
                    <div class="absolute top-0 left-0 h-full bg-primary/30 w-full animate-pulse"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                    <!-- Step 1 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-primary rounded-full z-10 items-center justify-center text-primary font-bold shadow-premium transition-transform group-hover:scale-125">
                            1</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-4">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Scratch Programming</h4>
                            <p class="text-sm text-slate-500 mb-4 italic">"Belajar logika dasar pemrograman tanpa ribet
                                coding teks."</p>
                            <div
                                class="text-xs font-bold text-primary bg-primary/5 px-2 py-1 rounded inline-block mb-3">
                                Project: Game Tangkap Ketupat</div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-secondary rounded-full z-10 items-center justify-center text-secondary font-bold shadow-premium transition-transform group-hover:scale-125">
                            2</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift">
                            <div
                                class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center text-secondary mb-4">
                                <i class="fab fa-python"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Python Programming</h4>
                            <p class="text-sm text-slate-500 mb-4 italic">"Belajar coding profesional dengan bahasa
                                yang
                                paling populer."</p>
                            <div
                                class="text-xs font-bold text-secondary bg-secondary/5 px-2 py-1 rounded inline-block mb-3">
                                Project: Password Generator</div>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-accent rounded-full z-10 items-center justify-center text-accent font-bold shadow-premium transition-transform group-hover:scale-125">
                            3</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift">
                            <div
                                class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent mb-4">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">IoT Project</h4>
                            <p class="text-sm text-slate-500 mb-4 italic">"Mengenal teknologi hardware dan sensor dunia
                                cerdas."</p>
                            <div class="text-xs font-bold text-accent bg-accent/5 px-2 py-1 rounded inline-block mb-3">
                                Project: RGB LED Smart Control</div>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-orange-500 rounded-full z-10 items-center justify-center text-orange-500 font-bold shadow-premium transition-transform group-hover:scale-125">
                            4</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift">
                            <div
                                class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-orange-500 mb-4">
                                <i class="fas fa-cube"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">3D Animation</h4>
                            <p class="text-sm text-slate-500 mb-4 italic">"Menuangkan kreativitas dalam bentuk animasi
                                3D sederhana."</p>
                            <div
                                class="text-xs font-bold text-orange-500 bg-orange-50 px-2 py-1 rounded inline-block mb-3">
                                Project: Modern Room Design</div>
                        </div>
                    </div>
                    <!-- Step 5 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-blue-500 rounded-full z-10 items-center justify-center text-blue-500 font-bold shadow-premium transition-transform group-hover:scale-125">
                            5</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-500 mb-4">
                                <i class="fab fa-microsoft"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Microsoft Productivity</h4>
                            <p class="text-sm text-slate-500 mb-4 italic">"Kuasai skill digital fundamental untuk dunia
                                kerja."</p>
                            <div
                                class="text-xs font-bold text-blue-500 bg-blue-50 px-2 py-1 rounded inline-block mb-3">
                                Project: Personal Budgeting App</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Target Peserta -->
    <section id="target" class="py-24 bg-white relative reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Program Ini Cocok Untuk Kamu
                </h2>
                <div class="w-20 h-1.5 bg-secondary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Target 1 -->
                <div
                    class="p-8 rounded-3xl border border-slate-100 bg-white shadow-premium hover:shadow-hover transition-all relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-bl-[100px] -mr-8 -mt-8 group-hover:bg-primary/10 transition-colors">
                    </div>
                    <span class="text-xs font-bold text-primary tracking-widest block mb-1">TINGKATAN</span>
                    <h3 class="text-2xl font-bold mb-4">SD</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-sm text-slate-500">
                            <i class="fas fa-check-circle text-primary"></i> Scratch Programming
                        </li>
                        <li class="flex items-center gap-2 text-sm text-slate-500">
                            <i class="fas fa-check-circle text-primary"></i> 3D Animation Basic
                        </li>
                    </ul>
                </div>
                <!-- Target 2 -->
                <div
                    class="p-8 rounded-3xl border border-slate-100 bg-white shadow-premium hover:shadow-hover transition-all relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-secondary/5 rounded-bl-[100px] -mr-8 -mt-8 group-hover:bg-secondary/10 transition-colors">
                    </div>
                    <span class="text-xs font-bold text-secondary tracking-widest block mb-1">TINGKATAN</span>
                    <h3 class="text-2xl font-bold mb-4">SMP</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-sm text-slate-500">
                            <i class="fas fa-check-circle text-secondary"></i> IoT Project
                        </li>
                        <li class="flex items-center gap-2 text-sm text-slate-500">
                            <i class="fas fa-check-circle text-secondary"></i> 3D Animation Intermediate
                        </li>
                    </ul>
                </div>
                <!-- Target 3 -->
                <div
                    class="p-8 rounded-3xl border border-slate-100 bg-white shadow-premium hover:shadow-hover transition-all relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-accent/5 rounded-bl-[100px] -mr-8 -mt-8 group-hover:bg-accent/10 transition-colors">
                    </div>
                    <span class="text-xs font-bold text-accent tracking-widest block mb-1">TINGKATAN</span>
                    <h3 class="text-2xl font-bold mb-4">SMA</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-sm text-slate-500">
                            <i class="fas fa-check-circle text-accent"></i> Python Programming
                        </li>
                        <li class="flex items-center gap-2 text-sm text-slate-500">
                            <i class="fas fa-check-circle text-accent"></i> IoT Advanced
                        </li>
                    </ul>
                </div>
                <!-- Target 4 -->
                <div
                    class="p-8 rounded-3xl border border-slate-100 bg-white shadow-premium hover:shadow-hover transition-all relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-blue-500/5 rounded-bl-[100px] -mr-8 -mt-8 group-hover:bg-blue-500/10 transition-colors">
                    </div>
                    <span class="text-xs font-bold text-blue-500 tracking-widest block mb-1">TINGKATAN</span>
                    <h3 class="text-2xl font-bold mb-4">Mahasiswa</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-sm text-slate-500">
                            <i class="fas fa-check-circle text-blue-500"></i> Microsoft Productivity
                        </li>
                        <li class="flex items-center gap-2 text-sm text-slate-500">
                            <i class="fas fa-check-circle text-blue-500"></i> Python for Data
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Interactive Bootcamp Calendar -->
    <section id="calendar" class="py-24 bg-white reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Interactive Bootcamp
                    Calendar</h2>
                <p class="text-slate-500 max-w-xl mx-auto">Pilih jadwal yang sesuai dengan minat dan jenjang
                    pendidikanmu.</p>
            </div>

            <div class="bg-slate-50 rounded-[2.5rem] p-6 md:p-12 border border-slate-100 shadow-premium">
                <!-- Filter -->
                <div class="flex flex-wrap items-center justify-center gap-3 mb-12" id="calendar-filters">
                    <button data-filter="all"
                        class="filter-btn active px-6 py-2.5 rounded-full text-sm font-bold transition-all bg-primary text-white shadow-lg shadow-primary/20">Semua</button>
                    <button data-filter="SD"
                        class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold transition-all bg-white text-slate-500 border border-slate-200 hover:border-primary/30">SD</button>
                    <button data-filter="SMP"
                        class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold transition-all bg-white text-slate-500 border border-slate-200 hover:border-primary/30">SMP</button>
                    <button data-filter="SMA"
                        class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold transition-all bg-white text-slate-500 border border-slate-200 hover:border-primary/30">SMA</button>
                    <button data-filter="Mahasiswa"
                        class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold transition-all bg-white text-slate-500 border border-slate-200 hover:border-primary/30">Mahasiswa</button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <!-- Calendar Grid -->
                    <div class="lg:col-span-2 bg-white rounded-3xl p-6 shadow-sm border border-slate-100">
                        <div class="flex items-center justify-between mb-8">
                            <h3 id="current-month" class="text-xl font-bold font-poppins">Maret 2026</h3>
                            <div class="flex gap-2">
                                <button id="prev-month"
                                    class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-50 hover:bg-slate-100 transition-colors text-slate-400">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button id="next-month"
                                    class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-50 hover:bg-slate-100 transition-colors text-slate-400">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="grid grid-cols-7 gap-2 mb-4 text-center">
                            <div class="text-xs font-bold text-slate-400 uppercase">Min</div>
                            <div class="text-xs font-bold text-slate-400 uppercase">Sen</div>
                            <div class="text-xs font-bold text-slate-400 uppercase">Sel</div>
                            <div class="text-xs font-bold text-slate-400 uppercase">Rab</div>
                            <div class="text-xs font-bold text-slate-400 uppercase">Kam</div>
                            <div class="text-xs font-bold text-slate-400 uppercase">Jum</div>
                            <div class="text-xs font-bold text-slate-400 uppercase">Sab</div>
                        </div>

                        <div id="calendar-grid" class="grid grid-cols-7 gap-2">
                            <!-- Days generated by JS -->
                        </div>
                    </div>

                    <!-- Selected Day Info -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm flex flex-col items-center justify-center text-center opacity-60"
                        id="empty-day-state">
                        <div
                            class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-3xl text-slate-200 mb-6 font-bold">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                        <h4 class="font-bold text-slate-400 mb-2">Pilih Tanggal</h4>
                        <p class="text-slate-400 text-sm">Klik pada tanggal yang memiliki tanda titik untuk melihat
                            detail bootcamp.</p>
                    </div>

                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hidden"
                        id="event-list-state">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-2xl flex flex-col items-center justify-center text-white font-bold leading-none">
                                <span class="text-xs uppercase opacity-70 mb-1" id="selected-day-name">MAR</span>
                                <span class="text-xl" id="selected-day-num">28</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg leading-tight" id="selected-event-title">Scratch Game
                                    Bootcamp</h4>
                                <span class="text-xs font-bold text-primary uppercase" id="selected-event-category">SD
                                    - SMP</span>
                            </div>
                        </div>

                        <div class="space-y-6 mb-8">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                        Project</p>
                                    <p class="text-sm font-bold text-darkText" id="selected-event-project">Game
                                        Tangkap Ketupat</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                        Waktu</p>
                                    <p class="text-sm font-bold text-darkText" id="selected-event-time">09.30 – 11.15
                                        WIB</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400">
                                    <i class="fas fa-tag"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                        Harga</p>
                                    <p class="text-lg font-bold text-primary" id="selected-event-price">Rp29.000</p>
                                </div>
                            </div>
                        </div>

                        <button id="book-btn"
                            class="w-full py-4 bg-primary text-white rounded-2xl font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all">Daftar
                            Kelas Ini</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coming Soon Popup -->
    <div id="coming-soon-popup"
        class="fixed inset-0 z-[100] flex items-center justify-center p-4 invisible opacity-0 transition-all duration-300">
        <div class="absolute inset-0 bg-darkText/40 backdrop-blur-md" id="popup-overlay"></div>
        <div class="relative bg-white w-full max-w-sm rounded-[2.5rem] overflow-hidden shadow-2xl transition-all scale-90 text-center"
            id="popup-content">
            <div class="p-10">
                <div
                    class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center text-3xl text-primary mx-auto mb-6">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="text-2xl font-bold font-poppins text-darkText mb-3">Coming Soon</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8">
                    Pendaftaran untuk kelas ini akan segera dibuka. <br>
                    Ikuti update terbaru dari Alhazen Academy untuk informasi pendaftaran berikutnya.
                </p>
                <button id="close-popup"
                    class="w-full py-4 bg-primary text-white rounded-full font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all">
                    Mengerti
                </button>
            </div>
        </div>
    </div>

    <!-- Section 7: Project Preview -->
    <section id="projects" class="py-24 bg-slate-50 overflow-hidden reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div>
                    <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Project Preview</h2>
                    <p class="text-slate-500">Intip beberapa maha karya yang akan kamu buat di bootcamp ini.</p>
                </div>
                <a href="#calendar" class="text-primary font-bold hover:underline flex items-center gap-2 group">
                    Pilih Kelas Favoritmu <i
                        class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-premium hover:shadow-hover hover-lift transition-all group">
                    <div class="aspect-video bg-primary/5 flex items-center justify-center p-8">
                        <i class="fas fa-gamepad text-6xl text-primary opacity-20 project-card-icon"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary text-[10px] font-bold rounded-full uppercase">Scratch</span>
                            <span
                                class="px-3 py-1 bg-slate-100 text-slate-400 text-[10px] font-bold rounded-full uppercase">Game
                                Dev</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2">Scratch Game: Quest Ketupat</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">Game arcade interaktif dengan logika
                            bercabang
                            dan sistem skor dinamis.</p>
                    </div>
                </div>
                <!-- Project 2 -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-premium hover:shadow-hover hover-lift transition-all group">
                    <div class="aspect-video bg-secondary/5 flex items-center justify-center p-8">
                        <i class="fas fa-qrcode text-6xl text-secondary opacity-20 project-card-icon"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="px-3 py-1 bg-secondary/10 text-secondary text-[10px] font-bold rounded-full uppercase">Python</span>
                            <span
                                class="px-3 py-1 bg-slate-100 text-slate-400 text-[10px] font-bold rounded-full uppercase">Automation</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2">QR Code Generator</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">Aplikasi desktop untuk generate QR Code
                            kustom
                            menggunakan library Python.</p>
                    </div>
                </div>
                <!-- Project 3 -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-premium hover:shadow-hover hover-lift transition-all group">
                    <div class="aspect-video bg-accent/5 flex items-center justify-center p-8">
                        <i class="fas fa-lightbulb text-6xl text-accent opacity-20 project-card-icon"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="px-3 py-1 bg-accent/10 text-accent text-[10px] font-bold rounded-full uppercase">IoT</span>
                            <span
                                class="px-3 py-1 bg-slate-100 text-slate-400 text-[10px] font-bold rounded-full uppercase">Hardware</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2">IoT RGB LED Controller</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">Sistem kontrol lampu cerdas berbasis web
                            dashboard interaktif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 8: Mentor Section -->
    <section id="mentors" class="py-24 bg-slate-50 relative overflow-hidden reveal">
        <!-- Background Decoration -->
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-40">
            <div class="absolute top-[10%] left-[-5%] w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[10%] right-[-5%] w-64 h-64 bg-secondary/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="uppercase tracking-widest text-xs font-bold text-primary mb-3 block">MENTOR
                    PRACTITIONER</span>
                <h2 class="text-3xl md:text-5xl font-poppins font-bold text-darkText mb-6 tracking-tight">
                    Belajar Bersama IT Expert <br class="hidden md:block"> dari Alhazen Academy
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto mb-10 text-lg leading-relaxed">
                    Program Mini Bootcamp ini dibimbing langsung oleh para praktisi teknologi yang berpengalaman di
                    bidang coding, IoT, animasi, dan digital productivity.
                </p>

                <!-- Trust Indicators -->
                <div class="flex flex-wrap justify-center gap-6 md:gap-12">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                            <i class="fas fa-users-check text-sm"></i>
                        </div>
                        <span class="text-sm font-bold text-slate-600">8+ IT Experts</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                            <i class="fas fa-lightbulb-on text-sm"></i>
                        </div>
                        <span class="text-sm font-bold text-slate-600">Project Based Mentor</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center text-accent">
                            <i class="fas fa-hand-holding-seedling text-sm"></i>
                        </div>
                        <span class="text-sm font-bold text-slate-600">Hands-on Learning</span>
                    </div>
                </div>
            </div>

            <!-- Mentor Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Mentor 1 -->
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium hover:shadow-hover transition-all duration-300 hover:translate-y-[-6px] group text-center flex flex-col items-center">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
                            <img src="https://ui-avatars.com/api/?name=Brilian+Faqih&background=random&color=fff"
                                alt="Brilian Faqih" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">IT
                        Expert</span>
                    <h4 class="text-xl font-bold mb-1 text-darkText">Brilian Faqih</h4>
                    <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">Scratch Programming Expert
                    </p>
                    <p class="text-slate-400 text-sm leading-relaxed">Mentor yang berpengalaman dalam mengajarkan dasar
                        pemrograman menggunakan Scratch melalui pendekatan project-based learning.</p>
                </div>

                <!-- Mentor 2 -->
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium hover:shadow-hover transition-all duration-300 hover:translate-y-[-6px] group text-center flex flex-col items-center">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
                            <img src="https://ui-avatars.com/api/?name=Muhammad+Agung+Pratama+Tresna&background=random&color=fff"
                                alt="Muhammad Agung Pratama Tresna" class="w-full h-full object-cover"
                                loading="lazy">
                        </div>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">IT
                        Expert</span>
                    <h4 class="text-xl font-bold mb-1 text-darkText">M. Agung Pratama T.</h4>
                    <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">Python Programming Expert
                    </p>
                    <p class="text-slate-400 text-sm leading-relaxed">Spesialis Python Programming yang fokus pada
                        automation project dan pengembangan aplikasi sederhana untuk pemula.</p>
                </div>

                <!-- Mentor 3 -->
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium hover:shadow-hover transition-all duration-300 hover:translate-y-[-6px] group text-center flex flex-col items-center">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
                            <img src="https://ui-avatars.com/api/?name=Cita+Purnamaning+Pertiwi&background=random&color=fff"
                                alt="Cita Purnamaning Pertiwi" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">IT
                        Expert</span>
                    <h4 class="text-xl font-bold mb-1 text-darkText">Cita Purnamaning P.</h4>
                    <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">3D Animation Expert</p>
                    <p class="text-slate-400 text-sm leading-relaxed">Mentor kreatif yang berpengalaman dalam pembuatan
                        animasi 3D serta desain ruang digital menggunakan pendekatan praktis.</p>
                </div>

                <!-- Mentor 4 -->
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium hover:shadow-hover transition-all duration-300 hover:translate-y-[-6px] group text-center flex flex-col items-center">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
                            <img src="https://ui-avatars.com/api/?name=Refina+Aninda+Legia&background=random&color=fff"
                                alt="Refina Aninda Legia" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">IT
                        Expert</span>
                    <h4 class="text-xl font-bold mb-1 text-darkText">Refina Aninda Legia</h4>
                    <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">IoT Technology Expert</p>
                    <p class="text-slate-400 text-sm leading-relaxed">Berpengalaman dalam pengembangan perangkat pintar
                        berbasis sensor dan project Internet of Things.</p>
                </div>

                <!-- Mentor 5 -->
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium hover:shadow-hover transition-all duration-300 hover:translate-y-[-6px] group text-center flex flex-col items-center">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
                            <img src="https://ui-avatars.com/api/?name=Tasya+Rahmatika+Nadrah&background=random&color=fff"
                                alt="Tasya Rahmatika Nadrah" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">IT
                        Expert</span>
                    <h4 class="text-xl font-bold mb-1 text-darkText">Tasya Rahmatika N.</h4>
                    <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">Digital Productivity Expert
                    </p>
                    <p class="text-slate-400 text-sm leading-relaxed">Mentor yang fokus pada peningkatan skill digital
                        menggunakan Microsoft Productivity Tools untuk dunia kerja.</p>
                </div>

                <!-- Mentor 6 -->
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium hover:shadow-hover transition-all duration-300 hover:translate-y-[-6px] group text-center flex flex-col items-center">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
                            <img src="https://ui-avatars.com/api/?name=Salamah+Nur+Aqidah&background=random&color=fff"
                                alt="Salamah Nur Aqidah" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">IT
                        Expert</span>
                    <h4 class="text-xl font-bold mb-1 text-darkText">Salamah Nur Aqidah</h4>
                    <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">Python Programming Expert
                    </p>
                    <p class="text-slate-400 text-sm leading-relaxed">Berpengalaman dalam mengajarkan logika
                        pemrograman Python melalui berbagai project praktis.</p>
                </div>

                <!-- Mentor 7 -->
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium hover:shadow-hover transition-all duration-300 hover:translate-y-[-6px] group text-center flex flex-col items-center">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
                            <img src="https://ui-avatars.com/api/?name=Cut+Nurul+Faizah&background=random&color=fff"
                                alt="Cut Nurul Faizah" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">IT
                        Expert</span>
                    <h4 class="text-xl font-bold mb-1 text-darkText">Cut Nurul Faizah</h4>
                    <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">IoT Hardware Expert</p>
                    <p class="text-slate-400 text-sm leading-relaxed">Mentor yang fokus pada pengembangan perangkat IoT
                        berbasis sensor dan smart device project.</p>
                </div>

                <!-- Mentor 8 -->
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium hover:shadow-hover transition-all duration-300 hover:translate-y-[-6px] group text-center flex flex-col items-center">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
                            <img src="https://ui-avatars.com/api/?name=Ananta&background=random&color=fff"
                                alt="Ananta" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">IT
                        Expert</span>
                    <h4 class="text-xl font-bold mb-1 text-darkText">Ananta</h4>
                    <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">Creative Coding Expert</p>
                    <p class="text-slate-400 text-sm leading-relaxed">Mentor creative coding yang membantu peserta
                        memahami konsep pemrograman melalui animasi dan project interaktif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Pricing -->
    <section class="py-24 bg-primary relative overflow-hidden reveal">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
            <div class="absolute top-[-20%] left-[-10%] w-[50%] h-[50%] border-[40px] border-white rounded-full"></div>
            <div class="absolute bottom-[-20%] right-[-10%] w-[50%] h-[50%] border-[40px] border-white rounded-full">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white relative z-10">
            <h2 class="text-3xl font-poppins font-bold mb-4">Harga Mini Bootcamp</h2>
            <div class="flex flex-col items-center justify-center gap-2 mb-8">
                <span class="text-6xl md:text-8xl font-poppins font-black">Rp29.000</span>
                <span
                    class="px-6 py-2 bg-white/20 backdrop-blur-md rounded-full text-sm font-bold border border-white/30 uppercase tracking-widest">PER
                    KELAS</span>
            </div>
            <p class="text-xl opacity-90 max-w-xl mx-auto font-medium">Investasi terjangkau untuk masa depan digitalmu.
                Setiap kelas menghasilkan <span class="font-bold underline italic">1 project nyata</span>.</p>
        </div>
    </section>

    <!-- Section 10: FAQ -->
    <section id="faq" class="py-24 bg-white reveal">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-poppins font-bold text-darkText mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-500">Punya pertanyaan? Mungkin jawabanmu ada di sini.</p>
            </div>

            <div class="space-y-4">
                <details
                    class="group bg-slate-50 rounded-2xl border border-slate-100 open:bg-white open:ring-4 open:ring-primary/5 transition-all">
                    <summary class="flex justify-between items-center p-6 cursor-pointer outline-none">
                        <span class="font-bold text-darkText">Apakah harus punya pengalaman coding?</span>
                        <div
                            class="w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform">
                            <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 leading-relaxed text-sm">
                        Tidak sama sekali! Mini bootcamp ini dirancang khusus untuk pemula. Kami akan membimbingmu dari
                        nol hingga project jadi.
                    </div>
                </details>

                <details
                    class="group bg-slate-50 rounded-2xl border border-slate-100 open:bg-white open:ring-4 open:ring-primary/5 transition-all">
                    <summary class="flex justify-between items-center p-6 cursor-pointer outline-none">
                        <span class="font-bold text-darkText">Apakah peserta boleh ikut lebih dari satu kelas?</span>
                        <div
                            class="w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform">
                            <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 leading-relaxed text-sm">
                        Sangat boleh! Kamu bisa memilih beberapa jadwal yang berbeda selama waktunya tidak bentrok.
                    </div>
                </details>

                <details
                    class="group bg-slate-50 rounded-2xl border border-slate-100 open:bg-white open:ring-4 open:ring-primary/5 transition-all">
                    <summary class="flex justify-between items-center p-6 cursor-pointer outline-none">
                        <span class="font-bold text-darkText">Apakah kelas dilakukan online?</span>
                        <div
                            class="w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform">
                            <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 leading-relaxed text-sm">
                        Ya, kelas dilakukan secara online via Zoom/GMeet dengan panduan interaktif dari mentor.
                    </div>
                </details>

                <details
                    class="group bg-slate-50 rounded-2xl border border-slate-100 open:bg-white open:ring-4 open:ring-primary/5 transition-all">
                    <summary class="flex justify-between items-center p-6 cursor-pointer outline-none">
                        <span class="font-bold text-darkText">Apakah mendapatkan sertifikat?</span>
                        <div
                            class="w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform">
                            <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 leading-relaxed text-sm">
                        Tentu! Setiap penyelesaian project di satu sesi kelas akan mendapatkan E-Certificate resmi dari
                        Alhazen.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- Section 11: Final CTA -->
    <section class="py-24 bg-white relative reveal">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-darkText rounded-[3rem] p-10 md:p-20 text-center relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full -mr-32 -mt-32 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/10 rounded-full -ml-32 -mb-32 blur-3xl">
                </div>

                <h2 class="text-4xl md:text-5xl font-poppins font-bold text-white mb-6 relative z-10">Mulai Belajar
                    Teknologi Hari Ini</h2>
                <p class="text-slate-400 mb-10 text-lg max-w-xl mx-auto relative z-10">Jangan lewatkan kesempatan emas
                    untuk memiliki portfolio project pertamamu di tahun 2026.</p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="#calendar"
                        class="w-full sm:w-auto px-10 py-4 bg-primary text-white rounded-full font-bold shadow-xl shadow-primary/20 hover:scale-105 transition-transform">Lihat
                        Jadwal</a>
                    <a href="#calendar"
                        class="w-full sm:w-auto px-10 py-4 bg-white text-darkText rounded-full font-bold hover:bg-slate-50 transition-colors">Daftar
                        Sekarang</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Floating Action Buttons -->
    <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50">
        <!-- WhatsApp Admin -->
        <a href="https://wa.me/6281390000332?text=Halo%20Admin%20Alhazen%20Academy%2C%20saya%20tertarik%20mengikuti%20Mini%20Bootcamp%20One%20Day%20One%20Project.%20Bisa%20minta%20informasi%20lebih%20lanjut%3F"
            target="_blank"
            class="w-12 h-12 md:w-14 md:h-14 bg-green-500 text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition-all duration-200 group relative"
            title="Tanya Admin">
            <i class="fab fa-whatsapp text-2xl md:text-3xl"></i>
            <span
                class="absolute right-full mr-3 px-3 py-1 bg-darkText text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">Tanya
                Admin</span>
        </a>
        <!-- Daftar Kelas -->
        <a href="#calendar"
            class="bg-primary text-white px-5 py-3 md:px-6 md:py-3.5 rounded-full shadow-lg font-bold text-sm md:text-base hover:scale-105 transition-all duration-200 flex items-center gap-2">
            <i class="fas fa-calendar-check"></i>
            Daftar Kelas
        </a>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- DATA ---
            const events = [
                // 28 March
                {
                    date: '2026-03-28',
                    title: 'Scratch Game Bootcamp',
                    category: 'SD',
                    target: 'SD – SMP',
                    project: 'Game Tangkap Ketupat',
                    time: '09.30 – 11.15',
                    price: 'Rp29.000'
                },
                {
                    date: '2026-03-28',
                    title: 'Python Basic Bootcamp',
                    category: 'SMA',
                    target: 'SMA',
                    project: 'QR Code Generator',
                    time: '09.30 – 11.15',
                    price: 'Rp29.000'
                },

                // 7 April
                {
                    date: '2026-04-07',
                    title: '3D Animation Bootcamp',
                    category: 'SMP',
                    target: 'SMP',
                    project: 'Dining Room',
                    time: 'Sore / Malam',
                    price: 'Rp29.000'
                },

                // 9 April
                {
                    date: '2026-04-09',
                    title: 'IoT Bootcamp',
                    category: 'SMP',
                    target: 'SMP',
                    project: 'RGB LED',
                    time: 'Sore / Malam',
                    price: 'Rp29.000'
                },

                // 11 April
                {
                    date: '2026-04-11',
                    title: 'Scratch Animation Bootcamp',
                    category: 'SD',
                    target: 'SD',
                    project: 'Animasi Kartun Lebaran',
                    time: '09.30 – 11.15',
                    price: 'Rp29.000'
                },
                {
                    date: '2026-04-11',
                    title: 'Python Automation Bootcamp',
                    category: 'SMA',
                    target: 'SMA',
                    project: 'Password Generator',
                    time: '09.30 – 11.15',
                    price: 'Rp29.000'
                },

                // 13 April
                {
                    date: '2026-04-13',
                    title: '3D Animation Bootcamp',
                    category: 'SD',
                    target: 'SD',
                    project: 'Bedroom',
                    time: 'Sore / Malam',
                    price: 'Rp29.000'
                },

                // 15 April
                {
                    date: '2026-04-15',
                    title: 'Microsoft Mastery Class',
                    category: 'Mahasiswa',
                    target: 'Mahasiswa / Pencari Kerja',
                    project: 'Productivity Tools',
                    time: 'Sore / Malam',
                    price: 'Rp29.000'
                },

                // 18 April
                {
                    date: '2026-04-18',
                    title: 'Scratch Game Bootcamp',
                    category: 'SD',
                    target: 'SD',
                    project: 'Game Balap Mobil',
                    time: '09.30 – 11.15',
                    price: 'Rp29.000'
                },
                {
                    date: '2026-04-18',
                    title: 'Python Logic Bootcamp',
                    category: 'SMA',
                    target: 'SMA',
                    project: 'Kalkulator Python',
                    time: '09.30 – 11.15',
                    price: 'Rp29.000'
                },

                // 21 April
                {
                    date: '2026-04-21',
                    title: 'IoT Bootcamp',
                    category: 'SD',
                    target: 'SD',
                    project: 'Motion Detector with PIR Sensor',
                    time: 'Sore / Malam',
                    price: 'Rp29.000'
                },

                // 23 April
                {
                    date: '2026-04-23',
                    title: 'Microsoft Mastery Class',
                    category: 'Mahasiswa',
                    target: 'Mahasiswa / Pencari Kerja',
                    project: 'Productivity Tools',
                    time: 'Sore / Malam',
                    price: 'Rp29.000'
                },

                // 25 April
                {
                    date: '2026-04-25',
                    title: 'Scratch Story Bootcamp',
                    category: 'SD',
                    target: 'SD',
                    project: 'Animasi Cerita Interaktif',
                    time: '09.30 – 11.15',
                    price: 'Rp29.000'
                },
                {
                    date: '2026-04-25',
                    title: 'Python Project Bootcamp',
                    category: 'SMA',
                    target: 'SMA',
                    project: 'Random Name Picker',
                    time: '09.30 – 11.15',
                    price: 'Rp29.000'
                }
            ];

            let currentFilter = 'all';
            let currentMonth = 2; // March (0-indexed)
            let currentYear = 2026;

            // --- ELEMENTS ---
            const calendarGrid = document.getElementById('calendar-grid');
            const monthYearLabel = document.getElementById('current-month');
            const prevMonthBtn = document.getElementById('prev-month');
            const nextMonthBtn = document.getElementById('next-month');
            const filterBtns = document.querySelectorAll('.filter-btn');

            // Panel States
            const emptyState = document.getElementById('empty-day-state');
            const eventListState = document.getElementById('event-list-state');

            // Detail View Elements (Inside eventListState)
            const dayNameEl = document.getElementById('selected-day-name');
            const dayNumEl = document.getElementById('selected-day-num');
            const eventTitleEl = document.getElementById('selected-event-title');
            const eventCatEl = document.getElementById('selected-event-category');
            const eventProjEl = document.getElementById('selected-event-project');
            const eventTimeEl = document.getElementById('selected-event-time');
            const eventPriceEl = document.getElementById('selected-event-price');

            const bookBtn = document.getElementById('book-btn');
            let selectedEventData = null;
            let countdownInterval = null;

            // Coming Soon Popup Elements
            const comingSoonPopup = document.getElementById('coming-soon-popup');
            const popupContent = document.getElementById('popup-content');
            const popupClose = document.getElementById('close-popup');
            const popupOverlay = document.getElementById('popup-overlay');

            // --- FUNCTIONS ---

            // Countdown Timer Logic
            function startCountdown(targetDateStr, elementId, containerId = null) {
                if (countdownInterval) clearInterval(countdownInterval);

                const targetDate = new Date(`${targetDateStr}T00:00:00`).getTime();
                const displayEl = document.getElementById(elementId);
                const containerEl = containerId ? document.getElementById(containerId) : null;

                function updateTimer() {
                    const now = new Date().getTime();
                    const distance = targetDate - now;

                    if (distance < 0) {
                        if (containerEl) containerEl.classList.add('hidden');
                        if (displayEl) displayEl.innerHTML = "PENDAFTARAN DITUTUP";
                        clearInterval(countdownInterval);
                        return;
                    }

                    if (containerEl) containerEl.classList.remove('hidden');

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if (displayEl) {
                        displayEl.innerHTML =
                            `${String(days).padStart(2, '0')} Hari : ${String(hours).padStart(2, '0')} Jam : ${String(minutes).padStart(2, '0')} Menit : ${String(seconds).padStart(2, '0')} Detik`;
                    }
                }

                updateTimer();
                countdownInterval = setInterval(updateTimer, 1000);
            }

            // Scroll Reveal Logic
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

            function renderCalendar() {
                calendarGrid.innerHTML = '';
                const firstDay = new Date(currentYear, currentMonth, 1).getDay();
                const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

                const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
                    "September", "Oktober", "November", "Desember"
                ];
                monthYearLabel.textContent = `${monthNames[currentMonth]} ${currentYear}`;

                // Empty slots
                for (let i = 0; i < firstDay; i++) {
                    const emptyDiv = document.createElement('div');
                    calendarGrid.appendChild(emptyDiv);
                }

                // Days
                for (let day = 1; day <= daysInMonth; day++) {
                    const dateStr =
                        `${currentYear}-${String(currentMonth + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                    const dayEl = document.createElement('div');
                    dayEl.classList.add('calendar-day');
                    dayEl.textContent = day;

                    const dayEvents = events.filter(e => e.date === dateStr);
                    const filteredDayEvents = currentFilter === 'all' ?
                        dayEvents :
                        dayEvents.filter(e => e.category === currentFilter);

                    dayEl.innerHTML = `<span>${day}</span>`;

                    if (filteredDayEvents.length > 0) {
                        dayEl.classList.add('has-event');
                        dayEl.setAttribute('title', 'Mini Bootcamp Available');

                        // Special highlight for March 28
                        if (dateStr === '2026-03-28') {
                            dayEl.classList.add('open-registration');
                        }

                        // Indicator Container
                        const indicatorContainer = document.createElement('div');
                        indicatorContainer.className = 'flex flex-col items-center gap-0.5 mt-1';

                        if (dateStr === '2026-03-28') {
                            // Open Badge
                            const openBadge = document.createElement('div');
                            openBadge.className = 'open-badge';
                            openBadge.textContent = 'OPEN';
                            indicatorContainer.appendChild(openBadge);
                        } else {
                            // Dot
                            const dot = document.createElement('div');
                            dot.className = 'event-dot w-2.5 h-2.5 rounded-full bg-primary';
                            indicatorContainer.appendChild(dot);

                            // Mobile Badge
                            const badge = document.createElement('div');
                            badge.className = 'mobile-badge';
                            badge.textContent = 'Bootcamp';
                            indicatorContainer.appendChild(badge);
                        }

                        dayEl.appendChild(indicatorContainer);

                        dayEl.addEventListener('click', () => selectDay(day, filteredDayEvents));
                    } else {
                        dayEl.addEventListener('click', () => {
                            document.querySelectorAll('.calendar-day').forEach(d => d.classList.remove(
                                'calendar-active'));
                            dayEl.classList.add('calendar-active');
                            showEmpty();
                        });
                    }

                    calendarGrid.appendChild(dayEl);
                }
            }

            function selectDay(day, dayEvents) {
                // Highlight active day
                document.querySelectorAll('.calendar-day').forEach(d => d.classList.remove('calendar-active'));
                const days = calendarGrid.querySelectorAll('.calendar-day');
                for (let el of days) {
                    if (el.textContent.includes(day)) {
                        el.classList.add('calendar-active');
                        break;
                    }
                }

                if (dayEvents.length > 1) {
                    showEventList(day, dayEvents);
                } else {
                    showEventDetail(day, dayEvents[0]);
                }
            }

            function showEventList(day, dayEvents) {
                emptyState.classList.add('hidden');
                eventListState.classList.remove('hidden');

                // Show List Header
                const monthNamesShort = ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGU', 'SEP', 'OKT',
                    'NOV', 'DES'
                ];
                dayNameEl.textContent = monthNamesShort[currentMonth];
                dayNumEl.textContent = day;

                eventTitleEl.textContent = "Pilih Kelas";
                eventCatEl.textContent = `${dayEvents.length} Program Tersedia`;

                // Replace main content with a list
                const detailContainer = eventListState.querySelector('.space-y-6.mb-8');
                detailContainer.innerHTML = '';

                dayEvents.forEach(event => {
                    const isOpen = event.date === '2026-03-28';
                    const statusLabel = isOpen ?
                        '<span class="bg-green-100 text-green-600 text-[10px] font-bold px-2 py-1 rounded-full">OPEN REGISTRATION</span>' :
                        '<span class="bg-slate-100 text-slate-500 text-[10px] font-bold px-2 py-1 rounded-full">COMING SOON</span>';

                    const item = document.createElement('div');
                    item.className =
                        'p-4 rounded-2xl bg-slate-50 border border-slate-100 cursor-pointer hover:border-primary/30 hover:bg-white transition-all group';
                    item.innerHTML = `
                <div class="flex items-start justify-between gap-4 mb-1">
                    <h5 class="font-bold text-darkText group-hover:text-primary transition-colors leading-tight">${event.title}</h5>
                    <div class="shrink-0">${statusLabel}</div>
                </div>
                <p class="text-xs text-slate-400 font-medium">${event.project}</p>
            `;
                    item.addEventListener('click', () => showEventDetail(day, event, dayEvents));
                    detailContainer.appendChild(item);
                });

                bookBtn.classList.add('hidden');
            }

            function showEventDetail(day, event, dayEvents = []) {
                emptyState.classList.add('hidden');
                eventListState.classList.remove('hidden');
                bookBtn.classList.remove('hidden');

                selectedEventData = event; // Store current event

                const dateObj = new Date(event.date);
                const dayNames = ['MIN', 'SEN', 'SEL', 'RAB', 'KAM', 'JUM', 'SAB'];
                dayNameEl.textContent = dayNames[dateObj.getDay()];
                dayNumEl.textContent = day;

                const isOpen = event.date === '2026-03-28';
                const statusLabel = isOpen ?
                    '<span class="bg-green-100 text-green-600 text-[10px] font-bold px-2 py-1 rounded-full mb-3 inline-block">OPEN REGISTRATION</span>' :
                    '<span class="bg-slate-100 text-slate-500 text-[10px] font-bold px-2 py-1 rounded-full mb-3 inline-block">COMING SOON</span>';

                eventTitleEl.innerHTML = `${statusLabel}<br>${event.title}`;
                eventCatEl.textContent = event.target;

                const detailContainer = eventListState.querySelector('.space-y-6.mb-8');

                let content = '';
                if (dayEvents.length > 1) {
                    content += `
                <button id="back-to-list" class="flex items-center gap-2 text-primary text-xs font-bold mb-6 hover:translate-x-[-4px] transition-all cursor-pointer">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar Kelas
                </button>
            `;
                }

                // Add Countdown if OPEN
                if (isOpen) {
                    content += `
                <div class="bg-primary/5 rounded-2xl p-4 border border-primary/10 mb-6">
                    <p class="text-[10px] font-bold text-primary uppercase tracking-widest mb-2">Pendaftaran ditutup dalam:</p>
                    <div id="calendar-countdown" class="text-sm font-bold text-primary">00 : 00 : 00 : 00</div>
                </div>
            `;
                    setTimeout(() => startCountdown('2026-03-28', 'calendar-countdown'), 0);
                }

                content += `
            <div class="flex items-start gap-4">
                <div class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400"><i class="fas fa-rocket"></i></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">Project</p>
                    <p class="text-sm font-bold text-darkText" id="selected-event-project">${event.project}</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400"><i class="fas fa-clock"></i></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">Waktu</p>
                    <p class="text-sm font-bold text-darkText" id="selected-event-time">${event.time} WIB</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400"><i class="fas fa-tag"></i></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">Harga</p>
                    <div class="flex items-center gap-3">
                        <span class="text-sm text-slate-400 line-through">Rp49.000</span>
                        <span class="text-lg font-bold text-primary">Rp29.000</span>
                        <span class="bg-accent/10 text-accent text-[10px] font-bold px-2 py-1 rounded-full">EARLY BIRD</span>
                    </div>
                </div>
            </div>
        `;

                detailContainer.innerHTML = content;

                const backBtn = document.getElementById('back-to-list');
                if (backBtn) {
                    backBtn.addEventListener('click', () => {
                        showEventList(day, dayEvents);
                    });
                }
            }

            function showEmpty() {
                emptyState.classList.remove('hidden');
                eventListState.classList.add('hidden');
                if (countdownInterval) clearInterval(countdownInterval);
            }

            // Popup logic
            function showComingSoonPopup() {
                comingSoonPopup.classList.remove('invisible', 'opacity-0');
                popupContent.classList.remove('scale-90');
            }

            function closeComingSoonPopup() {
                comingSoonPopup.classList.add('invisible', 'opacity-0');
                popupContent.classList.add('scale-90');
            }

            popupClose.addEventListener('click', closeComingSoonPopup);
            popupOverlay.addEventListener('click', closeComingSoonPopup);

            // Book Button logic
            bookBtn.addEventListener('click', () => {
                if (!selectedEventData) return;

                if (selectedEventData.date === '2026-03-28') {
                    window.open('https://goakal.com/alhazenacademy/mini-bootcamp-2026/8qt2e/apply',
                        '_blank');
                } else {
                    showComingSoonPopup();
                }
            });

            // Filtering
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => {
                        b.classList.remove('active', 'bg-primary', 'text-white',
                            'shadow-lg', 'shadow-primary/20');
                        b.classList.add('bg-white', 'text-slate-500', 'border',
                            'border-slate-200');
                    });
                    btn.classList.add('active', 'bg-primary', 'text-white', 'shadow-lg',
                        'shadow-primary/20');
                    btn.classList.remove('bg-white', 'text-slate-500', 'border-slate-200');

                    currentFilter = btn.dataset.filter;
                    renderCalendar();
                    showEmpty();
                });
            });

            // Navigation
            prevMonthBtn.addEventListener('click', () => {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                renderCalendar();
                showEmpty();
            });

            nextMonthBtn.addEventListener('click', () => {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                renderCalendar();
                showEmpty();
            });

            // Initial load
            renderCalendar();
            startCountdown('2026-03-28', 'hero-countdown', 'hero-countdown-container');
        });
    </script>
</body>

</html>
