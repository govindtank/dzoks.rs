<?php
    session_start();

	// TODO uncomment before release
	//ini_set('display_errors', 'off');

	require("../logic/functions.php");
    
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

	$id = get_id();
	$ip = get_ip();

	$store_name = "DZOKS";
	$store_url = "https://www.dzoks.rs";
	$store_email = "office@dzoks.rs";
	$store_instagram = "dzoks_official";


	require("../logic/connect.php");
    require("../logic/get_lang.php");
?>
