# Aplikasi Blog - CMS Laravel

**Nama:** Muhammad Ihsan Anshorudin
**NIM:** 240605110199

## Deskripsi

Aplikasi sistem manajemen blog (CMS) berbasis Laravel yang memungkinkan
pengelolaan artikel, penulis, dan kategori artikel. Dilengkapi halaman
publik untuk pengunjung tanpa perlu login.

## Fitur

- Autentikasi login/logout untuk admin
- CRUD Artikel, Penulis, dan Kategori Artikel
- Upload gambar artikel dan foto profil penulis
- Halaman publik: daftar artikel dan detail artikel
- Filter artikel berdasarkan kategori

## Langkah Menjalankan Aplikasi

### Prasyarat

- PHP >= 8.2
- Composer
- XAMPP (MySQL)

### Instalasi

1. Clone repository ini
   git clone https://github.com/asidez-6/aplikasi-blog-240605110199.git

2. Masuk ke folder proyek
   cd aplikasi-blog-240605110199

3. Install dependencies
   composer install

4. Salin file .env
   cp .env.example .env

5. Generate app key
   php artisan key:generate

6. Sesuaikan konfigurasi database di file .env
   DB_DATABASE=db_blog
   DB_USERNAME=root
   DB_PASSWORD=

7. Import database db_blog ke MySQL via phpMyAdmin

8. Buat symbolic link storage
   php artisan storage:link

9. Jalankan server
   php artisan serve

10. Buka browser dan akses http://localhost:8000

## Video Demonstrasi

https://youtu.be/HENpPkCb5Ns
