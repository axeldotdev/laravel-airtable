<?php

namespace Axeldotdev\LaravelStarter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AxelDotDev\LaravelAirtable\Commands\MakeExportCommand;
use AxelDotDev\LaravelAirtable\Commands\MakeImportCommand;

class AirtableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('airtable')
            ->hasConfigFile()
            ->hasCommands(
                MakeExportCommand::class,
                MakeImportCommand::class,
            );
    }
}
