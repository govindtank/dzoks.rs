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
			, "caption4" => "До јаја."
        	, "text1" => file_get_contents("../text/home/text1.rs")
        	, "text2" => file_get_contents("../text/home/text2.rs")
        	, "text3" => file_get_contents("../text/home/text3.rs")
        ]
        , "gallery" => [
              "header" => "Погледај ове опаснице"
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
            , "sizes" => ["s" => "мале", "l" => "ВЕЛИКЕ"]
        ]
		, "info" => [
              "text" => file_get_contents("../text/text-info.rs")
		]
        , "contact" => [
              "header" => "Гет ин тач"
            , "name" => "Име"
            , "email" => "Значи имејл"
            , "subject" => "Наслов"
            , "message" => "Порука"
			, "mailto" => 'Формулар ће бити послат на <a href="mailto: office@soxbty.com">office@soxbty.com</a>'
            , "send" => "Пошаљи"
        ]
		, "manage" => [
              "save" => "Сачувај"
            , "add" => "Додај"
    		, "header" => "Мениџ"
    		, "products" => [
				  "add" => "Додавање производа"
				, "remove" => "Брисање производа"
			]
    		, "collections" => "Колекшнс"
			, "name" => "Име"
			, "price" => "Цена"
			, "quantity" => "Количина"
			, "collection" => "Колекшн"
			, "description" => "Опис"
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
			, "cookiesAlert" => "Користимо колачиће да бисмо побољшали Ваш доживљај. Користећи овај сајт прихватате такво коришћење."
			, "new" => "НОВО БРАТЕ"
			, "soldout" => "РАСПРОДАТО"
            , "validation" => "Колико је "
		]
    ];
?>
