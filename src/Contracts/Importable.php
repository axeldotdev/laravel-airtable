<?php

namespace AxelDotDev\LaravelAirtable\Contracts;

use Illuminate\Support\Collection;

interface Importable
{
    public function data(Collection $data): void;

    public function map(): mixed;
}
