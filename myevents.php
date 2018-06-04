<?php 
// include 'checksession.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Your Event</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
</head>
<body class="bg-light">
	<div class="container"></div>
	<div class="py-5 text center">
		<img class="d-block mx-auto mb-4" src="images/eventoriumlogo.png" alt width="72" height="72">
		<h2><center>Edit Your Event</center></h2>
	</div>	
	
	<?php 
	$id=$_GET["id"];
	require ('connect.php');
	$query="SELECT * FROM events WHERE id='$id'";
	$read =mysqli_query($connection, $query);
	$rows=mysqli_fetch_assoc($read);
	?>
	<div class="col-md-8 order-md-1 mx-auto"><!--main div-->
		<h4 class="Bling Adress"></h4>
		<form class="needs-validation" action="eventedit.php" method="POST"  enctype="multipart/form-data" novalidate>
			<input type="hidden" name="id" value="<?php echo $id; ?>" >
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="firstName">Event Name</label>
					<input type="text" value="<?php echo "".$rows["eventname"].""; ?>" class="form-control" id="eventName" name="eventname" placeholder="Enter Name" value required >
					<div class="invalid-feedback">
						Valid event name is required.
					</div>
				</div>	
				<div class="col-md-6 mb-3">
					<label for="lastName">Event Type</label>
					<select class="custom-select d-block w-100" name="eventype" id="eventType" >
						<option > <?php echo "".$rows["eventype"].""; ?></option>
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
					<input type="time" name="startime" class="form-control" id="startTime" placeholder value="<?php echo "".$rows["startime"].""; ?>"" required>
					<div class="invalid-feedback">
						Valid start time is required.
					</div>
				</div>	
				<div class="col-md-3 mb-3">
					<label for="finishTime">Finish Time</label>
					<input type="time" name="finishtime" class="form-control" id="finishTime" placeholder value="<?php echo "".$rows["finishtime"].""; ?>"" required>
					<div class="invalid-feedback">
						Valid finish time  is reqiured.
					</div>
				</div>
				<div class="col-md-3 mb-3">
					<label for="finishTime">Upload Image</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
						<img width="250px;" height="200px;" class="rounded mt-2"src="images/uploads/<?php echo "".$rows["image"].""; ?>">
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
					</div>

				</div>



			</div>
			<div class="row">
				<div class="col-md-3 mb-3">
					<label for="startDate">Start Date</label>
					<input type="date" name="startdate" class="form-control" id="startDate"  value="<?php echo "".$rows["startdate"].""; ?>"" required>
					<div class="invalid-feedback">
						Valid start date is required.
					</div>
				</div>	
				<div class="col-md-3 mb-3">
					<label for="finishDate">Finish Date</label>
					<input type="date" name="finishdate" class="form-control" id="finishDate" placeholder value="<?php echo "".$rows["finishdate"].""; ?>"" required>
					<div class="invalid-feedback">
						Valid finish date  is reqiured.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 mb-3">
					<label for="country">Country</label>
					<select class="custom-select d-block w-100" name="country" value="<?php echo "".$rows["country"].""; ?>" id="country" required>
						<option>Turkey</option>
					</select>
					<div class="invalid-feedback">
						Please select a valid country.
					</div>	
				</div>
				<div class="col-md-4 mb-3">
					<label for="state">State</label>
					<select class="custom-select d-block w-100" name="state" value="" id="state" required >
						<option> <?php echo "".$rows["state"].""; ?></option>
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
					<input type="text" class="form-control" id="place" placeholder="Where" name="place" required value="<?php echo "".$rows["place"].""; ?>"">
					<div class="invalid-feedback">
						Place is required.
					</div>	
				</div>
			</div>	
			<div class="mb-3">
				<label for="explaining">Explain Your Event</label>
				<textarea class="form-control" id="explaining" name="explainevent" required><?php echo "".$rows["explainevent"].""; ?></textarea>

<!-- 				<input type="text" name="explainevent" class="form-control" id="explaining" value=""" required>
-->			</div>
<div class="row">
	<div class="col">
		<button class="btn btn-primary btn-lg btn-block mb-5" type="submit">Edit</button>
	</div>
	
	<!-- The Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Delete</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
					Are you sure you want to delete this event?
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
				</div>
				
			</div>
		</div>
	</div>
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