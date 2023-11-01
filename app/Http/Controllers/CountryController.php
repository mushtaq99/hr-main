<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryEditRequest;
use App\Http\Requests\CountryRequest;
use App\Models\country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class CountryController extends Controller
{

    // just show the form to the user
    public function country()
    {
        return view('country_form');
    }

    // save the data to db
    public function saveData(CountryRequest $request)
    {
        country::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect('/show')->with('message', 'Country Info  save successfully .');


    }

    // get the data from db and show them inside view
    public function show()
    {
        // the bellow published method is define inside country model for local scope
        // just remove the start Scope and with lower case p
        //$data = country::published()->paginate(10);
        DB::listen(static function ($q) {
            logger('listen to queries', [
                'query' => $q->sql,
                'bindings' => $q->bindings,
            ]);
        });

        $data = Cache::rememberForever('info', function () {
            return country::paginate(10);

        });


        return view('show', ['data' => $data]);

    }

    // model binding with route Country model compare the value with info id same then ...
    public function edit(country $info)
    {
//       $this->authorize('update',$info);

        return view('edit', ['info' => $info]);
    }

    public function update($id, CountryEditRequest $request)
    {

        //$this->authorize('update_post', $id);

        country::where('id', $id)
            ->update([
                'name' => $request->name,
                'code' => $request->code,
            ]);

        return redirect('/show');

    }

    public function delete($info)
    {
        $del = country::where('id', $info)->first();
        return view('delete', ['info' => $del]);
    }

    public function destroy($info)
    {
        country::where('id', $info)
            ->delete();
        return redirect('/show')->with('message', 'Country Deleted successfully .');
    }
}
