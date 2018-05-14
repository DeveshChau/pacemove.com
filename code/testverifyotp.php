<?php
session_start();
// database connection
$servername = "localhost";
$username = "huey_pacemove";
$password = "huey_PM@1";
$dbname = "pm_huey";

$link = mysqli_connect($servername, $username, $password, $dbname);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$reffer = "SELECT pmrefference FROM pmorders ORDER BY pmorderid DESC LIMIT 1";	
	$refference1 =  mysqli_query($link, $reffer);
	if (mysqli_num_rows($refference1)!=null) {		
		$row = mysqli_fetch_assoc($refference1);
		$refference = $row["pmrefference"];
		$refference = $refference + 1;

	}
//data collection
$usermobile = $_POST['usermobile'];
$mobile = $_POST['mobile'];
$otp = $_POST['otp'];
$dusername = $_POST['username'];
$useremail = $_POST['useremail'];
$pickupLocationApartment = $_POST['pickupLocationApartment'];
$pickupfloor = $_POST['pickupfloor'];
$pickuplift = $_POST['pickuplift'];
$dropLocationApartment = $_POST['dropLocationApartment'];
$dropfloor = $_POST['dropfloor'];
$droplift = $_POST['droplift'];

$mil = $_POST['pickupdate']; 
$seconds = $mil / 1000;
$seconds = $seconds + 86400;
$pickupdate = date("Y-m-d", $seconds);

//mail start

$body="Dear ".$dusername."\r\n ".
"Your Move has been Booked with reference number ".$refference."\r\n ".
"We  will  contact  you at the earliest"."\r\n ".
"%0A%23HappyMoving"."\r\n ".
"PaceMove.";

$header= $dusername."<".$dusername.">";

//mail end

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://control.msg91.com/api/verifyRequestOTP.php?authkey=197006ATdvNQWOL5a79d7ea&mobile=".$mobile."&otp=".$otp,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => "",
CURLOPT_SSL_VERIFYHOST => 0,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => array(
"content-type: application/x-www-form-urlencoded"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);


if ($err) {
  echo json_encode("cURL Error #:" . $err);
} 

else {
  $response1 = json_decode($response);

  $response1 = $response1->{'type'};
  
  	if ($response1 == 'success') {
        $useridsearch = "SELECT * from pmusers where pmusermobile = '$usermobile'";
		$useridsearchresult = mysqli_query($link, $useridsearch);

		if(mysqli_num_rows($useridsearchresult)==NULL){
	  	
		  	$usercreation = "INSERT INTO pmusers (pmusername, pmusermobile, pmuseremail, pmusertimestamp)
		 	VALUES ('$dusername', '$usermobile', '$useremail', CURRENT_TIMESTAMP)";
			if(mysqli_query($link, $usercreation)){    
		    	$_SESSION["sessionvariable"] = "set";
				 $_SESSION["usermobile"] = $usermobile;
				 $_SESSION['username'] = $dusername;    
			}

			$useridsearchresult = mysqli_query($link, $useridsearch);
			if(mysqli_num_rows($useridsearchresult)!=NULL){

				$row = mysqli_fetch_assoc($useridsearchresult);

				$userid = $row["pmuserid"];

				$orders = "INSERT INTO pmorders (pmorderdate, pmorderpickuplocation, pmorderpickupfloor, pmorderpickuplift, pmorderdroplocation, pmorderdropfloor, pmorderdroplift, pmuserid, statuslist, pmrefference) VALUES ('$pickupdate', '$pickupLocationApartment', '$pickupfloor', '$pickuplift', '$dropLocationApartment', '$dropfloor', '$droplift', '$userid', 'Move Booked', '$refference')";
				$ordersresult = mysqli_query($link, $orders);		
			}
		
			$curl = curl_init();

			curl_setopt_array($curl, array(


			  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=PCMOVE&route=4&mobiles=".$usermobile."&authkey=197006ATdvNQWOL5a79d7ea&country=91&message=Dear%20".$dusername."%0AYour%20Move%20has%20been%20Booked%20with%20reference%20number ".$refference.".%0A We%20 will%20 contact%20 you%20 at%20 the%20 earliest.%0A%23HappyMoving.%0A%20PaceMove.",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_SSL_VERIFYHOST => 0,
			  CURLOPT_SSL_VERIFYPEER => 0,
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			  echo json_encode("cURL Error #:" . $err);
			} 
			mail("deveshachaudhari@gmail.com","Booking Confirmation",$body,$header);
		}

		else {

			if(mysqli_num_rows($useridsearchresult)!=NULL){

				$row = mysqli_fetch_assoc($useridsearchresult);

				$userid = $row["pmuserid"];
				$_SESSION["sessionvariable"] = "set";
				$_SESSION["usermobile"] = $usermobile;
				$_SESSION['username'] = $dusername;


				$orders = "INSERT INTO pmorders (pmorderdate, pmorderpickuplocation, pmorderpickupfloor, pmorderpickuplift, pmorderdroplocation, pmorderdropfloor, pmorderdroplift, pmuserid, statuslist,pmrefference) VALUES ('$pickupdate', '$pickupLocationApartment', '$pickupfloor', '$pickuplift', '$dropLocationApartment', '$dropfloor', '$droplift', '$userid', 'Move Booked',$refference)";
				$ordersresult = mysqli_query($link, $orders);

			}
			
			$curl = curl_init();

			curl_setopt_array($curl, array(


		  	CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=PCMOVE&route=4&mobiles=".$usermobile."&authkey=197006ATdvNQWOL5a79d7ea&country=91&message=Dear%20".$dusername."%0AYour%20Move%20has%20been%20Booked%20with%20reference%20number ".$refference.".%0A We%20 will%20 contact%20 you%20 at%20 the%20 earliest.%0A%23HappyMoving.%0A%20PaceMove.",
		  	CURLOPT_RETURNTRANSFER => true,
		  	CURLOPT_ENCODING => "",
		  	CURLOPT_MAXREDIRS => 10,
		  	CURLOPT_TIMEOUT => 30,
		  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  	CURLOPT_CUSTOMREQUEST => "GET",
		  	CURLOPT_SSL_VERIFYHOST => 0,
		  	CURLOPT_SSL_VERIFYPEER => 0,
			));

			$response = curl_exec($curl);
				$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
	  			echo json_encode("cURL Error #:" . $err);
			} 
			mail("deveshachaudhari@gmail.com","Booking Confirmation",$body,$header);
		}
		echo json_encode($response1);
	}
	
	else{
  		echo json_encode($response1);
	}
}
?>