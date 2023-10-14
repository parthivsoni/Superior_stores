<?php
	session_start();
	
	if(!isset($_SESSION['Admin_email']))
	{
		echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
	}
	else
	{
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Report</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
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
                                <a class="active-menu" href="Product_Report.php">Product Report</a>
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
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Report Generation<small>&nbsp;&nbsp;Product Report</small>
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
    									<td colspan="10" bgcolor="#3498db"><h2>View All Products Here</h2><br /></td>
    								</tr>
    
                                    <tr align="center" bgcolor="skyblue" style>
                                        <th>S.N</th>
                                        <th>Cat_id</th>
                                        <th> Title</th>
                                         <th>Part_no</th>
                                        <th>Image</th>
                                        <th >Size</th>
                                        <th>Description</th>
                                         <th >Price</th>
									</tr>
                                     <?php
										include("includes/db.php");
										$get_cat = "select * from product_mst";
										
										$run_cat = mysqli_query($con, $get_cat);
										
										$i=0;
										
										while($row_cat=mysqli_fetch_array($run_cat))
										{
										
												$Product_id= $row_cat['Product_id'];
												$Category_id = $row_cat['Category_id'];
												$Product_name=$row_cat ['Product_name'];
												$Product_partno=$row_cat['Product_partno'];
												$Product_image=$row_cat['Product_image'];
												$Product_size=$row_cat['Product_size'];
												$Product_desc=$row_cat['Product_desc'];
												$Product_price=$row_cat['Product_price'];
												$i++;
									?>
									<tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $Category_id;?></td>
                                        <td><?php echo $Product_name;?></td>
                                        <td><?php echo $Product_partno;?></td>
                                         <td><img src="product_images/<?php echo $Product_image;?>" width="60" height="60"/></td>
                                          <td><?php echo $Product_size;?></td>
                                           <td><?php echo $Product_desc;?></td>
                                            <td><?php echo $Product_price;?></td>                                        
                                   </tr>
                                    <?php } ?>
							</table>
								<br><br>
								<button><a href="index.php" style="text-decoration:none; color:#000000;">Go to Home</a></button>
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
<?php }?>