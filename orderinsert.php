
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
			<p><span class="resort">Thank You for the Order!</span></p>


			<?php

			$name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$creditcard = $_POST['creditcard'];
			$expirymonth = $_POST['expirymonth'];
			$year = $_POST['year'];

			$con = new mysqli('localhost', 'root', '', 'pacifictrails');
			if($con->connect_error)
			{
				die("Unable to Connect".connect_error($con));
			}
			$insert="INSERT INTO placeyourorder(name,email,address,city,state,zip,creditcard,expirymonth,year) VALUES ('$name','$email','$address','$city','$state','$zip','$creditcard','$expirymonth','$year')";

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

			<form action="shop.html" method="post">
				<br>
				Name:
				<input type="text" name="name" value="<?php echo $name; ?>">
				<br><br>
				

				Address:
				<input type="text" name="address" value="<?php echo $address; ?>">
				<br><br>
				City:
				<input type="date" name="city" value="<?php echo $city; ?>">
				<br><br>
				State:
				<input type="text" name="state" value="<?php echo $state; ?>">
				<br><br>
				Zip:
				<input type="text" name="zip" value="<?php echo $zip; ?>">
				<br><br>
				Credit Card:
				<input type="text" name="creditcard" value="<?php echo $creditcard; ?>">
				<br><br>
				Expiry Month:
				<input type="text" name="expirymonth" value="<?php echo $expirymonth; ?>">
				<br><br>
				Year:
				<input type="text" name="year" value="<?php echo $year; ?>">
				<br><br>


				<input type="submit" value="Continue Shopping" name="Submit" onclick="shop.html">
			</form>
		</main>
		<footer>
			<em>Copyright &copy; 2018 Pacific Trails Resort<br>
				<a href="mailto:sanjana@kudigeanishkumar.com">sanjana@kudigeanishkumar.com</a></em>
			</footer>
		</div>
	</body>
	</html>
