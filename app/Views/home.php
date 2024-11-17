
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Landing Page PJBL</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?= base_url('template/assets/img/logo-ipb.png'); ?>" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('template2/assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('template2/assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?=base_url('template2/assets/vendor/aos/aos.css');?>" rel="stylesheet">
  <link href="<?=base_url('template2/assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('template2/assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?=base_url('template2/assets/css/main.css');?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="<?= base_url('template/assets/img/logo-ipb.png'); ?>" alt="">
        <h1 class="sitename">PJBL</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Fitur Utama</a></li>
          <li><a href="#team">Kelompok</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>Selamat Datang di Website Kami</h1>
            <p>Kami adalah kelompok akuntan berbakat yang membuat website ini</p>
            <div class="d-flex">
            <a href="<?= base_url('register'); ?>" class="btn-get-started">Mulai</a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img">
            <img src="<?=base_url('template2/assets/img/hero-img.png');?>" class="img-fluid" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?=base_url('template/assets/img/barudak.jpeg');?>" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>Tentang Kami</h3>
          <h2>Kami adalah mahasiswa akuntansi IPB yang berupaya menciptakan platform untuk pengelolaan keuangan.</h2>
          <p>
            Selamat datang di platform kami! Website ini dikembangkan sebagai tugas besar mata kuliah <b>Project-Based Learning (PjBL)</b> oleh mahasiswa <b>Departemen Akuntansi IPB University</b>. Menggabungkan teori akuntansi dan teknologi, platform ini menyediakan pengalaman praktis dalam pengelolaan keuangan.
          </p>
          <p id="about-readmore" style="display:none;">
            Kami bertujuan untuk memberikan solusi belajar yang aplikatif dan berguna bagi mahasiswa, dosen, dan masyarakat luas. Fitur utama meliputi pencatatan penjualan, pencatatan pembayaran, pencatatan utang, serta dashboard interaktif untuk analisis keuangan. Dengan dukungan fitur ini, pengguna diharapkan dapat lebih memahami proses keuangan secara efisien.
          </p>
          <div class="text-center text-lg-start">
            <a href="javascript:void(0);" id="read-more-btn" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center" onclick="toggleReadMore()">
              <span>Baca Selengkapnya</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  function toggleReadMore() {
    const readMoreContent = document.getElementById("about-readmore");
    const readMoreBtn = document.getElementById("read-more-btn");
    
    if (readMoreContent.style.display === "none") {
      readMoreContent.style.display = "block";
      readMoreBtn.innerHTML = '<span>Tutup</span><i class="bi bi-arrow-up"></i>';
    } else {
      readMoreContent.style.display = "none";
      readMoreBtn.innerHTML = '<span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>';
    }
  }
</script>


  <!-- Services Section -->
  <section id="services" class="services section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Fitur Utama</h2>
  <p>Website Kami menyediakan beberapa fitur utama sebagai berikut</p>
</div><!-- End Section Title -->

<div class="container">

<div class="row gy-4">

<!-- Pencatatan Penjualan -->
<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
<div class="service-item position-relative">
<div class="icon"><i class="bi bi-cart"></i></div>
<h4><a href="<?= base_url('register'); ?>"class="stretched-link">Pencatatan Kas Masuk</a></h4>
<p> Fitur khusus untuk mencatat transaksi kas masuk dengan mudah dan terorganisir</p>
</div>
</div><!-- End Service Item -->

<!-- Pencatatan Pembayaran -->
<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
<div class="service-item position-relative">
<div class="icon"><i class="bi bi-currency-dollar"></i></div>
<h4><a href="<?= base_url('register'); ?>" class="stretched-link">Pencatatan Kas Keluar</a></h4>
<p>Sistem pencatatan kas keluar untuk memudahkan pelacakan dan pengelolaan arus kas</p>
</div>
</div><!-- End Service Item -->

<!-- Laporan -->
<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
<div class="service-item position-relative">
<div class="icon"><i class="bi bi-clipboard-data"></i></div>
<h4><a href="<?= base_url('register'); ?>" class="stretched-link">Laporan</a></h4>
<p>Fitur laporan yang memungkinkan Anda untuk melihat dan menganalisis transaksi keuangan secara terperinci, termasuk pengelolaan kas, utang, dan piutang untuk kemudahan dalam membuat keputusan finansial.</p>
  </div>
</div><!-- End Service Item -->

<!-- Dashboard -->
<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
<div class="service-item position-relative">
<div class="icon"><i class="bi bi-grid"></i></div>
<h4<a href="<?= base_url('register'); ?>" class="stretched-link">Dashboard Interaktif</a></h4>
<p>Tampilan visual dari data yang telah dicatat untuk memudahkan analisis keuangan</p>
</div>
</div><!-- End Service Item -->

</div>

</div>

</section><!-- /Services Section -->


   

    <!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section light-background">

<img src="<?=base_url('template2/assets/img/cta-bg.jpg');?>" alt="">

<div class="container">

  <div class="row" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-xl-9 text-center text-xl-start">
      <h3>Bergabung dalam Proyek Kami</h3>
      <p>Kami adalah mahasiswa jurusan Akuntansi, kelas A-P2, yang berkolaborasi dalam proyek besar PJBL untuk memahami dan menerapkan prinsip-prinsip akuntansi secara nyata. Dalam proyek ini, kami menciptakan sebuah sistem yang mendukung pengelolaan keuangan dan pencatatan transaksi secara efektif. Bersama-sama, kami belajar, berkembang, dan berinovasi untuk masa depan akuntansi yang lebih baik. Mari bergabung bersama kami dalam upaya ini!</p>
    </div>
    <div class="col-xl-3 cta-btn-container text-center">
      <a class="cta-btn align-middle" href="#">Dukung Kami</a>
    </div>
  </div>

</div>

</section><!-- /Call To Action Section -->


    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kelompok</h2>
        <p>Kami adalah kelompok dari kelas A-P2, jurusan Akuntansi IPB University</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="<?=base_url('template/assets/img/prof.png');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nadia Awalia Rahma</h4>
                <span>NIM: J0414221029</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="<?=base_url('template/assets/img/prof.png');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rahmawati</h4>
                <span>NIM: J0414221079</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="<?=base_url('template/assets/img/prof.png');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Harti Veronita Saskia Sinaga</h4>
                <span>NIM: J0414221166</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="<?=base_url('template/assets/img/prof.png');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Zaharatul Hasanah</h4>
                <span>NIM: J0414221188</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

         <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="<?=base_url('template/assets/img/prof.png');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Alya Rahma Putri</h4>
                <span>NIM: J0414221234</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Butuh Bantuan?</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jalan H Ismail No. 9A</p>
                  <p>Bogor West Java 16128 Indonesia</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Hubungi Kami</h3>
                  <p>+62 82115340053</p>
                  <p>+62 821-2933-5821</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Kami</h3>
                  <p>malikardiya1@gmail.com</p>
                  <p>rahmaardiya28@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Buka</h3>
                  <p>Senin - Jumat</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">PJBL</span>
            </a>
            <div class="footer-contact pt-3">
            <p>Jalan H Ismail No. 9A</p>
            <p>Bogor West Java 16128 Indonesia</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+62 82115340053</span></p>
              <p><strong>Email:</strong> <span>rahmaardiya28@gmail.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>ahihihi</span></strong>. ahihihi
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">zz</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('template2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?=base_url('template2/assets/vendor/php-email-form/validate.js');?>"></script>
  <script src="<?=base_url('template2/assets/vendor/aos/aos.js');?>"></script>
  <script src="<?=base_url('template2/assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?=base_url('template2/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js');?>"></script>
  <script src="<?=base_url('template2/assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?=base_url('template2/assets/vendor/swiper/swiper-bundle.min.js');?>"></script>

  <!-- Main JS File -->
  <script src="<?=base_url('template2/assets/js/main.js');?>"></script>

</body>

</html>