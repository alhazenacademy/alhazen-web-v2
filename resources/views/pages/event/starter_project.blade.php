<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Program belajar coding beginner friendly untuk pemula total. Mulai dari nol dan bangun starter project pertamamu lewat pembelajaran step-by-step yang mudah dipahami.">
    <title>Starter Project | 1 Jam Belajar Coding, Langsung Jadi Project Pertamamu</title>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alhazenacademy.com/minibotcamp/">
    <meta property="og:title" content="Belajar Coding dari Nol untuk Pemula | Starter Project Coding 2026">
    <meta property="og:description"
        content="Program belajar coding beginner friendly untuk pemula total. Mulai dari nol dan bangun starter project pertamamu lewat pembelajaran step-by-step yang mudah dipahami.">
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

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/custom/starter_project.css')}}">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#14B8A6',
                        secondary: '#2D6DD9',
                        accent: '#FFBC00',
                        background: '#F8FAFC',
                        darkText: '#0F172A',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'premium': '0 10px 30px -5px rgba(0, 0, 0, 0.05), 0 5px 15px -5px rgba(0, 0, 0, 0.04)',
                        'hover': '0 20px 40px -5px rgba(0, 0, 0, 0.1), 0 10px 20px -5px rgba(0, 0, 0, 0.05)',
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-darkText font-sans overflow-x-hidden">

    <!-- Hero Section -->
    <section class="relative min-h-screen pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden flex items-center justify-center">
        <!-- Modern Soft Gradient Background -->
        <div class="absolute inset-0 z-0 bg-background pointer-events-none overflow-hidden">
            <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-[#14B8A6]/20 blur-[120px] rounded-full mix-blend-multiply animate-blob"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-blue-300/20 blur-[120px] rounded-full mix-blend-multiply animate-blob" style="animation-delay: 2s;"></div>
            <div class="absolute top-[20%] right-[10%] w-[30%] h-[30%] bg-purple-300/20 blur-[100px] rounded-full mix-blend-multiply animate-blob" style="animation-delay: 4s;"></div>
            <div class="absolute inset-0 bg-white/40 backdrop-blur-[1px]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-10">

            <!-- Brand Name -->
            <div class="mb-6 flex flex-col items-center justify-center gap-4 opacity-0 animate-fade-in-up">
                <div class="text-sm font-bold tracking-[0.2em] text-[#14B8A6] uppercase bg-teal-50 px-4 py-1 rounded-full border border-teal-100 shadow-sm">
                    Starter Project
                </div>

                <!-- Top Badge Text -->
                <div class="inline-flex flex-wrap justify-center items-center gap-2 px-5 py-2 bg-white/80 backdrop-blur-md border border-white/60 shadow-sm rounded-full text-slate-700 text-xs md:text-sm font-semibold hover:bg-white hover:shadow-md transition-all cursor-default group">
                    <span class="flex h-2 w-2 relative mr-1">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#14B8A6] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#14B8A6]"></span>
                    </span>
                    🔥 STARTER PROJECT CODING UNTUK PEMULA
                    <span class="text-slate-300 mx-1 hidden sm:inline">•</span>
                    <span class="hidden sm:inline">🚀 MULAI DARI NOL</span>
                    <span class="text-slate-300 mx-1 hidden md:inline">•</span>
                    <span class="hidden md:inline">💻 BUILT YOUR FIRST PROJECT</span>
                </div>
            </div>

            <!-- Main Headline -->
            <h1 class="text-4xl md:text-6xl lg:text-[5rem] font-poppins font-extrabold text-darkText leading-[1.15] mb-6 max-w-5xl mx-auto tracking-tight opacity-0 animate-fade-in-up" style="animation-delay: 100ms;">
                1 Jam Belajar Coding, <br class="hidden md:block">
                Langsung Jadi <span class="relative inline-block whitespace-nowrap mt-2 md:mt-0">
                    <span class="relative z-10 text-transparent bg-clip-text bg-gradient-to-r from-[#14B8A6] to-blue-500 drop-shadow-sm">Project Pertamamu</span>
                    <svg class="absolute w-full h-4 -bottom-1 left-0 text-teal-200/60 -z-10" viewBox="0 0 100 10" preserveAspectRatio="none">
                        <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="transparent" stroke-linecap="round"/>
                    </svg>
                </span>
            </h1>

            <!-- Sub Headline -->
            <p class="max-w-2xl mx-auto text-base md:text-lg text-slate-500 mb-4 leading-relaxed opacity-0 animate-fade-in-up" style="animation-delay: 200ms;">
                Platform belajar coding beginner friendly yang dirancang khusus untuk pemula total agar bisa mulai coding dengan cara yang lebih mudah, praktis, dan tidak membingungkan. Belajar langsung lewat starter project pertama kamu.
            </p>

            <!-- Tagline Brand -->
            <p class="text-md md:text-lg text-slate-400 font-semibold tracking-wide mb-10 opacity-0 animate-fade-in-up" style="animation-delay: 300ms;">
                "Build your first project. Start your coding journey."
            </p>

            <!-- Feature Pills / Mini Benefits -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-12 opacity-0 animate-fade-in-up" style="animation-delay: 400ms;">
                <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-white/50 shadow-sm text-sm font-semibold text-slate-600 hover:-translate-y-1 transition-transform">
                    <div class="w-5 h-5 rounded-full bg-teal-100 text-[#14B8A6] flex items-center justify-center text-[10px]">
                        <i class="fas fa-check"></i>
                    </div> Tanpa Pengalaman Coding
                </div>
                <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-white/50 shadow-sm text-sm font-semibold text-slate-600 hover:-translate-y-1 transition-transform">
                    <div class="w-5 h-5 rounded-full bg-teal-100 text-[#14B8A6] flex items-center justify-center text-[10px]">
                        <i class="fas fa-check"></i>
                    </div> Belajar Bertahap
                </div>
                <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-white/50 shadow-sm text-sm font-semibold text-slate-600 hover:-translate-y-1 transition-transform">
                    <div class="w-5 h-5 rounded-full bg-teal-100 text-[#14B8A6] flex items-center justify-center text-[10px]">
                        <i class="fas fa-check"></i>
                    </div> 1 Jam Belajar
                </div>
                <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-white/50 shadow-sm text-sm font-semibold text-slate-600 hover:-translate-y-1 transition-transform">
                    <div class="w-5 h-5 rounded-full bg-teal-100 text-[#14B8A6] flex items-center justify-center text-[10px]">
                        <i class="fas fa-check"></i>
                    </div> Langsung Jadi Project
                </div>
                <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-white/50 shadow-sm text-sm font-semibold text-slate-600 hover:-translate-y-1 transition-transform">
                    <div class="w-5 h-5 rounded-full bg-teal-100 text-[#14B8A6] flex items-center justify-center text-[10px]">
                        <i class="fas fa-check"></i>
                    </div> Ramah Pemula
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-5 mb-16 opacity-0 animate-fade-in-up" style="animation-delay: 500ms;">
                <a href="#calendar" class="relative group w-full sm:w-auto">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#14B8A6] to-blue-400 rounded-full blur opacity-40 group-hover:opacity-75 transition duration-500"></div>
                    <button class="relative w-full sm:w-auto px-8 py-4 bg-[#14B8A6] text-white rounded-full font-bold shadow-[0_10px_30px_-10px_rgba(20,184,166,0.5)] hover:shadow-[0_15px_40px_-10px_rgba(20,184,166,0.6)] hover:-translate-y-1 hover:bg-teal-500 transition-all text-lg flex items-center justify-center gap-3">
                        Mulai Coding Sekarang
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </a>
                <a href="#projects" class="w-full sm:w-auto px-8 py-4 bg-white/90 backdrop-blur-md text-slate-700 border border-slate-200/60 rounded-full font-bold hover:bg-white hover:text-[#14B8A6] hover:border-[#14B8A6]/30 shadow-sm hover:shadow-md transition-all text-lg flex items-center justify-center gap-3 group">
                    <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-teal-50 transition-colors">
                        <i class="fas fa-play text-xs text-slate-500 group-hover:text-[#14B8A6] group-hover:scale-110 transition-transform"></i>
                    </div>
                    Lihat Starter Project
                </a>
            </div>

            <!-- Modern Dashboard Mockup Snippet -->
            <div class="relative max-w-4xl mx-auto opacity-0 animate-fade-in-up hidden md:block" style="animation-delay: 600ms;">
                <div class="absolute -inset-0.5 bg-gradient-to-b from-white/60 to-white/10 rounded-3xl blur-sm"></div>
                <div class="relative bg-white/60 backdrop-blur-xl border border-white/80 shadow-2xl rounded-3xl p-5 overflow-hidden h-auto flex items-start justify-center group hover:-translate-y-2 transition-transform duration-500">
                    <div class="absolute top-4 left-4 flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-[#FF5F56] border border-[#E0443E]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#FFBD2E] border border-[#DEA123]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#27C93F] border border-[#1AAB29]"></div>
                    </div>
                    <div class="w-full h-full bg-[#0F172A] rounded-xl shadow-inner border border-slate-700/50 p-6 font-mono text-sm text-left relative overflow-hidden flex flex-col">
                        <div class="flex items-center gap-2 text-slate-500 mb-3 border-b border-slate-800 pb-2">
                            <i class="fas fa-folder-open text-yellow-500/70"></i> <span>starter-project</span> <span class="mx-2">/</span>
                            <i class="fab fa-js text-yellow-400"></i> <span class="text-slate-300">app.js</span>
                        </div>
                        <div class="text-teal-400 mb-1">// Hello Future Developer!</div>
                        <div class="text-purple-400">function <span class="text-blue-300">startCodingJourney</span>() {</div>
                        <div class="pl-6 text-slate-300">const user = <span class="text-orange-300">"Beginner"</span>;</div>
                        <div class="pl-6 text-slate-300">return <span class="text-orange-300">`Build your first project, ${user}!`</span>;</div>
                        <div class="text-purple-400">}</div>
                        <!-- Blinking cursor -->
                        <div class="absolute bottom-5 left-6 w-2 h-4 bg-teal-400 animate-pulse"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section: Testimoni Peserta -->
    <section id="testimonials" class="py-24 bg-slate-50 relative overflow-hidden reveal">
        <!-- Background Decoration -->
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-40">
            <div class="absolute top-[10%] left-[-5%] w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[10%] right-[-5%] w-64 h-64 bg-secondary/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="uppercase tracking-widest text-xs font-bold text-primary mb-3 block">TESTIMONI
                    PESERTA</span>
                <h2 class="text-3xl md:text-5xl font-poppins font-bold text-darkText mb-6 tracking-tight">
                    Apa Kata Mereka Setelah <br class="hidden md:block"> Mulai Coding?
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg leading-relaxed">
                    Banyak peserta pemula berhasil membuat starter project pertamanya dan mulai percaya diri belajar
                    coding.
                </p>
            </div>

            <!-- Testimonial Container -->
            <div id="testimonial-container"
                class="flex overflow-x-auto gap-6 pb-8 pt-4 px-4 -mx-4 md:px-4 md:mx-0 snap-x snap-mandatory hide-scrollbar"
                style="scroll-behavior: smooth;">
                <!-- Card diinject otomatis menggunakan JavaScript -->
            </div>

        </div>
    </section>

    <!-- Section: Pilih Starter Project Favoritmu -->
    <section id="categories" class="py-12 bg-white reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Pilih Starter Project Favoritmu
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto">Belajar skill digital populer dengan project sederhana.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 max-w-5xl mx-auto">
                <div
                    class="p-4 bg-white border border-slate-100 rounded-2xl shadow-premium hover:shadow-hover transition-all group">
                    <div
                        class="w-10 h-10 mx-auto bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 block mb-1">PROGRAMMING</span>
                    <span class="text-sm font-bold">Scratch Game</span>
                </div>
                <div
                    class="p-4 bg-white border border-slate-100 rounded-2xl shadow-premium hover:shadow-hover transition-all group">
                    <div
                        class="w-10 h-10 mx-auto bg-secondary/10 rounded-lg flex items-center justify-center text-secondary mb-3 group-hover:scale-110 transition-transform">
                        <i class="fab fa-python"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 block mb-1">CODING</span>
                    <span class="text-sm font-bold">Python Automation</span>
                </div>
                <div
                    class="p-4 bg-white border border-slate-100 rounded-2xl shadow-premium hover:shadow-hover transition-all group">
                    <div
                        class="w-10 h-10 mx-auto bg-accent/10 rounded-lg flex items-center justify-center text-accent mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 block mb-1">HARDWARE</span>
                    <span class="text-sm font-bold">IoT Smart Device</span>
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
    </div>
    </section>

    <!-- Transformation Section -->
    <section class="py-20 bg-slate-50 reveal">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Ubah Ketakutan Coding Jadi
                    Karya Nyata</h2>
                <div class="w-20 h-1.5 bg-secondary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                <!-- Before -->
                <div class="p-8 rounded-3xl bg-white border border-red-100 shadow-sm relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-red-50 rounded-bl-[100px] -mr-8 -mt-8 transition-colors">
                    </div>
                    <div
                        class="w-12 h-12 bg-red-100 text-red-500 rounded-xl flex items-center justify-center text-xl mb-6">
                        <i class="fas fa-times"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-slate-800">Sebelum Ikut Program</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-times-circle text-red-400 mt-1"></i>
                            <span class="text-slate-600">Takut belajar coding karena terlihat rumit</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-times-circle text-red-400 mt-1"></i>
                            <span class="text-slate-600">Bingung mulai dari mana untuk pemula</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-times-circle text-red-400 mt-1"></i>
                            <span class="text-slate-600">Tidak percaya diri dengan kemampuan teknis</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-times-circle text-red-400 mt-1"></i>
                            <span class="text-slate-600">Menganggap coding sulit</span>
                        </li>
                    </ul>
                </div>

                <!-- After -->
                <div
                    class="p-8 rounded-3xl bg-white border border-green-100 shadow-premium relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-green-50 rounded-bl-[100px] -mr-8 -mt-8 transition-colors">
                    </div>
                    <div
                        class="w-12 h-12 bg-green-100 text-green-500 rounded-xl flex items-center justify-center text-xl mb-6">
                        <i class="fas fa-check"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-slate-800">Setelah Starter Project</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-slate-600 font-medium">Paham dasar coding dengan mudah</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-slate-600 font-medium">Bisa membuat starter project mandiri</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-slate-600 font-medium">Lebih percaya diri</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-slate-600 font-medium">Tertarik belajar teknologi lebih lanjut</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Section -->
    <section id="why" class="py-24 bg-white reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Kenapa Starter Project Cocok
                    Untuk Pemula?</h2>
                <div class="w-20 h-1.5 bg-primary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div
                    class="p-8 rounded-3xl bg-background border border-slate-100 hover:border-primary/20 hover:shadow-premium transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-2xl text-primary shadow-sm mb-6 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Belajar Lebih Mudah</h3>
                    <p class="text-slate-500 leading-relaxed">Pemula lebih cepat memahami coding ketika langsung praktek
                        membuat sesuatu.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="p-8 rounded-3xl bg-background border border-slate-100 hover:border-primary/20 hover:shadow-premium transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-2xl text-primary shadow-sm mb-6 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Tidak Perlu Pengalaman</h3>
                    <p class="text-slate-500 leading-relaxed">Program dirancang khusus untuk yang belum pernah coding
                        sama sekali.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="p-8 rounded-3xl bg-background border border-slate-100 hover:border-primary/20 hover:shadow-premium transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-2xl text-primary shadow-sm mb-6 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Step-by-Step</h3>
                    <p class="text-slate-500 leading-relaxed">Mentor membimbing dari awal sampai project selesai tanpa
                        terburu-buru.</p>
                </div>
                <!-- Card 4 -->
                <div
                    class="p-8 rounded-3xl bg-background border border-slate-100 hover:border-primary/20 hover:shadow-premium transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-2xl text-primary shadow-sm mb-6 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Ada Hasil Nyata</h3>
                    <p class="text-slate-500 leading-relaxed">Setiap sesi menghasilkan starter project sederhana yang bisa
                        langsung dicoba.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Project Preview -->
    <section id="projects" class="py-24 bg-slate-50 overflow-hidden reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Starter Project untuk Pemula
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto">Visualisasi project sederhana, mudah dipahami, dan seru untuk
                    level beginner.</p>
                <div class="w-20 h-1.5 bg-secondary mx-auto rounded-full mt-4"></div>
            </div>

            <div class="relative">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    <!-- Project 1 -->
                    <div class="relative group">
                        <div
                            class="p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift h-full flex flex-col relative">
                            <div
                                class="absolute top-4 right-4 bg-slate-100 text-slate-500 text-[9px] font-bold px-2 py-1 rounded-md tracking-wider">
                                BEGINNER LEVEL</div>
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-4 project-card-icon mt-2">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Scratch Game</h4>
                            <p class="text-sm text-slate-500 mb-4 italic flex-grow">"Belajar logika dasar pemrograman
                                tanpa ribet coding teks."</p>
                            <div class="text-xs font-bold text-primary bg-primary/5 px-2 py-1 rounded inline-block">
                                Output: Game Tangkap Ketupat</div>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="relative group">
                        <div
                            class="p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift h-full flex flex-col relative">
                            <div
                                class="absolute top-4 right-4 bg-slate-100 text-slate-500 text-[9px] font-bold px-2 py-1 rounded-md tracking-wider">
                                BEGINNER LEVEL</div>
                            <div
                                class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center text-secondary mb-4 project-card-icon mt-2">
                                <i class="fab fa-python"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Python Automation</h4>
                            <p class="text-sm text-slate-500 mb-4 italic flex-grow">"Belajar coding profesional dengan
                                bahasa yang paling populer."</p>
                            <div class="text-xs font-bold text-secondary bg-secondary/5 px-2 py-1 rounded inline-block">
                                Output: QR Code Generator</div>
                        </div>
                    </div>
                    <!-- Project 3 -->
                    <div class="relative group">
                        <div
                            class="p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift h-full flex flex-col relative">
                            <div
                                class="absolute top-4 right-4 bg-slate-100 text-slate-500 text-[9px] font-bold px-2 py-1 rounded-md tracking-wider">
                                BEGINNER LEVEL</div>
                            <div
                                class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent mb-4 project-card-icon mt-2">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">IoT Smart Device</h4>
                            <p class="text-sm text-slate-500 mb-4 italic flex-grow">"Mengenal teknologi hardware dan
                                sensor dunia cerdas."</p>
                            <div class="text-xs font-bold text-accent bg-accent/5 px-2 py-1 rounded inline-block">
                                Output: RGB LED Smart Control</div>
                        </div>
                    </div>
                    <!-- Project 4 -->
                    <div class="relative group">
                        <div
                            class="p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift h-full flex flex-col relative">
                            <div
                                class="absolute top-4 right-4 bg-slate-100 text-slate-500 text-[9px] font-bold px-2 py-1 rounded-md tracking-wider">
                                BEGINNER LEVEL</div>
                            <div
                                class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-orange-500 mb-4 project-card-icon mt-2">
                                <i class="fas fa-cube"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">3D Animation</h4>
                            <p class="text-sm text-slate-500 mb-4 italic flex-grow">"Menuangkan kreativitas dalam bentuk
                                animasi 3D sederhana."</p>
                            <div class="text-xs font-bold text-orange-500 bg-orange-50 px-2 py-1 rounded inline-block">
                                Output: Modern Room Design</div>
                        </div>
                    </div>
                    <!-- Project 5 -->
                    <div class="relative group">
                        <div
                            class="p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all hover-lift h-full flex flex-col relative">
                            <div
                                class="absolute top-4 right-4 bg-slate-100 text-slate-500 text-[9px] font-bold px-2 py-1 rounded-md tracking-wider">
                                BEGINNER LEVEL</div>
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-500 mb-4 project-card-icon mt-2">
                                <i class="fab fa-microsoft"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Digital Productivity</h4>
                            <p class="text-sm text-slate-500 mb-4 italic flex-grow">"Kuasai skill digital fundamental
                                untuk dunia kerja."</p>
                            <div class="text-xs font-bold text-blue-500 bg-blue-50 px-2 py-1 rounded inline-block">
                                Output: Personal Budgeting App</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Bagaimana Cara Belajarnya? -->
    <section class="py-24 bg-white overflow-hidden reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Bagaimana Cara Belajarnya?
                </h2>
                <div class="w-20 h-1.5 bg-primary mx-auto rounded-full"></div>
            </div>

            <div class="relative">
                <!-- Progress Line (Desktop) -->
                <div class="hidden lg:block absolute top-[4.5rem] left-0 w-full h-1 bg-slate-200">
                    <div class="absolute top-0 left-0 h-full bg-primary/30 w-full animate-pulse"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <!-- Step 1 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-primary rounded-full z-10 items-center justify-center text-primary font-bold shadow-premium transition-transform group-hover:scale-125">
                            1</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all text-center">
                            <div
                                class="w-12 h-12 mx-auto bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-4">
                                <i class="fas fa-mouse-pointer"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Pilih Starter Project</h4>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-secondary rounded-full z-10 items-center justify-center text-secondary font-bold shadow-premium transition-transform group-hover:scale-125">
                            2</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all text-center">
                            <div
                                class="w-12 h-12 mx-auto bg-secondary/10 rounded-xl flex items-center justify-center text-secondary mb-4">
                                <i class="fas fa-video"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Join Live Session</h4>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-accent rounded-full z-10 items-center justify-center text-accent font-bold shadow-premium transition-transform group-hover:scale-125">
                            3</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all text-center">
                            <div
                                class="w-12 h-12 mx-auto bg-accent/10 rounded-xl flex items-center justify-center text-accent mb-4">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Ikuti Mentor Step-by-Step</h4>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-orange-500 rounded-full z-10 items-center justify-center text-orange-500 font-bold shadow-premium transition-transform group-hover:scale-125">
                            4</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all text-center">
                            <div
                                class="w-12 h-12 mx-auto bg-orange-100 rounded-xl flex items-center justify-center text-orange-500 mb-4">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Build Project</h4>
                        </div>
                    </div>
                    <!-- Step 5 -->
                    <div class="relative group">
                        <div
                            class="hidden lg:flex absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-white border-4 border-green-500 rounded-full z-10 items-center justify-center text-green-500 font-bold shadow-premium transition-transform group-hover:scale-125">
                            5</div>
                        <div
                            class="mt-8 p-6 bg-white rounded-3xl border border-slate-100 shadow-premium hover:shadow-hover transition-all text-center">
                            <div
                                class="w-12 h-12 mx-auto bg-green-100 rounded-xl flex items-center justify-center text-green-500 mb-4">
                                <i class="fas fa-share-square"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2">Publish Hasil Karyamu</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Program Ini Cocok Untuk -->
    <section id="target" class="py-24 bg-slate-50 relative reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Program Ini Cocok Untuk</h2>
                <p class="text-slate-500 max-w-xl mx-auto mb-4">Belajar sesuai usia dan level kemampuan.</p>
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

    <!-- Section 5: Jadwal Starter Project -->
    <section id="calendar" class="py-24 bg-white reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Pilih Jadwal Belajarmu</h2>
                <p class="text-slate-500 max-w-xl mx-auto">Pilih jadwal starter project yang paling sesuai dengan waktu
                    luangmu.</p>
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
                            detail starter project.</p>
                    </div>

                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hidden"
                        id="event-list-state">
                        <div
                            class="flex items-center gap-5 mb-8 bg-slate-50 border border-slate-100 p-4 md:p-5 rounded-3xl">
                            <div
                                class="w-16 h-16 bg-white border border-slate-100 rounded-2xl flex flex-col items-center justify-center text-primary font-bold leading-none shrink-0 shadow-sm">
                                <span class="text-[10px] uppercase font-bold text-slate-400 mb-1"
                                    id="selected-day-name">MAR</span>
                                <span class="text-2xl text-darkText" id="selected-day-num">28</span>
                            </div>
                            <div class="flex flex-col">
                                <div id="selected-event-badges" class="mb-1.5 flex flex-wrap gap-2"></div>
                                <h4 class="font-bold text-lg md:text-xl leading-tight text-darkText mb-1"
                                    id="selected-event-title">Scratch Game Bootcamp</h4>
                                <span class="text-xs font-semibold text-slate-500 uppercase flex items-center gap-1.5"
                                    id="selected-event-category">
                                    <i class="fas fa-user-graduate text-primary/70"></i> SD - SMP
                                </span>
                            </div>
                        </div>

                        <div class="space-y-4 mb-8 max-h-[360px] overflow-y-auto pr-2" id="event-list-container">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                        Project</p>
                                    <p class="text-sm font-bold text-darkText" id="selected-event-project">Game Tangkap
                                        Ketupat</p>
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
                    <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Hasil Project Starter Project
                    </h2>
                    <p class="text-slate-500">Project sederhana dan menyenangkan yang akan kamu buat langsung di kelas.
                    </p>
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
                        <p class="text-slate-500 text-sm leading-relaxed">Game arcade interaktif dengan logika bercabang
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
                        <p class="text-slate-500 text-sm leading-relaxed">Aplikasi desktop untuk generate QR Code kustom
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
                    Program Starter Project ini dibimbing langsung oleh para praktisi teknologi yang berpengalaman di bidang
                    coding, IoT, animasi, dan digital productivity.
                </p>

                <!-- Trust Indicators -->
                <div class="flex flex-wrap justify-center gap-6 md:gap-12">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
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
            <div id="mentors-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Mentors akan digenerate secara otomatis dari file data.js -->
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
            <h2 class="text-3xl font-poppins font-bold mb-4">Harga Starter Project</h2>
            <div class="flex flex-col items-center justify-center gap-2 mb-8">
                <div class="flex items-center gap-4 justify-center">
                    <span class="text-2xl md:text-4xl font-poppins font-bold opacity-70 line-through">Rp49.000</span>
                    <span
                        class="bg-accent text-darkText text-xs md:text-sm font-bold px-4 py-1.5 rounded-full uppercase tracking-widest shadow-lg">Early
                        Bird</span>
                </div>
                <span class="text-6xl md:text-8xl font-poppins font-black mt-2">Rp29.000</span>
                <span
                    class="px-6 py-2 bg-white/20 backdrop-blur-md rounded-full text-sm font-bold border border-white/30 uppercase tracking-widest mt-2">PER
                    KELAS</span>
            </div>
            <p class="text-xl opacity-90 max-w-xl mx-auto font-medium">Investasi terjangkau untuk masa depan digitalmu.
                Setiap kelas menghasilkan <span class="font-bold underline italic">1 project nyata</span>.</p>
        </div>
    </section>

    <!-- Section: Benefit Tambahan -->
    <section class="py-24 bg-slate-50 reveal">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-poppins font-bold text-darkText mb-4">Apa yang Akan Kamu Dapat?
                </h2>
                <div class="w-20 h-1.5 bg-primary mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                <div class="bg-white p-6 rounded-2xl flex items-center gap-4 shadow-sm border border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex flex-shrink-0 items-center justify-center text-lg">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="font-bold text-slate-700">Starter project siap dicoba</span>
                </div>
                <div class="bg-white p-6 rounded-2xl flex items-center gap-4 shadow-sm border border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex flex-shrink-0 items-center justify-center text-lg">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="font-bold text-slate-700">Skill coding dasar</span>
                </div>
                <div class="bg-white p-6 rounded-2xl flex items-center gap-4 shadow-sm border border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex flex-shrink-0 items-center justify-center text-lg">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="font-bold text-slate-700">Pengalaman belajar interaktif</span>
                </div>
                <div class="bg-white p-6 rounded-2xl flex items-center gap-4 shadow-sm border border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex flex-shrink-0 items-center justify-center text-lg">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="font-bold text-slate-700">Mentor support</span>
                </div>

                <div class="bg-white p-6 rounded-2xl flex items-center gap-4 shadow-sm border border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex flex-shrink-0 items-center justify-center text-lg">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="font-bold text-slate-700">Bisa lanjut ke level berikutnya</span>
                </div>
            </div>
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
                        Tidak sama sekali! Program starter project ini dirancang khusus untuk pemula. Kami akan
                        membimbingmu dari
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
                        <span class="font-bold text-darkText">Apakah kelas ini interaktif dan bisa bertanya ke
                            mentor?</span>
                        <div
                            class="w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform">
                            <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 leading-relaxed text-sm">
                        Sangat interaktif! Selama durasi 1 jam berjalan, kamu bisa langsung bertanya kepada mentor jika
                        menemukan kesulitan saat mencoba projectnya.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- Section 11: Final CTA -->
    <section class="py-24 bg-white relative reveal">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-gradient-to-br from-darkText to-slate-800 rounded-[3rem] p-10 md:p-20 text-center relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full -mr-32 -mt-32 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/20 rounded-full -ml-32 -mb-32 blur-3xl">
                </div>

                <h2 class="text-4xl md:text-5xl font-poppins font-bold text-white mb-6 relative z-10">Mulai Coding Lebih
                    Mudah dari Nol</h2>
                <p class="text-slate-300 mb-10 text-lg max-w-xl mx-auto relative z-10">Tidak perlu takut coding lagi.
                    Mulai dari starter project sederhana dan bangun skill masa depanmu hari ini.</p>

                <div class="flex flex-col items-center justify-center relative z-10">
                    <a href="#calendar"
                        class="px-10 py-4 bg-primary text-white rounded-full font-bold shadow-xl shadow-primary/20 hover:scale-105 transition-transform w-full sm:w-auto flex items-center justify-center gap-2">Mulai
                        Sekarang <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Floating Action Buttons -->
    <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50">
        <!-- WhatsApp Admin -->
        <a href="https://wa.me/6281390000332?text=Halo%20Admin%20Alhazen%20Academy%2C%20saya%20tertarik%20mengikuti%20kelas%20Starter%20Project.%20Bisa%20minta%20informasi%20lebih%20lanjut%3F"
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
    <script src="{{asset('js/custom/starter_project.js')}}"></script>
    <script src="{{asset('js/custom/starter_project_data.js')}}"></script>
</body>

</html>
