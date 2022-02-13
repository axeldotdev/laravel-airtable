<?php

namespace AxelDotDev\LaravelAirtable\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeExportCommand extends Command
{
    /** @var string */
    public $signature = 'airtable:export {name}';

    /** @var string */
    public $description = 'Create an export class for Airtable.';

    public function handle(Filesystem $filesystem): int
    {
        $name = is_string($this->argument('name')) ? $this->argument('name') : '';

        $filesystem->ensureDirectoryExists(app_path('Airtable/Exports'));

        if (! Str::of($name)->endsWith('Export')) {
            $name = "{$name}Export";
        }

        $stub_path = dirname(__DIR__) . '/stubs/Export.stub';

        $filesystem->copy($stub_path, app_path("Airtable/Exports/{$name}.php"));

        $filesystem->replaceInFile('{name}', $name, app_path("Airtable/Exports/{$name}.php"));

        return Command::SUCCESS;
    }
}
