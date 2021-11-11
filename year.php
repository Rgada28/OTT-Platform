<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head lang="en">
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="reports.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand mx-auto " href="#">Yearly Report</a>
    </div>
  </nav>
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
    } else {
      echo "<br>
      <br>";
    }

    $sql = "SELECT year, SUM(amount) FROM payment GROUP BY year";
    $result = $conn->query($sql);



    echo "<table>
    <tr>
              <td width= 50%>year</td>
              <td width=50%>sales amount</td> 
            </tr>";

    echo "</table>";


    while ($row = $result->fetch_assoc()) {
      // output data of each row

      echo "<table>
    <tr>
              <td width= 50%>" . $row["year"] . "</td>
              <td width=50%>" . $row['SUM(amount)'] . "</td> 
            </tr>";

      echo "</table>";
    }

    $conn->close();
    ?>
    <br>
    <br>
    <a href="Admin-home.php" class="btn btn-danger">Back to Admin Home</a>
  </center>

</body>

</html>