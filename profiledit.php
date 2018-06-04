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
	require ('connect.php');


	$username=$_POST["username"];
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$password=$_POST["password"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$country=$_POST["country"];
	$state=$_POST["state"];
	$zip=$_POST["zip"];


	$query="UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname',password=AES_ENCRYPT('".$password."','secret'), email='$email', phone='$phone', country='$country', state='$state', zip='$zip' WHERE username='$username'"; 
	if(mysqli_query($connection,$query))
	{
		echo "<body class=\"mx-auto\">";
		echo "<div class=\"col-md-4 order-md-1 mt-5 mx-auto card bg-light\" style=\"vertical-align: center;\">";
		echo "<div class=\"py-5 text-center\">";
		echo "<h3 class=\"mx-auto\">You have been updated your profile!</h3>";
		echo "<button button type=\"button\" class=\"btn btn-danger\"><a href=\"mainpage\">&#x2714;</a></button>";
		echo "</div>";
		echo "</div>";
		echo "</body>";
		echo "</html>";
		header("Refresh: 2; url=profile.php?username=".$username."");
	}
	else
	{
		echo "Error updating record: " . mysqli_error($connection);
	}
	?>

</body>
</html>