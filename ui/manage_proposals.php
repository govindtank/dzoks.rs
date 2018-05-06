<h1><?php echo $string["manage"]["proposals"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM proposals";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			$date =  $row['date_submitted'];

			if(isset($_SESSION['min_date']) && $date < $_SESSION['min_date']) {
				continue;
			}
			
			echo '<tr>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['email'] . '</td>';
			echo '<td>' . $row['description'] . '</td>';
			echo '<td>' . $date . '</td>';

			$path = get_first_file("../proposals/" . $row['id']);

			echo '<td><a href="' . $path .'"><img alt="Image attachment" class="thumbnail" src="' . $path . '" /></a></td>';
			echo '</tr>';
		}
	?>			
</table>
