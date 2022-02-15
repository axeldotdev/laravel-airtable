<?php

namespace AxelDotDev\LaravelAirtable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Axeldotdev\LaravelAirtable\Airtable
 */
class Airtable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AxelDotDev\LaravelAirtable\Airtable::class;
    }
}
