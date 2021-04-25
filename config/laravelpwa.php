<?php

return [
    'name' => 'Medical Podcast (medcast.id)',
    'manifest' => [
        'name' => env('APP_NAME', 'Medical Podcast (medcast.id)'),
        'short_name' => 'medcast.id',
        'start_url' => '/',
        'background_color' => '#333333',
        'theme_color' => '#254b62',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/images/icons/icon-72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/icon-96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/icon-128x128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/icon-144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/icon-152x152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/icon-384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/splash-640x1136.png',
            '750x1334' => '/images/icons/splash-750x1334.png',
            '828x1792' => '/images/icons/splash-828x1792.png',
            '1125x2436' => '/images/icons/splash-1125x2436.png',
            '1242x2208' => '/images/icons/splash-1242x2208.png',
            '1242x2688' => '/images/icons/splash-1242x2688.png',
            '1536x2048' => '/images/icons/splash-1536x2048.png',
            '1668x2224' => '/images/icons/splash-1668x2224.png',
            '1668x2388' => '/images/icons/splash-1668x2388.png',
            '2048x2732' => '/images/icons/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Tentang Kami',
                'description' => 'Medcast adalah Platform Belajar Kedokteran Berbasis Online. Sistem sepenuhnya tanpa tatap muka. Fitur yang tersedia membantu mahasiswa kedokteran dalam memahami materi dan melatih kecakapan klinis bagi seorang tenaga kesehatan',
                'url' => '/#aboutus',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Fitur',
                'description' => 'Medcast adalah Platform Belajar Kedokteran Berbasis Online. Sistem sepenuhnya tanpa tatap muka. Fitur yang tersedia membantu mahasiswa kedokteran dalam memahami materi dan melatih kecakapan klinis bagi seorang tenaga kesehatan',
                'url' => '/#features',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Fitur',
                'description' => 'Kamu bisa mendengarkan Podcast disini!',
                'url' => '/#podcast',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Info',
                'description' => 'Medcast adalah Platform Belajar Kedokteran Berbasis Online. Sistem sepenuhnya tanpa tatap muka. Fitur yang tersedia membantu mahasiswa kedokteran dalam memahami materi dan melatih kecakapan klinis bagi seorang tenaga kesehatan',
                'url' => '/#information',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Kontak',
                'description' => 'Kontak',
                'url' => '/#contact',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Info',
                'description' => 'Try Out materi kedokteran berbasis komputer/ aplikasi website',
                'url' => '/medtrial',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
        ],
        'custom' => []
    ]
];
