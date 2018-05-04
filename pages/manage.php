<?php
	require("../logic/config.php"); 
	
	check_login($connect, $string);
?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
		<link rel="stylesheet" href="../css/manage.css">
    </head>
    <body>
        <?php require("../ui/header.php"); ?>
            <div class="main">
			<?php
				if(isset($_GET['type'])) {
					$type = strip($_GET['type']);

					$levels = [2, 2, 1, 2, 2, 3, 2, 1, 2, 2];

					if($type >= 0 && $type < count($levels)) {
						if(is_authorized($levels[$type], $connect, $string)) {
							switch($type) {
								case 0:
									require("../ui/manage_collections.php");
									break;
								case 1:
									require("../ui/manage_products.php");
									break;
								case 2:
									require("../ui/manage_orders.php");
									break;
								case 3:
									require("../ui/manage_comments.php");
									break;
								case 4:
									require("../ui/manage_contacts.php");
									break;
								case 5:
									require("../ui/manage_users.php");
									break;
								case 6:
									require("../ui/manage_proposals.php");
									break;
								case 7:
									require("../ui/manage_warehouse.php");
									break;
								case 8:
									require("../ui/manage_sales.php");
									break;
								case 9:
									require("../ui/manage_notifications.php");
									break;
							}
						}else {
							echo '<h1>' . $string["status"]["notAuthorized"] . '</h1>';
						}
					}else {
						echo '<h1>' . $string["status"]["noItems"] . '</h1>';
					}
									
					echo '<a class="button center" href="../pages/manage">' . $string['manage']['back'] . '</a>';
				}else {	
					echo '<div class="center">';
					echo '<h1>' . $string["manage"]["header"] . '</h1>';
					
					echo '<form action="../logic/set_config.php" method="POST">';
					echo '<input name="page" type="hidden" value="' . $page . '" autofocus/>';
					echo '<input name="min_date" type="text" value="' . date("Y-m-d H:m:s") . '" placeholder="' . $string['manage']['minDate']. '" required />';
					echo '<input type="submit" class="button" value="' . $string['manage']['filter'] . '" />';
					echo '</form>';
					
					echo '<a class="button center" href="manage?type=0">' . $string["manage"]["collections"] . '</a>';
					echo '<a class="button center" href="manage?type=1">' . $string["manage"]["products"] . '</a>';
					echo '<a class="button center" href="manage?type=2">' . $string["manage"]["orders"] . '</a>';
					echo '<a class="button center" href="manage?type=3">' . $string["manage"]["comments"] . '</a>';
					echo '<a class="button center" href="manage?type=4">' . $string["manage"]["contacts"] . '</a>';
					echo '<a class="button center" href="manage?type=5">' . $string["manage"]["users"] . '</a>';
					echo '<a class="button center" href="manage?type=6">' . $string["manage"]["proposals"] . '</a>';
					echo '<a class="button center" href="manage?type=7">' . $string["manage"]["warehouse"] . '</a>';
					echo '<a class="button center" href="manage?type=8">' . $string["manage"]["sales"] . '</a>';
					echo '<a class="button center" href="manage?type=9">' . $string["manage"]["notifications"] . '</a>';
					echo '<a class="button center" href="../actions/user_logout">' . $string["manage"]["logout"] . '</a>';
					echo '</div>';
				}
			?>
			</div>

		<?php require("../ui/footer.php"); ?>
    </body>
</html>
