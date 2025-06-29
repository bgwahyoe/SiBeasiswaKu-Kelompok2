<html>
  <head>
    <meta charset="utf-8" />
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link
      as="style"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B700%3B900"
      onload="this.rel='stylesheet'"
      rel="stylesheet"
    />
    <title>Sibeasiswaku - About Us</title>
    <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
      :root {
        --primary-color: #0c7ff2;
        --text-primary: #111827;
        --text-secondary: #4b5563;
        --text-hero: #ffffff;
        --background-light: #f9fafb;
        --background-white: #ffffff;
        --border-light: #e5e7eb;
        --border-dark: #d1d5db;
      }
      .hero-gradient {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.7) 100%
          ),
          url("https://lh3.googleusercontent.com/aida-public/AB6AXuA-yp5RJdyiPlyFwvCMZxziGulVBiM_xbrzC9y4J7xEvHDxH_yGiOW_1jWDRWPiGoo6IE6dFPzbM0UV2M32606S-Mkzc5vFAl_52PACja_8Ati8Iyh95laQ1-sL2_P5A_84A1FuWPL5mdD1He3CUihr_QvkQfj3RE_YBMZZd_QZK26qLGEAXahbYGOJVH04uk80GXrtidTy666x59aHpEE0tEQOkeBEYnP9XYKS0BTSihlrH2cC312RV5ljHAPW4LqtzR0gxcccLnvg");
      }
    </style>
  </head>
  <body
    class="bg-[var(--background-light)]"
    style="font-family: 'Public Sans', 'Noto Sans', sans-serif"
  >
    <div
      class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden"
    >
      <div class="layout-container flex h-full grow flex-col">
        @include('components.header')
        <main class="flex-1 my-24">
          <section
            class="hero-gradient flex min-h-[calc(100vh-80px)] items-center justify-center bg-cover bg-center py-16 px-4 md:py-24"
            id="hero"
          >
            <div class="container mx-auto max-w-4xl text-center">
              <h1
                class="text-[var(--text-hero)] text-4xl font-black leading-tight tracking-tight md:text-6xl"
              >
                Selamat Datang di Dashboard Sibeasiswaku!
              </h1>
              <p
                class="mt-6 text-lg font-normal leading-relaxed text-[var(--text-hero)] md:text-xl"
              >
                Selamat datang di Dashboard Sibeasiswaku! Melalui halaman ini,
                kamu bisa memantau seluruh proses pengajuan beasiswa, mulai dari
                pendaftaran, unggah dokumen, hingga pengumuman hasil. Kami hadir
                untuk mempermudah akses beasiswa bagi setiap mahasiswa yang
                berjuang meraih pendidikan terbaik. Pastikan data kamu selalu
                lengkap dan terbaru agar peluang lolos semakin besar. Mari
                wujudkan mimpi tanpa batas bersama Sibeasiswaku!
                <button
                  class="mt-10 flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-[var(--primary-color)] text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-colors mx-auto"
                >
                  <span class="truncate">Yuk, Mulai!</span>
                </button>
              </p>
            </div>
          </section>
          <section
            class="py-16 px-4 md:py-24 bg-[var(--background-white)]"
            id="about"
          >
            <div class="container mx-auto max-w-5xl">
              <div class="text-center mb-12">
                <h2
                  class="text-3xl font-bold text-[var(--text-primary)] tracking-tight md:text-4xl"
                >
                  Kenapa Memilih Sibeasiswaku?
                </h2>
                <p
                  class="mt-4 text-lg text-[var(--text-secondary)] max-w-3xl mx-auto"
                >
                  Sibeasiswaku hadir sebagai solusi cerdas untuk mengakses
                  berbagai program beasiswa secara mudah, cepat, dan transparan.
                  Dengan tampilan yang ramah pengguna, proses pendaftaran
                  menjadi lebih sederhana tanpa perlu berulang kali mengisi
                  data.
                </p>
              </div>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div
                  class="flex flex-col items-center gap-4 rounded-xl border border-[var(--border-light)] bg-[var(--background-light)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-12 rounded-full bg-[var(--primary-color)] text-white"
                  >
                    <svg
                      fill="currentColor"
                      height="28px"
                      viewBox="0 0 256 256"
                      width="28px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M216,40H136V24a8,8,0,0,0-16,0V40H40A16,16,0,0,0,24,56V176a16,16,0,0,0,16,16H79.36L57.75,219a8,8,0,0,0,12.5,10l29.59-37h56.32l29.59,37a8,8,0,1,0,12.5-10l-21.61-27H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,136H40V56H216V176ZM104,120v24a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0Zm32-16v40a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm32-16v56a8,8,0,0,1-16,0V88a8,8,0,0,1,16,0Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold text-[var(--text-primary)]">
                    Informasi Terpusat
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Akses data beasiswa lengkap yang sudah disesuaikan dengan
                    jurusan dan minat kamu.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center gap-4 rounded-xl border border-[var(--border-light)] bg-[var(--background-light)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-12 rounded-full bg-[var(--primary-color)] text-white"
                  >
                    <svg
                      fill="currentColor"
                      height="28px"
                      viewBox="0 0 256 256"
                      width="28px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold text-[var(--text-primary)]">
                    Versi sederhana
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Daftar ke banyak beasiswa sekaligus lewat satu tampilan yang
                    mudah digunakan, hemat waktu dan tenaga
                  </p>
                </div>
                <div
                  class="flex flex-col items-center gap-4 rounded-xl border border-[var(--border-light)] bg-[var(--background-light)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-12 rounded-full bg-[var(--primary-color)] text-white"
                  >
                    <svg
                      fill="currentColor"
                      height="28px"
                      viewBox="0 0 256 256"
                      width="28px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold text-[var(--text-primary)]">
                    Aman &amp; Terpercaya
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Kami memastikan data pribadi dan informasi keuanganmu tetap
                    aman dan terjaga kerahasiaannya.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 px-4 md:py-24 bg-[var(--background-light)]">
            <div class="container mx-auto max-w-5xl">
              <div class="text-center mb-12">
                <h2
                  class="text-3xl font-bold text-[var(--text-primary)] tracking-tight md:text-4xl"
                >
                  Manfaat untuk Admin Kampus
                </h2>
                <p
                  class="mt-4 text-lg text-[var(--text-secondary)] max-w-3xl mx-auto"
                >
                  Sibeasiswaku membantu admin kampus mengelola program beasiswa
                  dengan lebih efektif, mulai dari proses pendaftaran hingga
                  penyaluran beasiswa.
                </p>
              </div>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div
                  class="flex flex-col items-center gap-4 rounded-xl border border-[var(--border-light)] bg-[var(--background-white)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-12 rounded-full bg-[var(--primary-color)] text-white"
                  >
                    <svg
                      fill="currentColor"
                      height="28px"
                      viewBox="0 0 256 256"
                      width="28px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M136,80v43.47l36.12,21.67a8,8,0,0,1-8.24,13.72l-40-24A8,8,0,0,1,120,128V80a8,8,0,0,1,16,0Zm-8-48A95.44,95.44,0,0,0,60.08,60.15C52.81,67.51,46.35,74.59,40,82V64a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H72a8,8,0,0,0,0-16H49c7.15-8.42,14.27-16.35,22.39-24.57a80,80,0,1,1,1.66,114.75,8,8,0,1,0-11,11.64A96,96,0,1,0,128,32Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold text-[var(--text-primary)]">
                    Proses Otomatis
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Semua jadi lebih praktis! Pendaftaran, notifikasi, dan
                    laporan berjalan otomatis tanpa ribet.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center gap-4 rounded-xl border border-[var(--border-light)] bg-[var(--background-white)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-12 rounded-full bg-[var(--primary-color)] text-white"
                  >
                    <svg
                      fill="currentColor"
                      height="28px"
                      viewBox="0 0 256 256"
                      width="28px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M224,128a8,8,0,0,1-8,8H128a8,8,0,0,1,0-16h88A8,8,0,0,1,224,128ZM128,72h88a8,8,0,0,0,0-16H128a8,8,0,0,0,0,16Zm88,112H128a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16ZM82.34,42.34,56,68.69,45.66,58.34A8,8,0,0,0,34.34,69.66l16,16a8,8,0,0,0,11.32,0l32-32A8,8,0,0,0,82.34,42.34Zm0,64L56,132.69,45.66,122.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm0,64L56,196.69,45.66,186.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold text-[var(--text-primary)]">
                    Peninjauan Lebih Mudah
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Review calon penerima beasiswa jadi cepat dan rapi lewat
                    dashboard terpusat yang mudah digunakan.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center gap-4 rounded-xl border border-[var(--border-light)] bg-[var(--background-white)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-12 rounded-full bg-[var(--primary-color)] text-white"
                  >
                    <svg
                      fill="currentColor"
                      height="28px"
                      viewBox="0 0 256 256"
                      width="28px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-xl font-bold text-[var(--text-primary)]">
                    Analisis Data yang Jelas
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Lihat data penting seperti tren beasiswa dan profil
                    mahasiswa lewat grafik dan laporan yang mudah dipahami.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 px-4 md:py-24 bg-[var(--background-white)]">
            <div class="container mx-auto max-w-4xl">
              <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                <div>
                  <h2
                    class="text-3xl font-bold text-[var(--text-primary)] tracking-tight mb-4"
                  >
                    Visi Kami
                  </h2>
                  <p
                    class="text-lg text-[var(--text-secondary)] leading-relaxed"
                  >
                    Kami membayangkan masa depan di mana setiap pelajar memiliki
                    kesempatan yang sama untuk mendapatkan beasiswa, tanpa
                    memandang latar belakang atau kondisi mereka. Sibeasiswaku
                    berkomitmen untuk menghilangkan hambatan dan mewujudkan
                    pendidikan yang lebih adil dan inklusif.
                  </p>
                </div>
                <div>
                  <h2
                    class="text-3xl font-bold text-[var(--text-primary)] tracking-tight mb-4"
                  >
                    Misi Kami
                  </h2>
                  <p
                    class="text-lg text-[var(--text-secondary)] leading-relaxed"
                  >
                    Misi kami adalah menyediakan platform yang mudah digunakan
                    dan efisien untuk menghubungkan mahasiswa dengan berbagai
                    beasiswa yang mereka butuhkan guna meraih cita-cita akademik
                    mereka. Kami ingin memberdayakan siswa agar berani bermimpi
                    dan turut membangun masa depan yang lebih cerah.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 px-4 md:py-24 bg-[var(--background-light)]">
            <div class="container mx-auto max-w-5xl">
              <div class="text-center mb-12">
                <h2
                  class="text-3xl font-bold text-[var(--text-primary)] tracking-tight md:text-4xl"
                >
                  Kelebihan Dibanding Cara Manual
                </h2>
              </div>
              <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div
                  class="flex flex-col items-center gap-3 rounded-xl border border-[var(--border-light)] bg-[var(--background-white)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-10 rounded-full bg-[var(--primary-color)] text-white mb-2"
                  >
                    <svg
                      fill="currentColor"
                      height="24px"
                      viewBox="0 0 256 256"
                      width="24px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M136,80v43.47l36.12,21.67a8,8,0,0,1-8.24,13.72l-40-24A8,8,0,0,1,120,128V80a8,8,0,0,1,16,0Zm-8-48A95.44,95.44,0,0,0,60.08,60.15C52.81,67.51,46.35,74.59,40,82V64a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H72a8,8,0,0,0,0-16H49c7.15-8.42,14.27-16.35,22.39-24.57a80,80,0,1,1,1.66,114.75,8,8,0,1,0-11,11.64A96,96,0,1,0,128,32Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-lg font-bold text-[var(--text-primary)]">
                    Hemat Waktu
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Proses otomatis mengurangi pekerjaan manual dan menghemat
                    waktu berharga bagi mahasiswa maupun admin kampus.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center gap-3 rounded-xl border border-[var(--border-light)] bg-[var(--background-white)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-10 rounded-full bg-[var(--primary-color)] text-white mb-2"
                  >
                    <svg
                      fill="currentColor"
                      height="24px"
                      viewBox="0 0 256 256"
                      width="24px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-lg font-bold text-[var(--text-primary)]">
                    Lebih Akurat
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Menghindari kesalahan input data yang biasa terjadi saat
                    proses manual, sehingga informasi beasiswa lebih tepat.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center gap-3 rounded-xl border border-[var(--border-light)] bg-[var(--background-white)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-10 rounded-full bg-[var(--primary-color)] text-white mb-2"
                  >
                    <svg
                      fill="currentColor"
                      height="24px"
                      viewBox="0 0 256 256"
                      width="24px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M208,80H176V56a48,48,0,0,0-96,0V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80ZM96,56a32,32,0,0,1,64,0V80H96ZM208,208H48V96H208V208Zm-68-56a12,12,0,1,1-12-12A12,12,0,0,1,140,152Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-lg font-bold text-[var(--text-primary)]">
                    Keamanan Lebih Terjamin
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Data mahasiswa dilindungi dengan sistem keamanan yang kuat
                    dan kontrol akses yang ketat.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center gap-3 rounded-xl border border-[var(--border-light)] bg-[var(--background-white)] p-6 shadow-sm hover:shadow-lg transition-shadow"
                >
                  <div
                    class="flex items-center justify-center size-10 rounded-full bg-[var(--primary-color)] text-white mb-2"
                  >
                    <svg
                      fill="currentColor"
                      height="24px"
                      viewBox="0 0 256 256"
                      width="24px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"
                      ></path>
                    </svg>
                  </div>
                  <h3 class="text-lg font-bold text-[var(--text-primary)]">
                    Keputusan Berdasarkan Data
                  </h3>
                  <p class="text-center text-sm text-[var(--text-secondary)]">
                    Laporan dan analitik lengkap membantu memahami efektivitas
                    program beasiswa dan kebutuhan mahasiswa dengan lebih baik.
                  </p>
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
