<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Customers as CustomersResource;
use App\Http\Resources\Customer as CustomerResource;
use App\Model\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(10);
        return (new CustomersResource($customers))
            ->response()
            ->setStatusCode(200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'id_card' => 'required',
            'address' => 'required',
        ]);

        $customer = Customer::create($request->all());

        return (new CustomerResource($customer))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);

        return (new CustomerResource($customer))
            ->response()
            ->setStatusCode(200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'id_card' => 'required',
            'address' => 'required',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return (new CustomerResource($customer))
            ->response()
            ->setStatusCode(200);
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json([
            'status' => 'Success deleted customer'
        ]);
    }
}
