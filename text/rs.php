<?php
    $string = [
        "header" => [
            "home" => "Почетна"
          , "gallery" => "Галерија"
          , "shop" => "Продавница"
          , "cart" => "Корпа"
          , "contact" => "Контакт"
          , "checkout" => "Куповина"
        ]
        , "index" => [
            "enter" => "Значи упадај"
        ]
        , "home" => [
              "header" => "Ово је наслов"
            , "text" => file_get_contents("text/text-home.rs")
        ]
        , "gallery" => [
              "header" => "Погледај ове опасне фотке!"
        ]
        , "shop" => [
              "header" => "Пa купи нешто!"
            , "view" => "Баци поглед"
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
            , "sizes" => ["мале", "ВЕЛИКЕ"]
        ]
        , "contact" => [
              "header" => "Пусти нам линију!"
            , "name" => "Име"
            , "email" => "Имејл"
            , "subject" => "Наслов"
            , "message" => "Порука"
            , "validation" => "Колико је "
            , "send" => "Пошаљи"
        ]
    ];
?>