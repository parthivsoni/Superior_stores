	<html>
<head>
	<link href="../../../../Program Files/Adobe/Adobe Dreamweaver CS3/bootstrap.css">
</head>
<?php
$con = mysqli_connect("localhost","root","","sup_store");
?>

<?php
function getIp() 
{
    $ip =  $_SERVER['REMOTE_ADDR'];
 	
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
	{
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } 
	
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	{
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
	
 
    return $ip;
}

?>

<?php
	
//creating the shopping cart
function cart()
{
	if (isset($_GET['add_cart']))
	{		
			global $con;
			
			$ip = getIp();
	
			$pro_id = $_GET['add_cart'];
			
			$check_pro = "select * from cart where C_id='$ip' AND Product_id='$pro_id'";
			
			$run_check =mysqli_query($con, $check_pro);
			
			if(mysqli_num_rows($run_check)>0)
			{
				echo "";
			}
			else
			{				
				$insert_pro= "insert into cart (Product_id,C_id) values ('$pro_id','$ip')";
				
				$run_pro = mysqli_query($con, $insert_pro);
				
				echo "<script>window.open('index.php','_self')</script>";
			}
	}
}
?>

<?php
//	getting the totle added items
function totle_items()
{
		if(isset($_GET['add_cart']))
			{
		
			global $con;
			
			$ip = getIp();
			
			$get_items = "select * from  cart where C_id='$ip'";
			
			$run_items = mysqli_query($con, $get_items);
			
			$count_items = mysqli_num_rows($run_items);
		}
		
		else
		{
			global $con;
		
			$ip = getIp();
	
			$get_items = "select * from  cart where C_id='$ip'";
			
			$run_items = mysqli_query($con, $get_items);
			
			$count_items = mysqli_num_rows($run_items);
		}
		echo $count_items;
}
?>

<?php
//Getting the total price of the items in the cart
function total_price()
{
	$total=0;

	global $con;
	
	$ip = getIp();
	
	$sel_price = "select * from cart where C_id='$ip'";
	
	$run_price = mysqli_query($con, $sel_price);
	
	while($p_price=mysqli_fetch_array($run_price))
	{
		$pro_id = $p_price['Product_id'];
		
		$pro_price = "select * from product where p_id='$pro_id'";
		
		$run_pro_price = mysqli_query($con, $pro_price);
		
		while($pp_price = mysqli_fetch_array($run_pro_price))
		{
			$Product_price = array($pp_price['Product_price']);
			
			$values = array_sum($Product_price);
			
			$total +=$values;
		}
	}
	echo "Rs" . $total;
}
?>
<?php
//getting the categories
function getCats()
{
	global $con;
	
	$get_cats="select * from category_mst";
	
	$run_cats=mysqli_query($con, $get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats))
	{
		$Category_id = $row_cats['Category_id'];
		$Category_name = $row_cats['Category_name'];
		
		echo "<li><a href='index.php?cat=$Category_id'>>$Category_name</a></li>"; 
	}
}

?>

<?php

function getPro()
{
	if(!isset($_GET['cat'])){
	
	global $con;
	
	$get_pro="select * from product ";
	
	$run_pro=mysqli_query ($con,$get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro))
	{
		$Product_id = $row_pro['pro_id'];
		$subcat_id = $row_pro['subcat_id'];
		$Product_name = $row_pro['pro_name'];
		$Product_price = $row_pro['pro_price'];
		$Product_image = $row_pro['pro_img'];
		$Product_desc = $row_pro['pro_desc'];
		$Product_stock = $row_pro['pro_stock'];
		
		echo "
				<div class='col-md-3 seller-grid'>
					<h3>$Product_name</h3>
					<img src='Admin/product_images/$Product_image' width='180' height='180' />
					<!--<p><b>Part No: $Product_partno</b></p>
					<p><b>Size: $Product_size</b></p>-->
					<p><b>Rs: $Product_price</b></p>
					<br>
					<a href='details.php?Product_id=$Product_id' style='float:left; color:blue;'>Details</a>
					<a href='index.php?add_cart=$Product_id'><button style='float:right'>Add to Cart</button></a>
					<br><br><br><br><br>
				</div>
 		      ";
			}
		}
}
?>
<?php
function getCatPro()
{
	if(isset($_GET['cat'])){
	
		$Category_id = $_GET['cat'];
	
	global $con;
	
	$get_cat_pro="select * from product_mst where Category_id='$Category_id'";
	
	$run_cat_pro=mysqli_query ($con,$get_cat_pro);
	
	$count_cats = mysqli_num_rows($run_cat_pro);
	
		if($count_cats==0)
		{
			echo "<h2 style='padding:20px;'>No Products where found in this Category!</h2>";
		}
	
		else
		{
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro))
	{
		$Product_id= $row_cat_pro['Product_id'];
		$Category_id= $row_cat_pro['Category_id'];
		$Product_name= $row_cat_pro['Product_name'];
		$Product_partno= $row_cat_pro['Product_partno'];
		$Product_image= $row_cat_pro['Product_image'];
		$Product_size= $row_cat_pro['Product_size'];
		$Product_desc= $row_cat_pro['Product_desc'];
		$Product_price= $row_cat_pro['Product_price'];
			
		echo 
			  "
			  		<div class='col-md-3 seller-grid'>
					<h3>$Product_name</h3>
					
					<img src='Admin/product_images/$Product_image' width='180' height='180' />
					<!--<p><b>Part No: $Product_partno</b></p>
					<p><b>Size: $Product_size</b></p>-->
					<p><b>Rs: $Product_price</b></p>
					<br>
					<a href='details.php?Product_id=$Product_id' style='float:left; color:blue;'>Details</a>
					<a href='index.php?add_cart=$Product_id'><button style='float:right'>Add to Cart</button></a>
					<br><br><br><br><br>
				</div>
			  
			  ";
			}
		}
	}
}
?>

</html>