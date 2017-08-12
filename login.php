<?php require("logic/config.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>

            <div class="main">
                <h1><?php echo $string["login"]["header"]; ?></h1>

                <form action="logic/login.php" method="POST">  
                    <input name="username" type="text" size="30" placeholder="<?php echo $string['login']['username']; ?>" required/>
                
                    <input name="password" type="password" size="30" placeholder="<?php echo $string['login']['password']; ?>" required/>
                
                    <input type="hidden" name="token" value="
						<?php
							$_SESSION['token'] = generate_random_string(10);
							echo $_SESSION['token']; 
						?>
					">
                    
                    <div class="buttons">
                        <input class="button" type="submit" value="<?php echo $string['login']['submit']; ?>" />
                    </div>
                </form>
            </div>

        <?php require("ui/footer.php"); ?>
    </body>
</html>
