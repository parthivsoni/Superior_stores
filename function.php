<?php
$con = mysqli_connect("localhost","root","","sup_store");
function  getcats()
{
	global $con;
	$get_cats = "select * from category";
	$run_cats = mysqli_query($con, $get_cats);
	while( $row_cats=mysqli_fetch_array($run_cats))
	{
		$Category_id = $row_cats['cat_id'];
		$Category_name=$row_cats['cat_name'];
		echo "<li> <a href='#'>$Category_name</a></li>";
		
	}

}

?>
<?php
$con = mysqli_connect("localhost","root","","sup_store");
function  getpro()
{
	global $con;
	$get_pro = "select * from product";
	$run_pro = mysqli_query($con, $get_pro);
	while( $row_pro=mysqli_fetch_array($run_pro))
	{
		$Product_id = $row_pro['Product_id'];
		$subcat_id = $row_pro['subcat_id'];
		$Product_name = $row_pro['Product_name'];
		$Product_price = $row_pro['Product_price'];
		$Product_image = $row_pro['Product_image'];
		$Product_desc = $row_pro['Product_desc'];
		$Product_stock = $row_pro['Product_stock'];
		
		echo "<li> <a href='#'>$Category_name</a></li>";
		
	}

}

?>

<?php
	function getpro()
	{
		global $con;
		$con= mysqli_connect("localhost","root","sup_store")
		$get_pro ="select * from product order by RAND() LIMIT 0,6";
		$run_pro = mysqli_query($con,$get_pro);
		while ($row_pro= mysqli_fetch_array ($run_pro))
		{
		$Product_id = $row_pro['Product_id'];
		$subcat_id = $row_pro['subcat_id'];
		$Product_name = $row_pro['Product_name'];
		$Product_price = $row_pro['Product_price'];
		$Product_image = $row_pro['Product_image'];
		$Product_desc = $row_pro['Product_desc'];
		$Product_stock = $row_pro['Product_stock'];
		echo " <div> <h3> $Pro_name <h3></div>";
		}
	}
?>

<?php
$con = mysqli_connect("localhost","root","","sup_store");
function  getcats()
{
	global $con;
	$get_cats = "select * from category";
	$run_cats = mysqli_query($con, $get_cats);
	while( $row_cats=mysqli_fetch_array($run_cats))
	{
		$Category_id = $row_cats['cat_id'];
		$Category_name=$row_cats['cat_name'];
		echo "<li> <a href='#'>$Category_name</a></li>";
		
	}

}
?>
<?php
$con = mysqli_connect("localhost","root","","sup_store");
function  getpro()
{
	global $con;
	$get_pro = "select * from product";
	$run_pro = mysqli_query($con, $get_pro);
	while( $row_pro=mysqli_fetch_array($run_pro))
	{
		$Product_id = $row_pro['Product_id'];
		$subcat_id = $row_pro['subcat_id'];
		$Product_name = $row_pro['Product_name'];
		$Product_price = $row_pro['Product_price'];
		$Product_image = $row_pro['Product_image'];
		$Product_desc = $row_pro['Product_desc'];
		$Product_stock = $row_pro['Product_stock'];
		echo "<li> <a href='#'>$Category_name</a></li>";
		
	}

}

?>

<?php
	function getpro()
	{
		global $con;
		$con= mysqli_connect("localhost","root","sup_store")
		$get_pro ="select * from product order by RAND() LIMIT 0,6";
		$run_pro = mysqli_query($con,$get_pro);
		while ($row_pro= mysqli_fetch_array ($run_pro))
		{
			$Product_id = $row_pro['Product_id'];
			$subcat_id = $row_pro['subcat_id'];
			$Product_name = $row_pro['Product_name'];
			$Product_price = $row_pro['Product_price'];
			$Product_image = $row_pro['Product_image'];
			$Product_desc = $row_pro['Product_desc'];
			$Product_stock = $row_pro['Product_stock'];
			echo " <div> <h3> $Pro_name <h3></div>";
		}
	}
?>