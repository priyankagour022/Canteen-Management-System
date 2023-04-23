<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location: index.html');
	}

	$username = $_SESSION['username'];
	$conn = mysqli_connect('localhost', 'root', '', 'HCU_FOOD');
	$query = "SELECT * FROM orders WHERE user_name = '$username' ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bill</title> 
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		.container {
			width: 500px;
			margin: 50px auto;
			background-color: white;
			padding: 50px;
			text-align: center;
		}

		table {
			width: 100%;
			margin-top: 50px;
			border-collapse: collapse;
		}

		th, td {
			padding: 10px;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #ddd;
		}

		h1, h3 {
			margin-top: 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Food Ordering System</h1>
		<h3>Bill</h3>
		<table>
			<tr>
				<th>Item</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total</th>
			</tr>
			<tr>
				<td>Pizza</td>
				<td><?php echo $row['pizza_quantity']; ?></td>
				<td>$8</td>
				<td>$<?php echo $row['pizza_quantity'] * 8; ?></td>
			</tr>
			<tr>
				<td>Burger</td>
				<td><?php echo $row['burger_quantity']; ?></td>
				<td>$5</td>
				<td>$<?php echo $row['burger_quantity'] * 5; ?></td>
			</tr>
			<tr>
				<td>Sandwich</td>
				<td><?php echo $row['sandwich_quantity']; ?></td>
				<td>$7</td>
				<td>$<?php echo $row['sandwich_quantity'] * 7; ?></td>
			</tr>
			<tr>
				<td>Drinks</td>
				<td><?php echo $row['drinks_quantity']; ?></td>
				<td>$3</td>
				<td>$<?php echo $row['drinks_quantity'] * 3; ?></td>
			</tr>
			<tr>
				<td colspan="3">Total</td>
				<td>$<?php echo $_SESSION['tot_amt']?></td>
			</tr>
		</table>
		<p><strong>Thank you for your order!</strong></p>
		<a href="logout.php">Log-out</a>
	</div>
</body>
</html>



