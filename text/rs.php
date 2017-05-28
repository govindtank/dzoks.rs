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
            , "buy" => "Купи"
        ]
        , "cart" => [
              "empty" => "Ајде бураз купи нешто!"
            , "checkout" => "Плати" 
            , "clear" => "Испразни" 
            , "total" => "Укупно"
        ]
        , "contact" => [
              "header" => "Пусти нам линију!"
            , "name" => "Име"
            , "email" => "Имејл"
            , "phone" => "Телефон"
            , "subject" => "Наслов"
            , "message" => "Порука"
            , "validation" => "Колико је "
            , "send" => "Пошаљи"
        ]
    ];
?>