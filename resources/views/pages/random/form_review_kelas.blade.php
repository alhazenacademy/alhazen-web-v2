<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Kelas - Alhazen Academy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            padding: 20px 16px;
        }

        .wrap {
            max-width: 520px;
            margin: 0 auto;
        }

        .box {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.08);
            width: 100%;
            overflow: hidden;
        }

        .box-header {
            text-align: center;
            padding: 28px 24px 20px;
            border-bottom: 1px solid #eee;
            transition: padding 0.25s;
        }

        .box-header.compact {
            display: flex;
            align-items: center;
            gap: 12px;
            text-align: left;
            padding: 12px 24px;
        }

        .box-header.compact img {
            width: 32px;
            margin: 0;
            flex-shrink: 0;
        }

        .box-header.compact h1 {
            font-size: 0.95em;
            margin: 0;
            flex: 1;
        }

        .box-header.compact p,
        .box-header.compact .badge {
            display: none;
        }

        .box-header img {
            width: 60px;
            margin-bottom: 12px;
        }

        .box-header h1 {
            font-size: 1.15em;
            color: #222;
            margin-bottom: 4px;
        }

        .box-header p {
            font-size: 0.82em;
            color: #888;
            line-height: 1.6;
        }

        .box-header .badge {
            display: inline-block;
            background: #FFBC00;
            color: #fff;
            font-size: 0.7em;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 10px;
        }

        .box-body {
            padding: 24px;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .section-title {
            font-size: 0.78em;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
            font-weight: 600;
        }

        .field {
            margin-bottom: 14px;
        }

        .field label {
            display: block;
            font-size: 0.85em;
            font-weight: 600;
            color: #444;
            margin-bottom: 6px;
        }

        .field input[type="text"],
        .field input[type="email"],
        .field textarea {
            width: 100%;
            padding: 10px 14px;
            border: 1.5px solid #ddd;
            border-radius: 8px;
            font-size: 0.9em;
            outline: none;
            transition: border-color 0.2s;
            font-family: inherit;
            color: #2F2F2F;
        }

        .field input:focus,
        .field textarea:focus {
            border-color: #00AE90;
        }

        .field.error input,
        .field.error textarea {
            border-color: #e74c3c;
        }

        .field .error-msg {
            font-size: 0.78em;
            color: #e74c3c;
            margin-top: 4px;
            display: none;
        }

        .field.error .error-msg {
            display: block;
        }

        .field textarea {
            resize: vertical;
            min-height: 70px;
        }

        .counter {
            font-size: 0.75em;
            color: #666;
            margin-top: 4px;
            text-align: right;
        }

        .counter.warn {
            color: #e74c3c;
        }

        .counter.ok {
            color: #00AE90;
        }

        .q-label {
            font-size: 0.92em;
            color: #333;
            font-weight: 500;
            margin-bottom: 14px;
            line-height: 1.5;
        }

        .q-label span {
            color: #00AE90;
            font-weight: 700;
        }

        .option {
            margin-bottom: 8px;
        }

        .option input[type="radio"],
        .option input[type="checkbox"] {
            display: none;
        }

        .option label {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            border: 1.5px solid #e8e8e8;
            border-radius: 8px;
            font-size: 0.88em;
            color: #444;
            cursor: pointer;
            transition: all 0.15s;
        }

        .option label:hover {
            background: #f8f8f8;
            border-color: #ccc;
        }

        .option input:checked+label {
            background: #e6f6f2;
            border-color: #00AE90;
            color: #333;
            font-weight: 500;
        }

        .option label .opt-check {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #fff;
            border: 1.5px solid #ccc;
            font-size: 0.75em;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.15s;
        }

        .option label .opt-check {
            color: transparent;
        }

        .option input:checked+label .opt-check {
            background: #00AE90;
            border-color: #00AE90;
            color: #fff;
        }

        .star-rating {
            display: inline-flex;
            flex-direction: row-reverse;
            gap: 2px;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            font-size: 6rem;
            line-height: 1;
            color: #d9d4cc;
            cursor: pointer;
            user-select: none;
            transition: color 0.12s;
        }

        .star-rating label:hover,
        .star-rating label:hover~label,
        .star-rating input:checked~label {
            color: #FFBC00;
        }

        .error-border .star-rating label {
            color: #e74c3c;
        }

        .star-text {
            font-size: 0.8em;
            color: #666;
            margin-top: 6px;
        }

        .error-border .option label {
            border-color: #e74c3c;
        }

        .error-text {
            font-size: 0.78em;
            color: #e74c3c;
            margin-top: 6px;
            display: none;
        }

        .error-text.show {
            display: block;
        }

        .hidden-input {
            display: none;
        }

        #kendalaLainnyaWrap {
            margin-top: 10px;
        }

        .box-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
            border-top: 1px solid #eee;
        }

        .btn {
            padding: 9px 22px;
            border-radius: 8px;
            font-size: 0.85em;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.15s;
        }

        .btn-prev {
            background: #fff;
            color: #555;
            border: 1.5px solid #d5d5d5;
        }

        .btn-prev:hover {
            background: #f5f5f5;
            border-color: #bbb;
        }

        .btn-next {
            background: #00AE90;
            color: #fff;
        }

        .btn-next:hover {
            background: #009a80;
        }

        .btn[disabled] {
            opacity: 0.4;
            cursor: not-allowed;
        }

        .step-progress {
            padding: 14px 24px 0;
        }

        .step-progress .bar {
            height: 6px;
            background: #eee;
            border-radius: 999px;
            overflow: hidden;
        }

        .step-progress .bar-fill {
            height: 100%;
            width: 20%;
            background: #00AE90;
            border-radius: 999px;
            transition: width 0.25s;
        }

        .step-progress .label {
            font-size: 0.72em;
            color: #666;
            text-align: right;
            margin-top: 6px;
        }

        .submit-error {
            font-size: 0.78em;
            color: #e74c3c;
            margin-top: 10px;
            text-align: center;
            display: none;
        }

        .thankyou {
            text-align: center;
            padding: 40px 24px;
        }

        .thankyou .check {
            width: 64px;
            height: 64px;
            background: #00AE90;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            font-size: 1.8em;
            color: #fff;
        }

        .thankyou h2 {
            font-size: 1.15em;
            color: #333;
            margin-bottom: 8px;
        }

        .thankyou p {
            font-size: 0.88em;
            color: #888;
            line-height: 1.6;
        }

        .blocked {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.08);
            max-width: 520px;
            margin: 0 auto;
            padding: 40px 24px;
            text-align: center;
        }

        .blocked .blocked-ico {
            font-size: 2.5em;
            margin-bottom: 12px;
        }

        .blocked h2 {
            font-size: 1.15em;
            color: #333;
            margin-bottom: 8px;
        }

        .blocked p {
            font-size: 0.88em;
            color: #888;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="blocked" id="blockedBox" style="display:none;">
            <div class="blocked-ico">&#128274;</div>
            <h2>Halaman Terkunci</h2>
            <p>Form ulasan ini hanya bisa diakses dari website resmi Alhazen Academy.<br>Silakan buka melalui link resmi
                yang dibagikan ya!</p>
        </div>
        <div class="box">
            <div class="box-header">
                <img src="https://lh3.googleusercontent.com/d/1Eh-pfDwHRmyPz1HQQJuCQjYk64vs4lNr"
                    alt="Logo Alhazen Academy">
                <h1>Ulasan Kelas Alhazen Academy</h1>
                <p>Halo, Alhazener! Beri tahu kami bagian materi yang masih membingungkan — masukanmu langsung kami
                    pakai untuk menyesuaikan materi berikutnya.</p>
                <span class="badge">Cukup 1 menit</span>
            </div>

            <form id="ulasanForm" novalidate>
                <div class="box-body" id="boxBody">

                    <div class="section active" data-step="0">
                        <div class="section-title">Data Diri</div>
                        <div class="field" id="fnama">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap">
                            <div class="error-msg">Nama tidak valid. Gunakan huruf saja, minimal 3 karakter.</div>
                        </div>
                        <div class="field" id="femail">
                            <label for="email">Email <span style="color:#666;font-weight:400;">(opsional)</span></label>
                            <input type="email" id="email" name="email" placeholder="cth: nama@email.com">
                            <div class="error-msg">Format email tidak valid.</div>
                        </div>
                        <div class="field" id="fkelas">
                            <label for="kelas">Kelas / Materi yang Sedang Diikuti</label>
                            <input type="text" id="kelas" name="kelas" placeholder="cth: Kelas Python Dasar - Modul 2">
                            <div class="error-msg">Kelas / materi wajib diisi.</div>
                        </div>
                    </div>

                    <div class="section" data-step="1">
                        <div class="section-title">Evaluasi Pemahaman Materi</div>
                        <div class="q-label"><span>1.</span> Seberapa mudah materi / modul ini untuk dipahami?</div>
                        <div id="opts-rating" class="options-container">
                            <div class="star-rating" style="font-size: 3rem;">
                                <input type="radio" id="st5" name="rating" value="5">
                                <label for="st5" title="Sangat mudah"
                                    style="font-size: 3rem; width: 3.6rem; height: 3.6rem; line-height: 3.6rem;">&#9733;</label>

                                <input type="radio" id="st4" name="rating" value="4">
                                <label for="st4" title="Mudah"
                                    style="font-size: 3rem; width: 3.6rem; height: 3.6rem; line-height: 3.6rem;">&#9733;</label>

                                <input type="radio" id="st3" name="rating" value="3">
                                <label for="st3" title="Biasa aja"
                                    style="font-size: 3rem; width: 3.6rem; height: 3.6rem; line-height: 3.6rem;">&#9733;</label>

                                <input type="radio" id="st2" name="rating" value="2">
                                <label for="st2" title="Agak sulit"
                                    style="font-size: 3rem; width: 3.6rem; height: 3.6rem; line-height: 3.6rem;">&#9733;</label>

                                <input type="radio" id="st1" name="rating" value="1">
                                <label for="st1" title="Sangat sulit"
                                    style="font-size: 3rem; width: 3.6rem; height: 3.6rem; line-height: 3.6rem;">&#9733;</label>
                            </div>
                        </div>
                        <div class="star-text" id="starText">Klik bintang untuk menilai</div>
                        <div class="error-text" id="err-rating">Klik bintang dulu ya, biar kami tahu tingkat
                            kemudahannya.</div>

                        <div class="q-label" style="margin-top:18px;"><span>2.</span> Apakah alur belajar sejauh ini
                            terlalu cepat?</div>
                        <div id="opts-cepat" class="options-container">
                            <div class="option"><input type="radio" id="c1" name="cepat" value="ya"><label
                                    for="c1"><span class="opt-check">&#10003;</span> Ya, terlalu cepat</label></div>
                            <div class="option"><input type="radio" id="c2" name="cepat" value="tidak"><label
                                    for="c2"><span class="opt-check">&#10003;</span> Tidak, sudah pas</label></div>
                        </div>
                        <div class="error-text" id="err-cepat">Pilih salah satu.</div>
                    </div>

                    <div class="section" data-step="2">
                        <div class="section-title">Testimoni Publik</div>
                        <div class="q-label"><span>1.</span> Ceritakan pengalaman belajarmu sejauh ini dalam 1-2
                            kalimat! <span style="color:#666;font-weight:400;">(Cerita terbaik akan kami tampilkan di
                                website)</span></div>
                        <div class="field" id="fcerita">
                            <textarea id="cerita" rows="3"
                                placeholder="cth: Materinya jelas banget dan contohnya dekat dengan kehidupan sehari-hari. Mentornya juga sabar menjelaskan sampai saya paham!"
                                maxlength="150"></textarea>
                            <div class="counter" id="counter">0 / 150 karakter · minimal 20</div>
                            <div class="error-msg">Cerita harus minimal 20 dan maksimal 150 karakter.</div>
                        </div>

                        <div class="q-label" style="margin-top:14px;"><span>2.</span> Apakah kamu bersedia ulasan dan
                            nama yang disamarkan akan ditampilkan di halaman website kami?</div>
                        <div id="opts-bersedia" class="options-container">
                            <div class="option"><input type="radio" id="b1" name="bersedia" value="ya"><label
                                    for="b1"><span class="opt-check">&#10003;</span> Ya, boleh</label></div>
                            <div class="option"><input type="radio" id="b2" name="bersedia" value="tidak"><label
                                    for="b2"><span class="opt-check">&#10003;</span> Tidak, simpan saja</label></div>
                        </div>
                        <div class="error-text" id="err-bersedia">Pilih salah satu.</div>
                    </div>

                    <div class="section" data-step="3">
                        <div class="section-title">Hambatan Teknis</div>
                        <div class="q-label">Apakah kamu mengalami kendala teknis saat pembelajaran ini? <span
                                style="color:#666;font-weight:400;">(boleh pilih lebih dari satu)</span></div>
                        <div id="opts-kendala" class="options-container">
                            <div class="option"><input type="checkbox" id="k1" value="Susah login"><label for="k1"><span
                                        class="opt-check">&#10003;</span> Susah login</label></div>
                            <div class="option"><input type="checkbox" id="k2" value="Zoom lemot"><label for="k2"><span
                                        class="opt-check">&#10003;</span> Zoom lemot</label></div>
                            <div class="option"><input type="checkbox" id="k3" value="Internet tidak lancar"><label
                                    for="k3"><span class="opt-check">&#10003;</span> Internet tidak lancar</label></div>
                            <div class="option"><input type="checkbox" id="k4" value="Lainnya"><label for="k4"><span
                                        class="opt-check">&#10003;</span> Lainnya</label></div>
                        </div>
                        <div id="kendalaLainnyaWrap" style="display:none;">
                            <div class="field">
                                <input type="text" id="kendalaLainnya" placeholder="Tulis kendalamu di sini...">
                            </div>
                        </div>
                        <div class="hint" style="font-size:0.75em;color:#666;margin-top:6px;">Tidak ada kendala? Klik
                            "Selanjutnya" saja.</div>
                    </div>

                    <div class="section" data-step="4">
                        <div class="section-title">Masukan</div>
                        <div class="q-label">Apa masukan singkat yang ingin kamu sampaikan?</div>
                        <div class="field">
                            <input type="text" id="masukan"
                                placeholder="cth: Tambahin latihan soal di tiap akhir bab ya!" maxlength="200">
                        </div>
                        <div class="hint" style="font-size:0.75em;color:#666;margin-top:6px;">Kosongkan jika tidak ada.
                        </div>
                    </div>

                </div>

                <div class="step-progress">
                    <div class="bar">
                        <div class="bar-fill" id="stepBarFill"></div>
                    </div>
                    <div class="label" id="stepLabel">Langkah 1 dari 5</div>
                </div>
                <div class="submit-error" id="submitError"></div>
                <div class="box-footer" id="boxFooter">
                    <button type="button" class="btn btn-prev" id="btnPrev" style="visibility:hidden">Kembali</button>
                    <button type="button" class="btn btn-next" id="btnNext">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function () {
      var NAMA_RE = /^[\p{L}\s.'-]{3,60}$/u;
      var EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var totalSteps = 5;
      var current = 0;

      var ALLOWED_HOSTS = [
        'localhost',
        '127.0.0.1',
        'alhazen.academy',
        'www.alhazen.academy',
        'script.googleusercontent.com',
        'script.google.com',
        'webdev.alhazen.academy'
      ];
      function tampilkanBlokir() {
        document.querySelector('.box').style.display = 'none';
        document.getElementById('blockedBox').style.display = 'block';
      }
      if (window.location.protocol === 'file:' || ALLOWED_HOSTS.indexOf(window.location.hostname) === -1) {
        tampilkanBlokir();
        return;
      }

      var SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbwmePqQdOOxd2iwjfhKwMAVFSb9RSOYK5WCNunL6C2YQHVUDBU5dfa7JmkfPzV026lB/exec';

      var params = new URLSearchParams(window.location.search);
      var prefillName = params.get('nm');
      var prefillMateri = params.get('mtr');
      if (prefillName) document.getElementById('nama').value = prefillName;
      if (prefillMateri) document.getElementById('kelas').value = prefillMateri;
      if (window.location.search) {
        try {
          history.replaceState({}, '', window.location.pathname);
        } catch (e) {}
      }

      var sections = document.querySelectorAll('.section');
      var btnPrev = document.getElementById('btnPrev');
      var btnNext = document.getElementById('btnNext');
      var stepBarFill = document.getElementById('stepBarFill');
      var stepLabel = document.getElementById('stepLabel');
      var boxHeader = document.querySelector('.box-header');

      function showStep(idx) {
        sections.forEach(function (s, i) { s.classList.toggle('active', i === idx); });
        btnPrev.style.visibility = idx === 0 ? 'hidden' : 'visible';
        btnNext.textContent = idx === totalSteps - 1 ? 'Kirim Ulasan' : 'Selanjutnya';
        stepBarFill.style.width = ((idx + 1) / totalSteps) * 100 + '%';
        stepLabel.textContent = 'Langkah ' + (idx + 1) + ' dari ' + totalSteps;
        boxHeader.classList.toggle('compact', idx > 0);
      }

      function clearErrors() {
        document.querySelectorAll('.field.error').forEach(function (e) { e.classList.remove('error'); });
        document.querySelectorAll('.error-text.show').forEach(function (e) { e.classList.remove('show'); });
        document.querySelectorAll('.error-border').forEach(function (e) { e.classList.remove('error-border'); });
        document.getElementById('submitError').style.display = 'none';
      }

      function validateStep(idx) {
        if (idx === 0) {
          var ok = true;
          var nama = document.getElementById('nama').value.trim();
          var kelas = document.getElementById('kelas').value.trim();
          if (!NAMA_RE.test(nama)) { document.getElementById('fnama').classList.add('error'); ok = false; }
          var email = document.getElementById('email').value.trim();
          if (email && !EMAIL_RE.test(email)) { document.getElementById('femail').classList.add('error'); ok = false; }
          if (!kelas) { document.getElementById('fkelas').classList.add('error'); ok = false; }
          return ok;
        }
        if (idx === 1) {
          var ok = true;
          if (!document.querySelector('input[name="rating"]:checked')) {
            document.getElementById('err-rating').classList.add('show');
            document.getElementById('opts-rating').classList.add('error-border');
            ok = false;
          }
          if (!document.querySelector('input[name="cepat"]:checked')) {
            document.getElementById('err-cepat').classList.add('show');
            document.getElementById('opts-cepat').classList.add('error-border');
            ok = false;
          }
          return ok;
        }
        if (idx === 2) {
          var ok = true;
          var cerita = document.getElementById('cerita').value.trim();
          if (cerita.length < 20 || cerita.length > 150) {
            document.getElementById('fcerita').classList.add('error');
            ok = false;
          }
          if (!document.querySelector('input[name="bersedia"]:checked')) {
            document.getElementById('err-bersedia').classList.add('show');
            document.getElementById('opts-bersedia').classList.add('error-border');
            ok = false;
          }
          return ok;
        }
        return true;
      }

      function showThankYou(nama) {
        document.getElementById('boxBody').innerHTML =
          '<div class="thankyou">' +
            '<div class="check">&#10003;</div>' +
            '<h2>Terima Kasih, ' + nama + '!</h2>' +
            '<p>Ulasanmu sudah kami terima.<br>Masukan kamu akan langsung kami pakai untuk bikin kelas makin mudah diikuti.<br>Semangat belajar!</p>' +
          '</div>';
        document.getElementById('boxFooter').style.display = 'none';
        document.querySelector('.step-progress').style.display = 'none';
        document.querySelector('.box-header p').innerHTML = 'Ulasan sudah terkirim.';
        document.querySelector('.box-header .badge').style.display = 'none';
      }

      function submitForm() {
        var kendala = [];
        document.querySelectorAll('#opts-kendala input:checked').forEach(function (c) { kendala.push(c.value); });
        btnNext.disabled = true;
        btnNext.textContent = 'Mengirim...';

        function gagal(msg) {
          btnNext.disabled = false;
          btnNext.textContent = 'Kirim Ulasan';
          var m = document.getElementById('submitError');
          m.textContent = 'Ups, ' + msg;
          m.style.display = 'block';
        }

        var cbName = '__ulasanCb' + Date.now();
        var params = new URLSearchParams();
        params.append('prefix', cbName);
        params.append('nama', document.getElementById('nama').value.trim());
        params.append('email', document.getElementById('email').value.trim());
        params.append('kelas', document.getElementById('kelas').value.trim());
        params.append('rating', document.querySelector('input[name="rating"]:checked').value);
        params.append('cepat', document.querySelector('input[name="cepat"]:checked').value);
        params.append('cerita', document.getElementById('cerita').value.trim());
        params.append('bersedia', document.querySelector('input[name="bersedia"]:checked').value);
        params.append('kendala', kendala.join('; '));
        params.append('lainnya', document.getElementById('kendalaLainnya').value.trim());
        params.append('masukan', document.getElementById('masukan').value.trim());
        params.append('t', Date.now());

        var timer = setTimeout(function () {
          cleanup();
          console.warn('[ulasan] Timeout 15 detik, tidak ada respons dari server.');
          gagal('waktu habis. Coba lagi ya!');
        }, 15000);

        function cleanup() {
          clearTimeout(timer);
          delete window[cbName];
          var s = document.getElementById(cbName);
          if (s) s.parentNode.removeChild(s);
        }

        window[cbName] = function (res) {
          cleanup();
          console.log('[ulasan] Respons server:', res);
          if (res && res.ok) { showThankYou(res.nama); return; }
          gagal((res && res.error) ? res.error : 'terjadi kesalahan. Coba lagi ya!');
        };

        var script = document.createElement('script');
        script.id = cbName;
        script.src = SCRIPT_URL + '?' + params.toString();
        console.log('[ulasan] Memanggil backend:', script.src);
        script.onerror = function () {
          cleanup();
          console.error('[ulasan] Script tag gagal dimuat. Cek URL & pengaturan akses deployment:', SCRIPT_URL);
          gagal('gagal terhubung ke server. Coba lagi ya!');
        };
        document.body.appendChild(script);
      }

      btnNext.addEventListener('click', function () {
        if (!validateStep(current)) return;
        if (current === totalSteps - 1) { submitForm(); return; }
        current++;
        showStep(current);
      });

      btnPrev.addEventListener('click', function () {
        if (current > 0) {
          clearErrors();
          current--;
          showStep(current);
        }
      });

      document.querySelectorAll('#opts-kendala input[type="checkbox"]').forEach(function (c) {
        c.addEventListener('change', function () {
          document.getElementById('kendalaLainnyaWrap').style.display =
            (c.id === 'k4' && c.checked) ? 'block' : 'none';
          if (c.id === 'k4' && !c.checked) document.getElementById('kendalaLainnya').value = '';
        });
      });

      var STAR_TEXT = { 1: 'Sangat sulit', 2: 'Agak sulit', 3: 'Biasa aja', 4: 'Mudah', 5: 'Sangat mudah' };
      var starText = document.getElementById('starText');
      document.querySelectorAll('input[name="rating"]').forEach(function (r) {
        r.addEventListener('change', function () {
          starText.textContent = 'Pilihanmu: ' + STAR_TEXT[r.value] + ' (bintang ' + r.value + ' dari 5)';
        });
      });

      document.getElementById('cerita').addEventListener('input', function () {
        var n = this.value.length;
        var c = document.getElementById('counter');
        c.textContent = n + ' / 150 karakter · minimal 20';
        c.className = 'counter ' + (n < 20 || n > 150 ? 'warn' : 'ok');
      });

      document.querySelectorAll('input[type="radio"]').forEach(function (r) {
        r.addEventListener('change', function () {
          var opts = this.closest('.options-container');
          if (opts) opts.classList.remove('error-border');
          var errId = 'err-' + (this.name === 'rating' ? 'rating' : this.name === 'cepat' ? 'cepat' : 'bersedia');
          document.getElementById(errId).classList.remove('show');
        });
      });

      showStep(0);
    })();
    </script>
</body>

</html>
