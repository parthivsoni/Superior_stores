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
        <title>view product</title>
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
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea'
            });
        </script>
        <link rel="stylesheet" href="style2/insert_css.css">
        <!--<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">-->
        <style>
            .button {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #4CAF50;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
            }

            .button:hover {
                background-color: #3e8e41
            }

            .button:active {
                background-color: #3e8e41;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
        </style>
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
                            <a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
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

                        <!-- <li>
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
                                Manage Products<small>View Product</small>
                            </h1>
                        </div>
                    </div>
                    <!-- /. ROW  -->


                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <table width="990px" align="center" bgcolor="pink">
                                        <tr align="center">
                                            <td colspan="10" bgcolor="#3498db">
                                                <h2>View All Products Here</h2><br />
                                            </td>
                                        </tr>

                                        <tr align="center" bgcolor="skyblue" style>
                                            <th> Pro_id </th>
                                            <th> Subcat_id </th>
                                            <th> Pro_name </th>
                                            <th> Pro_price </th>
                                            <th> Pro_img</th>
                                            <th> Product_desc </th>
                                            <th> Stock</th>
                                            <th> Edit </th>
                                            <th> Delete </th>
                                        </tr>
                                        <?php
                                        include("includes/db.php");
                                        $get_pro = "select * from product";

                                        $run_pro = mysqli_query($con, $get_pro);

                                        $i = 0;

                                        while ($row_pro = mysqli_fetch_array($run_pro))
                                         {
                                            $Product_id = $row_pro['pro_id'];
                                            $subcat_id = $row_pro['subcat_id'];
                                            $Product_name = $row_pro['pro_name'];
                                            $Product_price = $row_pro['pro_price'];
                                            $Product_image = $row_pro['pro_img'];
                                            $Product_desc = $row_pro['pro_desc'];
                                            $Product_stock = $row_pro['pro_stock'];
                                            $i++;
                                            
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $subcat_id; ?></td>
                                                <td><?php echo $Product_name; ?></td>
                                                <td><?php echo $Product_price; ?></td>
                                                <td><img src="assets/img/product/<?php echo $Product_image; ?>" width="60" height="60"></td>
                                                <td><?php echo $Product_desc; ?></td>
                                                <td><?php echo $Product_stock; ?></td>

                                                <td> <a href="edit_pro.php?edit_pro=<?php echo $Product_id; ?>">Edit </a></td>
                                                <td><a href="delete_pro.php?delete_pro=<?php echo $Product_id; ?>">Delete</a></td>

                                            </tr>
                                        <?php } ?>
                                    </table>
                                    <br><br>
                                    <div>
                                        <button><a href="index.php" style="text-decoration:none; color:#000000;">Go to Home</a></button>
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
    </body>

    </html>
<?php } ?>