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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/job1', [\App\Http\Controllers\TestHorizonController::class, 'job1']);
Route::get('/job2', [\App\Http\Controllers\TestHorizonController::class, 'job2']);
//Route::get('/job1', 'TestHorizonController@job1');
