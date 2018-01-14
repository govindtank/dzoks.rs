<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("../ui/header.php"); ?>

            <div class="main">
				<h3><?php echo $string["manage"["products"]]; ?></h3>
                <form action="../actions/product_add.php" method="POST" enctype="multipart/form-data">  
                    <input name="name" type="text" size="30" placeholder="<?php echo $string['manage']['name']; ?>" required/>
                    <input name="price" type="number" step="0.01" placeholder="<?php echo $string['manage']['price']; ?>" required/>
                    <input name="quantity" type="number" placeholder="<?php echo $string['manage']['quantity']; ?>" required/>
                    
					<select name="collection" form="add" required>
						<option disabled selected><?php echo $string['manage']['collection']; ?></option>
						<?php
							$cmd = "SELECT * FROM collections";
							$result = mysqli_query($connect, $cmd);

							while($row = mysqli_fetch_array($result)) {
								echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
							}
						?>
					</select>

                    <textarea name="description" rows="10" cols="30" placeholder="<?php echo $string['manage']['description']; ?>" required></textarea>
					<input id="photo" name="photo" type="file" required/>
					
					<div class="buttons">
                        <input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/>
                    </div>
                </form>
				<h3><?php echo $string["manage"["collections"]]; ?></h3>
				<form action="../actions/collection_add.php" method="POST">
                    <input name="name" type="text" size="30" placeholder="<?php echo $string['manage']['name']; ?>" required/>
					<div class="buttons">
                        <input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/>
                    </div>
				</form>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
