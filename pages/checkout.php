<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

            <div class="main">
                <h1><?php echo $string["checkout"]["header"]; ?></h1>

                <form action="../actions/checkout.php" method="POST">  
                    <?php
                        foreach($string["checkout"]["inputs"] as $key => $value) {
                            echo '<input name="' . $key . '" type="text" size="30" placeholder="' . $value . '" />';
                        }
                    ?>
                    
                    <input class="button" type="submit" value="<?php echo $string['checkout']['submit']; ?>" />
                </form>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
