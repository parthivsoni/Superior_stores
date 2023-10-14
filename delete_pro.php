<?php
	session_start();
	
	if(!isset($_SESSION['Admin_email']))
	{
		echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
	}
	else
	{
?>

<?php
	include("includes/db.php");
	
	if(isset($_GET['delete_pro']))
	{
		$delete_id = $_GET['delete_pro'];
		
		$delet_pro = "delete from product where product_id='$delete_id'";
		
		$run_delete = mysqli_query($con, $delet_pro);
		
		if($run_delete)
		{
			echo "<script>alert('A producnt has been deleted!')</script>";
			echo "<script>window.open('view_products.php','_self')</script>";
		}
	}
?>

<?php }?>