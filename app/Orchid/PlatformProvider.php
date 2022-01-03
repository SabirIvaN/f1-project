<?php

declare(strict_types=1);

namespace App\Orchid;

use Illuminate\Support\Facades\URL;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make(__('orchid.platform.main_menu.accepted-order.header'))
                ->icon('folder')
                ->url(URL::route('platform.index') . '/crud/list/accepted-order-resources')
                ->title(__('orchid.platform.main_menu.accepted-order.title')),

            Menu::make(__('orchid.platform.main_menu.completed-order.header'))
                ->icon('folder-alt')
                ->url(URL::route('platform.index') . '/crud/list/completed-order-resources'),

            Menu::make(__('orchid.platform.main_menu.city.header'))
                ->icon('map')
                ->url(URL::route('platform.index') . '/crud/list/city-resources')
                ->title(__('orchid.platform.main_menu.service.title')),

            Menu::make(__('orchid.platform.main_menu.service.header'))
                ->icon('briefcase')
                ->url(URL::route('platform.index') . '/crud/list/service-resources'),

            Menu::make(__('orchid.platform.main_menu.user.header'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('orchid.platform.main_menu.user.title')),

            Menu::make(__('orchid.platform.main_menu.position.header'))
                ->icon('eyeglasses')
                ->url(URL::route('platform.index') . '/crud/list/position-resources'),

            Menu::make(__('orchid.platform.main_menu.role.header'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make(__('orchid.platform.profile_menu.header'))
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('orchid.platform.permissions.header'))
                ->addPermission('platform.systems.roles', __('orchid.platform.permissions.roles.header'))
                ->addPermission('platform.systems.users', __('orchid.platform.permissions.users.header')),
        ];
    }
}
