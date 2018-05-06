<h1><?php echo $string["manage"]["comments"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT
			review.id, review.name, review.comment, review.accepted, review.product, review.ip,
			reply.comment AS reply
			FROM comments review
			LEFT JOIN comments reply
			ON reply.reply_to=review.id
			WHERE review.reply_to IS NULL";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {	
			echo '<tr>';

			echo '<td><a href="product?id=' . $row['product'] . '"><img alt="Product image" class="thumbnail" src="' . get_thumbnail($row['product'], 0) . '"/></a></td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['comment'] . '</td>';
			echo '<td>' . $row['ip'] . '</td>';

			if($row['accepted'] == 0)  {
				echo '<td><a class="button green" href="../actions/comment_accept?accepted=1&id=' . $row['id'] .'">' . $string['manage']['accept'] . '</a></td>';
			}else {
				echo '<td><a class="button red" href="../actions/comment_accept?accepted=0&id=' . $row['id'] .'">' . $string['manage']['decline'] . '</a></td>';
			}

			echo '<td><form action="../actions/comment_reply" method="GET">';
			echo '<input name="id" type="hidden" value="' . $row['id'] . '" autofocus/>';
				
            echo '<textarea name="reply" rows="5" cols="10" placeholder="' . $string['manage']['reply'] . '" required>' . $row['reply'] . '</textarea>';
			echo '<input type="submit" class="button green" value="' . $string['manage']['add'] . '" />';
			echo '</form></td>';
			
			echo '</tr>';
		}
	?>			
</table>
