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
		<a class="navbar-brand" href="home.html" >Easy Rentals</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
		  <li class="nav-item ">
			<a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="about.html">About</a>
		  </li>
		  <li class="nav-item active">
			<a class="nav-link" href="login_db.php">Login</a>
		  </li>
		</ul>
		</div>
	</nav> <!--End of nav bar -->
	
	<!-- Login Form -->
		<div class="login-box">
		<div class ="row">
		<div class ="col-md-6 login-left">
			<h2> Login Here </h2>
			<form action="validation_db.php" method="post">
				<div class ="form-group">
					<label> Username</label>
					<input type ="text" name ="username" class="form-control" required>					
				</div>
				
				<div class ="form-group">
					<label>Password</label>
					<input type ="password" name ="password" class="form-control" required>
				</div>
				
				<button type="submit" class="btn btn-primary"> Login </button>				
					
			</form>
		</div>
		
				<!-- Registration Form -->
			<div class ="col-md-6 login-right">
				<h2> Register Here </h2>
				<form action="registration.php" method="post">
					<div class ="form-group">
						<label> First Name</label>
						<input type ="text" name="first_name" class="form-control" required>					
					</div>
					
					<div class ="form-group">
						<label>Last Name</label>
						<input type ="text" name="last_name" class="form-control" required>
					</div>
					
					<div class ="form-group">
						<label>Email</label>
						<input type ="text" name="email" class="form-control" required>					
					</div>
					
					<div class ="form-group">
						<label>Username</label>
						<input type ="text" name ="username" class="form-control" required>					
					</div>
					
					<div class ="form-group">
						<label>Password</label>
						<input type ="password" name="password" class="form-control" required>
					</div>
					
					<button type="submit" class="btn btn-primary"> Register </button>				
						
				</form>
			</div>
		
		</div>
		</div>
		
		<div>
</body>
</html>