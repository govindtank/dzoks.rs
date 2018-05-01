<?php
	require("../logic/config.php");

	if(!params_ok(["name", "email", "message"], "POST")) {	
		error($string['status']['messageNotSent']);
		header("location: ../pages/contact");
		exit;	
	}

    $name = strip($_POST['name']);
    $email = strip($_POST['email']);
	$message = strip($_POST['message']); 
	
	$subject = "[" . $store_name . "] Contact";
	$headers = "From: " . $email . "\r\n";
	$headers .= "To: " . $store_email . "\r\n";

	mail($store_email, $subject, $message, $headers);

	$subject = "[" . $store_name . "] Contact";
	$headers = "From: " . $store_email . "\r\n";
	$headers .= "To: " . $email . "\r\n";
	
	$message = get_mail($mail_path);
	$message = str_replace("{{mail_title}}", $string["mail"]["contact"], $message);
	$message = str_replace("{{unsubscribe_url}}", "", $message);

	mail($email, $subject, $message, $headers);

	success($string["status"]["messageSent"]);
	header("location: ../pages/contact");
?>
