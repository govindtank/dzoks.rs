<?php
	require("../logic/config.php"); 

	if(!isset($_SESSION["username"])) {
		error($string["status"]["notLoggedIn"]);
		header("location: login.php");
		exit;
	}

	$cmd = "SELECT * FROM admins WHERE username='" . $_SESSION['username'] . "'";

	$result = mysqli_query($connect, $cmd);

	if(mysqli_num_rows($result) == 0) {
		error($string["status"]["notLoggedIn"]);
		header("location: login.php");
		exit;
	}
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
							require("../ui/manage/collections.php");
							break;
						case 1:
							require("../ui/manage/products_add.php");
							break;
						case 2:
							require("../ui/manage/products_remove.php");
							break;
						case 3:
							require("../ui/manage/orders.php");
							break;
					}
					
					echo '<a class="button center" href="../pages/manage">' . $string['manage']['back'] . '</a>';
				}else {
					echo '<div class="center">';
					echo '<h1>' . $string["manage"]["header"] . '</h1>';
					echo '<a class="button center" href="manage?type=0">' . $string["manage"]["collections"] . '</a>';
					echo '<a class="button center" href="manage?type=1">' . $string["manage"]["products"]["add"] . '</a>';
					echo '<a class="button center" href="manage?type=2">' . $string["manage"]["products"]["remove"] . '</a>';
					echo '<a class="button center" href="manage?type=3">' . $string["manage"]["orders"] . '</a>';
					echo '</div>';
				}
			?>
			</div>

		<?php require("../ui/footer.php"); ?>
    </body>
</html>
