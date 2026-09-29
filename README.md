# App Perpustakaan

Sistem Perpustakaan Digital Kampus, yaitu aplikasi web untuk membantu petugas/admin
mengelola data buku, anggota, dan transaksi peminjaman.

## Tujuan
Project ini dibuat sebagai bahan belajar framework Laravel 12 dan dikembangkan
bertahap setiap pertemuan.

## Cara Menjalankan Secara Lokal
1. Pastikan PHP 8.2+ dan Composer sudah terinstal
2. Clone repository: `git clone https://github.com/diobahy2007-afk/app-perpustakaan.git`
3. Masuk ke folder: `cd app-perpustakaan`
4. Install dependensi: `composer install`
5. Salin konfigurasi: `cp .env.example .env`
6. Buat app key: `php artisan key:generate`
7. Jalankan server: `php artisan serve`
8. Buka `http://127.0.0.1:8000` di browser

## Perbedaan Model, View, Controller
Model mengurus data dan aturan terkait data, misalnya tabel buku di database.
View adalah tampilan HTML yang dilihat pengguna. Controller menerima permintaan
dari pengguna, mengambil data lewat Model, lalu mengirimkannya ke View untuk ditampilkan.