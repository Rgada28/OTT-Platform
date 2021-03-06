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
    $type = $_POST['type'];

    //declaring variables
    $filename = $_FILES['uploadfile']['name'];
    $filetmpname = $_FILES['uploadfile']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'imagesuploadedf/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($filetmpname, $folder . $filename);
    //inserting image details (ie image name) in the database
    $sql = "INSERT INTO `uploadedimage` (`imagename`,`genere`,`name`,`type`)  VALUES ('$filename','$genere','$name','$type')";
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
        table{
            margin-left: 25px;
        }
        td,
        th {
            border: 3px solid #340926;
            text-align: left;
            border-radius: 25px;
            padding: 8px;
        }
    </style>
    <title>Add content</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto " href="#">Admin home</a>
            <div class="dropdown">
                <a href="Admin-home.php" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
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
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li class="border border-light">
                        <a href="Admin-home.php" style="font-size: larger;" class="nav-link  text-center  px-3">                        
                        <span>Home</span>
                        </a>
                    </li>
                    <li class="border border-light">
                        <a href="pi.php" style="font-size: larger;" class="nav-link  text-center px-3">                        
                        <span>categories report</span>
                        </a>
                    </li>
                    <li class="border border-light ">
                        <a href="uploadimage.php" style="color: White; font-size: larger;"  class="btn-danger active nav-link text-center px-3">                        
                        <span>Add Content</span>
                        </a>
                    </li>
                    <li class="border border-light">
                        <a href="type.php" style="font-size: larger;" class="nav-link text-center px-3">
                            <span>Type</span>
                        </a>
                    </li>
                    <li class="border border-light">
                        <a href="Paymentinfo.php" style="font-size: larger;" class="nav-link  text-center px-3">
                            <span>Payment report</span>
                        </a>
                    </li>
                    <li class="border border-light">
                        <a href="genre.php" style="font-size: larger;" class="nav-link   text-center px-3">
                            <span>Genre</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>    
    <main class="mt-5 pt-5 p-2 text-center">
        <form action="" method="post" enctype="multipart/form-data">
            <!--input tag for file types should have a "type" attribute with value "file"-->
            <input type="file" name="uploadfile" /><br><br>
            <input type="text" name="genere" placeholder='genere' /><br><br>
            <input type="text" name="name" placeholder='Name' /><br><br>
            <input type="text" name="type" placeholder='type' /><br><br>
            <input type="submit" class="btn-danger" name="uploadfilesub" value="upload" />
            <br>
            <br>
            <br>
        </form>
        <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "project";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		else{
			echo "<h3>Content Details</h3>";
		}

		$sql = "SELECT imagename, genere, name,type FROM uploadedimage";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
			echo"<table>
		    <tr>
					    <th  style='width: 200px;'>Image</th>                        
					    <th style='width: 200px;' >Name</th>
					    <th style='width: 200px;' >Genre</th>
					    <th style='width: 200px;'>Type</th>
                        <th style='width: 200px;'>Actions</th>
			
					  </tr>";
		    while($row = $result->fetch_assoc()) {?>
					  
					  <tr>
					    <td><img style="width: 100%; height: 100px;" src="img/<?php echo $row["imagename"];?>"/> </td>
                        <?php echo
					    "<td class='text-center'>" .$row["name"]. "</td> 
					    <td class='text-center'>" .$row["genere"]. "</td>
					    <td class='text-center'>" .$row["type"]. "</td>
					    <td> <a href='#' class='btn  btn-warning'> Edit</a>
                        <a href='#' class='btn  btn-danger'> delete</a>
                        </td>
					  </tr>";
					
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}

		$conn->close();
		?> 
    </main>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>