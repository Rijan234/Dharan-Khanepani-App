<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WaterLog;
use Illuminate\Http\Request;

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

    return response()->json(['current_level' => $newLevel]);
}
}
