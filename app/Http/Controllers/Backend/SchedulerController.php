<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Routine;
use App\Models\Schedule;
use Illuminate\Http\Request;

class SchedulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photo = Routine::latest()->first();
        $schedules = Schedule::all();
        return view('schedule.index', compact('photo','schedules'));
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
        $schedule = new Schedule();
        $schedule->ward= $request->ward;
        $schedule->tole= $request->tole;
        $schedule->from= $request->from;
        $schedule->to= $request->to;
        $schedule->save();
        return redirect()->back()->with('success', 'Schedule created successfully');

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
        $schedule = Schedule::find($id);
        // return $schedule;
        return view('schedule.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $schedule = Schedule::find($id);
        $schedule->to=$request->to;
        $schedule->from=$request->from;
        $schedule->update();
        return redirect()->route('schedule.index')->with('success', 'Schedule updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
