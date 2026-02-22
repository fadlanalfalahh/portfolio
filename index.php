<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
   <!-- Icon remixicon -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" crossorigin="">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">

   <title>Fadlan Al Falah Baihaqi – Portfolio</title>
</head>

<body>
   <!-- Header -->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="#" class="nav__logo">
            <span class="nav__logo-circle">F</span>
            <span class="nav_logo-name">Fadlan Al Falah Baihaqi.</span>
         </a>

         <div class="nav__menu" id="nav-menu">
            <span class="nav__title">Menu</span>

            <h3 class="nav__name">Fadlan</h3>

            <ul class="nav__list">
               <li class="nav__item">
                  <a href="#home" class="nav__link active-link">Beranda</a>
               </li>

               <li class="nav__item">
                  <a href="#about" class="nav__link">Tentang Saya</a>
               </li>

               <li class="nav__item">
                  <a href="#services" class="nav__link">Layanan</a>
               </li>

               <li class="nav__item">
                  <a href="#projects" class="nav__link">Projects</a>
               </li>

               <li class="nav__item">
                  <a href="#contact" class="nav__link nav__link-button">Kontak</a>
               </li>
            </ul>

            <!-- Close button -->
            <div class="nav__close" id="nav-close">
               <i class="ri-close-line"></i>
            </div>
         </div>

         <div class="nav__buttons">
            <!-- Theme button -->
            <i class="ri-moon-line change-theme" id="theme-button"></i>

            <!-- Toogle button -->
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-4-line"></i>
            </div>
         </div>
      </nav>
   </header>

   <!-- Main -->
   <main class="main">
      <!-- Home -->
      <section class="home section" id="home">
         <div class="home__container container grid">
            <h1 class="home__name">
               Fadlan Al Falah Baihaqi
            </h1>

            <div class="home__perfil">
               <div class="home__image">
                  <img src="assets/img/home-perfil.jpg" alt="image" class="home__img">
                  <div class="home__shadow"></div>

                  <img src="assets/img/curved-arrow.svg" alt="" class="home__arrow">
                  <img src="assets/img/random-lines.svg" alt="" class="home__line">

                  <div class="geometric-box"></div>
               </div>

               <div class="home__social">
                  <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                     <i class="ri-instagram-line"></i>
                  </a>

                  <a href="https://www.linkedin.com/" target="_blank" class="home__social-link">
                     <i class="ri-linkedin-box-line"></i>
                  </a>

                  <a href="https://github.com/" target="_blank" class="home__social-link">
                     <i class="ri-github-line"></i>
                  </a>
               </div>
            </div>

            <div class="home__info">
               <p class="home__description">
                  <b>Full-Stack Developer</b> dengan pengalaman dalam pengembangan aplikasi web,
                  mobile, dan integrasi API. Saya menghadirkan solusi yang rapi, cepat, dan
                  berkualitas untuk kebutuhan bisnis.
               </p>

               <div class="home__buttons">
                  <a href="uploads/cv/CV Fadlan Al Falah Baihaqi.pdf" class="button" download>
                     <i class="ri-download-2-line"></i> Download CV
                  </a>
               </div>

               <a href="#about" class="home__scroll">
                  <div class="home__scroll-box">
                     <i class="ri-arrow-down-s-line"></i>
                  </div>

                  <span class="home__scroll-text">
                     Scroll Down
                  </span>
               </a>
            </div>
         </div>
      </section>

      <!-- About -->
      <section class="about section" id="about">
         <div class="about__container container grid">
            <h2 class="section__title-1">
               <span>Tentang Saya.</span>
            </h2>

            <div class="about__perfil">
               <div class="about__image">
                  <img src="assets/img/about-perfil.jpg" alt="image" class="about__img">

                  <div class="about__shadow"></div>

                  <div class="geometric-box"></div>
                  <img src="assets/img/random-lines.svg" alt="" class="about__line">
                  <div class="about__box"></div>
               </div>
            </div>

            <div class="about__info">
               <p class="about__description">
                  Saya berpengalaman dalam membangun <b>aplikasi web</b>, <b>aplikasi mobile</b>, serta <b>pengembangan dan integrasi API</b> dengan fokus pada kemudahan penggunaan dan efisiensi untuk kebutuhan bisnis.
               </p>

               <ul class="about__list">
                  <li class="about__item">
                     <i class="ri-php-line" role="img" aria-label="PHP"></i>
                  </li>
                  <li class="about__item">
                     <i class="ri-javascript-line" role="img" aria-label="JavaScript"></i>
                  </li>
                  <li class="about__item">
                     <i class="ri-flutter-line" role="img" aria-label="Flutter"></i>
                  </li>
               </ul>

               <div class="about__buttons">
                  <a href="#contact" class="button">
                     <i class="ri-send-plane-line"></i> Kontak
                  </a>
               </div>
            </div>
         </div>
      </section>

      <!-- Services -->
      <section class="services section" id="services">
         <h2 class="section__title-2">
            <span>Layanan.</span>
         </h2>

         <div class="services__container container grid">

            <article class="services__card">
               <div class="services__border"></div>

               <div class="services__content">
                  <div class="services__icon">
                     <div class="services__box"></div>
                     <i class="ri-layout-4-line"></i>
                  </div>

                  <h2 class="services__title">Web Application</h2>

                  <p class="services__description">
                     Pembuatan aplikasi web yang responsif dan cepat, dengan dashboard
                     fungsional dan alur kerja yang efisien.
                  </p>
               </div>
            </article>

            <article class="services__card">
               <div class="services__border"></div>

               <div class="services__content">
                  <div class="services__icon">
                     <div class="services__box"></div>
                     <i class="ri-code-box-line"></i>
                  </div>

                  <h2 class="services__title">Backend & API</h2>

                  <p class="services__description">
                     Pengembangan REST API dan struktur database MySQL yang optimal untuk
                     kebutuhan sistem web dan mobile.
                  </p>
               </div>
            </article>

            <article class="services__card mobile-app">
               <div class="services__border"></div>

               <div class="services__content">
                  <div class="services__icon">
                     <div class="services__box"></div>
                     <i class="ri-smartphone-line"></i>
                  </div>

                  <h2 class="services__title">Mobile App Development</h2>

                  <p class="services__description">
                     Pembuatan aplikasi mobile Flutter yang terintegrasi API, ringan,
                     dan mudah digunakan untuk kebutuhan bisnis.
                  </p>
               </div>
            </article>

         </div>
      </section>

      <!-- Projects -->
      <section class="projects section" id="projects">
         <h2 class="section__title-1">
            <span>Projects.</span>
         </h2>

         <div class="projects__filters container">
            <button type="button" class="projects__filter is-active" data-filter="all">Semua</button>
            <button type="button" class="projects__filter" data-filter="website">Website</button>
            <button type="button" class="projects__filter" data-filter="app">App</button>
         </div>

         <div class="projects__container container grid">
            <article class="projects__card" data-category="website">
               <div class="projects__image">
                  <img src="assets/img/project-1.png" alt="image" class="projects__img">

                  <a href="https://incleenautocare.com/" class="projects__button button">
                     <i class="ri-arrow-right-up-line"></i>
                  </a>
               </div>

               <div class="projects__content">
                  <h3 class="projects__subtitle">Website</h3>
                  <h2 class="projects__title">Incleen Auto Care</h2>

                  <p class="projects__description">
                     Pengembangan landing page, admin panel, dan halaman linktree dengan desain
                     responsif serta struktur yang rapi sesuai kebutuhan Incleen Auto Care.
                  </p>
               </div>

               <div class="projects__buttons">
                  <a href="https://github.com/" target="_blank" class="projects__link">
                     <i class="ri-github-line"></i> Lihat
                  </a>
               </div>
            </article>

            <articel class="projects__card" data-category="website">
               <div class="projects__image">
                  <img src="assets/img/project-2.png" alt="image" class="projects__img">

                  <!-- <a href="#" class="projects__button button">
                     <i class="ri-arrow-right-up-line"></i>
                  </a> -->
               </div>

               <div class="projects__content">
                  <h3 class="projects__subtitle">Website</h3>
                  <h2 class="projects__title">Rexsy Collection</h2>

                  <p class="projects__description">
                     Sistem manajemen stok untuk perusahaan konveksi busana bayi, digunakan untuk mencatat dan memantau data barang masuk dan keluar.
                  </p>
               </div>

               <div class="projects__buttons">
                  <a href="https://github.com/" target="_blank" class="projects__link">
                     <i class="ri-github-line"></i> Lihat
                  </a>
               </div>
            </articel>

            <articel class="projects__card" data-category="app">
               <div class="projects__image">
                  <img src="assets/img/project-3.png" alt="image" class="projects__img">

                  <!-- <a href="#" class="projects__button button">
                     <i class="ri-arrow-right-up-line"></i>
                  </a> -->
               </div>

               <div class="projects__content">
                  <h3 class="projects__subtitle">App</h3>
                  <h2 class="projects__title">Laundry</h2>

                  <p class="projects__description">
                     Laundry App berbasis Flutter yang digunakan oleh kios laundry untuk mengelola paket cuci (berat dan satuan), transaksi, cetak struk, serta laporan pendapatan.
                  </p>
               </div>

               <div class="projects__buttons">
                  <a href="https://github.com/" target="_blank" class="projects__link">
                     <i class="ri-github-line"></i> Lihat
                  </a>
               </div>
            </articel>
         </div>
      </section>

      <!-- Contact -->
      <section class="contact section" id="contact">
         <div class="contact__container grid">
            <div class="contact__data">
               <h2 class="section__title-2">
                  <span>Kontak Saya.</span>
               </h2>

               <p class="contact__description-1">
                  Saya membaca semua pesan dari Anda. Silakan kirim apa pun yang ingin ditanyakan, dan saya akan membalas secepat mungkin.
               </p>

               <p class="contact__description-2">
                  Harap cantumkan <b>Nama</b> dan <b>Email</b> Anda. Saya hanya menggunakan data tersebut untuk membalas pesan.
               </p>

               <div class="geometric-box"></div>
            </div>

            <div class="contact__mail">
               <h2 class="contact__title">
                  Kirimkan Pesan Anda
               </h2>

               <form action="" class="contact__form" id="contact-form">
                  <div class="contact__group">
                     <div class="contact__box">
                        <input type="text" name="user_name" class="contact__input" id="name" required placeholder="Nama Lengkap">
                        <label for="name" class="contact__label">Nama Lengkap</label>
                     </div>

                     <div class="contact__box">
                        <input type="email" name="user_email" class="contact__input" id="email" required placeholder="Email">
                        <label for="email" class="contact__label">Email</label>
                     </div>
                  </div>

                  <div class="contact__box">
                     <input type="text" name="user_subject" class="contact__input" id="subject" required placeholder="Subjek">
                     <label for="subject" class="contact__label">Subjek</label>
                  </div>

                  <div class="contact__box contact__area">
                     <textarea name="user_message" id="message" class="contact__input" required placeholder="Pesan"></textarea>
                     <label for="message" class="contact__label">Pesan</label>
                  </div>

                  <p class="contact__message" id="contact-message"></p>

                  <button type="submit" class="contact__button button">
                     <i class="ri-send-plane-line"></i> Kirim Pesan
                  </button>
               </form>
            </div>

            <div class="contact__social">
               <img src="assets/img/curved-arrow.svg" alt="" class="contact__social-arrow">

               <div class="contact__social-data">
                  <div>
                     <p class="contact__social-description-1">
                        Tidak ingin mengirim email?
                     </p>
                     <p class="contact__social-description-2">
                        Anda bisa menghubungi saya lewat media sosial.
                     </p>
                  </div>

                  <div class="contact__social-links">
                     <a href="https://www.facebook.com/" target="_blank" class="contact__social-link">
                        <i class="ri-facebook-line"></i>
                     </a>

                     <a href="https://www.instagram.com/" target="_blank" class="contact__social-link">
                        <i class="ri-instagram-line"></i>
                     </a>

                     <a href="https://www.linkedin.com/" target="_blank" class="contact__social-link">
                        <i class="ri-linkedin-box-line"></i>
                     </a>
                  </div>
               </div>
            </div>

         </div>
      </section>
   </main>

   <!-- Footer -->
   <footer class="footer">
      <div class="footer__container container grid">
         <ul class="footer__links">
            <li>
               <a href="#about" class="footer__link">Tentang Saya</a>
            </li>

            <li>
               <a href="#services" class="footer__link">Layanan</a>
            </li>

            <li>
               <a href="#projects" class="footer__link">Project</a>
            </li>
         </ul>

         <span class="footer__copy">
            &#169; All Rights Reserved By
            <a href="#">Fadlan Al Falah Baihaqi.</a>
         </span>
      </div>
   </footer>

   <!-- Scroll up -->
   <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-s-line"></i>
   </a>

   <!-- Scrollreveal -->
   <script src="assets/js/scrollreveal.min.js"></script>

   <!-- Email js -->
   <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
   </script>

   <!-- Script js -->
   <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>

</html>
