<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryEditRequest;
use App\Http\Requests\CountryRequest;
use App\Models\country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CountryController extends Controller
{

    public function country()
    {
        return view('country_form');
    }

    public function saveData(CountryRequest $request)
    {
        country::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect('/show')->with('message', 'Country Info  save successfully .');


    }

    public function show()
    {
        // the bellow published method is define inside country model for local scope
        // just remove the start Scope and with lower case p
        DB::listen(static function ($q) {
            logger('listen to queries', [
                'query' => $q->sql,
                'bindings' => $q->bindings,
            ]);
        });

        /* $data = Cache::rememberForever('info', function () {
             return country::paginate(10);
         });*/

        $data = country::latest('id')->paginate(10);
        return view('show', ['data' => $data]);

    }

    // model binding with route Country model compare the value with info id same then ...
    public function edit(country $info)
    {
        return view('edit', ['info' => $info]);
    }

    public function update($id, CountryEditRequest $request)
    {

        country::where('id', $id)
            ->update([
                'name' => $request->name,
                'code' => $request->code,
            ]);
        return redirect('/show')->with('message', "Country {$request->id}  successfully Updated");


    }

    public function delete( $info)
    {
        $del = country::where('id', $info)->first();
        return view('delete', ['info' => $del]);
    }

    public function destroy(country $info)
    {
        $info->delete();
        return redirect('/show')->with('message', "Country {$info->id} Deleted successfully");
    }
}
