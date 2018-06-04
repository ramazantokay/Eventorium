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
	session_start();
	echo "<body class=\"mx-auto\">";
	echo "<div class=\"col-md-4 order-md-1 mt-5 mx-auto card bg-light\" style=\"vertical-align: center;\">";
	echo "<div class=\"py-5 text-center\">";
	echo "<h3 class=\"mx-auto\">Oppss!! Sorry, there is no username with the specified password.</h3>";
	echo "<br>";
// echo "<button button type=\"button\" class=\"btn btn-danger\"><a href=\"mainpage\">&#x2714;</a></button>";
	echo "</div>";
	echo "</div>";

unset($_SESSION["username"]); // will delete just the name data
session_destroy(); // will delete ALL data associated with that user.
header("Refresh: 2; url=login.php");
?>
</body>
</html>