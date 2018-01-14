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

    $body = "Name: " . $name;
    $body .= " Message: " . $message;

    $from = "From: $email";  

    mail("jelic.ecloga@gmail.com", $subject, $body, $from);
	
	success($string['status']['messageSent']);
	header("location: ../pages/contact.php");
?>
