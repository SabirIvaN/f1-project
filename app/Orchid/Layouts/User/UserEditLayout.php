<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class UserEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('user.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('app.orchid.layouts.user.user_edit_layout.fields.name.title'))
                ->placeholder(__('app.orchid.layouts.user.user_edit_layout.fields.name.placeholder')),

            Input::make('user.email')
                ->type('email')
                ->required()
                ->title(__('app.orchid.layouts.user.user_edit_layout.fields.email.title'))
                ->placeholder(__('app.orchid.layouts.user.user_edit_layout.fields.email.placeholder')),
        ];
    }
}
