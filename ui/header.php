<header>
    <div id="wrap">
        <a href="home.php" class="shake shake-basic shake-constant">
			<img id="logo-small" src="../img/logo.png"/>
			<div class="tint"></div>
		</a>
        <nav id="nav">
            <ul>
                <?php
                    $items = ["home", "gallery", "shop", "cart", "info", "contact"];
                    
                    foreach($items as $item) {
                        echo '<li><a href="../pages/' . $item .'" class="';
						echo 'shake shake-basic shake-hover';
                        
                        if(strcmp($item, $page) == 0) {
                        	echo ' selected';
                        }

                        echo '">' . $string["header"][$item] . '</a></li>'; 
                    } 
                ?>
                    <li>
                        <?php
                            if(strcmp($lang, "en") == 0) {
                                echo '<a href="../logic/set_lang.php?lang=rs&page=' . $page . '"><img class="header-icon" src="../img/rs.png" /></a>';
                            }else if(strcmp($lang, "rs") == 0) {
                                echo '<a href="../logic/set_lang.php?lang=en&page=' . $page . '"><img class="header-icon" src="../img/en.png" /></a>';
                            }
                        ?>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/<?php echo $store_instagram; ?>/">
                            <img class="header-icon" src="../img/instagram.png">
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
</header>
<?php
	if(isset($_SESSION['error'])) {
		echo '<div class="status status-error"><p>' . $_SESSION['error'] . '</p></div>';
		unset($_SESSION['error']);
	}else if(isset($_SESSION['success'])) {
		echo '<div class="status status-success"><p>' . $_SESSION['success'] . '</p></div>';
		unset($_SESSION['success']);
	}else if(isset($_SESSION['order'])) {
		echo '<div class="status status-order">';
		echo '<p>' . $_SESSION['order'] . '</p>';
		echo '<img src="../img/ordered.gif" />';
		echo '</div>';
		unset($_SESSION['order']);
	}else if(!isset($_SESSION['cookies_accepted'])) {

		echo '<div class="status status-alert">';
		echo '<p>' . $string['status']['cookiesAlert'] . '</p>';
		echo '<a class="button center notifyButton" myKey="cookies_accepted" myValue="true">' . $string['header']['ok'] . '</a>';
		echo '</div>';
	}else {
		$cmd = "SELECT * FROM notifications";
		$result = mysqli_query($connect, $cmd);

		while($notify = mysqli_fetch_array($result)) {
			if(!isset($_SESSION[$notify['key']])) {
				echo '<div class="status status-notify">';
				echo '<p>' . $notify['message'] . '</p>';
				echo '<a class="button center notifyButton" myKey="' . $notify['key'] . '" myValue="1">' . $string['header']['ok'] . '</a>';
				echo '</div>';
			}
		}
	}	
?>
