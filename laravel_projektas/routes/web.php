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

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home/', 'AccountsController@createAccount');
Route::get('/user_account/', 'AccountsController@userAccount');
Route::get('/money_transfer/', 'OperationsController@moneyTransfer');
Route::post('/store_operation/', 'OperationsController@storeOperation');
