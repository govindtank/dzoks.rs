<h1><?php echo $string["manage"]["orders"]; ?></h1>
<table>	
	<form action="../actions/contact_newsletter.php" method="POST" enctype="multipart/form-data">  
		<td class="no-border"><input name="message" type="file" required/></td>
		<td class="no-border"><input class="button" type="submit" value="<?php echo $string['manage']['send']; ?>"/></td>
	</form>
	<?php
		$cmd = "SELECT * FROM purchases GROUP BY email";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			echo '<tr ';

			if($row['subscribed'] == 0) {
				echo 'class="red" ';	
			}

			echo '>';
			echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
			echo '<td>' . $row['email'] . '</td>';
			echo '<td>' . $row['phone'] . '</td>';
			echo '<td>' . $row['address'] . '</td>';
			echo '<td>' . $row['city'] . '</td>';
			echo '<td>' . $row['zip'] . '</td>';
			echo '<td>' . $row['country'] . '</td>';
			echo '<td>' . $row['ip'] . '</td>';
			echo '</tr>';
		}
	?>			
</table>
