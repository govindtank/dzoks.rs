<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

            <div class="main">
				<div class="center-both">
                	<h1><?php echo $string["login"]["header"]; ?></h1>
                	
					<form action="../actions/user_login" method="POST">  
                    	<input name="username" type="text" size="30" placeholder="<?php echo $string['login']['username']; ?>" autofocus required/>
                    	<input name="password" type="password" size="30" placeholder="<?php echo $string['login']['password']; ?>" required/>
						<input class="button" type="submit" value="<?php echo $string['login']['submit']; ?>" />
                	</form>
            	</div>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
