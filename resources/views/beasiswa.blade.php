<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beasiswa - Sibeasiswaku</title>
  <link rel="icon" href="{{ asset('img/sibeasiswaku.png') }}">
  <link crossorigin href="https://fonts.gstatic.com/" rel="preconnect"/>
  <link as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&family=Public+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>

  {{-- Tailwind CSS --}}
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

  {{-- WAJIB ADA: Alpine.js untuk interaktivitas menu --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
      /* Tambahkan padding-top untuk memberi ruang bagi header yang fixed */
      padding-top: 68px;
    }
    .nav-link {
      @apply text-[var(--text-primary)] text-sm font-medium leading-normal transition-colors hover:text-[var(--primary-color)];
    }
    .cta-button-primary {
      @apply bg-[var(--primary-color)] text-white px-4 py-2 rounded-lg font-semibold text-sm hover:bg-opacity-90;
    }
    .scholarship-card {
      @apply bg-white rounded-xl shadow-md p-6 border border-slate-200 flex flex-col justify-between transition hover:shadow-lg;
      /* Pastikan kartu tidak memiliki z-index yang lebih tinggi dari header */
      position: relative;
      z-index: 1;
    }
  </style>
</head>
<body class="bg-[var(--background-light)] text-[var(--text-primary)]">

  @include('components.header')

  <main class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold mb-6 text-center">Daftar Beasiswa Tersedia</h1>
    <p class="text-center text-[var(--text-secondary)] mb-8 max-w-2xl mx-auto">
      Temukan berbagai peluang beasiswa yang bisa kamu daftar. Klik "Lihat Detail" untuk mengetahui syarat, benefit, dan jadwal penting masing-masing beasiswa.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      {{-- Contoh loop data dari Laravel --}}
      @foreach ($beasiswa as $bsw)
        <div class="scholarship-card">
          <div>
            <img src="{{ asset('storage/' . $bsw->gambar) }}" alt="{{ $bsw->nama }}" class="w-full h-40 object-cover rounded-md mb-4">
            <h2 class="text-xl font-semibold mb-2">{{ $bsw->nama }}</h2>
            <p class="text-[var(--text-secondary)] text-sm mb-4">Diberikan kepada siswa atau mahasiswa dengan prestasi akademik tinggi.</p>
            <p class="text-sm font-medium text-slate-600">Deadline: {{$bsw->batas_akhir}}</p>
          </div>
          <div class="mt-6 flex justify-between items-center">
            <a href="{{ url('/beasiswa/' . $bsw->id) }}" class="text-[var(--primary-color)] text-sm font-medium hover:underline">Lihat Detail</a>
            <a href="{{ url('/formpendaftaran/' . $bsw->id) }}" class="cta-button-primary">Daftar</a>
          </div>
        </div>
      @endforeach

    </div>
  </main>

  {{-- @include('components.footer') --}}

</body>
</html>
