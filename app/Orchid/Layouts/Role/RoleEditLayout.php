<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Role;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class RoleEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('role.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('orchid.layouts.role.edit.name.title'))
                ->placeholder(__('orchid.layouts.role.edit.name.placeholder'))
                ->help(__('orchid.layouts.role.edit.name.help')),

            Input::make('role.slug')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('orchid.layouts.role.edit.slug.title'))
                ->placeholder(__('orchid.layouts.role.edit.slug.placeholder'))
                ->help(__('orchid.layouts.role.edit.slug.help')),
        ];
    }
}
