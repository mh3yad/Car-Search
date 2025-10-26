<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarFeatures>
 */
class CarFeaturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_id' => Car::inRandomOrder()->first()->id,
            'abs' => $this->faker->boolean(),
            'gps_navigation' => $this->faker->boolean(),
            'leather_seats' => $this->faker->boolean(),
            'cruise_control' => $this->faker->boolean(),
            'heater_seats' => $this->faker->boolean(),
            'rear_parking_sensor' => $this->faker->boolean(),
            'climate_control' => $this->faker->boolean(),
            'power_windows' => $this->faker->boolean(),
            'air_conditioning' => $this->faker->boolean(),
            'bluetooth_connectivity' => $this->faker->boolean(),
            'power_door_locks' => $this->faker->boolean(),
        ];
    }
}
