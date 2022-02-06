<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

Route::screen('/main', \App\Orchid\Screens\PlatformScreen::class)->name('platform.main');

Route::screen('profile', \App\Orchid\Screens\User\UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('routes.platform.profile.index'), route('platform.profile'));
    });

Route::screen('users/{user}/edit', \App\Orchid\Screens\User\UserEditScreen::class)->name('platform.systems.users.edit');

Route::screen('users/create', \App\Orchid\Screens\User\UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('routes.platform.users.create'), route('platform.systems.users.create'));
    });

Route::screen('users', \App\Orchid\Screens\User\UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('routes.platform.users.index'), route('platform.systems.users'));
    });

Route::screen('roles/{roles}/edit', \App\Orchid\Screens\Role\RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(function (Trail $trail, $role) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('routes.platform.roles.edit'), route('platform.systems.roles.edit', $role));
    });

Route::screen('roles/create', \App\Orchid\Screens\Role\RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('routes.platform.roles.create'), route('platform.systems.roles.create'));
    });

Route::screen('roles', \App\Orchid\Screens\Role\RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('routes.platform.roles.index'), route('platform.systems.roles'));
    });
