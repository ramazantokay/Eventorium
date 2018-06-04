<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">	

	a 
	{
		list-style-type: none;
		text-decoration: none;
	}
</style>
</head>
<body>
	<?php 
	include 'meta.php';
	require('connect.php');

	$firstname=$_POST['firstname'];/*3*/
	$lastname=$_POST['lastname'];/*4*/
	$username=$_POST['username'];/*1*/
	$password=$_POST['password'];/*2*/
	$email=$_POST['email'];/*5*/
	$phone=$_POST['phone'];/*6*/
	$country=$_POST['country'];/*7*/
	$state=$_POST['state'];/*/*/
	$zip=$_POST['zip'];/*9*/
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$query="INSERT INTO users (username, password, firstname, lastname, email, phone, country, state, zip) VALUES('".$username."',AES_ENCRYPT('".$password."','secret'), '".$firstname."', '".$lastname."', '".$email."','".$phone."', '".$country."', '".$state."', '".$zip."');";

	if (mysqli_query($connection,$query)) {
		echo "<body class=\"mx-auto\">";
		echo "<div class=\"col-md-4 order-md-1 mt-5 mx-auto card bg-light\" style=\"vertical-align: center;\">";
		echo "<div class=\"py-5 text-center\">";
		echo "<h3 class=\"mx-auto\">Your account has been created!</h3>";
		echo "<button button type=\"button\" class=\"btn btn-info\"><a href=\"mainpage\">&#x2714;</a></button>";
		echo "</div>";
		echo "</div>";

		header("Refresh: 2; url=login.php");

	}
	else
	{
		echo "<body class=\"mx-auto\">";
		echo "<div class=\"col-md-4 order-md-1 mt-5 mx-auto card bg-light\" style=\"vertical-align: center;\">";
		echo "<div class=\"py-5 text-center\">";
		echo "<h3 class=\"mx-auto\">Oppss!! We faced a problem</h3>";
		echo "Error: " ."<br>" . mysqli_error($connection);
		echo "<br>";
// echo "<button button type=\"button\" class=\"btn btn-danger\"><a href=\"mainpage\">&#x2714;</a></button>";
		echo "</div>";
		echo "</div>";

		header("Refresh: 5; url=register.php");
	}

	mysqli_close($connection);

	?>

</body>
</html>