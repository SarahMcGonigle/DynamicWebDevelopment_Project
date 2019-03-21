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

	// Escape user inputs for security

	$car_id = $_POST['car_id'];

	$make = $_POST['make'];

	$model = $_POST ['model'];

	$reg_number = $_POST ['reg_number'];

	$daily_hire_rate = $_POST ['daily_hire_rate'];

	 

	// attempt insert query execution

	mysqli_query($conn, "INSERT INTO cars(car_id, make, model, reg_number, daily_hire_rate) VALUES ('$car_id', '$make', '$model', '$reg_number', $daily_hire_rate)");

	if(mysqli_affected_rows($conn)>0){

		echo "Records added successfully.";

	} else{

		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

	}

	//refresh page after 1 seconds to bring user back to previous page
	header("refresh:1, url=addCar.html");
	 

	// close connection

	mysqli_close($conn);

?>