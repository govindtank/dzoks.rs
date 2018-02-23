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

			echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
			echo '<td>' . $row['email'] . '</td>';
			echo '<td>' . $row['phone'] . '</td>';
			echo '<td>' . $row['address'] . '</td>';
			echo '<td>' . $row['city'] . '</td>';
			echo '<td>' . $row['zip'] . '</td>';
			echo '<td>' . $row['country'] . '</td>';
			echo '<td>' . $row['ip'] . '</td>';
			echo '<td>' . $row['date_submitted'] . '</td>';

			if($row['confirmed'] == 1 && $row['shipped'] == 1)  {
				echo '<td><a class="button" href="../actions/order_ship.php?shipped=0&id=' . $row['id'] .'">' . $string['manage']['unship'] . '</a></td>';
			}else if($row['confirmed'] == 1 && $row['shipped'] == 0)  {
				echo '<td><a class="button" href="../actions/order_ship.php?shipped=1&id=' . $row['id'] .'">' . $string['manage']['ship'] . '</a></td>';
			}
			
			echo '</tr>';
		}
	?>			
</table>
