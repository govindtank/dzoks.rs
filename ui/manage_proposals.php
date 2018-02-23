<h1><?php echo $string["manage"]["proposals"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM proposals";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			echo '<tr>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['email'] . '</td>';
			echo '<td>' . $row['sock_name'] . '</td>';
			echo '<td>' . $row['description'] . '</td>';
			echo '<td>' . $row['date_submitted'] . '</td>';
			
			$path = get_first_file("../proposals/" . $row['id']);

			echo '<td><a href="' . $path .'"><img class="thumbnail" src="' . $path . '" /></a></td>';
			echo '</tr>';
		}
	?>			
</table>
