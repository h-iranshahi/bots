<?php

return [

    //------------------------------------------
    // Languages
    //------------------------------------------
    'languages' => [
        'en' => [
            'title' => "English",
            'code' => "en",
            'direction' => "ltr",
            'default' => true,
        ],
        // 'fa' => [
        //     'title' => 'Farsi',
        //     'code' => 'fa',
        //     'direction' => "rtl",
        // ],
    ],


    //------------------------------------------
    // Forms
    //------------------------------------------
    'forms' => [
        // 'users' => \App\Forms\User::class,
        'words' => \Iransh\Hilara\Forms\Word::class,
        'bots' => \App\Forms\Bot::class,
    ],


    //------------------------------------------
    // Login & Register Operations
    //------------------------------------------
    'enable_login' => true,
    'enable_register' => true,
    'user_identification' => 'email',
    'use_socialite' => false,
    'use_captcha' => false,
    'captcha_sitekey' => '',
    'redirect_url_after_login' => '/',

    //------------------------------------------
    // Dictionary
    //------------------------------------------
    'dictionary_active_categories' => env('HILARA_DICTIONARY_ACTIVE_CATEGORIES', null),

    
];
