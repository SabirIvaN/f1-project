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
     * Get the resource should be displayed in the navigation
     *
     * @return bool
     */
    public static function displayInNavigation(): bool
    {
        return false;
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

    /**
     * Get the number of models to return per page
     *
     * @return int
     */
    public static function perPage(): int
    {
        return 30;
    }

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label(): string
    {
        return __('Завершенные заказы');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel(): string
    {
        return __('Завершенные заказы');
    }

    /**
     * Get the text for the create resource button.
     *
     * @return string|null
     */
    public static function createButtonLabel(): string
    {
        return __('Создать');
    }

    /**
     * Get the text for the create resource toast.
     *
     * @return string
     */
    public static function createToastMessage(): string
    {
        return __('Заказ создан!');
    }

    /**
     * Get the text for the update resource button.
     *
     * @return string
     */
    public static function updateButtonLabel(): string
    {
        return __('Обновить');
    }

    /**
     * Get the text for the update resource toast.
     *
     * @return string
     */
    public static function updateToastMessage(): string
    {
        return __('Заказ обновлен!');
    }

    /**
     * Get the text for the delete resource button.
     *
     * @return string
     */
    public static function deleteButtonLabel(): string
    {
        return __('Удалить');
    }

    /**
     * Get the text for the delete resource toast.
     *
     * @return string
     */
    public static function deleteToastMessage(): string
    {
        return __('Заказ удален!');
    }

    /**
     * Get the text for the save resource button.
     *
     * @return string
     */
    public static function saveButtonLabel(): string
    {
        return __('Сохранить');
    }

    /**
     * Get the text for the restore resource button.
     *
     * @return string
     */
    public static function restoreButtonLabel(): string
    {
        return __('Восстановить');
    }

    /**
     * Get the text for the restore resource toast.
     *
     * @return string
     */
    public static function restoreToastMessage(): string
    {
        return __('Заказ восстановлен!');
    }

    /**
     * Get the text for the create breadcrumbs.
     *
     * @return string
     */
    public static function createBreadcrumbsMessage(): string
    {
        return __('Создать');
    }

    /**
     * Get the text for the edit breadcrumbs.
     *
     * @return string
     */
    public static function editBreadcrumbsMessage(): string
    {
        return __('Редактировать');
    }

    /**
     * Get the descriptions for the screen.
     *
     * @return null|string
     */
    public static function description(): ?string
    {
        return __('Завершенные заказы, которые были выполнены');
    }
}
