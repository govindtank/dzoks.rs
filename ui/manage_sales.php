<h1><?php echo $string["manage"]["sales"]; ?></h1>
<table>	
	<?php
		$totalPrice = 0;
		$totalQuantity = 0;
		$totalSizes = [];

		$cmd = "SELECT * FROM sales";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			if($row['gifted'] == 1)  {
				echo '<tr class="red">';
			}else {
				echo '<tr class="green">';
			}
			
			$cmd = "SELECT price FROM products WHERE id=" . $row['product'];
			$price = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];
			
			$totalPrice += $price;
			$totalQuantity++;

			if(array_key_exists($row['size'], $totalSizes)) {
				$totalSizes[$row['size']]++;
			}else {
				$totalSizes[$row['size']] = 1;
			}

			echo '<td><a href="product?id=' . $row['product'] . '"><img class="thumbnail" src="' . get_thumbnail($row['product'], 0) . '"/></a></td>';
			echo '<td>' . get_price($price) . '</td>';
			echo '<td>' . $row['note'] . '</td>';

			$cmd = "SELECT name FROM sizes WHERE id=" . $row['size'];
			$size = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

			echo '<td>' . $size . '</td>';

			$cmd = "SELECT username FROM admins WHERE id=" . $row['admin'];
			$admin = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];
			
			echo '<td>' . $admin . '</td>';

			echo '<td>' . $row['date_submitted'] . '</td>';
			echo '</tr>';
		}
		
		if($totalQuantity > 0) {
        	echo '<tr class="bordered">';
			echo '<td><b>' . $string["manage"]["totalQuantity"] . '</b></td>';
			echo '<td><b>' . $totalQuantity . '</b></td>';
			echo '</tr>';
	
			echo '<tr class="bordered">';
			echo '<td><b>' . $string["manage"]["totalPrice"] . '</b></td>';
			echo '<td><b>' . get_price($totalPrice) . '</b></td>';
			echo '</tr>';
			
			echo '<tr class="bordered">';
			echo '<td><b>' . $string["manage"]["totalQuantityBySize"] . '</b></td>';
			echo '</tr>';
		
			$cmd = "SELECT * FROM sizes";
			$result = mysqli_query($connect, $cmd);	
		
			while($row = mysqli_fetch_array($result)) {
				$sizes[$row['id']] = $row['name'];
			
				echo '<tr>';
				echo '<td>' . $row['name'] .'</td>';
				echo '<td>' . $totalSizes[$row['id']] . '</td>';
				echo '</tr>';
			}
        }
	?>			
</table>
