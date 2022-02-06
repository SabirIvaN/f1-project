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
                ->title(__('app.orchid.layouts.role.role_edit_layout.fields.name.title'))
                ->placeholder(__('app.orchid.layouts.role.role_edit_layout.fields.name.placeholder'))
                ->help(__('app.orchid.layouts.role.role_edit_layout.fields.name.help')),

            Input::make('role.slug')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('app.orchid.layouts.role.role_edit_layout.fields.slug.title'))
                ->placeholder(__('app.orchid.layouts.role.role_edit_layout.fields.slug.placeholder'))
                ->help(__('app.orchid.layouts.role.role_edit_layout.fields.slug.help')),
        ];
    }
}
