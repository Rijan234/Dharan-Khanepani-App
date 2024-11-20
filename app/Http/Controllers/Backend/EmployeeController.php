<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
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
        $employee = new Employee();
        $employee->employee_first_name = $request->first_name;
        $employee->employee_last_name = $request->last_name;
        $employee->phone_number = $request->phone_number;
        $employee->address = $request->address;
        $employee->position = $request->position;
        

        // Handle file upload for employee photo
        if ($request->hasFile('employee_photo')) {
            uploadImage($request, $employee, 'employee_photo');
        }

        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        // return $employee;

        return view('employee.edit', [
            'employee' => $employee,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);

        // Update fields
        $employee->employee_first_name = $request->first_name;
        $employee->employee_last_name = $request->last_name;
        $employee->address = $request->address;
        $employee->phone_number = $request->phone_number;
        $employee->position = $request->position;

        // Handle photo update if a new file is uploaded
        if ($request->hasFile('employee_photo')) {
            // Delete old photo if exists
          unlink($employee->employee_photo);
            // Store new photo
            uploadImage($request, $employee, 'employee_photo');
        }

        $employee->update();
        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);


        $employee->delete();
        if(file_exists($employee->employee_photo)){
            unlink($employee->employee_photo);
        }
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }

   
}
