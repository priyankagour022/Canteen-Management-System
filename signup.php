<?php
session_start();
	if (isset($_POST['signup_submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		// $user_type = $_POST['usertype'];

		$conn = mysqli_connect('localhost', 'root', '', 'HCU_FOOD');
		$query = "INSERT INTO customers (username, email, password) VALUES ('$username', '$email', '$password')";
		$result = mysqli_query($conn, $query);

		if ($result) {
			$_SESSION['signed'] = 'true';
			echo '<script>alert("Sign up successful");</script>';
			
			header('location: index.php');
		} else {
			echo '<script>alert("Sign up failed");</script>';
			header('location: index.php');
		}
	}
?>
