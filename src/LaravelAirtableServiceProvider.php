<?php

namespace Axeldotdev\LaravelStarter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AxelDotDev\LaravelAirtable\Commands\MakeExportCommand;
use AxelDotDev\LaravelAirtable\Commands\MakeImportCommand;

class LaravelStarterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-airtable')
            ->hasConfigFile()
            ->hasCommands(
                MakeExportCommand::class,
                MakeImportCommand::class,
            );
    }
}
