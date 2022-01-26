<?php

namespace App\Orchid\Resources\Order;

use App\Orchid\Actions\Order\CompletionAction;
use App\Orchid\Filters\Order\AcceptedOrderFilter;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class AcceptedOrderResource extends Resource
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
        return [
            Input::make('name')
                ->title(__('app.orchid.resources.order.fields.name.title'))
                ->placeholder(__('app.orchid.resources.order.fields.name.placeholder')),

            Input::make('phone')
                ->title(__('app.orchid.resources.order.fields.phone.title'))
                ->placeholder(__('app.orchid.resources.order.fields.phone.placeholder'))
                ->mask('+7 (999) 999-9999'),

            Input::make('email')
                ->type('email')
                ->title(__('app.orchid.resources.order.fields.email.title'))
                ->placeholder(__('app.orchid.resources.order.fields.email.placeholder')),

            Input::make('address')
                ->title(__('app.orchid.resources.order.fields.address.title'))
                ->placeholder(__('app.orchid.resources.order.fields.address.placeholder')),

            TextArea::make('comment')
                ->title(__('app.orchid.resources.order.fields.comment.title'))
                ->placeholder(__('app.orchid.resources.order.fields.comment.placeholder')),
        ];
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
            TD::make('name', __('app.orchid.resources.order.columns.name.header')),

            TD::make('service', __('app.orchid.resources.order.columns.service.header'))->render(function ($order) {
                return $order
                    ->services[0]
                    ->name;
            }),

            TD::make('price', __('app.orchid.resources.order.columns.price.header'))->render(function ($order) {
                return $order
                    ->services[0]
                    ->price . __('app.orchid.resources.order.columns.price.currency');
            }),

            TD::make('created_at', __('app.orchid.resources.order.columns.created_at.header'))->render(function ($model) {
                return $model
                    ->created_at
                    ->format('d.m.Y h:i');
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
            Sight::make('name', __('app.orchid.resources.order.legend.name.header')),

            Sight::make('phone', __('app.orchid.resources.order.legend.phone.header')),

            Sight::make('email', __('app.orchid.resources.order.legend.email.header')),

            Sight::make('address', __('app.orchid.resources.order.legend.address.header'))->render(function ($order) {
                return $order
                    ->cities[0]
                    ->name . ', ' . $order->address;
            }),

            Sight::make('service', __('app.orchid.resources.order.legend.service.header'))->render(function ($order) {
                return $order
                    ->services[0]
                    ->name;
            }),

            Sight::make('price', __('app.orchid.resources.order.legend.price.header'))->render(function ($order) {
                return $order
                    ->services[0]
                    ->price . __('app.orchid.resources.service_resource.legend.price.currency');
            }),

            Sight::make('comment', __('app.orchid.resources.order.legend.comment.header')),

            Sight::make('completed', __('app.orchid.resources.order.legend.completed.header'))->render(function () {
                return __('app.orchid.resources.order.legend.completed.false.header');
            }),

            Sight::make('created_at', __('app.orchid.resources.order.legend.created_at.header'))->render(function ($model) {
                return $model
                    ->created_at
                    ->format('d.m.Y h:i');
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
            new AcceptedOrderFilter(),
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(): array
    {
        return [
            new CompletionAction(),
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
        return __('app.orchid.resources.order.accepted_order_resource.label');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel(): string
    {
        return __('app.orchid.resources.order.accepted_order_resource.label');
    }

    /**
     * Get the text for the create resource button.
     *
     * @return string|null
     */
    public static function createButtonLabel(): string
    {
        return __('app.orchid.resources.order.create_button_label');
    }

    /**
     * Get the text for the create resource toast.
     *
     * @return string
     */
    public static function createToastMessage(): string
    {
        return __('app.orchid.resources.order.create_toast_message');
    }

    /**
     * Get the text for the update resource button.
     *
     * @return string
     */
    public static function updateButtonLabel(): string
    {
        return __('app.orchid.resources.order.update_button_label');
    }

    /**
     * Get the text for the update resource toast.
     *
     * @return string
     */
    public static function updateToastMessage(): string
    {
        return __('app.orchid.resources.order.update_toast_message');
    }

    /**
     * Get the text for the delete resource button.
     *
     * @return string
     */
    public static function deleteButtonLabel(): string
    {
        return __('app.orchid.resources.order.delete_button_label');
    }

    /**
     * Get the text for the delete resource toast.
     *
     * @return string
     */
    public static function deleteToastMessage(): string
    {
        return __('app.orchid.resources.order.delete_toast_message');
    }

    /**
     * Get the text for the save resource button.
     *
     * @return string
     */
    public static function saveButtonLabel(): string
    {
        return __('app.orchid.resources.order.save_button_label');
    }

    /**
     * Get the text for the restore resource button.
     *
     * @return string
     */
    public static function restoreButtonLabel(): string
    {
        return __('app.orchid.resources.order.restore_button_label');
    }

    /**
     * Get the text for the restore resource toast.
     *
     * @return string
     */
    public static function restoreToastMessage(): string
    {
        return __('app.orchid.resources.order.restore_toast_message');
    }

    /**
     * Get the text for the create breadcrumbs.
     *
     * @return string
     */
    public static function createBreadcrumbsMessage(): string
    {
        return __('app.orchid.resources.order.create_breadcrumbs_message');
    }

    /**
     * Get the text for the edit breadcrumbs.
     *
     * @return string
     */
    public static function editBreadcrumbsMessage(): string
    {
        return __('app.orchid.resources.order.edit_breadcrumbs_message');
    }

    /**
     * Get the descriptions for the screen.
     *
     * @return null|string
     */
    public static function description(): ?string
    {
        return __('app.orchid.resources.order.accepted_order_resource.description');
    }
}
