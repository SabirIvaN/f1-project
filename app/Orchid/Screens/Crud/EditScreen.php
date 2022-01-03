<?php

namespace Orchid\Crud\Screens;

use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\CrudScreen;
use Orchid\Crud\Layouts\ResourceFields;
use Orchid\Crud\Requests\UpdateRequest;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;

class EditScreen extends CrudScreen
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Query data.
     *
     * @param UpdateRequest $request
     *
     * @return array
     */
    public function query(UpdateRequest $request): array
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
            Button::make($this->resource::updateButtonLabel())
                ->canSee($this->request->can('update'))
                ->method('update')
                ->icon('check')
                ->parameters([
                    '_retrieved_at' => optional($this->model->{$this->model->getUpdatedAtColumn()})->toJson(),
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
            new ResourceFields($this->resource->fields()),
        ];
    }
}
