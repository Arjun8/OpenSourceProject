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

    <div class="container">
   	<div class="row">
      		<div class="col-sm-4 col-sm-offset-4" >       
            <form method="POST" action="php/login_submit.php" id="form" >
         			<div class="panel panel-primary" style="margin-top:20%">
   				<div class="panel-heading"><h3 style="text-align:center">Login</h3></div>
   				<div class="content" style="margin:10px;">
   					<div class="form-group">
   						<label for="email">Email :</label>
   						<input type="email" placeholder="Email" class="form-control" name="email" maxlength="30" required>
   					</div>
   					<div class="form-group">
   						<label for="passw">Password:</label>
   						<input type="password" placeholder="Password" class="form-control" name="passw" required>
   					</div>
   					<div class="form-group">
   						<a href=""><button type="submit" class="btn btn-primary btn-block">Submit</button></a>
   					</div>
   				</div>
   				<div class="panel-footer">
   					<p>Don't have Account Click <a href="signup.php">Here</a></p>
   				</div>
   			</div>
            </form>
   		</div>
   	</div>
   </div>
<?php include("includes/footer.html");?>
</body>
   
</html>