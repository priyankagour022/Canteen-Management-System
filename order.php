<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location: index.html');
	}
	if (isset($_POST['order_submit'])) {
		$username = $_SESSION['username'];
		$pizza_quantity = $_POST['pizza_quantity'];
		$burger_quantity = $_POST['burger_quantity'];
		$sandwich_quantity = $_POST['sandwich_quantity'];
		$drinks_quantity = $_POST['drinks_quantity'];
		$tot_amt = ($pizza_quantity * 8) + ($burger_quantity * 5) + ($sandwich_quantity * 7) + ($drinks_quantity * 3); 
		
		$conn = mysqli_connect('localhost', 'root', '', 'HCU_FOOD');
		$query = "INSERT INTO orders (user_name, pizza_quantity, burger_quantity, sandwich_quantity, drinks_quantity, total_amt) VALUES ('$username', '$pizza_quantity', '$burger_quantity', '$sandwich_quantity', '$drinks_quantity', $tot_amt)";
		$_SESSION['tot_amt'] = $tot_amt;
		$result = mysqli_query($conn, $query);

		if ($result) {
			header('location: bill.php');
		} else {
			echo '<script>alert("Order failed");</script>';
		}
	}
?>

