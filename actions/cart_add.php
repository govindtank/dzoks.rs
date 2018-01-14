<?php
 	require("../logic/config.php");
	
	if(!params_ok(["id", "size", "qty"], "GET")) {
		if(isset($_GET['id'])) {
			error($string['status']['requiredFields']);
			header("location: ../pages/product.php?id=" . $_GET['id']);
		}else {
			error($string['status']['productNotAddedToCart']);
			header("location: ../pages/shop.php");
		}

		exit;
	}

    $id = strip($_GET["id"]);
    $size = strip($_GET["size"]);
    $qty = strip($_GET["qty"]);

	$cmd = "SELECT quantity FROM cart WHERE product='$id' AND size='$size' AND user='$ip'";
	$result = mysqli_query($connect, $cmd);

	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$qty += $row['quantity'];
		}

		$cmd = "UPDATE cart SET quantity='$qty' WHERE product='$id'";
	}else {
		$cmd = "INSERT INTO cart (product, size, quantity, user) VALUES('$id', N'$size', '$qty', '$ip')";
	}
	
	mysqli_query($connect, $cmd);

	success($string['status']['productAddedToCart']);
	header("location: ../pages/product.php?id=" . $id);
?>
