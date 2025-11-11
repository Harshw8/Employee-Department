<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('backend.project_list', compact('projects'));
    }
    public function create()
    {
        $project = app(Project::class);
        return view('backend.project_create', compact('project'));
    }

    public function store(Request $request)
    {
        Project::create([
            'project_name' => $request->project_name,
            'project_description' => $request->project_description,
            'client_name' => $request->client_name,
            'client_email' => $request->client_email,
        ]);
        return redirect()->route('project_list');
    }

    public function delete($id)
    {
        $project = Project::where('id', $id)->first();

        if($project)
        {
            $project->delete();
            session()->flash('success', 'Project deleted successfully');
            return redirect()->route('project_list');
        }
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('backend.project_edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->project_name = $request->project_name;
        $project->project_description = $request->project_description;
        $project->client_name = $request->client_name;
        $project->client_email = $request->client_email;
        $project->save();

        session()->flash('success', 'Project updated successfully');
        return redirect()->route('project_list');
    }
}
