<h1><?php echo $string["manage"]["orders"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM purchases";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			if($row['confirmed'] == 1 && $row['shipped'] == 1)  {
				echo '<tr class="red">';
			}else if($row['confirmed'] == 1 && $row['shipped'] == 0)  {
				echo '<tr class="green">';
			}else {
				echo '<tr>';
			}

			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['email'] . '</td>';
			echo '<td>' . $row['phone'] . '</td>';
			echo '<td>' . $row['address'] . '</td>';
			echo '<td>' . $row['city'] . '</td>';
			echo '<td>' . $row['zip'] . '</td>';
			echo '<td>' . $row['country'] . '</td>';
			echo '<td>' . $row['ip'] . '</td>';
			echo '<td>' . $row['shipping_company'] . '</td>';
			echo '<td>' . $row['shipping_number'] . '</td>';
			echo '<td>' . $row['date_submitted'] . '</td>';

			echo '</tr>';
			
			if($row['confirmed'] == 1 && $row['shipped'] == 1)  {
				echo '<tr class="red"><td><a class="button center" href="../actions/order_ship?shipped=0&id=' . $row['id'] .'">' . $string['manage']['unship'] . '</a></td></tr>';
			}else if($row['confirmed'] == 1 && $row['shipped'] == 0)  {	
				echo '<tr class="green">';
				echo '<form action="../actions/order_ship" method="GET">';
           		echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
           		echo '<input type="hidden" name="shipped" value="1">';
				echo '<td><input name="shipping_company" type="text" size="30" value="' . $row['shipping_company'] . '" placeholder="' . $string["manage"]["shippingCompany"] . '" required/></td>';
				echo '<td><input name="shipping_number" type="text" size="30" value="' . $row['shipping_number'] . '" placeholder="' . $string["manage"]["shippingNumber"] . '" required/></td>';
				echo '<td><input type="submit" class="button" value="' . $string['manage']['ship'] . '"/></td>';
				echo '</form>';
				echo '</tr>';
			}
		}
	?>			
</table>
