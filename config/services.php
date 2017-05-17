<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyDPBlnpq7WRgPi8oOkYWC5gyEM1OXLiiuo', // Only used for JS integration
        'auth_domain' => 'laravel-hw.firebaseapp.com', // Only used for JS integration
        'database_url' => 'https://laravel-hw.firebaseio.com/',
        'secret' => 'RYMYUgYveIrr5uIqOwq4D2w2Xdnwz2DU0o2s0QcB',
        'storage_bucket' => 'laravel-hw.appspot.com', // Only used for JS integration
    ]
];
