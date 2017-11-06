<!DOCTYPE html>
<html>
  <head>
    <title>HDWallpapers</title>
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
  		<div class="col-md-4">
    <div class="thumbnail">
        <img src="w3images/the-50-coolest-book-covers-7.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
</div>
  		<div class="col-md-8">
               <form method="POST" action="php/title.php" id="form" >
          <h1>Review</h1>
          <div class="form-group" >
            <label for="name" id="name_er">Title :</label>
            <input type="text" id="name" placeholder="Name" maxlength="20" class="form-control" name="title" pattern=".{1,}[a-zA-Z]" title="Enter title" >
          </div>
          <div class="form-group ">
            <label for="email" id="email_er">Author:</label>
            <input type="email" id="email" placeholder="Email" maxlength="35" class="form-control " name="author" required>
          </div>
          <div class="form-group">
            <label for="passwd" id="passwd_er">Description:</label>
            <input type="password" id="passwd" placeholder="Max-50-Characters" maxlength="50" class="form-control" name="desci" required>
          </div>
                    <label for="contact" id="contact_er">Review:</label>
          <div class="input-group form-group">
                              <textarea rows="10" cols="120" type="text" id="contact" placeholder="Add the Review" maxlength="250"  class="form-control " name="review" title="Enter a author" require></textarea>
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
