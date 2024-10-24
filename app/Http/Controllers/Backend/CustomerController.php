<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

        // Sample tole data that could be fetched from a database or configuration
        protected $toleData = [
            "Ward-7" => ["Tole 7A", "Tole 7B", "Tole 7C"],
            "Ward-8" => ["Tole 8A", "Tole 8B"],
            "Ward-15" => ["Tole 15A", "Tole 15B", "Tole 15C"]
        ];
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
       // Retrieve the customer by ID
       $customer = Customer::findOrFail($id);

       // Pass the customer and tole data to the view
       return view('customer.edit', [
           'customer' => $customer,
           'toleData' => $this->toleData
       ]);
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
        return $id;
    }
}
