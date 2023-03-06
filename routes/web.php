<?php

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



Route::get('/heroes', function () {
    return view('heroes');
});

Route::get('/admin', function () {
    return view('admin.login');
});

//Authentication 
Route::get('dashboard', [App\Http\Controllers\CustomAuthController::class, 'dashboard']); 
Route::get('login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');

//Resources
Route::resource('client', '\App\Http\Controllers\ClientController');
Route::resource('/', '\App\Http\Controllers\HomeController');
Route::resource('/home', '\App\Http\Controllers\HomeController');

Route::get('clients', [\App\Http\Controllers\ClientController::class, 'create'])->name('clients');
