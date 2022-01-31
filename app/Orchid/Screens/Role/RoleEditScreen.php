<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Role;

use App\Orchid\Layouts\Role\RoleEditLayout;
use App\Orchid\Layouts\Role\RolePermissionLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class RoleEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Управление ролями';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Права доступа';

    /**
     * @var string
     */
    public $permission = 'platform.systems.roles';

    /**
     * @var bool
     */
    private $exist = false;

    /**
     * Query data.
     *
     * @param Role $role
     *
     * @return array
     */
    public function query(Role $role): array
    {
        $this->exist = $role->exists;

        return [
            'role'       => $role,
            'permission' => $role->getStatusPermission(),
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
            Button::make(__('app.orchid.screens.role.role_edit_screen.command_bar.save.header'))
                ->icon('check')
                ->method('save'),

            Button::make(__('app.orchid.screens.role.role_edit_screen.command_bar.remove.header'))
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exist),
        ];
    }

    /**
     * Views.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::block([RoleEditLayout::class])
                ->title(__('app.orchid.screens.role.role_edit_screen.layout.role_edit_layout.title'))
                ->description(__('app.orchid.screens.role.role_edit_screen.layout.role_edit_layout.placeholder')),

            Layout::block([RolePermissionLayout::class])
                ->title(__('app.orchid.screens.role.role_edit_screen.layout.role_permission_layout.title'))
                ->description(__('app.orchid.screens.role.role_edit_screen.layout.role_permission_layout.description')),
        ];
    }

    /**
     * @param Role    $role
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Role $role, Request $request) {
        $request->validate([
            'role.slug' => ['required', Rule::unique(Role::class, 'slug')->ignore($role)],
        ]);
        $role->fill($request->get('role'));
        $role->permissions = collect($request->get('permissions'))
            ->map(function ($value, $key) {
                return [base64_decode($key) => $value];
            })
            ->collapse()
            ->toArray();
        $role->save();

        Toast::info(__('app.orchid.screens.role.role_edit_screen.save.toast'));

        return redirect()->route('platform.systems.roles');
    }

    /**
     * @param Role $role
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Role $role)
    {
        $role->delete();

        Toast::info(__('app.orchid.screens.role.role_edit_screen.remove.toast'));

        return redirect()->route('platform.systems.roles');
    }
}
