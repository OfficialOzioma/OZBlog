<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'unsplash' => [
        'key' => env('UNSPLASH_ACCESS_KEY'),
    ],

    'meta' => [
        'site_name' => 'OZ Blog',
        'mantra' => 'My Official Blog',
    ],
    'social' => [
        'linkedin' => 'https://www.linkedin.com/in/officialozioma/',
        'email' => 'mailto:pascalozioma18@gmail.com',
        'medium' => 'https://medium.com/@officialozioma',
        'github' => 'https://github.com/officialozioma',
        'twitter' => 'https://twitter.com/officialozioma',
        'atom' => '#',
    ]
];