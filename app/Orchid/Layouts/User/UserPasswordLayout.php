<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Platform\Models\User;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Layouts\Rows;

class UserPasswordLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        /** @var User $user */
        $user = $this
            ->query
            ->get('user');

        $placeholder = $user->exists
            ? __('app.orchid.layouts.user.user_password_layout.fields.placeholder.current_password')
            : __('app.orchid.layouts.user.user_password_layout.fields.placeholder.new_password');

        return [
            Password::make('user.password')
                ->placeholder($placeholder)
                ->title(__('app.orchid.layouts.user.user_password_layout.fields.title')),
        ];
    }
}
