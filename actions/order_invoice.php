<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);
	
	if(!params_ok(["id"], "GET")) {	
		error($string['status']['requiredFields']);
		header("location: ../pages/manage?type=2");
		exit;	
	}

	$order_id = strip($_GET['id']);

	$cmd = "SELECT * FROM purchases WHERE id='$order_id'";
	$purchase = mysqli_fetch_array(mysqli_query($connect, $cmd));
	
	$invoice_id = $purchase['id'];
	$name = $purchase['name'];
	$address = $purchase['address'];
	$zip = $purchase['zip'];
	$city = $purchase['city'];
	$country = $purchase['country'];
	$phone = $purchase['phone'];
	$email = $purchase['email'];
	
	$invoice = get_mail($invoice_path);

	$invoice = str_replace("{{invoice}}", $invoice_id, $invoice);
	$invoice = str_replace("{{name}}", $name, $invoice);
	$invoice = str_replace("{{address}}", $address, $invoice);
	$invoice = str_replace("{{zip}}", $zip, $invoice);
	$invoice = str_replace("{{city}}", $city, $invoice);
	$invoice = str_replace("{{country}}", get_country($country), $invoice);
	$invoice = str_replace("{{phone}}", $phone, $invoice);
	$invoice = str_replace("{{email}}", $email, $invoice);
	
	$cmd = "SELECT * FROM cart WHERE purchase=" . $invoice_id;
	$result = mysqli_query($connect, $cmd);

	$i = 0;
	$total = 0;

	while($row = mysqli_fetch_array($result)) {
		$i++;
		
		$cmd = "SELECT name FROM sizes WHERE id=" . $row['size'];
		$product_size = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		$cmd = "SELECT id, name, price FROM products WHERE id=" . $row['product'];
		$product = mysqli_fetch_array(mysqli_query($connect, $cmd));

		$product_qty = $row['quantity'];
		
		$product_id = $product['id'];
		$product_name = $product['name'];
		$product_price = get_price($product['price']);
	
		$total += $product_qty * $product_price;

		$invoice = str_replace("{{" . $i . "_id}}", $product_id, $invoice);
		$invoice = str_replace("{{" . $i . "_name}}", $product_name . " - " . $product_size, $invoice);
		$invoice = str_replace("{{" . $i . "_qty}}", $product_qty, $invoice);
		$invoice = str_replace("{{" . $i . "_price}}", $product_price, $invoice);
		$invoice = str_replace("{{" . $i . "_total}}", get_price($product_qty * $product_price), $invoice);
	}
	
	while($i < 10) {
		$i++;

		$invoice = str_replace("{{" . $i . "_id}}", "", $invoice);
		$invoice = str_replace("{{" . $i . "_name}}", "", $invoice);
		$invoice = str_replace("{{" . $i . "_qty}}", "", $invoice);
		$invoice = str_replace("{{" . $i . "_price}}", "", $invoice);
		$invoice = str_replace("{{" . $i . "_total}}", "", $invoice);
	}

	$tax = $total * $tax_rate; 

	$invoice = str_replace("{{total}}", get_price($total), $invoice);
	$invoice = str_replace("{{tax}}", get_price($tax), $invoice);
	$invoice = str_replace("{{shipping}}", get_price($shipping_cost), $invoice);
	$invoice = str_replace("{{total_tax}}", get_price($total + $tax + $shipping_cost), $invoice);

	header('Content-disposition: attachment; filename=invoice_' . $order_id . '.html');
	header('Content-type: text/html');

	echo $invoice;
?>
