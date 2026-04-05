<?php

return [
    'app' => [
        'name' => env('APP_NAME', "Reny's Birthday Surprise"),
        'env' => env('APP_ENV', 'production'),
        'debug' => env('APP_DEBUG', false),
        'url' => env('APP_URL', 'http://localhost'),
        'timezone' => 'Asia/Jakarta',
        'locale' => 'id',
        'fallback_locale' => 'en',
        'key' => env('APP_KEY'),
        'cipher' => 'AES-256-CBC',
    ],
    'view' => [
        'paths' => [
            resource_path('views'),
        ],
    ],
];
