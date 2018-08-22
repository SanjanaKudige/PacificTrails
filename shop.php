<!DOCTYPE html>
<head>
	<title>Pacific Trails Resort</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/pacific.css" >
	<script type="text/javascript" src="form.js"></script>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>Pacific Trails Resort</h1>
		</header>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="yurts.html">Yurts</a></li>
				<li><a href="activities.html">Activities</a></li>
				<li><a href="reservations.html">Reservations</a></li>
				<li><a href="myreservations.html">MyReservations</a></li>
				<li><a href="shop.html">Shop</a></li>
			</ul>
		</nav>
		<main>
			<h2>Reservations at Pacific Trails</h2>
			<p><span class="resort">Shop at Pacific Trails</span></p>

			<?php

			$description = $_POST['description'];
			$quantity = $_POST['quantity'];
			$price = $_POST['price'];


			$con = new mysqli('localhost', 'root', '', 'pacifictrails');
			if($con->connect_error)
			{
				die("Unable to Connect".connect_error($con));
			}
			$insert="INSERT INTO shop(description,quantity,price) VALUES ('$description','$quantity','$price')";

			if($con->query($insert)===TRUE)
			{
				echo "Data Inserted!";
			}
			else
			{
				echo "Error!".$insert."<br>".mysqli_error($con);

			}
			mysqli_close($con);

			?>

			<form action="orderinsert.php" method="post">
				<br>
				Name:
				<input name="name" type="text">
				<br><br>

				Email:
				<input name="email" type="text">
				<br><br>
				
				Address:
				<input name="address" type="text">
				<br><br>

				City:
				<input name="city" type="text">
				<br><br>

				State:
				<input name="state" type="text">
				<br><br>

				Zip:
				<input name="zip" type="text">
				<br><br>

				Credit Card:
				<input name="creditcard" type="number">
				<br><br>

				Expiry Month:
				<input name="expirymonth" type="text">
				<br><br>

				Year:
				<input name="year" type="text">
				<br><br>

				<input type="submit" value="Submit" name="Submit" onclick="validateForm()">
			</form>
		</main>
		<footer>
			<em>Copyright &copy; 2018 Pacific Trails Resort<br>
				<a href="mailto:sanjana@kudigeanishkumar.com">sanjana@kudigeanishkumar.com</a></em>
			</footer>
		</div>
	</body>
	</html>