<?php  include 'header.php';
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <style>
    .fixed-top {
        margin: auto;
        padding: 2px;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .main {
        margin: 5%;
    }
    #h3{
        font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    </style>
</head>

<body>


    <div class="main">


        <div class="content-wrapper">
            <div class="container">

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="callout" id="callout" style="display:none">
                                <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                                <span class="message"></span>
                            </div>
                            <div class="row">
                                                    <!-- product details  -->
                            <?php

                            if(isset($_GET['pro_id']))
                            {
                                // echo "<script>alert('".$_GET['pro_id']."')</script>";
                                $get_proid=$_GET['pro_id'];
                            }
                                        // include("includes/db.php");
                                        
                                        $get_pro = "select * from product where pro_id=$get_proid";

                                        $run_pro = mysqli_query($conn, $get_pro);

                                        $i = 0;

                                        while ($row_pro = mysqli_fetch_assoc($run_pro))
                                        {
                                            $Product_id = $row_pro['pro_id'];
                                            $subcat_id = $row_pro['subcat_id'];
                                            $Product_name = $row_pro['pro_name'];
                                            $Product_price = $row_pro['pro_price'];
                                            $Product_image = $row_pro['pro_img'];
                                            $Product_desc = $row_pro['pro_desc'];
                                           // $Product_stock = $row_pro['pro_stock'];
                                            $i++;
                                            
                                        ?>

                                    <?php } ?>
                                    <div class="col-6">
                                    <!-- <div class="card shadow"> -->
                                        <!-- <img src="assets/img/almond.jpeg" alt=""  width="70%" class="zoom">	 -->
                                    <center><img src="assets/img/<?php echo $Product_image;?>" style="height:60vh; width:50vh;" class="zoom">
                                    <!-- </div> -->

                                    <br><br>

                                    <form class="form-inline" method="POST" id="productForm" action="cart.php">
                                        <br><br>
                                        <input type="hidden" name="pro_id" value="<?= $Product_id ?>">
                                
                                        <div class="form-group">
                                            <div class="input-group col-sm-5">


                                    <!-- <span class="input-group-btn">
			            					<button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            				</span>
					                    <input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
							            <span class="input-group-btn">
							                <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
							                </button>
							            </span>
							            <input type="hidden" value="1" name="id">
							        </div> -->
                                                <!-- <input type="submit"> -->
                                            </div>
                                    
                                    <?php
                                        if(isset($_POST['addtocart'])){
                                            // header("Location:S_Stores(main)/cart.php");
                                            echo "<script>window.open('cart.php','_self')</script>";
                                        }
                                        else{
                                            // echo "JSK";
                                        }
                                    ?>
                                </div>
                            </div>      
                        
                                <!-- sub CAt name -->
                                <?php
                                        
                                        $get_subcat = "select * from sub_cat where subcat_id=$subcat_id";

                                        $run_subcat = mysqli_query($conn, $get_subcat);

                                        $i = 0;

                                        while ($row_subcat = mysqli_fetch_array($run_subcat)) {

                                            $subcat_id = $row_subcat['subcat_id'];
                                            $Category_id = $row_subcat['cat_id'];
                                            $subcat_name = $row_subcat['subcat_name'];
                                            $i++;
                                        ?>
                                            
                                        <?php } ?>

                                    
                                    <!-- '' -->

                                    <!-- category name -->
                                            <?php
                                        

                                        $get_cat = "select * from category where cat_id=$Category_id";

                                        $run_cat = mysqli_query($conn, $get_cat);

                                        $i = 0;

                                        while ($row_cat = mysqli_fetch_array($run_cat)) {

                                            $Category_id = $row_cat['cat_id'];
                                            $Category_name = $row_cat['cat_name'];
                                            $i++;
                                        ?>
                                        
                                        <?php } ?>
                                    
                            <div class="col-sm-6">
                                <h1 class="page-header" ><b><?php echo $Product_name; ?> </b></h1>
                                <h3 id="h3"><?php echo " ₹".$Product_price;echo "/Kg"; ?></h3>
                                <p><b><?php echo $Category_name; ?> : </b> <?php echo $subcat_name; ?></p>
                                <p><b>Description :</b></p>
                                <p>
                                <p><?php echo $Product_desc; ?></p>
                                </p>
                                <button name="addtocart" class="btn btn-lg btn-warning btn-curve">
                                <i class="bi bi-cart"></i> Add to Cart </button>
                                                
                                                <!-- <button name="buynow" class="btn btn-primary btn-lg btn-flat">
                                                    <i class=" bi
                                                bi-bag-fill"></i>&nbsp;Buy Now</button> -->
                                <br>


                            </div>


                            <div class="fb-comments"
                                data-href="http://localhost/ecommerce/product.php?product=dell-inspiron-15-7000-15-6"
                                data-numposts="10" width="100%"></div>
                        </div>

                        <div class="col-sm-3">
                            <div class="row">
                                <div class="box box-solid">
                                    <br>

                                </div>
                            </div>
                            <br>
                            <br>



                        </div>
                    </div>
            </div></form>
            </section>

        </div>
    </div>
    </div>

    </div>
</body>

</html>
<?php  include 'footer.php'?>