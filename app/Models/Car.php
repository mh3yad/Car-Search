<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'car_type',
        'fuel_type',
        'mileage',
        'price',
        'address',
        'city_id',
        'user_id',
        'Vin',
        'phone',
        'published_at',
        'description',
    ];
}
