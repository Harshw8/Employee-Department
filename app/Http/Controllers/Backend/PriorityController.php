<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Priority;
use Illuminate\Support\Facades\Session;

class PriorityController extends Controller
{
    public function index()
    {
        $priorities = Priority::all();
        return view('backend.priority_list', compact('priorities'));
    }
    
    public function create()
    {
        $priority = app(Priority::class);
        return view('backend.priority_create', compact('priority'));
    }

    public function store(Request $request)
    {
        Priority::create([
            'priority_name' => $request->priority_name,
        ]);
        return redirect()->route('priority_list');
    }

    public function delete($id)
    {
        $priority = Priority::where('id', $id)->first();

        if($priority)
        {
            $priority->delete();
            session()->flash('success', 'Priority deleted successfully');
            return redirect()->route('priority_list');
        }
    }

    public function edit($id)
    {
        $priority = Priority::find($id);
        return view('backend.priority_edit', compact('priority'));
    }

    public function update(Request $request, $id)
    {
        $priority = Priority::find($id);
        $priority->priority_name = $request->priority_name;
        $priority->save();

        session()->flash('success', 'Priority updated successfully');
        return redirect()->route('priority_list');
    }
}
