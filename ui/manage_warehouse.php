<h1><?php echo $string["manage"]["warehouse"]; ?></h1>
<table>	
	<?php
		echo '<td class="no-border"></td>';
		echo '<td class="no-border"></td>';
		echo '<td class="no-border"></td>';
		
		$cmd = "SELECT * FROM sizes";
		$result = mysqli_query($connect, $cmd);	
		
		$sizes = [];

		while($row = mysqli_fetch_array($result)) {
			$sizes[$row['id']] = $row['name'];
			
			echo '<td>' . $row['name'] .'</td>';
		}

		$cmd = "SELECT * FROM products";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td><a href="product?id=' . $row['id'] . '"><img class="thumbnail" src="' . get_thumbnail($row['id'], 0) . '"/></a></td>';
			echo '<td><p>' . $row['name'] . '<p/></td>';
			echo '<td><p>' . $row['price'] . '<p/></td>';
			
			foreach($sizes as $key => $value) {
				echo '<td>';
				
				$qty = get_quantity($key, $row['id'], $connect);

				if($qty > 0) {
					echo '<a class="button green" href="../actions/product_sell?size=' . $key . '&id=' . $row['id'] . '">' . $string['product']['sell'] . '</a>';	
				}else {
					echo '<p>' . $string["status"]["soldout"] . '</p>';
				}

				echo '</td>';
			}
			
			echo '<td><form action="../actions/product_gift" method="GET">';
			echo '<input name="id" type="hidden" value="' . $row['id'] . '"/>';

			echo '<select name="size" required>';
			echo '<option disabled value="">' . $string['product']['size'] . '</option>';

			foreach($sizes as $key => $value) {
				$qty = get_quantity($key, $row['id'], $connect);

				if($qty == 0) {
					continue;	
				}

				echo '<option value="' . $key . '">' . $value . '</option>';
			}

			echo '</select>';
			
			echo '<input name="note" type="text" placeholder="' . $string['product']['note'] . '" required />';
			echo '<input type="submit" class="button red" value="' . $string['product']['gift'] . '" />';
			echo '</form></td>';

			echo '</tr>';
		}
	?>	
</table>
