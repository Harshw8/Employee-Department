<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;
use Illuminate\Support\Facades\Session;

class LeaveController extends Controller
{
    public function index()
    {
        $leaves = Leave::all();
        return view('backend.leave_list', compact('leaves'));
    }
    public function create()
    {
        $leave = app(Leave::class);
        return view('backend.leave_create', compact('leave'));
    }

    public function store(Request $request)
    {
        Leave::create([
            'leave_name' => $request->leave_name,
        ]);
        return redirect()->route('leave_list')->with('success', 'Leave created successfully');
    }

    public function delete($id)
    {
        $leave = Leave::where('id', $id)->first();

        if($leave)
        {
            $leave->delete();
            session()->flash('success', 'Leave deleted successfully');
            return redirect()->route('leave_list');
        }
    }

    public function edit($id)
    {
        $leave = Leave::find($id);
        return view('backend.leave_edit', compact('leave'));
    }

    public function update(Request $request, $id)
    {
        $leave = Leave::find($id);
        $leave->leave_name = $request->leave_name;
        $leave->save();

        session()->flash('success', 'Leave updated successfully');
        return redirect()->route('leave_list');
    }
}
