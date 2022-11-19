<?php

use App\Http\Controllers\CitiesController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\TypeClientsController;
use App\Http\Controllers\UnityMeasurementController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\DepartamentsController;
use App\Http\Controllers\OrderTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResponseActivityController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SectionProductController;
use App\Http\Controllers\SectorMasterController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\SubClientController;

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

//Country
Route::resource('country', CountriesController::class)->middleware('auth');
//endcountry

//City
Route::resource('city', CitiesController::class)->middleware('auth');
//endCity

//Departament
Route::resource('departament', DepartamentsController::class)->middleware('auth');
//endDepartament

//TypeProduct
Route::resource('typeProduct', TypeProductController::class)->middleware('auth');
//endTypeProduct

//Section
Route::resource('section', SectionController::class)->middleware('auth');
//endSection

//Product
Route::resource('product', ProductController::class)->middleware('auth');
//endProduct

//SectionProduct
Route::resource('sectionProduct', SectionProductController::class)->middleware('auth');
//endSectionProduct

//Site
Route::resource('site', SiteController::class)->middleware('auth');
//endSite

//SectorMaster
Route::resource('sectorMaster', SectorMasterController::class)->middleware('auth');
//endSectorMaster

//Clients
Route::resource('client', ClientController::class)->middleware('auth');
//endClients

//Warehouse
Route::resource('warehouse', WarehouseController::class)->middleware('auth');
//endWarehouse

//orderType
Route::resource('orderType', OrderTypeController::class)->middleware('auth');
//endOrderType

//sub_clients
Route::resource('subClient', SubClientController::class)->middleware('auth');
//end sub_clients

//responseActivity
Route::resource('response', ResponseActivityController::class)->middleware('auth');
//end responseActivity

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
