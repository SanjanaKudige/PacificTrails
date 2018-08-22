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
			<p><span class="resort">Find Your Reservation</span></p>


			<?php

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$arrivaldate = $_POST['arrivaldate'];
			$nights = $_POST['nights'];
			$comments = $_POST['comments'];
			$activities = $_POST['activities'];
			$packages = $_POST['packages'];
			$wheny = $_POST['wheny'];

			$con = new mysqli('localhost', 'root', '', 'pacifictrails');
			if($con->connect_error)
			{
				die("Unable to Connect".connect_error($con));
			}
			$insert="INSERT INTO reservations(firstname,lastname,email,phone,arrivaldate,nights,comments,activities,packages,wheny) VALUES ('$firstname','$lastname','$email',$phone,'$arrivaldate',$nights,'$comments','$activities','$packages','$wheny')";

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

			<form action="myreservations.php" method="post">
				* E-Mail:
				<input type="text" name="email" required="required">
				<br><br>
				<input type="submit" value="Submit" name="Submit" onclick="validate()">
			</form>
		</main>
		<footer>
			<em>Copyright &copy; 2018 Pacific Trails Resort<br>
				<a href="mailto:sanjana@kudigeanishkumar.com">sanjana@kudigeanishkumar.com</a></em>
			</footer>
		</div>
	</body>
	</html>
