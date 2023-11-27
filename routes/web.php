<?php

use App\Http\Controllers\AddProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::group([
    'controller'=>RoleController::class,
    'middleware'=>'auth',
],function (){

    Route::get('/roles','create')->name('view-roles');
    Route::get('/add/roles','add_roles')->name('create-roles');
    Route::post('/add/roles','store')->name('store-roles');
    Route::get('/edit/roles/{id}','edit')->name('edit-roles');
    Route::put('/update/roles/{id}','update')->name('update-roles');
    Route::get('/delete/roles/{id}','delete')->name('delete-roles');
    Route::delete('/delete/roles/{id}','destroy')->name('destroy-roles');
});


Route::group([
    'middleware'=>'auth',
    'controller'=>PermissionController::class,
],function (){
    Route::get('/permissions','create');
    Route::get('/add/permissions','add_permissions');
    Route::post('/add/permissions','store');
    Route::get('/edit/permission/{id}','edit');
    Route::put('/update/permission/{id}','update');
    Route::get('/delete/permission/{id}','delete');
    Route::delete('/delete/permission/{id}','destroy');
});

Route::group([
    'middleware'=>'auth',
    'controller'=>UserController::class,
],function (){
    Route::get('/users','create');
    Route::get('/add/users','add_user');
    Route::post('/add/users','store');
    Route::get('/edit/users/{id}','edit');
    Route::put('/update/users/{id}','update');
    Route::get('/delete/users/{user}','delete');
    Route::delete('/delete/users/{user}','destroy');
});

Route::group([
    'prefix'=>'profile',
    'controller'=> ProfileController::class
],function (){
    Route::get('/add/{user}','add');

    Route::post('/store/{id}','store');

});

Route::view('/table','table');




require __DIR__.'/auth.php';
