<?php

namespace AxelDotDev\LaravelAirtable\Contracts;

use Illuminate\Support\Collection;

interface ToCollection extends Import
{
    public function data(Collection $data): void;
}
