<?php
    session_start();

	// NOTE all prices should be defined in RSD

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
	$store_instagram_username = "jackyjohnny70";
	$confirmation_url = $store_url . "/actions/confirm?h=";
	$unsubscribe_url = $store_url . "/actions/unsubscribe?h=";
	// TODO upload mail img to dzoks server
	$mail_img = "https://i.imgur.com/f0ukHtU.png";
	$letter_signature = "Лазар Јелић, директор";

	$mail_path = "../ui/mail.html";
	
	$confirmation_path = "../text/mail/attach/potvrda/index.html";
	$invoice_path = "../text/mail/attach/racun/index.html";
	$letter_path = "../text/mail/attach/pismo/index.html";

	// TODO upload templates to dzoks server
	$confirmation_template = "https://i.imgur.com/4Z9olM9.jpg";
	$invoice_template = "https://i.imgur.com/b7NpfsR.jpg";
	$letter_template = "https://i.imgur.com/R5CaONm.png";

	$max_cart_items = 10;
	$max_item_qty = 10;
	$tax_rate = 0.2;

	$date_format = "d. m. Y.";

	$shipping_cost = 300;

	$shop_restricted = false;
	$gallery_restricted = false;

	require("../logic/connect.php");
    require("../logic/get_lang.php");
?>
