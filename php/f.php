<?php set_include_path('/p/includes/common.php');?>
<?php $email=$_SESSION["email"];
$email_1 = "Select title,author,desci,review from books where email='$email'";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
$row = mysqli_fetch_array($exe);
if(mysqli_num_rows($exe)==0)
{
	echo"No Review Exists";
	header("Location:/p/book.php");
}
else
{
	
	while($row = mysqli_fetch_array($exe, MYSQL_NUM)) {
      echo "Title:{$row[0]}  <br> ".
         "Author: {$row[1]} <br> ".
         "Description :{$row[2]} <br> ".
         "Review:{$row[3]} <br>";
   }
	
}
?>