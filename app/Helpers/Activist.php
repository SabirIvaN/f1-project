<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Collection;

class Activist
{
    /**
     * A function that retrieves a field from a collection.
     *
     * @param Collection $collection,
     * @param string $field
     *
     * @return Collection
     */
    public static function map(Collection $collection, string $field): object {
        return $collection->map(function (object $object) use ($field) {
            return collect($object)->only([$field])->all();
        });
    }
}
