<header>
    <div id="wrap">
        <a href="home" class="shake shake-basic shake-constant shake-constant--hover"><img id="logo-small" src="img/logo.png" /><div class="tint-small" id="tint"></div></a>
        <nav id="nav">
            <ul>
                <?php
                    $items = ["home", "gallery", "shop", "cart", "contact"];
                    
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
                                echo '<a href="logic/set_lang.php?lang=rs&page=' . $page . '">RS</a>';
                            }else if(strcmp($lang, "rs") == 0) {
                                echo '<a href="logic/set_lang.php?lang=en&page=' . $page . '">EN</a>';
                            }
                        ?>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/soxbty">
                            <img class="instagram-header-icon" src="img/instagram-header-icon.png">
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
</header>