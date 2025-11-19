<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\Session;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('backend.country_list', compact('countries'));
    }
    public function create()
    {
        $country = app(Country::class);
        return view('backend.country_create', compact('country'));
    }

    public function store(Request $request)
    {
        Country::create([
            'name' => $request->name,
        ]);
        return redirect()->route('country_list')->with('success', 'Country created successfully');
    }

    public function delete($id)
    {
        $country = Country::where('id', $id)->first();

        if($country)
        {
            $country->delete();
            session()->flash('success', 'Country deleted successfully');
            return redirect()->route('country_list');
        }
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return view('backend.country_edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $country = Country::find($id);
        $country->name = $request->name;
        $country->save();

        session()->flash('success', 'Country updated successfully');
        return redirect()->route('country_list');
    }
}
