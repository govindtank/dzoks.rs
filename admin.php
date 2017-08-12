<?php require("logic/config.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">       
        <?php require("ui/header.php"); ?>
        
        <div class="main">
            <?php echo '<h1>' . $string["admin"]["header"] . '</h1>'; ?>
			<a href="product?id=' . $file . '" class="button">' . $string["shop"]["view"] . '</a>;

        </div>
        
        <?php require("ui/footer.php"); ?>
    </body>
</html>
