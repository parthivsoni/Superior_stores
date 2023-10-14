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
	
	if(isset($_GET['delete_feedback']))
	{
		$fed_id = $_GET['delete_feedback'];
		
		$delete_fed = "delete from feedback_mst where Feedback_id='$fed_id'";
		
		$run_delete = mysqli_query($con, $delete_fed);
		
		if($run_delete)
		{
			echo "<script>alert('A Feedback has been deleted!')</script>";
			echo "<script>window.open('feedback.php','_self')</script>";
		}
	}
?>

<?php } ?>