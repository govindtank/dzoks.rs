<h1><?php echo $string["manage"]["users"]; ?></h1>
<table>	
	<tr>
		<form action="../actions/user_add" method="POST">
			<td class="no-border"><input name="username" type="text" size="30" placeholder="<?php echo $string['login']['username']; ?>" autofocus required/></td>
            <td class="no-border"><input name="password" type="password" size="30" placeholder="<?php echo $string['login']['password']; ?>" required/></td>
			<td class="no-border">
				<select name="level" required>
					<option selected disabled value=""><?php echo $string['manage']['level']; ?></option>
					<option value="1">1 (<?php echo $string['manage']['level1']; ?>)</option>
					<option value="2">2 (<?php echo $string['manage']['level2']; ?>)</option>
					<option value="3">3 (<?php echo $string['manage']['level3']; ?>)</option>
				</select>
			</td>
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
			echo '<form action="../actions/user_update" method="POST">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
			echo '<td><input name="username" type="text" size="30" value="' . $row['username'] . '" placeholder="' . $string["login"]["username"] . '" required/></td>';
			echo '<td>';
			echo '<select name="level" required>';
			echo '<option disabled value="">' . $string['manage']['level'] . '</option>';

			for($i = 1; $i <= 3; $i++) {
				echo '<option ';

				if($row['level'] == $i) {
					echo 'selected ';
				}

				echo 'value="' . $i . '">' . $i .' (' . $string['manage']['level' . $i] . ')</option>';
			}

			echo '</td>';
			echo '<td><input type="submit" class="button green" value="' . $string['manage']['save'] . '"/></td>';
			echo '<td><a class="button button-shrink red" href="../actions/user_remove?id=' . $row['id'] . '">X</a></td>';
			echo '</form>';
			echo '</tr>';
		}
	?>			
</table>
