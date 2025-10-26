<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Governorate;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Maker::factory(5)->create();
        Model::factory(5)->create();
        CarType::factory(5)->create();
        Governorate::factory(5)->create();
        City::factory(5)->create();
        FuelType::factory(5)->create();
        Car::factory(5)->create();
        CarFeatures::factory(1)->create();
        CarImage::factory(1)->create();
    }
}
