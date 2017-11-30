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

  </head>
<body style="background-color:#2E2E2E ">
	<?php $email=$_SESSION["email"];
$email_1 = "Select id,title,author,desci,review,image from books where email='$email'";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
if(mysqli_num_rows($exe)==0)
{
  echo '<h1 style="text-align:center">No Review Exists</h1></br>';
  echo '<h1 style="text-align:center"><a href="book.php">Click here to add a review</a></h1>';
}
else
{
  while($row = mysqli_fetch_array($exe)) {
      echo '
       
      <div class="container">
      <div class="row">
<div class="col-md-4" style="margin-top:10px;">
    <div class="thumbnail">
    <img src='.$row[5].' alt="Lights" style="width:100%">
    </div>
   <form method="POST" action="edit.php">
    <input type="hidden" value="'.$row[5].'" name="hello">
    <input type="hidden" value="'.$row[0].'" name="ed">
    <input type="submit" class="btn btn-success" name="edit"  value="Edit">
     </form> 
     </br>
   <form method="POST" action="php/delete.php">
    <input type="hidden" value="'.$row[5].'" name="hello">
    <input type="hidden" value="'.$row[0].'" name="ed">
    <input type="submit" class="btn btn-warning"  name="edit"  value="Delete">
     </form> 
    

</div>
<div class="col-md-8" style="margin-top:10px;">

<div class="well well-lg" style="width:100%;height:100%">

      <h1 style="text-align:center;color:#33b5e5">'.$row[1].'</br>By<h1>
       <h2 style="text-align:center;color:#33b5e5">'.$row[2].'<h2>
      <h3 style="text-align:center;color:#33b5e5">'.$row[3].'<h3>
      <h4 style="text-align:left;color:#33b5e5">'.$row[4].'<h4>  </div>
       </div>
        
       </div>

       </div>
      ';}
  
}
?>
</body>
</html>