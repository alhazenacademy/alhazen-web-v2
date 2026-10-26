<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Webinar — Mendidik Anak di Era AI | Alhazen Academy</title>
    <link rel="icon" href="{{ asset('assets/logo-new.webp') }}" type="image/x-icon">
    <meta name="description"
        content="Formulir absensi webinar Mendidik Anak di Era AI bersama Ustadz dr. Raehanul Bahraen. Konfirmasi kehadiran Anda — rekaman dan benefit dikirim ke email. Sabtu, 31 Oktober 2026 via Zoom.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Absensi Webinar — Mendidik Anak di Era AI | Alhazen Academy">
    <meta property="og:description"
        content="Konfirmasi kehadiran Anda di webinar. Isi absensi singkat: nama, email, dan nomor HP. Sabtu, 31 Oktober 2026 · 09.00–11.00 WIB · Zoom.">
    <meta property="og:image" content="{{ asset('assets/custom/mendidik-anak-ai/banner.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Absensi Webinar — Mendidik Anak di Era AI | Alhazen Academy">
    <meta name="twitter:description"
        content="Konfirmasi kehadiran Anda di webinar. Isi absensi singkat: nama, email, dan nomor HP. Sabtu, 31 Oktober 2026 via Zoom.">
    <meta name="twitter:image" content="{{ asset('assets/custom/mendidik-anak-ai/banner.jpeg') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style type="text/tailwindcss">
        @theme {
    --color-white: #FFFEFE;
    --color-blue-spruce: #0F7D6F;
    --color-azure-mist: #DAECE6;
    --color-watermelon: #F10148;
    --color-graphite: #2E2D2C;
    --color-blue-bell: #009EE6;
}
</style>
    <style>
        :root {
            --white: #FFFEFE;
            --spruce: #0F7D6F;
            --mist: #DAECE6;
            --melon: #F10148;
            --bell: #009EE6
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--mist);
            color: var(--spruce);
            -webkit-font-smoothing: antialiased
        }

        .text-blue-spruce {
            color: var(--spruce)
        }

        .bg-blue-spruce {
            background-color: var(--spruce)
        }

        .text-azure-mist {
            color: var(--mist)
        }

        .bg-azure-mist {
            background-color: var(--mist)
        }

        .text-watermelon {
            color: var(--melon)
        }

        .bg-watermelon {
            background-color: var(--melon)
        }

        .text-blue-bell {
            color: var(--bell)
        }

        .eyebrow {
            letter-spacing: .22em
        }

        .num {
            font-variant-numeric: tabular-nums
        }

        /* ── Claymorphism ── */
        .clay {
            background: var(--white);
            border-radius: 2rem;
            box-shadow:
                8px 8px 20px rgba(15, 125, 111, .14),
                -6px -6px 18px rgba(255, 255, 255, .85),
                inset 1px 1px 2px rgba(255, 255, 255, .9),
                inset -1px -1px 3px rgba(15, 125, 111, .08);
        }

        .clay-pill {
            border-radius: 9999px;
            box-shadow:
                4px 4px 10px rgba(15, 125, 111, .16),
                -3px -3px 8px rgba(255, 255, 255, .9),
                inset 1px 1px 2px rgba(255, 255, 255, .8),
                inset -1px -1px 3px rgba(15, 125, 111, .08);
        }

        .clay-btn {
            border-radius: 9999px;
            box-shadow:
                4px 5px 12px rgba(241, 1, 72, .28),
                -3px -3px 10px rgba(255, 255, 255, .85),
                inset 1px 1px 2px rgba(255, 255, 255, .35),
                inset -1px -1px 3px rgba(15, 125, 111, .15);
        }

        .clay-spruce {
            background: linear-gradient(145deg, #119485, #0c6a5e);
            border-radius: 2rem;
            box-shadow:
                8px 8px 20px rgba(15, 125, 111, .3),
                -6px -6px 18px rgba(255, 255, 255, .35),
                inset 1px 1px 2px rgba(255, 255, 255, .25),
                inset -1px -1px 4px rgba(0, 0, 0, .18);
        }

        .clay-white-sm {
            background: var(--white);
            border-radius: .875rem;
            box-shadow:
                3px 3px 8px rgba(15, 125, 111, .12),
                -2px -2px 6px rgba(255, 255, 255, .85),
                inset 1px 1px 1px rgba(255, 255, 255, .9);
        }

        /* ── Form controls ── */
        .field-input {
            width: 100%;
            background: var(--mist);
            border: 2px solid transparent;
            border-radius: 1rem;
            padding: .8rem 1rem;
            font-size: 15px;
            font-weight: 500;
            color: var(--spruce);
            box-shadow: inset 3px 3px 8px rgba(15, 125, 111, .12), inset -3px -3px 8px rgba(255, 255, 255, .85);
            transition: border-color .2s ease, box-shadow .2s ease;
            outline: none;
        }

        .field-input::placeholder {
            color: rgba(15, 125, 111, .4);
            font-weight: 400;
        }

        .field-input:focus {
            border-color: var(--bell);
            box-shadow: inset 3px 3px 8px rgba(15, 125, 111, .1), inset -3px -3px 8px rgba(255, 255, 255, .8), 0 0 0 4px rgba(0, 158, 230, .15);
        }

        .field-input[aria-invalid="true"] {
            border-color: var(--melon);
            box-shadow: inset 3px 3px 8px rgba(241, 1, 72, .08), inset -3px -3px 8px rgba(255, 255, 255, .8), 0 0 0 4px rgba(241, 1, 72, .12);
        }

        .helper-text {
            display: block;
            margin-top: .5rem;
            font-size: 12px;
            color: rgba(15, 125, 111, .6);
        }

        .helper-text.error {
            color: var(--melon);
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-azure-mist text-blue-spruce selection:bg-azure-mist selection:text-blue-spruce min-h-screen flex flex-col">

    <!-- TOP BAR -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/88 backdrop-blur-md border-b border-blue-spruce/10">
        <div class="max-w-5xl mx-auto px-5 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 shrink-0">
                <img src="{{ asset('assets/nav-logo-new.webp') }}" alt="Alhazen Academy" class="h-8 object-contain">
            </a>
            <a href="{{ route('event.mendidik-anak-ai') }}"
                class="text-xs font-bold text-blue-spruce bg-white clay-pill px-4 py-2 hover:bg-azure-mist transition-all">
                <i class="fa-solid fa-arrow-left mr-1.5 text-[11px]"></i>Kembali ke info webinar
            </a>
        </div>
    </header>

    <main class="flex-1 pt-16">
        <section class="max-w-5xl mx-auto px-5 py-10 lg:py-16">
            <div class="max-w-xl mx-auto text-center">
                <span
                    class="eyebrow text-[11px] font-bold uppercase text-blue-spruce bg-white/70 clay-pill px-3.5 py-1.5">Formulir
                    Absensi</span>
                <h1 class="mt-5 text-2xl sm:text-3xl font-extrabold tracking-tight text-blue-spruce">Konfirmasi
                    kehadiran Anda.</h1>
                <p class="mt-3 text-[15px] text-blue-spruce/70 leading-relaxed">Sudah mengikuti webinar? Isi absensi
                    singkat di bawah ini. Rekaman, voucher kelas koding, dan buku digital akan dikirimkan ke email
                    terdaftar.</p>
                <div class="mt-5 flex flex-wrap justify-center gap-2 text-[13px] num">
                    <span
                        class="inline-flex items-center gap-1.5 bg-white/75 clay-pill px-3.5 py-1.5 text-blue-spruce/85"><i
                            class="fa-solid fa-calendar-days text-blue-spruce"></i>Sabtu, 31 Oktober 2026</span>
                    <span
                        class="inline-flex items-center gap-1.5 bg-white/75 clay-pill px-3.5 py-1.5 text-blue-spruce/85"><i
                            class="fa-solid fa-clock text-blue-spruce"></i>09.00–11.00 WIB</span>
                    <span
                        class="inline-flex items-center gap-1.5 bg-white/75 clay-pill px-3.5 py-1.5 text-blue-spruce/85"><i
                            class="fa-solid fa-video text-blue-spruce"></i>Zoom</span>
                </div>
            </div>

            <div class="mt-10 max-w-xl mx-auto">
                <!-- FORM CARD -->
                <div id="form-card" class="clay p-7 sm:p-10">
                    <div id="form-alert" hidden
                        class="mb-5 rounded-xl bg-watermelon/10 border border-watermelon/30 text-watermelon text-[13px] font-semibold px-4 py-3"></div>

                    <form id="attendance-form" novalidate>
                        <div class="mb-5">
                            <label for="nama" class="block text-[13px] font-bold text-blue-spruce mb-2">Nama
                                Lengkap</label>
                            <input type="text" id="nama" name="nama" class="field-input" required minlength="3"
                                autocomplete="name" placeholder="Nama lengkap Anda">
                            <small id="nama-helper" class="helper-text">Gunakan nama sesuai data pendaftaran
                                webinar.</small>
                        </div>

                        <div class="mb-5">
                            <label for="email" class="block text-[13px] font-bold text-blue-spruce mb-2">Email
                                Aktif</label>
                            <input type="email" id="email" name="email" class="field-input" required
                                autocomplete="email" placeholder="nama@email.com">
                            <small id="email-helper" class="helper-text">Rekaman & benefit dikirim ke email
                                ini.</small>
                        </div>

                        <div class="mb-6">
                            <label for="hp" class="block text-[13px] font-bold text-blue-spruce mb-2">No.
                                WhatsApp</label>
                            <input type="tel" id="hp" name="no-wa" class="field-input" required
                                pattern="^(0|\+62|62)8[1-9][0-9]{7,11}$"
                                title="Contoh: 08123456789 atau +628123456789" inputmode="numeric"
                                autocomplete="tel" placeholder="08xxxxxxxxxx">
                            <small id="hp-helper" class="helper-text">Format: 08xxxxxxxxxx atau
                                +628xxxxxxxxxx</small>
                        </div>

                        <button type="submit" id="submit-button"
                            class="inline-flex items-center justify-center gap-2 w-full bg-watermelon text-white text-sm font-bold py-3.5 px-6 clay-btn hover:opacity-90 transition-all">
                            <span id="submit-label">Kirim Absensi</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </button>
                        <small id="form-status" role="status" aria-live="polite" class="helper-text text-center"></small>
                    </form>
                </div>

                <!-- SUCCESS CARD -->
                <div id="success-card" hidden class="clay p-7 sm:p-10 text-center">
                    <div
                        class="mx-auto w-16 h-16 rounded-2xl bg-watermelon/10 clay-white-sm flex items-center justify-center">
                        <i class="fa-solid fa-circle-check text-watermelon text-3xl"></i>
                    </div>
                    <h2 class="mt-6 text-2xl font-extrabold tracking-tight text-blue-spruce">Absensi tercatat!
                    </h2>
                    <p class="mt-3 text-sm text-blue-spruce/70 leading-relaxed">Terima kasih, <span id="success-name"
                            class="font-bold text-blue-spruce"></span>. Kehadiran Anda di webinar sudah tercatat.
                        Rekaman webinar, voucher kelas koding, dan buku digital akan dikirimkan ke email yang Anda
                        daftarkan.</p>
                    <div class="mt-6 clay-spruce text-white p-5 text-left text-[13px] leading-relaxed">
                        <p class="eyebrow text-[10px] font-bold uppercase text-azure-mist/80 mb-2">Catatan</p>
                        <p class="text-white/85">Benefit dikirim dalam waktu <span class="font-semibold text-white">3x24
                                jam</span> setelah webinar selesai. Pastikan email yang Anda isi benar dan aktif.</p>
                    </div>
                    <a href="{{ route('event.mendidik-anak-ai') }}"
                        class="mt-7 inline-flex items-center justify-center gap-2 bg-white text-blue-spruce text-sm font-bold py-3 px-6 clay-pill hover:bg-azure-mist transition-all">
                        <i class="fa-solid fa-arrow-left text-xs"></i>Kembali ke halaman webinar
                    </a>
                </div>

                <p class="mt-6 text-center text-xs text-blue-spruce/55">Butuh bantuan? Hubungi <a
                        href="https://wa.me/6281390000332" target="_blank" rel="noopener"
                        class="font-semibold text-blue-bell hover:underline">Admin Alhazen Academy</a>.</p>
            </div>
        </section>
    </main>

    <footer class="bg-blue-spruce text-white">
        <div class="max-w-5xl mx-auto px-5 py-6 text-center text-xs text-white/60">
            © {{ date('Y') }} <span class="font-semibold text-white/80">PT. Alhazen Global Teknologi</span>. All Rights
            Reserved.
        </div>
    </footer>

    <script>
        (function () {
            // URL Web App Google Apps Script yang sudah di-deploy.
            // Panduan: .ai/brief/mendidik-anak-di-era-ai/apps-script.md
            var APPS_SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbxgg4WsXz-cvpUwM_r9h3s9eUGHISZ84htVezW6w60qpGaM0xSVy0xx0995dU9jGxQz/exec';

            var form = document.getElementById('attendance-form');
            var formCard = document.getElementById('form-card');
            var successCard = document.getElementById('success-card');
            var successName = document.getElementById('success-name');
            var alertBox = document.getElementById('form-alert');
            var submitButton = document.getElementById('submit-button');
            var submitLabel = document.getElementById('submit-label');
            var statusText = document.getElementById('form-status');

            var fields = {
                nama: {
                    input: document.getElementById('nama'),
                    helper: document.getElementById('nama-helper'),
                    def: 'Gunakan nama sesuai data pendaftaran webinar.',
                    err: 'Nama minimal 3 karakter.'
                },
                email: {
                    input: document.getElementById('email'),
                    helper: document.getElementById('email-helper'),
                    def: 'Rekaman & benefit dikirim ke email ini.',
                    err: 'Format email tidak valid.'
                },
                hp: {
                    input: document.getElementById('hp'),
                    helper: document.getElementById('hp-helper'),
                    def: 'Format: 08xxxxxxxxxx atau +628xxxxxxxxxx',
                    err: 'Nomor HP tidak valid. Contoh: 08123456789'
                }
            };

            Object.keys(fields).forEach(function (key) {
                var f = fields[key];

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

            function showAlert(message) {
                alertBox.textContent = message;
                alertBox.hidden = false;
            }

            function setLoading(isLoading) {
                submitButton.disabled = isLoading;
                submitButton.setAttribute('aria-busy', String(isLoading));
                submitLabel.textContent = isLoading ? 'Mengirim...' : 'Kirim Absensi';
                statusText.textContent = isLoading ? 'Mohon tunggu, sedang menyimpan data...' : '';
            }

            form.addEventListener('submit', async function (event) {
                event.preventDefault();
                alertBox.hidden = true;

                if (APPS_SCRIPT_URL === 'GANTI_DENGAN_URL_WEB_APP_ANDA') {
                    showAlert('Formulir belum aktif. Silakan coba lagi beberapa saat lagi atau hubungi admin.');
                    return;
                }

                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }

                var payload = {
                    'nama': fields.nama.input.value.trim(),
                    'email': fields.email.input.value.trim(),
                    'no-wa': fields.hp.input.value.trim()
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
                        // Apps Script kadang mengembalikan teks; anggap sukses jika tidak error
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
                    console.error('[absensi] Gagal kirim:', err);
                    showAlert('Absensi gagal terkirim. Silakan coba lagi atau hubungi admin Alhazen Academy.');
                    setLoading(false);
                }
            });
        })();
    </script>

</body>

</html>
