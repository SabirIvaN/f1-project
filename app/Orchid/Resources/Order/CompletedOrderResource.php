<?php

namespace App\Orchid\Resources\Order;

use App\Orchid\Filters\Order\CompletedOrderFilter;
use Orchid\Crud\Resource;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class CompletedOrderResource extends Resource
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
            TD::make('name', __('Полное имя')),

            TD::make('service', __('Услуга'))->render(function ($order) {
                return $order->services[0]->name;
            }),

            TD::make('price', __('Цена'))->render(function ($order) {
                return $order->services[0]->price . __('₽');
            }),

            TD::make('created_at', __('Поступил'))->render(function ($model) {
                return $model->created_at->format('d.m.Y h:i');
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
            Sight::make('name', __('Полное имя')),

            Sight::make('phone', __('Телефон')),

            Sight::make('email', __('E-Mail')),

            Sight::make('address', __('Адрес'))->render(function ($order) {
                return $order->cities[0]->name . ', ' . $order->address;
            }),

            Sight::make('service', __('Услуга'))->render(function ($order) {
                return $order->services[0]->name;
            }),

            Sight::make('price', __('Цена'))->render(function ($order) {
                return $order->services[0]->price . __('₽');
            }),

            Sight::make('comment', __('Комментарий')),

            Sight::make('completed', __('Завершенность'))->render(function ($order) {
                return ($order->completed == true) ? __('Завершен') : __('Не завершен');
            }),

            Sight::make('created_at', __('Поступил'))->render(function ($model) {
                return $model->created_at->format('d.m.Y h:i');
            }),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [
            new CompletedOrderFilter(),
        ];
    }
}
