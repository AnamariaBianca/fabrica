<?php

use Illuminate\Support\Facades\Route;

Route::get('/contract','ContractController@index')->name('contract');
Route::get('/contract/create','ContractController@create')->name('contract.create');
Route::post('/contract/create','ContractController@store')->name('contract.store');
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
