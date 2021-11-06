<?php
function register(){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO students_login (username, email, password) VALUES ('$username', '$email', '$password')";

$fquery = $conn->query($sql);


if ($fquery == TRUE) {

    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="style1.css">
    <!---we had linked our css file----->
</head>

<body>
    <div class="full-page">

        <div id='login-form' class='login-page'>
            <div class="form-box" style="top:10px">
                <div class='button-box'>
                    <div id='btn'></div>

                </div>
                <center>
                    <h1 style="color:white;">Sign Up</h1>
                </center>

                <form id='register' class='input-group-register' method="post" action="">
                    <input type='text' name="username" class='input-field' placeholder='User Name' required>
                    <input type='email' name="email" class='input-field' placeholder='Email Id' required>
                    <input type='password' name="password" id="pass" class='input-field' placeholder='Enter Password' required>
                    <input type='password' class='input-field' placeholder='Confirm Password' required>
                    <input type='checkbox' class='check-box'><label>I agree the terms and conditions</label>
                    <br><label>Already have an account </label><a href="login.php" ; style="color:white">Log in</a>
                    <div>&nbsp;</div>
                    <button type='submit' class='submit-btn' name="submit" value="submit">Register</button>

                </form>


            </div>
        </div>
    </div>
    <?php 

    if(isset($_POST['submit']) && $_POST['submit']=="submit")
        register();
  ?>

</body>

</html>