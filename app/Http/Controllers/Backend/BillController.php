<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Customer;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $bills = Bill::all();
        $bills = Bill::with('customers')->get();
        // $customers = Customer::all();
        $no_of_bills = Bill::count() + 1;
        $currentDate = now()->format('Y-m-d');
        return view('billing.index', compact('no_of_bills', 'currentDate','bills'));
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
        $bill = new Bill();
        $bill->customer_id = $request->customer_id;
        $bill->bill_no = $request->bill_no;
        $bill->meter_id = $request->meter_id;
        $bill->reading_date = $request->reading_date;
        $bill->reading_value = $request->reading_value;
        $bill->previous_reading = $request->previous_reading;
        // Remove "Rs " from total_amount if present
    $bill->total_amount = preg_replace('/[^\d.]/', '', $request->total_amount);


        $bill->save();
        return redirect()->back()->with('success', 'Bill was created successfully');

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
        //
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
