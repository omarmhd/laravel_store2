<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Messenger Default User Model
    |--------------------------------------------------------------------------
    |
    | This option defines the default User model.
    |
    */

    'user' => [
        'model' => 'App\Models\User'
    ],

    /*
    |--------------------------------------------------------------------------
    | Messenger Pusher Keys
    |--------------------------------------------------------------------------
    |
    | This option defines pusher keys.
    |
    */

    'pusher' => [
        'app_id'     => '811742',
        'app_key'    => '9f0244fa5c9bd8625d66',
        'app_secret' => '47d0fdbb013e30a2fc7a',
        'options' => [
            'cluster'   => 'ap2',
            'encrypted' => true
        ]
    ],
];
