<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

            <div class="main">
                <h1><?php echo $string["contact"]["header"]; ?></h1>
				<div class="center">
                	<p><?php echo $string["contact"]["text"]; ?></p>
				</div>
                <form class="separated" action="../actions/contact" method="POST">  
                    <input name="name" type="text" size="30" placeholder="<?php echo $string['contact']['name']; ?>" autofocus required/>
                    <input name="email" type="email" size="30" placeholder="<?php echo $string['contact']['email']; ?>" required/>
                    <textarea name="message" rows="10" cols="30" placeholder="<?php echo $string['contact']['message']; ?>" required></textarea>
					<input class="button" type="submit" value="<?php echo $string['contact']['send']; ?>" />
					<p><?php echo $string['contact']['mailto']; ?><a class="highlight" href="mailto:<?php echo $store_email; ?>"><?php echo $store_email; ?></a></p>
                </form>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
