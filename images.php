<?php include("includes/common.php");?>
<?php 
$d="w3images/the-50-coolest-book-covers-9.jpg";
$email_1 = "Select title,author,add1 from images1 where add1='".$d."'";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
if(mysqli_num_rows($exe)==0)
{
  echo"No Title Exists";
  }
else
{
  while($row = mysqli_fetch_array($exe)) {
      echo '
      <div class="container">
      	<div class="row">
	  		<div class="col-md-4">
      			<input type="text" value='.$row[0].'>By
      			<h2 style="text-align:center">'.$row[1].'</h2>
      			<div class="thumbnail">
      			<img src='.$row[2].' alt="Lights" style="width:100%">
      			</div>
      		</div>        
      	</div>
      </div>
 ';}
  
}
?>