<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;

class StateController extends Controller
{
    public function index()
    {
        $states = State::with('country')->get();
        return view('backend.state_list', compact('states'));
    }

    public function create()
    {
        $countries = Country::all();
        $state = null; // ✅ Pass null so Blade doesn't throw error
        return view('backend.state_create', compact('countries', 'state'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);

        State::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('state_list')->with('success', 'State created successfully');
    }

    public function edit($id)
    {
        $state = State::findOrFail($id); // ✅ safer than find()
        $countries = Country::all();
        return view('backend.state_edit', compact('state', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);

        $state = State::findOrFail($id);
        $state->update([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('state_list')->with('success', 'State updated successfully');
    }

    public function delete($id)
    {
        State::destroy($id);
        return redirect()->route('state_list')->with('success', 'State deleted successfully');
    }

    public function fetchDropDownState($country_id)
    {
        $states = State::where('country_id', $country_id)->get();

        $html = "";

        foreach ($states as $state) {
            $html .= "<option value='{$state->id}'>{$state->name}</option>";
        }

        return response()->json(['html' => $html]);
    }
}
