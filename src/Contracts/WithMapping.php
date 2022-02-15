<?php

namespace AxelDotDev\LaravelAirtable\Contracts;

interface WithMapping
{
    public function map(array|object $data): array|object;
}
