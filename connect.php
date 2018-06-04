 <?php 
$connection= mysqli_connect('localhost','root','');

if (!$connection) {
	# code...
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db=mysqli_select_db($connection,'eventpublish');
if (!$select_db) {
	# code...
    die("Database Selection Failed" . mysqli_error($connection));
	
}
 ?>


