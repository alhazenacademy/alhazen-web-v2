# Alhazen Academy Web & CMS

Platform web dan sistem manajemen konten (CMS) resmi untuk **Alhazen Academy** — lembaga kursus koding, AI, dan robotika untuk anak-anak.

## Tech Stack

- **Backend:** Laravel 12, PHP 8.2+
- **Admin Panel:** Filament 4
- **Frontend:** Blade, Tailwind CSS 4, Alpine.js, Swiper
- **Database:** SQLite (default) / MySQL
- **Permissions:** Spatie Permission + Filament Shield

---

## Memulai Pengembangan (Quick Start)

Ikuti langkah-langkah di bawah untuk menjalankan proyek di lingkungan lokal:

1. **Clone repository & masuk ke direktori proyek:**
   ```bash
   git clone <repository-url>
   cd alhazen-web-v2
   ```

2. **Install dependensi PHP & Node.js:**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment:**
   Salin file `.env.example` menjadi `.env` dan buat key aplikasi:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Migrasi dan Seed Database:**
   ```bash
   php artisan migrate --seed
   ```

5. **Jalankan Server Pengembangan:**
   Anda dapat menjalankan server lokal dan Vite secara bersamaan:
   ```bash
   composer dev
   ```
   Atau jalankan secara terpisah:
   ```bash
   php artisan serve
   npm run dev
   ```

---

## Perintah Penting (Commands)

| Perintah | Deskripsi |
|---|---|
| `composer dev` | Menjalankan server, queue, logs, dan Vite secara paralel |
| `php artisan serve` | Menjalankan server pengembangan Laravel saja |
| `npm run dev` | Menjalankan Vite development server |
| `npm run build` | Kompilasi aset frontend untuk produksi |
| `php artisan migrate` | Menjalankan migrasi database |
| `php artisan db:seed` | Menjalankan seeder database |
| `php artisan shield:generate` | Regenerasi permission Filament Shield |
| `composer test` | Membersihkan konfigurasi dan menjalankan unit test |

---

## Daftar Halaman Utama & Fungsinya

1. **Beranda (`/`)**
   - Halaman utama penyambung pengunjung: menampilkan banner program, keunggulan lembaga, daftar kursus populer, testimoni, dan CTA pendaftaran kelas gratis.
2. **Program (`/program`)**
   - Katalog lengkap seluruh program kursus dan pelatihan teknologi (Koding Anak, Python, Roblox, Blender, dll.).
3. **Detail Kursus (`/kursus-...`)**
   - Halaman mendalam untuk setiap jenis kursus spesifik (kurikulum, target usia, manfaat).
4. **Katalog Buku (`/katalog`)**
   - Daftar buku dan modul pembelajaran teknologi yang diterbitkan/digunakan oleh Alhazen Academy.
5. **Artikel / Blog (`/artikel` & `/artikel/{slug}`)**
   - Pusat informasi, tips pendidikan teknologi anak, berita kegiatan, dan artikel edukatif.
6. **Tentang Kami (`/about`)**
   - Profil lembaga, visi & misi, pendekatan kurikulum STEM & kepemimpinan Islam, serta kontak resmi.
7. **Lokasi (`/lokasi`)**
   - Informasi alamat cabang/mitra pusat belajar fisik lengkap dengan peta lokasi.
8. **Pendaftaran Kelas Gratis (`/trial`)**
   - Formulir interaktif bagi orang tua untuk mendaftarkan anak mengikuti *trial class* (uji coba gratis).
9. **Halaman Event Spesial (`/event/...`)**
   - Halaman kampanye event berkala (seperti Ramadhan NgabuburIT Class, Coding Experience, Hackathon).
10. **Halaman Terima Kasih (`/thank-you`)**
    - Konfirmasi setelah pengguna sukses mengirimkan data pendaftaran atau *lead*.
11. **Tautan Sosial / Linktree (`/links`)**
    - Kumpulan tautan penting (WhatsApp, pendaftaran, sosial media) untuk akses perangkat seluler.
