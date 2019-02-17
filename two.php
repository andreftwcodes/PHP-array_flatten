<?php

    $array = [
        'name' => [
            'Your name is required.',
            'Your name cannot contain any numbers.',
            'extra' => [
                'i love php', 
                'vue js is awesome'
            ]
        ],
        'dob' => [
            'Your date of birth is required.'
        ],
        'password' => [
            'Your password must be 6 characters or more.',
            'Your password isn\'t strong enough'
        ],
        'Walk it like i talk it.'
    ];

    $flattened = iterator_to_array(new RecursiveIteratorIterator(
        new RecursiveArrayIterator($array)
    ), false);

    echo '<pre>', print_r($flattened), '</pre>';