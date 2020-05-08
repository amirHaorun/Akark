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
    $RealEstates = \App\RealEstate::latest()->paginate(12);
    return view('home',compact('RealEstates'));
})->name('main');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/NewAkar', 'RealEstateController@create')->name('Akar.create');
    Route::post('/NewAkar/store', 'RealEstateController@store')->name('Akar.store');
    Route::get('/Akar/{id}/edit', 'RealEstateController@edit')->name('Akar.edit');
    Route::patch('/Akar/{id}/update', 'RealEstateController@update')->name('Akar.update');
    Route::get('/Akar/{id}/destroy', 'RealEstateController@destroy')->name('Akar.destroy');
    Route::get('/MyProfile', 'UserController@edit')->name('MyProfile');
    Route::patch('/MyProfile/update', 'UserController@update')->name('MyProfile.update');

});
Route::get('/Akars/{category}', 'RealEstateController@index')->name('Akars');
Route::get('/Akar/{id}', 'RealEstateController@show')->name('Akar.show');
Route::post('/Akar/Search', 'RealEstateController@search')->name('Akar.search');
