<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Collection;

class Activist
{
    /**
     * A function that retrieves a field from a collection.
     *
     * @return string
     */
    public static function map (Collection $collection, string $field): object {
        return $collection->map(function (Object $object) use ($field) {
            return collect($object)->only([$field])->all();
        });
    }
}
