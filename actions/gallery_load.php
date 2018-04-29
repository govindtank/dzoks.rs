<?php
	require('../logic/config.php');

	if(!isset($_GET['o']) || !isset($_GET['l'])) {
		exit;
	}

	$offset = strip($_GET['o']);
	$limit = strip($_GET['l']);

	$images = instagram_images();

	foreach($images as $key => $value) {
		echo '<div class="item" data-sr>';
		echo '<a href="' . $key . '">';
		echo '<img class="item-image" src="' . $value . '" />';
		echo '<div class="item-overlay">';
		echo '<div class="tint hover"></div>';
		echo '</div>';
		echo '</a>';
		echo '</div>';
	}
?>
