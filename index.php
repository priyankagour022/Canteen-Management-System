<!DOCTYPE html>
<html>
<head>
	<title> UOH CANTEEN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
         .form{
			text-alignment:center;
			margin-left:150px;
			
		 }
		</style>
</head>
<body>
	<center>
	<div class="container">
		<div class="header">
			<h1>UOH CANTEEN</h1>
		</div>
		<div class="form">
			<form action="login.php" method="post">
				<h2>Login</h2>
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<input type="submit" name="login_submit" value="Login">
			</form>


			<form action="signup.php" method="post">
				<h2>Sign Up</h2>
				<?php 
					session_start();
					if(isset($_SESSION['signed'])) 
					echo ('
		 				<script>alert("Signed up successfully")</script>
					')
				?>
				<input type="text" name="username" placeholder="Username">
				<input type="email" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="submit" name="signup_submit" value="Sign Up">
			</form>
		</div>
	</div>
</center>
</body>
</html>

