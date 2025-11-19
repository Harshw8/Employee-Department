<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Session;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('backend.announcement_list', compact('announcements'));
    }

    public function create()
    {
        $announcement = app(Announcement::class);
        return view('backend.announcement_create', compact('announcement'));
    }

    public function store(Request $request)
    {
        Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'announcement_by' => $request->announcement_by,
        ]);
        return redirect()->route('announcement_list')->with('success', 'Announcement created successfully');
    }

    public function delete($id)
    {
        $announcement = Announcement::where('id', $id)->first();

        if($announcement)
        {
            $announcement->delete();
            session()->flash('success', 'Announcement deleted successfully');
            return redirect()->route('announcement_list');
        }
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return view('backend.announcement_edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $announcement = Announcement::find($id);
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->announcement_by = $request->announcement_by;
        $announcement->save();

        session()->flash('success', 'Announcement updated successfully');
        return redirect()->route('announcement_list');
    }
}
