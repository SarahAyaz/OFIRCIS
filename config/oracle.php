<?php

return [
    'oracle' => [
        'driver'        => 'oracle',
        'tns'           => env('DB_TNS', 'FYPDB'),
        'host'          => env('DB_HOST', ''),
        'port'          => env('DB_PORT', '1521'),
        'database'      => env('DB_DATABASE', 'FYPdb'),
        'username'      => env('DB_USERNAME', 'OFIR'),
        'password'      => env('DB_PASSWORD', 'Bahrian35643'),
        'charset'       => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'        => env('DB_PREFIX', ''),
        'prefix_schema' => env('DB_SCHEMA_PREFIX', ''),
    ],
];
