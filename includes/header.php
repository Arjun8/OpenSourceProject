<?php include("common.php");?>
<?php
  echo '
<nav class="navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Document1.php"><img alt="Brand" src="if_Clipping _Picture _alternative_6915.png" width="30" height="30" alt="image" />
        Novice critics</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Document1.php">Home</a></li>
      <li><a href="book.php">Add a book review</a></li>
       </ul>
        <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>';

    if(isset($_SESSION["email"])){
             echo '
             <ul class="nav navbar-nav navbar-left">
                    <li style="font-weight:bold;text-align:center"><a href="">Welcome ';echo $_SESSION["name"] ;echo'</a></li></ul>
                    <ul class = "nav navbar-nav navbar-right">
        <li style="text-align:center"><a href="includes/logout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
        </ul>';
        }   
        else
        {
          echo '
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>';
  }
  echo '
  </div>
</nav>';
?>