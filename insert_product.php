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
        <title>Inserting Product</title>
        <!-- Bootstrap Styles-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="style/style.css" rel="stylesheet" />
        <link href="style2/insert_css.css">
        <!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>-->
        <link rel="stylesheet" href="style2/insert_css.css">
        <!--<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">-->
        <style>
            .button {
                display: inline-block;
                padding: 3px;
                font-size: 18px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: rgba(1, 2, 3, 4);
                border: none;
                border-radius: 5px;
                box-shadow: 9px;
                width: 20%;
            }

            .button:hover {
                background-color: #3e8e41
            }

            .button:active {
                background-color: #3e8e41;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }

            /* .button:gth{
                background-color: rgba(1, 2, 3, 4);
                border: none;
                border-radius: 5px;
                box-shadow: 9px;
                width: 20%;
             } */
            .btn {

                background-color: rgba(1, 2, 3, 4);
                border: none;
                display: center;
                border-radius: 5px;
                box-shadow: 9px;
                width: 20%;
            }
        </style>
        <script type="text/javascript" language="javascript">
            function validate() {
                var title = document.getElementById('pt').value;

                //Prodcut Title validation

                if (title == "") {
                    //alert("Please Enter Product Title");
                    document.getElementById('msg1').innerHTML = "Please Enter Product Title";
                    return false;
                } else {
                    document.getElementById('msg1').innerHTML = "";
                }

                //Select Category validation

                if (document.fn.Product_cat.selectedIndex == "") {
                    //alert ( "Please select Category!");
                    document.getElementById('msg2').innerHTML = "Please Select Category";
                    return false;
                } else {
                    document.getElementById('msg2').innerHTML = "";
                }

                //size validation

                var size = document.getElementById('ps').value;
                if (size == "") {
                    //alert("Please Enter Product Title");
                    document.getElementById('msg3').innerHTML = "Please Enter Size";
                    return false;
                } else {
                    document.getElementById('msg3').innerHTML = "";
                }

                //part_no validation

                var part_no = document.getElementById('pn').value;
                if (part_no == "") {
                    //alert("Please Enter Product Title");
                    document.getElementById('msg4').innerHTML = "Please Enter Part No";
                    return false;
                }

                /*if((part_no))
                {
                	document.getElementById('msg4').innerHTML="Please Enter Numeric value only";
                	return false;	
                }*/
                else {
                    document.getElementById('msg4').innerHTML = "";
                }

                //image validation

                if (img == "") {
                    //alert("Please Enter Product Title");
                    document.getElementById('msg5').innerHTML = "Please choose img";
                    return false;
                } else {
                    document.getElementById('msg5').innerHTML = "";
                }

                //Price validation
                var price = document.getElementById('pr').value;
                if (price == "") {
                    //alert("Please Enter Product Title");
                    document.getElementById('msg6').innerHTML = "Please Enter Price";
                    return false;
                }
                if (!Number(price)) {
                    document.getElementById('msg6').innerHTML = "Please Enter Numeric value only";
                    return false;
                } else {
                    document.getElementById('msg6').innerHTML = "";
                }

                //description validation
                var desc = document.getElementById('ds').value;
                if (desc == "") {
                    //alert("Please Enter Product Title");
                    document.getElementById('msg7').innerHTML = "Please Enter Description";
                    return false;
                } else {
                    document.getElementById('msg7').innerHTML = "";
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
                            <a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a>
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
                                Manage Products<small>Insert New Product</small>
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
                                    <!--<div class="alert alert-success">
									<strong>Well done!</strong> You successfully read this important alert message.
								</div>
								<div class="alert alert-info">
									<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
								</div>
								<div class="alert alert-warning">
									<strong>Warning!</strong> Best check yo self, you're not looking too good.
								</div>
								<div class="alert alert-danger">
									<strong>Oh snap!</strong> Change a few things up and try submitting again.
								</div> -->
                                    <form action="insert_product.php" method="post" enctype="multipart/form-data" name="fn">
                                        <table align="center" width="990px" height="645px" bgcolor="#E67E19">
                                            <tr align="center">
                                                <td colspan="7">
                                                    <div id="box">
                                                        <div class="box-top" id="text">Insert New Post Here</div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td id="title"><b>Product Name:</b></td>
                                                <td><input type="text" id="pt" name="Product_name" size="60px;" placeholder="Enter Product Name" />
                                                    <span id="msg1" style="color:red; font-weight:bold;"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td id="title"><b>Product Price:</b></td>
                                                <td><input type="text" name="Product_price" placeholder="Enter Product Price" id="pr" />
                                                    <span id="msg6" style="color:red; font-weight:bold;"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="title"><b>Product Image:</b></td>
                                                <td><input type="file" name="Product_image" id="img" />
                                                    <span id="msg5" style="color:red; font-weight:bold;"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td id="title"><b>Product Description:</b></td>
                                                <td><textarea name="Product_desc" cols="50" rows="10" placeholder="Write Here....." id="ds"></textarea> <span id="msg7" style="color:red; font-weight:bold;"></span> </td>
                                            </tr><br /><br />

                                            <tr>
                                                <td id="title"><b>Product Stock:</b></td>
                                                <td><input type="text" name="Product_stock" placeholder="Enter Available Product Stock" id="pr" />
                                                    <span id="msg7" style="color:red; font-weight:bold;"></span>
                                                </td>
                                            </tr>
                                            <td id="title"><b>Sub Category:</b></td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <td>

                                                <select name="Product_subcat" class="selectpicker">
                                                    <option>Select a Sub Category</option>
                                                    <?php
                                                    $get_subcat = "Select * from sub_cat";
                                                    $run_subcat = mysqli_query($con, $get_subcat);
                                                    while ($row_subcat = mysqli_fetch_array($run_subcat)) {
                                                        $subcat_id = $row_subcat['subcat_id'];
                                                        $subcat_name = $row_subcat['subcat_name'];
                                                        echo "<option value='$subcat_id'>$subcat_name</option>";
                                                    }

                                                    ?>
                                                </select>
                                                <br />
                                            </td>

                                            <tr align="center">
                                                <td colspan="7">
                                                    <input type="submit" name="insert_post" value="Insert Product Now" class="button" onClick="return(validate());" />
                                                    <input type="reset" name="insert_post" value="Reset" class="button" />
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- <div class="gth"> -->
                                        <!-- <input type="gotohome" name="insert_post" value="Go To Home" class="btn /> -->
                                        <button class="btn"><a href="index.php">Go to Home</a></button>
                                        <!-- </div> -->
                                    </form>



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

    </body>

    </html>
    <?php
    if (isset($_POST['insert_post']))
    {
        $Product_name = $_POST['pro_name'];
        $Product_subcat = $_POST['Product_subcat'];
        $Product_price = $_POST['pro_price'];
        $Product_desc = $_POST['pro_desc'];
        $Product_stock = $_POST['pro_stock'];
      
        // getting for image from the field

        $Product_image = $_FILES['pro_img']['name'];
        $Product_image_tmp = $_FILES['pro_img']['tmp_name'];

        $target_dir = "/assets/img/product/";
        $target_file = $target_dir . basename($_FILES["pro_img"]["name"]);

        if (move_uploaded_file($_FILES["pro_img"]["tmp_name"], $target_file)) {
            echo "<center><i><h4>The file " . basename($_FILES["pro_img"]["name"]) . " has been uploaded.</h4></i></center>";
        } else {
            echo "<center>Sorry, there was an error uploading your file.</font></center>";
        }

        $sql = "INSERT INTO product (subcat_id, pro_name, pro_price, pro_img, pro_desc, pro_stock) 
        VALUES ('$Product_subcat','$Product_name','$Product_price','$Product_image','$Product_desc','$Product_stock')";

        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script> alert ('Product has been inserted') </script> ";
            echo "<script> window.open('view_products.php','_self') </script>";
        }
    }
    ?>
<?php } ?>