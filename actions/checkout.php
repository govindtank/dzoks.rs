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

	$message = "Order details\n\n";
	$message .= "Name: $firstName $lastName \n";
	$message .= "Email: $email \n";
	$message .= "Phone: $phone \n";
	$message .= "Address: $address \n";
	$message .= "ZIP: $zip \n";
	$message .= "City: $city \n";
	$message .= "Country: $country \n";
	$message .= "Products\n\n";
	
	$hash = generate_random_string(32);
	
	$cmd = "INSERT INTO purchases (hash, first_name, last_name, email, phone, address, zip, city, country, ip, confirmed, shipped, timestamp) VALUES('$hash', '$firstName', '$lastName', '$email', '$phone', '$address', '$zip', '$city', '$country', '$ip', 0, 0, now())";
	mysqli_query($connect, $cmd);

	$cmd = "SELECT id FROM purchases WHERE hash='$hash'";
	$id = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	$cmd = "UPDATE cart SET purchase=$id, checked=1 WHERE user='$ip' AND checked=0";
	mysqli_query($connect, $cmd);

	$cmd = "SELECT * FROM cart WHERE purchase=" . $id;
	$result = mysqli_query($connect, $cmd) or die(mysqli_error($connect));

	while($row = mysqli_fetch_array($result)) {
		$cmd = "SELECT quantity FROM warehouse WHERE product=" . $row['product'] . " AND size=" . $row['size'];
	
		$qty = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		if($row['quantity'] > $qty) {
			error($string['status']['bigQuantity']);
			header("location: ../pages/cart.php");
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
		
	$sender = "office@soxbty.com";
	$subject = "[SOXBTY] Confirmation";
	$message .= $string['status']['clickLink'] . "\nhttp://soxbty.com/actions/confirm?h=" . $hash;
	$headers = "From: " . $sender . "\r\n";
	$headers .= "To: " . $email . "\r\n";

	mail($email, $subject, $message, $headers);

	success($string['status']['checkEmail']);
	header("location: ../pages/home.php");
?>
