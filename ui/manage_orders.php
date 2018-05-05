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

			if($row['confirmed'] == 1 && $row['shipped'] == 1) {
				echo '<tr>';
			}else if($row['confirmed'] == 1 && $row['shipped'] == 0)  {
				if($row['valid'] == 1) {
					echo '<tr class="green">';
				}else {
					echo '<tr class="red">';
				}
			}else {
				echo '<tr class="red">';
			}

			echo '<td>' . $row['id'] . '</td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['email'] . '</td>';
			echo '<td>' . $row['phone'] . '</td>';
			echo '<td>' . $row['city'] . ', ' . $row['country'] . '</td>';
			echo '<td>' . $date . '</td>';

			echo '<td><a class="button center" href="../pages/manage?type=' . $_GET['type'] . '&id=' . $row['id'] .'">' . $string['manage']['details'] . '</a></td>';
			echo '</tr>';
		}
	?>			
</table>
