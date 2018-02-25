<h1><?php echo $string["manage"]["comments"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM comments";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			echo '<tr>';

			echo '<td><a href="product?id=' . $row['product'] . '"><img class="thumbnail" src="' . get_thumbnail($row['product'], 0) . '"/></a></td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['comment'] . '</td>';
			echo '<td>' . $row['ip'] . '</td>';

			if($row['accepted'] == 0)  {
				echo '<td><a class="button green" href="../actions/comment_accept?accepted=1&id=' . $row['id'] .'">' . $string['manage']['accept'] . '</a></td>';
			}else {
				echo '<td><a class="button red" href="../actions/comment_accept?accepted=0&id=' . $row['id'] .'">' . $string['manage']['decline'] . '</a></td>';
			}

			echo '<td><form action="../actions/comment_reply.php" method="GET">';
			echo '<input name="id" type="hidden" value="' . $row['id'] . '"/>';
				
			$cmd = "SELECT comment FROM comments WHERE reply_to=" . $row['id'];
			$reply = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];
			
			echo '<input name="reply" type="text" value="' . $reply . '" placeholder="' . $string['manage']['reply'] . '" required />';
			echo '<input type="submit" class="button green" value="' . $string['manage']['add'] . '" />';
			echo '</form></td>';
			
			echo '</tr>';
		}
	?>			
</table>
