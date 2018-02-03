<?php
    $string = [
        "header" => [
    	    "home" => "Почетна"
          , "gallery" => "Фотке"
          , "shop" => "Шоп"
          , "cart" => "Корпа"
		  , "info" => "Инфо"
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
			  "caption1" => "Колачић са укусом облака"
			, "caption2" => "Порекло"
			, "caption3" => "Паковање"
			, "caption4" => "Дај паре."
			, "caption5" => "Идеш мала!"
        	, "text1" => file_get_contents("../text/home/text1.rs")
        	, "text2" => file_get_contents("../text/home/text2.rs")
        	, "text3" => file_get_contents("../text/home/text3.rs")
        ]
        , "cart" => [
              "empty" => "Бураз, ред би био да пазариш нешто"
            , "checkout" => "Наручи" 
            , "total" => "Укупно"
            , "continue" => "Бриши у кенди шоп"
        ]
        , "checkout" => [
              "header" => "Ће се гледамо брaтe најмилији"
            , "submit" => "Шаљи чарапе"
            , "inputs" => [
                  "first" => "Име"
                , "last" => "Значи презиме"
                , "email" => "Имејл"
                , "phone" => "Број фона"
                , "address" => "Адреса"
                , "zip" => "Поштански број"
                , "city" => "Град"
                , "country" => "Држава"
            ]
        ]
        , "product" => [
              "invalid" => "Извини! Немамо више тај пар. Јбг, превелика потражња."
            , "continue" => "Пробај други"
            , "buy" => "Значи купи"
            , "size" => "Ћеш велике или мале?"
            , "quantity" => "Колико комата?"
            , "sizes" => ["s" => "мале (38-42)", "l" => "ВЕЛИКЕ (42-46)"]
        ]
		, "info" => [
              "text" => file_get_contents("../text/info/text.rs")
		]
        , "contact" => [
              "header" => "Гет ин тач"
            , "name" => "Име"
            , "email" => "Значи имејл"
            , "subject" => "Наслов"
            , "message" => "Порука"
            , "send" => "Пошаљи"
        ]
		, "manage" => [
              "save" => "Сачувај"
            , "add" => "Додај"
            , "back" => "Назад"
    		, "header" => "Мениџ"
    		, "products" => "Чарапке"
    		, "collections" => "Колекшнс"
			, "orders" => "Поруџбине"
			, "name" => "Име"
			, "price" => "Цена"
			, "quantity" => "Количина"
			, "collection" => "Колекшн"
			, "description" => [
				  "rs" => "Опис (Српски)"
				, "en" => "Опис (Енглески)"
			]
        ]
		, "status" => [
			"productNotAddedToCart" => "Производ није убачен у корпу"
			, "productAddedToCart" => "Производ убачен у корпу"
			, "productNotRemovedFromCart" => "Производ није избачен из корпе"
			, "productRemovedFromCart" => "Приозвод избачен из корпе"
			, "messageNotSent" => "Порука није послата"
			, "messageSent" => "Порука послата"
			, "orderNotPlaced" => "Није поручено"
			, "orderPlaced" => "Уздравље да их поцепаш!"
			, "productNotAdded" => "Производ није убачен"
			, "productAdded" => "Производ убачен"
			, "collectionNotAdded" => "Колекција није убачена"
			, "collectionAdded" => "Колекција убачена"
			, "collectionNotRemoved" => "Колекција није уклоњена"
			, "collectionRemoved" => "Колекција уклоњена"
			, "productNotRemoved" => "Производ није уклоњен"
			, "productRemoved" => "Производ уклоњен"
			, "requiredFields" => "Попуните обавезна поља"
			, "validationNotCorrect" => "Валидација неуспешна"
			, "notLoggedIn" => "Морате бити пријавлјени"
			, "incorrectCredentials" => "Неисправни подаци"
			, "cookiesAlert" => "Користимо колачиће да бисmo ти побољшали доживљај. Користећи овај сајт прихваташ такво коришћење."
			, "bigQuantity" => "Браћкице, немамо толико чарапа"
			, "new" => "НОВО БРАТЕ"
			, "soldout" => "РАСПРОДАТО"
            , "validation" => "Колико је "
            , "checkEmail" => "Послали смо ти емаил са линком за потврду куповине"
			, "clickLink" => "Кликни на следећи линк како би потврдио поруџбину."
			, "orderNotMarked" => "Поруџбина није обележена"
			, "orderShipped" => "Поруџбина oбележена као испоручена"
			, "orderReturned" => "Поруџбина oбележена као враћена"
		]
		, "error" => [
			  "header" => "Шшш! Чињеница да ова страница постоји је тајна чувана вековима."
			, "action" => "Иди кући"
		]
    ];
?>
