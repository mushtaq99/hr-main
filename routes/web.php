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

Route::get('/country',[CountryController::class,'country']);
Route::post('/country',[CountryController::class,'saveData']);
Route::get('/show',[CountryController::class,'show']);

// the bellow {info} will be compare to country model inside controoler id = id
Route::get('/country/{info}/edit',[CountryController::class,'edit']);
Route::put('/country/{id}',[CountryController::class,'update']);
Route::get('/country/{id}/delete',[CountryController::class,'delete']);
Route::delete('/country/{info}',[CountryController::class,'destroy']);


//Route::get('/{post}/edit', 'edit')->name('edit');
//Route::put('/{post}', 'update')->name('update');
//
//Route::get('/{post}/delete', 'delete')->name('delete');
//Route::delete('/{post}', 'destroy')->name('destroy');
