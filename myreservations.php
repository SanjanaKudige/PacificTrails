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
			<p><span class="resort">Contact Us</span></p>

			<?php

			$email = $_POST['email'];

			$conn = mysqli_connect('localhost', 'root', '', 'pacifictrails');

			if($conn === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			$sql = "SELECT * FROM reservations WHERE email LIKE '$email'";


			if($result = mysqli_query($conn, $sql));
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc	($result)) 
				{
					$firstname = $row["firstname"];
					$lastname = $row["lastname"];
					$email = $row["email"];
					$phone = $row["phone"];
					$arrivaldate = $row["arrivaldate"];
					$nights = $row["nights"];
					$comments = $row["comments"];
					$activities = $row["activities"];
					$packages = $row["packages"];
					$wheny = $row["wheny"];
				}
			}
			mysqli_close($conn);
			?>


			<form action="myreservations.php" method="post">
				
				Email:
				<input type="text" name="email" value="<?php echo $email; ?>">
				<br><br>
				First name:
				<input type="text" name="firstname" value="<?php echo $firstname; ?>">
				<br><br>
				Last name:
				<input type="text" name="lastname" value="<?php echo $lastname; ?>">
				<br><br>
				Phone:
				<input type="text" name="phone" value="<?php echo $phone; ?>">
				<br><br>
				Arrival Date:
				<input type="date" name="arrivaldate" value="<?php echo $arrivaldate; ?>">
				<br><br>
				Activities:
				<input type="text" name="activities" value="<?php echo $activities; ?>">
				<br><br>
				Packages:
				<input type="text" name="packages" value="<?php echo $packages; ?>">
				<br><br>
				When:
				<input type="date" name="wheny" value="<?php echo $wheny; ?>">
				<br><br>

			
		</main>
		<footer>
			<em>Copyright &copy; 2018 Pacific Trails Resort<br>
				<a href="mailto:sanjana@kudigeanishkumar.com">sanjana@kudigeanishkumar.com</a></em>
			</footer>
		</div>
	</body>
	</html>

