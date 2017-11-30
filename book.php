<!DOCTYPE html>
<html>
  <head>
    <title>Novice Critics</title>
    <link rel="stylesheet" type="text/css" href="Document12.css">
    <link rel="stylesheet" type="text/css" href="style-sign.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="includes/s.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/dist/css/bootstrap.min.css">
<?php include("includes/header.php");?>
<?php if($_SESSION["logged_in"] != true) {
    header("Location:/p/signup.php");
    exit();
}?>
  </head>
  <body style="background-color:#2E2E2E ">
    <div class="container" style="margin-top: 40px;">
      <div class="" style="text-align: center;font-family: verdana"><h1 style="color:#33b5e5">Choose a Title</h1></div>     
      <div class="row" style="text-align:center;">
      
<?php 
$email_1 = "Select id,title,author,add1 from images1 order by id desc";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
if(mysqli_num_rows($exe)==0)
{
  echo"No Title Exists";
  }
else
{
  while($row = mysqli_fetch_array($exe)) {
      echo '
        <div class="col-md-3 style="margin-left=20px;" >
            <h3 style="text-align:center;color:#33b5e5">'.ucwords($row[1]).'</br> By</br> '.ucwords($row[2]).'</h3>
            <div class="thumbnail">
<form action="review.php" method="POST">
            <input type="image" name="hello" src='.$row[3].' value='.$row[3].' alt="Lights" style="width:100%">
            </form>
            </div>
          </div> 
           ';}
  
}
?>
</div>       
</div>
<?php include("includes/footer.html");?>
  </body>
</html>
