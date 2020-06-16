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
Route::post('/newslater', 'Newslatercontroller@store');
Route::get('/', 'AirdropdataController@index');
Route::get('/add', 'AirdropdataController@create');
Route::post('/add', 'AirdropdataController@store');
Route::get('/airdrop/{slug}', 'AirdropdataController@show');
Route::get('/airdrop/edit', 'AirdropdataController@edit');