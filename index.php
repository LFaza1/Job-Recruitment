<?php
session_start();
include("./php/navigator.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<link rel=" stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/navbar.css">
</head>

<body>
	<?php include('./header.php') ?>
	<div class="loginbox">
		<fieldset>
			<legend><?php echo $error; ?></legend>
			<form method="post" action="">
				<p>Username</p>
				<input type="text" name="user_name" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<br><br>
				<input type="submit" name="submit" value="Login">
				<br><br>
				<p class="signup">Don't have an account? <br> <br>
					Sign Up as an <a href="./applicant/signup.php">Applicant</a> or an <a href="./employer/signup.php">Employer</a>

				</p>
			</form>
		</fieldset>
	</div>
</body>

</html>
