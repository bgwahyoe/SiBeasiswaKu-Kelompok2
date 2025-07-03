<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Beasiswa - Sibeasiswaku</title>
  <link rel="icon" href="{{ asset('img/sibeasiswaku.png') }}">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;600;700&display=swap" rel="stylesheet" />

  {{-- WAJIB ADA: Alpine.js untuk interaktivitas menu di header --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style type="text/tailwindcss">
    :root {
      --primary-color: #0c7ff2;
      --text-primary: #111827;
      --text-secondary: #4b5563;
      --background-light: #f9fafb;
      --background-white: #ffffff;
      --border-light: #e5e7eb;
    }

    body {
      font-family: 'Public Sans', sans-serif;
      /* PERBAIKAN 1: Beri ruang di atas untuk header yang fixed */
      padding-top: 68px;
    }

    .nav-link {
      @apply text-[var(--text-primary)] text-sm font-medium hover:text-[var(--primary-color)] transition;
    }

    /* Styling untuk konten dari database (WYSIWYG Editor) */
    .konten-html h2 { @apply text-2xl font-semibold mt-6 mb-4; }
    .konten-html h3 { @apply text-xl font-semibold mt-5 mb-3; }
    .konten-html p { @apply mb-4 leading-relaxed; }
    .konten-html strong { @apply font-bold; }
    .konten-html a { @apply text-blue-600 underline; }
    .konten-html ul { @apply list-disc pl-5 mb-4; }
    .konten-html ol { @apply list-decimal pl-5 mb-4; }
    .konten-html li { @apply mb-2; }
  </style>
</head>
<body class="bg-[var(--background-light)] text-[var(--text-primary)]">

  {{-- Pastikan Anda menggunakan file header.blade.php yang sudah diperbaiki dari jawaban sebelumnya --}}
  @include('components.header')

  {{-- PERBAIKAN 2: Tambahkan class 'relative z-10' untuk memastikan konten berada di bawah header (z-40) --}}
  <main class="py-12 md:py-16 px-4 md:px-8 bg-[var(--background-white)] relative z-10">
    <div class="max-w-4xl mx-auto">

      <div class="mb-8">
        <img src="{{ asset('storage/' . $bsw->gambar) }}" alt='{{ $bsw->nama }}' class="w-full h-auto max-h-[400px] object-cover rounded-lg shadow-lg border border-[var(--border-light)]">
      </div>

      <h1 class="text-3xl md:text-4xl font-bold mb-3 text-[var(--text-primary)]">{{$bsw->nama}}</h1>
      <p class="text-[var(--text-secondary)] mb-8 text-base">Dibuka oleh: <span class="font-semibold text-[var(--text-primary)]">{{$bsw->penyedia}}</span></p>

      <div class="prose max-w-none text-[var(--text-secondary)] konten-html">
        {!! $bsw->deskripsi !!}
      </div>

      <div class="mt-10 pt-6 border-t border-[var(--border-light)] flex flex-col sm:flex-row justify-between items-center gap-4">
        <a href="{{ url('/beasiswa') }}" class="text-[var(--primary-color)] font-medium hover:underline text-sm">&larr; Kembali ke daftar beasiswa</a>
        <a href="{{ url('/formpendaftaran/' . $bsw->id) }}" class="w-full sm:w-auto bg-[var(--primary-color)] text-white text-center px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition-colors">
          Daftar Sekarang
        </a>
      </div>
    </div>
  </main>

  @include('components.footer')

</body>
</html>
