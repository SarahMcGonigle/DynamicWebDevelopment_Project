<?php

session_start();
header('location:login_db.php');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'car_rental');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username= $_POST['username'];
$password = $_POST['password'];

$s= "select * from users where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	echo" Username Already Taken";
}else{
	$reg= " insert into users(first_name, last_name, email, username, password) values ('$first_name', '$last_name', '$email','$username', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>