<?php
	require("../logic/config.php");

	$inputs = [];

    foreach($string["checkout"]["inputs"] as $key => $value) {
    	$inputs[] = $key;
	}

	$inputs[] = "validationCheck";
	$inputs[] = "validationInput";

	if(!params_ok($inputs, "POST")) {	
		error($string['status']['orderNotPlaced']);
		header("location: ../pages/checkout.php");
		exit;	
	}

    $firstName = strip($_POST['first']);
    $lastName = strip($_POST['last']);
    $email = strip($_POST['email']);
    $phone = strip($_POST['phone']);
    $address = strip($_POST['address']);
    $zip = strip($_POST['zip']);
    $city = strip($_POST['city']);
    $country = strip($_POST['country']);
	$validationCheck = strip($_POST['validationCheck']); 
	$validationInput = strip($_POST['validationInput']); 
	       
	if($validationInput != $validationCheck) {
		error($string['status']['validationNotCorrect']);
		header("location: ../pages/checkout.php");
		exit();
	}

	$message = "Order from: " . $firstName . " " . $lastName . "\n";
	$message .= "Details:\n";
	$message .= "Email: " . $email . "\n";
	$message .= "Phone: " . $phone . "\n";
	$message .= "Address: " . $address . "\n";
	$message .= "ZIP: " . $zip . "\n";
	$message .= "City: " . $city . "\n";
	$message .= "Country: " . $country;

	$cmd = "SELECT * FROM cart WHERE user='$ip'";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {
		$cmd = "SELECT quantity FROM products WHERE id=" . $row['product'];
		
		$qty = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		if($row['quantity'] > $qty) {
			error($string['status']['bigQuantity']);
			header("location: ../pages/cart.php");
			exit;
		}

		$qty -= $row['quantity'];

		$cmd = "UPDATE products SET quantity=$qty WHERE id=" . $row['product'];
		mysqli_query($connect, $cmd);
	}
		
	$cmd = "DELETE FROM cart WHERE user='$ip'";
	mysqli_query($connect, $cmd);

	$receiver = "jelic.ecloga@gmail.com";
	$subject = "[SOXBTY] Order";
	$headers = "From: " . $email . "\r\n";
	$headers .= "To: " . $receiver . "\r\n";

	mail($receiver, $subject, $message, $headers);

	order($string['status']['orderPlaced']);
	header("location: ../pages/home.php");
?>
