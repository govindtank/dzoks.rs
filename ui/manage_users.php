<h1><?php echo $string["manage"]["users"]; ?></h1>
<table>	
	<tr>
		<form action="../actions/user_add.php" method="POST">
			<td class="no-border"><input name="username" type="text" size="30" placeholder="<?php echo $string['login']['username']; ?>" required/></td>
            <td class="no-border"><input name="password" type="password" size="30" placeholder="<?php echo $string['login']['password']; ?>" required/></td>
			<td class="no-border"><input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>" /></td>
		</form>
	<tr>
	<?php
		$cmd = "SELECT * FROM admins";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			if(strcmp($row['username'], $_SESSION['username']) == 0) {
				continue;	
			}

			echo '<tr>';
			echo '<form action="../actions/user_update.php" method="POST">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
			echo '<td><input name="username" type="text" size="30" value="' . $row['username'] . '" placeholder="' . $string["login"]["username"] . '" required/></td>';
			echo '<td><input type="submit" class="button" value="' . $string['manage']['save'] . '"/></td>';
			echo '<td><a class="button button-shrink" href="../actions/user_remove.php?id=' . $row['id'] . '">X</a></td>';
			echo '</form>';
			echo '</tr>';
		}
	?>			
</table>
