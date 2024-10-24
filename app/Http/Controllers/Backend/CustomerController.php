<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        

        // Handle file upload for customer photo
        if ($request->hasFile('customer_photo')) {
            uploadImage($request, $customer, 'customer_photo');
        }

        $customer->save();
        return redirect()->route('customer.index')->with('success', 'Customer created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        // return $customer;

        return view('customer.edit', [
            'customer' => $customer,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);

        // Update fields
        $customer->customer_first_name = $request->first_name;
        $customer->customer_last_name = $request->last_name;
        $customer->meter_id = $request->meter_id;
        $customer->phone_number = $request->phone_number;
        $customer->ward_no = $request->ward_no;
        $customer->tole = $request->tole_name;

        // Handle photo update if a new file is uploaded
        if ($request->hasFile('customer_photo')) {
            // Delete old photo if exists
          unlink($customer->customer_photo);
            // Store new photo
            uploadImage($request, $customer, 'customer_photo');
        }

        $customer->update();
        return redirect()->route('customer.index')->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);

        // Delete customer photo if it exists
        if ($customer->customer_photo && Storage::disk('public')->exists($customer->customer_photo)) {
            Storage::disk('public')->delete($customer->customer_photo);
        }

        $customer->delete();
        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
    }

    public function show(string $id) {
        $customer = Customer::findOrFail($id);
        return view('customer.show', compact('customer'));
    }
}
