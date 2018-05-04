<h1><?php echo $string["manage"]["orders"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM purchases";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			$date = $row['date_submitted'];
			
			if(isset($_SESSION['min_date']) && $date < $_SESSION['min_date']) {
				continue;
			}

			if($row['confirmed'] == 1 && $row['shipped'] == 1)  {
				echo '<tr class="red">';
			}else if($row['confirmed'] == 1 && $row['shipped'] == 0)  {
				echo '<tr class="green">';
			}else {
				echo '<tr>';
			}

			echo '<td>' . $row['id'] . '</td>';
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
			echo '<td>' . $date . '</td>';

			echo '</tr>';
			
			if($row['confirmed'] == 1 && $row['shipped'] == 1)  {
				echo '<tr class="red">';
				echo '<td><a class="button center" href="../actions/order_ship?shipped=0&id=' . $row['id'] .'">' . $string['manage']['unship'] . '</a></td>';
				echo '</tr>';
			}else if($row['confirmed'] == 1 && $row['shipped'] == 0)  {	
				$order_id = $row['id'];
				
				echo '<tr class="green">';
				
				echo '<form action="../actions/order_ship" method="GET">';
           		echo '<input type="hidden" name="id" value="' . $order_id . '">';
           		echo '<input type="hidden" name="shipped" value="1">';
				echo '<td><input name="shipping_company" type="text" size="30" value="' . $row['shipping_company'] . '" placeholder="' . $string["manage"]["shippingCompany"] . '" required/></td>';
				echo '<td><input name="shipping_number" type="text" size="30" value="' . $row['shipping_number'] . '" placeholder="' . $string["manage"]["shippingNumber"] . '" required/></td>';
				echo '<td><input type="submit" class="button" value="' . $string['manage']['ship'] . '"/></td>';
				echo '</form>';
				
				echo '<td><a class="button center" href="../actions/order_invoice?id=' . $order_id . '">' . $string['manage']['invoice'] . '</a></td>';
				
				if($row['valid'] == 1) {
					echo '<td><a class="button center" href="../actions/order_invalid?valid=0&id=' . $row['id'] .'">' . $string['manage']['invalid'] . '</a></td>';
				}else {
					echo '<td><a class="button center" href="../actions/order_invalid?valid=1&id=' . $row['id'] .'">' . $string['manage']['valid'] . '</a></td>';
				}
				
				echo '</tr>';
			}
		}
	?>			
</table>
