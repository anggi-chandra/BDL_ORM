composer create-project --prefer-dist laravel/laravel NamaProyekAnda


# 🚀 Laravel Eloquent ORM - Mini Notes Project

Pada proyek mini notes ini terdapat dua model utama:

User
  Memiliki relasi **one-to-many** dengan model **Product**
  (Satu user dapat memiliki banyak product)

Product
  Memiliki relasi **one-to-one** dengan model **User**
  (Satu product hanya dimiliki oleh satu user)

---

## Penjelasan Teknologi yang Digunakan

Migration
  Digunakan untuk membuat dan mengubah struktur tabel database secara terorganisir.

Seeder
  Digunakan untuk mengisi tabel database dengan data awal (dummy data) secara otomatis.

Factory
  Digunakan untuk merancang pola data dummy yang realistis untuk dimasukkan ke dalam tabel melalui seeder.

---

# Cara Penggunaan

1. Buat database baru di DBMS dengan nama: `TugasBDl`.

2. Sesuaikan konfigurasi database di file `.env` agar sesuai dengan database `TugasBDL` yang sudah dibuat, contohnya:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tokopedia
   DB_USERNAME=root
   DB_PASSWORD=your_password
