<?php
    $string = [
        "header" => [
    	    "home" => "Почетна"
          , "gallery" => "Фотке"
          , "shop" => "Шоп"
          , "cart" => "Корпа"
		  , "info" => "Инфо"
          , "contact" => "Контакт"
          , "propose" => "Предлог дизајна"
          , "checkout" => "Куповина"
          , "login" => "Пријава"
          , "manage" => "Мениџ"
          , "ok" => "Океј"
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
			  "caption-open" => "Колачић са укусом облака"
			, "caption-1" => "Порекло"
			, "caption-2" => "Паковање"
			, "caption-close" => "Дај паре."
			, "shop" => "Кенди шоп"
			, "scroll" => "Идеш мала!"
        	, "text-1" => file_get_contents("../text/home/text-1.rs")
        	, "text-2" => file_get_contents("../text/home/text-2.rs")
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
              "invalid" => "Немамо више тај пар. Јбг, превелика потражња."
            , "continue" => "Пробај други"
            , "comments" => "Коментари"
            , "noComments" => "Значи но комент"
            , "noCommentsText" => "Буди први који ће бацити коментар на ове луде чарапе"
            , "name" => "Име"
            , "comment" => "Коментар"
            , "post" => "Објави"
            , "buy" => "Значи купи"
            , "sell" => "Продај"
            , "gift" => "Поклони"
            , "note" => "Разлог поклона"
            , "sizes" => ["S" => "мале (38-42)", "L" => "ВЕЛИКЕ (42-46)"]
			, "price" => "Цена"
			, "size" => "Величина"
			, "collection" => "Колекција"
			, "description" => [
				  "rs" => "Опис (Српски)"
				, "en" => "Опис (Енглески)"
			]
        ]
		, "info" => [
              "text" => file_get_contents("../text/info/text.rs")
		]
        , "contact" => [
              "header" => "Гет ин тач"
            , "text" => "Ове чарапе постоје због тебе. Баш бисмо волели да чујемо твоје мишљење о њима."
            , "name" => "Име"
            , "email" => "Значи имејл"
            , "message" => "Порука"
            , "send" => "Пошаљи"
            , "mailto" => "*Формулар ће бити послат на "
        ]
		, "propose" => [
              "header" => "Дизајнирај своје"
            , "text" => "Предлоши свој дизајн и шаљемо ти такве чарапе бесплатно ако се другима свиђа"
            , "name" => "Име"
            , "sock_name" => "Име чарапе"
            , "email" => "Имејл"
            , "description" => "Опис"
            , "send" => "Предложи"
        ]  
		, "manage" => [
              "save" => "Сачувај"
            , "add" => "Додај"
            , "back" => "Назад"
			, "ship" => "Испоручи"
            , "unship" => "Врати"
            , "accept" => "Одобри"
            , "decline" => "Одбиј"
    		, "header" => "Мениџ"
    		, "product" => "Види производ"
    		, "products" => "Чарапке"
			, "users" => "Корисници"
    		, "proposals" => "Предлози дизајна"
    		, "logout" => "Одјава"
    		, "collections" => "Колекшнс"
			, "orders" => "Поруџбине"
			, "warehouse" => "Магацин"
    		, "contacts" => "Контакти"
            , "send" => "Пошаљи"
    		, "comments" => "Коментари"
			, "name" => "Име"
			, "level" => "Ниво"
			, "level1" => "Продавање производа"
			, "level2" => "Управљање стварима"
			, "level3" => "Управљање корисницима"
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
			, "productNotSold" => "Производ није продат"
			, "productSold" => "Производ продат"
			, "productNotGifted" => "Производ није поклоњен"
			, "productGifted" => "Производ поклоњен"
			, "productNotAdded" => "Производ није убачен"
			, "productAdded" => "Производ убачен"
			, "productNotCommented" => "Коментар није објављен"
			, "productCommented" => "Коментар је примљен и сада чека дозволу за објављивање"
			, "productNotUpdated" => "Производ није ажуриран"
			, "productUpdated" => "Производ ажуриран"
			, "collectionNotAdded" => "Колекција није убачена"
			, "collectionAdded" => "Колекција убачена"
			, "collectionNotUpdated" => "Колекција није ажурирана"
			, "collectionUpdated" => "Колекција ажурирана"
			, "collectionNotRemoved" => "Колекција није уклоњена"
			, "collectionRemoved" => "Колекција уклоњена"
			, "userNotAdded" => "Корисник није убачен"
			, "userAdded" => "Корисник убачен"
			, "userNotUpdated" => "Корисник није ажуриран"
			, "userUpdated" => "Корисник ажуриран"
			, "userNotRemoved" => "Корисник није уклоњен"
			, "userRemoved" => "Корисник уклоњен"
			, "userLoggedOut" => "Корисник је излогован"
			, "productNotRemoved" => "Производ није уклоњен"
			, "productRemoved" => "Производ уклоњен"
			, "designNotProposed" => "Дизајн није преложен"
			, "designProposed" => "Дизајн је предложен"
			, "alreadyProposed" => "Већ си предложио дизајн"
			, "notUnsubscribed" => "Ниси се одјавио са мејлинг листе"
			, "unsubscribed" => "Успешно си се одјавио са мејлинг листе"
			, "requiredFields" => "Попуните обавезна поља"
			, "validationNotCorrect" => "Валидација неуспешна"
			, "notLoggedIn" => "Морате бити пријавлјени"
			, "incorrectCredentials" => "Неисправни подаци"
			, "cookiesAlert" => "Користимо колачиће да бисmo ти побољшали доживљај. Користећи овај сајт прихваташ такво коришћење."
			, "bigQuantity" => "Браћкице, продали смо све парове овог модела"
			, "new" => "НОВО БРАТЕ"
			, "soldout" => "РАСПРОДАТО"
            , "validation" => "Колико је "
            , "checkEmail" => "Послали смо ти емаил са линком за потврду куповине"
			, "clickLink" => "Кликни на следећи линк како би потврдио поруџбину: "
			, "unsubscribeLink" => "Кликни на следећи линк како би се одјавио са мејлинг листе: "
			, "orderNotMarked" => "Поруџбина није обележена"
			, "orderShipped" => "Поруџбина oбележена као испоручена"
			, "orderReturned" => "Поруџбина oбележена као враћена"
			, "commentNotMarked" => "Коментар није обележен"
			, "commentAccepted" => "Коментар прихваћен"
			, "commentDeclined" => "Коментар одбијен"
			, "noItems" => "Нема ставки"
			, "largeFile" => "Величина фајла је превелика"
			, "notImage" => "Фајл није слика"
			, "notAuthorized" => "Приступ није дозвољен"
		]
		, "error" => [
			  "header" => "Шшш! Чињеница да ова страница постоји је тајна чувана вековима."
			, "action" => "Иди кући"
		]
    ];
?>
