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
          , "ok" => "Okay"
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
			  "caption-open" => "The best socks ever and ever"
			, "caption-1" => "Origin"
			, "caption-2" => "Packaging"
			, "caption-close" => "Wanna try?"
			, "shop" => "Candy shop"
			, "scroll" => "Woaah!"
        	, "text-1" => file_get_contents("../text/home/text-1.en")
        	, "text-2" => file_get_contents("../text/home/text-2.en")
        ]
        , "cart" => [
              "empty" => "It's getting cold. Buy some socks!"
            , "checkout" => "Checkout"
            , "total" => "Total"
            , "continue" => "Candy shop"
        ]
        , "checkout" => [
              "header" => "We need some details"
            , "submit" => "Send them"
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
              "invalid" => "We don't have that pair."
            , "continue" => "Try another"
            , "comments" => "Comments"
            , "noComments" => "No comments"
            , "noCommentsText" => "Be the first to say something about these awesome socks"
            , "name" => "Name"
            , "comment" => "Comment"
            , "post" => "Post"
            , "buy" => "Add to cart"
            , "sizes" => ["s" => "small (38-42)", "l" => "LARGE (42-46)"]
        ]
		, "info" => [
              "text" => file_get_contents("../text/info/text.en")
		]
        , "contact" => [
              "header" => "Get in touch"
            , "name" => "Name"
            , "email" => "Email"
            , "subject" => "Subject"
            , "message" => "Message"
            , "send" => "Send"
        ] 
		, "manage" => [
              "save" => "Save"
            , "add" => "Add"
            , "back" => "Back"
            , "ship" => "Ship"
            , "unship" => "Return"
            , "accept" => "Accept"
            , "decline" => "Decline"
            , "header" => "Manage"
            , "product" => "Show product"
    		, "products" => "Products"
    		, "collections" => "Collections"
    		, "orders" => "Orders"
    		, "contacts" => "Contacts"
            , "send" => "Send"
    		, "comments" => "Comments"
			, "name" => "Name"
			, "price" => "Price"
			, "quantity" => "Quantity"
			, "collection" => "Collection"
			, "description" => [
				  "rs" => "Description (Serbian)"
				, "en" => "Description (English)"
			]
        ]
		, "status" => [
			  "productNotAddedToCart" => "Product has not been added to cart"
			, "productAddedToCart" => "Product has been added to cart"
			, "productNotRemovedFromCart" => "Product has not been removed from cart"
			, "productRemovedFromCart" => "Product has been removed from cart"
			, "messageNotSent" => "Message has not been sent"
			, "messageSent" => "Message has been sent"
			, "orderNotPlaced" => "Order has not been placed"
			, "orderPlaced" => "Order has been placed"
			, "productNotAdded" => "Product has not been added"
			, "productAdded" => "Product has been added"
			, "productNotCommented" => "Commented has not been posted"
			, "productCommented" => "Commented has been posted and it is waiting for approval"
			, "productNotUpdated" => "Product has not been updated"
			, "productNotUpdated" => "Product has not been updated"
			, "productUpdated" => "Product has been updated"
			, "collectionNotAdded" => "Collection has not been added"
			, "collectionAdded" => "Collection has been added"
			, "collectionNotUpdated" => "Collection has not been updated"
			, "collectionUpdated" => "Collection has been updated"
			, "collectionNotRemoved" => "Collection has not been removed"
			, "collectionRemoved" => "Collection has been removed"
			, "productNotRemoved" => "Product has not been removed"
			, "productRemoved" => "Product has been removed"
			, "requiredFields" => "Fill required fields"
			, "validationNotCorrect" => "Validation not correct"
			, "notLoggedIn" => "Please log in"
			, "incorrectCredentials" => "Incorrect credentials"
			, "cookiesAlert" => "We use cookies to improve your experience. By continuing to visit this site you accept such use."
			, "bigQuantity" => "We don't have that many socks"
			, "new" => "NEW"
			, "soldout" => "SOLD OUT"
            , "validation" => "What's "
            , "checkEmail" => "Please confirm this purchase by clicking on the link in the email we've sent you"
			, "clickLink" => "Please click on the following link to confirm this order."
			, "orderNotMarked" => "Order not marked"
			, "orderShipped" => "Order marked as shipped"
			, "orderReturned" => "Order marked as returned"
			, "commentNotMarked" => "Comment not marked"
			, "commentAccepted" => "Comment accepted"
			, "commentDeclined" => "Comment declined"
		]
		, "error" => [
			  "header" => "Psst! Existence of this page has been kept as a secret for centuries."
			, "action" => "Go home"
		]
    ];
?>
