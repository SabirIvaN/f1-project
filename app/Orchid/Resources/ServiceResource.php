<?php

namespace App\Orchid\Resources;

use App\Models\Service;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class ServiceResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Service::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [

            Input::make('name')
                ->title(__('app.orchid.resources.service_resource.fields.name.title'))
                ->placeholder(__('app.orchid.resources.service_resource.fields.name.placeholder')),

            Input::make('price')
                ->title(__('app.orchid.resources.service_resource.fields.price.title'))
                ->placeholder(__('app.orchid.resources.service_resource.fields.price.placeholder')),

            Input::make('description')
                ->title(__('app.orchid.resources.service_resource.fields.description.title'))
                ->placeholder(__('app.orchid.resources.service_resource.fields.description.placeholder')),

        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('name', __('app.orchid.resources.service_resource.columns.name.header')),

            TD::make('price', __('app.orchid.resources.service_resource.columns.price.header')),

            TD::make('description', __('app.orchid.resources.service_resource.columns.description.header')),

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
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [

            Sight::make('name', __('app.orchid.resources.service_resource.legend.name.header')),

            Sight::make('price', __('app.orchid.resources.service_resource.legend.price.header')),

            Sight::make('description', __('app.orchid.resources.service_resource.legend.description.header')),

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
        return __('app.orchid.resources.service_resource.label');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel(): string
    {
        return __('app.orchid.resources.service_resource.label');
    }

    /**
     * Get the text for the create resource button.
     *
     * @return string|null
     */
    public static function createButtonLabel(): string
    {
        return __('app.orchid.resources.service_resource.create_button_label');
    }

    /**
     * Get the text for the create resource toast.
     *
     * @return string
     */
    public static function createToastMessage(): string
    {
        return __('app.orchid.resources.service_resource.create_toast_message');
    }

    /**
     * Get the text for the update resource button.
     *
     * @return string
     */
    public static function updateButtonLabel(): string
    {
        return __('app.orchid.resources.service_resource.update_button_label');
    }

    /**
     * Get the text for the update resource toast.
     *
     * @return string
     */
    public static function updateToastMessage(): string
    {
        return __('app.orchid.resources.service_resource.update_toast_message');
    }

    /**
     * Get the text for the delete resource button.
     *
     * @return string
     */
    public static function deleteButtonLabel(): string
    {
        return __('app.orchid.resources.service_resource.delete_button_label');
    }

    /**
     * Get the text for the delete resource toast.
     *
     * @return string
     */
    public static function deleteToastMessage(): string
    {
        return __('app.orchid.resources.service_resource.delete_toast_message');
    }

    /**
     * Get the text for the save resource button.
     *
     * @return string
     */
    public static function saveButtonLabel(): string
    {
        return __('app.orchid.resources.service_resource.save_button_label');
    }

    /**
     * Get the text for the restore resource button.
     *
     * @return string
     */
    public static function restoreButtonLabel(): string
    {
        return __('app.orchid.resources.service_resource.restore_button_label');
    }

    /**
     * Get the text for the restore resource toast.
     *
     * @return string
     */
    public static function restoreToastMessage(): string
    {
        return __('app.orchid.resources.service_resource.restore_toast_message');
    }

    /**
     * Get the text for the create breadcrumbs.
     *
     * @return string
     */
    public static function createBreadcrumbsMessage(): string
    {
        return __('app.orchid.resources.service_resource.create_breadcrumbs_message');
    }

    /**
     * Get the text for the edit breadcrumbs.
     *
     * @return string
     */
    public static function editBreadcrumbsMessage(): string
    {
        return __('app.orchid.resources.service_resource.edit_breadcrumbs_message');
    }

    /**
     * Get the descriptions for the screen.
     *
     * @return null|string
     */
    public static function description(): ?string
    {
        return __('app.orchid.resources.service_resource.description');
    }
}
