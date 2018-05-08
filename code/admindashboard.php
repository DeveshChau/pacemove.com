<?php
	session_start();
	if(isset($_SESSION['sessionvariable'])){	
	$servername = "localhost";
	$username = "huey_pacemove";
	$password = "huey_PM@1";
	$dbname = "pm_huey";
	
	$link = mysqli_connect($servername, $username, $password, $dbname);

	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$usermobile = $_SESSION["usermobile"];
	$useridsearch = "SELECT * from pmusers where pmusermobile = '$usermobile'";
	$useridsearchresult = mysqli_query($link, $useridsearch);

	if(mysqli_num_rows($useridsearchresult)!=NULL){

	$row = mysqli_fetch_assoc($useridsearchresult);

	$userid = $row["pmuserid"];	
	}
	
	$order = "SELECT * FROM pmorders LEFT outer join pmusers on pmorders.pmuserid = pmusers.pmuserid WHERE pmorders.statuslist != 'Order Delivered' ORDER BY pmorders.pmorderdate  ASC";
	$orderresult = mysqli_query($link, $order);
	while($arr = mysqli_fetch_assoc($orderresult)) {
    $row[] = $arr;
}

	$previousorder = "SELECT * FROM pmorders LEFT outer join pmusers on pmorders.pmuserid = pmusers.pmuserid WHERE pmorders.statuslist = 'Order Delivered' ORDER BY pmorders.pmorderdate  desc";
	$previousorderresult = mysqli_query($link, $previousorder);
	while($arr = mysqli_fetch_assoc($previousorderresult)) {
    $row2[] = $arr;
}
	
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
		<link rel="stylesheet" href="./css/style.css">
		<style type="text/css">
			hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}
		</style>
		
	</head>
	<body class="child-page"> 
	<?php
		include 'header.php';
	?>
	<main role="main" >
		<br><br>
	<div class="container">
		<div class="row">	
			<div class="col-md-12">
				<div class="card">
				  	<div class="card-header" >
						<ul class="nav nav-pills" role="tablist" id="details-tab">
					  		<li class="nav-item active">
				    			<a class="nav-link active" href="#current-order" data-toggle="tab" id="currentorder">Current Order</a>
					  		</li>
					  		<li class="nav-item">
					    		<a class="nav-link" href="#previous-order" data-toggle="tab">Previous Order</a>
					  		</li>				  
						</ul>
						<a class="float-right" href="trackdetails.php" id="new_order">New Order</a>
			  		</div>

				  	<div class="card-body">
						<div class="tab-content">
					  		<div class="tab-pane fade show active" id="current-order" role="tabpanel" aria-labelledby="pickup-tab">
					  			<div class="container">
					  			
					  				<?php foreach ($row as $key => $value) {?>
									<div class="row">
							 			<div class="col-md-3">
							 			<?php echo "<b>Date: </b>". date('d-m-Y', strtotime($value['pmorderdate']));?>
							 			<div><?php echo "<b>Name:</b> ". $value['pmusername'];?></div>
							 			<div><?php echo "<b>Mobile:</b> ". $value['pmusermobile'];?></div>
							 			</div>
							 			<div class="col-md-5">
							 				<div><b>Pickup Location</b></div>
							 			<?php echo  $value['pmorderpickuplocation'];?>
							 			<div><?php echo "Lift: ". $value['pmorderpickuplift'];?></div>
							 			<div><?php echo "Floor: ". $value['pmorderpickupfloor'];?></div>
							 			</div>
							 			<div class="col-md-4">
							 				<div><b>Drop Location</b></div>
							 			<?php echo  $value['pmorderdroplocation'];?>
							 			<div><?php echo "Lift: ". $value['pmorderpickuplift'];?></div>
							 			<div><?php echo "Floor: ". $value['pmorderpickupfloor'];?></div>
							 			</div>
							 		</div>
							 		<hr>
							 		<div class="row">
							 			<div class="col-md-3">
							 				<div><b>Reference Number</b></div>
							 			<?php echo  $value['pmrefference'];?>
							 			</div>
							 			<div class="col-md-5">
							 				<div><b>Movable Item List</b></div>
								 			<?php 
								 			$user = $value['pmuserid'];
								 			$order = $value['pmorderid'];											
											$movable = "SELECT * FROM pmmovables WHERE pmuserid ='$user' 
											AND pmorderid = '$order'";
											$movableresult = mysqli_query($link, $movable);
								 			if(mysqli_num_rows($movableresult)!=NULL){

												$row3 = mysqli_fetch_assoc($movableresult);
												$itemother = $row3["pmothermovables"];	
												$item = $row3["pmitems"];
												$qauntity = $row3["pmquantity"];

											}

											$mov = explode(",",$item);
											$movqty = explode(",",$qauntity);
											echo "<br>";
											$n = sizeof($mov);
											for($i=0 ;$i<($n-1);$i++){
											    echo $mov[$i] ."-". $movqty[$i].", ";
											}

											/*echo $item;
											echo $itemother;*/
											?>
										</div>
										<div class="col-md-4">
											<div><b>Status</b></div>
											<?php echo $value['statuslist'];?>
											<?php 
												$orderid = $value['pmorderid'];
											?>
										    <select name="statuslist" id="statuslist<?php echo $orderid ?>">			<option value="Move Booked"> Move Booked</option>
												<option value="Order Picked Up"> Order Picked Up</option>
												<option value="In Transit (Place)"> In Transit (Place)</option>
												<option value="Order Delivered"> Order Delivered</option>
											</select>
											<button type="submit" id="statusUpdate" onclick="updateStatus('<?php echo $orderid ?>')">Update</button>
							 			</div>
								 	</div>	
								 	<hr style=" border-width: 2px; border-color: red;">							 	
								 	<?php }?>
					  			</div>
							</div>
					  		<div class="tab-pane fade show" id="previous-order" role="tabpanel" aria-labelledby="previous-order">
					  			<div class="container">

					  				<?php foreach ($row2 as $key => $value) {?>
									<div class="row">
							 			<div class="col-md-3">
							 			<?php echo "<b>Date: </b>". date('d-m-Y', strtotime($value['pmorderdate']));?>
							 			<div><?php echo "Name: ". $value['pmusername'];?></div>
							 			<div><?php echo "Mobile: ". $value['pmusermobile'];?></div>
							 			</div>
							 			<div class="col-md-5">
							 				<div><b>Pickup Location</b></div>
							 			<?php echo  $value['pmorderpickuplocation'];?>
							 			<div><?php echo "Lift: ". $value['pmorderpickuplift'];?></div>
							 			<div><?php echo "Floor: ". $value['pmorderpickupfloor'];?></div>
							 			</div>
							 			<div class="col-md-4">
							 				<div><b>Drop Location</b></div>
							 			<?php echo  $value['pmorderdroplocation'];?>
							 			<div><?php echo "Lift: ". $value['pmorderpickuplift'];?></div>
							 			<div><?php echo "Floor: ". $value['pmorderpickupfloor'];?></div>
							 			</div>
							 		</div>
							 		<hr>
							 		<div class="row">
							 			<div class="col-md-3">
							 				<div><b>Reference number</b></div>
							 			<?php echo  $value['pmrefference'];?>
							 			</div>
							 			<div class="col-md-5">
							 				<div><b>Movable Item List</b></div>
								 			<?php 
								 			$user = $value['pmuserid'];
								 			$order = $value['pmorderid'];											
											$movable = "SELECT * FROM pmmovables WHERE pmuserid ='$user' 
											AND pmorderid = '$order'";
											$movableresult = mysqli_query($link, $movable);
								 			if(mysqli_num_rows($movableresult)!=NULL){

												$row3 = mysqli_fetch_assoc($movableresult);
												$itemother = $row3["pmothermovables"];	
												$item = $row3["pmitems"];
												$qauntity = $row3["pmquantity"];

											}
											$mov = explode(",",$item);
											$movqty = explode(",",$qauntity);
											echo "<br>";
											$n = sizeof($mov);
											for($i=0 ;$i<($n-1);$i++){
											    echo $mov[$i] ."-". $movqty[$i].", ";
											}
											echo $itemother;
											/*
											echo $item;
											echo $itemother;*/
											?>
										</div>
										<div class="col-md-4">
											<div><b>Status</b></div>
											<?php echo $value['statuslist'];?>
											<?php 
												$orderid = $value['pmorderid'];
											?>
										    <select name="statuslist" id="statuslist<?php echo $orderid ?>">			<option value="Move Booked"> Move Booked</option>
												<option value="Order Picked Up"> Order Picked Up</option>
												<option value="In Transit (Place)"> In Transit (Place)</option>
												<option value="Order Delivered"> Order Delivered</option>
											</select>
											<button type="submit" id="statusUpdate" onclick="updateStatus('<?php echo $orderid ?>')">Update</button>
							 			</div>
								 	</div>	
								 	<hr style=" border-width: 2px; border-color: red;">	
								 								 	
								 	<?php }?>
					  			</div>
							</div>					  		
					  	</div> <!-- tab content -->
					</div><!-- card body-->
				</div><!-- card -->
			</div>		
		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.main container -->

<?php include 'footer.php';?>
<script type="text/javascript" src="./js/status.js"></script>
</body>
</html>
<?php
	}
	else{
		header('location: index.php');
	}
?>