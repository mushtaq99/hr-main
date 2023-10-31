<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/test', function () {
    return country::first();

});

// now with help of relationship define in models the above method return single country info
// now if we want to return country info along with user details it is so simple due to relationship define like

Route::get('tests', function () {

    // in bellow line the user is actually function that we define inside  country modelÏ
    return country::with('user')->first();

});

Route::get('/', function () {
    return view('welcome');
});


// group all the related Routes to one group like bellow
Route::group([
    'prefix' => '/country',
    'controller' => CountryController::class,
    'middleware' => ['auth'],
], function () {
    Route::get('/', 'country');
    Route::post('/', 'saveData');

// the bellow {info} will be compare to country model inside controller id = id
    Route::get('/{info}/edit', 'edit')
        //bellow middle ware are user for authorization
    ->middleware(['can:update,info']);

    Route::put('/{id}', 'update');

    Route::get('/{id}/delete', 'delete');
    Route::delete('/{info}', 'destroy');
});

Route::get('/show', [CountryController::class, 'show']);

Route::view('/register', 'register')->name('register');

Route::post('/register', [RegisterController::class, 'create']);

Route::view('/dashboard', 'dashboard')->middleware('auth');
Route::get('/logout', [LoginController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'show'])
    ->name('login')
    ->middleware('throttle:5,1');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');

Route::view('/dashboard', 'dashboard')->middleware('auth');
