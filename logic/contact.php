<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message']; 
	       
    $body = "Name: " . $name;
    $body .= " Phone: " . $phone;
    $body .= " Message: " . $message;

    $from = "From: $email";  

    mail("jelic.ecloga@gmail.com", $subject, $body, $from) or http_response_code(422);
?>