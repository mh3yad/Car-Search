<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends EloquentModel
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

    public function features() : HasOne
    {
        return $this->hasOne(CarFeatures::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(CarType::class,'car_type');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function fuel(): BelongsTo
    {
        return $this->belongsTo(FuelType::class,'fuel_type');
    }

    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(Model::class);
    }

    public function favouredCars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class,'favourite_cars','user_id','car_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getCreateData(): string
    {
        return (new \Carbon\Carbon($this->created_at))->format('Y-m-d');
    }
}
