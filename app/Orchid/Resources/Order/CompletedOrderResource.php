<?php

namespace App\Orchid\Resources\Order;

use App\Orchid\Actions\Order\RenewingAction;
use App\Orchid\Filters\Order\CompletedOrderFilter;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
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
        return [
            Input::make('name')
                ->title(__('orchid.resources.order.fields.name.title'))
                ->placeholder(__('orchid.resources.order.fields.name.placeholder')),

            Input::make('phone')
                ->title(__('orchid.resources.order.fields.phone.title'))
                ->placeholder(__('orchid.resources.order.fields.phone.placeholder'))
                ->mask('+7 (999) 999-9999'),

            Input::make('email')
                ->type('email')
                ->title(__('orchid.resources.order.fields.email.title'))
                ->placeholder(__('orchid.resources.order.fields.email.placeholder')),

            Input::make('address')
                ->title(__('orchid.resources.order.fields.address.title'))
                ->placeholder(__('orchid.resources.order.fields.address.placeholder')),

            TextArea::make('comment')
                ->title(__('orchid.resources.order.fields.comment.title'))
                ->placeholder(__('orchid.resources.order.fields.comment.placeholder')),

            Select::make('completed')
                ->options([
                    1 => __('orchid.resources.order.fields.completed.options.truth.title'),
                    0 => __('orchid.resources.order.fields.completed.options.false.title'),
                ])
                ->title(__('orchid.resources.order.fields.completed.title')),
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
            TD::make('name', __('orchid.resources.order.columns.name.title')),

            TD::make('service', __('orchid.resources.order.columns.service.title'))->render(function ($order) {
                return $order
                    ->services[0]
                    ->name;
            }),

            TD::make('price', __('orchid.resources.order.columns.price.title'))->render(function ($order) {
                return $order
                    ->services[0]
                    ->price . __('orchid.resources.order.columns.price.currency');
            }),

            TD::make('created_at', __('orchid.resources.order.columns.created_at.title'))->render(function ($model) {
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
            Sight::make('name', __('orchid.resources.order.legend.name.title')),

            Sight::make('phone', __('orchid.resources.order.legend.phone.title')),

            Sight::make('email', __('orchid.resources.order.legend.email.title')),

            Sight::make('address', __('orchid.resources.order.legend.address.title'))->render(function ($order) {
                return $order
                    ->cities[0]
                    ->name . ', ' . $order->address;
            }),

            Sight::make('service', __('orchid.resources.order.legend.service.title'))->render(function ($order) {
                return $order
                    ->services[0]
                    ->name;
            }),

            Sight::make('price', __('orchid.resources.order.legend.price.title'))->render(function ($order) {
                return $order
                    ->services[0]
                    ->price . __('orchid.resources.order.legend.price.currency');
            }),

            Sight::make('comment', __('orchid.resources.order.legend.comment.title')),

            Sight::make('completed', __('orchid.resources.order.legend.completed.title'))->render(function ($order) {
                return ($order->completed == true)
                    ? __('orchid.resources.order.legend.completed.options.truth.title')
                    : __('orchid.resources.order.legend.completed.options.false.title');
            }),

            Sight::make('created_at', _('orchid.resources.order.legend.created_at.title'))->render(function ($model) {
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
            new CompletedOrderFilter(),
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
            new RenewingAction(),
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
        return __('orchid.resources.order.completed_order.title');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel(): string
    {
        return __('orchid.resources.order.completed_order.title');
    }

    /**
     * Get the text for the create resource button.
     *
     * @return string|null
     */
    public static function createButtonLabel(): string
    {
        return __('orchid.resources.button.create_button.label.title');
    }

    /**
     * Get the text for the create resource toast.
     *
     * @return string
     */
    public static function createToastMessage(): string
    {
        return __('orchid.resources.order.create_toast.message.title');
    }

    /**
     * Get the text for the update resource button.
     *
     * @return string
     */
    public static function updateButtonLabel(): string
    {
        return __('orchid.resources.button.update_button.label.title');
    }

    /**
     * Get the text for the update resource toast.
     *
     * @return string
     */
    public static function updateToastMessage(): string
    {
        return __('orchid.resources.order.update_toast.message.title');
    }

    /**
     * Get the text for the delete resource button.
     *
     * @return string
     */
    public static function deleteButtonLabel(): string
    {
        return __('orchid.resources.button.delete_button.label.title');
    }

    /**
     * Get the text for the delete resource toast.
     *
     * @return string
     */
    public static function deleteToastMessage(): string
    {
        return __('orchid.resources.order.delete_toast.message.title');
    }

    /**
     * Get the text for the save resource button.
     *
     * @return string
     */
    public static function saveButtonLabel(): string
    {
        return __('orchid.resources.button.save_button.label.title');
    }

    /**
     * Get the text for the restore resource button.
     *
     * @return string
     */
    public static function restoreButtonLabel(): string
    {
        return __('orchid.resources.button.restore_button.label.title');
    }

    /**
     * Get the text for the restore resource toast.
     *
     * @return string
     */
    public static function restoreToastMessage(): string
    {
        return __('orchid.resources.order.restore_toast.message.title');
    }

    /**
     * Get the text for the create breadcrumbs.
     *
     * @return string
     */
    public static function createBreadcrumbsMessage(): string
    {
        return __('orchid.resources.breadcrumbs.create_breadcrumbs.message.title');
    }

    /**
     * Get the text for the edit breadcrumbs.
     *
     * @return string
     */
    public static function editBreadcrumbsMessage(): string
    {
        return __('orchid.resources.breadcrumbs.edit_breadcrumbs.message.title');
    }

    /**
     * Get the descriptions for the screen.
     *
     * @return null|string
     */
    public static function description(): ?string
    {
        return _('orchid.resources.order.completed_order.description');
    }
}
