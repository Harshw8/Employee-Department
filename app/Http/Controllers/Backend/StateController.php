<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
use Illuminate\Support\Facades\Session;

class StateController extends Controller
{
    public function index()
    {
        $states = State::with('country')->has('country')->get();
        return view('backend.state_list', compact('states'));
    }

    public function create()
    {
        $countries = Country::get();
        $state = app(State::class);
        return view('backend.state_create', compact('state', 'countries'));
    }

    public function store(Request $request)
    {
        State::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);

        Session::flash('success', 'State created successfully');
        return redirect()->route('state_list');
    }

    public function delete($id)
    {
        $state = State::where('id', $id)->first();

        if ($state) {
            $state->delete();
            Session::flash('success', 'State deleted successfully');
        }

        return redirect()->route('state_list');
    }

    public function edit($id)
    {
        $state = State::where('id', $id)->first();
        $countries = Country::get();
        return view('backend.state_edit', compact('state', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $state = State::where('id', $id)->first();
        $state->update([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);

        Session::flash('success', 'State updated successfully');
        return redirect()->route('state_list');
    }

    public function fetchdropdownstate($country_id)
    {
        $states = State::where('country_id', $country_id)->get();

        $html = "";

        foreach($states as $state){
            $html .= "<option value=".$state->id.">".$state->name."</option>";
        }

        return response()->json([
            'html' => $html
        ]);
    }
}
