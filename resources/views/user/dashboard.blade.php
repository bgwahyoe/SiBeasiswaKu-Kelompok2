<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>Sibeasiswaku - Dashboard</title>
    <link rel="icon" href="{{ asset('img/sibeasiswaku.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
    <style type="text/tailwindcss">
        :root {
            --primary-color: #0c7ff2;
            --secondary-color: #e7edf4;
            --text-primary: #0d141c;
            --text-secondary: #49739c;
            --background-light: #f8fafc;
        }

        body {
            font-family: "Public Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-[var(--background-light)]">
    <div class="min-h-screen flex flex-col">

        @include('components.header')

        <main class="flex-1 px-6 py-10 my-24">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-[var(--text-primary)] mb-4">
                    Selamat Datang di Status Pendaftaran, {{ auth()->user()->name }}
                </h2>
                <p class="text-[var(--text-secondary)] text-base">
                    Halaman ini menampilkan status terkini dari semua pendaftaran beasiswa yang telah Anda ajukan.
                    Semangat !
                </p>

                <div class="mt-12">
                    <h3 class="text-xl font-bold text-[var(--text-primary)] mb-6">
                        Status Pendaftaran Beasiswa Anda
                    </h3>

                    <div class="space-y-6">

                        <!-- === STATUS: DITERIMA === -->
                        @foreach ($data as $item)
                            <div
                                class="p-6 bg-white rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition-all duration-300">
                                <div class="flex flex-col md:flex-row justify-between md:items-center gap-4">
                                    <div>
                                        <p class="text-lg font-semibold text-[var(--text-primary)]">
                                            {{ $item->beasiswa->nama }}</p>
                                        <p class="text-sm text-slate-500 mt-1">📅 Tanggal Pengajuan:
                                            {{ $item->beasiswa->created_at->format('d M Y') }}</p>
                                    </div>
                                    @if ($item->status == 'diajukan')
                                        <span
                                            class="px-4 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-700 border border-yellow-200">
                                            ⏳ Diajukan
                                        </span>
                                    @elseif ($item->status == 'diterima')
                                        <span
                                            class="px-4 py-1 rounded-full text-sm font-medium bg-emerald-100 text-emerald-700 border border-emerald-200">
                                            ⏳ Diterima
                                        </span>
                                    @elseif ($item->status == 'ditolak')
                                        <span
                                            class="px-4 py-1 rounded-full text-sm font-medium bg-rose-100 text-rose-700 border border-rose-200">
                                            ❌ Ditolak
                                        </span>
                                    @else
                                        <span
                                            class="px-4 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-700 border border-blue-200">
                                            ⏳ Diproses
                                        </span>
                                    @endif
                                </div>
                                @if ($item->status == 'diterima')
                                    {{-- Status Diterima: Pesan sukses dengan warna hijau --}}
                                    <p class="text-sm text-green-700 mt-3">
                                        <strong>Selamat!</strong> Pengajuan beasiswa Anda telah diterima. Silakan cek
                                        email Anda secara berkala untuk informasi mengenai proses pencairan dana.
                                    </p>
                                @elseif ($item->status == 'ditolak')
                                    {{-- Status Ditolak: Pesan penolakan dengan warna merah --}}
                                    <p class="text-sm text-red-700 mt-3">
                                        <strong>Mohon maaf,</strong> setelah melalui proses seleksi, pengajuan beasiswa
                                        Anda belum dapat kami terima saat ini. Terima kasih atas partisipasi Anda.
                                    </p>
                                @elseif ($item->status == 'diajukan')
                                    {{-- Status Diajukan: Masih menunggu verifikasi awal --}}
                                    <p class="text-sm text-amber-700 mt-3">
                                        Pengajuan beasiswa Anda telah berhasil dikirim dan sedang menunggu untuk
                                        diverifikasi oleh tim kami.
                                    </p>
                                @else
                                    {{-- Kondisi lain, diasumsikan "di proses" --}}
                                    <p class="text-sm text-blue-600 mt-3">
                                        Pengajuan beasiswa Anda sedang dalam <strong>proses peninjauan</strong>. Mohon untuk menunggu
                                        informasi selanjutnya.
                                    </p>
                                @endif

                                <!-- Timeline -->
                                <div class="mt-4 text-sm text-slate-500">
                                    <ul class="list-disc pl-5">
                                        <li>Wawancara: 5 Mei 2025</li>
                                        <li>Pengumuman: 10 Mei 2025</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>

        @component('components.footer')
        @endcomponent
    </div>
</body>

</html>
