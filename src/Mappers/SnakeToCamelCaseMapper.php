<?php

namespace Spatie\LaravelData\Mappers;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class SnakeToCamelCaseMapper implements Mapper
{
    public function map(int|string $name, Collection $properties): string|int
    {
        if (! is_string($name)) {
            return $name;
        }

        return Str::snake($name);
    }
}
