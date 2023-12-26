# CMS-jadwal-shalat (ShalatReminder)

oleh Kelompok 4:

- Wahyudi
- Agus Salim
- Dwie Fatihani Izzati

# Shalat Reminder

Shalat Reminder adalah sebuah aplikasi yang bertujuan untuk membantu pengguna agar tidak melewatkan waktu shalat. Aplikasi ini memberikan notifikasi atau pengingat ketika waktu shalat tiba. Selain itu, aplikasi ini dilengkapi dengan Artikel Islami yang dapat menjadi sumber informasi bagi pengguna mengenai berbagai aspek kehidupan Islam. Terdapat juga fitur Asmaul Husna yang memberikan pengguna akses kepada nama-nama indah Allah, menyemarakkan pengalaman pengguna dalam menjalani kehidupan sehari-hari.

## FITUR UTAMA

TAMPILAN USER

- Jadwal Shalat: Menyediakan jadwal shalat harian yang akurat berdasarkan lokasi pengguna.
- Artikel Islami: Menyajikan artikel-artikel Islami yang informatif dan relevan dengan kehidupan sehari-hari.
- Asmaul Husna: Memberikan akses kepada nama-nama indah Allah untuk mendalami pengenalan terhadap sifat-sifat-Nya.
- Kategori Artikel: Memudahkan pengguna untuk mengakses artikel dengan lebih mudah yang diorganisir dalam berbagai kategori yang relevan.
  TAMPILAN ADMIN
- Dashboard: Berisi segala macam informasi pada ShalatReminder
- Artikel: Admin/Penulis dapat membuat,mengedit serta menghapus artikel yang ada
- Slide Banner: Banner yang digunakan untuk menampilkan Hadist-Hadist yang dapat dikontrol admin
- Iklan: Berisi daftar-daftar iklan/kerjasama dari pihak ketiga(jika ada)
- Kategori: Berisi kategori Artikel yang dapat dihapus dan ditambah sesuai kebutuhan
- Jadwal Shalat: Berisi tabel jadwal Sholat dimana admin dapat melihat Provinsi, Kota serta Waktu Sholat
- Users: Fitur yang memperlihatkan Admin ada berapa operator/penulis
- Log Out: Keluar dari Halaman Admin

## REQUIREMENT

- PHP 8.2
- Laravel 8.0
- MySQL
- AMP html
- Boostrap 5
- Composer

## Installation

- Instalasi Aplikasi
  -> git clone [https://gitlab.com/jadwal-shalat-reminder/cms-jadwal-shalat.git]
  -> cd coba-jadwal
  -> lakukan 'composer install' untuk mendownload seluruh dependensi
  -> jalankan perintah ‘cp .env.example .env’ untuk meng-copy file .env.
  -> edit file .env sesuai dengan kebutuhan sistem.
  -> jalankan perintah ‘php artisan migrate --seed’ untuk migrasi dan seed database.
  -> jalankan perintah ‘php artisan key:generate’ untuk meng-generate key aplikasi.

- C\XAMPP\htdocs\https;
  -> Start Apache dan MySql pada terminal XAMPP
  -> Buka Browser anda dengan url nama valet Projek ini
  -> jika tidak menggunakan valet, maka pada Bash ketik 'php artisan serve'

## LINK HOSTING

apa hayo

## ERD

https://drive.google.com/file/d/1AfEg_0w1QmJbHXnJm6rMD1fpC_dOvaxA/view?usp=sharing
