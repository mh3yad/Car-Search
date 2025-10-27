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
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $makers = [
            'Toyota' => ['Corolla', 'Camry', 'Hilux', 'Land Cruiser', 'RAV4'],
            'Ford' => ['Focus', 'Mustang', 'F-150', 'Explorer', 'Fusion'],
            'Chevrolet' => ['Malibu', 'Impala', 'Silverado', 'Equinox', 'Traverse'],
            'BMW' => ['3 Series', '5 Series', 'X5', 'X3', '7 Series'],
            'Mercedes-Benz' => ['A-Class', 'C-Class', 'E-Class', 'S-Class', 'GLC'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Fit'],
            'Nissan' => ['Altima', 'Maxima', 'Sentra', 'Pathfinder', 'Rogue'],
            'Audi' => ['A3', 'A4', 'Q5', 'Q7', 'A8'],
            'Volkswagen' => ['Golf', 'Passat', 'Jetta', 'Tiguan', 'Atlas'],
            'Hyundai' => ['Elantra', 'Sonata', 'Tucson', 'Santa Fe', 'Kona'],
        ];
        foreach ($makers as $maker => $models) {
            Maker::factory()->state(["name" => $maker])
            ->has(
                Model::factory()->count(count($models))
                    ->sequence(...array_map(fn ($model) => ["name" => $model], $models),
                )
            )->create();
        }

        // List of car types (as associative arrays)
        $types = [
            ['name' => 'Sedan'],
            ['name' => 'SUV'],
            ['name' => 'Coupe'],
            ['name' => 'Hatchback'],
            ['name' => 'Convertible'],
        ];
        CarType::factory()->sequence(...$types)->count(5)->create();

        $governorates = [
            'Cairo' => [
                'Nasr City',
                'Heliopolis',
                'Maadi',
                'Zamalek',
                'Shubra',
            ],
            'Giza' => [
                'Dokki',
                'Mohandessin',
                '6th of October',
                'Sheikh Zayed',
                'Haram',
            ],
            'Alexandria' => [
                'Smouha',
                'Miami',
                'Sidi Gaber',
                'Stanley',
                'Montazah',
            ],
            'Dakahlia' => [
                'Mansoura',
                'Mit Ghamr',
                'Talkha',
                'Dekernes',
                'Aga',
            ],
            'Sharqia' => [
                'Zagazig',
                'Abu Kabir',
                'Bilbeis',
                'Minya al-Qamh',
                'Hehia',
            ],
            'Qalyubia' => [
                'Banha',
                'Shubra El Kheima',
                'Kafr Shukr',
                'Qalyub',
                'Tukh',
            ],
            'Gharbia' => [
                'Tanta',
                'El Mahalla El Kubra',
                'Zefta',
                'Samanoud',
                'Kafr El Zayat',
            ],
            'Monufia' => [
                'Shebin El-Kom',
                'Ashmoun',
                'Menouf',
                'Tala',
                'Sadat City',
            ],
            'Beheira' => [
                'Damanhour',
                'Kafr El Dawwar',
                'Rashid',
                'Edfina',
                'Etay El Baroud',
            ],
            'Kafr El Sheikh' => [
                'Kafr El Sheikh',
                'Desouk',
                'Baltim',
                'Sidi Salem',
                'Fouh',
            ],
            'Ismailia' => [
                'Ismailia City',
                'Fayed',
                'El Qantara',
                'Abu Suweir',
                'Tal El Kebir',
            ],
            'Suez' => [
                'Suez City',
                'Ataqah',
                'Arbaeen',
                'Ganayen',
                'Faisal District',
            ],
            'Port Said' => [
                'Port Fouad',
                'El Manakh',
                'El Arab',
                'El Dawahy',
                'El Sharq',
            ],
            'Fayoum' => [
                'Fayoum City',
                'Tamiya',
                'Ibsheway',
                'Sinnuris',
                'Yusuf al-Siddiq',
            ],
            'Beni Suef' => [
                'Beni Suef City',
                'Ehnasia',
                'Nasser',
                'Beba',
                'Fashn',
            ],
            'Minya' => [
                'Minya City',
                'Mallawi',
                'Samalut',
                'Abu Qurqas',
                'Matay',
            ],
            'Assiut' => [
                'Assiut City',
                'Abnoub',
                'Dairut',
                'El Badari',
                'Manfalut',
            ],
            'Sohag' => [
                'Sohag City',
                'Akhmim',
                'Girga',
                'Tahta',
                'Tima',
            ],
            'Qena' => [
                'Qena City',
                'Nag Hammadi',
                'Deshna',
                'Qus',
                'Abu Tesht',
            ],
            'Aswan' => [
                'Aswan City',
                'Edfu',
                'Kom Ombo',
                'Daraw',
                'Abu Simbel',
            ],
        ];
        foreach ($governorates as $governorate => $cities) {
            Governorate::factory()->state([
                'name' => $governorate,
            ])->has(City::factory()
                ->count(count($cities))
                ->sequence(...array_map(fn ($city) => ['name' => $city], $cities))
            )->create();
        }

        // List of fuel types (as associative arrays)
        $fuelTypes = [
            ['name' => 'Petrol'],
            ['name' => 'Diesel'],
            ['name' => 'Electric'],
            ['name' => 'Hybrid'],
            ['name' => 'LPG'],
        ];
        FuelType::factory()->sequence(...$fuelTypes)->count(5)->create();

        User::factory(3)->create();

        User::factory(3)
            ->has(
                Car::factory()->count(50)
                    ->hasFeatures()
                    ->has(
                        CarImage::factory()->count(5)->sequence(
                           fn(Sequence $sequence) => ['position' => ($sequence->index) %5 +1]
                        ),'images'
                    ),
                'favouriteCars'
            )->create();
    }
}
