<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
		<link rel="stylesheet" href="../css/home.css">
    </head>
    <body>       
        <?php require("../ui/header.php"); ?>
     
	 	<div class="main">
			<div class="bgimg bgimg-open">
  				<div class="centered caption-open">
    				<span><?php echo $string['home']['caption-open']; ?></span>
  				</div>
			</div>

			<div class="bgimg bgimg-1">
  				<div class="note">
					<span><?php echo $string['home']['caption-1']; ?></span>
					<p><?php echo $string['home']['text-1']; ?></p>
				</div>
			</div>

			<div class="bgimg bgimg-2">
  				<div class="note">
					<span><?php echo $string['home']['caption-2']; ?></span>
					<p><?php echo $string['home']['text-2']; ?></p>
  				</div>
			</div>

			<div class="bgimg bgimg-close">
  				<div class="note">
					<span><?php echo $string['home']['caption-close']; ?></span>
					<a class="button" href="../pages/shop"><?php echo $string['home']['shop']; ?></a>
  				</div>
  				<div class="centered scroll-up">
					<span><?php echo $string['home']['scroll']; ?></span>
  				</div>
			</div>	
		</div>
		<div class="fab shake shake-basic shake-hover">
			<a href="../pages/propose"><img src="../img/fab.png"/></a>
		</div>

        <?php require("../ui/footer.php"); ?>
		<script type="text/javascript" src="../js/home.js"></script>
    </body>
</html>
