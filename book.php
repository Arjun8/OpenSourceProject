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
<?php if($_SESSION["logged_in"] != true) {
    header("Location:/p/signup.php");
    exit();
}?>
  </head>
  <body>
    <div class="container" style="margin-top: 40px;">
      <div class="" style="text-align: center;font-family: verdana"><h1>Choose a Title</h1></div>      
    <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="review.php">
        <img src="w3images/the-50-coolest-book-covers-7.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/the-50-coolest-book-covers-7.jpg">
        <img src="w3images/the-50-coolest-book-covers-9.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/the-50-coolest-book-covers-7.jpg">
        <img src="w3images/the-50-coolest-book-covers-18.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/the-50-coolest-book-covers-7.jpg">
        <img src="w3images/the-50-coolest-book-covers-20.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/the-50-coolest-book-covers-7.jpg">
        <img src="w3images/the-50-coolest-book-covers-31.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/the-50-coolest-book-covers-7.jpg">
        <img src="w3images/the-50-coolest-book-covers-35.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
</div>
</div>
<?php include("includes/footer.html");?>
  </body>
</html>
