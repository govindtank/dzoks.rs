<?php
	require("../logic/config.php");
	require("../logic/instagram.php");
?>
<html>
    <head>
        <?php
			require("../ui/head_content.php");
			require("../ui/scroll.php");
		?>	
		<link rel="stylesheet" href="../css/gallery.css">
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

        <div class="main">
			<p class="center-both"><?php echo $string['status']['wait']; ?></p>
		</div>
        
        <?php require("../ui/footer.php"); ?>
		<script type="text/javascript" src="../js/scroll.js"></script>
    </body>
</html>
