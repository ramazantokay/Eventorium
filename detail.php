<?php 
$id=$_GET["id"];
require ('connect.php');
$query="SELECT * FROM events WHERE id='$id'";
$read =mysqli_query($connection, $query);
$rows=mysqli_fetch_assoc($read);

?>

<!DOCTYPE html>
<html>
<head>

  <title><?php echo "".$rows["eventname"].""; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

  <header>
    <div class="collapse bg-light" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <?php

            session_start();
            include 'connect.php';
            if(isset($_SESSION['username']))
            {
              echo "<div style=\"text-align:left;\">Welcome : ".$_SESSION['username']."</div><br>";
              echo "<a href=\"panel.php\" class=\"btn btn-primary my-2\">Panel</a> &nbsp; &nbsp;";
              echo "<a href=\"logout.php\" class=\"btn btn-secondary my-2\">Logout</a>";
                // echo "<a href=\"index.php\"><img class=\"mb-4\" src=\"images/eventoriumlogo.png\"  width=\"172\" height=\"172\"></a>";

            }
            else
            {
              echo "</div>";
              echo "<form action=\"panel.php\" method=\"POST\">"; 
              echo "<fieldset style=\"width:200px;height:250px;\">"; 
              echo "<legend ><strong class=\"ml-3\">Login</strong></legend>"; 
              echo "<label class=\"ml-3\">Username:</label>";
              echo  "<input style=\"height:30px;\" type=\"text\"  name=\"usr\" class=\"form-control ml-3\" id=\"email\" required>";
              echo "<label class=\"ml-3\">Password: </label>";
              echo  "<input style=\"height:30px;\" type=\"password\"  name=\"pass\" class=\"form-control ml-3\" id=\"password\" required> <br>";
                // echo "<a href=\"register.php\">Register</a>";
              echo  "<button type=\"submit\" class=\"btn btn-primary ml-3\">Log In</button>";
              echo  "</fieldset>";
              echo  "</form>";
            }
            ?>
          </div>


        </div>
      </div>
    </div>
    <div class="navbar navbar-light bg-light box-shadow">
<!--         <a href="index.php" style="float: left;"><img class="mb-4" src="images/eventoriumlogo.png" alt="" width="30" height="32"></a> 
-->        
<div class="container d-flex justify-content-between">

  <a href="index.php" class="navbar-brand d-flex align-items-center">
    <strong>Eventorium</strong>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
</div>
</header>



<div class="container bg-light">

  <div class="row mt-3">

    <div class="col-md ">
      <img class="img-fluid rounded mt-2"  src="images/uploads/<?php echo "".$rows["image"].""; ?>">
    </div>

    <div class="col-md bg-light h-25 rounded mt-2">
      <h5 style="color: solid grey;"><?php echo "".$rows["startdate"].""; ?></h5>
      <h3><?php echo "".$rows["eventname"].""; ?></h3>
      <h5>by <?php echo "".$rows["eventuser"].""; ?></h5> 
    </div>

  </div>

  <div class="row">
    <div class="col-md rounded bg-">
      <br>
      <h3 style="text-indent:35px;">DESCRIPTION</h3>
      <p style="padding-top: 20px; padding-bottom: 20px; padding-right: 20px; padding-left: 20px; text-indent:35px;">
        <?php echo "".$rows["explainevent"].""; ?>
      </p>


    </div><!--end of description-->

    <div class="col-md rounded bg-light ml-2">

      <h3 class="mt-2 text-info">DATE AND TIME</h3>
      <b>Date:  <?php echo "".$rows["startdate"].""; ?> </b><br>

      <b> Hour: <?php echo "".$rows["startime"].""; ?> </b> <i>Eastern European Standard Time Turkey Time</i><br>

      <br>
      <h3 class="text-info">LOCATION</h3>
      <b><?php echo "".$rows["place"].""; ?></b>
      <br>

    </div><!--end od date-->

  </div>

</div>






<!-- 
    <footer class="text-muted">
      <div class="container">
      
         <a href="index.php" style="float: left;"><img class="mb-4" src="images/eventoriumlogo.png" alt="" width="50" height="53"></a> 
<br> 
         <p>Eventorium</p> 
      </div>
    </footer> 
  -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>