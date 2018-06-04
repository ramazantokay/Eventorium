<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body class="mx-auto" >
    <div class="container col-md-8">
        <div class=" order-md-1 mx-auto card bg-light">
         <div class="py-1 text-center">
            <img class="d-block mx-auto mb-4" src="images/eventoriumlogo.png" alt width="172" height="181">
            <h3 class="mx-auto">Create a new account</h3>
        </div>
        <form class="needs-validation was-validate" action="registerquery.php" method="POST" novalidate>
          <div class="row">
           <div class="col-md-6 mb-3">
            <label for="validationcustom01">First Name</label>
            <input type="text" class="form-control" id="validationcustom01" placeholder="First Name" name="firstname" value required>
            <div class="invalid-feedback">
             Please write your first name.
         </div>
     </div>	
     <div class="col-md-6 mb-3">
         <label for="validationcustom02">Last Name</label>
         <input type="text" class="form-control" id="validationcustom02" placeholder="Last Name" name="lastname" value required>
         <div class="invalid-feedback">
             Please write your last name.   
         </div>
     </div>
 </div>
 <div class="mb-3">
    <label for="validationcustom03">Username</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">@</span>
    </div>
    <input type="text" class="form-control" id="validationcustom03" placeholder="Username" name="username" required>
    <div class="invalid-feedback">
        Please choose a username.
    </div>
</div>
</div>
<div class="mb-3">
 <label for="validationcustom04">Password</label>
 <input type="password" class="form-control" id="validationcustom04" minlength="5" maxlength="15" name="password" required>
 <div class="invalid-feedback">Please choose a password.</div>
</div>
<div class="mb-3">
 <label for="validationcustom05">Password Again</label>
 <input type="password" class="form-control" id="validationcustom05" minlength="5" maxlength="15" required>
 <div class="invalid-feedback">Please choose a password.</div>
</div>	
<div class="mb-3">
    <label for="email">Email
    </label>
    <input type="text" class="form-control" id="email" placeholder="you@example.com" name="email">
    <div class="invalid-feedback"></div>
</div>
<div class="mb-3">
    <label for="phone">Telephone Number
        <span class="text-muted">(Optional)</span>
    </label>
    <input type="text" class="form-control" id="phone" placeholder="" name="phone">
    <div class="invalid-feedback"></div>
</div>
<div class="mb-3">
 <div class="row">
  <div class="col-md-5 mb-3">
   <label for="validationcustom06">Country</label>
   <select class="custom-select d-block w-100" id="validationcustom06" name="country" required>
    <option value>Choose...</option>
    <option>Turkey</option>
</select>
<div class="invalid-feedback">Please select a valid country.</div>
</div>

<div class="col-md-4 mb-3">
   <label for="validationcustom07">City</label>
   <select class="custom-select d-block w-100" id="validationcustom07" name="state" required>
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
   <div class="invalid-feedback">Please select a valid city.</div>
</div>
<div class="col-md-3 mb-3">
   <label for="validationcustom08">ZIP</label>
   <input type="text" name="zip" class="form-control" id="validationcustom08" placeholder required>
   <div class="invalid-feedback">Write the ZIP code.</div>
</div>
</div>
</div>        
<hr class="mb-4">
<button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>	
</form>
</div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
      }
      form.classList.add('was-validated');
  }, false);
  });
}, false);
})();
</script>
</body>
</html>