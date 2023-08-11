<?php

namespace App\Http\Controllers;

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
        return view('index', compact('employees'));
    }

    /**
     * Store a newly created resource in storage
     */
    public function create(Request $request)
    {
        $first_name = $request->post('first_name');
        $last_name = $request->post('last_name');
        $birth = $request->post('birth');
        if (!$first_name || !$last_name || !$birth) {
            return redirect()
                ->route('employee.index')
                ->with('error', 'Error. All fields are mandatory.');
        }
        Employee::create(
            $first_name,
            $last_name,
            $birth
        );
        return redirect()
            ->route('employee.index')
            ->with('success', 'New employee registered successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, $id)
    {
        echo $request->get('first_name');
        if (!Employee::edit_by_id(
            $id,
            $request->get('first_name'),
            $request->get('last_name'),
            $request->get('birth')
        )) return redirect()
            ->route('employee.index')
            ->with('error', 'Error, This employee does not exist.');
        else return redirect()
            ->route('employee.index')
            ->with('success', 'Employee, edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        if (!Employee::delete_by_id($id)) return redirect()
            ->route('employee.index')
            ->with('error', 'Error, This employee does not exist.');
        else return redirect()
            ->route('employee.index')
            ->with('success', 'Employee, edited successfully.');
    }
}
