<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Quiz Tools PIN (fallback)
    |--------------------------------------------------------------------------
    | PIN bersama tutor sebagai fallback jika hash PIN belum diset di
    | tabel site_settings (key: quiz_tools -> pin_hash). Nilai di .env
    | hanya dibaca di server, tidak pernah dikirim ke browser.
    */
    'pin' => env('QUIZ_PIN', ''),
];
