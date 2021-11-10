<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "project");
if($conn) {
//if connection has been established display connected.
echo "connected";
}
//if button with the name uploadfilesub has been clicked
if(isset($_POST['uploadfilesub'])) {
$genere=$_POST['genere'];
$name=$_POST['name'];
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = 'imagesuploadedf/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `uploadedimage` (`imagename`,`genere`,`name`)  VALUES ('$filename','$genere','$name')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "</br>image uploaded"; 
}
}

?>


<!DOCTYPE html>
<html>
<head>
<style>
input{
width:50%;
height: 5%;
border:1px;
border-radius: 05px;
padding: 8px 15px 8px 15px;
margin: 10px 0px 15px 0px;
box-shadow: 1px 1px 2px 1px grey;
font-weight: bold
}
</style>
</head>
<body>
<center>
<!--Make sure to put "enctype="multipart/form-data" inside form tag when uploading files -->
<form action="" method="post" enctype="multipart/form-data" >
<!--input tag for file types should have a "type" attribute with value "file"-->
<input type="file" name="uploadfile" /><br><br>
<input type="text" name="genere"/><br><br>
<input type="text" name="name"/><br><br>
<input type="submit" name="uploadfilesub" value="upload" />
</form>
</center>
</body>
</html>