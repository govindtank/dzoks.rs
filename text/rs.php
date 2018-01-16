<?php
    $string = [
        "header" => [
    	    "home" => "Почетна"
          , "gallery" => "Галерија"
          , "shop" => "Продавница"
          , "cart" => "Корпа"
		  , "info" => "инфо"
          , "contact" => "Контакт"
          , "checkout" => "Куповина"
          , "login" => "Пријава"
          , "manage" => "Мениџ"
        ]
        , "index" => [
            "enter" => "Значи упадај"
        ]
        , "login" => [
              "header" => "Пријава"
            , "username" => "Корисничко име"
            , "password" => "Лозинка"
            , "submit" => "Пусти ме унутра"
        ]
        , "home" => [
              "header" => "Колачић са укусом облака"
            , "text" => file_get_contents("../text/text-home.rs")
        ]
        , "gallery" => [
              "header" => "Погледај ове опасне фотке!"
        ]
        , "cart" => [
              "empty" => "Бураз купи нешто јбт!"
            , "checkout" => "Плати" 
            , "clear" => "Испразни" 
            , "total" => "Укупно"
            , "continue" => "Ајдемо у кенди шоп"
        ]
        , "checkout" => [
              "header" => "Ће се гледамо брт"
            , "submit" => "Шаљи чарапе"
            , "inputs" => [
                  "first" => "Име"
                , "last" => "Презиме"
                , "phone" => "Број телефона"
                , "address" => "Адреса"
                , "zip" => "Поштански број"
                , "city" => "Град"
                , "country" => "Држава"
            ]
        ]
        , "product" => [
              "invalid" => "Извини! Немамо више тај пар."
            , "continue" => "Пробај други"
            , "buy" => "Значи купи"
            , "size" => "Величина"
            , "quantity" => "Количина"
            , "sizes" => ["s" => "мале", "l" => "ВЕЛИКЕ"]
        ]
		, "info" => [
              "text" => file_get_contents("../text/text-info.rs")
		]
        , "contact" => [
              "header" => "Пусти нам линију!"
            , "name" => "Име"
            , "email" => "Имејл"
            , "subject" => "Наслов"
            , "message" => "Порука"
            , "validation" => "Колико је "
			, "mailto" => 'Формулар ће бити послат на <a href="mailto: office@soxbty.com">office@soxbty.com</a>'
            , "send" => "Пошаљи"
        ]
		, "manage" => [
              "save" => "Сачувај"
            , "add" => "Додај"
    		, "header" => "Мениџ"
    		, "products" => "Производи"
    		, "collections" => "Колекције"
        	, "photo" => "Слика"
			, "name" => "Име"
			, "price" => "Цена"
			, "quantity" => "Количина"
			, "collection" => "Колекција"
			, "description" => "Опис"
        ]
		, "status" => [
			"productNotAddedToCart" => "Производ није убачен у корпу"
			, "productAddedToCart" => "Производ убачен у корпу"
			, "productNotRemovedFromCart" => "Производ није избачен из корпе"
			, "productRemovedFromCart" => "Приозвод избачен из корпе"
			, "messageNotSent" => "Порука није послата"
			, "messageSent" => "Порука послата"
			, "productNotAdded" => "Производ није убачен"
			, "productAdded" => "Производ убачен"
			, "collectionNotAdded" => "Колекција није убачена"
			, "collectionAdded" => "Колекција убачена"
			, "requiredFields" => "Попуните обавезна поља"
			, "validationNotCorrect" => "Валидација неуспешна"
			, "notLoggedIn" => "Морате бити пријавлјени"
			, "incorrectCredentials" => "Неисправни подаци"
			, "cookiesAlert" => "Користимо колачиће да бисмо побољшали Ваш доживљај. Користећи овај сајт прихватате такво коришћење."
			, "new" => "НОВО"
			, "soldout" => "РАСПРОДАТО"
		]
    ];
?>
