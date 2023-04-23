<?php
session_start();
	if (isset($_POST['login_submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$conn = mysqli_connect('localhost', 'root', '', 'HCU_FOOD');
		$query = "SELECT * FROM customers WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $query);
		$count = mysqli_num_rows($result);
		
		if ($count == 1) {
			$data = mysqli_fetch_assoc($result);
			session_start();
			if($data['user_type'] == 'admin') {
				$_SESSION['username'] = $data['username'];
				header('location: admin.php');
			} else {
				$_SESSION['username'] = $data['username'];
				echo '<script>alert("log up success");</script>';
				// sleep(2);
				header('location: menu.php');
			}
		} else {			
			echo '<script>alert("Log in failed");</script>';
			// sleep(2);
			header('location: index.php');
		}
	}
?>

