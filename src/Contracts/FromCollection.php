<?php

namespace AxelDotDev\LaravelAirtable\Contracts;

use Illuminate\Support\Collection;

interface FromCollection extends Export
{
    public function data(): Collection;
}
