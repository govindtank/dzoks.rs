<?php
    session_start();

    $page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

	$ip = getenv('HTTP_CLIENT_IP');
    
	require("logic/connect.php");
	require("logic/functions.php");
    require("logic/get_lang.php");
?>
