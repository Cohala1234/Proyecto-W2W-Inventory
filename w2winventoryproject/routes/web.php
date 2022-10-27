<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\TypeClientsController;
use App\Http\Controllers\UnityMeasurementController;
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
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

//TypeUser

Route::resource('typeUser',TypeUserController::class)->middleware('auth');
//end TypeUser


//TypeClient
Route::resource('typeClient', TypeClientsController::class)->middleware('auth');
//endTypeClient

//UnityMeasurement
Route::resource('unityMeasurement', UnityMeasurementController::class)->middleware('auth');
//endUnityMeasurement

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
