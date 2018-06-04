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
	require ('connect.php');


	$id=$_POST["id"];
	$eventname=$_POST["eventname"];
	$eventype=$_POST["eventype"];
	$startime=$_POST["startime"];
	$finishtime=$_POST["finishtime"];
	$startdate=$_POST["startdate"];
	$finishdate=$_POST["finishdate"];
	$country=$_POST["country"];
	$state=$_POST["state"];
	$place=$_POST["place"];
	$explainevent=$_POST["explainevent"];
	$image=$_FILES['image']['name'];



	$query="UPDATE events SET eventname='$eventname',eventype='$eventype', startime='$startime', finishtime='$finishtime', startdate='$startdate', finishdate='$finishdate', country='$country', state='$state', place='$place', explainevent='$explainevent', image='$image' WHERE id='$id'"; 
	if (mysqli_query($connection, $query)) {
		if (move_uploaded_file($_FILES["image"]["tmp_name"],"images/uploads/" . $_FILES["image"]["name"]))
		{
			echo "<body class=\"mx-auto\">";
			echo "<div class=\"col-md-4 order-md-1 mt-5 mx-auto card bg-light\" style=\"vertical-align: center;\">";
			echo "<div class=\"py-5 text-center\">";
			echo "<h3 class=\"mx-auto\">You have been edited your event!</h3>";
			echo "<button button type=\"button\" class=\"btn btn-danger\"><a href=\"mainpage\">&#x2714;</a></button>";
			echo "</div>";
			echo "</div>";
			echo "</body>";
			echo "</html>";

		}
		else
		{
			echo "<body class=\"mx-auto\">";
			echo "<div class=\"col-md-4 order-md-1 mt-5 mx-auto card bg-light\" style=\"vertical-align: center;\">";
			echo "<div class=\"py-5 text-center\">";
			echo "<h3 class=\"mx-auto\">Failed to upload photo </h3>";
			echo "<button button type=\"button\" class=\"btn btn-danger\"><a href=\"mainpage\">&#x2714;</a></button>";
			echo "</div>";
			echo "</div>";
			echo "</body>";
			echo "</html>";
		}
	}
	else
	{
		echo "Error: " . $query . "<br>" . mysqli_error($connection);

	}
	?>

</body>
</html>