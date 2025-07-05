<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🎓 SiBeasiswaku

**SiBeasiswaku** adalah aplikasi web berbasis Laravel yang dirancang untuk memudahkan mahasiswa dalam mencari dan mendaftar beasiswa kampus secara online. Sistem ini menyediakan fitur untuk pengguna (mahasiswa) dan admin, termasuk pengelolaan beasiswa, pendaftaran, verifikasi, dan pelaporan.

---

## 📌 Fitur Utama

### 🎯 Untuk Mahasiswa (User)
- Melihat daftar beasiswa yang tersedia
- Mendaftar beasiswa dengan mengunggah dokumen persyaratan
- Melihat status pendaftaran dan progres seleksi

### 🛡️ Untuk Admin
- Mengelola data beasiswa (tambah, ubah, hapus)
- Verifikasi pendaftaran dan dokumen
- Mengubah status seleksi (Pending, Diterima, Ditolak)
- Melihat dan mengelola data user
- Mengakses laporan pendaftaran

---

## 🛠️ Teknologi yang Digunakan

- **Framework Backend**: Laravel 12
- **Frontend**: Blade + Tailwind CSS
- **Panel Admin**: Laravel Filament
- **Authentication**: Laravel Breeze
- **Database**: MySQL

---


## ⚙️ Instalasi

### 1. Clone repository
```bash
git clone https://github.com/username/sibeasiswaku.git
cd sibeasiswaku
composer install
composer update
cp .env.example .env
php artisan key:generate
php artisan db --seed

MIT License

Copyright (c) 2025
Kelompok 2 - SiBeasiswaku Project
Anggota Tim:
- Wahyu Ahmad Yassin (Project Manager)
- Abiyan Abdulrohman (Lead Developer)
- Muhammad Fajrul Falah (UI/UX Designer)
- Muhammad Thoriq Al Fath (Backend Developer)
- M. Raisa Qisti Rayhan (Frontend Developer)
- Angeliq Mexgaputri Premaswari (Quality Assurance)               

Proyek ini dibuat dalam rangka tugas akhir mata kuliah Pemrograman Web  
STT Nurul Fikri – Tahun 2025
