<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message']; 
	       
    $body = "Name: " . $name;
    $body .= " Message: " . $message;

    $from = "From: $email";  

    mail("jelic.ecloga@gmail.com", $subject, $body, $from);
?>