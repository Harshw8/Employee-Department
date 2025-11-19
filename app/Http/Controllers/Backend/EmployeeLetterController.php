<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeLetter;
use Illuminate\Support\Facades\Session;

class EmployeeLetterController extends Controller
{
    public function index()
    {
        $employee_letters = EmployeeLetter::all();
        return view('backend.employeeletter_list', compact('employee_letters'));
    }
    public function create()
    {
        $employeeletter = app(EmployeeLetter::class);
        return view('backend.employeeletter_create', compact('employeeletter'));
    }

    public function store(Request $request)
    {
        EmployeeLetter::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('employeeletter_list')->with('success', 'Employee letter created successfully');
    }

    public function delete($id)
    {
        $employeeletter = EmployeeLetter::where('id', $id)->first();

        if($employeeletter)
        {
            $employeeletter->delete();
            session()->flash('success', 'Employee letter deleted successfully');
            return redirect()->route('employeeletter_list');
        }
    }

    public function edit($id)
    {
        $employeeletter = EmployeeLetter::find($id);
        return view('backend.employeeletter_edit', compact('employeeletter'));
    }

    public function update(Request $request, $id)
    {
        $employeeletter = EmployeeLetter::find($id);
        $employeeletter->title = $request->title;
        $employeeletter->description = $request->description;
        $employeeletter->save();

        session()->flash('success', 'Employee letter updated successfully');
        return redirect()->route('employeeletter_list');
    }
}
