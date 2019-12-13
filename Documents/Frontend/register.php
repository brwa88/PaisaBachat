<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post" action="APIs/RegisterConsume.php">
					<span class="login100-form-title p-b-33">
						Account Registration
					</span>

					<div class="wrap-input100 validate-input" data-validate = "First Name is required">
						<input class="input100" type="text" name="First_Name" placeholder="First Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Middle Name is required">
						<input class="input100" type="test" name="Middle_Name" placeholder="Middle Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					
						<div class="wrap-input100 rs1 validate-input" data-validate="Last Name is required">
						<input class="input100" type="test" name="Last_Name" placeholder="Last Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						
						Gender : 
						<input name="Gender" class="input20"  type="radio" />Male <input name="Gender" class="input20" type="radio" />Female 
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
<div class="wrap-input100 rs1 validate-input" data-validate="Date Of Birth is required">
						<input class="input100" type="text" name="DOB" placeholder="Date Of Birth">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
<div class="wrap-input100 rs1 validate-input"  data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="Email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
<div class="wrap-input100 rs1 validate-input" data-validate="Phone is required">
						<input class="input100" type="text" name="Phone" placeholder="Phone">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>


					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>
<div class="text-center">
						<span class="txt1">
						
						<?php
						error_reporting(0);
						session_start();
						if($_SESSION["invalid"]!="")
						{
						echo '<h3 style="color:red">'.$_SESSION["invalid"].'</h3>';
						$_SESSION["invalid"]="";
						}
						
						
						
						?>
							
						</span>

					</div>

					<div class="text-center p-t-45 p-b-4">
					</div>

					<div class="text-center">
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>