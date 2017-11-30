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
     <?php 
     
        echo '<img src='.$_POST["hello"].' alt="Lights" style="width:100%;">';
      ?>
      </a>
    </div>

</div>
<div class="col-md-8">
<form method="POST" action="php/update.php" id="form" >
<h1>Review</h1>
<div class="form-group" >
<label for="name" id="name_er">Title :</label>
<?php 
$d=$_POST['ed'];
$email_1 ="Select title,author,desci,review from books where id='".$d."'";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
if(mysqli_num_rows($exe)==0)
{
  echo"No Title Exists";
}
else
{
  while($row = mysqli_fetch_array($exe)) {
      echo '<input type="text" id="name" placeholder="Title" name="title" maxlength="50" class="form-control" title="Enter title"  value="'.ucwords($row[0]).'" required>
          </div>
          <div class="form-group ">
            <label for="text" id="email_er">Author:</label>
            <input type="text" id="email" placeholder="Author" name="author" maxlength="35"  class="form-control "   value="'.ucwords($row[1]).'" required>
           </div>
          <div class="form-group">
            <label for="passwd" id="passwd_er">Description:</label>
             <textarea rows="3" cols="120" type="text" placeholder="Description" maxlength="200"  class="form-control " name="desci" minlength="50" value="'.$row[2].'" required>'.$row[2].'</textarea>
          </div>
                    <label for="contact" id="contact_er">Review:</label>
          <div class="input-group form-group" >
                              <textarea rows="10" cols="120" type="text" id="contact" placeholder="Add the Review" maxlength="2000"  class="form-control " name="review" minlength="50" title="Enter a author"  required>'.$row[3].'</textarea>
          </div>
          <input type="hidden" name="id" value="'.$_POST['ed'].'">';

      }
  
}
?>               <div class="form-group">
            <?php
            echo '<input type="hidden" name="image" value='.$_POST["hello"].'>';
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
