<?php
error_reporting(0);
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "project");
if($conn) {
//if connection has been established display connected.
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

echo "<script type='text/javascript'>alert('Record uploaded');</script>";
}
}
?>
<!DOCTYPE html>
<<<<<<< Updated upstream
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
=======
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
>>>>>>> Stashed changes

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

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
<<<<<<< Updated upstream
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
=======
>>>>>>> Stashed changes

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Admin Pannel</a></li>
        <li><a href="month.php">Monthly Report</a></li>
        <li><a href="year.php">Yearly Report</a></li>
        <li><a href="pi.php">subscricer per month</a></li>
      <li><a href="uploadimage.php">Upload new movies / series</a></li>

      </ul><br>
      <div class="input-group">
        <span class="input-group-btn">
         
          
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
       <center>
<h2>Upload new series/movie</h2>
     <form action="" method="post" enctype="multipart/form-data" >
<!--input tag for file types should have a "type" attribute with value "file"-->
<input type="file" name="uploadfile" /><br><br>
<input type="text" name="genere" placeholder='Type'/><br><br>
<input type="text" name="name" placeholder='Name'/><br><br>
 <input type="submit" name="uploadfilesub" value="upload" />
</form> 
  </center>

  
   
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
