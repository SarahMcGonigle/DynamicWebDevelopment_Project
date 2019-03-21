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
		  <li class="nav-item">
			<a class="nav-link" href="WelcomeDB.php">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="about.html">About</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="addCar.html">Add Car</a>
		  </li>
		  <li class="nav-item active">
			<a class="nav-link" href="select.php">View Cars</a>
		  </li>
		  <li class="nav-item">
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
	
	<img src="images/car6.png" width="1100" height="500">
		
	<div class="select">

	<h4> Below is our selection of cars available</h4>
	
	<br>
	

<?php

//1.  Create a database connection
$dbhost ="localhost";
$dbuser ="root";
$dbpassword="";
$dbname = "car_rental";

$connection= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//Test if connection occured

if(mysqli_connect_errno()){
	die("DB connection failed: " .
		mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
			);
}


if (!$connection)
  {
  die('Could not connect: ' . mysqli_error());
  }

//2.  Perform Database Query

$result = mysqli_query($connection,"SELECT * FROM CARS");

echo "<table border='1'>
<tr>
<th>Car Id</th>
<th>Make</th>
<th>Model</th>
<th>Reg Number</th>
<th>Daily Hire Rate</th>
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['car_id'] . "</td>";
  echo "<td>" . $row['make'] . "</td>";
  echo "<td>" . $row['model'] ."</td>";
  echo "<td>" . $row['reg_number'] . "</td>";
  echo "<td>" . $row['daily_hire_rate'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

//4.  Release returned data 

mysqli_free_result($result);

//5.  Close database connection

mysqli_close($connection);
?> 
</div> <!--Close 'select' div-->
</div> <!--container div-->
</body>
</html>