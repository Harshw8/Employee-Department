<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\SubDepartment;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('id', 'DESC')->get();
        return view('backend.employee_list', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('backend.employee_create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'department_id' => $request->department_id,
            'subdepartment_id' => $request->subdepartment_id,
            'salary' => $request->salary,
            'profile_image' => Storage::disk('public')->putFile('profile_images', $request->profile_image),
            'gender' => $request->gender ? true : false,
            'birth_date' => $request->birth_date,
        ];

        $employee = Employee::create($data);
        return redirect()->route('employee_list')->with('success', 'Employee created successfully');
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $subdepartments = SubDepartment::where('department_id', $employee->department_id)->get();
        return view('backend.employee_edit', compact('employee', 'departments', 'subdepartments'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->department_id = $request->department_id;
        $employee->subdepartment_id = $request->subdepartment_id;
        $employee->salary = $request->salary;
        if($request->profile_image){
            $employee->profile_image = Storage::disk('public')->putFile('profile_images', $request->profile_image);
        }
        $employee->gender = $request->gender;
        $employee->birth_date = $request->birth_date;
        $employee->save();
        return redirect()->route('employee_list')->with('success', 'Employee updated successfully');
    }

    public function delete($id)
    {
        $employee = Employee::where('id', $id)->first();

        if($employee)
        {
            $employee->delete();
            session()->flash('success', 'Employee deleted successfully');
            return redirect()->route('employee_list');
        }
    }
}
