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


Route::get('/eleves','\App\Http\Controllers\eleveController@index')->name("eleves.index");
Route::post('/eleves','\App\Http\Controllers\eleveController@store')->name('eleves.store');
Route::get('/eleves/{eleve}/edit','\App\Http\Controllers\eleveController@edit')->name('eleves.edit');
Route::get('/eleves/create','\App\Http\Controllers\eleveController@create')->name('eleves.create');
Route::delete('/eleves/{eleve}','\App\Http\Controllers\eleveController@destroy')->name('eleves.destroy');
Route::patch('/eleves/{eleve}','\App\Http\Controllers\eleveController@update')->name('eleves.update');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
