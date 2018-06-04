<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Eventorium</title>

	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/album.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
    .navbar-toggler {
        width: 50px;
        height: 50px;
    }

    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

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
                    echo    "</fieldset>";
                    echo    "</form>";
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
	<section class="jumbotron text-center" id="faqimage">
        <div class="container" >
<!-- 					<h1 class="jumbotron-heading text-dark font-weight-normal">Welcome to FAQ Page</h1>
-->					<br><br>
<!-- <p class="lead text-warning font-weight-normal">This is where you can find frequently asked questions about Eventorium.</p> -->

</div>
</section>
<div class="container">

    <div class="page-header mt-5" >
        <h1>FAQ<small> Eventorium Frequently Asked Questions</small></h1>
    </div>

</div>
<!-- Bootstrap FAQ - START -->
<div class="container">
  
	<section  id="questions">
     
        <div class="alert alert-warning alert-dismissible mt-5" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            This section contains a wealth of information, related to <strong>Eventorium</strong>. If you cannot find an answer to your question, 
            make sure to contact us. 
        </div>

        <br />

        <div class="panel-group" id="accordion">
            <div class="faqHeader">General questions</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is account registration required?</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse ">
                    <div class="panel-body">
                        Account registration at <strong>Eventorium</strong> is only required if you will be creating events. 
                        This ensures a valid communication channel for all parties involved in any transactions. 
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Who can create an event?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        Every member can create an event via Eventorium. 
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Do I need to paid?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse ">
                    <div class="panel-body">
                        You do not need to paid for using <strong>Eventorium</strong>. It is free for everyone.
                    </div>
                </div>
            </div>

            <div class="faqHeader">How to use?</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I want to create an event-what are the steps?</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        Creating an event on <strong>Eventorium</strong> is really simple. 
                        Once you have an account.Then you enter the details of your event.If you want you can edit or delete your activity after you create it.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">When I edit my event?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                        After you create an event on <strong>Eventorium</strong>,whenever you want you can delete it.
                        <br />
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">When I delete my event?</a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                        After you create an event on <strong>Eventorium</strong>,whenever you want you can delete it.
                        <br />
                    </div>
                </div>
            </div>
            <div class="faqHeader">You have more questions?? <a href="contact.php">Contact Us!</a> </div>

        </div>
    </section>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>