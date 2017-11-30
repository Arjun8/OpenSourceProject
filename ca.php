<!DOCTYPE html>
<html>
<head>
	<title>CA</title>
</head>
<body>
<form action="#" method="POST" >
	<LABEL>Name:</LABEL><input type="text" placeholder="Enter your name" name="name" minlength="4" required=""></input>
	<label>Email</label><input type="email" name="email1" required></input>
	<input type="search" name="dfg">
	<input type="text" name="c_id" required pattern="\d+">
	<input type="submit" name="submit">
</form>
</body>
<?php
$cid='';
$name='';
$e='';
if(isset($_POST["submit"]))
{
	$name=$_POST['name'];
	$cid=$_POST['c_id'];
	$e=$_POST['email1'];
	if(trim($name)=='')
	{
		echo "Name can not be blank";
	}
	else 
	{	if(strlen($name)<3)
	{
		echo "Name should be greater than 3";

	}}
	if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
  	$emailErr = "Invalid email format"; 
  	echo $emailErr;
	}
}
?>
</html>