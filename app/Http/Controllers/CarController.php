<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Governorate;
use App\Models\Maker;
use App\Models\Model;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('car.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        $makers = Maker::all();
        $models = Model::all();
        $governorates = Governorate::all();
        $cities = City::all();
        $types = CarType::all();
        $fuel = FuelType::all();
        $features =  Schema::getColumnListing('car_features');
        return view('car.create', compact('cars','makers','models','governorates','cities','types','fuel','features'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $update = $request->id ?? null;
        Car::updateOrCreate(
            ['id' => $request->id],
            [
            'maker_id' => $request->maker_id,
            'model_id' => $request->model_id,
            'year' => $request->year,
            'car_type' => $request->car_type,
            'city_id' => $request->city_id,
            'price' => $request->price,
            'published_at' => $request->published ? now() : null,
            'description' => $request->description,
            'mileage' => $request->mileage,
            'fuel_type' => $request->fuel_type,
            'phone' => $request->phone,
            'address' => $request->address,
            'vin' => $request->vin,
            'user_id' => session('user_id'),
        ]);
        $message = $update ? 'Car updated successfully.' : 'Car created successfully.';
        session()->flash('success', $message);
        return redirect()->route('car.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view("car.show", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        Car::destroy($car);
        session()->flash('success', 'Car deleted successfully');
        return redirect()->route('car.index');
    }

    public function search(Request $request)
    {
        $query = Car::orderBy('published_at', 'desc');
        $carsCount = $query->count();
        $cars = $query->limit(30)->get();
        $makers = Maker::all();
        $models = Model::all();
        $governorates = Governorate::all();
        $cities = City::all();
        $types = CarType::all();
        $fuel = FuelType::all();
        return view('car.search', compact('cars','carsCount','makers','models','governorates','cities','types','fuel'));
    }
}
