<?php
	require('../logic/config.php');

	if(!isset($_GET['o']) || !isset($_GET['l'])) {
		exit;
	}

	$offset = strip($_GET['o']);
	$limit = strip($_GET['l']);

	$out = [];
	$data = "";
	$max_id = $offset;
	
	$images = get_instagram_images($limit);

	foreach($images as $id => $urls) {
		$data .= '<div class="item" data-sr>';
		$data .= '<a href="' . $urls[0] . '">';
		$data .= '<img alt="Gallery image" class="item-image" src="' . $urls[1] . '" />';
		$data .= '<div class="item-overlay">';
		$data .= '<div class="tint hover"></div>';
		$data .= '</div>';
		$data .= '</a>';
		$data .= '</div>';	

		$max_id = $id;
	}

	$out['images'] = $data;
	$out['offset'] = $max_id;

	echo json_encode($out);
?>
