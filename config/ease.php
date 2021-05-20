<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your ease view. This name is used when the
    | framework needs to place the name in a sidebar, headings, or some
    | other location as required by the application or the ease view.
    |
    */

    'name' => env('EASE_NAME', 'Ease'),

    /*
    |--------------------------------------------------------------------------
    | Server URL
    |--------------------------------------------------------------------------
    |
    | This URL is the ease server url when running the ease run command to
    | access your assets. Ensure the location url and port number match
    | the server url specified here. This will show in your terminal.
    |
    */

    'server_url' => env('EASE_SERVER_URL', 'http://localhost:3000'),

    /*
    |--------------------------------------------------------------------------
    | Stylesheet URLs
    |--------------------------------------------------------------------------
    |
    | Specify custom stylesheet URLs to be included in your ease view, for
    | quick demo purpose, iteration, and viewing of your Vue components
    | with styles. These are totally contained, and safe within ease.
    |
    */

    'stylesheet_urls' => [

    ],
];
