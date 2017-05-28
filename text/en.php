<?php
    $string = [
        "header" => [
            "home" => "Home"
          , "gallery" => "Gallery"
          , "shop" => "Shop"
          , "contact" => "Contact"
          , "logo" => "Logo"
        ]
        , "home" => [
              "header" => "This is header"
            , "text" => file_get_contents("text/text-home.en")
        ]
        , "gallery" => [
              "header" => "Check out this dope photos!"
            , "image" => "Gallery image"
        ]
        , "shop" => [
              "header" => "So buy something!"
            , "image" => "Shop image"
            , "buy" => "Buy"
        ]
        , "contact" => [
              "header" => "Drop us a line!"
            , "name" => "Name"
            , "email" => "Email"
            , "phone" => "Phone"
            , "subject" => "Subject"
            , "message" => "Message"
            , "validation" => "What's "
            , "send" => "Send"
        ]
    ];
?>