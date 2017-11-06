<!DOCTYPE html>
<html>
  <head>
    <title>HDWallpapers</title>
    <link rel="stylesheet" type="text/css" href="Document12.css">
    <link rel="stylesheet" type="text/css" href="style-sign.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="includes/s.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/dist/css/bootstrap.min.css">
<?php include("includes/header.php");?>

  </head>
<body>
	<?php $email=$_SESSION["email"];
$email_1 = "Select title,author,desci,review from books where email='$email'";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
if(mysqli_num_rows($exe)==0)
{
  echo"No Review Exists";
  header("Location:/p/book.php");
}
else
{
  while($row = mysqli_fetch_array($exe)) {
      echo '
      <div class="container">
      <div class="row">
<div class="col-md-12">
      <div class="container "><h1 style="text-align:center;">'.$row[0].'</br>By<h1></div>
       <div class="container"><h2 style="text-align:center;">Author:'.$row[1].'<h2></div>
      <div class="container" ><h3 style="text-align:center;">Description:'.$row[2].'<h3></div>
      <div class="container" ><h4 style="text-align:center;">Review:'.$row[3].'<h4></div>
       </div>
       </div>
       </div>';}
  
}
?>
</body>
</html>