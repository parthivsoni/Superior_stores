<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<body>

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
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

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
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top bg-dark">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <a href="#about" class="logo me-auto me-lg-0">
            <img src="assets/img/logo.png" alt="Logo" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>


                    <li class="dropdown"><a href="category.php"><span>Collections</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li class="dropdown"><a href="dry_fruits.php"><span>Dry Fruits</span></a>
                                <!-- <ul>
                                    <li><a href="#">Cashew</a></li>
                                    <li><a href="#">Almond</a></li>
                                    <li><a href="#">Dates</a></li>
                                    <li><a href="#">Saffron</a></li>
                                    <li><a href="#">Walnuts</a></li>
                                </ul> -->
                            </li>
                            <li class="dropdown"><a href="spices.php"><span>Spices</span></a>
                                <!-- <ul>
                                    <li><a href="#">Tumeric</a></li>
                                    <li><a href="#">Red Chilly</a></li>
                                    <li><a href="#">Black Cumin</a></li>
                                    <li><a href="#">Cloves</a></li>
                                    <li><a href="#">Cardamom</a></li>
                                </ul> -->
                            </li>
                        </ul>
                        <!-- <li><a class="nav-link scrollto" href="#portfolio">Gallery</a></li> -->
                    <li><a class="nav-link scrollto" href="about-us.php">About us</a></li>
                    </li>
                    <li><a class="nav-link scrollto" href="contact-us.php">Contact us</a></li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="cart.php" class="btn me-md-2 bi bi-cart btn-outline-warning" onmouseover="this.style.hovercolor='black';" style="color:white;height:35px; font-size:12px;">&nbsp;Cart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) {
                    
                    if ($_SESSION['Role'] == 'Customer') {
                        

                      // echo '<a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 30px; font-size:12px;" href="profile.php">&nbsp;Manage Profile</a>';
                       //echo '<a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 30px; font-size:12px;" href="logout.php">&nbsp;Log out</a>';
                        echo ' <ul class="nav navbar-top-links navbar-right">

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="bi bi-person ">&nbsp;';
                                if(isset($_SESSION['id'])){
                                    echo $_SESSION['name'];
                                }
                                echo '</i> 
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                <a href="user_profile.php">
                                 User Profile</a>
                                </li>
                               
                                <li class="divider"></li>
                                <li><a href="logout.php"> Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                        </ul>';
                    }
                } else {
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="log-in.php" class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 35px; font-size:12px;">&nbsp;Log In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>';
                }
                    
                ?>
                
               
            </div>
            
        </nav><!-- .navbar -->
        </header><!-- End Header -->
</body>

</html>