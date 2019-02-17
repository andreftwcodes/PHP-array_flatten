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

    function flatten_array(array $items, array $flattened = []) {
        foreach ($items as $item) {
            if (is_array($item)) {
                $flattened = flatten_array($item, $flattened);
                continue;
            }

            $flattened[] = $item;
        }

        return $flattened;
    }

    echo '<pre>', print_r(flatten_array($array)), '</pre>';