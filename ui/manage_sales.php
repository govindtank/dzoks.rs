<h1><?php echo $string["manage"]["sales"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM sales";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			if(!empty($row['note']))  {
				echo '<tr class="red">';
			}else {
				echo '<tr class="green">';
			}

			echo '<td><a class="button" href="../pages/product?id=' . $row['product'] . '">' . $string['manage']['product'] . '</a></td>';
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
	?>			
</table>
