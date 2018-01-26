<h1><?php echo $string["manage"]["collections"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM collections";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td><a href="../actions/collection_remove?id=' . $row['id'] . '">X</a></td>';
			echo '</tr>';
		}
	?>			
	<tr>
		<form action="../actions/collection_add.php" method="POST">
    	     <td class="no-border"><input name="name" type="text" size="30" placeholder="<?php echo $string['manage']['name']; ?>" required/></td>
         	<td class="no-border"><input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/></td>
		</form>
	<tr>
</table>
