<?php
	require('../logic/config.php');

	if(!isset($_GET['o']) || !isset($_GET['l'])) {
		exit;
	}

	$offset = strip($_GET['o']);
	$limit = strip($_GET['l']);

	// TODO uncomment instagram and remove dummy images
	/*$images = instagram_images();

	foreach($images as $key => $value) {
		echo '<div class="item" data-sr>';
		echo '<a href="' . $key . '">';
		echo '<img class="item-image" src="' . $value . '" />';
		echo '<div class="item-overlay">';
		echo '<div class="tint hover"></div>';
		echo '</div>';
		echo '</a>';
		echo '</div>';
	}*/
					
	for($i = 0; $i < 8; $i++) {
		echo '<div class="item" data-sr>';
		echo '<a href="../img/random.jpg">';
		echo '<img class="item-image" src="../img/random.jpg" />';
		echo '<div class="item-overlay">';
		echo '<div class="tint hover"></div>';
		echo '</div>';
		echo '</a>';
		echo '</div>';
	}
?>
