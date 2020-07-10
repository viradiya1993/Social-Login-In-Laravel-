<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'facebook' => [
        'client_id' => '902455293591495',         // Your Facebook Client ID
        'client_secret' => '4b9a815bf97c309cb650c9b5e1a03fd4', // Your Facebook Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '673196264301-ar7mqhrsqo5nl2o84v5ruf0ta8p2vmqg.apps.googleusercontent.com',
        'client_secret' => 'k_AaHAzJ3SdQZgx_ibFADdOD',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'twitter' => [
        'client_id' => '0RyoOK6D0g1dEW4pzNsYuAEQn',
        'client_secret' => '2Mh1l5NQ01pNhTesw8edj2OCEj2AQLMNoIOhadNcK8D43MIOxB',
        'redirect' => 'http://127.0.0.1:8000/login/twitter/callback',
    ],

];
