<h1><?php echo $string["manage"]["products"]["remove"]; ?></h1>
<table>	
	<?php
		$cmd = "SELECT * FROM products";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td><a href="product?id=' . $row['id'] . '"><img class="cart-thumbnail" src="' . get_product_image($row['id'], 0) . '"/></a></td>';
            echo '<td><a href="product?id=' . $row['id'] . '">' . $row['name'] . '</a></td>';
			echo '<td>' . $row['description'] . '</td>';
			echo '<td>' . $row['price'] . '</td>';
			echo '<td>' . $row['quantity'] . '</td>';
			echo '<td><a href="../actions/product_remove?id=' . $row['id'] . '">X</a></td>';
			echo '</tr>';
		}
	?>	
</table>
