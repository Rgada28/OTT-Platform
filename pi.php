<?php  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 $query = "SELECT month, count(*) as amount FROM payment GROUP BY month";  
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["month"]."', ".$row["amount"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'number of subscription per  month',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
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
        <span class="input-group-btn">
         
          
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
       <center>
     <div style="width:900px;">  
  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
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
