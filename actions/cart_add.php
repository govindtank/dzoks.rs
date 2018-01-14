<?php
 	require("../logic/config.php");
	
	if(!params_ok(["id", "size", "qty"], "GET")) {
		error($string['productNotAddedToCart']);
		header("location: ../pages/shop.php");
		exit;
	}

    $id = strip($_GET["id"]);
    $size = strip($_GET["size"]);
    $qty = strip($_GET["qty"]);

	$cmd = "SELECT id, quantity FROM cart WHERE product='$id' AND size='$size' AND user='$ip'";
	$result = mysqli_query($connect, $cmd);

	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$qty += $row['quantity'];
		}

		$item = $row['id'];

		$cmd = "UPDATE SET quantity='$qty' WHERE id='$item'";
	}else {
		$cmd = "INSERT INTO cart (product, size, quantity, user) VALUES('$id', N'$size', '$qty', '$ip')";
	}
	
	mysqli_query($connect, $cmd);

	success($string['productAddedToCart']);
	header("location: ../pages/product.php?id=" . $id);
?>
