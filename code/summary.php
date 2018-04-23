<?php
session_start();
if(isset($_SESSION['usermobile'])	
){
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
	</head>
	<body class="child-page"> 
	<?php
		include 'header.php';
	?>

	<main role="main" >
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="card">
				  		<div class="card-header" >
				  			Summary
				  		</div>
				  		<div class="card-body">
				  			<div class="card-deck" style="margin-bottom: 10px;">
  								<div class="card">
								    <div class="card-footer">
								      	<img class="float-right" src="./img/edit.png" alt="Card image cap" style="height: 20px;width: 20px;">	
								      	<small class="text-muted">Pick Up Date</small>
								      	<p>14-02-2018</p> 
								    </div>
  								</div>
  								<div class="card">
								    <div class="card-footer">
								    	<img class="float-right" src="./img/edit.png" alt="Card image cap" style="height: 20px;width: 20px;">	
								      	<small class="text-muted">Pick Up Address</small>
								      	<p>C706, Krishna Aeropolis, POrwal Road, Lohegaon, Pune 422037</p>	
								    </div>
  								</div>
  								<div class="card">
								    <div class="card-footer">
								    	<img class="float-right" src="./img/edit.png" alt="Card image cap" style="height: 20px;width: 20px;">	
								      	<small class="text-muted">Drop Address</small>
								      	<p>C706, Krishna Aeropolis, POrwal Road, Lohegaon, Pune 422037</p>	
								    </div>
  								</div>  								
				  			</div>
				  			<div class="jumbotron">		
				  				<img class="float-right" src="./img/edit.png" alt="Card image cap" style="height: 20px;width: 20px;">			  				
								<h1 class="">Movables</h1>
								<!-- Dynamic table-->
								<table class="table">
									<tbody>
										<tr>
										  	<td>Mark</td>
										  	<td>Mark</td>
										  	<td>Otto</td>
										  	<td>@mdo</td>
										</tr>
										<tr>
									  		<td>Mark</td>
										  	<td>Mark</td>
										  	<td>Otto</td>
										  	<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
										  	<td>Mark</td>
										  	<td>Otto</td>
										  	<td>@mdo</td>
										</tr>
									</tbody>
								</table>
								<hr class="my-4">
								<p>Dynamic movalbes </p>
								<p class="lead"></p>							
							</div>
				  			
							<div class="form-group" style="text-align: center;">
								<a class="btn btn-primary" href="userdashboard.php" role="button">Confirm</a>
							</div>							
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>		
	</main>
	<?php include 'footer.php';?>
</body>
</html>
<?php
	}
	else{
		header('location: index.php');
	}
?>