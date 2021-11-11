<?php


function register()
{

	$name = $_POST['name'];
	$email = $_POST['ename'];
	$contact = $_POST['cname'];
	$choice = $_POST['radio'];
	$amount = $_POST['amount'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$conn = new mysqli("localhost", "root", "", "project");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO payment (name, email, contact, choice,amount,day,month,year) VALUES ('$name', '$email', $contact, '$choice',$amount,$day,'$month',$year)";



	if ($conn->query($sql) === FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Payment</title>
	<style>
		input {
			border: 2px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
			font-weight: bold
		}
	</style>
	<link href="bootstrap.min.css" rel="stylesheet">
</head>

<body class="text-center">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand mx-auto " href="#">Payment</a>
		</div>
	</nav>

	<form method="post" action="index.php">
		<br>
		<br>
		<input type="text" name="name"  placeholder="Name" required>*
		<br><br>
		<input type="text" name="ename" placeholder="E-mail" required>*<br><br>
		<input type="text" name="cname" placeholder="Phone no" maxlength="10" required>*<br><br>
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

		<input type="text" maxlength="16" placeholder="Card number" name="cardno" required>*<br><br>
		<input type="text" name="cvv" maxlength="3" placeholder="xxx" required>*<br><br>
		<b>Choice</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Debit</b><input type="radio" value="Debit" name="radio" required>&nbsp;&nbsp;&nbsp;
		<b>Credit</b><input type="radio" value="Credit" name="radio" required><br><br>
		<label for="expmonth"><b>Exp Month</b></label>
		<select name="expmonth" size="1" id="Expmonth">
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
		<br><br>
		<div class="row">
			<div class="col-50">
				
				<input type="text" id="expyear" name="expyear" placeholder="Expiry year " required name=expyear maxlength="4">
			</div><br><br>
			<b>amount
				<b>400</b><input type="radio" value="400" name="amount" required>&nbsp;&nbsp;&nbsp;
				<b>200</b><input type="radio" value="200" name="amount" required><br><br>
				<b>1200</b><input type="radio" value="1200" name="amount" required><br><br>
				<input class="btn-success" id="submit" type="submit" onclick="feedb()">&nbsp;&nbsp;&nbsp;
				<input type="reset" class="btn-danger" value="Reset" name="rbutton">
				<br><br>
				<h3><a href="index.php" class="btn btn-warning">Back to Home</a></h3>
	</form>



	<?php

	if (isset($_POST['submit']) && $_POST['submit'] == "submit") {
		register();
	}

	?>
	<script>
		function feedb() {
			alert("Payment Successful");
		}
	</script>
</body>

</html>