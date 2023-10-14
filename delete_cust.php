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
	
	if(isset($_GET['delete_cust']))
	{
		$delete_id = $_GET['delete_cust'];
		
		$delet_c = "delete from customer_registration where Cus_id='$delete_id'";
		
		$run_delete = mysqli_query($con, $delet_c);
		
		if($run_delete)
		{
			echo "<script>alert('A Customer has been deleted!')</script>";
			echo "<script>window.open('view_customer.php','_self')</script>";
		}
	}
?>
<?php } ?>