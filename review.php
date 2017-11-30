<!DOCTYPE html>
<html>
  <head>
    <title>Novice Critics</title>
    <link rel="stylesheet" type="text/css" href="Document12.css">
    <link rel="stylesheet" type="text/css" href="style-sign.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="includes/s.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/dist/css/bootstrap.min.css">

<?php include("/includes/header.php");?>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  		<div class="col-md-4" style="margin-top:80px;">
    <div class="thumbnail">
     <?php echo '<img src='.$_POST["hello"].' alt="Lights" style="width:100%;">';?>
      </a>
    </div>

</div>
<div class="col-md-8">
               <form method="POST" action="php/title.php" id="form" >
          <h1>Review</h1>
          <div class="form-group" >
            <label for="name" id="name_er">Title :</label>

<?php 
$d=$_POST["hello"];
$email_1 = "Select title,author from images1 where add1='".$d."'";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
if(mysqli_num_rows($exe)==0)
{
  echo"No Title Exists";
  }
else
{
  while($row = mysqli_fetch_array($exe)) {
      echo '
<input type="text" id="name" placeholder="Title" maxlength="50" class="form-control"  pattern="/[a-zA-Z]*$/" title="Enter title" disabled value="'.ucwords($row[0]).'">;
          </div>
          <input type="hidden" name="title" value="'.ucwords($row[0]).'">
          <div class="form-group ">
            <label for="text" id="email_er">Author:</label>
            <input type="text" id="email" placeholder="Author" maxlength="35"  class="form-control "  disabled value="'.ucwords($row[1]).'">
            <input type="hidden" name="author" value="'.$row[1].'">
          </div>';
      }
  
}
?>
  		 
          <div class="form-group">
            <label for="passwd" id="passwd_er">Description:</label>
             <textarea rows="3" cols="120" type="text" placeholder="Description" maxlength="200"  class="form-control " name="desci" minlength="50" required></textarea>
          </div>
                    <label for="contact" id="contact_er">Review:</label>
          <div class="input-group form-group" >
                              <textarea rows="10" cols="120" type="text" id="contact" placeholder="Add the Review" maxlength="2000"  class="form-control " name="review" minlength="50" title="Enter a author" required></textarea>
          </div>
          <div class="form-group">
          	<?php
          	echo '<input type="hidden" name="image" value='.$_POST["hello"].'>'
          	?>
          </div>
          <div class="form-group">
            <button type="submit" name="submission" class="btn btn-success btn-block" >Submit</button>
          </div>
                    </form>
        </div></div>

  	</div>

    
<?php include("includes/footer.html");?>

  </body>
</html>
