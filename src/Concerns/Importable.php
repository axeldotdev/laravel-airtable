<?php

namespace AxelDotDev\LaravelAirtable\Concerns;

use Illuminate\Support\Collection;

trait Importale
{
    public function import(
        ?string $base_id = null,
        ?string $view_name = null,
    ): Collection {
        return new Collection();
    }
}
