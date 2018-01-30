<h1><?php echo $string["manage"]["products"]["add"]; ?></h1>
<form action="../actions/product_add.php" method="POST" enctype="multipart/form-data">  
    <input name="name" type="text" maxlength="50" placeholder="<?php echo $string['manage']['name']; ?>" autofocus required/>
    <input name="price" type="number" class="number" step="0.01" placeholder="<?php echo $string['manage']['price']; ?>" required/>
                    
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
	
	<?php
		$cmd = "SELECT * FROM sizes";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			echo '<label for="qty_' . $row['name'] . '">' . $row['name'] . '</label>';
    		echo '<input name="qty_' . $row['name']. '" type="number" class="number" id="qty_' . $row['name'] . '" placeholder="' . $string['manage']['quantity'] . '" />';
		}
	?>

    <textarea name="description" rows="10" cols="30" placeholder="<?php echo $string['manage']['description']; ?>" required></textarea>
	<input name="photos[]" type="file" multiple required/>
	<input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/>
</form>
