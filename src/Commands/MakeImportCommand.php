<?php

namespace AxelDotDev\LaravelAirtable\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeImportCommand extends Command
{
    /** @var string */
    public $signature = 'airtable:import {name : The import name}';

    /** @var string */
    public $description = 'Create an import class for Airtable.';

    public function handle(Filesystem $filesystem): int
    {
        $name = is_string($this->argument('name')) ? $this->argument('name') : '';

        $filesystem->ensureDirectoryExists(app_path('Airtable/Imports'));

        if (! Str::of($name)->endsWith('Import')) {
            $name = "{$name}Import";
        }

        $stub_path = dirname(__DIR__) . '/stubs/Import.stub';

        $filesystem->copy($stub_path, app_path("Airtable/Imports/{$name}.php"));

        $filesystem->replaceInFile('{name}', $name, app_path("Airtable/Imports/{$name}.php"));

        return Command::SUCCESS;
    }
}
