<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head lang="en">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="admin.css">
    <style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 50%;
	    
	}

	td, th {
	    border: 3px solid #340926;
	    text-align: left;
	    border-radius: 25px;
	    padding: 8px;
	}

	/*tr:nth-child(even) {
	    background-color: #dddddd;
	}*/
</style>
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
                        <a href="Admin-home.php" style="font-size: larger;"  class="nav-link  text-center px-3">                        
                        <span>Home</span>
                        </a>
                    </li>
                    <li class="border border-light">
                        <a href="pi.php" style="font-size: larger;" class="nav-link  text-center px-3">                        
                        <span>categories report</span>
                        </a>
                    </li>
                    <li class="border border-light ">
                        <a href="uploadimage.php" style="font-size: larger;"  class="nav-link text-center px-3">                        
                        <span>Add Content</span>
                        </a>
                    </li>
                    <li class="border border-light">
                        <a href="type.php" style="font-size: larger;" class="nav-link text-center px-3">
                            <span>Type</span>
                        </a>
                    </li>
                    <li class="border border-light">
                        <a href="Paymentinfo.php" style="color: White; font-size: larger;" class="nav-link active btn-danger  text-center px-3">
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
   <!-- Content here -->
   <center>
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
			echo "<h3>Payment details</h3>";
		}

		$sql = "SELECT name, email, contact,amount FROM payment";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
			echo"<table>
		    <tr>
					    <th>Name</th>
					    <th>Email</th>
					    <th>Contact</th>
					    <th>Amount</th>
			
					  </tr>";
		    while($row = $result->fetch_assoc()) {
					  echo"
					  <tr>
					    <td>" .$row["name"]. "</td>
					    <td>" .$row["email"]. "</td>
					    <td>" .$row["contact"]. "</td>
					    <td>" .$row["amount"]. "</td>
					    
					  </tr>";
					
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}

		$conn->close();
		?> 
	</center>
    </main>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>