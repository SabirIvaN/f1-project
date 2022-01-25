<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class UserListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'users';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', __('app.orchid.layouts.user.user_list_layout.columns.name.header'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (User $user) {
                    return new Persona($user->presenter());
                }),

            TD::make('email', __('app.orchid.layouts.user.user_list_layout.columns.email.header'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (User $user) {
                    return ModalToggle::make($user->email)
                        ->modal('oneAsyncModal')
                        ->modalTitle($user->presenter()->title())
                        ->method('saveUser')
                        ->asyncParameters(['user' => $user->id,]);
                }),

            TD::make('updated_at', __('app.orchid.layouts.user.user_list_layout.columns.updated_at.header'))
                ->sort()
                ->render(function (User $user) {
                    return $user->updated_at->toDateTimeString();
                }),

            TD::make(__('app.orchid.layouts.user.user_list_layout.columns.actions.header'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (User $user) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('app.orchid.layouts.user.user_list_layout.columns.actions.list.edit.header'))
                                ->route('platform.systems.users.edit', $user->id)
                                ->icon('pencil'),
                            Button::make(__('app.orchid.layouts.user.user_list_layout.columns.actions.list.delete.header'))
                                ->icon('trash')
                                ->confirm(__('app.orchid.layouts.user.user_list_layout.columns.actions.list.delete.confirm'))
                                ->method('remove', ['id' => $user->id]),
                        ]);
                }),
        ];
    }
}
