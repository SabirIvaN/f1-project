<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PlatformScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Начало работы';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Добро пожаловать в Панель управления.';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            //
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make(__('Веб-сайт'))
                ->route('welcome.show')
                ->icon('globe-alt'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::view('platform::partials.welcome'),
        ];
    }
}
