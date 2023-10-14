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
	
	if(isset($_GET['delete_cat']))
	{
		$delete_id = $_GET['delete_cat'];
		
		$delet_cat = "delete from category where cat_id='$delete_id'";
		
		$run_delete = mysqli_query($con, $delet_cat);
		
		if($run_delete)
		{
			echo "<script>alert('A Category has been deleted!')</script>";
			echo "<script>window.open('view_cats.php','_self')</script>";
		}
	}
?>

<?php } ?>