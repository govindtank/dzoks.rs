<?php
	session_start();

 	require("connect.php");
	require("functions.php");

	$ip = getenv('HTTP_CLIENT_IP');

    $id = strip($_GET["id"]);
    $size = strip($_GET["size"]);
    $qty = strip($_GET["qty"]);

    if(!isset($id) || !isset($size) || !isset($qty)) {
        exit;
    }

	$cmd = "SELECT id, quantity FROM cart WHERE product='$id' AND size='$size' AND user='$ip'";
	$result = mysqli_query($connect, $cmd));

	if(mysqli_num_rows($result) > 0) {
		echo 'trala';
		
		while($row = mysqli_fetch_assoc($result)) {
			$qty += $row['quantity'];
		}

		$item = $row['id'];

		$cmd = "UPDATE SET quantity='$qty' WHERE id='$item'";
	}else {
		$cmd = "INSERT INTO cart (product, size, quantity, user) VALUES('$id', N'$size', '$qty', '$ip')";
	}
	
	mysqli_query($connect, $cmd);
?>
