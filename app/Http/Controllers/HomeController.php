<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Governorate;
use App\Models\Maker;
use App\Models\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::with(['city','maker','model','type','fuel'])
            ->orderBy('published_at', 'desc')->limit(30)->paginate(30);
        $makers = Maker::all();
        $models = Model::all();
        $governorates = Governorate::all();
        $cities = City::all();
        $types = CarType::all();
        $fuel = FuelType::all();
        return view('index', compact('cars','makers','models','governorates','cities','types','fuel'));
    }
}
