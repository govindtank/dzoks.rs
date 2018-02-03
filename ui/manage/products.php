<h1><?php echo $string["manage"]["products"]; ?></h1>
<table>	
	<tr>
		<form action="../actions/product_add.php" method="POST" enctype="multipart/form-data">  
			<td class="no-border"><input name="photos[]" type="file" multiple required/></td>
    		<td class="no-border"><input name="name" type="text" maxlength="50" placeholder="<?php echo $string['manage']['name']; ?>" required/></td>
    		<td class="no-border"><input name="price" type="number" class="number" step="0.01" placeholder="<?php echo $string['manage']['price']; ?>" required/></td>     
			<td class="no-border">
				<select name="collection" required>
					<option selected disabled value=""><?php echo $string['manage']['collection']; ?></option>
					<?php
						$cmd = "SELECT * FROM collections";
						$result = mysqli_query($connect, $cmd);

						while($row = mysqli_fetch_array($result)) {
							echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
						}
					?>
				</select>
			</td>
			<?php
				$cmd = "SELECT * FROM sizes";
				$result = mysqli_query($connect, $cmd);

				$size_count = mysqli_num_rows($result);

				while($row = mysqli_fetch_array($result)) {
					echo '<td class="no-border">';
					echo '<div class="input-wrapper">';
					echo '<div class="input-group">';
					echo '<a class="button" onclick="qtyDec()">-</a>';
    				echo '<input class="number" name="qty_' . $row['name']. '" type="number" min="1" step="10" class="number" id="qty_' . $row['name'] . '" placeholder="' . $row['name'] . '" required />';
					echo '<a class="button" onclick="qtyInc()">+</a>';
					echo '</div>';			
					echo '</div>';
					echo '</td>';
				}
			?>
    		<td class="no-border"><textarea name="description-rs" rows="10" cols="30" placeholder="<?php echo $string['manage']['description']['rs']; ?>" required></textarea></td>
    		<td class="no-border"><textarea name="description-en" rows="10" cols="30" placeholder="<?php echo $string['manage']['description']['en']; ?>" required></textarea></td>
			<td class="no-border"><input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/></td>
		</form>
	</tr>
	<?php
		$cmd = "SELECT * FROM products";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td><a href="product?id=' . $row['id'] . '"><img class="thumbnail" src="' . get_thumbnail($row['id'], 0) . '"/></a></td>';
            echo '<td><a href="product?id=' . $row['id'] . '">' . $row['name'] . '</a></td>';
			echo '<td>' . $row['price'] . '</td>';

			$cmd = "SELECT name FROM collections WHERE id=" . $row['collection'];
			$collection = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];
			
			echo '<td>' . $collection . '</td>';

			$cmd = "SELECT quantity FROM warehouse WHERE product=" . $row['id'] . " LIMIT " . $size_count;

			$wh_result = mysqli_query($connect, $cmd);
			
			while($wh = mysqli_fetch_array($wh_result)) {
				echo '<td><p>' . $wh['quantity'] . '<br/></p></td>';
			}
			
			if(mysqli_num_rows($wh_result) == 0) {
				for($i = 0; $i < $size_count; $i++) {
					echo '<td>/</td>';	
				}
			}

			$desc_rs = get_description($row['id'], 'rs');
			$desc_rs = (is_null($desc_rs)) ? '/' : $desc_rs;

			$desc_en = get_description($row['id'], 'en');
			$desc_en = (is_null($desc_en)) ? '/' : $desc_en;

			echo '<td>' . $desc_rs . '</td>';
			echo '<td>' . $desc_en . '</td>';

			echo '<td><a href="../actions/product_remove?id=' . $row['id'] . '">X</a></td>';
			echo '</tr>';
		}
	?>	
</table>
