<?php
session_start();

if (!isset($_SESSION['Admin_email'])) {
    echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
} else {
?>
    <?php
    include("includes/db.php");
    ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Inserting Sub Category</title>
        <!-- Bootstrap Styles-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <script>
            function validate() {
                var cat = document.getElementById('cat1').value;

                if (cat == "") {
                    //alert("Please Enter Category");
                    document.getElementById('msg1').innerHTML = "Please Enter Category";
                    return false;
                }
                if (!/^[a-z A-Z]*$/g.test(document.fn.Category_name.value)) {
                    //alert("Invalid characters");
                    document.getElementById('msg1').innerHTML = "Please enter Alphabetic value only";
                    return false;
                } else {
                    document.getElementById('msg1').innerHTML = "";
                }
            }
        </script>

    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Admin Panel</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">

                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>

                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </nav>
            <!--/. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tags"></i> Manage Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insert_cat.php">Insert New Category</a>
                                </li>
                                <li>
                                    <a href="view_cats.php">View All Category</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tags"></i> Manage Sub-Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insert_subcat.php">Insert New Sub-Category</a>
                                </li>
                                <li>
                                    <a href="view_subcat.php">View All Sub-Category</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-tasks"></i> Manage Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insert_product.php">Insert New Product</a>
                                </li>
                                <li>
                                    <a href="view_products.php">View All Product</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="view_customer.php"><i class="fa fa-user"></i> Manage Customer</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Manage Order<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="order_details.php">Manage Order Details</a>
                                </li>
                                <li>
                                    <a href="order_status.php">Manage Order Status</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="view_customer.php"><i class="fa fa-user"></i> Manage Customer</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Manage Order<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="order_details.php">Manage Order Details</a>
                                </li>
                                <li>
                                    <a href="order_status.php">Manage Order Status</a>
                                </li>
                            </ul>
                        </li>

                        <!--<li>
                        <a href="invoice.php"><i class="fa fa-envelope"></i> Manage Invoice</a>
                    </li>
					
                    <li>
                        <a href="view_payments.php"><i class="fa fa-credit-card"></i> Manage Payment Details</a>
                    </li>-->

                        <!-- <li>
                            <a href="#"><i class="fa fa-flag"></i> Report Generation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Product_Report.php">Product Report</a>
                                </li>
                                <li>
                                    <a href="Customer_Report.php">Customer Report</a>
                                </li>
                            </ul>
                        </li> -->

                        <li>
                            <a href="Feedback.php"><i class="fa fa-comments"></i> Manage Feedback</a>
                        </li>

                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>

                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Manage Sub-Category<small>Insert New Sub-Category</small>
                            </h1>
                        </div>
                    </div>
                    <!-- /. ROW  -->


                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Insert New Post Here
                                </div>

                                <div class="panel-body">
                                    <form action="#" method="post" style="padding:80px;" name="fn" enctype="multipart/form-data">

                                        <b>Insert New Sub-Category:</b>
                                        <input type="text" name="subcat_name" id="sub-cat1" /><span id="msg1" style="color:red; font-weight:bold;"></span>
                                        <br><br><br>

                                        <td id="title"><b>Category:</b></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <td>

                                            <select name="subcat_cat" class="selectpicker">
                                                <option>Select a Category</option>
                                                <?php
                                                $get_cats = "Select * from category";
                                                $run_cats = mysqli_query($con, $get_cats);
                                                while ($row_cats = mysqli_fetch_array($run_cats)) {
                                                    $Category_id  = $row_cats['cat_id'];
                                                    $Category_name = $row_cats['cat_name'];
                                                    echo "<option value='$Category_id'>$Category_name</option>";
                                                }

                                                ?>
                                            </select>
                                            <br />
                                        </td><br />
                                        <b>Insert Image For Sub Category:</b><br /><br />
                                        <input type="file" name="subcat_img" id="sub-cat1" /><span id="msg1" style="color:red; font-weight:bold;"></span>
                                        <!-- <span id="msg5" style="color:red; font-weight:bold;"></span> -->
                                        <br />

                                        <b> Sub Category Description:</b>
                                        <textarea name="subcat_desc" cols="50" rows="10" placeholder="Write Here....." id="ds"></textarea> <span id="msg7" style="color:red; font-weight:bold;"></span>

                                        <span id="msg2" style="color:red; font-weight:bold;"></span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="submit" name="add_subcat" value="Add Sub-Category" onClick="return(validate());" />

                                    </form>

                                    <div>
                                        <button><a href="index.php" style="text-decoration:none; color:#000000;background-color:blue">Go to Home</a></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>

        <?php
        if (isset($_POST['add_subcat'])) {
            $subcat_name = $_POST['subcat_name'];
            $subcat_cat = $_POST['subcat_cat'];
            $subcat_desc = $_POST['subcat_desc'];

            // getting for image from the field

            $subcat_img = strval($_FILES["subcat_img"]["name"]);
            $subcat_img_tmp = strval($_FILES["subcat_img"]["tmp_name"]);

            $target_dir = "assets/img/";
            $target_file = $target_dir . basename($_FILES["subcat_img"]["name"]);
            if (move_uploaded_file($_FILES["subcat_img"]["tmp_name"], $target_file)) {
                echo "<center><i><h4>The file " . basename($_FILES["subcat_img"]["name"]) . " has been uploaded.</h4></i></center>";
            } else {
                echo "<center>Sorry, there was an error uploading your file.</font></center>";
            }
            //    move_uploaded_file("/assets/img/$subcat_img",$subcat_img_tmp);

            $sql = "INSERT INTO sub_cat (cat_id,subcat_name,subcat_img,subcat_desc) VALUES ('$subcat_cat','$subcat_name','$subcat_img','$subcat_desc');";

            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script> alert ('Sub Category has been inserted') </script> ";
                echo "<script> window.open('insert_subcat.php','_self') </script>";
            }
        }
        ?>

    </body>

    </html>
<?php } ?>