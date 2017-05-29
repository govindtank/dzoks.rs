<?php require("logic/get_lang.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>

            <div class="main">
                <h1><?php echo $string["contact"]["header"]; ?></h1>

                <form>  
                    <input type="hidden" name="action" value="submit">
                    <input name="name" type="text" size="30" title="<?php echo $string['contact']['name']; ?>" placeholder="<?php echo $string['contact']['name']; ?>" />
                    <input name="email" type="text" size="30" title="<?php echo $string['contact']['email']; ?>" placeholder="<?php echo $string['contact']['email']; ?>" />
                    <input name="subject" type="text" size="30" title="<?php echo $string['contact']['subject']; ?>" placeholder="<?php echo $string['contact']['subject']; ?>" />
                    <textarea name="message" rows="10" cols="30" title="<?php echo $string['contact']['message']; ?>" placeholder="<?php echo $string['contact']['message']; ?>"></textarea>

                    <?php
                        $a = rand(1, 8);
                        $b = rand(1, 9 - $a);
                        
                        $sum = $a + $b;
                    ?>
                    
                    <input type="hidden" name="validationCheck" value="<?php echo $sum; ?>">
                    <input name="validationInput" type="text" size="30" title="<?php echo $string['contact']["validation"] . $a . " + " . $b . "?" ; ?>" placeholder="<?php echo $string['contact']["validation"] . $a . " + " . $b . "?" ; ?>" />
                    <div class="buttons">
                        <input class="button" id="sendButton" type="submit" value="<?php echo $string['contact']['send']; ?>" title="<?php echo $string['contact']['send']; ?>" />
                    </div>
                </form>
            </div>

        <?php require("ui/footer.php"); ?>
        <script type="text/javascript" src="js/contact.js"></script>
    </body>
</html>