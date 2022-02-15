<?php

namespace AxelDotDev\LaravelAirtable;

use AxelDotDev\LaravelAirtable\Contracts\Exportable;
use AxelDotDev\LaravelAirtable\Contracts\Importable;
use Illuminate\Support\Collection;

class Airtable
{
    public const SUCCESS = 0;
    public const FAILURE = 1;

    public function export(
        Exportable $export,
        ?string $base_id = null,
        ?string $view_name = null,
    ): int {
        // TODO: Export data to Airtable

        return Airtable::SUCCESS;
    }

    public function import(
        Importable $import,
        ?string $base_id = null,
        ?string $view_name = null,
    ): Collection {
        // TODO: Import data from Airtable

        return new Collection();
    }
}
