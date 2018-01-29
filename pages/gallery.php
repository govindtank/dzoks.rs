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

        <div class="main padded">
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
					
					for($i = 0; $i < 5; $i++) {
						echo '<div class="item">';
						echo '<a href="../img/home1.jpg">';
						echo '<img class="item-image" src="../img/home1.jpg" />';
						echo '<div class="item-overlay">';
						echo '<div class="tint hover"></div>';
						echo '</div>';
						echo '</a>';
						echo '</div>';
					}
				?>
	       </div>
        
        <?php require("../ui/footer.php"); ?>
    </body>
</html>
