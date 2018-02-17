<?php
	require("../logic/config.php");

	if(!is_uploaded_file($_FILES['message']['tmp_name'])) {	
		error($string['status']['messageNotSent']);
		header("Location: ../pages/manage?type=4");
		exit;	
	}

	$message = file_get_contents($_FILES['message']['tmp_name']);

	$receivers = [];

	$cmd = "SELECT * FROM purchases GROUP BY email";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {	
	    $receivers[] = $row['email'];
	}

	$receivers = implode(", ", $receivers);

	$sender = "office@soxbty.com";
	$subject = "[SOXBTY] Newsletter";
	$headers = "From: " . $sender . "\r\n";
	$headers .= "To: " . $receivers . "\r\n";

	mail($receivers, $subject, $message, $headers);

	success($string['status']['messageSent']);
	header("Location: ../pages/manage?type=4");
?>
