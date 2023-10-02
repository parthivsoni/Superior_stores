<?php
include 'userfunctions.php';
include 'header.php';

if (isset($_GET['sub_cat'])) {

    $sub_cat_slug = $_GET['sub_cat'];
    $subcat = getSlugActive("sub_cat", $sub_cat_slug);
    $sub_cat = mysqli_fetch_array($subcat);
    if ($sub_cat) {


        $subcat_id = $sub_cat['subcat_id'];
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <style>
                .header-search-block {
                    position: relative;
                    /* right:100px; */
                    left: 420px;
                    margin: auto;
                    /* display: inline-block; */

                }

                .header-search-block input {
                    font-size: 16px;
                    color: #333;
                    width: 100%;
                    height: 52px;
                    float: none;
                    font-weight: 400;
                    background: #fff;
                    border: 2px solid #eee;
                    border-radius: 3px;
                    -webkit-border-radius: 3px;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important;
                    padding: 0 125px 0 20px;
                }

                .header-search-block input:focus {
                    outline: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }

                .header-search-block button {
                    position: absolute;
                    top: 0;
                    right: 0;
                    background: maroon;
                    border: 0;
                    line-height: 52px;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important;
                    margin: 0;
                    font-size: 15px;
                    font-weight: 700;
                    padding: 0 35px;
                    color: #fff;
                    border-radius: 0;
                    border-top-right-radius: 3px;
                    border-bottom-right-radius: 3px;
                }

                #h5 {
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                }
            </style>
            <meta charset="utf-8">
            <title>Product Page</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="Free HTML Templates" name="keywords">
            <meta content="Free HTML Templates" name="description">


            <!-- Vendor CSS Files -->
            <link href="assets/vendor/aos/aos.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
            <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
            <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
            <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
            <link href="assets/css/demo.css" rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href="assets/css/style.css" rel="stylesheet">

            <!-- Favicon -->
            <link href="img/favicon.ico" rel="icon">

            <!-- Google Web Fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <!-- Font Awesome -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

            <!-- Libraries Stylesheet -->
            <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

            <!-- Customized Bootstrap Stylesheet -->
            <link href="css/style.css" rel="stylesheet">
        </head>

        <body>

            <!-- Page Header Start -->
            <div class="container-fluid bg-dark mb-5">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:400px">
                    <h1 class="font-weight-semi-bold text-uppercase mb-2 text-white"><?= $sub_cat['subcat_name']; ?></h1>
                    <div class="d-inline-flex">
                        <p class="m-0 "><a href="category.php" style="text-decoration: none;">Collections</a></p>
                        <p class="m-0 px-2 text-white">-</p>
                        <p class="m-0 text-white">Shop</p>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- <div class="py-3 bg-primary">
            <div class="container">
                <h6 class="text-white">Home/Collections</h6>
            </div>
        </div> -->

            <div class="col-lg-5">
                <div class="header-search-block">
                    <form method="post">
                        <center><input type="text" name="search" placeholder="Search here" required>
                            <button type="submit" name="searchbtn">Search <i class="bi bi-search"></i></button>
                        </center>
                    </form>
                </div>
            </div>
            <hr>
            <div class="py-1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h1><?= $sub_cat['subcat_name']; ?></h1>
                            <hr>
                            <div class="row">
                                <?php
                                if (isset($_POST['searchbtn'])) {
                                    $str = mysqli_real_escape_string($conn, $_POST["search"]);

                                    $sql = "SELECT * FROM `product` WHERE pro_name LIKE '%$str%'";
                                    // UNION
                                    // SELECT subcat_name AS pro_name FROM `sub_cat` WHERE subcat_name LIKE '%$str%' ";

                                    $res = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($res) > 0) {

                                        while ($row = mysqli_fetch_assoc($res)) {
                                            //  echo "<a href='product.php>id=".$row['pro_id'].">".$row['pro_name']."</a>";
                                            // echo $row['pro_id']."=".$row['pro_name'];
                                            // echo "<br/>";
                                ?>
                                            <div class="col-md-4 mb-2">
                                                <a href="prodetails.php?pro_id=<?php echo $row['pro_id']; ?>">
                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <center><img src="assets/img/<?= $row['pro_img'] ?>" alt="Dry Fruits Images" style="height:40vh; width:40vh;">
                                                                <h4 class="text-dark"><?= $row['pro_name'] ?></h4>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        echo "No Data Found.";
                                    }
                                } else {


                                    $product = getProdBySubcat($subcat_id);
                                    if (mysqli_num_rows($subcat) > 0) {
                                        while ($item = mysqli_fetch_assoc($product)) {
                                            // echo $item['pro_id'];
                                        ?>
                                            <div class="col-md-4 mb-2">
                                                <a href="prodetails.php?pro_id=<?= $item['pro_id'] ?>">

                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <!-- <input type="hidden" name="pro_id" value=" //$item['pro_id']; "> -->
                                                            <img src="assets/img/<?= $item['pro_img']; ?>" alt="Product Images" class="w-100" style="height:40vh; width:40vh;">
                                                            <!-- <img src="assets/images/" alt="Product Images" class="w-100"> -->
                                                            <h4 class="text-center"><?= $item['pro_name']; ?></h4>
                                                            <h5 id="h5">₹<?= $item['pro_price']; ?>/kg</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                        <?php
                                        }
                                    } else {
                                        echo "No data Available";
                                    }
                                }
                            } else {
                                echo "Something Wwwwent Wrong";
                            }
                        } else {
                            echo "Something Went Wrong";
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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


            <!-- Back to Top -->
            <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Contact Javascript File -->
            <script src="mail/jqBootstrapValidation.min.js"></script>
            <script src="mail/contact.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>

        </html>
        <?php include 'footer.php';
        ?>