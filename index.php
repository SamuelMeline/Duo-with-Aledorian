<?php

$users = [
    [
        'firstname' => 'John',
        'lastname' => 'Doe',
        'age' => 42,
        'friends' => []
    ],
    [
        'firstname' => 'Jane',
        'lastname' => 'Doe',
        'age' => 42,
        'friends' => []
    ],
    [
        'firstname' => 'Jay',
        'lastname' => 'Doe',
        'age' => 17,
        'friends' => [
            [
                'firstname' => 'Jean',
                'lastname' => 'Dupont'
            ],
            [
                'firstname' => 'Pierre',
                'lastname' => 'Durand'
            ],
            [
                'firstname' => 'Jacques',
                'lastname' => 'Jacques'
            ]
        ]
    ]
];

require 'index.phtml';
?>

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, alias.</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, alias.</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, alias.</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, alias.</p>
