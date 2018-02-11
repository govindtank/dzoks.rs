<h1><?php echo $string["manage"]["collections"]; ?></h1>
<table>	
	<tr>
		<form action="../actions/collection_add.php" method="POST">
    		<td class="no-border"><input name="name" type="text" size="30" placeholder="<?php echo $string['manage']['name']; ?>" required/></td>
        	<td class="no-border"><input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/></td>
		</form>
	<tr>
	<?php
		$cmd = "SELECT * FROM collections";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<form action="../actions/collection_update.php" method="POST">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
			echo '<td><input type="text" name="name" placeholder="' . $string['manage']['name'] . '" value="' . $row['name'] . '" /></td>';
			echo '<td><input type="submit" class="button" value="' . $string['manage']['save'] . '"/></td>';
			echo '<td><a class="button" href="../actions/collection_remove?id=' . $row['id'] . '">X</a></td>';
			echo '</form>';
			echo '</tr>';
		}
	?>			
</table>
