<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeatures extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'air_conditioning',
        'abs',
        'power_windows',
        'cruise_control',
        'power_door_locks',
        'gps_navigation',
        'bluetooth_connectivity',
        'rear_parking_sensor',
        'heater_seats',
        'climate_control',
        'leather_seats'
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
