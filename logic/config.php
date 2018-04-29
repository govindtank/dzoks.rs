<?php
    session_start();

	// TODO uncomment before release
	//ini_set('display_errors', 'off');

	require("../logic/functions.php");
    
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

	$id = get_id();
	$ip = get_ip();

	$store_name = "ЏОКС д.о.о.";
	$store_url = "http://www.dzoks.rs";
	$store_number = "00000000";
	$store_vat = "000000000";
	$store_email = "office@dzoks.rs";
	$store_phone = "+381613129241";
	$store_instagram = "dzoks_official";
	$unsubscribe_url = $store_url . "/actions/unsubscribe?h=";
	$mail_img = "https://www.dzoks.rs/img/mail.png";

	$confirmation_path = "../text/mail/attach/potvrda.html";
	$invoice_path = "../text/mail/attach/racun.html";
	$letter_path = "../text/mail/attach/pismo.html";

	$max_cart_count = 10;
	$tax_rate = 0.2;

	$date_format = "d. m. Y.";

	require("../logic/connect.php");
    require("../logic/get_lang.php");
?>
