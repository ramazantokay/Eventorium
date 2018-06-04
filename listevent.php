<?php 
// session_start();
// include 'checksession.php';
?>
<?php 
$eventuser=$_GET["username"];
require ('connect.php');
$query="SELECT * FROM events WHERE eventuser='$eventuser' ORDER BY startdate DESC ";

$read =mysqli_query($connection, $query);
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <?php 
      $rows=mysqli_fetch_assoc($read);

      if ($rows["eventname"]==NULL) {
        echo "<body class=\"mx-auto\">";
        echo "<div class=\"col-md-4 order-md-1 mt-5 mx-auto card bg-light\" style=\"vertical-align: center;\">";
        echo "<div class=\"py-5 text-center\">";
        echo "<h3 class=\"mx-auto\">You don't have any event, lets create new one</h3>";
        echo "<button button type=\"button\" class=\"btn btn-info\"><a href=\"newevent.php?username=".$eventuser."\" >&#10010;</a></button>";
        echo "</div>";
        echo "</div>";
        echo "</body>";
        echo "</html>";
      }
      else
      {
      }
      ?>
      <?php 

      $read =mysqli_query($connection, $query);

      while($rows=mysqli_fetch_assoc($read)) { 

        if ($rows["eventname"]!=NULL) {
    # code...

          
         
          echo "<div class=\"col-md-4\" style=\"float:left; \">";
          echo "<div class=\"card mb-4 box-shadow\">";
          echo "<img class=\"card-img-top\" width=\"100\" src=\"images/uploads/".$rows["image"]."\">";
          echo "<div class=\"card-body\">";
          echo "<a class=\"card-text\" href=\"detail.php?id=".$rows["id"]."\" target=\"_blank\">";
          echo  $rows["eventname"];
          echo "</a>";
          echo "<div class=\"d-flex justify-content-between align-items-center\">";
          echo  "<div class=\"btn-group\">";
          echo "<a class=\"btn btn-sm btn-outline-secondary\" href=\"myevents.php?id=".$rows["id"]."\" role=\"button\">Edit</a>";
          echo "<a class=\"btn btn-sm btn-outline-secondary\"  href=\"deletevent.php?id=".$rows["id"]."\" role=\"button\" onclick=\"return confirm('Are you sure?')\">Delete</a>";
          echo "</div>";
          echo "<small class=\"text-muted\">".$rows["startdate"]."</small>";
          echo "</div>";
          echo "</div>"; 
          echo "</div>"; 
          echo "</div>"; 

          
        }


      }





      ?>
    </div>

  </div>
</body>
</html>

