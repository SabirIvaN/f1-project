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
                ->title(__('orchid.layouts.user.profile_password.old_password.title'))
                ->placeholder(__('orchid.layouts.user.profile_password.old_password.placeholder'))
                ->help(__('orchid.layouts.user.profile_password.old_password.help')),

            Password::make('password')
                ->placeholder(__('orchid.layouts.user.profile_password.new_password.placeholder'))
                ->title(__('orchid.layouts.user.profile_password.new_password.title')),

            Password::make('password_confirmation')
                ->placeholder(__('orchid.layouts.user.profile_password.password_confirmation.placeholder'))
                ->title(__('orchid.layouts.user.profile_password.password_confirmation.title'))
                ->help(__('orchid.layouts.user.profile_password.password_confirmation.help')),
        ];
    }
}
