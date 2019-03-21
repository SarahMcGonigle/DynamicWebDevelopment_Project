	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "car_rental";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$result=mysqli_query($conn, "SELECT * FROM CARS");

	?>
	<html>
		<head>
		<!--Link to style sheet -->
		<link rel="stylesheet" type="text/css" href="StyleSheet.css">
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		</head>
	<body>
	<div class="container">
		<!--Nav bar -->
		<nav class="navbar navbar-expand-lg navbar-bold bg-dark">
			<a class="navbar-brand" href="WelcomeDB.php" >Easy Rentals</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link" href="WelcomeDB.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="about.html">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="addCar.html">Add Car</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="select.php">View Cars</a>
			  </li>
			  <li class="nav-item active">
				<a class="nav-link" href="delete.php">Delete Car</a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link" href="update.php">Update</a>
			 </li>
			   <li class="nav-item">
				<a class="nav-link" href="logoutdb.php">Log Out</a>
			 </li>
			</ul>
			</div>
		</nav> <!--End of nav bar -->
		<img src="images/car7.png" width="1100" height="400">
		<br>
		
		<h4>Delete a car by pressing the button beside the car you wish to delete </h4>
		
		<br>
	<table border ="1" >
		<tr>
			<th>Car ID</th>
			<th>Make</th>
			<th>Model</th>
			<th>Reg Number</th>
			<th>Daily Hire Rate</th>
			<th>Action</th>
		<tr>
	<?php

	$i=1;

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$car_id = $row['car_id'];
		$make = $row['make'];
		$model = $row['model'];
		$reg_number = $row['reg_number'];
		$daily_hire_rate = $row['daily_hire_rate'];
	?>

	<tr>
		
		<td><?php echo $car_id;?></td>
		<td><?php echo $make;?></td>
		<td><?php echo $model;?></td>
		<td><?php echo $reg_number;?></td>
		<td><?php echo $daily_hire_rate;?></td>
		<td>
			<a href ="delete.php?delete=<?php echo $car_id;?>"onclick="return confirm('Are you sure?');">Delete</a>
		</td>
		
		
	</tr>

		<?php

		$i++;
		}
		if(isset($_GET['delete'])){
			$delete_id= $_GET['delete'];
			
			mysqli_query($conn, "DELETE FROM CARS WHERE CAR_ID = '$delete_id'");
			
			header("location: delete.php");
		}
		?>
	</table>
	</div>
	</body>
	</html>