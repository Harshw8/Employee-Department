<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubDepartment;
use App\Models\Department;
use Illuminate\Support\Facades\Session;

class SubDepartmentController extends Controller
{
    public function index()
    {
        $subdepartments = SubDepartment::with('department')->has('department')->get();
        return view('backend.subdepartment_list', compact('subdepartments'));
    }

    public function create()
    {
        $departments = Department::get();
        $subdepartment = app(SubDepartment::class);
        return view('backend.subdepartment_create', compact('subdepartment', 'departments'));
    }

    public function store(Request $request)
    {
        SubDepartment::create([
            'name' => $request->name,
            'department_id' => $request->department_id,
        ]);

        Session::flash('success', 'Sub Department created successfully');
        return redirect()->route('subdepartment_list');
    }

    public function delete($id)
    {
        $subdepartment = SubDepartment::where('id', $id)->first();

        if ($subdepartment) {
            $subdepartment->delete();
            Session::flash('success', 'Sub Department deleted successfully');
        }

        return redirect()->route('subdepartment_list');
    }

    public function edit($id)
    {
        $subdepartment = SubDepartment::where('id', $id)->first();
        $departments = Department::get();
        return view('backend.subdepartment_edit', compact('subdepartment', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $subdepartment = SubDepartment::where('id', $id)->first();
        $subdepartment->update([
            'name' => $request->name,
            'department_id' => $request->department_id,
        ]);

        Session::flash('success', 'Sub Department updated successfully');
        return redirect()->route('subdepartment_list');
    }
}
