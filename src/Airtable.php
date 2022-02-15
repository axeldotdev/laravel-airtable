<?php

namespace AxelDotDev\LaravelAirtable;

use Illuminate\Support\Collection;
use AxelDotDev\LaravelAirtable\Contracts\Export;
use AxelDotDev\LaravelAirtable\Contracts\Import;
use AxelDotDev\LaravelAirtable\Contracts\WithMapping;
use AxelDotDev\LaravelAirtable\Contracts\WithRules;

class Airtable
{
    public function export(
        $export,
        ?string $base_id = null,
        ?string $view_name = null,
    ): int {
        $data = $export->data();

        if ($export instanceof WithMapping) {
            $data = $data->map(fn ($item) => $export->map($item));
        }

        // TODO: Export data to Airtable

        return 0;
    }

    public function import(
        $import,
        ?string $base_id = null,
        ?string $view_name = null,
    ): Collection {
        $data = $import->handle();

        if ($import instanceof WithMapping) {
            $data = $data->map(fn ($item) => $import->map($item));
        }

        if ($import instanceof WithRules) {
            // TODO: validate data
        }

        // TODO: Import data from Airtable

        return new Collection();
    }
}
