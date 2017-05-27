<header>
    <div id="wrap">
        <a href="home.php" title="Home"><img class="logo" src="img/logo.png" alt="Logo" />
        </a>
        <nav id="nav">
            <ul>
                <?php
                    $items = ["home", "gallery", "contact"];
                    
                    foreach($items as $item) {
                        echo '<li>';
                        echo '<a ';
                        
                        if(strcmp($item, $page) == 0) {
                            echo 'class="selected" ';
                        }
                        
                        echo 'href="' . $item .'.php" title="' . ucfirst($item) . '">';
                        echo $string[$item];
                        echo '</a>';
                        echo '</li>'; 
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
                        <a href="https://www.instagram.com/soxbty" title="Instagram">
                            <img class="instagram-header-icon" src="img/instagram-header-icon.png" alt="Instagram Icon">
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
</header>