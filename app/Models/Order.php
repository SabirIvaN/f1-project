<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Order extends Model
{
    use AsSource;
    use Attachable;
    use Filterable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'comment',
    ];

    /**
     * Get all of the cities that are assigned this order.
     */
    public function cities()
    {
        return $this->morphedByMany(City::class, 'orderable');
    }

    /**
     * Get all of the services that are assigned this order.
     */
    public function services()
    {
        return $this->morphedByMany(Service::class, 'orderable');
    }
}
