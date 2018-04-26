<?php
    session_start();

	// TODO uncomment before release
	//ini_set('display_errors', 'off');

	require("../logic/functions.php");
    
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

	$id = get_id();
	$ip = get_ip();

	$store_name = "DZOKS d.o.o.";
	$store_url = "https://www.dzoks.rs";
	$store_email = "office@dzoks.rs";
	$store_phone = "+381613129241";
	$store_instagram = "dzoks_official";
	$unsubscribe_url = $store_url . "/actions/unsubscribe?h=";
	$newsletter_img = "https://www.dzoks.rs/img/newsletter.png";

	require("../logic/connect.php");
    require("../logic/get_lang.php");
?>
