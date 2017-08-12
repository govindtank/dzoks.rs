<?php 
    $name = strip($_POST['name']);
    $email = strip($_POST['email']);
	$subject = strip($_POST['subject']);
	$message = strip($_POST['message']); 
	       
    $body = "Name: " . $name;
    $body .= " Message: " . $message;

    $from = "From: $email";  

    mail("jelic.ecloga@gmail.com", $subject, $body, $from);
?>
