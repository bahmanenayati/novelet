<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => env('APP_NAME'),
        'start_url' => env('APP_URL'),
        'background_color' => '#fff',
        'theme_color' => '#4fe1b5',
        'display' => 'standalone',
        'orientation' => 'any',
        'icons' => [
            '72x72' => '/images/99_Novelete_logo_Export-0o.png',
            '96x96' => '/images/99_Novelete_logo_Export-0o.png',
            '128x128' => '/images/99_Novelete_logo_Export-0o.png',
            '144x144' => '/images/99_Novelete_logo_Export-0o.png',
            '152x152' => '/images/99_Novelete_logo_Export-0o.png',
            '192x192' => '/images/99_Novelete_logo_Export-0o.png',
            '384x384' => '/images/99_Novelete_logo_Export-0o.png',
            '512x512' => '/images/99_Novelete_logo_Export-0o.png'
        ],
        'splash' => [
            '640x1136' => '/images/99_Novelete_logo_Export-0o.png',
            '750x1334' => '/images/99_Novelete_logo_Export-0o.png',
            '828x1792' => '/images/99_Novelete_logo_Export-0o.png',
            '1125x2436' => '/images/99_Novelete_logo_Export-0o.png',
            '1242x2208' => '/images/99_Novelete_logo_Export-0o.png',
            '1242x2688' => '/images/99_Novelete_logo_Export-0o.png',
            '1536x2048' => '/images/99_Novelete_logo_Export-0o.png',
            '1668x2224' => '/images/99_Novelete_logo_Export-0o.png',
            '1668x2388' => '/images/99_Novelete_logo_Export-0o.png',
            '2048x2732' => '/images/99_Novelete_logo_Export-0o.png',
        ],
        'custom' => []
    ]
];
