<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Inbox;
use App\Models\WaterLog;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class WaterLogController extends Controller
{
    public function updateWaterLog()
{
    // Get the latest water log (assuming only one tank)
    $waterLog = WaterLog::first();

    // Calculate the new level
    $newLevel = $waterLog->current_level + $waterLog->incoming_rate - $waterLog->outgoing_rate;

    // Ensure it does not exceed capacity or fall below zero
    $newLevel = max(0, min($newLevel, $waterLog->capacity));

    // Update the water log with the new level
    $waterLog->current_level = $newLevel;
    $waterLog->save();

    // dashboard other info
    $customers= Customer::count();
    $employees= Employee::count();

    // No of enquiries
    $enquiries=Inbox::count();

     // Calculate the total sum of the 'total_amount' column
     $totalAmount = Bill::sum('total_amount');


    return response()->json([
        'current_level' => $newLevel,
        'incoming_rate' =>$waterLog->incoming_rate,
        'outgoing_rate' =>$waterLog->outgoing_rate,
        'customers' => $customers,
        'employees' => $employees,
        'total_amount' => $totalAmount,
        'enquiries'=>$enquiries,
    ]);
}
}
