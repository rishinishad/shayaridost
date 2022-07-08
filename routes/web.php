<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JokeController;
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

Route::get('/index', [IndexController::class , 'show']);
// Route::get('/joke', [JokeController::class , 'joke']);
Route::get('/morning', "MorningController@morning");
Route::get('/night', "NightController@night");
Route::get('/attitude', "AttitudeController@attitude");
Route::get('/sad', "SadController@sad");
Route::get('/bewafa', "BewafaController@bewafa");
Route::get('/comedy', "ComedyController@comedy");
Route::get('/birthday', "BirthdayController@birthday");
Route::get('/joke', "JokeController@joke");
Route::get('/santa_banta', "SantaController@santa");
Route::get('/veg', "VegController@veg");
Route::get('/non_veg', "NonvegController@nonveg");
Route::get('/other_joke', "OtherjokeController@otherjoke");