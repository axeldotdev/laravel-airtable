<?php

namespace AxelDotDev\LaravelAirtable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Axeldotdev\LaravelAirtable\LaravelAirtable
 */
class LaravelAirtable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AxelDotDev\LaravelAirtable\LaravelAirtable::class;
    }
}
