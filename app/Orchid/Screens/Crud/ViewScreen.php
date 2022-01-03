<?php

namespace Orchid\Crud\Screens;

use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\CrudScreen;
use Orchid\Crud\Layouts\ResourceFields;
use Orchid\Crud\Requests\ViewRequest;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;

class ViewScreen extends CrudScreen
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Query data.
     *
     * @param ViewRequest $request
     *
     * @return array
     */
    public function query(ViewRequest $request): array
    {
        $this->model = $request->findModelOrFail();

        return [
            ResourceFields::PREFIX => $this->model,
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
            $this->actionsButtons(),

            Link::make(__('Edit'))
                ->icon('pencil')
                ->canSee($this->can('update'))
                ->route('platform.resource.edit', [
                    $this->resource::uriKey(),
                    $this
                        ->model
                        ->getKey(),
                ]),

            Button::make($this->resource::deleteButtonLabel())
                ->novalidate()
                ->confirm(__('orchid.screens.crud.delete_button.confirm'))
                ->canSee(!$this->isSoftDeleted() && $this->can('delete'))
                ->method('delete')
                ->icon('trash'),

            Button::make($this->resource::deleteButtonLabel())
                ->novalidate()
                ->confirm(__('orchid.screens.crud.force-delete_button.confirm'))
                ->canSee($this->isSoftDeleted() && $this->can('forceDelete'))
                ->method('forceDelete')
                ->icon('trash'),

            Button::make($this->resource::restoreButtonLabel())
                ->novalidate()
                ->confirm(__('orchid.screens.crud.restore_button.confirm'))
                ->canSee($this->isSoftDeleted() && $this->can('restore'))
                ->method('restore')
                ->icon('reload'),
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
            Layout::legend(ResourceFields::PREFIX, $this->resource->legend()),
        ];
    }
}
