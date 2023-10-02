<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Log-in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style>
		img {
			width: 100%;
		}

		.login {
			height: 820px;
			width: 100%;
			background: #f2eee3;
			position: relative;
		}

		.login_box {
			width: 1050px;
			height: 600px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: #fff;
			border-radius: 10px;
			box-shadow: 1px 4px 22px -8px #0004;
			display: flex;
			overflow: hidden;
		}

		.login_box .left {
			width: 41%;
			height: 100%;
			padding: 25px 25px;

		}

		.login_box .right {
			width: 59%;
			height: 100%
		}

		.left .top_link a {
			color: #452A5A;
			font-weight: 400;
		}

		.left .top_link {
			height: 20px
		}

		.left .contact {
			display: flex;
			align-items: center;
			justify-content: center;
			align-self: center;
			height: 100%;
			width: 73%;
			margin: auto;
		}

		.left h3 {
			text-align: center;
			margin-bottom: 40px;
		}

		.left input {
			border: none;
			width: 80%;
			margin: 15px 0px;
			border-bottom: 1px solid #4f30677d;
			padding: 7px 9px;
			width: 100%;
			overflow: hidden;
			background: transparent;
			font-weight: 600;
			font-size: 14px;
		}

		.left {
			background: linear-gradient(-45deg, #dcd7e0, #fff);
		}

		.submit {
			border: none;
			padding: 15px 70px;
			border-radius: 8px;
			display: block;
			margin: auto;
			margin-top: 120px;
			background: #5f2020;
			color: #fff;
			font-weight: bold;
			-webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
			-moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
			box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
		}



		.right {
			/* margin-top: 1vh; */
        	margin-left: 1vh;
			margin-right: 1vh;
        	/* margin-bottom: 1vh; */
			/* background: url(https://dailygroceryshop.com/wp-content/uploads/2020/09/Mix-Dry-Fruits-Jute-Pack.png); */
			background: url(assets/img/login2.jpg);
			color: #fff;
			position: relative;
			background-repeat: no-repeat;
		}

		.right .right-text {
			height: 100%;
			position: relative;
			transform: translate(0%, 45%);
		}

		/* .right-text h2 {
			display: block;
			width: 100%;
			text-align: center;
			font-size: 50px;
			font-weight: 500;
		} */

		.right-text h5 {
			display: block;
			width: 100%;
			text-align: center;
			font-size: 19px;
			font-weight: 400;
		}

		.right .right-inductor {
			position: absolute;
			width: 70px;
			height: 7px;
			background: #fff0;
			left: 50%;
			bottom: 70px;
			transform: translate(-50%, 0%);
		}

		.top_link img {
			width: 28px;
			padding-right: 7px;
			margin-top: -3px;
		}

		span.psw {
			float: left;
			padding-top: 16px;
		}

		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}

			.cancelbtn {
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="index.php">
			<img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="handleLogin.php" method="POST">
						<h3>LOG IN</h3>
						<input type="text" placeholder="Enter Email" name="email" required>
						<input type="password" placeholder="Password " name="password" required>
						<span class="nacc">Don't Have an Account ? <a href="reg.php">Sign Up</a></span>
						<br>
						<span class="psw" data-mdb-toggle="modal" data-mdb-target="#exampleModal"> 
							<a href="forgot_pswd.php">Forgot Password ?</a>
						</span><br>
						<button class="submit" id="login" a class="nav-link scrollto" name="login" >LET'S GO</a></button>

					</form>
				</div>
			</div>
			<div class="right">

			</div>
		</div>
	</section>
</body>
</html>
<?php  include 'footer.php'?>