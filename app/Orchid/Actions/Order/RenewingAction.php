<?php

namespace App\Orchid\Actions\Order;

use App\Models\Order;
use Illuminate\Support\Collection;
use Orchid\Crud\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;

class RenewingAction extends Action
{
    /**
     * The button of the action.
     *
     * @return Button
     */
    public function button(): Button
    {
        return Button::make(__('Возобновить'))->icon('action-undo');
    }

    /**
     * Perform the action on the given models.
     *
     * @param \Illuminate\Support\Collection $models
     */
    public function handle(Collection $models)
    {
        $models->each(function (Order $model) {
            $model->completed = false;
            $model->save();
        });

        if($models->count() === 1) {
            Toast::message(__('Заказ возобновлен!'));
        } else {
            Toast::message(__('Заказы возобновлены!'));
        }
    }
}
