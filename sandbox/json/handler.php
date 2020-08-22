<?php

    $products = [
        [
            'name' => 'Кепка',
            'price' => 1900
        ],
        [
            'name' => 'Шляпа',
            'price' => 2700
        ]
    ];

     //превращает ассоциативный массив в РНР в строчку в формате JSON
     echo json_encode($products);

?>