<?php

use Illuminate\Support\Facades\Route;

Route::resource('/contract','ContractController');

Route::resource('/furnizor','FurnizorController');

Route::resource('/produs','ProdusController');

Route::get('/log','LogController@index')->name('log.index');



// Route::get('/furnizor','FurnizorController@index')->name('furnizor.index');
// Route::get('/furnizor/create','FurnizorController@create')->name('furnizor.create');
// Route::post('/furnizor/create','FurnizorController@store')->name('furnizor.store');
// Route::get('/furnizor/{furnizori}/edit','FurnizorController@edit')->name('furnizor.edit');
// Route::put('/furnizor/{furnizori}/update','FurnizorController@update')->name('furnizor.update');
// Route::delete('/furnizor/{furnizori}/delete','FurnizorController@delete')->name('furnizor.delete');


// Route::get('/produs','ProdusController@index')->name('produs.index');
// Route::get('/produs/create','ProdusController@create')->name('produs.create');
// Route::post('/produs/create','ProdusController@store')->name('produs.store');
// Route::get('/produs/{produse}/edit','ProdusController@edit')->name('produs.edit');
// Route::put('/produs/{produse}/update','ProdusController@update')->name('produs.update');
// Route::delete('/produs/{produse}/delete','ProdusController@delete')->name('produs.delete');

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
