<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){
        return view('employee.index');
    }


public function store(Request $request)
{
            $validated = $request->validate([

                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'gender' => 'required',
                'dob' => 'required|date',
                'marital_status' => 'required',
                'guardian_name' => 'required',
                'joining_date' => 'required|date',
                'reporting_manager' => 'required',
                'additional_manager' => 'nullable',
                'job_role' => 'required',
                'company' => 'required',
                'location' => 'required',
                'department' => 'required',
                'adhar_num' => 'required',
                'name_as_per_adhar' => 'required',
                'pan_num' => 'required',
                'name_as_per_pan' => 'required',
                'emp_type' => 'required',
                'nationality' => 'required',

            ]);

    // profile photo upload

    if ($request->hasFile('profile_photo')) {

        $validated['profile_photo'] = $request
            ->file('profile_photo')
            ->store('employees', 'public');
    }

    Employee::create($validated);

    return back()->with('success', 'Employee Added Successfully');
}


public function add(){
    return view('employee.add');
}
}
