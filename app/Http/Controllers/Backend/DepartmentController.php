<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('backend.department_list', compact('departments'));
    }
    public function create()
    {
        $department = app(Department::class);
        return view('backend.department_create', compact('department'));
    }

    public function store(Request $request)
    {
        Department::create([
            'name' => $request->name,
        ]);
        return redirect()->route('department_list');
    }

    public function delete($id)
    {
        $department = Department::where('id', $id)->first();

        if($department)
        {
            $department->delete();
            session()->flash('success', 'Department deleted successfully');
            return redirect()->route('department_list');
        }
    }

    public function edit($id)
    {
        $department = Department::find($id);
        return view('backend.department_edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        $department->name = $request->name;
        $department->save();

        session()->flash('success', 'Department updated successfully');
        return redirect()->route('department_list');
    }
}
