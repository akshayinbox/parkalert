<?php

if(!isset($_GET['to']) || empty($_GET['to']) || !isset($_GET['key']) || trim($_GET['key']) != 'cs338') {
	echo "Invalid phone number or unauthorized!";
	exit;
}

$to = trim($_GET['to']);
$message = trim($_GET['msg']);

if($message == "0") {
 $message = "Yay! You have been successfully enrolled in text alerts for your parking session!";
} else {
 $message = "Hey! Your meter will run out of time in under 5 minutes. Add time here: http://[YOUR-DOMAIN-HERE]/cs338/demo/add.php?auth=x7kFgH_FAKE";
}

$headers = "From: ParkAlert <no-reply@akshaysharma.net> \r\n";

mail($to."@tmomail.net", "ParkAlert", $message, $headers);
mail($to."@vtext.com", "ParkAlert", $message, $headers);
mail($to."@txt.att.net", "ParkAlert", $message, $headers);
//mail($to."", "ParkAlert", $message, $headers);

?>