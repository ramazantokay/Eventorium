<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eventorium</title>
  <?php 
  include 'connect.php';
  ?>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Custom styles for this template -->
</head>

<body>

  <header>
    <div class="collapse bg-light" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
           <?php

           session_start();
           if(isset($_SESSION['username']))
           {
            echo "<div style=\"text-align:left;\">Welcome : ".$_SESSION['username']."</div><br>";
            echo "<a href=\"panel.php\" class=\"btn btn-primary my-2\">Panel</a> &nbsp; &nbsp;";
            echo "<a href=\"logout.php\" class=\"btn btn-secondary my-2\">Logout</a>";

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



<main role="main">


 <div class="container-fluid py-5 bg-light">

<!--   <div class="row mx-auto" id="searchbox" class="bg-light box-shadow">
-->   
<div class="container-fluid border border-dark">
  <div class="row mt-4">
   <h1 class="mx-auto mb-4">Find events</h1>
 </div>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="row mb-5">
    <div class="col-md-3 mx-auto">     
     <input type="text" class="form-control" name="eventname" placeholder="Enter Event Name">  
   </div>    
   <div class="col-md-2 mx-auto">  
    <input type="date" class="form-control"  name="date">
  </div>     
  <div class="col-md-2 mx-auto">
    <select class="form-control" name="state"   >
      <option disabled selected>Cities</option>              
      <option>Adana</option>              
      <option>Adıyaman</option>             
      <option>Afyonkarahisar</option>             
      <option>Ağrı</option>             
      <option>Amasya</option>             
      <option>Ankara</option>             
      <option>Antalya</option>              
      <option>Artvin</option>             
      <option>Aydın</option>              
      <option>Balıkesir</option>              
      <option>Bilecik</option>              
      <option>Bingöl</option>             
      <option>Bitlis</option>             
      <option>Bolu</option>             
      <option>Burdur</option>             
      <option>Bursa</option>              
      <option>Çanakkale</option>              
      <option>Çankırı</option>              
      <option>Çorum</option>              
      <option>Denizli</option>              
      <option>Diyarbakır</option>             
      <option>Edirne</option>             
      <option>Elazığ</option>             
      <option>Erzincan</option>             
      <option>Erzurum</option>              
      <option>Eskişehir</option>              
      <option>Gaziantep</option>              
      <option>Giresun</option>              
      <option>Gümüşhane</option>              
      <option>Hakkari</option>              
      <option>Hatay</option>              
      <option>Isparta</option>              
      <option>Mersin</option>             
      <option>İstanbul</option>             
      <option>İzmir</option>              
      <option>Kars</option>             
      <option>Kastamonu</option>              
      <option>Kayseri</option>              
      <option>Kırklareli</option>             
      <option>Kırşehir</option>             
      <option>Kocaeli (İzmit)</option>              
      <option>Konya</option>              
      <option>Kütahya</option>              
      <option>Malatya</option>              
      <option>Manisa</option>             
      <option>Kahramanmaraş</option>              
      <option>Mardin</option>             
      <option>Muğla</option>              
      <option>Muş</option>              
      <option>Nevşehir</option>             
      <option>Niğde</option>              
      <option>Ordu</option>             
      <option>Rize</option>             
      <option>Sakarya (Adapazarı)</option>              
      <option>Samsun</option>             
      <option>Siirt</option>              
      <option>Sinop</option>              
      <option>Sivas</option>              
      <option>Tekirdağ</option>             
      <option>Tokat</option>              
      <option>Trabzon</option>              
      <option>Tunceli</option>              
      <option>Şanlıurfa</option>              
      <option>Uşak</option>             
      <option>Van</option>              
      <option>Yozgat</option>             
      <option>Zonguldak</option>              
      <option>Aksaray</option>              
      <option>Bayburt</option>              
      <option>Karaman</option>              
      <option>Kırıkkale</option>              
      <option>Batman</option>             
      <option>Şırnak</option>             
      <option>Bartın</option>             
      <option>Ardahan</option>              
      <option>Iğdır</option>              
      <option>Yalova</option>             
      <option>Karabük</option>              
      <option>Kilis</option>              
      <option>Osmaniye</option>             
      <option>Düzce</option>                      
    </select>
  </div>
  <div class="col-md-2 mx-auto">
    <select class="form-control"  name="eventype" >
      <option disabled selected>Type of Event</option>
      <option>Conference</option>
      <option>Seminar</option>
      <option>Meeting</option>
      <option>Workshop</option>
      <option>Team Building Event</option>
      <option>Trade Show</option>
      <option>Press Conference</option>
      <option>Networking Event</option>
      <option>Opening Ceremony</option>
      <option>Product Launce</option>
      <option>Theme Party</option>
      <option>Award Ceremony</option>
      <option>Wedding</option>
      <option>Family Event</option>
      <option>Concert</option>
      <option>Theatre</option>
      <option>Other</option>
    </select>
  </div>
  <div class="col-md-2 mx-auto"> 
    <button type="submit" name="submit" class="form-control btn-warning">Search</button>    
  </div>
</div>

</form>

</div>


</div>



<div class="container">


  <h1 class="mt-5">Events</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="row">
      <div class="col-md-3 col-sm-4 mt-2 mb-2">
        <button class="form-control btn-primary mx-auto"  name="activebut">Active Events</button>
      </div>
      <div class="col-md-3 col-sm-4 mt-2 mb-2 ">    
        <button class="form-control btn-info"  name="pastbut">Past Events</button>
      </div>      

    </form>

  </div>

  <div class="row">
    <!-- Default Query -->
    <?php 
    $today=date("Y-m-d");

    if(!isset($_POST['submit']) && !isset($_POST['activebut']) && !isset($_POST['pastbut']))
    {
      $query="SELECT * FROM events WHERE startdate >= '$today' ORDER BY startdate DESC";
      $read =mysqli_query($connection, $query);

      while($rows=mysqli_fetch_assoc($read)) { 

        if ($rows["eventname"]!="") {

          echo "<div class=\"col-md-4\" style=\"float:left;\">";
          echo "<div class=\"card mb-4 box-shadow\">";
          echo "<img class=\"card-img-top\" src=\"images/uploads/".$rows["image"]."\">";
          echo "<div class=\"card-body\">";
          echo "<a class=\"card-text\" href=\"detail.php?id=".$rows["id"]."\">";
          echo  $rows["eventname"];
          echo "</a>";
          echo "<div class=\"d-flex justify-content-between align-items-center\">";
          echo "<small class=\"text-muted\">".$rows["startdate"]."</small>";
          echo "</div>";
          echo "</div>"; 
          echo "</div>"; 
          echo "</div>"; 
        }
      }
      mysqli_data_seek($read, 0);
    }
    ?>


    <!-- Active Past -->
    <?php 

    if(isset($_POST['activebut']))
    {
        // echo $today;
        // select * from tablename where eventstart >= '10/29/2012' order by eventstart asc

        // $query="SELECT * FROM events ORDER BY CASE WHEN startdate  '2018-05-13' THEN startdate ELSE NULL END ASC";
        // $query="SELECT *
        //         FROM events
        //         ORDER BY (CASE WHEN DATE(startdate) < DATE(GETDATE())
        //                       THEN 1
        //                       ELSE 0
        //                  END) DESC, startdate ASC";
      $query="SELECT * FROM events where startdate >= '$today' ORDER BY startdate DESC";
      $read =mysqli_query($connection, $query);

      while($rows=mysqli_fetch_assoc($read)) { 

        if ($rows["eventname"]!="") {

          echo "<div class=\"col-md-4\" style=\"float:left;\">";
          echo "<div class=\"card mb-4 box-shadow\">";
          echo "<img class=\"card-img-top\" src=\"images/uploads/".$rows["image"]."\">";
          echo "<div class=\"card-body\">";
          echo "<a class=\"card-text\" href=\"detail.php?id=".$rows["id"]."\">";
          echo  $rows["eventname"];
          echo "</a>";
          echo "<div class=\"d-flex justify-content-between align-items-center\">";

          echo "<small class=\"text-muted\">".$rows["startdate"]."</small>";
          echo "</div>";
          echo "</div>"; 
          echo "</div>"; 
          echo "</div>"; 
        }
      }
    }
    else if(isset($_POST['pastbut']))
    {
      $query="SELECT * FROM events where startdate < '$today' ORDER BY startdate DESC";
      $read =mysqli_query($connection, $query);

      while($rows=mysqli_fetch_assoc($read)) { 

        if ($rows["eventname"]!="") {

          echo "<div class=\"col-md-4\" style=\"float:left;\">";
          echo "<div class=\"card mb-4 box-shadow\">";
          echo "<img class=\"card-img-top\" src=\"images/uploads/".$rows["image"]."\">";
          echo "<div class=\"card-body\">";
          echo "<a class=\"card-text\" href=\"detail.php?id=".$rows["id"]."\">";
          echo  $rows["eventname"];
          echo "</a>";
          echo "<div class=\"d-flex justify-content-between align-items-center\">";

          echo "<small class=\"text-muted\">".$rows["startdate"]."</small>";
          echo "</div>";
          echo "</div>"; 
          echo "</div>"; 
          echo "</div>"; 
        }
      }
    } 
    ?>
    <!--Search Box Query  -->
    <?php
    if(isset($_POST['submit']))
    {
      $search=$_POST['eventname'];
      $date=$_POST['date'];
      $state = (isset($_POST['state']) ? $_POST['state'] : null);
      $eventype = (isset($_POST['eventype']) ? $_POST['eventype'] : null);
        // $state=$_POST['state'];
        // $eventype=$_POST['eventype'];
      $query="SELECT * FROM events WHERE  startdate >= '$today' AND eventname LIKE '%$search%' AND startdate LIKE '%$date%' AND state LIKE '%$state%' AND eventype LIKE '%$eventype%' ORDER BY startdate DESC";
        // $query="SELECT * FROM events WHERE (eventname LIKE '%".$search."%') OR (stardate LIKE '%".$date."%')";
      $read =mysqli_query($connection, $query);
      while($rows=mysqli_fetch_assoc($read)) {        
        if ($rows["eventname"]!="") {
          echo "<div class=\"col-md-4\" style=\"float:left;\">";
          echo "<div class=\"card mb-4 box-shadow\">";
          echo "<img class=\"card-img-top\" src=\"images/uploads/".$rows["image"]."\">";
          echo "<div class=\"card-body\">";
          echo "<a class=\"card-text\" href=\"detail.php?id=".$rows["id"]."\">";
          echo  $rows["eventname"];
          echo "</a>";
          echo "<div class=\"d-flex justify-content-between align-items-center\">";
          echo "<small class=\"text-muted\">".$rows["startdate"]."</small>";
          echo "</div>";
          echo "</div>"; 
          echo "</div>"; 
          echo "</div>"; 
        }
      }
    }
    ?>


  </div> 
</div>
</div>
</main>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">

      <a href="#">Back to top</a>
    </p>
    <a href="index.php" style="float: left;"><img class="mb-4" src="images/eventoriumlogo.png" alt="" width="50" height="53"></a> 
    <!-- <br> -->
    <!-- <p>Eventorium</p> -->
  </div>
</footer>

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>