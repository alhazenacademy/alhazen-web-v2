<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Hadir Bimtek "AI Bukan Jimat" — Alhazen Academy</title>
    <link rel="icon" href="{{ asset('assets/logo-new.webp') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-page: #f8fafc;
            --bg-card: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --border-focus: #059669;
            --primary: #059669;
            --primary-hover: #047857;
            --primary-light: #ecfdf5;
            --danger: #dc2626;
            --danger-bg: #fef2f2;
            --danger-border: #fecaca;
            --radius-card: 16px;
            --radius-input: 10px;
            --shadow-card: 0 4px 24px -2px rgba(15, 23, 42, 0.06), 0 2px 8px -2px rgba(15, 23, 42, 0.04);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--bg-page);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            width: 100%;
            max-width: 520px;
        }

        .card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-card);
            box-shadow: var(--shadow-card);
            padding: 40px 32px;
        }

        @media (max-width: 480px) {
            .card {
                padding: 28px 20px;
            }
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .logo-wrap {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-wrap img {
            height: 42px;
            width: auto;
            display: block;
        }

        .header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-main);
            letter-spacing: -0.02em;
            margin-bottom: 6px;
        }

        .header p {
            font-size: 0.875rem;
            color: var(--text-muted);
            line-height: 1.4;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-main);
            margin-bottom: 6px;
        }

        .input-control {
            width: 100%;
            padding: 10px 14px;
            font-size: 0.9375rem;
            color: var(--text-main);
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-input);
            transition: border-color 0.15s ease, box-shadow 0.15s ease;
            outline: none;
            font-family: inherit;
        }

        .input-control:hover {
            border-color: #cbd5e1;
        }

        .input-control:focus {
            border-color: var(--border-focus);
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.12);
        }

        .input-control[aria-invalid="true"] {
            border-color: var(--danger);
            background-color: #fffbfa;
        }

        .input-control[aria-invalid="true"]:focus {
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.12);
        }

        .helper-text {
            display: block;
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-top: 5px;
            line-height: 1.4;
        }

        .helper-text.error {
            color: var(--danger);
            font-weight: 500;
        }

        #form-alert {
            margin-bottom: 20px;
            padding: 12px 16px;
            border-radius: var(--radius-input);
            border: 1px solid var(--danger-border);
            background: var(--danger-bg);
            color: var(--danger);
            font-size: 0.875rem;
            line-height: 1.4;
        }

        #form-alert[hidden] {
            display: none;
        }

        .btn-submit {
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            font-size: 0.9375rem;
            font-weight: 600;
            color: #ffffff;
            background-color: var(--primary);
            border: none;
            border-radius: var(--radius-input);
            cursor: pointer;
            transition: background-color 0.15s ease, transform 0.05s ease;
            margin-top: 8px;
            font-family: inherit;
        }

        .btn-submit:hover:not(:disabled) {
            background-color: var(--primary-hover);
        }

        .btn-submit:active:not(:disabled) {
            transform: scale(0.99);
        }

        .btn-submit:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        #form-status {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 0.8125rem;
            color: var(--text-muted);
            min-height: 1.2em;
        }

        .footer-note {
            text-align: center;
            margin-top: 24px;
            font-size: 0.75rem;
            color: #94a3b8;
        }

        /* Modal Dialog */
        dialog {
            border: none;
            border-radius: var(--radius-card);
            padding: 0;
            background: transparent;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            margin: auto;
            max-width: 440px;
            width: calc(100% - 32px);
        }

        dialog::backdrop {
            background: rgba(15, 23, 42, 0.45);
            backdrop-filter: blur(4px);
        }

        .modal-content {
            background: #ffffff;
            padding: 32px 28px;
            text-align: center;
            border-radius: var(--radius-card);
        }

        .modal-icon {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background-color: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }

        .modal-icon svg {
            width: 28px;
            height: 28px;
            stroke-width: 2.25;
        }

        .modal-content h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 8px;
        }

        .modal-content p {
            font-size: 0.875rem;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 24px;
        }

        .modal-btn {
            width: 100%;
            padding: 10px 16px;
            background-color: var(--primary);
            color: #ffffff;
            border: none;
            border-radius: var(--radius-input);
            font-size: 0.875rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.15s ease;
            font-family: inherit;
        }

        .modal-btn:hover {
            background-color: var(--primary-hover);
        }
    </style>
</head>

<body>
    <main class="container">
        <div class="card">
            <header class="header">
                <div class="logo-wrap">
                    <img src="{{ asset('assets/nav-logo-new.webp') }}" alt="Alhazen Academy Logo">
                </div>
                <h1>Daftar Hadir</h1>
                <p>Bimtek "AI Bukan Jimat" — Alhazen Academy untuk Guru Indonesia</p>
            </header>

            <p id="form-alert" hidden></p>

            <form id="attendance-form" novalidate>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="input-control" required minlength="3" autocomplete="name" placeholder="Nama lengkap beserta gelar jika ada">
                    <small class="helper-text">Gunakan nama lengkap dan jelas untuk keperluan sertifikat.</small>
                </div>

                <div class="form-group">
                    <label for="tempat">Tempat Bertugas</label>
                    <input type="text" id="tempat" name="tempat-tugas" class="input-control" required placeholder="Contoh: SDN 1 / SMPN 2 / Instansi">
                </div>

                <div class="form-group">
                    <label for="hp">No. WhatsApp / HP</label>
                    <input type="tel" id="hp" name="no-wa" class="input-control" required pattern="^(0|\+62|62)8[1-9][0-9]{7,11}$"
                        title="Contoh: 08123456789 atau +628123456789" inputmode="numeric" placeholder="08xxxxxxxxxx"
                        autocomplete="tel">
                    <small id="hp-helper" class="helper-text">Format: 08xxxxxxxxxx atau +628xxxxxxxxxx</small>
                </div>

                <div class="form-group">
                    <label for="email">Email Aktif</label>
                    <input type="email" id="email" name="email" class="input-control" required autocomplete="email" placeholder="nama@email.com">
                    <small id="email-helper" class="helper-text">Pastikan email aktif — materi bimtek akan dikirim ke email ini.</small>
                </div>

                <button type="submit" id="submit-button" class="btn-submit">
                    <span>Kirim Kehadiran</span>
                </button>
                <small id="form-status" role="status" aria-live="polite"></small>
            </form>

            <div class="footer-note">
                &copy; {{ date('Y') }} Alhazen Academy. All rights reserved.
            </div>
        </div>

        <dialog id="thanks-modal">
            <div class="modal-content">
                <div class="modal-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <h3>Terima Kasih!</h3>
                <p>Kehadiran Anda telah tercatat. Materi bimtek akan dikirimkan melalui email yang Anda daftarkan.</p>
                <button type="button" class="modal-btn" onclick="closeModal()">Tutup</button>
            </div>
        </dialog>
    </main>

    <script>
    const APPS_SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbxvKELfAbXRC2g2kKakVEWQdzTtT_UOOf79K_iQon05QGZRScKelMau3MSXxM40HJ1G4Q/exec';

    const form = document.getElementById('attendance-form');
    const modal = document.getElementById('thanks-modal');
    const alertBox = document.getElementById('form-alert');
    const submitButton = document.getElementById('submit-button');
    const statusText = document.getElementById('form-status');

    const hpInput = document.getElementById('hp');
    const hpHelper = document.getElementById('hp-helper');
    const emailInput = document.getElementById('email');
    const emailHelper = document.getElementById('email-helper');

    const ORIGINAL_BUTTON_TEXT = 'Kirim Kehadiran';

    function attachValidation(input, helper, defaultText, errorText) {
      function update() {
        if (input.value.trim() === '') {
          input.removeAttribute('aria-invalid');
          helper.textContent = defaultText;
          helper.classList.remove('error');
          return;
        }
        const ok = input.checkValidity();
        input.setAttribute('aria-invalid', ok ? 'false' : 'true');
        helper.textContent = ok ? defaultText : errorText;
        helper.classList.toggle('error', !ok);
      }
      input.addEventListener('input', update);
      input.addEventListener('blur', update);
    }

    attachValidation(
      hpInput, hpHelper,
      'Format: 08xxxxxxxxxx atau +628xxxxxxxxxx',
      'Nomor HP tidak valid. Contoh: 08123456789'
    );
    attachValidation(
      emailInput, emailHelper,
      'Pastikan email aktif — materi bimtek akan dikirim ke email ini.',
      'Format email tidak valid.'
    );

    function showAlert(message) {
      alertBox.textContent = message;
      alertBox.hidden = false;
    }

    function hideAlert() {
      alertBox.hidden = true;
      alertBox.textContent = '';
    }

    function setLoading(isLoading) {
      submitButton.disabled = isLoading;
      submitButton.setAttribute('aria-busy', String(isLoading));
      submitButton.textContent = isLoading ? 'Mengirim...' : ORIGINAL_BUTTON_TEXT;
      statusText.textContent = isLoading ? 'Mohon tunggu, sedang menyimpan data...' : '';
    }

    form.addEventListener('submit', async function (event) {
      event.preventDefault();
      hideAlert();

      if (APPS_SCRIPT_URL === 'GANTI_DENGAN_URL_WEB_APP_ANDA') {
        showAlert('Form belum siap. Paste URL Web App Google Apps Script ke dalam APPS_SCRIPT_URL.');
        return;
      }

      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      const payload = {
        'nama': form.elements['nama'].value.trim(),
        'tempat-tugas': form.elements['tempat-tugas'].value.trim(),
        'no-wa': form.elements['no-wa'].value.trim(),
        'email': form.elements['email'].value.trim()
      };

      setLoading(true);

      try {
        const response = await fetch(APPS_SCRIPT_URL, {
          method: 'POST',
          body: new URLSearchParams(payload)
        });

        if (!response.ok) {
          throw new Error('HTTP ' + response.status);
        }

        const result = await response.json();

        if (!result.ok) {
          throw new Error(result.message || 'Data ditolak oleh server.');
        }

        modal.showModal();
        form.reset();
        resetValidation();

      } catch (error) {
        showAlert(
          'Pengiriman gagal: ' + error.message +
          '. Periksa koneksi internet Anda, lalu coba lagi.'
        );
      } finally {
        setLoading(false);
      }
    });

    function resetValidation() {
      hpInput.removeAttribute('aria-invalid');
      emailInput.removeAttribute('aria-invalid');
      hpHelper.textContent = 'Format: 08xxxxxxxxxx atau +628xxxxxxxxxx';
      emailHelper.textContent = 'Pastikan email aktif — materi bimtek akan dikirim ke email ini.';
      hpHelper.classList.remove('error');
      emailHelper.classList.remove('error');
    }

    modal.addEventListener('click', (e) => {
      if (e.target === modal) modal.close();
    });

    function closeModal() {
      modal.close();
      form.reset();
      resetValidation();
    }
    </script>
</body>

</html>
