<?php

namespace AxelDotDev\LaravelAirtable\Contracts;

use Illuminate\Support\Collection;

interface Exportable
{
    public function data(): Collection;

    public function map(Collection $data): array;
}
