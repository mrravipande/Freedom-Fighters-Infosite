<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indian - Freedome fighters</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/indian-flag-circle.webp" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .img-fluid {
      height: 100%;
      width: 100%;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="assets/img/india-logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Our Hero's</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php 
                include "config.php";

                $view = mysqli_query($con, "select * from indian ") or die(mysqli_error($con)); 
                while($row = mysqli_fetch_array($view)) 
                {
                  ?>
                  <li><a href="more-details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>

                  <?php
                }
              ?>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 style="color: orange;">I am proud to be an Indian because I am aware that it is a great privilege and an immense responsibility too.</h2>
          <h2 style="color: blue;">I am proud to be an Indian because I know what I represent.</h2>
          <h2 style="color: green;">I am proud to be an Indian because I have the freedom to speak, write and protest against evil doings.</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/india-flage.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/Mahatma-Gandhi.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <br>
            <br>
            <h3 data-aos="fade-up">Father of Nation</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              <b>Mahatma Gandhiji</b> is revered in India as the Father of the Nation. Much before the Constitution of Free India conferred the title of the Father of the Nation upon the Mahatma, it was Netaji Subhash Chandra Bose who first addressed him as such in his condolence message to the Mahatma on the demise of Kasturba.
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Birth</h4>
                <p>born on 2 October 1869 into a Gujarati Hindu Modh Bania family in Porbandar (also known as Sudamapuri), a coastal town on the Kathiawar Peninsula and then part of the small princely state of Porbandar in the Kathiawar Agency of the Indian Empire.</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Nation</h4>
                <p>The above message also proves beyond any doubt Netaji's reverence and warm feelings towards Gandhiji whom he had addressed as 'The Father of the Nation'.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Hero's</h2>
          <p>Indian Freedom Fighters</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/mahatma-gandhi.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Mahatma Gandhi</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/Subhash-Chandra-Bose.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Subhash Chandra Bose</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/Sardar-Vallabhbhai-Patel.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Sardar Vallabhbhai Patel</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/Jawaharlal-Nehru.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
               
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Jawaharlal Nehru</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/Lal-Bahadur-Shastri.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Lal Bahadur Shastri</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/Bhagat-Singh.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Bhagat Singh</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/Dadabhai-Naoroji .webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Dadabhai Naoroji </h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/Tantia-Tope.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Tantia Tope</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/fighters/Bipin-Chandra-Pal.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Bipin Chandra Pal</h4>
              </div>
            </div>
          </div>

        </div>

      </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <hr style="color: pink;">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Get more</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Freedom Fighters</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>About us</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">More Infomation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Historys</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Biography</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>