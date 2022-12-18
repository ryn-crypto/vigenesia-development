<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vigenesia Web server</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>/assets/img/apple-touch-icon.png" rel="icon">
  <link href="<?= base_url()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>/assets/css/style.css" rel="stylesheet">
  
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="row">
        <!-- Uncomment below if you prefer to use an image logo -->
        <div class="col d-flex align-items-center justify-content-between">
          <a href="<?= base_url();?>" class="logo"><img src="<?= base_url()?>/assets/img/apple-touch-icon.png" alt="" class="img-fluid"></a>
          </div>
        <div class="col d-flex align-items-center justify-content-between">
          <!-- nama -->
          <h1 class="logo"><a href="<?= base_url();?>">ViGeNesia</a></h1>
        </div>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#powered">Sponsor</a></li>
          <li><a class="nav-link scrollto" href="#features">Feature</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url();?>Dokumentasi">V.sq 0.1</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>VIGENESIA</h1>
      <h2>Visi Generasi Indonesia</h2>
      <div class="row">
        <div class="col-6">
          <a href="http://vigenesia.org/" class="btn-get-started">Original</a>
        </div>
        <div class="col-6">
          <a href="<?= base_url();?>Dokumentasi" class="btn-get-started">Sq01 V</a>
        </div>
      </div>
      <img src="<?= base_url()?>/assets/img/hero-img.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-8 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>ViGeNesia yaitu</h3>
              <p>
              Hasil pemikiran dari diskusi dengan mahasiswa Universitas Bina Sarana Informatika untuk membangun startup, satu ide produknya adalah ViGeNesia (Visi Generasi Indonesia). Mimpi besar ViGeNesia adalah aplikasi ini bisa menyatukan generasi muda Indonesia dari sabang sampai merauke dalam merajut nasionalisme, persahabatan, saling memotivasi, mengedukasi, berbagi cerita dan cita-cita. ViGeNesia akan dikembangkan secara bertahap mulai menjadi case study di mata kuliah Teknologi Web Service, dikembangkan oleh mahasiswa sebagai projek (projct base), dan dalam jangka panjang akan menjadi icon nasional melalui google playstore dan mendapatkan support dari Kemendikbud maupun masyarakat luas.
              </p>
            </div>
          </div>
          <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Pengembangan Kemampuan</h4>
                  <p>Open Source guna mengambangkan kemampuan mahasiswa yang sedang mempelajari Web-Service</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Orientasi Nasional</h4>
                  <p>Bisa diakses semua orang sehingga bisa berbagi pengetahuan melalui tulisan yang disimpan dalam database ViGenesia</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Powered Section ======= -->
    <section id="powered" class="powered">
      <div class="container" data-aos="zoom-in">
        
        <div class="section-title">
          <h2>Powered</h2>
        </div>

        <div class="row d-flex justify-content-center">
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url()?>/assets/img/powered/bsi.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url()?>/assets/img/powered/codeigniter.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url()?>/assets/img/powered/sql.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url()?>/assets/img/powered/bootstrap.svg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End powered Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Features Was Develop</h2>
          <p>ViGeNesia memberikan fiture untuk berbagi motivasi dalam satu databse dan dapat diakses oleh semua orang, selain itu kita bisa melakukan registrasi akun dan melakukan login untuk bergbagi motivasi. Namun setelah mempelajari code yang diberikan kami menemukan beberapa kekurangan yang bisa kita kembangkan untuk penyusunan code dan menambahkan beberapa fitur yang ada pada web-service ViGeNesia.</p>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
            <img src="<?= base_url()?>/assets/img/hero.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
            <h3>Kemudahan untuk melakukan komunikasi cros platform</h3>
            <p class="fst-italic">
              Dengan menggunakan rest-api yang terstruktut, akan mempermudah dalam melakukan pengembangan aplikasi secara cross paltform
            </p>
            <ul>
              <li><i class="bi bi-check"></i> 1 database untuk banyak aplikasi</li>
              <li><i class="bi bi-check"></i> Bisa digunakan untuk banayak platform</li>
              <li><i class="bi bi-check"></i> Kemudahan akses</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Whats Develop</h2>
          <p>Setalah mengimplemantasikan kedalam project, kami menyadari bahwa ada beberapa hal yang kurang dalam Web service yang disediakan. hal ini bukan berarti kami lebih mahir akan tetapi kekurangan tersebut hanya sebatas pengetahuan yang kami miliki, dan berikut beberapa hal yang kami kembangkan :</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-link"></i></div>
              <h4 class="title"><a href="">OOP</a></h4>
              <p class="description">Melakukan perbaikan terhadap struktur code dengan menggunakan konsep MVC</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-code"></i></div>
              <h4 class="title"><a href="">Code</a></h4>
              <p class="description">Melakukan perbaikan struktur kode agar lebih mudah untuk dibaca dan dikembangkan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-key"></i></div>
              <h4 class="title"><a href="">API Key</a></h4>
              <p class="description">Menambahkan API-Key untuk menambahkan keamanan web service</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Dokumentasi</a></h4>
              <p class="description">Dokumentasi API agar lebih mudah di pahami</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Founder Vigenesia</h2>
          <p>Fauko misalam adalah founder dari vigenesia, beliau adalah mahasiswa UBSI</p>
        </div>

        <div class="row d-flex justify-content-center">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="<?= base_url()?>/assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Fauko Misalam</h4>
                  <span>Founder ViGeNesia</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section-title mt-5">
          <h2>Team Develop program</h2>
          <div class="row d-flex justify-content-center mb-5">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?= base_url()?>/assets/img/powered/squadra.png" class="img-fluid" alt="">
            </div>
          </div>
          <p>Team solid mahasiswa universitas Bina Sarana Informatika, yang saat pengembangan aplikasi ini berada di smester 5. Kami berharap project ini bisa berkembang lebih besar kedepannya. </p>
        </div>

        <div class="row d-flex justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="<?= base_url()?>/assets/img/team/riyan.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Riyan First T</h4>
                  <span>Back End Developer</span>
                </div>
                <div class="social">
                  <a href="https://github.com/ryn-crypto" target="_blank"><i class="bi bi-github"></i></a>
                  <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="<?= base_url()?>/assets/img/team/ilham.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ilham Alhapis</h4>
                  <span>Database Administrator</span>
                </div>
                <div class="social">
                  <a href="" target="_blank"><i class="bi bi-github"></i></a>
                  <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="<?= base_url()?>/assets/img/team/anggi.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Anggi Indra P</h4>
                  <span>Mobile Developer</span>
                </div>
                <div class="social">
                  <a href="" target="_blank"><i class="bi bi-github"></i></a>
                  <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="<?= base_url()?>/assets/img/team/bimo.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Aryoso Bimo</h4>
                  <span>UI/UX</span>
                </div>
                <div class="social">
                  <a href="" target="_blank"><i class="bi bi-github"></i></a>
                  <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="<?= base_url()?>/assets/img/team/sista.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sista Ruliani</h4>
                  <span>Content Writer</span>
                </div>
                <div class="social">
                  <a href="" target="_blank"><i class="bi bi-github"></i></a>
                  <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Gunakan contact yang tertera untuk mengirimkan pertanyaan</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Any Question</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-md-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>2022</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Create with love <i class="bi bi-heart text-danger"></i> Squadra  
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>/assets/js/main.js"></script>

</body>

</html>