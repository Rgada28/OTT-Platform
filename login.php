<?php

function registration(){
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $rs = $conn->query("select count(username) from students_login where username='$username' and password='$password'");
    $row = $rs->fetch_row();
    $n = $row[0];
    $rs->free();
    $conn->close();

    if($n > 0){
      echo "Accessed";
      session_start();
      $_SESSION["username"] = $username;
      header("Location: index.php");
    }else{
      echo "<b>Authentication failed!</b>";
    }
 }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
    <title>User Login</title>
    <!---we had linked our css file----->
</head>
<!-- <style>
    *{
        border: 2px solid blue;
    }
</style> -->

<body>
    <div class="full-page">
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                </div>
                <center>
                    <h1 style="color:white;">Login</h1>
                </center>
                <form id='login' class='input-group-login' method="post">

                    <input type='text' name="username" class='input-field'  placeholder='Username'  required>
                    <input type='password' name="password" id="pass" class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><label style="color: white;">Remember Password</label>
                    <button type='submit' class='submit-btn' name="submit" value="submit">Log in</button>
                    <br><label style="color: white;">New to Netflix? </label><a href="register.php" ; style="color:white" ;>Register</a>
                    <div>&nbsp;</div>
                </form>
              

            </div>
        </div>
        <?php 

    if(isset($_POST['submit']) && $_POST['submit']=="submit")
        registration();
  ?>
    </div>


</body>

</html>