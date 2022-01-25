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
                ->title(__('app.orchid.layouts.user.user_position_layout.fields.position_id.title'))
                ->help(__('app.orchid.layouts.user.user_position_layout.fields.position_id.help')),
        ];
    }
}
