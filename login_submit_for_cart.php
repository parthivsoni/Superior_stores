<?php
require('connection.inc.php');
require('function.inc.php');

	$email=mysqli_real_escape_string($con,$_POST['login_email']);
	$password=mysqli_real_escape_string($con,$_POST['login_password']);
	
	$res=mysqli_query($con,"select * from customer where customer_email='$email' and customer_password='$password'");
	$check_user=mysqli_num_rows($res);
	if($check_user>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['CUSTOMER_LOGIN']='yes';
		$_SESSION['CUSTOMER_ID']=$row['customer_id'];
		$_SESSION['CUSTOMER_NAME']=$row['customer_name'];
		header('location:checkout.php');
      	die(); 
	}else{
		header('location:logedin_for_cart.php');
      	die(); 
	}
?>
