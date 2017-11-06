<?php 
$con = mysqli_connect("localhost","root","","ostproject");
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$passwd = $_POST['passwd'];
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$query1 = "Select id from users where email = '$email'";
$exe = mysqli_query($con,$query1) or die(mysqli_error($con));
$run = mysqli_fetch_array($exe);
if($run[0])
{
	echo "User Exists with That Email";
	echo'<!DOCTYPE html>
	<html>
	<body>
	  <br>
	  <p>Click <a href="/p/login.php">Here </a>to Login</p></body>
	</html>';
	
	
}

else
{
$query = "Insert into .users(name,email,pass,contact,city,address) values('$name','$email','$passwd','$contact','$city','$address')";
$done = mysqli_query($con,$query) or die(mysqli_error($con));
header("Location:/p/index.php");	

}

?>