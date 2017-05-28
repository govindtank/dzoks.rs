<?php require("logic/get_lang.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
        <link rel="stylesheet" href="css/modal.css">
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>

        <div class="main">
            <h1><?php echo $string["gallery"]["header"]; ?></h1>

            <div class="container">
                <?php
                    $dir = "img/gallery/";
                    $files = scandir($dir);
                            
                    $i = 0;
                
                    foreach($files as $file) {
                        $file = $dir . $file;
                            
                        if(is_file($file)) {
                            echo '<div class="example-image-holder"><img alt="' . $string["gallery"]["image"] . ' ' . ++$i . '" class="example-image" src="' . $file . '" /></div>';
                        }
                    }
                ?>
            </div>
        </div>
        
        <div id="modal">
            <span class="modal-button" id="close"><i class="fa fa-times" aria-hidden="true"></i></span>
            <span class="modal-button" id="prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
            <img id="holder">
            <span class="modal-button" id="next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
        </div>

        <?php require("ui/footer.php"); ?>
        <script type="text/javascript" src="js/modal.js"></script>
    </body>
</html>