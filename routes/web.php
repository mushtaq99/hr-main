<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// group all the related Routes to one group like bellow
Route::group([
    'prefix'=>'/country',
    'controller' => CountryController::class,
], function () {
    Route::get('/', 'country');
    Route::post('/',  'saveData');

// the bellow {info} will be compare to country model inside controller id = id
    Route::get('/{info}/edit',  'edit');
    Route::put('/{id}',  'update');
    Route::get('/{id}/delete',  'delete');
    Route::delete('/{info}', 'destroy');
});


Route::get('/show',[CountryController::class,'show']);




