<?php
session_start();
?>

<!DOCTYPE>
<html>
	<head>
    	<title>Login Form</title>
        <link rel="stylesheet" href="style2/login_css.css" media="all" />
<style>
.forgot-grid {
    margin-top: 1.2em;
}
.forgot {
    float: right;
}
.forgot a {
    font-size: 1em;
    color: #555;
    display:block;
}
.forgot a:hover{
    color: #e94e02;
}
</style>        
	<script type="text/ecmascript">
		 	function admin()
		{
			//Email Validation
		
			var x=document.getElementById('em1').value;

   			var atpos=x.indexOf("@");

   			var dotpos=x.lastIndexOf(".");

			if (x=="")
	
			{
				/*alert("Not a valid e-mail address");*/
				document.getElementById('msg1').innerHTML="Plese enter Email ID";
				return false;
			}
			
			else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			{
				document.getElementById('msg1').innerHTML="Not a valid e-mail address";
				return false;
			}
			else
			{
				document.getElementById('msg1').innerHTML="";
			}
			
			
			//Password validation
			
			if(document.fn.password.value == "")
			{
				document.getElementById('msg2').innerHTML="Please input Password";	
				return false;
			}	
			else
			{
				document.getElementById('msg2').innerHTML="";	
			}
	}

	</script>

    </head>
<body>
<div class="login">
<!-- <div align="center"><img src="img/logo.png"  width="300" height="200"align="center"></div> -->
<?php /*?><h2 style="color:#FFFFFF; text-align:center;"><?php echo @$_GET['not_admin'];?></h2><?php */?>

<h2 style="color:#FFFFFF; text-align:center;"><?php echo @$_GET['logged_out'];?></h2>
	
    <h1>Admin Login</h1>
    <form method="post" action="login.php" name="fn">
    	<input type="text" name="email" placeholder="Email" id="em1">
        	<span id="msg1" style="color:red; font-weight:bold;"></span>
        </input>
        
        <input type="password" name="password" placeholder="Password" maxlength="20">
        	<span id="msg2" style="color:red; font-weight:bold;"></span>
        </input>
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login" onClick="return(admin());">Login</button>
        
       <!-- <div class="forgot-grid">
					<div class="forgot">
						<a href="forget_pswd.php">forgot password?</a>
				    </div>
		</div> -->
        
    </form>
</div>
</body>
</html>
<?php
	include("includes/db.php");
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$pass = $_POST['password'];
		
		$sel_user = "select * from admin where admin_email='$email' AND admin_password='$pass'";
		
		$run_user = mysqli_query($con,$sel_user);
		
		$check_user = mysqli_num_rows($run_user);
		
		if($check_user==1)
		{
				$_SESSION['Admin_email']=$email;
			
				echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
				
			
		}
		else
		{
			echo "<script>alert('Password or Email is wrong, try again!')</script>";
		}
	}
?>