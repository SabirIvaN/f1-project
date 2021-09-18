<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use Notifiable;

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
