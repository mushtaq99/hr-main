<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\country;


class CountryController extends Controller
{

    // just show the form to the user
    public function country()
    {
        return view('forms.country_form');
    }

    // save the data to db
    public function saveData(CountryRequest $request)
    {
        country::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect('/show')->with('message', 'Country Info  save successfully .');


    }

    // get the data from db and show them inside view
    public function show()
    {
        $data = country::all();
        return view('show', ['data' => $data]);

    }
}
