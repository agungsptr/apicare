<?php

namespace App\Http\Controllers;

use App\Http\Resources\Rentals as RentalsResource;
use App\Http\Resources\Rental as RentalResource;
use App\Model\Car;
use App\Model\Customer;
use App\Model\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::paginate(10);
        return (new RentalsResource($rentals))
            ->response()
            ->setStatusCode(200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required',
            'customer_id' => 'required',
            'duration' => 'required'
        ]);

        $customer_id = $request->get('customer_id');
        $car_id = $request->get('car_id');

        $customer = Customer::findOrFail($customer_id);
        $car = Car::findOrFail($car_id);

        $rental = new Rental;
        $rental->car_id = $car_id;
        $rental->customer_id = $customer_id;
        $rental->duration = $request->get('duration');
        $rental->total = $request->get('duration') * $car->rental_cost;
        $rental->save();

        return (new RentalResource($rental))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        $rental = Rental::findOrFail($id);

        return (new rentalResource($rental))
            ->response()
            ->setStatusCode(200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'car_id' => 'required',
            'customer_id' => 'required',
            'duration' => 'required'
        ]);
        $rental = Rental::findOrFail($id);

        $customer_id = $request->get('customer_id');
        $car_id = $request->get('car_id');

        $customer = Customer::findOrFail($customer_id);
        $car = Car::findOrFail($car_id);

        $rental->car_id = $car_id;
        $rental->customer_id = $customer_id;
        $rental->duration = $request->get('duration');
        $rental->total = $request->get('duration') * $car->rental_cost;
        $rental->save();

        return (new RentalResource($rental))
            ->response()
            ->setStatusCode(200);
    }

    public function delete($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->delete();

        return response()->json([
            'status' => "Success deleted rental data with id=$id"
        ]);
    }
}
