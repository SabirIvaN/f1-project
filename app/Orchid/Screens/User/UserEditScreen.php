<?php

declare(strict_types=1);

namespace App\Orchid\Screens\User;

use App\Models\User;
use App\Models\Position;
use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserPositionLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\UserSwitch;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class UserEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Редактировать Сотрудника';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Такие данные, как имя, адрес электронной почты и пароль';

    /**
     * @var string
     */
    public $permission = 'platform.systems.users';

    /**
     * @var User
     */
    private $user;

    /**
     * Query data.
     *
     * @param User $user
     *
     * @return array
     */
    public function query(User $user): array
    {
        $this->user = $user;

        if (!$user->exists) {
            $this->name = 'Создать сотрудника';
        }

        $user->load(['roles']);

        return [
            'user'       => $user,
            'permission' => $user->getStatusPermission(),
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make(__('orchid.screens.user.edit.command.login_as.title'))
                ->icon('login')
                ->confirm(__('orchid.screens.user.edit.command.login_as.confirm'))
                ->method('loginAs')
                ->canSee($this->user->exists && \request()->user()->id !== $this->user->id),

            Button::make(__('orchid.screens.user.edit.command.remove.title'))
                ->icon('trash')
                ->confirm(__('orchid.screens.user.edit.command.remove.confirm'))
                ->method('remove')
                ->canSee($this->user->exists),

            Button::make(__('orchid.screens.user.edit.command.save.title'))
                ->icon('check')
                ->method('save'),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [

            Layout::block(UserEditLayout::class)
                ->title(__('orchid.screens.user.edit.layout.user_edit.title'))
                ->description(__('orchid.screens.user.edit.layout.user_edit.description'))
                ->commands(
                    Button::make(__('orchid.screens.user.command.save.title'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::block(UserPasswordLayout::class)
                ->title(__('orchid.screens.user.edit.layout.user_password.title'))
                ->description(__('orchid.screens.user.edit.layout.user_password.description'))
                ->commands(
                    Button::make(__('orchid.screens.user.command.save.title'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::block(UserPositionLayout::class)
                ->title(__('orchid.screens.user.edit.layout.user_position.title'))
                ->description(__('orchid.screens.user.edit.layout.user_position.description'))
                ->commands(
                    Button::make(__('orchid.screens.user.command.save.title'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->method('save')
                ),

            Layout::block(UserRoleLayout::class)
                ->title(__('orchid.screens.user.edit.layout.user_role.title'))
                ->description(__('orchid.screens.user.edit.layout.user_role.description'))
                ->commands(
                    Button::make(__('orchid.screens.user.command.save.title'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::block(RolePermissionLayout::class)
                ->title(__('orchid.screens.role.edit.layout.role_permission.title'))
                ->description(__('orchid.screens.role.edit.layout.role_permission.description'))
                ->commands(
                    Button::make(__('orchid.screens.user.command.save.title'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

        ];
    }

    /**
     * @param User    $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(
        User $user,
        Request $request,
    ) {
        $request->validate([
            'user.email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($user),
            ],
        ]);

        $permissions = collect($request->get('permissions'))
            ->map(function ($value, $key) {
                return [
                    base64_decode($key) => $value
                ];
            })
            ->collapse()
            ->toArray();

        $userData = $request->get('user');
        if ($user->exists && (string)$userData['password'] === '') {
            unset($userData['password']);
        } else {
            $userData['password'] = Hash::make($userData['password']);
        }

        $user
            ->fill($userData)
            ->fill([
                'permissions' => $permissions,
            ]);

        $user
            ->position()
            ->associate(Position::find($userData['position_id']));

        $user->save();

        $user->replaceRoles($request->input('user.roles'));

        Toast::info(__('orchid.screens.user.edit.command.info.save'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param User $user
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(User $user)
    {
        $user->delete();

        Toast::info(__('orchid.screens.user.edit.command.info.remove'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs(User $user)
    {
        UserSwitch::loginAs($user);

        Toast::info(__('orchid.screens.user.edit.command.info.login_as'));

        return redirect()->route(config('platform.index'));
    }
}
