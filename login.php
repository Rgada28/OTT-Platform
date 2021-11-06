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
      //echo "Accessed";
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
    <!---we had linked our css file----->
</head>
<body>
    <div class="full-page">
 <div class="navbar">
           <nav>
                <ul id='MenuItems'>
                    <form method="get" action="register.php">
<li><button class='button3' onclick= "document.getElementById('login-page').style.display='block'" style="width:auto;">SIgn-up</button></li>
</form>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                </div>
<center><h1 style="color:white;">Login</h1></center>
                <form id='login' class='input-group-login' method="post">

                    <input type='text' name="username" class='input-field' placeholder='Username' required >
		    <input type='password' name="password" id="pass" class='input-field'placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit' class='submit-btn' name="submit" value="submit">Log in</button>
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

