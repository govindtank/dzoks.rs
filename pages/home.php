<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
		<link rel="stylesheet" href="../css/home.css">
    </head>
    <body>       
        <?php require("../ui/header.php"); ?>
     
	 	<div class="main">
			<div class="bgimg-1">
  				<div class="caption">
    				<span><?php echo $string['home']['caption1']; ?></span>
  				</div>
			</div>

			<div class="padded">
				<p><?php echo $string['home']['text1']; ?></p>
			</div>

			<div class="bgimg-2">
  				<div class="caption">
					<span><?php echo $string['home']['caption2']; ?></span>
  				</div>
			</div>

			<div class="padded">
				<p><?php echo $string['home']['text2']; ?></p>
			</div>

			<div class="bgimg-3">
  				<div class="caption">
					<span><?php echo $string['home']['caption3']; ?></span>
  				</div>
			</div>

			<div class="padded">
				<p><?php echo $string['home']['text3']; ?></p>
			</div>

			<div class="bgimg-1">
  				<div class="caption">
					<span><?php echo $string['home']['caption4']; ?></span>
  				</div>
			</div>	
		</div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
