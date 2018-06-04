<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
  
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color:#333;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }



  .container {
    border-radius: 5px;
    padding: 20px;
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
<div class="container">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
    
    <label for="email">E-mail Adress</label>
    <input type="text" id="email" name="e-mail adress" placeholder="Your e-mail adress.." required>

    <label for="city"> <strong>City</strong></label>
    <select id="city" name="city" required>
    	<option value="choose">Choose</option>
      <option>ADANA</option>
      <option>ADIYAMAN</option>
      <option>AFYONKARAHİSAR</option>
      <option>AĞRI</option>
      <option>AMASYA</option>
      <option>ANKARA</option>
      <option>ANTALYA</option>
      <option>ARTVİN</option>
      <option>AYDIN</option>
      <option>BALIKESİR</option>
      <option>BİLECİK</option>
      <option>BİNGÖL</option>
      <option>BİTLİS</option>
      <option>BOLU</option>
      <option>BURDUR</option>
      <option>BURSA</option>
      <option>ÇANAKKALE</option>
      <option>ÇANKIRI</option>
      <option>ÇORUM</option>
      <option>DENİZLİ</option>
      <option>DİYARBAKIR</option>
      <option>EDİRNE</option>
      <option>ELAZIĞ</option>
      <option>ERZİNCAN</option>
      <option>ERZURUM</option>
      <option>ESKİŞEHİR</option>
      <option>GAZİANTEP</option>
      <option>GİRESUN</option>
      <option>GÜMÜŞHANE</option>
      <option>HAKKARİ</option>
      <option>HATAY</option>
      <option>ISPARTA</option>
      <option>MERSİN</option>
      <option>İSTANBUL</option>
      <option>İZMİR</option>
      <option>KARS</option>
      <option>KASTAMONU</option>
      <option>KAYSERİ</option>
      <option>KIRKLARELİ</option>
      <option>KIRŞEHİR</option>
      <option>KOCAELİ (İZMİT)</option>
      <option>KONYA</option>
      <option>KÜTAHYA</option>
      <option>MALATYA</option>
      <option>MANİSA</option>
      <option>KAHRAMANMARAŞ</option>
      <option>MARDİN</option>
      <option>MUĞLA</option>
      <option>MUŞ</option>
      <option>NEVŞEHİR</option>
      <option>NİĞDE</option>
      <option>ORDU</option>
      <option>RİZE</option>
      <option>SAKARYA (ADAPAZARI)</option>
      <option>SAMSUN</option>
      <option>SİİRT</option>
      <option>SİNOP</option>
      <option>SİVAS</option>
      <option>TEKİRDAĞ</option>
      <option>TOKAT</option>
      <option>TRABZON</option>
      <option>TUNCELİ</option>
      <option>ŞANLIURFA</option>
      <option>UŞAK</option>
      <option>VAN</option>
      <option>YOZGAT</option>
      <option>ZONGULDAK</option>
      <option>AKSARAY</option>
      <option>BAYBURT</option>
      <option>KARAMAN</option>
      <option>KIRIKKALE</option>
      <option>BATMAN</option>
      <option>ŞIRNAK</option>
      <option>BARTIN</option>
      <option>ARDAHAN</option>
      <option>IĞDIR</option>
      <option>YALOVA</option>
      <option>KARABÜK</option>
      <option>KİLİS</option>
      <option>OSMANİYE</option>
      <option>DÜZCE</option>

    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <div style="margin-left: 0px" class=" mb-3">
      <button style="background-color: #6c757c" class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>	
    </div>		
  </div>
  <?php 
 // phpinfo();
// $msg=$_POST['subject'];
// $headers .= 'From: Your name <ramazan.tokay@yahoo.com>' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
// mail("rmzntokay@gmail.com","My subject",$msg,$headers);

  ?>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>