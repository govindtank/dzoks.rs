<?php
	require("../logic/config.php");

	$inputs = [];

    foreach($string["checkout"]["inputs"] as $key => $value) {
    	$inputs[] = $key;
	}

	$inputs[] = "validationCheck";
	$inputs[] = "validationInput";

	if(!params_ok($inputs, "POST")) {	
		error($string['status']['requiredFields']);
		header("location: ../pages/checkout");
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
    $payment_method = strip($_POST['payment']);
	$validationCheck = strip($_POST['validationCheck']); 
	$validationInput = strip($_POST['validationInput']); 
	       
	if($validationInput != $validationCheck) {
		error($string['status']['validationNotCorrect']);
		header("location: ../pages/checkout");
		exit;
	}

	$message = "Order details\n\n";
	$message .= "Name: $firstName $lastName \n";
	$message .= "Email: $email \n";
	$message .= "Phone: $phone \n";
	$message .= "Address: $address \n";
	$message .= "ZIP: $zip \n";
	$message .= "City: $city \n";
	$message .= "Country: $country \n";
	$message .= "Payment method: $payment_method \n";
	$message .= "Products\n\n";
	
	$hash = generate_random_string(32);
	
	$cmd = "INSERT INTO purchases (hash, first_name, last_name, email, phone, address, zip, city, country, method, ip, date_submitted) VALUES('$hash', '$firstName', '$lastName', '$email', '$phone', '$address', '$zip', '$city', '$country', '$payment_method', '$ip', now())";
	mysqli_query($connect, $cmd);

	$cmd = "SELECT id FROM purchases WHERE hash='$hash'";
	$purchase = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	$cmd = "UPDATE cart SET purchase='$purchase', checked=1 WHERE user='$id' AND checked=0";
	mysqli_query($connect, $cmd);

	$cmd = "SELECT * FROM cart WHERE purchase=" . $purchase;
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {
		$cmd = "SELECT quantity FROM warehouse WHERE product=" . $row['product'] . " AND size=" . $row['size'];
	
		$qty = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		if($row['quantity'] > $qty) {
			error($string['status']['bigQuantity']);
			header("location: ../pages/cart");
			exit;
		}

		$cmd = "SELECT name, price FROM products WHERE id=" . $row['product'];
		$product = mysqli_fetch_array(mysqli_query($connect, $cmd));
		$name = $product['name'];
		$price = get_price($product['price']);
		
		$cmd = "SELECT name FROM sizes WHERE id=" . $row['size'];
		$size = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		$message .= $name . "\t" . $size . "\t" . $row['size'] . " " . $row['quantity'] . "x" . $price . "\n";
	}
		
	$sender = $store_email;
	$subject = "[" . $store_name . "] Confirmation";
	$message .= $string['status']['clickLink'] . $store_url . "/actions/confirm?h=" . $hash;
	$headers = "From: " . $sender . "\r\n";
	$headers .= "To: " . $email . "\r\n";

	mail($email, $subject, $message, $headers);

	success($string['status']['checkEmail']);
	header("location: ../pages/home");
?>
