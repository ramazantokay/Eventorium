<?php 
// include 'checksession.php';
?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Create New Event</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

</head>
<body class="bg-light">
	<div class="container"></div>
	<div class="py-5 text center">

		<img class="d-block mx-auto mb-4" src="images/eventoriumlogo.png" alt width="172" height="181">
		<h2><center>Create New Event</center></h2>
	</div>	
	<?php

	$eventuser=$_GET["username"];

	?>
	<div class="col-md-8 order-md-1 mx-auto"><!--main div-->
		<h4 class="Bling Adress"></h4>
		<form class="needs-validation" action="neweventquery.php" method="POST"  enctype="multipart/form-data">
			<input type="hidden" name="username" value="<?php echo $eventuser; ?>">
			
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="firstName">Event Name</label>
					<input type="text" class="form-control" id="eventName" name="eventname" required>
					<div class="invalid-feedback">
						Valid event name is required.
					</div>
				</div>	
				<div class="col-md-6 mb-3">
					<label for="lastName">Event Type</label>
					<select class="custom-select d-block w-100" id="eventType" name="eventype" required>
						<option value> Choose...</option>
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
					<div class="invalid-feedback">
						Valid event type  is reqiured.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-3">
					<label for="startTime">Start Time</label>
					<input type="time" class="form-control" id="startTime" name="startime" required>
					<div class="invalid-feedback">
						Valid start time is required.
					</div>
				</div>	
				<div class="col-md-3 mb-3">
					<label for="finishTime">Finish Time</label>
					<input type="time" class="form-control" name="finishtime" id="finishTime" required>
					<div class="invalid-feedback">
						Valid finish time  is reqiured.
					</div>
				</div>
				<div class="col-md-3 mb-3">
					<label for="finishTime">Upload Image</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="inputGroupFile01" name="image" required>
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
					</div>

				</div>


			</div>
			<div class="row">
				<div class="col-md-3 mb-3">
					<label for="startDate">Start Date</label>
					<input type="date" class="form-control" name="startdate" id="startDate" required>
					<div class="invalid-feedback">
						Valid start date is required.
					</div>
				</div>	
				<div class="col-md-3 mb-3">
					<label for="finishDate">Finish Date</label>
					<input type="date" class="form-control" name="finishdate" id="finishDate" required>
					<div class="invalid-feedback">
						Valid finish date  is reqiured.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 mb-3">
					<label for="country">Country</label>
					<select class="custom-select d-block w-100" id="country" name="country" name="country" required>
						<option>Turkey</option>
					</select>
					<div class="invalid-feedback">
						Please select a valid country.
					</div>	
				</div>
				<div class="col-md-4 mb-3">
					<label for="state">City</label>
					<select class="custom-select d-block w-100" id="state" name="state" required>
						<option value> Choose...</option>
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
					<div class="invalid-feedback">
						Please provide a valid state.
					</div>	
				</div>
			</div>
			
			
			<div class="mb-3">
				<label for="place">Place</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">@</span>
					</div>
					<input type="text" class="form-control" id="place" placeholder="Where" name="place" required>
					<div class="invalid-feedback" style="width:100%">
						Place is required.
					</div>	
				</div>
			</div>	
			<div class="mb-3">
				<label for="explaining">Explain Your Event</label>
				<textarea class="form-control" id="explaining" name="explainevent" required></textarea>
<!-- 				<input type="text" class="form-control"  required>
-->			</div>
<div class="mb-3">
	<button class="btn btn-primary btn-lg btn-block" type="submit">Create</button>	
</div>		
</form>	
</div><!--main div-->	

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