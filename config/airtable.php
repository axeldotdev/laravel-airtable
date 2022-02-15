<?php

return [
    'uri' => 'https://api.airtable.com/v0/',

    /*
    |--------------------------------------------------------------------------
    | Airtable Key
    |--------------------------------------------------------------------------
    |
    | This value can be found in your Airtable account page:
    | https://airtable.com/account
    |
     */
    'key' => env('AIRTABLE_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Global Variables
    |--------------------------------------------------------------------------
    |
    | This values can be found in your Airtable base view.
    |
    */
    'global' => [
        /*
        |--------------------------------------------------------------------------
        | Base ID
        |--------------------------------------------------------------------------
        |
        | The base_id can be found in the help > API Documentation section.
        | If you have a single base for your application, it can be useful to
        | store the base_id in the config and not fill it in each export() or
        | import() method calls
        |
        */
        'base_id' => null,

        /*
        |--------------------------------------------------------------------------
        | View Name
        |--------------------------------------------------------------------------
        |
        | The view_name can be found in the left sidebar of the base view.
        | The default view created by Airtable is named 'Grid view' so you are
        | not required to fill in the parameter in the export() or import() method
        | on the Airtable facade.
        |
        */
        'view_name' => 'Grid view',
    ],
];
