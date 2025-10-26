<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_id' => Model::inRandomOrder()->first()->id,
            'price' => $this->faker->randomFloat(2,5,1000),
            'car_type' => CarType::inRandomOrder()->first()->id,
            'Vin' =>  strtoupper(Str::random(17)),
            'fuel_type' => FuelType::inRandomOrder()->first()->id,
            'mileage' => ((int)($this->faker->randomFloat(5,500,1000))) * 1000,
            'year' => $this->faker->year(),
            'description' => $this->faker->text(),
            'user_id' => User::inRandomOrder()->first()->id,
            'city_id' => City::inRandomOrder()->first()->id,
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(1,2),
            'published_at' => now()
        ];
    }
}
