<?php


function register()
{

	$name = $_POST['name'];
	$email = $_POST['ename'];
	$contact = $_POST['cname'];
	$choice = $_POST['radio'];
	$amount = 1200;
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$conn = new mysqli("localhost", "root", "", "project");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO payment (name, email, contact, choice,amount,day,month,year) VALUES ('$name', '$email', $contact, '$choice','$amount',$day,'$month',$year)";



	if ($conn->query($sql) === TRUE) {
		  header("Location: index.php");
	}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	$conn->close();
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Payment</title>
	<link href="bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		.fossil {			
			text-align: center;
			color: black;
			position: relative;
			top:20%;
			left: 20%;
			width: 60%;
			right: 5%;
			box-shadow: 10px 20px 50px black;
			border-radius: 25px;
		}
	</style>

</head>

<body background="p1.jpg">

	<form class="fossil" name="f1" method="post">
		<center>
			<h1>Payment</h1>
		</center>
		<b>Name</b>:&nbsp;
		<input type="text" name="name" required>*<br><br>
		<b>email</b>:&nbsp;
		<input type="text" name="ename" required>*<br><br><br>
		<b>contact no</b>:&nbsp;
		<input type="text" name="cname" maxlength="10" required>*<br><br><br>
		<b>Day</b>:<select name="day" size="1" id="day">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		</select>

		<b>Months</b>:<select name="month" size="1" id="month">
			<option>January</option>
			<option>Februray</option>
			<option>March</option>
			<option>April</option>
			<option>May</option>
			<option>June</option>
			<option>July</option>
			<option>August</option>
			<option>September</option>
			<option>October</option>
			<option>November</option>
			<option>December</option>
		</select>

		<b>year</b>:<select name="year" size="1" id="year">
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
		</select><br><br>

		<b>Card no</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="16" name="cardno" required>*<br><br>
		<b>CVV</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="cvv" maxlength="3" required>*<br><br>
		<b>Choice</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Debit</b><input type="radio" value="Debit" name="radio" required>&nbsp;&nbsp;&nbsp;
		<b>Credit</b><input type="radio" value="Credit" name="radio" required><br><br>
		<label for="expmonth"><b>Exp Month</b></label>
		<b>Months</b>:<select name="expmonth" size="1" id="Expmonth">
			<option>January</option>
			<option>Februray</option>
			<option>March</option>
			<option>April</option>
			<option>May</option>
			<option>June</option>
			<option>July</option>
			<option>August</option>
			<option>September</option>
			<option>October</option>
			<option>November</option>
			<option>December</option>
		</select>
		<br><br><br>

		<div class="row">
			<div class="col-50">
				<label for="expyear"><b>Exp Year</b></label>
				<input type="text" id="expyear" name="expyear" required name=expyear maxlength="4">
			</div><br>
			<b>
<br><br>
			
			<input  class="btn-success" style="width: 25%;" id="submit" type="submit" name="submit" value="submit" onclick="feedb()">&nbsp;&nbsp;&nbsp;
			<input type="reset" class="btn-danger" style="width: 25%;" value="Reset" name="rbutton">
			<h3><a href="index.php" style="text-decoration: none">Back to Home</a></h3>
	</form>


	<?php

	if (isset($_POST['submit']) && $_POST['submit'] == "submit") {
		register();
	}

	?>
	
</body>

</html>