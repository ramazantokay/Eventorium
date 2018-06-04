<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Eventorium</title>

	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Custom styles for this template -->
	<link href="css/album.css" rel="stylesheet">
</head>

<body>

	<header>
		<div class="collapse bg-light" id="navbarHeader">
			<div class="container">
				<div class="row">
<!-- 						<div class="col">
							<img src="images/eventoriumlogo.png" width="150px;" height="150px;">
						</div> -->
					</div>
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
								// echo "<a href=\"index.php\"><img class=\"mb-4\" src=\"images/eventoriumlogo.png\"  width=\"172\" height=\"181\"></a>";

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
								echo	"</fieldset>";
								echo	"</form>";
							}
							?>
						</div>


					</div>
				</div>
			</div>
			<div class="navbar navbar-light bg-light box-shadow">
<!--     		 <a href="index.php" style="float: left;"><img class="mb-4" src="images/eventoriumlogo.png" alt="" width="30" height="32"></a>
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

<main role="main">

	<section class="jumbotron text-center" id="contimage">
		<div class="container" >
			<h1 class="jumbotron-heading">Welcome to Eventorium</h1>
			<p class="lead ">This is where you can create your events and share with your friends easily and fast.</p>
			<p>
				<?php
				if(isset($_SESSION['username']))
				{
					echo "<a href=\"panel.php\" class=\"btn btn-primary my-2\">Create a new Event</a> &nbsp; &nbsp;";
					echo "<a href=\"faq.php\" class=\"btn btn-secondary my-2\">Get Started</a>";

				}
				else
				{
					echo "<a href=\"login.php\" class=\"btn btn-primary my-2\">Sign In</a> &nbsp; &nbsp;";
					echo "<a href=\"faq.php\" class=\"btn btn-secondary my-2\">Get Started</a>";
				}
				?>

			</p>
		</div>
	</section>

	<div class="album py-5 bg-light">
		<div class="container">
			<h1>Events</h1>

			<div class="row mb-4 mt-1">
				<div class="col-md" >
					<a class="btn btn-info float-right" href="searchevent.php" >Browse Events</a>
				</div>
			</div>


			<div class="row">
				<?php
				$today=date("Y-m-d");
				require ('connect.php');
				$query="SELECT * FROM events WHERE startdate >= '$today' ORDER BY startdate ASC";
				$read =mysqli_query($connection, $query);

				for ($i=0; $i <=5 ; $i++) {

					$rows=mysqli_fetch_assoc($read);
					if ($rows["eventname"]!="") {
    # code...



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
