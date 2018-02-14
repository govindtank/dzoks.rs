<h1><?php echo $string["manage"]["comments"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM comments";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			if($row['accepted'] == 0)  {
				echo '<tr class="green">';
			}else {
				echo '<tr>';
			}

			echo '<td><a class="button" href="../pages/product?id=' . $row['product'] . '">' . $string['manage']['product'] . '</a></td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['comment'] . '</td>';
			echo '<td>' . $row['ip'] . '</td>';

			if($row['accepted'] == 0)  {
				echo '<td><a class="button" href="../actions/comment_accept?accepted=1&id=' . $row['id'] .'">' . $string['manage']['accept'] . '</a></td>';
			}else {
				echo '<td><a class="button" href="../actions/comment_accept?accepted=0&id=' . $row['id'] .'">' . $string['manage']['decline'] . '</a></td>';
			}
			
			echo '</tr>';
		}
	?>			
</table>
