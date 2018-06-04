<?php 
session_start();
include 'meta.php';
require('connect.php');

if (isset($_POST["usr"]) && isset($_POST["pass"])){

  $name=$_POST["usr"];
  $pass=$_POST["pass"];
  // Define $myusername and $mypassword

// To protect MySQL injection
  $name = stripslashes($name);
  $pass = stripslashes($pass);
  $name = mysqli_real_escape_string($connection,$name);
  $pass = mysqli_real_escape_string($connection,$pass);


  $sql="SELECT username, AES_DECRYPT(password,'secret') AS password FROM users WHERE username='$name'";
  $read=mysqli_query($connection,$sql) or die(mysqli_error($connection));
  $rows=mysqli_fetch_assoc($read);

  // $num_rows=mysqli_num_rows($read);

  if ($rows["username"]==$name && $rows["password"]==$pass)
  {
	# code...
    $_SESSION['username']=$name;

  }
  else
  {
    $fmsg = "Invalid Login Credentials.";
  }
}


if (isset($_SESSION['username'])){
  $name = $_SESSION['username']; 
}
else
{
 header("Location:error.php");


}

?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard </title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">

  <script>
    function resizeIframe(obj) {
      obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    }
  </script>

</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Eventorium</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" style="float:left; margin-right: 15px;" href="panel.php" >Welcome <?php echo $name; ?></a>
        <a class="nav-link" style="float:left;" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="panel.php">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "listevent.php?username=".$name.""; ?>" target="main">
                <span data-feather="file"></span>
                Manage Events
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "newevent.php?username=".$name.""; ?>" target="main">
                <span data-feather="file-plus"></span>
                Create Events
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "profile.php?username=".$name.""; ?>" target="main">
                <span data-feather="users"></span>
                Profile
              </a>
            </li>
          </ul>

        </div>
      </nav>
    </div>
  </div>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">


      </div>


    </div>
    <div class="gallery">
     <center> <a  href="<?php echo "newevent.php?username=".$name.""; ?>"  target="main">
      <img src="images/create.png" alt="Create Event">
    </center>
    <div class="desc">Create your event!
    </div>
  </a>
</div>

<div class="gallery">
 <center> <a  href="<?php echo "listevent.php?username=".$name.""; ?>" target="main"> 
  <img src="images/management.png" alt="Manage event" width="600" height="400">
</center>
<div class="desc">Manage your event!
</div>
</a>
</div>

<div class="gallery">
 <center> <a  href="<?php echo "profile.php?username=".$name.""; ?>" target="main">
   <img src="images/profile.png" alt="Profile" width="600" height="400">
 </center>
 <div class="desc">Profile
 </div>
</a>
</div>
<iframe width="100%"  frameborder="0"  name="main" scrolling="no" onload="resizeIframe(this)"  ></iframe>

</main>

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>

      <script>
        $(document).ready(function(){
          $("a").click(function(){
            $("div").remove(".gallery");
            
          });
        });
      </script>
    </body>
    </html>
