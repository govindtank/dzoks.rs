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
					switch($_GET['type']) {
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
					}
					
					echo '<a class="button center" href="../pages/manage">' . $string['manage']['back'] . '</a>';
				}else {
					echo '<div class="center">';
					echo '<h1>' . $string["manage"]["header"] . '</h1>';
					echo '<a class="button center" href="manage?type=0">' . $string["manage"]["collections"] . '</a>';
					echo '<a class="button center" href="manage?type=1">' . $string["manage"]["products"] . '</a>';
					echo '<a class="button center" href="manage?type=2">' . $string["manage"]["orders"] . '</a>';
					echo '<a class="button center" href="manage?type=3">' . $string["manage"]["comments"] . '</a>';
					echo '<a class="button center" href="manage?type=4">' . $string["manage"]["contacts"] . '</a>';
					echo '<a class="button center" href="manage?type=5">' . $string["manage"]["users"] . '</a>';
					echo '<a class="button center" href="manage?type=6">' . $string["manage"]["proposals"] . '</a>';
					echo '<a class="button center" href="../actions/user_logout">' . $string["manage"]["logout"] . '</a>';
					echo '</div>';
				}
			?>
			</div>

		<?php require("../ui/footer.php"); ?>
    </body>
</html>
