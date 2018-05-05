<h1><?php echo $string["manage"]["details"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM purchases WHERE id=" . $_GET['id'];
		$row = mysqli_fetch_array(mysqli_query($connect, $cmd));

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['orderNumber'] . '</td>';
		echo '<td class="align-left no-border">' . $row['id'] . '</td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['name'] . '</td>';
		echo '<td class="align-left no-border">' . $row['name'] . '</td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['email'] . '</td>';
		echo '<td class="align-left no-border">' . $row['email'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['phone'] . '</td>';
		echo '<td class="align-left no-border">' . $row['phone'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['address'] . '</td>';
		echo '<td class="align-left no-border">' . $row['address'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['city'] . '</td>';
		echo '<td class="align-left no-border">' . $row['city'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['zip'] . '</td>';
		echo '<td class="align-left no-border">' . $row['zip'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['country'] . '</td>';
		echo '<td class="align-left no-border">' . $row['country'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['ip'] . '</td>';
		echo '<td class="align-left no-border">' . $row['ip'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['shippingCompany'] . '</td>';
		echo '<td class="align-left no-border">' . $row['shipping_company'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['shippingNumber'] . '</td>';
		echo '<td class="align-left no-border">' . $row['shipping_number'] . '</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td class="align-left no-border">' . $string['manage']['orderDate'] . '</td>';
		echo '<td class="align-left no-border">' . $row['date_submitted'] . '</td>';
		echo '</tr>';
		
		echo '<tr>';
		
		if($row['confirmed'] == 1 && $row['shipped'] == 0) {	
			if($row['valid'] == 1) {
				echo '<td class="no-border"><a class="button center red" href="../actions/order_invalid?valid=0&id=' . $row['id'] .'">' . $string['manage']['invalid'] . '</a></td>';
				echo '<td class="no-border"><a class="button center green" href="../actions/order_invoice?id=' . $row['id'] . '">' . $string['manage']['invoice'] . '</a></td>';
			}else {
				echo '<td class="no-border"><a class="button center green" href="../actions/order_invalid?valid=1&id=' . $row['id'] .'">' . $string['manage']['valid'] . '</a></td>';
			}	
		}	
		
		echo '</tr>';
	?>			
</table>
<?php

		echo '<div>';
		
		if($row['confirmed'] == 1 && $row['shipped'] == 1)  {
			echo '<a class="button center" href="../actions/order_ship?shipped=0&id=' . $row['id'] .'">' . $string['manage']['unship'] . '</a>';
		}else if($row['confirmed'] == 1 && $row['shipped'] == 0 && $row['valid'] == 1) {		
			echo '<form action="../actions/order_ship" method="GET">';
      		echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
       		echo '<input type="hidden" name="shipped" value="1">';
			echo '<input name="shipping_company" type="text" size="30" value="' . $row['shipping_company'] . '" placeholder="' . $string["manage"]["shippingCompany"] . '" required/>';
			echo '<input name="shipping_number" type="text" size="30" value="' . $row['shipping_number'] . '" placeholder="' . $string["manage"]["shippingNumber"] . '" required/>';
			echo '<input type="submit" class="button" value="' . $string['manage']['ship'] . '"/>';
			echo '</form>';
		}
		
		echo '</div>';

?>
