<?php
	require("../logic/config.php");

	if(!params_ok(["name", "email", "subject", "message", "validationCheck", "validationInput"], "POST")) {	
		error($string['status']['messageNotSent']);
		header("location: ../pages/contact.php");
		exit;	
	}

    $name = strip($_POST['name']);
    $email = strip($_POST['email']);
	$subject = strip($_POST['subject']);
	$message = strip($_POST['message']); 
	$validationCheck = strip($_POST['validationCheck']); 
	$validationInput = strip($_POST['validationInput']); 
	       
	if($validationInput != $validationCheck) {
		error($string['status']['validationNotCorrect']);
		header("location: ../pages/contact.php");
		exit();
	}
	
	$receiver = "jelic.ecloga@gmail.com";
	$subject = "[SOXBTY] Contact";
	$headers = "From: " . $email . "\r\n";
	$headers .= "To: " . $receiver . "\r\n";

	mail($receiver, $subject, $message, $headers);

	success($string['status']['messageSent']);
	header("location: ../pages/contact.php");
?>
