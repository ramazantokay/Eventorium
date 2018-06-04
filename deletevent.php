<?php 
// include 'checksession.php';
?>
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
	$id=$_GET["id"];
	$query="DELETE FROM events WHERE id='".$_GET["id"]."'";
// if($_SESSION['username']){
	$oku=mysqli_query($connection,$query);

	echo "<body class=\"mx-auto\">";
	echo "<div class=\"col-md-4 order-md-1 mt-5 mx-auto card bg-light\" style=\"vertical-align: center;\">";
	echo "<div class=\"py-5 text-center\">";
	echo "<h3 class=\"mx-auto\">You have been deleted your event!</h3>";
	echo "<button button type=\"button\" class=\"btn btn-danger\"><a href=\"mainpage\">&#x2714;</a></button>";
	echo "</div>";
	echo "</div>";
	echo "</body>";
	echo "</html>";
// }
	?>

</body>
</html>