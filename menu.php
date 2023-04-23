
<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location: index.php');
	} else {
		echo ('
			<script>alert("Customer successfully logged in.");</script>
		');	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>canteen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.container{
			padding:100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>CANTEEN</h1>
			
		</div>
		<div class="menu">
			<h2 style="text-align: center">Menu</h2>
			<form action="order.php" method="post" style="margin: auto">
				<table>
					<tr>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
					</tr>
					<tr>
						<td>Pizza</td>
						<td>rs10</td>
						<td><input type="number" name="pizza_quantity"></td>
					</tr>
										<tr>
						<td>Burger</td>
						<td>rs5</td>
						<td><input type="number" name="burger_quantity"></td>
					</tr>
					<tr>
						<td>Sandwich</td>
						<td>rs7</td>
						<td><input type="number" name="sandwich_quantity"></td>
					</tr>
					<tr>
						<td>Drinks</td>
						<td>rs3</td>
						<td><input type="number" name="drinks_quantity"></td>
					</tr>
				</table>
				<!-- <input type="submit" name="order_submit" value="Order"  > -->

				<button type="submit" name="order_submit">submit</button><br> 
				<!-- onclick="window.location.href='order.php';" -->
			</form>
		</div>
	</div>
</body>
</html>

			

