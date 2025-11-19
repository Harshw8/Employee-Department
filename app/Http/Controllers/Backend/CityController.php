<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('backend.city_list', compact('cities'));
    }
    public function create()
    {
        $countries = Country::all();
        $states = State::all();
        return view('backend.city_create', compact('countries', 'states'));
    }

    public function store(Request $request)
    {
        City::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
        ]);
        return redirect()->route('city_list')->with('success', 'City created successfully');
    }

    public function delete($id)
    {
        $city = City::where('id', $id)->first();

        if($city)
        {
            $city->delete();
            session()->flash('success', 'City deleted successfully');
            return redirect()->route('city_list');
        }
    }

    public function edit($id)
    {
        $city = City::find($id);
        $countries = Country::all();
        $states = State::all();
        return view('backend.city_edit', compact('city', 'countries', 'states'));
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->name = $request->name;
        $city->country_id = $request->country_id;
        $city->state_id = $request->state_id;
        $city->save();

        session()->flash('success', 'City updated successfully');
        return redirect()->route('city_list');
    }
}
