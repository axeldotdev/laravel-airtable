<?php

namespace AxelDotDev\LaravelAirtable\Concerns;

trait Exportable
{
    public function export(
        ?string $base_id = null,
        ?string $view_name = null,
    ): int {
        return 0;
    }
}
