<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class OrderResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Order::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('name'),

            TD::make('phone'),

            TD::make('email'),

            TD::make('city')->render(function ($order) {
                return $order->cities[0]->name;
            }),

            TD::make('address'),

            TD::make('service')->render(function ($order) {
                return $order->services[0]->name;
            }),

            TD::make('price')->render(function ($order) {
                return $order->services[0]->price . __('₽');
            }),

            TD::make('comment'),

            TD::make('created_at', 'Date of creation')->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id'),
            Sight::make('name'),
            Sight::make('phone'),
            Sight::make('email'),
            Sight::make('city')->render(function ($order) {
                return $order->cities[0]->name;
            }),
            Sight::make('address'),
            Sight::make('service')->render(function ($order) {
                return $order->services[0]->name;
            }),
            Sight::make('price')->render(function ($order) {
                return $order->services[0]->price . __('₽');
            }),
            Sight::make('comment'),
            Sight::make('created_at'),
            Sight::make('updated_at'),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
