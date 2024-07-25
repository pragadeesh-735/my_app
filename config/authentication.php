<?php
return [
    'Authentication' => [
        'authenticators' => [
            'Form' => [
                'fields' => ['username' => 'email', 'password' => 'password'],
                'loginUrl' => '/users/login',
            ],
        ],
        'identityClass' => 'App\Model\Entity\User',
        'storage' => 'Session',
    ],
];
