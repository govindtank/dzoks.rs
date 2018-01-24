<?php
	require("../logic/config.php"); 

	if(!isset($_SESSION["username"])) {
		error($string["status"]["notLoggedIn"]);
		header("location: login.php");
		exit;
	}

	$cmd = "SELECT * FROM admins WHERE username='" . $_SESSION['username'] . "'";

	$result = mysqli_query($connect, $cmd);

	if(mysqli_num_rows($result) == 0) {
		error($string["status"]["notLoggedIn"]);
		header("location: login.php");
		exit;
	}
?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body>
        <?php require("../ui/header.php"); ?>
            <div class="main">
				<div class="left">
                <form action="../actions/product_add.php" method="POST" enctype="multipart/form-data">  
					<h1><?php echo $string["manage"]["products"]; ?></h1>
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
					<input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/>
                </form>
				</div>
				<div class="right">
				<form action="../actions/collection_add.php" method="POST">
					<h1><?php echo $string["manage"]["collections"]; ?></h1>
                    <input name="name" type="text" size="30" placeholder="<?php echo $string['manage']['name']; ?>" required/>
                    <input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/>
				</form>
				</div>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
