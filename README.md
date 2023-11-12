# CV App menggunakan PHP dan MySQL

Aplikasi Curiculum Vitae sederhana yang dibuat menggunakan bahasa pemrograman PHP dan MySQL sebagai database. Aplikasi ini memanfaatkan SQLyog untuk mengelola database dan memiliki fitur admin.php untuk melakukan pembaruan data dari database.

## Prasyarat

Sebelum Anda dapat menggunakan aplikasi ini, pastikan sistem Anda sudah memenuhi prasyarat berikut:

- Web server (contoh: Apache)
- PHP versi 7.0 atau yang lebih baru
- MySQL database (dapat menggunakan SQLyog atau alat manajemen database lainnya)

## Instalasi

1. Clone repositori ini ke dalam direktori web server Anda:

   ```bash
   git clone https://github.com/namarepositori.git
2. Buat Database di SQLyog atau alat manajemen database lainnya. Gunakan file databse_cv.sql yang terdapat pada lokasi /assets/database_cv.sql
3. Sesuaikan pengaturan koneksi database pada file  config.php
4. Buka Project dengan web server dengan cara ```http://localhost/cv_with_php```

## Struktur Project
- index.php : Halaman utama CV.
- admin.php : Halaman admin untuk memperbarui data dari database.
- config.php : Konfigurasi koneksi database.
- assets/ : Direktori untuk menyimpan gambar, database, dan tampilan cv di dalam browser.

## Tujuan

Project ini di buat untuk memenuhi tugas mata kuliah Pemrograman Web Semester 3 Jurusan Informatika Untirta.