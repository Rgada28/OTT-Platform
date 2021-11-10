<?php

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        .card-style {
            width: 18rem;
            left: 20%;
            margin-top:
                10%;
            box-shadow:
                10px 20px 50px black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto" href="#">Admin Home</a>
            <!-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="year.php">Yearly Reports</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="month.php">Monthly Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    
                </ul> -->
        </div>
        </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-style">
                <div class="card-body text-center">
                    <h5 class="card-title ">Monthly reports</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="month.php" class="btn btn-primary text-center">check reports</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-style">
                <div class="card-body text-center">
                    <h5 class="card-title ">Yearly reports</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="yearly.php" class="btn btn-primary text-center">check reports</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-style">
                <div class="card-body text-center">
                    <h5 class="card-title ">Country reports</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="country.php" class="btn btn-primary text-center">check reports</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>