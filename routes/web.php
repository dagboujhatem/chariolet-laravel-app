<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/approval', function () {
    return view('approval');
})->name('approval');

Auth::routes(['verify' => true]);

Route::middleware(['approved'])->group(function () {

    Route::get('/home', 'HomeController@index')
        ->middleware('verified')
        ->name('home');

    Route::resource('users', 'UserController')
        ->middleware('role:Administrateur');

    Route::resource('settings', 'SettingsController', ['only' => ['edit', 'update']])
        ->middleware('auth');

    Route::get('/users/{user_id}/approve', 'UserController@approve')
        ->middleware('role:Administrateur')
        ->name('users.approve');
});

