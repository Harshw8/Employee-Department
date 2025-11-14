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
        $data = [
            'name' => $request->name,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
        ];

        City::create($data);

        return redirect()->route('city_list')->with('success', 'City created successfully');
    }
}
