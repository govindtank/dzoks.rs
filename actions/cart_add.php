<?php
 	require("../logic/config.php");

	if(!params_ok(["id", "size", "qty"], "GET")) {
		if(isset($_GET['id'])) {
			error($string['status']['requiredFields']);
			header("location: ../pages/product?id=" . strip($_GET['id']));
		}else {
			error($string['status']['productNotAddedToCart']);
			header("location: ../pages/shop");
		}

		exit;
	}
	
	$product = strip($_GET["id"]);
    $size = strip($_GET["size"]);
    $qty = strip($_GET["qty"]);

	$cmd = "SELECT COUNT(*) FROM cart WHERE user='$id' AND checked=0";
	$count = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	if($count >= $max_cart_items) {
		error($string['status']['maxCartItems']);
		header("location: ../pages/product?id=" . $product);
		exit;
	}
    
	$cmd = "SELECT quantity FROM cart WHERE product='$product' AND size='$size' AND user='$id' AND checked=0";
	$result = mysqli_query($connect, $cmd);

	$qtyAdded = (mysqli_num_rows($result) == 0) ? 0 : mysqli_fetch_array($result)[0];

	if($qty + $qtyAdded > $max_item_qty) {
		error($string['status']['maxItemQuantity']);
		header("location: ../pages/product?id=" . $product);
		exit;
	}

	if($qtyAdded == 0) {
		checkQuantity($qty, $size, $product);

		$cmd = "INSERT INTO cart (product, size, quantity, user) VALUES('$product', '$size', '$qty', '$id')";
	}else {
		$qty += $qtyAdded;

		checkQuantity($qty, $size, $product);

		$cmd = "UPDATE cart SET quantity='$qty' WHERE product='$product' AND size='$size' AND user='$id' AND checked=0";
	}

	mysqli_query($connect, $cmd);

	success($string['status']['productAddedToCart']);
	header("location: ../pages/product?id=" . $product);
?>
