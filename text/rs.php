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
        , "login" => [
              "header" => "Пријава"
            , "username" => "Корисничко име"
            , "password" => "Лозинка"
            , "submit" => "Пусти ме унутра"
        ]
        , "home" => [
			  "caption-open" => "Са нашим чарапама сви имају фут фетиш"
			, "caption-1" => "За легендице од сувог злата"
			, "caption-2" => "Господствени ужитак"
			, "caption-2" => "Господствени ужитак"
			, "caption-close" => "Ушушкај своја стопала"
			, "shop" => "Кенди шоп"
			, "scroll" => "Идеш малааа!"
        	, "text-1" => file_get_contents("../text/home/text-1.rs")
        	, "text-2" => file_get_contents("../text/home/text-2.rs")
        	, "banner" => file_get_contents("../text/home/banner.rs")
        ]
        , "cart" => [
              "empty" => "Бураз, ред би био да пазариш нешто"
            , "checkout" => "Наручи" 
            , "total" => "Укупно"
            , "continue" => "Бриши у кенди шоп"
        ]
        , "checkout" => [
              "header" => "Ће се гледамо брaтe најмилији"
            , "submit" => "Потврди"
            , "inputs" => [
                  "name" => "Име и презиме"
                , "email" => "Имејл"
                , "phone" => "Број фона"
                , "address" => "Адреса"
                , "zip" => "Поштански број"
                , "city" => "Град"
                , "country" => "Држава"
                , "payment" => "Начин плаћања"
            ]
            , "methods" => ["online" => "Картица", "cash" => "Кеш"]
        ]
        , "product" => [
              "invalid" => "Немамо више тај пар. Јбг, превелика потражња."
            , "continue" => "Пробај други"
            , "reply" => "ЏОКС тим"
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
			, "collection" => "Колекшн"
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
            , "message" => "Порукица"
            , "send" => "Пошаљи љуби брат"
            , "mailto" => "*Формулар ће бити послат на "
        ]
		, "propose" => [
              "header" => "Дизајнирај своје"
            , "text" => "Предлoжи свој дизајн и шаљемо ти такав пар за Џ ако се другима свиђа идеја"
    		, "name" => "Име"
            , "email" => "Имејл"
            , "description" => "Опис чарапа"
            , "send" => "Предложи"
        ]  
		, "manage" => [
              "save" => "Сачувај"
            , "add" => "Додај"
            , "filter" => "Филтрирај"
            , "back" => "Назад"
            , "reply" => "Одговор"
			, "ship" => "Испоручи"
            , "unship" => "Врати"
            , "accept" => "Одобри"
            , "decline" => "Одбиј"
    		, "header" => "Мениџ"
    		, "products" => "Чарапке"
			, "users" => "Корисници"
    		, "proposals" => "Предлози дизајна"
    		, "logout" => "Одјава"
    		, "collections" => "Колекшнс"
			, "orders" => "Поруџбине"
			, "sales" => "Продаје"
    		, "totalPrice" => "Укупна цена"
    		, "totalQuantity" => "Укупна количина"
    		, "totalQuantityBySize" => "Укупна количина по величини"
			, "warehouse" => "Магацин"
    		, "contacts" => "Контакти"
            , "send" => "Пошаљи"
    		, "comments" => "Коментари"
			, "name" => "Име"
			, "level" => "Ниво"
			, "level1" => "Продавање производа"
			, "level2" => "Управљање стварима"
			, "level3" => "Управљање корисницима"
			, "shippingCompany" => "Фирма"
			, "shippingNumber" => "Број пошиљке"
			, "letters" => "Генериши писма"
			, "invoice" => "Генериши рачун"
            , "minDate" => "Почетни датум - dd.mm.yyyy"
            , "valid" => "Означи исправно"
            , "invalid" => "Означи неисправно"
        ]
		, "status" => [
			"productNotAddedToCart" => "Производ није убачен у корпу"
			, "productAddedToCart" => "Производ убачен у корпу"
			, "productNotRemovedFromCart" => "Производ није избачен из корпе"
			, "productRemovedFromCart" => "Приозвод избачен из корпе"
			, "messageNotSent" => "Порука није послата"
			, "messageSent" => "Обавезно се чујемо"
			, "orderNotPlaced" => "Није поручено"
			, "orderPlaced" => "Уздравље да их поцепаш!"
			, "productNotSold" => "Производ није продат"
			, "productSold" => "Производ продат"
			, "productNotGifted" => "Производ није поклоњен"
			, "productGifted" => "Производ поклоњен"
			, "productNotAdded" => "Производ није убачен"
			, "productAdded" => "Производ убачен"
			, "productNotCommented" => "Коментар није објављен"
			, "productCommented" => "Коментар чека дозволу за објављивање"
			, "alreadyCommented" => "Већ си бацио коментар на овај пар и врло смо ти захвални због тога"
			, "replyNotAdded" => "Одговор није додат" 
			, "replyAdded" => "Одговор додат" 
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
			, "notLoggedIn" => "Морате бити пријавлјени"
			, "incorrectCredentials" => "Неисправни подаци"
			, "cookiesAlert" => "Користимо колачиће да бисmo ти побољшали доживљај. Користећи овај сајт прихваташ такво коришћење."
			, "bigQuantity" => "Браћкице, продали смо све парове овог модела"
			, "maxCartItems" => "Максималан број артикала у корпи надмашен"
			, "maxItemQuantity" => "Максимална количина артикла надмашена"
			, "new" => "НОВО БРАТЕ"
			, "soldout" => "РАСПРОДАТО"
            , "checkEmail" => "Послали смо ти мејл са линком за потврду куповине"
			, "orderNotMarked" => "Поруџбина није обележена"
			, "orderShipped" => "Поруџбина oбележена као испоручена"
			, "orderReturned" => "Поруџбина oбележена као враћена"
			, "orderInvalid" => "Поруџбина oбележена као неисправна"
			, "orderValid" => "Поруџбина oбележена као исправна"
			, "commentNotMarked" => "Коментар није обележен"
			, "commentAccepted" => "Коментар прихваћен"
			, "commentDeclined" => "Коментар одбијен"
			, "noItems" => "Нема ставки"
			, "largeFile" => "Величина фајла је превелика"
			, "notImage" => "Фајл није слика"
			, "notAuthorized" => "Приступ није дозвољен"
			, "zipError" => "Архива се не може креирати"
			, "shopRestricted" => "Куповина је тренутно онемогућена"
			, "wait" => "Сачекај мало :)"
		]
		, "error" => [
			  "header" => "Шшш! Чињеница да ова страница постоји је тајна чувана вековима."
			, "action" => "Иди кући"
		]
		, "mail" => [
			  "confirmation" => "Потврда"
			, "shipped" => "Послато"
			, "invalid" => "Поруџбина неисправна"
			, "contact" => "Контакт"
			, "newsletter" => "Њјузлетер"
		]
    ];
?>
