<h1><?php echo $string["manage"]["orders"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM purchases";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			echo '<tr>';
			echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
			echo '<td>' . $row['email'] . '</td>';
			echo '<td>' . $row['phone'] . '</td>';
			echo '<td>' . $row['address'] . '</td>';
			echo '<td>' . $row['city'] . '</td>';
			echo '<td>' . $row['zip'] . '</td>';
			echo '<td>' . $row['country'] . '</td>';
			echo '<td>' . $row['timestamp'] . '</td>';

			if($row['confirmed'] == 1 && $row['shipped'] == 0)  {
				echo '<td><a href="../actions/order_ship?id=' . $row['id'] .'">X</a></td>';
			}
			
			echo '</tr>';
		}
	?>			
</table>
