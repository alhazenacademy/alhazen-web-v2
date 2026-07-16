<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alhazen Academy</title>

    <link rel="icon" type="image/x-icon" href="{{asset('assets/logo-new.webp')}}">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background: #137E73;
        }

        .link-card {
            background: #F8F3ED;
            border: 3px solid #000;
            box-shadow: 0 5px 0 #000;
            transition: .25s;
        }

        .link-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 0 #000;
        }
    </style>
</head>

<body>

    <div class="max-w-xl mx-auto p-5">

        <div class="bg-[#03AE91] rounded-[28px] min-h-screen p-7 py-10">

            <!-- Profile -->

            <div class="mt-10 text-center">

                <div class="w-28 h-28 bg-white rounded-full mx-auto flex items-center justify-center">

                    <img src="{{asset('assets/logo-new.webp')}}" class="w-14">

                </div>

                <h1 class="text-white font-bold text-3xl mt-6">
                    Alhazen Academy
                </h1>

                <p class="text-white text-m mt-2">
                    Empowering the next generation of technologists
                </p>

            </div>

            <!-- ==================== EVENT ==================== -->

            {{-- <div class="flex items-center gap-4 my-8">
                <div class="flex-1 h-px bg-white/20"></div>

                <span
                    class="px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.25em] text-white/90 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    Event
                </span>

                <div class="flex-1 h-px bg-white/20"></div>
            </div>

            <div class="space-y-5">

                <!-- Mini Class -->
                <a href="https://goakal.com/alhazenacademy/mini-class-AI-2026" target="_blank"
                    class="link-card rounded-3xl py-5 flex items-center px-5">

                    <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/gemini/default.svg"
                        alt="Gemini" width="24" height="24" />

                    <div class="flex-1 text-center font-medium text-md">
                        Mini Class Prompt AI
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="https://goakal.com/alhazenacademy/mini-class-AI-2026" title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

            </div> --}}


            <!-- ==================== WEBSITE ==================== -->

            <div class="flex items-center gap-4 my-8">
                <div class="flex-1 h-px bg-white/20"></div>

                <span
                    class="px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.25em] text-white/90 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    Website
                </span>

                <div class="flex-1 h-px bg-white/20"></div>
            </div>

            <div class="space-y-5">

                <a href="https://alhazen.academy/" target="_blank" class="link-card rounded-3xl py-5 flex items-center px-5">

                    <img src="{{asset('assets/logo-new.webp')}}" alt="Homepage" class="h-7" />

                    <div class="flex-1 text-center font-medium text-md">
                        Homepage
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="https://alhazen.academy/" title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

            </div>


            <!-- ==================== HUBUNGI KAMI ==================== -->

            <div class="flex items-center gap-4 my-8">
                <div class="flex-1 h-px bg-white/20"></div>

                <span
                    class="px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.25em] text-white/90 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    Hubungi Kami
                </span>

                <div class="flex-1 h-px bg-white/20"></div>
            </div>

            <div class="space-y-5">

                <a href="https://wa.me/6281390000332?text=Halo%20MinZen%2C%0A%0ASaya%20mendapatkan%20informasi%20dari%20halaman%20Links%20Alhazen%20Academy%20dan%20tertarik%20untuk%20konsultasi%20atau%20daftar%20kelas.%0A%0AMohon%20informasi%20lebih%20lanjut%20ya.%0A%0ATerima%20kasih."
                    target="_blank" class="link-card rounded-3xl py-5 flex items-center px-5">

                    <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/whatsapp/default.svg"
                        alt="WhatsApp" width="24" height="24" />

                    <div class="flex-1 text-center font-medium text-md">
                        WhatsApp
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="https://wa.me/6281390000332?text=Halo%20MinZen%2C%0A%0ASaya%20mendapatkan%20informasi%20dari%20halaman%20Links%20Alhazen%20Academy%20dan%20tertarik%20untuk%20konsultasi%20atau%20daftar%20kelas.%0A%0AMohon%20informasi%20lebih%20lanjut%20ya.%0A%0ATerima%20kasih."
                        title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

                <a href="mailto:info@alhazen.academy" target="_blank" class="link-card rounded-3xl py-5 flex items-center px-5">

                    <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/gmail-2026/default.svg"
                        alt="Gmail (2026)" width="24" height="24" />

                    <div class="flex-1 text-center font-medium text-md">
                        Email
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="info@alhazen.academy" title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

            </div>


            <!-- ==================== SOCIAL MEDIA ==================== -->

            <div class="flex items-center gap-4 my-8">
                <div class="flex-1 h-px bg-white/20"></div>

                <span
                    class="px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.25em] text-white/90 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    Social Media
                </span>

                <div class="flex-1 h-px bg-white/20"></div>
            </div>

            <div class="space-y-5">

                <a href="https://www.instagram.com/alhazenacademy" target="_blank" class="link-card rounded-3xl py-5 flex items-center px-5">

                    <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/instagram/default.svg"
                        alt="Instagram" width="24" height="24" />

                    <div class="flex-1 text-center font-medium text-md">
                        Instagram
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="https://www.instagram.com/alhazenacademy" title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

                <a href="https://www.tiktok.com/@alhazenacademy" target="_blank" class="link-card rounded-3xl py-5 flex items-center px-5">

                    <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/tiktok/light.svg"
                        alt="TikTok" width="24" height="24" />

                    <div class="flex-1 text-center font-medium text-md">
                        TikTok
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="https://www.tiktok.com/@alhazenacademy" title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

                <a href="https://www.threads.com/@alhazenacademy" target="_blank" class="link-card rounded-3xl py-5 flex items-center px-5">

                    <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center">
                        <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/threads/default.svg"
                            alt="Threads" class="w-5 h-5">
                    </div>

                    <div class="flex-1 text-center font-medium text-md">
                        Threads
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="https://www.threads.com/@alhazenacademy" title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

                <a href="https://www.youtube.com/@alhazenacademy" target="_blank" class="link-card rounded-3xl py-5 flex items-center px-5">

                    <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/youtube/default.svg"
                        alt="YouTube" width="24" height="24" />

                    <div class="flex-1 text-center font-medium text-md">
                        YouTube
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="https://www.youtube.com/@alhazenacademy" title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

                <a href="https://x.com/AlhazenAcademy" target="_blank" class="link-card rounded-3xl py-5 flex items-center px-5">

                    <div class="w-8 h-8 rounded-lg bg-black border border-neutral-700 flex items-center justify-center">
                        <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/x/default.svg" alt="X"
                            class="w-5 h-5" style="filter: invert(1);">
                    </div>

                    <div class="flex-1 text-center font-medium text-md">
                        X
                    </div>

                    <button type="button"
                        class="copy-btn w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-200 hover:text-[#03AE91] transition"
                        data-link="https://x.com/AlhazenAcademy" title="Salin Link">

                        <i class="fa-regular fa-copy"></i>

                    </button>

                </a>

            </div>

        </div>

    </div>

    <div id="toast"
        class="fixed bottom-6 left-1/2 -translate-x-1/2 px-5 py-3 rounded-xl bg-black text-white opacity-0 pointer-events-none transition-all duration-300 translate-y-10 z-50">

        Link berhasil disalin

    </div>

    <script>
        const toast = document.getElementById("toast");

            document.querySelectorAll(".copy-btn").forEach(button => {

                button.addEventListener("click", async function (e) {

                    e.preventDefault();
                    e.stopPropagation();

                    const url = this.dataset.link;

                    try {

                        await navigator.clipboard.writeText(url);

                        const icon = this.querySelector("i");

                        icon.classList.replace("fa-copy", "fa-check");
                        icon.classList.replace("fa-regular", "fa-solid");
                        icon.classList.add("text-green-500");

                        toast.classList.remove("opacity-0", "translate-y-10");
                        toast.classList.add("opacity-100", "translate-y-0");

                        clearTimeout(window.toastTimer);

                        window.toastTimer = setTimeout(() => {

                            toast.classList.remove("opacity-100", "translate-y-0");
                            toast.classList.add("opacity-0", "translate-y-10");

                            icon.classList.replace("fa-check", "fa-copy");
                            icon.classList.replace("fa-solid", "fa-regular");
                            icon.classList.remove("text-green-500");

                        }, 1800);

                    } catch (err) {
                        console.error(err);
                    }

                });

            });
    </script>
</body>

</html>
