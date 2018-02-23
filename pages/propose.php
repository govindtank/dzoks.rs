<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

            <div class="main">
                <h1><?php echo $string["propose"]["header"]; ?></h1>
				<div class="center">
                	<p><?php echo $string["propose"]["text"]; ?></p>
				</div>
                <form class="separated" action="../actions/propose.php" method="POST" enctype="multipart/form-data">  
                    <input name="name" type="text" size="30" placeholder="<?php echo $string['propose']['name']; ?>" autofocus required/>
                    <input name="email" type="text" size="30" placeholder="<?php echo $string['propose']['email']; ?>" required/>
                    <input name="sock_name" type="text" size="30" placeholder="<?php echo $string['propose']['sock_name']; ?>" required/>
                    <textarea name="description" rows="10" cols="30" placeholder="<?php echo $string['propose']['description']; ?>" required></textarea>
					<input name="photo" id="photo" type="file" required/>

                    <?php
                        $a = rand(1, 8);
                        $b = rand(1, 9 - $a);
                        
                        $sum = $a + $b;
                    ?>
					
                    <input type="hidden" name="validationCheck" value="<?php echo $sum; ?>">
                    <input name="validationInput" type="text" size="30" placeholder="<?php echo $string['status']['validation'] . $a . " + " . $b . "?" ; ?>" required/>
					<input class="button" type="submit" value="<?php echo $string['propose']['send']; ?>" />
                </form>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
