<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Beasiswa - Sibeasiswaku</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Public Sans', sans-serif; }
    :root {
      --primary-color: #0c7ff2;
      --text-primary: #111827;
      --text-secondary: #4b5563;
      --background-light: #f9fafb;
      --background-white: #ffffff;
      --border-light: #e5e7eb;
    }
    .nav-link {
      @apply text-[var(--text-primary)] text-sm font-medium hover:text-[var(--primary-color)] transition;
    }
  </style>
</head>
<body class="bg-[var(--background-light)] text-[var(--text-primary)]">

  <!-- Header -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center gap-2">
        <div class="text-[var(--primary-color)] text-2xl font-bold">🎓</div>
        <h1 class="font-bold text-xl">Sibeasiswaku</h1>
      </div>
      <nav class="hidden md:flex items-center gap-8">
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
        <a class="nav-link" href="{{ url('/beasiswa') }}">Beasiswa</a>
        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
      </nav>
      <a href="{{ url('/login') }}" class="bg-[var(--primary-color)] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-opacity-90">Login</a>
    </div>
  </header>

  <!-- Detail Section -->
  <main class="py-16 px-4 md:px-8 bg-[var(--background-white)]">
    <div class="max-w-4xl mx-auto">
      <!-- Gambar Beasiswa -->
      <div class="mb-8">
        <img src="{{ asset('img/beasiswa_quran.png') }}" alt="Beasiswa Tahfidz Al-Qur’an" class="w-full h-auto object-contain rounded-lg shadow-sm">
      </div>

      <h2 class="text-3xl font-bold mb-4">Beasiswa Tahfidz Al-Qur’an 2025</h2>
      <p class="text-[var(--text-secondary)] mb-6 text-lg">Dibuka oleh: <span class="font-semibold text-[var(--text-primary)]">Yayasan Pendidikan Islam Terpadu Indonesia</span></p>

      <div class="grid md:grid-cols-2 gap-8 mb-8">
        <div>
          <h3 class="text-xl font-semibold mb-2">Deskripsi</h3>
          <p class="text-[var(--text-secondary)] leading-relaxed">
            Beasiswa Tahfidz Al-Qur’an merupakan program bantuan pendidikan bagi mahasiswa yang memiliki hafalan Al-Qur’an minimal 5 juz. Program ini bertujuan untuk mendukung para penghafal Al-Qur’an agar dapat menempuh pendidikan tinggi tanpa hambatan finansial.
          </p>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-2">Persyaratan</h3>
          <ul class="list-disc list-inside text-[var(--text-secondary)] space-y-1">
            <li>Hafalan minimal 5 Juz Al-Qur’an</li>
            <li>Mahasiswa aktif semester 1–6</li>
            <li>Surat rekomendasi dari ustadz/pembina tahfidz</li>
            <li>Mengikuti tes tahfidz dan wawancara</li>
            <li>Scan Kartu Tanda Mahasiswa (KTM)</li>
          </ul>
        </div>
      </div>

      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-semibold mb-2">Benefit</h3>
          <ul class="list-disc list-inside text-[var(--text-secondary)] space-y-1">
            <li>Bebas biaya kuliah penuh hingga semester 8</li>
            <li>Program pembinaan tahfidz dan karakter</li>
            <li>Asrama khusus tahfidz (jika tersedia)</li>
            <li>Sertifikat penghargaan</li>
          </ul>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-2">Tanggal Penting</h3>
          <ul class="text-[var(--text-secondary)]">
            <li>Pendaftaran Dibuka: <strong>1 Juli 2025</strong></li>
            <li>Pendaftaran Ditutup: <strong>15 Agustus 2025</strong></li>
            <li>Ujian Tahfidz: <strong>18 Agustus 2025</strong></li>
            <li>Pengumuman: <strong>25 Agustus 2025</strong></li>
          </ul>
        </div>
      </div>

      <div class="mt-10 flex justify-between items-center">
        <a href="{{ url('/beasiswa') }}" class="text-[var(--primary-color)] hover:underline text-sm">&larr; Kembali ke daftar beasiswa</a>
        <a href="{{ url('/formpendaftaran') }}" class="bg-[var(--primary-color)] text-white px-6 py-2 rounded-md text-sm font-medium hover:bg-opacity-90">Daftar Sekarang</a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-[var(--background-white)] border-t border-[var(--border-light)] py-6 mt-16">
    <div class="text-center text-sm text-[var(--text-secondary)]">
      © 2025 Sibeasiswaku. All rights reserved.
    </div>
  </footer>

</body>
</html>
