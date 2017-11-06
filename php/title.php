<?php include("../includes/common.php");?>
<?php 
$con= mysqli_connect("localhost","root","","ostproject");
$title= mysqli_real_escape_string($con,$_POST['title']);
$author = mysqli_real_escape_string($con,$_POST['author']);
$desci = mysqli_real_escape_string($con,$_POST['desci']);
$review = mysqli_real_escape_string($con,$_POST['review']);
$email=$_SESSION["email"];
$query1 = "Select id from books where title = '$title'";
$exe = mysqli_query($con,$query1) or die(mysqli_error($con));
$run = mysqli_fetch_array($exe);
if($run[0])
{
	echo "Review dony by".$_SESSION["name"];
	header("Location:/p/book.php");	

	
}

else
{
$query = "Insert into .books(title,author,desci,review,email) values('$title','$author','$desci','$review','$email')";
$done = mysqli_query($con,$query) or die(mysqli_error($con));
header("Location:/p/book.php");	

}

?>