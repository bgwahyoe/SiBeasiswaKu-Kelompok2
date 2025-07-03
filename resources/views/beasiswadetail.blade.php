<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Beasiswa - Sibeasiswaku</title>
  <link rel="icon" href="{{ asset('img/sibeasiswaku.png') }}">
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

    .konten-html h2 {
    font-size: 1.5em; /* 24px */
    font-weight: 600;
    margin-top: 1.5rem;
    margin-bottom: 1rem;
}

.konten-html h3 {
    font-size: 1.25em; /* 20px */
    font-weight: 600;
    margin-top: 1.25rem;
    margin-bottom: 0.75rem;
}

.konten-html p {
    margin-bottom: 1rem;
    line-height: 1.6;
}

.konten-html strong {
    font-weight: 700;
}

.konten-html a {
    color: #3b82f6; /* Biru */
    text-decoration: underline;
}

.konten-html ul {
    list-style-type: disc;
    margin-left: 1.5rem;
    margin-bottom: 1rem;
}

.konten-html ol {
    list-style-type: decimal;
    margin-left: 1.5rem;
    margin-bottom: 1rem;
}

.konten-html li {
    margin-bottom: 0.5rem;
}
  </style>
</head>
<body class="bg-[var(--background-light)] text-[var(--text-primary)]">

  <!-- Header -->
  @include('components.header')

  <!-- Detail Section -->
  <main class="py-16 px-4 md:px-8 bg-[var(--background-white)]">
    <div class="max-w-4xl mx-auto" >
      <!-- Gambar Beasiswa -->
      <div class="mb-8">
        <img src="{{ asset('storage/' . $bsw->gambar) }}" alt='{{ $bsw->nama }}' class="w-full h-auto object-contain rounded-lg shadow-sm">
      </div>

      <h2 class="text-3xl font-bold mb-4">{{$bsw->nama}}</h2>
      <p class="text-[var(--text-secondary)] mb-6 text-lg">Dibuka oleh: <span class="font-semibold text-[var(--text-primary)]">{{$bsw->penyedia}}</span></p>

      <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="konten-html">
                {!! $bsw->deskripsi !!}
            </div>
      </div>

      <div class="mt-10 flex justify-between items-center">
        <a href="{{ url('/beasiswa') }}" class="text-[var(--primary-color)] hover:underline text-sm">&larr; Kembali ke daftar beasiswa</a>
        <a href="{{ url('/formpendaftaran/' . $bsw->id) }}" class="bg-[var(--primary-color)] text-white px-6 py-2 rounded-md text-sm font-medium hover:bg-opacity-90">Daftar Sekarang</a>
      </div>
    </div>
  </main>

  @component('components.footer')
  @endcomponent

</body>
</html>
