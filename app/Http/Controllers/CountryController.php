<?php

namespace App\Http\Controllers;
use App\Http\Requests\CountryRequest;
use App\Models\country;


class CountryController extends Controller
{
    public function country(){
        return view('country_form');
    }

    public function saveData(CountryRequest $request){
        country::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect('/show')->with('message','Country Info  created successfully .');

    }
    public function show(){

        $data = country::all();

        return view('show',['data' => $data]);

    }
}
