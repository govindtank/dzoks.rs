<?php
    $string = [
        "header" => [
            "home" => "Home"
          , "gallery" => "Gallery"
          , "shop" => "Shop"
          , "cart" => "Cart"
          , "contact" => "Contact"
          , "logo" => "Logo"
        ]
        , "footer" => [
            "power" => "Ecloga Apps"
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
        , "cart" => [
              "empty" => "Buy some shit man!"
            , "checkout" => "Checkout" 
            , "clear" => "Clear" 
            , "total" => "Total"
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