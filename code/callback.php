<?php	
	session_start();
	$servername = "localhost";
	$username = "huey_pacemove";
	$password = "huey_PM@1";
	$dbname = "pm_huey";
	// Create connection
	$link = mysqli_connect($servername, $username, $password, $dbname);

	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	$mobile = $_POST['mobile'];
        
	$curl = curl_init();

	curl_setopt_array($curl, array(


	CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=PCMOVE&route=4&mobiles=+918888308218&authkey=197006ATdvNQWOL5a79d7ea&country=91&message=Dear%20Pacemove%0A".$mobile."%20want%20to%20contact%20you.%20Callback%20on%20the%20same%20number.",
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
	else{
	echo json_encode($servername);
	}

?>
