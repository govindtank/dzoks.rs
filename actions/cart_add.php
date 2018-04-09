<?php
 	require("../logic/config.php");
	
	if(!params_ok(["id", "size", "qty"], "GET")) {
		if(isset($_GET['id'])) {
			error($string['status']['requiredFields']);
			header("location: ../pages/product.php?id=" . strip($_GET['id']));
		}else {
			error($string['status']['productNotAddedToCart']);
			header("location: ../pages/shop.php");
		}

		exit;
	}

    $product = strip($_GET["id"]);
    $size = strip($_GET["size"]);
    $qty = strip($_GET["qty"]);

	$cmd = "SELECT quantity FROM cart WHERE product='$product' AND size='$size' AND user='$id'";
	$result = mysqli_query($connect, $cmd);

	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			$qty += $row['quantity'];
		}

		checkQuantity($qty, $size, $product, $connect, $string);

		$cmd = "UPDATE cart SET quantity='$qty' WHERE product='$product' AND size='$size' AND user='$id'";
	}else {
		checkQuantity($qty, $size, $product, $connect, $string);

		$cmd = "INSERT INTO cart (product, size, quantity, user) VALUES('$product', '$size', '$qty', '$id')";
	}

	mysqli_query($connect, $cmd) or die(mysqli_error($connect));

	success($string['status']['productAddedToCart']);
	header("location: ../pages/product.php?id=" . $product);
?>
