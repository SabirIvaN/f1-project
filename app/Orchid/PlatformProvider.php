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
            Menu::make(__('app.orchid.platform_provider.register_main_menu.accepted_order.header'))
                ->icon('folder')
                ->url(URL::route('platform.index') . '/crud/list/accepted-order-resources')
                ->title(__('app.orchid.platform_provider.register_main_menu.accepted_order.title')),

            Menu::make(__('app.orchid.platform_provider.register_main_menu.completed_order.header'))
                ->icon('folder-alt')
                ->url(URL::route('platform.index') . '/crud/list/completed-order-resources'),

            Menu::make(__('app.orchid.platform_provider.register_main_menu.city.header'))
                ->icon('map')
                ->url(URL::route('platform.index') . '/crud/list/city-resources')
                ->title(__('app.orchid.platform_provider.register_main_menu.city.title')),

            Menu::make(__('app.orchid.platform_provider.register_main_menu.service.header'))
                ->icon('list')
                ->url(URL::route('platform.index') . '/crud/list/service-resources'),

            Menu::make(__('app.orchid.platform_provider.register_main_menu.user.header'))
                ->icon('people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('app.orchid.platform_provider.register_main_menu.user.title')),

            Menu::make(__('app.orchid.platform_provider.register_main_menu.position.header'))
                ->icon('eyeglasses')
                ->url(URL::route('platform.index') . '/crud/list/position-resources'),

            Menu::make(__('app.orchid.platform_provider.register_main_menu.roles.header'))
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
            Menu::make(__('app.orchid.platform_provider.register_profile_menu.profile_menu.header'))
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
            ItemPermission::group(__('app.orchid.platform_provider.register_permissions.permissions.header'))
                ->addPermission('platform.systems.roles', __('app.orchid.platform_provider.register_permissions.permissions.roles.header'))
                ->addPermission('platform.systems.users', __('app.orchid.platform_provider.register_permissions.permissions.users.header')),
        ];
    }
}
