<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarFeature extends Model
{
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
}
