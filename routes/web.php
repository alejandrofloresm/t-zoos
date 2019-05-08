<?php

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

Route::get('registro', 'RegistroController@index');

Route::get('pruebas', 'RegistroController@pruebas');

Route::get('animals', 'AnimalsController@index')->name('animals.index');
Route::get('animals/create', 'AnimalsController@create')->name('animals.create');
Route::post('animals', 'AnimalsController@store')->name('animals.store');

Route::get('zoos', 'ZoosController@index')->name('zoos.index');
Route::get('zoos/create', 'ZoosController@create')->name('zoos.create');
Route::get('zoos/{zoo}/edit', 'ZoosController@edit')->name('zoos.edit');
Route::get('zoos/{zoo}', 'ZoosController@show')->name('zoos.show');
Route::post('zoos', 'ZoosController@store')->name('zoos.store');
Route::put('zoos/{zoo}', 'ZoosController@update')->name('zoos.update');
Route::delete('zoos/{zoo}', 'ZoosController@delete')->name('zoos.delete');

Route::get('species', 'SpeciesController@index')->name('species.index');
Route::get('species/create', 'SpeciesController@create')->name('species.create');
Route::get('species/{species}/edit', 'SpeciesController@edit')->name('species.edit');
Route::get('species/{species}', 'SpeciesController@show')->name('species.show');
Route::post('species', 'SpeciesController@store')->name('species.store');
Route::put('species/{species}', 'SpeciesController@update')->name('species.update');
Route::delete('species/{species}', 'SpeciesController@delete')->name('species.delete');
