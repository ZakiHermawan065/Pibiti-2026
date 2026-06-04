# Smart Note AI - PIBITI 2026

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![MySQL](https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com)

**Smart Note AI** adalah aplikasi berbasis website yang dirancang untuk membantu mahasiswa dalam mengelola catatan kuliah dan menghasilkan latihan soal secara otomatis berbasis Artificial Intelligence (AI) dari isi catatan tersebut. Proyek ini dikembangkan sebagai bagian dari tugas pelatihan bootcamp **PIBITI 2026**.

---

## 🚀 Fitur Utama

* **Smart Note Management:** Pencatatan materi kuliah yang rapi dan terorganisir.
* **AI Quiz Generator:** Membuat pertanyaan dan soal latihan otomatis berdasarkan isi catatan kuliah menggunakan integrasi AI.
* **Dashboard Interaktif:** Antarmuka modern yang responsif dan mudah digunakan.

---

## 🛠️ Teknologi yang Digunakan

* **Framework Back-End:** Laravel (PHP)
* **Styling & UI:** Tailwind CSS
* **Database:** MySQL
* **AI Integration:** (Sesuai dengan API/Library AI yang Anda hubungkan)

---

## 📦 Cara Instalasi & Menjalankan Proyek

Salin dan jalankan seluruh baris perintah di bawah ini secara berurutan di terminal Anda untuk melakukan instalasi proyek:

```bash
# 1. Clone repository ini ke komputer Anda
git clone [https://github.com/ZakiHermawan065/Pibiti-2026.git](https://github.com/ZakiHermawan065/Pibiti-2026.git)
cd Pibiti-2026

# 2. Install semua dependensi PHP (Composer) dan JavaScript (NPM)
composer install
npm install

# 3. Buat file konfigurasi lingkungan (.env) dari template
cp .env.example .env

# 4. Generate Application Key Laravel
php artisan key:generate

# *Catatan: Silakan sesuaikan konfigurasi database MySQL Anda di dalam file .env terlebih dahulu*

# 5. Jalankan migrasi database
php artisan migrate

# 6. Kompilasi aset frontend (Tailwind)
npm run dev

# 7. Jalankan server lokal Laravel
php artisan serve
