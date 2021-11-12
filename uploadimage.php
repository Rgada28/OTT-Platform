<?php
error_reporting(0);
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "project");
if ($conn) {
    //if connection has been established display connected.
}
//if button with the name uploadfilesub has been clicked
if (isset($_POST['uploadfilesub'])) {
    $genere = $_POST['genere'];
    $name = $_POST['name'];
    //declaring variables
    $filename = $_FILES['uploadfile']['name'];
    $filetmpname = $_FILES['uploadfile']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'imagesuploadedf/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($filetmpname, $folder . $filename);
    //inserting image details (ie image name) in the database
    $sql = "INSERT INTO `uploadedimage` (`imagename`,`genere`,`name`)  VALUES ('$filename','$genere','$name')";
    $qry = mysqli_query($conn,  $sql);
    if ($qry) {

        echo "<script type='text/javascript'>alert('Record uploaded');</script>";
    }
}
?>


<!DOCTYPE html>
<html>
<link href="bootstrap.min.css" rel="stylesheet">

<head>
    <style>
        input {
            width: 20%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
            font-weight: bold
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand mx-auto " href="#">Add Movie</a>
    </div>
  </nav>
    <center>
        <form action="" method="post" enctype="multipart/form-data">
            <br>
            <br>
            <input type="file" name="uploadfile" /><br><br>
            <input type="text" name="genere" placeholder="Genere" /><br><br>
            <input type="text" name="name" placeholder="Name" /><br><br>
            <input class="btn btn-warning" type="submit" name="uploadfilesub" value="upload" />
            <br>
            <br>
            <a href="Admin-home.php" class="btn btn-danger">Back to Admin Home</a>


        </form>
    </center>
</body>

</html>