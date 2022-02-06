<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Layouts\Rows;

class ProfilePasswordLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Password::make('old_password')
                ->title(__('app.orchid.layouts.user.profile_password_layout.fields.old_password.title'))
                ->placeholder(__('app.orchid.layouts.user.profile_password_layout.fields.old_password.placeholder'))
                ->help(__('app.orchid.layouts.user.profile_password_layout.fields.old_password.help')),

            Password::make('password')
                ->placeholder(__('app.orchid.layouts.user.profile_password_layout.fields.password.placeholder'))
                ->title(__('app.orchid.layouts.user.profile_password_layout.fields.password.title')),

            Password::make('password_confirmation')
                ->placeholder(__('app.orchid.layouts.user.profile_password_layout.fields.password_confirmation.placeholder'))
                ->title(__('app.orchid.layouts.user.profile_password_layout.fields.password_confirmation.title'))
                ->help(__('app.orchid.layouts.user.profile_password_layout.fields.password_confirmation.help')),
        ];
    }
}
