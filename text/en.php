<?php
    $string = [
        "header" => [
            "home" => "Home"
          , "gallery" => "Gallery"
          , "shop" => "Shop"
          , "cart" => "Cart"
		  , "info" => "Info"
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
			  "caption1" => "These are like the best socks ever and ever"
			, "caption2" => "Origin"
			, "caption3" => "Packaging"
			, "caption4" => "The end."
        	, "text1" => file_get_contents("../text/home/text1.en")
        	, "text2" => file_get_contents("../text/home/text2.en")
        	, "text3" => file_get_contents("../text/home/text3.en")
        ]
        , "gallery" => [
              "header" => "Check out this dope photos!"
        ]
        , "cart" => [
              "empty" => "Buy some shit man!"
            , "checkout" => "Checkout" 
            , "total" => "Total"
            , "continue" => "Let's candy shop"
        ]
        , "checkout" => [
              "header" => "Ће се гледамо брт"
            , "submit" => "Send me socks"
            , "inputs" => [
                  "first" => "First name"
                , "last" => "Last name"
                , "email" => "Email"
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
            , "size" => "How big?"
            , "quantity" => "How many?"
            , "sizes" => ["s" => "small", "l" => "LARGE"]
        ]
		, "info" => [
              "text" => file_get_contents("../text/text-info.en")
		]
        , "contact" => [
              "header" => "Drop us a line!"
            , "name" => "Name"
            , "email" => "Email"
            , "subject" => "Subject"
            , "message" => "Message"
			, "mailto" => 'Form will be sent to <a href="mailto: office@soxbty.com">office@soxbty.com</a>'
            , "send" => "Send"
        ] 
		, "manage" => [
              "save" => "Save"
            , "add" => "Add"
            , "header" => "Manage"
    		, "products" => [
				  "add" => "Add products"
				, "remove" => "Remove products"
			]
    		, "collections" => "Collections"
			, "name" => "Name"
			, "price" => "Price"
			, "quantity" => "Quantity"
			, "collection" => "Collection"
			, "description" => "Description"
        ]
		, "status" => [
			"productNotAddedToCart" => "Product has not been added to cart"
			, "productAddedToCart" => "Product has been added to cart"
			, "productNotRemovedFromCart" => "Product has not been removed from cart"
			, "productRemovedFromCart" => "Product has been removed from cart"
			, "messageNotSent" => "Message has not been sent"
			, "messageSent" => "Message has been sent"
			, "orderNotPlaced" => "Order has not been placed"
			, "orderPlaced" => "Order has been places"
			, "productNotAdded" => "Product has not been added"
			, "productAdded" => "Product has been added"
			, "collectionNotAdded" => "Collection has not been added"
			, "collectionAdded" => "Collection has been added"
			, "collectionNotRemoved" => "Collection has not been removed"
			, "collectionRemoved" => "Collection has been removed"
			, "productNotRemoved" => "Product has not been removed"
			, "productRemoved" => "Product has been removed"
			, "requiredFields" => "Fill required fields"
			, "validationNotCorrect" => "Validation not correct"
			, "notLoggedIn" => "Please log in"
			, "incorrectCredentials" => "Incorrect credentials"
			, "cookiesAlert" => "We use cookies to improve your experience. By continuing to visit this site you accept such use."
			, "new" => "NEW"
			, "soldout" => "SOLD OUT"
            , "validation" => "What's "
		]
    ];
?>
