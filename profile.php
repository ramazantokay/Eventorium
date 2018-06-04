<?php 
// include 'checksession.php';
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-light" >
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="images/eventoriumlogo.png" alt width="172" height="181">
            <h3>Account Information</h3>
        </div>
        <?php 
        $username=$_GET["username"];
        require ('connect.php');
        $query="SELECT firstname, lastname, username, AES_DECRYPT(password,'secret') AS password, email, phone, state, zip FROM users WHERE username='$username'";
        $read =mysqli_query($connection, $query);
        $rows=mysqli_fetch_assoc($read);


        ?>
        <form class="needs-validation was-validate" action="profiledit.php" method="POST" novalidate>
          <input type="hidden" name="username" value="<?php echo $username; ?>">

          <div class="row">
             <div class="col-md-6 mb-3">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder value="<?php echo "".$rows["firstname"].""; ?>" required>
                <div class="invalid-feedback">Valid first name is required.</div>
            </div>	
            <div class="col-md-6 mb-3">
            	<label for="lastname">Last Name</label>
            	<input type="text" class="form-control" id="lastname" name="lastname" placeholder value="<?php echo "".$rows["lastname"].""; ?>" required>
            	<div class="invalid-feedback">Valid last name is required.</div>
            </div>
        </div>
        <div class="mb-3">
            <label for="username">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required value="<?php echo "".$rows["username"].""; ?>">
            <div class="invalid-feedback">Your name is required.
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" value="<?php echo "".$rows["password"].""; ?>" class="form-control" id="password" minlength="5" maxlength="15">
    </div>
    <div class="mb-3">
        <label for="passwordagain">Password Again</label>
        <input type="password" value="<?php echo "".$rows["password"].""; ?>" class="form-control" id="passwordagain" minlength="5" maxlength="15">
        <div class="invalid-feedback">Please enter the same password.</div>
    </div>  
    <div class="mb-3">
        <label for="email">Email
            <span class="text-muted"></span>
        </label>
        <input type="text" name="email" value="<?php echo "".$rows["email"].""; ?>" class="form-control" id="email" placeholder="you@example.com">
        <div class="invalid-feedback"></div>
    </div>
    <div class="mb-3">
        <label for="phone">Telephone Number
            <span class="text-muted"></span>
        </label>
        <input type="text" name="phone" value="<?php echo "".$rows["phone"].""; ?>" class="form-control" id="phone" placeholder="">
        <div class="invalid-feedback"></div>
    </div>
    <div class="mb-3">
       <div class="row">
          <div class="col-md-5 mb-3">
             <label for="country">Country</label>
             <select name="country" value="<?php echo "".$rows["country"].""; ?>" class="custom-select d-block w-100" id="country" required>
                <option >Turkey</option>
            </select>
        </div>
        <div class="invalid-feedback">Please select a valid country</div>
        <div class="col-md-4 mb-3">
         <label for="state">State</label>
         <select name="state" class="custom-select d-block w-100" value="" id="state" required>
          <option><?php echo "".$rows["state"].""; ?></option>              
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
      <div class="invalid-feedback">Please select a valid state</div>
  </div>
  <div class="col-md-3 mb-3">
     <label for="ZIP">ZIP</label>
     <input type="text" name="zip" class="form-control" value="<?php echo "".$rows["zip"].""; ?>" id="ZIP" placeholder required>
     <div class="invalid-feedback">ZIP code required.</div>
 </div>
</div>
</div>
<div class="row">
    <div class="col md-6 mb-3">
       <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Save changes</button>
   </div>
   
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure to update?</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times; </span>
          </button>
      </div>
      <div class="modal-body">
        Do you want to make these changes ?
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</div>
</div>
</div>





</div>


</div>



</form>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>