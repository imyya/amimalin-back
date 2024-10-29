<?php

return [
    'items' => [
        [
            'label' => 'Accueil',
            'route' => '/home',
        ],
        [
            'label' => 'Comment ça marche',
            'route' => '/about',
            'submenu' => [
                ['label' => 'Nos services', 'route' => '/services'],
                ['label' => 'Nos tarifs', 'route' => '/pricing'],
            ],
        ],
        [
            'label' => 'Trouver un petsitter',
            'route' => '/contact',
        ],
        [
            'label' => 'Connexion',
            'route' => '/login',
        ],
        [
            'label' => 'Deconnexion',
            'route' => '/logout',
        ],
    ],

    'mobile_items' => [
        [
            'label' => 'Accueil',
            'route' => '/home',
        ],
        [
            'label' => 'Nos services',
            'route' => '/pricing',
        ],
        [
            'label' => 'Nos tarifs',
            'route' => '/contact',
        ],
        [
            'label' => 'Trouver mon petsitter',
            'route' => '/contact',
        ],
        [
            'label' => 'Connexion',
            'route' => '/login',
        ],
        [
            'label' => 'Deconnexion',
            'route' => '/logout',
        ],
    ],
];
