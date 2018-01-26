<?php
	require("../logic/config.php");
	require("../logic/instagram.php");
?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>	
		<link rel="stylesheet" href="../css/gallery.css">
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

        <div class="main center">
            <h1><?php echo $string["gallery"]["header"]; ?></h1>

				<?php
					// TODO uncomment instagram and remove dummy images
					/*$images = instagram_images();

					foreach($images as $key => $value) {
						echo '<div class="item">';
						echo '<a href="' . $key . '">';
						echo '<img class="item-image" src="' . $value . '" />';
						echo '<div class="item-overlay">';
						echo '<div class="tint hover"></div>';
						echo '</div>';
						echo '</a>';
						echo '</div>';
					}*/
				?>
	
				<div class="item">
					<a href="../img/home1.jpg">
						<img class="item-image" src="../img/home1.jpg" />
						<div class="item-overlay">
							<div class="tint hover"></div>
						</div>
					</a>
				</div>

				<div class="item">
					<a href="../img/home2.jpg">
						<img class="item-image" src="../img/home3.jpg" />
						<div class="item-overlay">
							<div class="tint hover"></div>
						</div>
					</a>
				</div>
	
				<div class="item">
					<a href="../img/home3.jpg">
						<img class="item-image" src="../img/home1.jpg" />
						<div class="item-overlay">
							<div class="tint hover"></div>
						</div>
					</a>
				</div>

				<div class="item">
					<a href="../img/home1.jpg">
						<img class="item-image" src="../img/home1.jpg" />
						<div class="item-overlay">
							<div class="tint hover"></div>
						</div>
					</a>
				</div>

				<div class="item">
					<a href="../img/home1.jpg">
						<img class="item-image" src="../img/home1.jpg" />
						<div class="item-overlay">
							<div class="tint hover"></div>
						</div>
					</a>
				</div>
        </div>
        
        <?php require("../ui/footer.php"); ?>
    </body>
</html>
