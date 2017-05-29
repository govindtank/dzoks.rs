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
            , "view" => "Check it"
        ]
        , "cart" => [
              "empty" => "Buy some shit man!"
            , "checkout" => "Checkout" 
            , "clear" => "Clear" 
            , "total" => "Total"
        ]
        , "product" => [
              "image" => "Product image"
            , "invalid" => "Sorry! We don't have that pair."
            , "continue" => "Try another"
            , "buy" => "Buy it"
            , "size" => "Size"
            , "quantity" => "Quantity"
            , "sizes" => ["small", "LARGE"]
        ]
        , "contact" => [
              "header" => "Drop us a line!"
            , "name" => "Name"
            , "email" => "Email"
            , "subject" => "Subject"
            , "message" => "Message"
            , "validation" => "What's "
            , "send" => "Send"
        ]
    ];
?>