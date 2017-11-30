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
<body>
	<div class="container" style="margin-top: 40px">
     	<h1>Welcome admin</h1>
     	<div class="row">
     		<div class=" col-sm-4  col-sm-offset-4">
               <form action="upload.php" method="post" enctype="multipart/form-data" >
     			<h3 style="text-align: center;">Upload the title</h3>
     			<div class="form-group" >
     				<label for="name" id="name_er">Title:</label>
     				<input type="text" id="name" placeholder="Title" maxlength="200" class="form-control" name="title1" title="Enter Valid Name"  required>
     			</div>
     			<div class="form-group ">
     				<label for="email" id="email_er">Author:</label>
     				<input type="text" id="email" placeholder="Author" maxlength="200" class="form-control " name="author" required>
     			</div>
     			<div class="form-group">
     				<label> Select image to upload:</label>
     				<input type="file" name="fileToUpload" id="fileToUpload">
     					</div>
                    	<div class="form-group">
     				<button type="submit" name="submit" class="btn btn-success btn-block" value="Upload Image">Upload Title</button>
     			</div>
                    </form>
     		</div>
     	</div>
     </div>
   </body>
</html>