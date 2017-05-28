<?php require("logic/get_lang.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>

            <div class="main">
                <h1><?php echo $string["contact"]["header"]; ?></h1>

                <form action="logic/contact.php" method="POST" enctype="multipart/form-data">  
                    <input type="hidden" name="action" value="submit">
                    <input name="name" type="text" size="30" placeholder="<?php echo $string['contact']['name']; ?>" />
                    <input name="email" type="text" size="30" placeholder="<?php echo $string['contact']['email']; ?>" />
                    <input name="phone" type="text" size="30" placeholder="<?php echo $string['contact']['phone']; ?>" />
                    <input name="subject" type="text" size="30" placeholder="<?php echo $string['contact']['subject']; ?>" />
                    <textarea name="message" rows="10" cols="30" placeholder="<?php echo $string['contact']['message']; ?>"></textarea>

                    <?php
                        $a = rand(1, 8);
                        $b = rand(1, 9 - $a);
                        
                        $sum = $a + $b;
                    ?>
                    
                    <input type="hidden" name="validationCheck" value="<?php echo $sum; ?>">
                    <input name="validationInput" type="text" size="30" placeholder="<?php echo $string['contact']["validation"] . $a . " + " . $b . "?" ; ?>" />
                    <input type="submit" value="<?php echo $string['contact']['send']; ?>" />
                </form>
            </div>

        <?php require("ui/footer.php"); ?>
    </body>
</html>