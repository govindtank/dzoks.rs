<?php
 	require("../logic/config.php");

	$cmd = "DELETE FROM cart WHERE user='$ip'";
	mysqli_query($connect, $cmd);

	header("location: ../pages/cart.php");
?>
