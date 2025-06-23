<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beasiswa - Sibeasiswaku</title>
  <link crossorigin href="https://fonts.gstatic.com/" rel="preconnect"/>
  <link as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&family=Public+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <style type="text/tailwindcss">
    :root {
      --primary-color: #0c7ff2;
      --secondary-color: #e7edf4;
      --text-primary: #0d141c;
      --text-secondary: #49739c;
      --background-light: #f8fafc;
    }
    body {
      font-family: "Public Sans", "Noto Sans", sans-serif;
    }
    .nav-link {
      @apply text-[var(--text-primary)] text-sm font-medium leading-normal transition-colors hover:text-[var(--primary-color)];
    }
    .cta-button-primary {
      @apply bg-[var(--primary-color)] text-white px-4 py-2 rounded-lg font-semibold text-sm hover:bg-opacity-90;
    }
    .scholarship-card {
      @apply bg-white rounded-xl shadow-md p-6 border border-slate-200 flex flex-col justify-between transition hover:shadow-lg;
    }
  </style>
</head>
<body class="bg-[var(--background-light)] text-[var(--text-primary)]">
  <!-- Header -->
  <header class="sticky top-0 z-50 flex items-center justify-between border-b border-slate-200 bg-white/80 px-6 py-4 shadow-sm backdrop-blur-md md:px-10">
    <div class="flex items-center gap-3">
      <div class="size-7 text-[var(--primary-color)]">
        <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
        </svg>
      </div>
      <div class="flex items-center gap-2">
        <div class="text-[var(--primary-color)] text-2xl font-bold">🎓</div>
        <h1 class="font-bold text-xl">Sibeasiswaku</h1>
      </div>
    </div>
    <nav class="hidden md:flex items-center gap-8">
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
        <a class="nav-link" href="{{ url('/beasiswa') }}">Beasiswa</a>
        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </nav>
    <div class="flex items-center gap-3">
      <button class="cta-button-primary hidden sm:flex">Login</button>
      <button class="cta-button-primary bg-[var(--secondary-color)] text-[var(--text-primary)] hover:bg-slate-200">Register</button>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold mb-6 text-center">Daftar Beasiswa Tersedia</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Beasiswa 1 -->
      <div class="scholarship-card">
        <div>
          <h2 class="text-xl font-semibold mb-2">Beasiswa Unggulan Kemendikbud</h2>
          <p class="text-[var(--text-secondary)] text-sm mb-4">Untuk jenjang S1, S2, dan S3. Diperuntukkan bagi mahasiswa berprestasi dan guru.</p>
          <p class="text-sm font-medium text-slate-600">Deadline: 30 Juni 2025</p>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <a href="{{ url('/beasiswadetail') }}" class="text-[var(--primary-color)] text-sm font-medium hover:underline">Lihat Detail</a>
          <button class="cta-button-primary text-sm"><a href="{{ url('/formpendaftaran') }}">Daftar</a></button>
        </div>
      </div>

      <!-- Beasiswa 2 -->
      <div class="scholarship-card">
        <div>
          <h2 class="text-xl font-semibold mb-2">LPDP Reguler</h2>
          <p class="text-[var(--text-secondary)] text-sm mb-4">Diperuntukkan bagi warga negara Indonesia untuk studi S2 dan S3 dalam/luar negeri.</p>
          <p class="text-sm font-medium text-slate-600">Deadline: 15 Juli 2025</p>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <a href="beasiswa-detail.html" class="text-[var(--primary-color)] text-sm font-medium hover:underline">Lihat Detail</a>
          <button class="cta-button-primary text-sm"><a href="form_pendaftaran.html">Daftar</a></button>
        </div>
      </div>

      <!-- Beasiswa 3 -->
      <div class="scholarship-card">
        <div>
          <h2 class="text-xl font-semibold mb-2">Beasiswa Bidikmisi / KIP Kuliah</h2>
          <p class="text-[var(--text-secondary)] text-sm mb-4">Untuk mahasiswa kurang mampu secara ekonomi namun berprestasi akademik.</p>
          <p class="text-sm font-medium text-slate-600">Deadline: 20 Agustus 2025</p>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <a href="beasiswa-detail.html" class="text-[var(--primary-color)] text-sm font-medium hover:underline">Lihat Detail</a>
          <button class="cta-button-primary text-sm"><a href="form_pendaftaran.html">Daftar</a></button>
        </div>
      </div>
    </div>
  </main>

  <!-- Main Content -->
  <main class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Beasiswa 1 -->
      <div class="scholarship-card">
        <div>
          <h2 class="text-xl font-semibold mb-2">Beasiswa Unggulan Kemendikbud</h2>
          <p class="text-[var(--text-secondary)] text-sm mb-4">Untuk jenjang S1, S2, dan S3. Diperuntukkan bagi mahasiswa berprestasi dan guru.</p>
          <p class="text-sm font-medium text-slate-600">Deadline: 30 Juni 2025</p>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <a href="beasiswa-detail.html" class="text-[var(--primary-color)] text-sm font-medium hover:underline">Lihat Detail</a>
          <button class="cta-button-primary text-sm"><a href="form_pendaftaran.html">Daftar</a></button>
        </div>
      </div>

      <!-- Beasiswa 2 -->
      <div class="scholarship-card">
        <div>
          <h2 class="text-xl font-semibold mb-2">LPDP Reguler</h2>
          <p class="text-[var(--text-secondary)] text-sm mb-4">Diperuntukkan bagi warga negara Indonesia untuk studi S2 dan S3 dalam/luar negeri.</p>
          <p class="text-sm font-medium text-slate-600">Deadline: 15 Juli 2025</p>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <a href="beasiswa-detail.html" class="text-[var(--primary-color)] text-sm font-medium hover:underline">Lihat Detail</a>
          <button class="cta-button-primary text-sm"><a href="form_pendaftaran.html">Daftar</a></button>
        </div>
      </div>

      <!-- Beasiswa 3 -->
      <div class="scholarship-card">
        <div>
          <h2 class="text-xl font-semibold mb-2">Beasiswa Bidikmisi / KIP Kuliah</h2>
          <p class="text-[var(--text-secondary)] text-sm mb-4">Untuk mahasiswa kurang mampu secara ekonomi namun berprestasi akademik.</p>
          <p class="text-sm font-medium text-slate-600">Deadline: 20 Agustus 2025</p>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <a href="beasiswa-detail.html" class="text-[var(--primary-color)] text-sm font-medium hover:underline">Lihat Detail</a>
          <button class="cta-button-primary text-sm"><a href="form_pendaftaran.html">Daftar</a></button>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-slate-800 text-slate-300 py-10 mt-10">
    <div class="container mx-auto px-6 text-center">
      <div class="flex flex-wrap items-center justify-center gap-6 mb-6">
        <a class="hover:text-white transition-colors text-sm" href="#">Privacy Policy</a>
        <a class="hover:text-white transition-colors text-sm" href="#">Terms of Service</a>
        <a class="hover:text-white transition-colors text-sm" href="#">Contact Us</a>
      </div>
      <p class="text-sm">© 2025 Sibeasiswaku. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
