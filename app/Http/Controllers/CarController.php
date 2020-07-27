<?php

namespace App\Http\Controllers;

use App\Model\Car;
use Illuminate\Http\Request;
use App\Http\Resources\Cars as CarsResource;
use App\Http\Resources\Car as CarResource;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(10);
        return (new CarsResource($cars))
            ->response()
            ->setStatusCode(200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'vehicle_registration_number' => 'required',
            'capacity' => 'required',
            'brand' => 'required',
            'rental_cost' => 'required',
        ]);

        $car = Car::create($request->all());

        return (new CarResource($car))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);

        return (new CarResource($car))
            ->response()
            ->setStatusCode(200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'vehicle_registration_number' => 'required',
            'capacity' => 'required',
            'brand' => 'required',
            'rental_cost' => 'required',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return (new CarResource($car))
            ->response()
            ->setStatusCode(200);
    }

    public function delete($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return response()->json([
            'status' => 'Success deleted car'
        ]);
    }
}
