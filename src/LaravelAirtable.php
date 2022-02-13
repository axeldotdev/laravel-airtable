<?php

namespace AxelDotDev\LaravelAirtable;

use AxelDotDev\LaravelAirtable\Contracts\Exportable;
use AxelDotDev\LaravelAirtable\Contracts\Importable;

class LaravelAirtable
{
    public function export(
        Exportable $export,
        string $base_id,
        string $view_name,
    ): void {
    }

    public function import(
        Importable $import,
        string $base_id,
        string $view_name,
    ): void {
    }
}
