<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service_id',
        'city_id',
        'name',
        'phone',
        'email',
        'address',
        'comment',
    ];

    /**
     * Get the service that owns the comment.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Get the city that owns the comment.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
