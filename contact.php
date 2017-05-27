<?php require("logic/get_lang.php"); ?>
    <html>

    <head>
        <?php require("ui/title.php"); ?>
            <meta charset="utf-8">
            <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
            <link rel="stylesheet" href="css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
            <script type="text/javascript" src="js/main.js"></script>
    </head>

    <body id="page">
        <?php require("ui/header.php"); ?>

            <div class="main">
                <form action="logic/contact.php" method="POST" enctype="multipart/form-data">

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Nulla consequat massa quis enim.</p>

                    <p>Lorem ipsum dolor sit amet <a href="tel:0629165924" title="Direct call">(0031)6-29165924</a> adipiscing elit. Aenean commodo ligula eget dolor. Aenean magnis dis parturient massa. Cum sociis natoque <a href="mailto:info@jordanmike.nl" title="Direct mail">info@jordanmike.nl</a> penatibus et magnis dis parturient montes, nascetur ridiculus mus Nulla consequat massa quis enim.</p>

                    <input type="hidden" name="action" value="submit">
                    <input name="name" type="text" value="" size="30" placeholder="<?php echo $string['name']; ?>" />
                    <br>
                    <input name="email" type="text" value="" size="30" placeholder="<?php echo $string['email']; ?>" />
                    <br>
                    <input name="phone" type="text" value="" size="30" placeholder="<?php echo $string['phone']; ?>" />
                    <br>
                    <input name="subject" type="text" value="" size="30" placeholder="<?php echo $string['subject']; ?>" />
                    <br>
                    <textarea name="message" rows="7" cols="30" placeholder="<?php echo $string['message']; ?>"></textarea>
                    <br>
                    <input type="submit" value="<?php echo $string['send']; ?>" />
                </form>
            </div>

            <?php require("ui/footer.php"); ?>
    </body>

    </html>