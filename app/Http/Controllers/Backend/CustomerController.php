<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->customer_first_name = $request->first_name;
        $customer->customer_last_name = $request->last_name;
        $customer->meter_id = $request->meter_id;
        $customer->phone_number = $request->phone_number;
        $customer->ward_no = $request->ward_no;
        $customer->tole = $request->tole_name;
        uploadImage($request, $customer, 'customer_photo');
        $customer->save();
        return redirect()->route('customer.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "i am here";
        $customer = Customer::findOrFail($id);
        return $customer;
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
