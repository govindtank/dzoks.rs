<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);

	if(!params_ok(["id", "reply"], "GET")) {	
		error($string['status']['replyNotAdded']);
		header("location: ../pages/manage?type=3");
		exit;
	}

	$comment = strip($_GET['id']);
	$reply = strip($_GET['reply']);

	$username = $_SESSION['username'];
	
	$cmd = "SELECT * FROM comments WHERE reply_to=" . $comment;
	$result = mysqli_query($connect, $cmd);
	
	if(mysqli_num_rows($result) > 0) {	
		$cmd = "UPDATE comments SET comment='" . $reply . "', name='" . $username . "', ip='" . $ip . "' WHERE reply_to=" . $comment;
		mysqli_query($connect, $cmd);
	}else {
		$cmd = "INSERT INTO comments (`name`, `comment`, `reply_to`, `ip`) VALUES('$username', '$reply', '$comment', '$ip')";
		mysqli_query($connect, $cmd);
	}

	success($string['status']['replyAdded']);
	header("location: ../pages/manage?type=3");
?>
