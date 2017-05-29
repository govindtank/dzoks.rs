<?php
    $string = [
        "header" => [
            "home" => "Почетна"
          , "gallery" => "Галерија"
          , "shop" => "Продавница"
          , "cart" => "Корпа"
          , "contact" => "Контакт"
          , "logo" => "Логотип"
        ]
        , "footer" => [
            "power" => "Еклога Епс"
        ]
        , "home" => [
              "header" => "Ово је наслов"
            , "text" => file_get_contents("text/text-home.rs")
        ]
        , "gallery" => [
              "header" => "Погледај ове опасне фотке!"
            , "image" => "Слика галерије"
        ]
        , "shop" => [
              "header" => "Пa купи нешто!"
            , "image" => "Слика продавнице"
            , "view" => "Баци поглед"
        ]
        , "cart" => [
              "empty" => "Ајде бураз купи нешто!"
            , "checkout" => "Плати" 
            , "clear" => "Испразни" 
            , "total" => "Укупно"
        ]
        , "product" => [
              "image" => "Слика производа"
            , "invalid" => "Извини! Немамо више тај пар."
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