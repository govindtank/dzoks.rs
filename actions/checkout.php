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

    $name = strip($_POST['name']);
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

	$message = get_mail($mail_path);

	$hash = generate_random_string(32);
	
	$cmd = "INSERT INTO purchases (hash, name, email, phone, address, zip, city, country, method, ip, date_submitted) VALUES('$hash', '$name', '$email', '$phone', '$address', '$zip', '$city', '$country', '$payment_method', '$ip', now())";
	mysqli_query($connect, $cmd);

	$confirm = get_mail($confirmation_path);

	$confirm = str_replace("{{name}}", $name, $confirm);
	$confirm = str_replace("{{address}}", $address, $confirm);
	$confirm = str_replace("{{zip}}", $zip, $confirm);
	$confirm = str_replace("{{city}}", $city, $confirm);
	$confirm = str_replace("{{country}}", $country, $confirm);
	$confirm = str_replace("{{phone}}", $phone, $confirm);
	$confirm = str_replace("{{email}}", $email, $confirm);

	$cmd = "SELECT id FROM purchases WHERE hash='$hash'";
	$order_id = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	$cmd = "UPDATE cart SET purchase='$order_id', checked=1 WHERE user='$id' AND checked=0";
	mysqli_query($connect, $cmd);
	
	$cmd = "SELECT * FROM cart WHERE purchase=" . $order_id;
	$result = mysqli_query($connect, $cmd);

	$i = 0;
	$total = 0;

	while($row = mysqli_fetch_array($result)) {
		$i++;

		$cmd = "SELECT quantity FROM warehouse WHERE product=" . $row['product'] . " AND size=" . $row['size'];
		$qty = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		if($row['quantity'] > $qty) {
			error($string['status']['bigQuantity']);
			header("location: ../pages/cart");
			exit;
		}

		$cmd = "SELECT name FROM sizes WHERE id=" . $row['size'];
		$product_size = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		$cmd = "SELECT id, name, price FROM products WHERE id=" . $row['product'];
		$product = mysqli_fetch_array(mysqli_query($connect, $cmd));

		$product_qty = $row['quantity'];
		
		$product_id = $product['id'];
		$product_name = $product['name'];
		$product_price = get_price($product['price']);
	
		$total += $product_qty * $product_price;

		$confirm = str_replace("{{" . $i . "_id}}", $product_id, $confirm);
		$confirm = str_replace("{{" . $i . "_name}}", $product_name . " - " . $product_size, $confirm);
		$confirm = str_replace("{{" . $i . "_qty}}", $product_qty, $confirm);
		$confirm = str_replace("{{" . $i . "_price}}", $product_price, $confirm);
		$confirm = str_replace("{{" . $i . "_total}}", get_price($product_qty * $product_price), $confirm);
	}

	while($i < 10) {
		$i++;

		$confirm = str_replace("{{" . $i . "_id}}", "", $confirm);
		$confirm = str_replace("{{" . $i . "_name}}", "", $confirm);
		$confirm = str_replace("{{" . $i . "_qty}}", "", $confirm);
		$confirm = str_replace("{{" . $i . "_price}}", "", $confirm);
		$confirm = str_replace("{{" . $i . "_total}}", "", $confirm);
	}

	$tax = $total * $tax_rate; 

	$confirm = str_replace("{{total}}", get_price($total), $confirm);
	$confirm = str_replace("{{tax}}", get_price($tax), $confirm);
	$confirm = str_replace("{{total_tax}}", get_price($total + $tax), $confirm);

	$mail_title = $string['mail']['confirmation'];

	$message = str_replace("{{mail_title}}", $mail_title, $message);
	$message = str_replace("{{confirmation_url}}", $confirmation_url . $hash, $message);
	$message = str_replace("{{unsubscribe_url}}", $unsubscribe_url . $hash, $message);

	$message = str_replace("\n", " \n ", $message);
	$message = str_replace("\r", " \r ", $message);

	$confirm = str_replace("\n", " \n ", $confirm);
	$confirm = str_replace("\r", " \r ", $confirm);

    $uid = md5(uniqid(time()));
	$filename = "confirmation.html";

	$sender = $store_email;
	$subject = "[" . $store_name . "] Confirmation";

	$headers = "From: " . $sender . "\r\n";
	$headers .= "To: " . $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
  
 	$headers .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n";
 	$headers .= "--" . $uid . "\r\n";

	$headers .= "Content-type:text/plain; charset=iso-8859-1\r\n";
 	$headers .= "Content-Transfer-Encoding: 7bit\r\n";
 	$headers .= $message . "\r\n";
 	$headers .= "--" . $uid . "\r\n";

	$headers .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\r\n";
 	$headers .= "Content-Transfer-Encoding: 7bit\r\n";
 	$headers .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n";
 	$headers .= $confirm . "\r\n";
	$headers .= "--" . $uid . "--";

	$result = mail($email, $subject, "", $headers);

	if($result != true) {
		error($string['status']['orderNotPlaced']);
		header("location: ../pages/home");
		exit;
	}

	success($string['status']['checkEmail']);
	header("location: ../pages/home");
?>
