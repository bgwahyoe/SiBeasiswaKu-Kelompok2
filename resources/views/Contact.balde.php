<html><head>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B700%3B900" onload="this.rel='stylesheet'" rel="stylesheet"/>
<meta charset="utf-8"/>
<title>Sibeasiswaku - Contact Us</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style type="text/tailwindcss">
      :root {
        --primary-color: #0c7ff2;
        --secondary-color: #e7edf4;
        --text-primary: #0d141c;
        --text-secondary: #49739c;
        --background-primary: #ffffff;
        --background-secondary: #f8fafc;}
      body {
        font-family: "Public Sans", "Noto Sans", sans-serif;
      }
      .form-input {
        @apply w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[var(--text-primary)] focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] border border-[#cedbe8] bg-[var(--background-primary)] h-12 placeholder:text-[var(--text-secondary)] p-3 text-sm font-normal leading-normal transition-colors duration-200;
      }
      .form-label {
        @apply text-[var(--text-primary)] text-sm font-medium leading-normal pb-1.5;
      }
      .nav-link {
        @apply text-[var(--text-primary)] text-sm font-medium leading-normal hover:text-[var(--primary-color)] transition-colors duration-200;
      }
      .btn-primary {
        @apply flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[var(--primary-color)] text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-colors duration-200;
      }
      .section-title {
        @apply text-[var(--text-primary)] text-2xl font-bold leading-tight tracking-tight;
      }
      .contact-info-item {
        @apply col-span-2 grid grid-cols-subgrid border-t border-[var(--secondary-color)] py-4;
      }
      .contact-info-label {
        @apply text-[var(--text-secondary)] text-sm font-normal leading-normal;
      }
      .contact-info-value {
        @apply text-[var(--text-primary)] text-sm font-normal leading-normal;
      }
    </style>
</head>
<body class="bg-[var(--background-secondary)]">
<div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[var(--secondary-color)] bg-[var(--background-primary)] px-6 sm:px-10 py-4 shadow-sm sticky top-0 z-50">
<div class="flex items-center gap-3 text-[var(--text-primary)]">
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
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="nav-link" href="home.html">Home</a>
<a class="nav-link" href="beasiswa.html">Beasiswa</a>
<a class="nav-link" href="aboutus.html">About Us</a>
<a class="nav-link text-[var(--primary-color)] font-semibold" href="contact.html">Contact</a>
</nav>
<div class="flex items-center gap-4">
<button class="btn-primary">
<span class="truncate">Apply Now</span>
</button>
<button class="md:hidden text-[var(--text-primary)]">
<svg class="size-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</button>
</div>
</header>
<main class="px-4 sm:px-8 md:px-16 lg:px-24 xl:px-40 flex flex-1 justify-center py-8 md:py-12">
<div class="layout-content-container grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-16 max-w-6xl w-full">
<section class="bg-[var(--background-primary)] p-6 sm:p-8 rounded-xl shadow-lg">
<div class="mb-6">
<h1 class="text-[var(--text-primary)] tracking-tight text-3xl font-bold leading-tight mb-2">Hubungi kami</h1>
<p class="text-[var(--text-secondary)] text-base font-normal leading-relaxed">Ada pertanyaan atau butuh bantuan? Isi formulir di bawah ini, dan kami akan segera menghubungi Anda.</p>
</div>
<form class="space-y-6">
<div>
<label class="form-label" for="name">Name</label>
<input class="form-input" id="name" placeholder="Your Full Name" type="text"/>
</div>
<div>
<label class="form-label" for="email">Email</label>
<input class="form-input" id="email" placeholder="you@example.com" type="email"/>
</div>
<div>
<label class="form-label" for="subject">Subject</label>
<input class="form-input" id="subject" placeholder="Inquiry about..." type="text"/>
</div>
<div>
<label class="form-label" for="message">Message</label>
<textarea class="form-input min-h-32" id="message" placeholder="Write your message here..."></textarea>
</div>
<div class="flex justify-end">
<button class="btn-primary px-6 py-2.5" type="submit">
<span class="truncate">Send Message</span>
</button>
</div>
</form>
</section>
<section class="space-y-8">
<div class="bg-[var(--background-primary)] p-6 sm:p-8 rounded-xl shadow-lg">
<h2 class="section-title mb-6">Campus Contact Information</h2>
<div class="grid grid-cols-[auto_1fr] gap-x-4 gap-y-3">
<div class="flex items-center text-[var(--primary-color)]">
<svg class="size-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
<p class="contact-info-label font-medium">Email</p>
</div>
<a class="contact-info-value hover:text-[var(--primary-color)] transition-colors" href="mailto:support@sibeasiswaku.edu">support@sibeasiswaku.com</a>
<div class="flex items-center text-[var(--primary-color)]">
<svg class="size-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
<p class="contact-info-label font-medium">Phone</p>
</div>
<a class="contact-info-value hover:text-[var(--primary-color)] transition-colors" href="tel:+15551234567">+62 895-6048-49987</a>
<div class="flex items-center text-[var(--primary-color)] mt-1">
<svg class="size-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
<p class="contact-info-label font-medium">Address</p>
</div>
<p class="contact-info-value">Jalan Lenteng Agung Raya No.20, Kec. Jagakarsa, Kota Jakarta Selatan, DKI Jakarta 12640</p>
</div>
</div>
<div class="bg-[var(--background-primary)] p-1 rounded-xl shadow-lg">
<div class="w-full aspect-[16/10] rounded-lg overflow-hidden">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.635041446171!2d106.8326236!3d-6.352924499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1750403505270!5m2!1sid!2sid"
    width="100%"
    height="100%"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

</div>
</section>
</div>
</main>
<footer class="bg-[var(--text-primary)] text-slate-300 py-8 text-center mt-auto">
<div class="container mx-auto px-6">
<p class="text-sm">© 2024 Sibeasiswaku. All rights reserved.</p>
<p class="text-xs mt-1">Empowering students through accessible scholarship management.</p>
</div>
</footer>
</div>
</div>

</body></html>