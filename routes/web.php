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
    return view('principal');
});
Route::get('services', 'page@services');

Route::get('location', 'page@location');

Route::get('portfolio', 'page@portfolio');

Route::get('services/peinados', 'page@peinados');

Route::get('services/unas', 'page@unas');

Route::get('services/maquillaje', 'page@maquillaje');


//Auth::routes();
 // Authentication Routes...




