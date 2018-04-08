<?php
    $string = [
        "header" => [
            "home" => "Home"
          , "gallery" => "Gallery"
          , "shop" => "Shop"
          , "cart" => "Cart"
		  , "info" => "Info"
          , "contact" => "Contact"
          , "propose" => "Design proposal"
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
        	, "banner" => file_get_contents("../text/home/banner.en")
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
            , "reply" => "DZOKS team"
            , "noComments" => "No comments"
            , "noCommentsText" => "Be the first to say something about these awesome socks"
            , "name" => "Name"
            , "comment" => "Comment"
            , "post" => "Post"
            , "buy" => "Add to cart"
            , "sell" => "Sell"
            , "gift" => "Gift"
            , "note" => "Gift note"
            , "sizes" => ["S" => "small (38-42)", "L" => "LARGE (42-46)"]
			, "price" => "Price"
			, "size" => "Size"
			, "collection" => "Collection"
			, "description" => [
				  "rs" => "Description (Serbian)"
				, "en" => "Description (English)"
			]
        ]
		, "info" => [
              "text" => file_get_contents("../text/info/text.en")
		]
        , "contact" => [
              "header" => "Get in touch"
            , "text" => "These soks exist because of you. We would really like to hear your opinion on them."
            , "name" => "Name"
            , "email" => "Email"
            , "message" => "Message"
            , "send" => "Send"
            , "mailto" => "*Form will be sent to "
        ]
		, "propose" => [
              "header" => "Design your own"
            , "text" => "Propose custom socks and get them for free if others like them"
            , "name" => "Name"
            , "sock_name" => "Sock name"
            , "email" => "Email"
            , "description" => "Description"
            , "send" => "Propose"
        ]  
		, "manage" => [
              "save" => "Save"
            , "add" => "Add"
            , "back" => "Back"
            , "reply" => "reply"
            , "ship" => "Ship"
            , "unship" => "Return"
            , "accept" => "Accept"
            , "decline" => "Decline"
            , "header" => "Manage"
    		, "products" => "Products"
    		, "users" => "Users"
    		, "proposals" => "Design proposals"
    		, "logout" => "Logout"
    		, "collections" => "Collections"
    		, "orders" => "Orders"
    		, "sales" => "Sales"
			, "warehouse" => "Warehouse"
    		, "contacts" => "Contacts"
            , "send" => "Send"
    		, "comments" => "Comments"
			, "name" => "Name"
			, "level" => "Level"
			, "level1" => "Sell products"
			, "level2" => "Manage stuff"
			, "level3" => "Manage users"
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
			, "productNotSold" => "Product has not been sold"
			, "productSold" => "Product has been sold"
			, "productNotGifted" => "Product has not been gifted"
			, "productGifted" => "Product has been gifted"
			, "productNotAdded" => "Product has not been added"
			, "productAdded" => "Product has been added"
			, "productNotCommented" => "Commented has not been posted"
			, "productCommented" => "Commented has been posted and it is waiting for approval"
			, "alreadyCommented" => "You have already left a comment"
			, "replyNotAdded" => "Reply has not been added" 
			, "replyAdded" => "Reply has been added" 
			, "productNotUpdated" => "Product has not been updated"
			, "productNotUpdated" => "Product has not been updated"
			, "productUpdated" => "Product has been updated"
			, "collectionNotAdded" => "Collection has not been added"
			, "collectionAdded" => "Collection has been added"
			, "collectionNotUpdated" => "Collection has not been updated"
			, "collectionUpdated" => "Collection has been updated"
			, "collectionNotRemoved" => "Collection has not been removed"
			, "collectionRemoved" => "Collection has been removed"
			, "userNotAdded" => "User has not beed added"
			, "userAdded" => "User has been added"
			, "userNotUpdated" => "User has not been updated"
			, "userUpdated" => "User has been updated"
			, "userNotRemoved" => "User has not been removed"
			, "userRemoved" => "User has been removed"
			, "userLoggedOut" => "User has been logged out"
			, "productNotRemoved" => "Product has not been removed"
			, "productRemoved" => "Product has been removed"
			, "designNotProposed" => "Design has not been proposed"
			, "designProposed" => "Design has been proposed"	
			, "alreadyProposed" => "You have already proposed design"
			, "notUnsubscribed" => "You have not unsubscribed"
			, "unsubscribed" => "You have sucessfully unsubscribed"
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
			, "orderLink" => "Please click on the following link to confirm this order: "
			, "unsubscribeLink" => "Please click on the following link to unsubscibe from mailing list: "
			, "orderNotMarked" => "Order not marked"
			, "orderShipped" => "Order marked as shipped"
			, "orderReturned" => "Order marked as returned"
			, "commentNotMarked" => "Comment not marked"
			, "commentAccepted" => "Comment accepted"
			, "commentDeclined" => "Comment declined"
			, "noItems" => "No items"
			, "largeFile" => "File is too large"
			, "notImage" => "File is not an image"
			, "notAuthorized" => "Not authorized"
		]
		, "error" => [
			  "header" => "Psst! Existence of this page has been kept as a secret for centuries."
			, "action" => "Go home"
		]
    ];
?>
