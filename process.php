<html>
<head><title></title></head>
<body>
<?php

	//$ch = curl_init();
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


	require_once('assets\twilio-twilio-php-4562ea1\Services\Twilio.php');
	
	$number = $_POST["number"];
	

	$account_sid = 'AC0f438281d8e09a3960e4a73629c4f16e'; 
	$auth_token = 'f3157d8a503680274ae77fd28d591258'; 
	$client = new Services_Twilio($account_sid, $auth_token); 
 
	$client->account->messages->create(array( 
		'To' => "+1" . $number, 
		'From' => "+19788194734", 
		'Body' => "Hi, I'm Tylor!",  
		));

?>
</body>
</html>