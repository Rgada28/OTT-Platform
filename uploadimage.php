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
<link rel="stylesheet" href="admin.css">

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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto " href="#">Admin home</a>
            <div class="dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/profile.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser2">

                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="alogin.php">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start bg-dark sidebar-nav" tabindex="-1" >
        <!-- <div class="offcanvas-header">            
        </div> -->
        <div class="offcanvas-body p-0 text-white">
            <nav class="navbar-dark"        >
                <ul class="navbar-nav">
                    <li class="m-4">
                        <a href="Admin-home.php" class="nav-link  text-center active px-3">                        
                        <span>Home</span>
                        </a>
                    </li>
                    <li class="m-4">
                        <a href="pi.php" class="nav-link text-center px-3">                        
                        <span>categories report</span>
                        </a>
                    </li>
                    <li class="m-4">
                        <a href="uploadimage.php" class="nav-link btn-danger text-center px-3">                        
                        <span>Add Content</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>    
    <main class="mt-5 pt-5 p-2 text-center">
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
        </main>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>