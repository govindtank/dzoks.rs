<?php
 	require("../logic/config.php");

	if(!params_ok(["name", "comment"], "POST")) {	
		error($string['status']['productNotCommented']);
		header("location: ../pages/shop");
		exit;	
	}

	$name = strip($_POST['name']);
	$comment = strip($_POST['comment']);
	$product = strip($_POST['product']);

	$cmd = "SELECT * FROM comments WHERE ip='$ip' AND product=" . $product;
	$result = mysqli_query($connect, $cmd);

	if(mysqli_num_rows($result) > 0) {	
		error($string['status']['alreadyCommented']);
		header("location: ../pages/product?id=" . $product);
		exit;	
	}

	$cmd = "INSERT INTO comments (`name`, `comment`, `product`, `ip`) VALUES('$name', '$comment', '$product', '$ip')";
	
	mysqli_query($connect, $cmd);

	success($string['status']['productCommented']);
	header("location: ../pages/product?id=" . $product);
?>
