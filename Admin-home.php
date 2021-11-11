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
            left: 15%;
            margin-top:
                10%;
            box-shadow:
                10px 20px 50px black;
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .form-control-dark {
            color: #fff;
            background-color: var(--bs-dark);
            border-color: var(--bs-gray);
        }

        .form-control-dark:focus {
            color: #fff;
            background-color: var(--bs-dark);
            border-color: #fff;
            box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .text-small {
            font-size: 85%;
        }

        .dropdown-toggle {
            outline: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto " href="#">Admin Home</a>
            <div class="align-items-center">
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
    <div class="row">
        <div class="col-md-4">
            <div class="card card-style">
                <div class="card-body text-center">
                    <h5 class="card-title ">Monthly reports</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="month.php" class="btn btn-info text-center">check reports</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-style">
                <div class="card-body text-center">
                    <h5 class="card-title ">Yearly reports</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="year.php" class="btn btn-info text-center">check reports</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-style">
                <div class="card-body text-center">
                    <h5 class="card-title ">Country reports</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="country.php" class="btn btn-info text-center">check reports</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="bootstrap.bundle.min.js"></script> -->
</body>

</html>