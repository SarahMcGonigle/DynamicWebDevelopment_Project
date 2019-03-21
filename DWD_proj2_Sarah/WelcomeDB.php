<?php

	//session_start();

	//if (!isset(($_SESSION['username'])){
		//header('location:login_db.php');}
	
	session_start();
	
	if ( isset ( $_SESSION['views'])){
		$_SESSION ['views'] = $_SESSION ['views'] + 1;
	}else {
		$_SESSION ['views']=1;
	}

?>
<html>
	<head>
	
	<title> Home Page</title>
		
	<!--Link to style sheet -->
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
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
	
	<!-- Welcome message for user login -->
	<div class="welcome">
		<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
		<p>Pageviews: <?php echo $_SESSION ['views'];?></p>
	</div>
	
	<!--Carousel -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="images/car1.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="images/car2.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="images/car3.jpg" class="d-block w-100" alt="...">
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	
	<br>
	
	<h3> Why choose Easy Rentals? </h3>
	<br>
	<h5>Flexible Rental Period</h5>
	<p>Whether you need daily, monthly or just a one way hire, choose a length to suit your needs</p>
	<br>
	<h5>New Vehicles</h5>
	<p>All our vehicles are less than 6 months old, ranging from compact to luxury, drive away happy</p>
	<br>
	<h5>Loyalty</h5>
	<p>Become a Privilege member to unlock free hires, discount and priority check-in</p>
	<br>
	<h5>Best Price Guaranteed</h5>
	<p>Get the best price when you book direct with europcar.ie</p>
	

</div> <!-- Close container tag-->

</body>

</html>