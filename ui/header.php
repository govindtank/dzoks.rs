<header>
    <div id="wrap">
        <a href="home.php" class="shake shake-basic shake-constant shake-constant--hover">
			<img id="logo-small" src="../img/logo.png"/>
			<div class="tint-small" id="tint"></div>
		</a>
        <nav id="nav">
            <ul>
                <?php
                    $items = ["home", "gallery", "shop", "cart", "info", "contact"];
                    
                    foreach($items as $item) {
                        echo '<li><a ';
                        
                        if(strcmp($item, $page) == 0) {
                            echo 'class="selected" ';
                        }
                        
                        echo 'href="' . $item .'">';
                        echo $string["header"][$item];
                        echo '</a></li>'; 
                    } 
                ?>
                    <li>
                        <?php
                            if(strcmp($lang, "en") == 0) {
                                echo '<a href="../logic/set_lang.php?lang=rs&page=' . $page . '">RS</a>';
                            }else if(strcmp($lang, "rs") == 0) {
                                echo '<a href="../logic/set_lang.php?lang=en&page=' . $page . '">EN</a>';
                            }
                        ?>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/soxbty">
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
	}

	if(isset($_SESSION['success'])) {
		echo '<div class="status status-success"><p>' . $_SESSION['success'] . '</p></div>';
		unset($_SESSION['success']);
	}
		
	if(!isset($_SESSION['cookies_accepted'])) {
		echo '<div class="status status-alert">';
		echo '<p>' . $string['status']['cookiesAlert'] . '</p>';
		echo '</div>';
		$_SESSION['cookies_accepted'] = 'true';
	}	
?>
