<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
    <link as="style" href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&family=Public+Sans%3Awght%40400%3B500%3B600%3B700%3B800%3B900" onload="this.rel='stylesheet'" rel="stylesheet"/>
    <title>Sibeasiswaku - Scholarship Management</title>
    {{-- <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/> --}}
    <link rel="icon" href="{{ asset('img/sibeasiswaku.png') }}">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
        :root {
            --primary-color: #0c7ff2;
            --secondary-color: #e7edf4;
            --text-primary: #0d141c;
            --text-secondary: #49739c;
            --background-light: #f8fafc;
            --background-dark: #0d141c;
            --accent-color: #f59e0b;
        }
        body {
            font-family: "Public Sans", "Noto Sans", sans-serif;
        }
        .hero-gradient {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDMoyCnf02bgD76rE6N8-Dc4IAcZYtPzE9Wk2WVYa2itEqwS3y7vFVgpWDHp4doXyOFiduZ_zrFB62cr0cZJ3DMrxjNI4ht_ukRKAseq2s_wxIwEmW9Ri0sbknDDK0q2KlenM8E1Z6qQMfPz6V5fpgAcgXU7BArCJ5D-BmhiLb9VFoRWPgyS9esFUh3Ip9OiioL2OLPZUeE6QZO-ZjrcMU8kuDvY7Wnqmcf8IrbvnVIptHcRz1aPI_npCLviWXUM3WNWA3IEksqlTjq");
        }
        .nav-link {
            @apply text-[var(--text-primary)] text-sm font-medium leading-normal transition-colors hover:text-[var(--primary-color)];
        }
        .cta-button-primary {
            @apply flex min-w-[120px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-5 text-sm font-semibold leading-normal tracking-[0.015em] transition-all bg-[var(--primary-color)] text-white hover:bg-opacity-90 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:ring-opacity-50;
        }
        .cta-button-secondary {
            @apply flex min-w-[120px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-5 text-sm font-semibold leading-normal tracking-[0.015em] transition-all bg-[var(--secondary-color)] text-[var(--text-primary)] hover:bg-slate-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-slate-300 focus:ring-opacity-50;
        }
        .feature-card {
            @apply flex flex-col items-center text-center gap-4 rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-lg transition-shadow duration-300;
        }
        .testimonial-card {
            @apply flex h-full flex-col gap-4 rounded-xl bg-white p-6 shadow-lg min-w-[280px] @[480px]:min-w-[320px] flex-shrink-0;
        }
        .section-title {
            @apply text-[var(--text-primary)] text-3xl font-bold leading-tight tracking-tight mb-8 text-center;
        }
    </style>
</head>
<body class="bg-[var(--background-light)]">
<div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden">
    <div class="layout-container flex h-full grow flex-col">
        @include('components.header')
        <main class="flex flex-1 flex-col pt-20 md:pt-24">
            <section class="relative hero-gradient bg-cover bg-center bg-no-repeat py-20 md:py-32">
                <div class="absolute inset-0 bg-black/50"></div>
                <div class="relative container mx-auto px-6 text-center text-white">
                    <h1 class="text-4xl font-extrabold leading-tight tracking-tight md:text-5xl lg:text-6xl drop-shadow-lg">Cari Beasiswa anda lebih mudah</h1>
                    <p class="mt-6 text-lg font-normal leading-relaxed md:text-xl max-w-2xl mx-auto drop-shadow-sm">
                        Sibeasiswaku membantu siswa mendapatkan informasi dan melamar beasiswa secara online dengan cepat dan transparan
                    </p>
                    <div class="mt-10 flex flex-wrap justify-center gap-4">
                        <a href="{{ url('/beasiswa') }}" class="cta-button-primary !h-12 !px-6 !text-base">Lihat Beasiswa</a>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-slate-100">
                <div class="container mx-auto px-6">
                    <h2 class="section-title">Fitur Utama</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl mx-auto">
                        <div class="feature-card">
                            <div class="text-[var(--primary-color)] p-3 bg-blue-100 rounded-full">
                                <svg fill="currentColor" height="32px" viewBox="0 0 256 256" width="32px" xmlns="http://www.w3.org/2000/svg"><path d="M251.76,88.94l-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V240a8,8,0,0,0,16,0V199.51a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12ZM128,200c-43.27,0-68.72-21.14-80-33.71V126.4l76.24,40.66a8,8,0,0,0,7.52,0L176,143.47v46.34C163.4,195.69,147.52,200,128,200Zm80-33.75a97.83,97.83,0,0,1-16,14.25V134.93l16-8.53ZM188,118.94l-.22-.13-56-29.87a8,8,0,0,0-7.52,14.12L171,128l-43,22.93L25,96,128,41.07,231,96Z"></path></svg>
                            </div>
                            <h3 class="text-[var(--text-primary)] text-lg font-semibold leading-tight">Info Beasiswa Aktif</h3>
                            <p class="text-[var(--text-secondary)] text-sm">Akses informasi terkini tentang beasiswa yang tersedia.</p>
                        </div>
                        <div class="feature-card">
                            <div class="text-[var(--primary-color)] p-3 bg-blue-100 rounded-full">
                                <svg fill="currentColor" height="32px" viewBox="0 0 256 256" width="32px" xmlns="http://www.w3.org/2000/svg"><path d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Z"></path></svg>
                            </div>
                            <h3 class="text-[var(--text-primary)] text-lg font-semibold leading-tight">Registrasi Online</h3>
                            <p class="text-[var(--text-secondary)] text-sm">Daftar beasiswa dengan mudah melalui portal online kami.</p>
                        </div>
                        <div class="feature-card">
                            <div class="text-[var(--primary-color)] p-3 bg-blue-100 rounded-full">
                                <svg fill="currentColor" height="32px" viewBox="0 0 256 256" width="32px" xmlns="http://www.w3.org/2000/svg"><path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path></svg>
                            </div>
                            <h3 class="text-[var(--text-primary)] text-lg font-semibold leading-tight">Periksa Status Seleksi</h3>
                            <p class="text-[var(--text-secondary)] text-sm">Lacak status aplikasi beasiswa Anda secara real-time.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-[var(--background-light)]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12 text-[var(--text-primary)]">Apa Kata Mereka</h2>

                <div class="flex flex-wrap justify-center gap-6 px-6">

                <!-- Testimoni 1 -->
                <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col w-80 min-w-[18rem] hover:shadow-lg transition-shadow duration-300 snap-center">
                    <div class="w-full h-48 bg-center bg-cover rounded-xl mb-4" style="background-image: url('https://i.pravatar.cc/300?img=47');"></div>
                    <blockquote class="flex-1">
                    <p class="text-gray-700 text-base font-medium leading-relaxed italic">"Sibeasiswaku sangat membantu saya menemukan beasiswa yang sesuai dengan jurusan dan prestasi saya. Fitur pendaftaran yang mudah digunakan dan informasinya selalu terbaru."</p>
                    </blockquote>
                    <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-gray-800 font-semibold">Amelia Putri</p>
                    <p class="text-sm text-gray-500">Mahasiswa Akuntansi - Universitas Indonesia</p>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col w-80 min-w-[18rem] hover:shadow-lg transition-shadow duration-300 snap-center">
                    <div class="w-full h-48 bg-center bg-cover rounded-xl mb-4" style="background-image: url('https://i.pravatar.cc/300?img=12');"></div>
                    <blockquote class="flex-1">
                    <p class="text-gray-700 text-base font-medium leading-relaxed italic">"Awalnya saya bingung mencari beasiswa setelah lulus SMA. Tapi sejak pakai Sibeasiswaku, semua terasa jelas dan saya berhasil lolos."</p>
                    </blockquote>
                    <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-gray-800 font-semibold">Muhammad Rizky</p>
                    <p class="text-sm text-gray-500">Lulusan SMA – Penerima Beasiswa Prestasi</p>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col w-80 min-w-[18rem] hover:shadow-lg transition-shadow duration-300 snap-center">
                    <div class="w-full h-48 bg-center bg-cover rounded-xl mb-4" style="background-image: url('https://i.pravatar.cc/300?img=32');"></div>
                    <blockquote class="flex-1">
                    <p class="text-gray-700 text-base font-medium leading-relaxed italic">"Platform ini memberikan arahan lengkap dalam proses pendaftaran. Sangat cocok untuk pelamar beasiswa riset seperti saya."</p>
                    </blockquote>
                    <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-gray-800 font-semibold">Citra Ramadhani</p>
                    <p class="text-sm text-gray-500">Mahasiswa Pascasarjana – Penerima Beasiswa Riset</p>
                    </div>
                </div>

                </div>
            </div>
            </section>

        </main>
        @component('components.footer')
        @endcomponent
    </div>
</div>

</body>
</html>
