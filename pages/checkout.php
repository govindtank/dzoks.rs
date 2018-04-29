<?php
	require("../logic/config.php");
	
	if($shop_restricted == true) {
		error($string['status']['requiredFields']);
		header("location: ../pages/checkout");
		exit;	
	}
?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

            <div class="main">
                <h1><?php echo $string["checkout"]["header"]; ?></h1>

                <form action="../actions/checkout" method="POST">
                    <input name="name" type="text" maxlength="100" placeholder="<?php echo $string['checkout']['inputs']['name']; ?>" autofocus required>
                    <input name="email" type="email" maxlength="50" placeholder="<?php echo $string['checkout']['inputs']['email']; ?>" required>
                    <input name="phone" type="text" maxlength="20" placeholder="<?php echo $string['checkout']['inputs']['phone']; ?>" required>
                    <input name="address" type="text" maxlength="50" placeholder="<?php echo $string['checkout']['inputs']['address']; ?>" required>
                    <input name="city" type="text" maxlength="50" placeholder="<?php echo $string['checkout']['inputs']['city']; ?>" required>
                    <input name="zip" type="text" maxlength="5" placeholder="<?php echo $string['checkout']['inputs']['zip']; ?>" required>
										
					<?php
						require("../ui/country_select.php");

                        $a = rand(1, 8);
                        $b = rand(1, 9 - $a);
                        
                        $sum = $a + $b;

						echo '<p class="hidden">' . $string['checkout']['inputs']['payment'] . '</p>';
	
						echo '<div class="hidden input-wrapper">';
						echo '<div class="input-group">';
					
						$cmd = "SELECT * FROM methods";
						$result = mysqli_query($connect, $cmd);

						while($method = mysqli_fetch_array($result)) {		
							echo '<div class="radio-input">';
							echo '<label for="method-' . $method["id"] . '">';
               		    	
							echo '<input type="radio" name="payment" id="method-' . $method["id"] . '" value="' . $method["id"] . '"';
							
							if($method["id"] == 1) {
								echo ' checked';
							}

							echo '/>';   
							
							echo '<span>' . $string["checkout"]["methods"][$method["name"]] . '</span>';
							echo '</label>';
							echo '</div>';
						}
					
						echo '</div>';
						echo '</div>';
					?>
                    
                    <input type="hidden" name="validationCheck" value="<?php echo $sum; ?>">
                    <input name="validationInput" type="text" size="30" placeholder="<?php echo $string['status']['validation'] . $a . " + " . $b . "?" ; ?>" required/>
                    
                    <input class="button" type="submit" value="<?php echo $string['checkout']['submit']; ?>" />
                </form>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
