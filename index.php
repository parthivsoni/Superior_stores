<?php
// session_start();
 include 'header.php'; 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Superior Stores</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      


      <div class="row justify-content-center" data-aos="fade-up" >
        <div class="col-xl-6 col-lg-8">
          <h1><b><i><p id="demo" style="color:#DBE9FA"></p></i></b></h1>
          <script>
            var i = 0;
            var txt = 'Welcome to Superior Stores';
            var speed = 70;
            function typeWriter() 
            {
              if (i < txt.length) 
              {
                  document.getElementById("demo").innerHTML += txt.charAt(i);
                  i++;
                  setTimeout(typeWriter, speed);
                }
            }
              typeWriter(); // Call the function to start the typewriter effect
            </script>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center text-light" data-aos="zoom-in" data-aos-delay="300">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="category.php" class="text-light">Our Products</a></h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-bag-check-fill"></i>
            <h3><a href="user_order.php" class="text-light">My Orders</a></h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="faqs.php" class="text-light">FAQs</a></h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-star-line" ></i>
            <h3><a href="ratings.php"  class="text-light">Ratings</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Features Section ======= 
     <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/def.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-store-line"></i>
              <h4></h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
        </div>

      </div>
    </section> End Features Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style="background-image:url('assets/img/def.jpg');" data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-store-line"></i>
              <h4>Superior Stores</h4>
              <p>It is an online store which sell Dry Fruits and Spices to their Customer and provide Good Quality and Services</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150"> 
              <i class="bi bi-cart"></i>
              <h4>Delivery</h4>
              <p>Delivery option is available at our store
              </p> 
            </div>
            <!-- <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4></h4>
              <p></p>
            </div> -->
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Hygiene</h4>
              <p>Hygiene is maintain while serving the customers</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Free Home Delivery</a></h4>
              <p>We Deliver Our Products At Your Home Without Any Charges.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Maintain Quality</a></h4>
              <p>Quality Maintanence is Highly Preferable At Our Shop.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Customer Satisfaction</a></h4>
              <p>We Provide Best Quality To The Customer For Their Satisfacion.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Check Our Best Products</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-Dry-Fruits">Dry-Fruits</li>
              <li data-filter=".filter-Spices">Spices</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-Dry-Fruits">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/almond.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dry-Fruits 1</h4>
                <p>Dry-Fruits</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/almond.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dry-Fruits 1"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Dry-Fruits">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/anjir.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dry-Fruits 2</h4>
                <p>Dry-Fruits</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/anjir.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dry-Fruits 2"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Dry-Fruits">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/cashew.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dry-Fruits 3</h4>
                <p>Dry-Fruits</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/cashew.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dry-Fruits 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Dry-Fruits">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/walnut.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dry-Fruits 4</h4>
                <p>Dry-Fruits</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/walnut.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dry-Fruits 4"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Spices">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/black_pepper.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Spices 1</h4>
                <p>Spices</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/black_pepper.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Spices 1"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Spices">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/chilly_pwd.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Spices 2</h4>
                <p>Spices</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/chilly_pwd.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Spices 2"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Spices">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/cumin.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Spices 3</h4>
                <p>Spices</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/cumin.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Spices 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-Spices">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/elaichi.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Spices 4</h4>
                <p>Spices</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/elaichi.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Spices 4"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-Spices">
            <div class="portfolio-wrap">
              <img src="assets/img/Pista.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Spices 5</h4>
                <p>Spices</p>
                <div class="portfolio-links">
                  <a href="assets/img/Pista.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Spices 5"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Spices">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/star_anise.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Spices 6</h4>
                <p>Spices</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/star_anise.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Spices 6"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Spices">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/tumeric_pwd.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Spices 7</h4>
                <p>Spices</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/tumeric_pwd.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Spices 7"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
      <h2>About Us</h2>
      <p></p>
</div>
         
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/abc1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>The Store Which Have Consistency Of Product Quality Since 1979</h3>
            <p class="fst-italic">
              1979 - Prakash Shah who adopted the shop from their uncle. He started the firm which name was Superior Sugar and Tea Depo.
              <br>
              2013 - Hiten Soni adopted the shop from the owner of this firm and starts a new firm as <b> SUPERIOR STORES. </b>
              <br>
              Mainly we focused on the quality.. For that no compromise in rate or any party from we purchase.
              And in all the products have limited margins also.
              <br>
              Main products are nowdays is the spices and the dry fruits. A+ category for those products.
            </p>
            <!-- <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul> -->
            <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
                    <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed/23.022796047899895,72.59543267012607" frameborder="0" allowfullscreen></iframe> -->
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d459.0041145343419!2d72.59469926967185!3d23.022563599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e854cab06ac1d%3A0x8e5a07a9d5d35f62!2sSuperior%20Stores!5e0!3m2!1sen!2sin!4v1679414299431!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>  

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>
                  315, Shital mahal, opp. Vinayak complex, Sarangpur Chakla,<br> Sarangpur, Ahmedabad -380001
                  <br><br>
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>supriorstores.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>8320742527<br>
                  8460711068</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
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
<?php include 'footer.php'; ?>