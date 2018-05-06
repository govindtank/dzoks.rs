<?php
	require('../logic/config.php');

	if(!isset($_GET['o']) || !isset($_GET['l'])) {
		exit;
	}

	$offset = strip($_GET['o']);
	$limit = strip($_GET['l']);

	$out = [];
	$data = "";
	$max_id;

	$cmd = 'SELECT * FROM products ORDER BY id DESC LIMIT ' . $limit . ' OFFSET ' . $offset;
	$result = mysqli_query($connect, $cmd) or die(mysqli_error($connect));

	while($row = mysqli_fetch_array($result)) {
    	$data .= '<div class="item" data-sr>';
		$data .= '<a href="product?id=' . $row['id'] . '">';
                    	
		$data .= '<img alt="Product image" class="item-image" src="' . get_thumbnail($row["id"], 0). '"/>';
		$data .= '<img alt="Product image when hovered" class="item-overlay" src="' . get_thumbnail($row["id"], 1). '"/>';
			
		if(get_quantity_total($row['id']) == 0) {
			$data .= '<div class="item-marker">';
			$data .= '<p class="soldout">' . $string["status"]["soldout"] . '</p>';
			$data .= '</div>';
		}else {
			$ONE_MONTH = 2592000;

			if(strtotime(date("Y-m-d h:i:s")) - strtotime($row['date_added']) < $ONE_MONTH) {
				$data .= '<div class="item-marker">';
				$data .= '<p class="new">' . $string["status"]["new"] . '</p>';
				$data .= '</div>';
			}
		}

		$data .= '<div class="item-marker">';
		$data .= '<p class="info"><b>' . $row["name"] . '</b> ' . get_price($row["price"]) . '</p>';
		$data .= '</div>';		
		$data .= '</a></div>';
	}
	
	$out['images'] = $data;
	$out['offset'] = $offset + $limit;

	echo json_encode($out);
?>
