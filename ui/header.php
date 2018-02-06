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
                        echo '<li><a';
                        
                        if(strcmp($item, $page) == 0) {
                        	echo ' class="selected"';
                        }
                        
                        echo ' href="../pages/' . $item .'">';
                        echo $string["header"][$item];
                        echo '</a></li>'; 
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
                        <a href="https://www.instagram.com/soxbty/">
                            <img class="header-icon" src="../img/instagram.png">
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
</header>
<?php
	if(isset($_SESSION['error'])) {
		echo '<div class="status open status-error"><p>' . $_SESSION['error'] . '</p></div>';
		unset($_SESSION['error']);
	}else if(isset($_SESSION['success'])) {
		echo '<div class="status open status-success"><p>' . $_SESSION['success'] . '</p></div>';
		unset($_SESSION['success']);
	}else if(isset($_SESSION['order'])) {
		echo '<div class="status open status-order">';
		echo '<p>' . $_SESSION['order'] . '</p>';
		echo '<img src="../img/ordered.gif" />';
		echo '</div>';
		unset($_SESSION['order']);
	}else if(!isset($_SESSION['cookies_accepted'])) {
		echo '<div class="status open status-alert">';
		echo '<p>' . $string['status']['cookiesAlert'] . '</p>';
		echo '</div>';
		$_SESSION['cookies_accepted'] = 'true';
	}	
?>
