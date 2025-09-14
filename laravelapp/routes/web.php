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

// localhost:8000/gacha にアクセスしたらGachaControllerのshow関数を呼び出す
Route::get('/gacha/{str}', 'App\Http\Controllers\GachaController@show');

// localhost:8000/gacha にアクセスしたらGachaControllerのgacha1関数を呼び出す
// Route::get('/gacha', 'App\Http\Controllers\GachaController@gacha1');
