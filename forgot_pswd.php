<?php include('header.php')?>
<!DOCTYPE html>
<html>
<head>
	<!-- <title>Forgot Password</title> -->
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
		}
		.forgot-password-container {
			margin: 0 auto;
			max-width: 600px;
			padding: 50px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 10px #ccc;
			margin-top: 20vh;
			/* Center the container element */
			position: relative;
			/* top: 50%;
			left: 50%; */
			/* transform: translate( -50%, -50%); */
			margin-bottom: 10vh; /* add a margin at the bottom */
		}
		.fp {
			text-align: center;
			color: #333;
			margin-top: 0;
		}
		.forgotpassform {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 10px;
		}
		input[type="text"], input[type="email"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			box-shadow: 1px 1px 5px #ccc;
			font-size: 16px;
			color: #333;
			background-color: #f7f7f7;
			transition: box-shadow 0.3s ease-in-out;
		}
		input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
			box-shadow: 0px 0px 10px #aaa;
		}
		input[type="submit"] {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 5px;
			background-color: #333;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: #444;
		}
	</style>
	<script type="text/javascript" language="javascript">
          function validate() {
		 //Email Validation

			var x = document.getElementById('email').value;

			var atpos = x.indexOf("@");

			var dotpos = x.lastIndexOf(".");

			if (x == "") {
				/*alert("Not a valid e-mail address");*/
				document.getElementById('msg12').innerHTML = "Plese enter Email ID";
				return false;
			} else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
				document.getElementById('msg12').innerHTML = "Not a valid e-mail address";
				return false;
			} else {
				document.getElementById('msg12').innerHTML = "";
			}
			//Password & Confirm Password
			if (document.fn.password.value == "") {
				/*alert('Please input Password');
				document.fn.txtPassword.focus();*/
				document.getElementById('msg13').innerHTML = "Please input Password";
				return false;
			} else {
				document.getElementById('msg13').innerHTML = "";
			}
			if (document.fn.conpassword.value == "") {
				/*alert('Please input Confirm Password');
				document.fn.txtConPassword.focus(); */
				document.getElementById('msg14').innerHTML = "Please input Confirm Password";
				return false;
			} else {
				document.getElementById('msg14').innerHTML = "";
			}
			if (document.fn.password.value != document.fn.conpassword.value) {
				/*alert('Confirm Password Not Match');
				document.fn.txtConPassword.focus(); */
				document.getElementById('msg14').innerHTML = "Password is Not Match";
				return false;
			}
		}

	</script>
	</head>
<body>
	<div class="forgot-password-container">
		<h1 id=fp><center>Forgot Password</center></h1>
		<form method="post" action="index.php" id="forgotpassform">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="password">New Password:</label>
			<input type="password" id="password" name="password" required>
			<label for="confirm_password">Confirm Password:</label>
			<input type="password" id="confirm_password" name="confirm_password" required>
			<input type="submit" name="submit" value="Reset Password">
			<!-- <center><h5>New here? <a href="reg.php">Sign Up.</a></h5>
            <h5>Already have an account? <a href="log-in.php">Login In.</a></h5></center> -->
		</form>
	</div>

</body>
</html>
<?php

// ...

// if (isset($_POST['submit'])) {
//   $email = $_POST['email'];

  //Check if the email exists in the database
//   $sql = "SELECT * FROM users WHERE email = '$email'";
//   $result = mysqli_query($conn, $sql);

//   if (mysqli_num_rows($result) > 0) {
    // Send reset password email
//   } else {
    // Email does not exist in the database
//   }
// }

// ...

// mysqli_close($conn);

?>
<?php include('footer.php')?>