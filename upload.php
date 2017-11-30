<?php include("includes/common.php");?>
<?php 
$con= mysqli_connect("localhost","root","","ostproject");
$target_dir = "C:/wamp64/www/P/w3images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $title= mysqli_real_escape_string($con,$_POST['title1']);
    $author=mysqli_real_escape_string($con,$_POST['author']);
$file = 'w3images/'.mysqli_real_escape_string($con,$_FILES["fileToUpload"]["name"]);

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $query = "Insert into .images1(title,author,add1) values('$title','$author','$file')";
$done = mysqli_query($con,$query) or die(mysqli_error($con));

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       echo '<a href="book.php">Click here to see the add title</a>'; 
         } else {
        echo "Sorry, there was an error uploading your file.";
    }
}