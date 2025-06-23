<html><head>
<meta charset="utf-8"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B600%3B700%3B800%3B900" onload="this.rel='stylesheet'" rel="stylesheet"/>
<title>Sibeasiswaku - Scholarship Management</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style type="text/tailwindcss">
      :root {
        --primary-color: #0c7ff2;
        --secondary-color: #e7edf4;
        --text-primary: #0d141c;
        --text-secondary: #49739c;
        --background-light: #f8fafc;--background-dark: #0d141c;
        --accent-color: #f59e0b;}
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
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 bg-white/80 px-6 py-4 shadow-sm backdrop-blur-md md:px-10">
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
<button class="cta-button-primary hidden sm:flex"><span class="truncate">Login</span></button>
<button class="cta-button-secondary"><span class="truncate">Register</span></button>
<button class="md:hidden text-[var(--text-primary)] p-2">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,88H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
</button>
</div>
</header>
<main class="flex flex-1 flex-col">
<section class="relative hero-gradient bg-cover bg-center bg-no-repeat py-20 md:py-32">
<div class="absolute inset-0 bg-black/50"></div>
<div class="relative container mx-auto px-6 text-center text-white">
<h1 class="text-4xl font-extrabold leading-tight tracking-tight md:text-5xl lg:text-6xl drop-shadow-lg">Cari Beasiswa anda lebih mudah</h1>
<p class="mt-6 text-lg font-normal leading-relaxed md:text-xl max-w-2xl mx-auto drop-shadow-sm">
                Sibeasiswaku membantu siswa mendapatkan informasi dan melamar beasiswa secara online dengan cepat dan transparan
              </p>
<div class="mt-10 flex flex-wrap justify-center gap-4">
<button class="cta-button-primary !h-12 !px-6 !text-base"><a href="beasiswa.html">Lihat Beasiswa</a><span class="truncate"></span></button>
<button class="cta-button-secondary !h-12 !px-6 !text-base !bg-white/90 hover:!bg-white"><span class="truncate">Daftar Sekarang</span></button>
</div>
</div>
</section>
<section class="py-16 md:py-24 bg-slate-100">
<div class="container mx-auto px-6">
<h2 class="section-title">Fitur Utama</h2>
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
<div class="feature-card">
<div class="text-[var(--primary-color)] p-3 bg-blue-100 rounded-full">
<svg fill="currentColor" height="32px" viewBox="0 0 256 256" width="32px" xmlns="http://www.w3.org/2000/svg">
<path d="M251.76,88.94l-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V240a8,8,0,0,0,16,0V199.51a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12ZM128,200c-43.27,0-68.72-21.14-80-33.71V126.4l76.24,40.66a8,8,0,0,0,7.52,0L176,143.47v46.34C163.4,195.69,147.52,200,128,200Zm80-33.75a97.83,97.83,0,0,1-16,14.25V134.93l16-8.53ZM188,118.94l-.22-.13-56-29.87a8,8,0,0,0-7.52,14.12L171,128l-43,22.93L25,96,128,41.07,231,96Z"></path>
</svg>
</div>
<h3 class="text-[var(--text-primary)] text-lg font-semibold leading-tight">Info Beasiswa Aktif</h3>
<p class="text-[var(--text-secondary)] text-sm">Akses informasi terkini tentang beasiswa yang tersedia.</p>
</div>
<div class="feature-card">
<div class="text-[var(--primary-color)] p-3 bg-blue-100 rounded-full">
<svg fill="currentColor" height="32px" viewBox="0 0 256 256" width="32px" xmlns="http://www.w3.org/2000/svg">
<path d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Z"></path>
</svg>
</div>
<h3 class="text-[var(--text-primary)] text-lg font-semibold leading-tight">Registrasi Online</h3>
<p class="text-[var(--text-secondary)] text-sm">Daftar beasiswa dengan mudah melalui portal online kami.</p>
</div>
<div class="feature-card">
<div class="text-[var(--primary-color)] p-3 bg-blue-100 rounded-full">
<svg fill="currentColor" height="32px" viewBox="0 0 256 256" width="32px" xmlns="http://www.w3.org/2000/svg">
<path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path>
</svg>
</div>
<h3 class="text-[var(--text-primary)] text-lg font-semibold leading-tight">Periksa Status Seleksi</h3>
<p class="text-[var(--text-secondary)] text-sm">Lacak status aplikasi beasiswa Anda secara real-time.</p>
</div>

</section>
<section class="py-16 md:py-24 bg-[var(--background-light)]">
<div class="container mx-auto px-6">
<h2 class="section-title">Apa Kata Mereka</h2>
<div class="flex overflow-x-auto snap-x snap-mandatory [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden py-4 -mx-6 px-6">
<div class="flex items-stretch gap-6 snap-center">
<div class="testimonial-card">
<div class="w-full h-48 bg-center bg-no-repeat aspect-video bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBA7krKxHn42Gk4LJKeFer4VXwP7VeDU9rxzeaY6zi5ZnREiaovIYMAvI3WYnzbhWBDL0G8lXLfPvqSoaFgpe4aaRtrBGfR3iEwlipiVwofuYLqdsMvLmWwazWbEhsSIW8RvtdzM7ohZYxc2UpAPDcIbvZdAb27vxL673m-ErA4U78CfczAMB9-tvAKfVYiiSuAASAiFkJ1ZBbuUzBLpYqthdhgCcDCahfwZRvyebLk5Rcxu0VKFIs9WnXCS9CbRSkX1aDvRs7NCGMw");'></div>
<blockquote class="mt-2">
<p class="text-[var(--text-primary)] text-base font-medium leading-relaxed">
                        "Sibeasiswaku membuat pencarian dan pendaftaran beasiswa menjadi jauh lebih mudah."
                      </p>
</blockquote>
<p class="text-[var(--text-secondary)] text-sm font-normal leading-normal mt-auto pt-2 border-t border-slate-200">
                      Xabi Alonso, Coach Manager Student
                    </p>
</div>
<div class="testimonial-card">
<div class="w-full h-48 bg-center bg-no-repeat aspect-video bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXe1cuMxgzwMYJGxLwHDW-I_GNPmMZ6nSjN8MEFdu05Kj74Yn-E7NvS9wwjf8XLGa-QrVGHhHQ4Dne3yFpa01qSirNOVEuk-AEyAOSj1Q0SaYKaMW9rv03xEPjbb2oKNpzVeJIauAUMCWnOUST9dp7-Q2kWoSu7R3J5ciZBw8IHLpFRsCl5lXXhYtNPeKEl_IUtXQADhwEM42edrX9R5zjvO83XTHiheftxOnNRYed9ZGxQOhFJV0TWTB7ye7JBiatlff_tM8GmRNJ");'></div>
<blockquote class="mt-2">
<p class="text-[var(--text-primary)] text-base font-medium leading-relaxed">
                        "Aplikasi KELAZZZ dan nyampe."
                      </p>
</blockquote>
<p class="text-[var(--text-secondary)] text-sm font-normal leading-normal mt-auto pt-2 border-t border-slate-200">
                      Ole Romany, Profesional Football Student
                    </p>
</div>
<div class="testimonial-card">
<div class="w-full h-48 bg-center bg-no-repeat aspect-video bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDRbip8gJRtt07pgzMaFQ8-2kvR5BSoeebiLx3EN9rDGkn0H_8S4Fu_yQPjZIj2g_7wI6HQ_1i7bpJ6uZg7AXhYmQJivJR3mz0JullCkVgT5WcNo5h_P4wBIaYcl0Z-gy6OJPBx_TeEGrkNgiRIqmBEvkwyDHLi7mG48TJZIkvFIzp_7N8rnPqhhCFuW4J17TmINrNL_f1RwDJBwrePpgiTd-zMvFR7mqIwvadpIyyn6cngpO_BIRKhTqiG-feyo7h8S4a1al1x6KHX");'></div>
<blockquote class="mt-2">
<p class="text-[var(--text-primary)] text-base font-medium leading-relaxed">
                        "Platform ini mudah digunakan dan menyediakan semua informasi yang diperlukan di satu tempat."
                      </p>
</blockquote>
<p class="text-[var(--text-secondary)] text-sm font-normal leading-normal mt-auto pt-2 border-t border-slate-200">
                      Torik Halilintar, Arts Student
                    </p>
</div>
<div class="testimonial-card">
<div class="w-full h-48 bg-center bg-no-repeat aspect-video bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDbz_k1RZ5m_NofqcgcNLdiQg8zZo87w0rEgtFNjyDoaGpDGv83X7bNN_66_CcyUas_9hjx7ec5TE5ly2vnUNsKILsQ5cAeMNZba2tLgzYkBNfVQJfKlSDvim1PvBsPSAlk5Tcjzb4fsQ2NKdz7BdOMh6sRae0DtfHkB91Mxsc5xFJGqGxFTG3JztPh55TLlpSYCjGwCrtm8O9dj5itfg83fuBatt17tGR6sgNJ-w3nDDgGTSZXTlex_0o7szUv1vBSdEbfBQdCMGiP");'></div>
<blockquote class="mt-2">
<p class="text-[var(--text-primary)] text-base font-medium leading-relaxed">
                        "Platform yang fantastis! Sangat memudahkan pencarian beasiswa saya."
                      </p>
</blockquote>
<p class="text-[var(--text-secondary)] text-sm font-normal leading-normal mt-auto pt-2 border-t border-slate-200">
                      WAHIYU, CS Student
                    </p>
</div>
</div>
</div>
</div>
</section>
</main>
<footer class="bg-slate-800 text-slate-300 py-10">
<div class="container mx-auto px-6 text-center">
<div class="flex flex-wrap items-center justify-center gap-6 mb-6 @[480px]:flex-row @[480px]:justify-center">
<a class="hover:text-white transition-colors text-sm" href="#">Privacy Policy</a>
<a class="hover:text-white transition-colors text-sm" href="#">Terms of Service</a>
<a class="hover:text-white transition-colors text-sm" href="#">Contact Us</a>
</div>
<p class="text-sm">© 2025 Sibeasiswaku. All rights reserved.</p>
</div>
</footer>
</div>
</div>

</body></html>
