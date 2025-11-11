<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StickyNote;
use Illuminate\Support\Facades\Session;

class StickyNoteController extends Controller
{
    public function index()
    {
        $stickyNotes = StickyNote::all();
        return view('backend.stickynote_list', compact('stickyNotes'));
    }

    public function create()
    {
        $stickyNote = app(StickyNote::class);
        return view('backend.stickynote_create', compact('stickyNote'));
    }

    public function store(Request $request)
    {
        StickyNote::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('stickynote_list');
    }

    public function delete($id)
    {
        $stickyNote = StickyNote::where('id', $id)->first();

        if($stickyNote)
        {
            $stickyNote->delete();
            session()->flash('success', 'Sticky Note deleted successfully');
            return redirect()->route('stickynote_list');
        }
    } 

    public function edit($id)
    {
        $stickyNote = StickyNote::find($id);
        return view('backend.stickynote_edit', compact('stickyNote'));
    }

    public function update(Request $request, $id)
    {
        $stickyNote = StickyNote::find($id);
        $stickyNote->title = $request->title;
        $stickyNote->description = $request->description;
        $stickyNote->save();

        session()->flash('success', 'Sticky Note updated successfully');
        return redirect()->route('stickynote_list');
    }
}
