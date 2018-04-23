<?php
session_start();
if(!isset($_SESSION['sessionvariable'])){
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  	<head>
		<meta charset="utf-8">
		<title>PaceMove</title>
		<meta name="description" content="Packers and Movers">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
		<link rel="stylesheet" href="./css/style.css">
  	</head>
  	<body class="child-page">

	<header>
  	<div class="navbar navbar-light  box-shadow" id="main-header">
		<div class="container">
		  <a href="index.php" class="navbar-brand d-flex align-items-center">
			<img id="logo" src="./img/logo.png">
		  </a>
		</div>
	</div>

	<main role="main" >
		<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card" id="inquiry-form">
				  	<div class="card-header" >
						<ul class="nav nav-pills nav-fill" role="tablist">
						  <li class="nav-item active">
						    <a class="nav-link active" href="#pickup">Pickup</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#drop">Drop</a>
						  </li>

						  <li class="nav-item">
						    <a class="nav-link" href="#profile" >Profile</a>
						  </li>
						</ul>
				  	</div>

				  	<div class="card-body">
						<div class="tab-content" id="bookingTabContent">
					  		<div class="tab-pane fade show active" id="pickup" role="tabpanel" aria-labelledby="pickup-tab">
								<form data-toggle="validator" role="form" id="pickupform">
								  <div class="form-group">
									<label for="pickupdate">Date</label>
										<div class="input-group date">
						            <input type="text" class="form-control" id="datepicker" placeholder="DD/MM/YYYY" required>
										</div>
                    <div class="help-block with-errors"></div>
								  </div>

								  <div class="form-group">
  									<label for="pickupLocationApartment">Location / Apartment</label>
  									<input type="text" class="form-control" id="pickupLocationApartment" placeholder="Enter your Location / Apartment" required>
                    <div class="help-block with-errors"></div>
								  </div>

								  <div class="form-group">
  									<label for="pickupfloor">Floor</label>
  									<select class="form-control" id="pickupfloor">
  									  <option value="1">1</option>
  									  <option value="2">2</option>
  									  <option value="3">3</option>
  									  <option value="4">4</option>
  									  <option value="5">5</option>
                                                                          <option value="6">6</option>
							                  <option value="7">7</option>
									  <option value="8">8</option>
									  <option value="9">9</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
  									</select>
                    <div class="help-block with-errors"></div>
								  </div>

								  <div class="form-group">
  									<label for="pickuplift">Lift available for moving</label>
  									<select class="form-control" id="pickuplift">
  									  <option value="Yes">Yes</option>
  									  <option value="No">No</option>
  									</select>
								  </div>

								  <br>

								  <div class="form-group" style="text-align: center;">
									<button type="button" class="btn btn-primary  btn-lg " id="pickup-next">Next</button>
								  </div>

								</form>

					  		</div>

					  		<div class="tab-pane fade" id="drop" role="tabpanel" aria-labelledby="drop-tab">
								<form data-toggle="validator" role="form">

								  <div class="form-group">
					           <label for="dropLocationApartment">Location / Apartment</label>
  									 <input type="text" class="form-control" id="dropLocationApartment" placeholder="Enter your Location / Apartment" required>
  									 <div class="help-block with-errors"></div>
								  </div>

								  <div class="form-group">
  									<label for="dropfloor">Floor</label>
  									<select class="form-control" id="dropfloor">
  									  <option value="1">1</option>
  									  <option value="2">2</option>
  									  <option value="3">3</option>
  									  <option value="4">4</option>
  									  <option value="5">5</option>
                                                                           <option value="6">6</option>
							                  <option value="7">7</option>
									  <option value="8">8</option>
									  <option value="9">9</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
  									</select>
  									
								  </div>

								  <div class="form-group">
  									<label for="droplift">Lift available for moving</label>
  									<select class="form-control" id="droplift">
  									  <option value="Yes">Yes</option>
  									  <option value="No">No</option>
  									</select>

								  </div>

								  <br>

								  <div class="form-group" style="text-align: center;">
									<button type="button" class="btn btn-primary  btn-lg " id="drop-previous">Previous</button>

									<button type="button" class="btn btn-primary  btn-lg " id="drop-next">Next</button>

								  </div>

								</form>
					 		</div>

					  		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							  	<form id="profileinfo" name="profileinfo" data-toggle="validator" role="form">

								  <div class="form-group">
  									<label for="username">Name</label>
  									<input type="text" class="form-control capitalize" id="username" placeholder="Enter your Name" required >
  									<div class="help-block with-errors"></div>
								  </div>

								  <div class="form-group">
  									<label for="useremail">Email</label>
  									<input type="email" class="form-control" id="useremail" placeholder="Enter your Email" required>
  									<div class="help-block with-errors"></div>
								  </div>

								  <div class="form-group">
  									<label for="usermobile">Mobile</label>
  									<input type="tel" id="usermobile" pattern="^[789]\d{9}$"^ class="form-control" placeholder="Enter your Mobile" required>
  									<div class="help-block with-errors"></div>
								  </div>

								  <br>

								  <div class="form-group" style="text-align: center;">
								  	 <button type="button" class="btn btn-primary  btn-lg " id="profile-previous">Previous</button>
					           <button type="button" class="btn btn-primary  btn-lg " id="profile-next">Next</button>
								  </div>

								</form>
					  		</div>
						</div>
				  	</div>

				</div>

			</div>

			<div class="col-md-2"></div>

		</div>
	 </div>

	</main><!-- /.container -->

	<!-- Modal -->
	<div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true"  data-target="otpModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	      	<form role="form" data-toggle="validator">
	        <div class="form-group">
    				<label for="otp">Enter OTP</label>
    				<input type="tel" pattern="^\d{4}$"  class="form-control" id="otp" placeholder="Enter 4 Digit OTP" required="">
    				<div class="help-block with-errors"></div>
    			</div>

    			<div class="form-group">
    				<button type="button" class="btn btn-primary" id="btn-otp-submit">Submit</button>
    				<a class="float-right" id="retry-otp" href="#">Resend OTP</a>
    			</div>
			</form>
	      </div>
	    </div>
	  </div>
	</div>
	<?php include 'footer.php';?>
	<script type="text/javascript">
      function activatePlacesSearch(){
        var input1 = document.getElementById('pickupLocationApartment');
        var autoComplete1 = new google.maps.places.Autocomplete(input1);
        var input2 = document.getElementById('dropLocationApartment');
       	var autoComplete2 = new google.maps.places.Autocomplete(input2);
      }
   </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZTJTA-s7jJHmEL0I720ztSf9vNFZj42U&libraries=places&callback=activatePlacesSearch"></script>
  </body>
</html>
<?php
}else {
	header('location: trackdetails.php');
}
?>
