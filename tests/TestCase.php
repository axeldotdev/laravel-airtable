<?php

namespace Axeldotdev\LaravelAirtable\Tests;

use Axeldotdev\LaravelAirtable\LaravelAirtableServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [LaravelAirtableServiceProvider::class];
    }
}
