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
            Menu::make('Поступившие заказы')
                ->icon('folder')
                ->url(URL::route('platform.index') . '/crud/list/accepted-order-resources')
                ->title(__('Заказы')),

            Menu::make('Завершенные заказы')
                ->icon('folder-alt')
                ->url(URL::route('platform.index') . '/crud/list/completed-order-resources'),

            Menu::make('Города')
                ->icon('map')
                ->url(URL::route('platform.index') . '/crud/list/city-resources')
                ->title(__('Информация об услугах')),

            Menu::make('Услуги')
                ->icon('briefcase')
                ->url(URL::route('platform.index') . '/crud/list/service-resources'),

            Menu::make(__('Сотрудники'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Информация о сотрудниках')),

            Menu::make(__('Позиции'))
                ->icon('eyeglasses')
                ->url(URL::route('platform.index') . '/crud/list/position-resources'),

            Menu::make(__('Роли'))
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
            Menu::make('Profile')
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
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
