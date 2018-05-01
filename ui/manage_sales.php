<h1><?php echo $string["manage"]["sales"]; ?></h1>
<table>	
	<?php
		$totalPrice = 0;
		$totalQuantity = 0;
		$totalSizes = [];
	
		$cmd = "SELECT sales.note, sales.gifted, sales.date_submitted,
			products.id AS product_id,
			products.price AS product_price,
			sizes.name AS size_name,
			admins.username AS admin_name
			FROM sales
			INNER JOIN products
			ON products.id=sales.product
			INNER JOIN sizes
			ON sizes.id=sales.size
			INNER JOIN admins
			ON admins.id=sales.admin";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			$date = $row['date_submitted'];
			
			if(isset($_SESSION['min_date']) && $date < $_SESSION['min_date']) {
				continue;
			}

			if($row['gifted'] == 1)  {
				echo '<tr class="red">';
			}else {
				echo '<tr class="green">';
			}
		
			$totalPrice += $row['product_price'];
			$totalQuantity++;

			if(array_key_exists($row['size_name'], $totalSizes)) {
				$totalSizes[$row['size_name']]++;
			}else {
				$totalSizes[$row['size_name']] = 1;
			}

			echo '<td><a href="product?id=' . $row['product_id'] . '"><img class="thumbnail" src="' . get_thumbnail($row['product_id'], 0) . '"/></a></td>';
			echo '<td>' . get_price($row['product_price']) . '</td>';
			echo '<td>' . $row['note'] . '</td>';
			echo '<td>' . $row['size_name'] . '</td>';
			echo '<td>' . $row['admin_name'] . '</td>';

			echo '<td>' . $date . '</td>';
			echo '</tr>';
		}
		
		if($totalQuantity > 0) {
        	echo '<tr class="bordered">';
			echo '<td>' . $string["manage"]["totalQuantity"] . '</td>';
			echo '<td><b>' . $totalQuantity . '</b></td>';
			echo '</tr>';
	
			echo '<tr class="bordered">';
			echo '<td>' . $string["manage"]["totalPrice"] . '</td>';
			echo '<td><b>' . get_price($totalPrice) . '</b></td>';
			echo '</tr>';
			
			echo '<tr class="bordered">';
			echo '<td>' . $string["manage"]["totalQuantityBySize"] . '</td>';
			echo '</tr>';

			foreach($totalSizes as $key => $value) {	
				echo '<tr>';
				echo '<td>' . $key .'</td>';
				echo '<td>' . $value . '</td>';
				echo '</tr>';
			}
        }
	?>			
</table>
