<?php

namespace App\Orchid\Layouts\User;

use App\Models\Position;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layouts\Rows;

class UserPositionLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Relation::make('user.position_id')
                ->fromModel(Position::class, 'name')
                ->title(__('orchid.layouts.user.position.relation.title'))
                ->help(__('orchid.layouts.user.position.relation.help')),
        ];
    }
}
