<?php
    $string = [
        "header" => [
            "home" => "Home"
          , "gallery" => "Gallery"
          , "shop" => "Shop"
          , "cart" => "Cart"
          , "contact" => "Contact"
          , "checkout" => "Checkout"
          , "login" => "Login"
          , "manage" => "Manage"
        ]
        , "index" => [
            "enter" => "Enter"
        ]
        , "login" => [
              "header" => "Login"
            , "username" => "Username"
            , "password" => "Password"
            , "submit" => "Enter"
        ]
        , "home" => [
              "header" => "This is header"
            , "text" => file_get_contents("../text/text-home.en")
        ]
        , "gallery" => [
              "header" => "Check out this dope photos!"
        ]
        , "shop" => [
              "header" => "So buy something!"
            , "view" => "Check it"
        ]
        , "cart" => [
              "empty" => "Buy some shit man!"
            , "checkout" => "Checkout" 
            , "clear" => "Clear" 
            , "total" => "Total"
            , "continue" => "Let's candy shop"
        ]
        , "checkout" => [
              "header" => "Ће се гледамо брт"
            , "submit" => "Send me socks"
            , "inputs" => [
                  "first" => "First name"
                , "last" => "Last name"
                , "phone" => "Phone number"
                , "address" => "Address"
                , "zip" => "Zip code"
                , "city" => "City"
                , "country" => "Country"
            ]
        ]
        , "product" => [
              "invalid" => "Sorry! We don't have that pair."
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
		, "manage" => [
              "save" => "Save"
            , "add" => "Add"
            , "header" => "Manage"
    		, "products" => "Products"
    		, "collections" => "Collections"
			, "photo" => "Photo"
			, "name" => "Name"
			, "price" => "Price"
			, "quantity" => "Quantity"
			, "collection" => "Collection"
			, "description" => "Description"
        ], "status" => [
			"productNotAddedToCart" => "Product has not been added to cart"
			, "productAddedToCart" => "Product has been added to cart"
			, "messageNotSent" => "Message has not been sent"
			, "messageSent" => "Message has been sent"
			, "productNotAdded" => "Product has not been added"
			, "productAdded" => "Product has been added"
			, "requiredFields" => "Fill required fields"
			, "validationNotCorrect" => "Validation not correct"
		]
    ];
?>
