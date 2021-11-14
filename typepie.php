<?php
$connect = mysqli_connect("localhost", "root", "", "project");
$query = "SELECT type, count(*) as genere FROM uploadedimage GROUP BY type";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Gender', 'Number'],
        <?php
        while ($row = mysqli_fetch_array($result)) {
          echo "['" . $row["type"] . "', " . $row["genere"] . "],";
        }
        ?>
      ]);
      var options = {
        title: 'Type Data',
        //is3D:true,  
        pieHole: 0.4
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {
      height: 1500px
    }

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

      .row.content {
        height: auto;
      }
    }
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
                        <a href="Admin-home.php" style="font-size: larger;" class="nav-link  text-center  px-3">                        
                        <span>Home</span>
                        </a>
                    </li>
                    <li class="border border-light">
                        <a href="pi.php"  style="color: White; font-size: larger;" class="nav-link btn-danger active text-center px-3">                        
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
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </main>

</body>

</html>