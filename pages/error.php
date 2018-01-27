<?php require("../logic/config.php"); ?>
<html>
    <head>
		<?php require("../ui/head_content.php"); ?>
		<link rel="stylesheet" href="../css/error.css">
    </head>
    <body>
        <div class="center-both">
			<h1><?php echo $string["error"]["header"]; ?></h1>
            <img class="" src="../img/error.gif" />
        	<a href="home" class="button center"><?php echo $string["error"]["action"]; ?></a>
        </div>
        
        <?php require("../ui/script.php"); ?>
    </body>
</html>
