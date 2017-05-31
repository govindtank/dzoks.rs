<?php require("logic/config.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>

            <div class="main">
                <h1><?php echo $string["checkout"]["header"]; ?></h1>

                <form>  
                    <!-- 
                        TODO:
                            CSRF - add token to hidden field
                    -->
                    
                    <input type="hidden" name="token" <?php 'value="' . $_SESSION['token'] . '"'?>>
                    
                    <?php
                        foreach($string["checkout"]["inputs"] as $key => $value) {
                            echo '<input name="' . $key . '" type="text" size="30" placeholder="' . $value . '" />';
                        }
                    ?>
                    
                    <div class="buttons">
                        <input class="button" type="submit" value="<?php echo $string['checkout']['submit']; ?>" />
                    </div>
                </form>
            </div>

        <?php require("ui/footer.php"); ?>
    </body>
</html>