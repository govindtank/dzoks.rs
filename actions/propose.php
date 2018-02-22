<?php
	require("../logic/config.php");

	if(!params_ok(["name", "email", "description", "validationCheck", "validationInput"], "POST")) {	
		error($string['status']['designNotProposed']);
		header("location: ../pages/propose.php");
		exit;	
	}

    $name = strip($_POST['name']);
    $email = strip($_POST['email']);
	$description = strip($_POST['description']); 
	$validationCheck = strip($_POST['validationCheck']); 
	$validationInput = strip($_POST['validationInput']); 
	       
	if($validationInput != $validationCheck) {
		error($string['status']['validationNotCorrect']);
		header("location: ../pages/contact.php");
		exit();
	}
	
	if(isset($_FILES['photo']['name'])) {
		$tmp_name = $_FILES["photo"]["tmp_name"];
		$path = '../proposals';

		if(!file_exists($path)) {
			mkdir($path, 0777, true);
		}

		$path .= '/' . basename($_FILES["photo"]["name"]);

		move_uploaded_file($tmp_name, $path);
	}else {
		error($string['status']['designNotProposed']);
		header("location: ../pages/propose.php");
		exit;	
	}

	$sender = "office@soxbty.com";
	$subject = "[SOXBTY] Design proposal";
	$headers = "From: " . $email . "\r\n";
	$headers .= "To: " . $receiver . "\r\n";
	$message = "Design has been proposed by " . $name . " (" . $email . ")\r\n";
	$message .= "Description: " . $description . "\r\n";
	$message .= "Photo: " . $path . "\r\n";

	mail($receiver, $subject, $message, $headers);

	success($string['status']['designProposed']);
	header("location: ../pages/propose.php");
?>
