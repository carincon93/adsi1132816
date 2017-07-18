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
    'google' => [
        'client_id' => '873540216467-u3e8am0176bo6l743vickdb7sqpjrogh.apps.googleusercontent.com',
        'client_secret' => '55Bdb6ozD_obIwxI0jYRuQE8',
        'redirect' => 'http://127.0.0.1:8000/login/google/callback',
    ],
    'twitter' => [
        'client_id' => 'hP7UFBDYCL4GmBYmQoDCZG42r',
        'client_secret' => 'XnUoI06q9eFNSApgMLwdmuxyg4GKLjRKMJ6iuwRosXEhD4Bn2F',
        'redirect' => 'http://127.0.0.1:8000/login/twitter/callback',
    ],
        

];
