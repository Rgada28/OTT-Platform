<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="reports.css">

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
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
    
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Admin Pannel</a></li>
        <li><a href="month.php">Monthly Report</a></li>
        <li><a href="year.php">Yearly Report</a></li>
        <li><a href="pi.php">subscricer per month</a></li>
      </ul><br>
      <div class="input-group">
        <
        <span class="input-group-btn">
          
        </span>
      </div>
    </div>

    <div class="col-sm-9">
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
      echo "<h3>yearly data</h3>";
    }

  $sql = "SELECT year, SUM(amount) FROM payment GROUP BY year";
    $result = $conn->query($sql);

  

echo"<table>
    <tr>
              <td width= 50%>year</td>
              <td width=50%>sales amount</td> 
            </tr>";          
        
        echo "</table>";


  while($row = $result->fetch_assoc()){
        // output data of each row

  echo"<table>
    <tr>
              <td width= 50%>" .$row["year"]. "</td>
              <td width=50%>" .$row['SUM(amount)']. "</td> 
            </tr>";          
        
        echo "</table>";
    } 

    $conn->close();
    ?> 
  </center>
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
