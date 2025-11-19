<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('backend.task_list', compact('tasks'));
    }
    public function create()
    {
        $task = app(Task::class);
        return view('backend.task_create', compact('task'));
    }

    public function store(Request $request)
    {
        Task::create([
            'task_title' => $request->task_title,
            'task_description' => $request->task_description,
        ]);
        return redirect()->route('task_list')->with('success', 'Task created successfully');
    }

    public function delete($id)
    {
        $task = Task::where('id', $id)->first();

        if($task)
        {
            $task->delete();
            session()->flash('success', 'Task deleted successfully');
            return redirect()->route('task_list');
        }
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('backend.task_edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->task_title = $request->task_title;
        $task->task_description = $request->task_description;
        $task->save();

        session()->flash('success', 'Task updated successfully');
        return redirect()->route('task_list');
    }
}
