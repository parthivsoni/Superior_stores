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
	
	if(isset($_GET['delete_subcat']))
	{
		$delete_id = $_GET['delete_subcat'];
		
		$delete_subcat = "delete from sub_cat where subcat_id='$delete_id'";
		
		$run_delete = mysqli_query($con, $delete_subcat);
		
		if($run_delete)
		{
			echo "<script>alert('A Sub Category has been deleted!')</script>";
			echo "<script>window.open('view_subcat.php','_self')</script>";
		}
	}
?>

<?php } ?>