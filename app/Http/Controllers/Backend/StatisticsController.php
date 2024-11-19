<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Demand;
use App\Models\WaterLog;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //
       $wards = Demand::all();
       $rate = WaterLog::first(); // Renamed to 'rate' for better clarity
        $ward7 = Customer::where('ward_no', 'Ward-7')->count(); // Get the count of customers in Ward-7
        $ward8 = Customer::where('ward_no', 'Ward-8')->count(); // Get the count of customers in Ward-7
        $ward15 = Customer::where('ward_no', 'Ward-15')->count(); // Get the count of customers in Ward-7
        $tole7A = Customer::where('tole', 'Tole 7A')->count();
        $tole7B= Customer::where('tole', 'Tole 7B')->count();
        $tole7C = Customer::where('tole', 'Tole 7C')->count();
        $tole8A = Customer::where('tole', 'Tole 8A')->count();
        $tole8B = Customer::where('tole', 'Tole 8B')->count();
        $tole15A = Customer::where('tole', 'Tole 15A')->count();
        $tole15B = Customer::where('tole', 'Tole 15B')->count();
        $tole15C = Customer::where('tole', 'Tole 15C')->count();
        
        return view('statistics.index', compact('wards', 'rate', 'ward7','ward8','ward15','tole7A','tole7B','tole7C','tole8A','tole8B','tole15A','tole15B','tole15C'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $wards = Demand::all();
        $rate = WaterLog::first(); // Renamed to 'rate' for better clarity
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $ward = Demand::findOrFail($id);
        // return $ward;

        return view('ward.edit', [
            'ward' => $ward,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rate = WaterLog::find($id);
    
        // Update fields only if they are present in the request
        if ($request->has('incoming_rate')) {
            $rate->incoming_rate = $request->incoming_rate;
        }
    
        if ($request->has('outgoing_rate')) {
            $rate->outgoing_rate = $request->outgoing_rate;
        }
    
        $rate->update();
    
        return redirect()->back()->with('success', 'Rate updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
 
}
