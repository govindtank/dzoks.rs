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
                <form class="separated" action="../actions/propose" method="POST" enctype="multipart/form-data">  
                    <input name="name" type="text" size="30" placeholder="<?php echo $string['propose']['name']; ?>" autofocus required/>
                    <input name="email" type="text" size="30" placeholder="<?php echo $string['propose']['email']; ?>" required/>
                    <textarea name="description" rows="10" cols="30" placeholder="<?php echo $string['propose']['description']; ?>" required></textarea>
					<input name="photo" id="photo" type="file" required/>
					<input class="button" type="submit" value="<?php echo $string['propose']['send']; ?>" />
                </form>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
