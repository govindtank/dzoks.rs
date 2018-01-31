<?php
	require('../logic/config.php');

	if(!isset($_GET['o']) || !isset($_GET['l'])) {
		exit;
	}

	$offset = strip($_GET['o']);
	$limit = strip($_GET['l']);

	$cmd = 'SELECT * FROM products LIMIT ' . $limit . ' OFFSET ' . $offset;
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {
    	echo '<div class="item" data-sr>';
		echo '<a href="product.php?id=' . $row['id'] . '">';
                    	
		echo '<img class="item-image" src="' . get_thumbnail($row["id"], 0). '"/>';
		echo '<img class="item-overlay" src="' . get_thumbnail($row["id"], 1). '"/>';
		
		$qty_total = 0;

		$cmd = "SELECT warehouse.quantity, sizes.name FROM warehouse, sizes WHERE product=" . $row['id'] . " AND sizes.id = warehouse.size";

		$wh_result = mysqli_query($connect, $cmd) or die(mysqli_error($connect));
			
		while($wh = mysqli_fetch_array($wh_result)) {
			$qty_total += $wh['quantity'];
		}

		if($qty_total == 0) {
			echo '<div class="item-marker">';
			echo '<p class="soldout">' . $string["status"]["soldout"] . '</p>';
			echo '</div>';
		}else {
			$ONE_MONTH = 2592000;

			if(strtotime(date("Y-m-d h:i:s")) - strtotime($row['date_added']) < $ONE_MONTH) {
				echo '<div class="item-marker">';
				echo '<p class="new">' . $string["status"]["new"] . '</p>';
				echo '</div>';
			}
		}

		echo '<div class="item-marker">';
		echo '<p class="info"><b>' . $row["name"] . '</b> ' . get_price($row["price"]) . '</p>';
		echo '</div>';		
		echo '</a></div>';
	}
?>
