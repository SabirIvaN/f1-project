<?php

namespace App\Orchid\Resources;

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
    public static $model = \App\Models\Service::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [

            Input::make('name')
                ->title(__('Название'))
                ->placeholder(__('Название')),

            Input::make('price')
                ->title(__('Цена'))
                ->placeholder(__('100')),

            Input::make('description')
                ->title(__('Описание'))
                ->placeholder(__('Описание')),

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
            TD::make('name', __('Название')),

            TD::make('price', __('Цена'))->render(function ($model) {
                return (string) $model->price . __('₽');
            }),

            TD::make('description', __('Описание')),
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
            Sight::make('name', __('Название')),

            Sight::make('price', __('Цена'))->render(function ($model) {
                return (string) $model->price . '₽';
            }),

            Sight::make('description', __('Описание')),
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
        return __('Услуги');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel(): string
    {
        return __('Услуги');
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
        return __('Услуга создана!');
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
        return __('Услуга обновлена!');
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
        return __('Услуга удалена!');
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
        return __('Услуга восстановлена!');
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
        return __('Услуги оказываемые компанией');
    }
}
