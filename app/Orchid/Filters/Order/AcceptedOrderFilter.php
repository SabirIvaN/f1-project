<?php

namespace App\Orchid\Filters\Order;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;

class AcceptedOrderFilter extends Filter
{
    /**
     * @var bool
     */
    public $display = false;

    /**
     * @return string
     */
    public function name(): string
    {
        return '';
    }

    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        return $builder->where('completed', false);
    }
}
