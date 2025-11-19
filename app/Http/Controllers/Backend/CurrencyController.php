<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;
use Illuminate\Support\Facades\Session;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::all();
        return view('backend.currency_list', compact('currencies'));
    }
    public function create()
    {
        $currency = app(Currency::class);
        return view('backend.currency_create', compact('currency'));
    }

    public function store(Request $request)
    {
        Currency::create([
            'country' => $request->country,
            'currency_name' => $request->currency_name,
            'currency_symbol' => $request->currency_symbol,
        ]);
        return redirect()->route('currency_list')->with('success', 'Currency created successfully');
    }

    public function delete($id)
    {
        $currency = Currency::where('id', $id)->first();

        if($currency)
        {
            $currency->delete();
            session()->flash('success', 'Currency deleted successfully');
            return redirect()->route('currency_list');
        }
    }

    public function edit($id)
    {
        $currency = Currency::find($id);
        return view('backend.currency_edit', compact('currency'));
    }

    public function update(Request $request, $id)
    {
        $currency = Currency::find($id);
        $currency->country = $request->country;
        $currency->currency_name = $request->currency_name;
        $currency->currency_symbol = $request->currency_symbol;
        $currency->save();

        session()->flash('success', 'Currency updated successfully');
        return redirect()->route('currency_list');
    }
}
