<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head lang="en">
  <title>Monthly Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="reports.css">

</head>

<body>
  <div class="container-fluid text-center" style="height:120px; background-color:#CBE432; opacity:0.9;">
    <h1 id="mainHeading">MONTHLY REPORT</h1>
  </div>
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
      echo "<h3>monthly data</h3>";
    }

    $sql = "SELECT month, SUM(amount) FROM payment GROUP BY month";
    $result = $conn->query($sql);



    echo "<table>
    <tr>
              <td width= 50%>Month</td>
              <td width=50%>sales amount</td> 
            </tr>";

    echo "</table>";


    while ($row = $result->fetch_assoc()) {
      // output data of each row

      echo "<table>
    <tr>
              <td width= 50%>" . $row["month"] . "</td>
              <td width=50%>" . $row['SUM(amount)'] . "</td> 
            </tr>";

      echo "</table>";
    }

    $conn->close();
    ?>
  </center>

  <center>
    <h3><a href="Admin-home.php" style="text-decoration: none">Back to Admin Section</a></h3>
  </center>

</body>

</html>