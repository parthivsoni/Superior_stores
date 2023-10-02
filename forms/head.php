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
  <style>
   .navbar {
  padding: 0;
  background-color: #151515;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #ffc451;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  color: #151515;
  font-weight: 400;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  background-color: #ffc451;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #151515;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #151515;
  background-color: #ffc451;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
  color: #151515;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  background-color: #ffc451;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}
/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
}

#header.header-scrolled,
#header.header-inner-pages {
  background: rgb(8, 8, 8);
}

#header .logo {
  font-size: 32px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
}

#header .logo a {
  color: #fff;
}

#header .logo a span {
  color: #ffc451;
}

#header .logo img {
  height: 2rem;
}
/*--------------------------------------------------------------
#  Get Startet Button
--------------------------------------------------------------*/
.get-started-btn {

  color: #fff;
  border-radius: 4px;
  padding: 7px 25px 8px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
  display: inline-block;
  border: 2px solid #ffc451;
}

.get-started-btn:hover {
  background: #ffbb38;
  color: #343a40;
}

@media (max-width: 992px) {
  .get-started-btn {
    padding: 7px 20px 8px 20px;
    margin-right: 15px;
  }
}
  </style>
</head>
<body>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="#about" class="logo me-auto me-lg-0">
        <img src="assets/img/logo.png" alt="Logo" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>


          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li class="dropdown"><a href="dry_fruits.php"><span>Dry Fruits</span> <i class="bi bi-chevron-right"></i></a>
                <!-- <ul>
                  <li><a href="#">Cashew</a></li>
                  <li><a href="#">Almond</a></li>
                  <li><a href="#">Dates</a></li>
                  <li><a href="#">Saffron</a></li>
                  <li><a href="#">Walnuts</a></li>
                </ul> -->
              </li>
              <li class="dropdown"><a href="spices.php"><span>Spices</span> <i class="bi bi-chevron-right"></i></a>
                <!-- <ul>
                  <li><a href="#">Tumeric</a></li>
                  <li><a href="#">Red Chilly</a></li>
                  <li><a href="#">Black Cumin</a></li>
                  <li><a href="#">Cloves</a></li>
                  <li><a href="#">Cardamom</a></li>
                </ul> -->
              </li>
            </ul>
          <li><a class="nav-link scrollto" href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#about">About us</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
       
      </nav><!-- .navbar -->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="cart.php" class="get-started-btn scrollto"><i class="bi bi-cart"> </i>
       <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">

          <a class="bi bi-bag btn btn-outline-warning" href="cart1.php">&nbsp; Cart</a> -->

          <?php

          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) {
            if ($_SESSION['Role'] == 'Customer') {

              echo '    <a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 40px;" href="#">&nbsp;Manage Profile</a>';

              echo '    <a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 40px;" href="logout.php">&nbsp;Log out</a>';
              // echo '    <a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 40px;" href="#">Manage Profile</a>';
            }
          } else {
            echo ' <a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 40px;" href="log-in.php"> &nbsp;Log in</a>';
          }

          ?>


          <!-- <a class="bi bi-bag btn btn-outline-warning" href="cart1.php">&nbsp; Cart</a> -->
        <!-- </div> -->


        <!-- <a href="log-in.php"><i class="bi bi-person "></i>&nbsp;Sign in</a> -->

    </div>
  </header><!-- End Header -->
</body>
    </html>

