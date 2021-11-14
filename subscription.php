<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Plans</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">



  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
    }

    .container {
      max-width: 960px;
    }

    .pricing-header {
      max-width: 700px;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>
  <div class="container py-3">
    <main style="padding-top: 100px;">
      <h2 class="display-6 text-center mb-4">Choose your Plan</h2>
      <?php 
      if(isset($_POST['Submit'])){
        $plan=$_POST['name'];
      }
      ?>
      <form action="payment.php" method="post">
        <div class="table-responsive">
          <table class="table text-center">
            <thead>
              <tr>
                <th style="width: 34%;"></th>
                <th style="width: 22%;">Basic</th>
                <th style="width: 22%;">Standard</th>
                <th style="width: 22%;">Premium</th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th scope="row" class="text-start">Monthly price</th>
                <td>200</td>
                <td>400</td>
                <td>1200</td>
              </tr>
            </thead>
            <thead>
              <tr>
                <th scope="row" class="text-start">Video qualiity</th>
                <td>Good</td>
                <td>Better</td>
                <td>Best</td>
              </tr>
            </thead>
            <thead>
              <tr>
                <th scope="row" class="text-start">Resolution</th>
                <td>480p</td>
                <td>720p</td>
                <td>1080p</td>
              </tr>
            </thead>
            <thead>
              <tr>
                <th scope="row" class="text-start"></th>
                <td><button type="submit" class="w-50 btn btn-lg btn-danger" name="action" value="200"  formaction="payment.php">Pay</button></td>
                <td><button type="submit" class="w-50 btn btn-lg btn-danger" name="action" value="400" formaction="payment1.php" >Pay</button></td>
                <td><button type="submit" class="w-50 btn btn-lg btn-danger" name="action" value="1200" formaction="payment2.php">Pay</button></td>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
              </tr>
            </thead>
          </table>
        </div>

    </main>
    </form>
    <footer class="pt-4 my-md-5 pt-md-5 "">
      <div class=" row">

  </div>
  </footer>
  </div>

</body>

</html>