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
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SectionProductController;
use App\Http\Controllers\SectorMasterController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\WarehouseController;

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
Route::get('typeUser',[TypeUserController::class, 'index'])->middleware('auth');
Route::get('fetch-typeuser',[TypeUserController::class, 'fetchtypeuser'])->middleware('auth');
Route::post('typeUser',[TypeUserController::class, 'store'])->middleware('auth');
Route::get('edit-typeUser/{id}',[TypeUserController::class, 'edit'])->middleware('auth');
Route::put('update-typeUser/{id}',[TypeUserController::class, 'update'])->middleware('auth');
Route::delete('delete-typeUser/{id}',[TypeUserController::class, 'destroy'])->middleware('auth');

//end TypeUser


//TypeClient

Route::resource('typeClient', TypeClientsController::class)->middleware('auth');
Route::get('typeClient',[TypeClientsController::class, 'index'])->middleware('auth');
Route::get('fetch-typeclient',[TypeClientsController::class, 'fetchtypeclients'])->middleware('auth');
Route::post('typeClient',[TypeClientsController::class, 'store'])->middleware('auth');
Route::get('edit-typeClient/{id}',[TypeClientsController::class, 'edit'])->middleware('auth');
Route::put('update-typeClient/{id}',[TypeClientsController::class, 'update'])->middleware('auth');
Route::delete('delete-typeClient/{id}',[TypeClientsController::class, 'destroy'])->middleware('auth');

//endTypeClient

//UnityMeasurement

Route::resource('unityMeasurement', UnityMeasurementController::class)->middleware('auth');
Route::get('unityMeasurement',[UnityMeasurementController::class, 'index'])->middleware('auth');
Route::get('fetch-unitymeasurement',[UnityMeasurementController::class, 'fetchunitymeasurement'])->middleware('auth');
Route::post('unityMeasurement',[UnityMeasurementController::class, 'store'])->middleware('auth');
Route::get('edit-unityMeasurement/{id}',[UnityMeasurementController::class, 'edit'])->middleware('auth');
Route::put('update-unityMeasurement/{id}',[UnityMeasurementController::class, 'update'])->middleware('auth');
Route::delete('delete-unityMeasurement/{id}',[UnityMeasurementController::class, 'destroy'])->middleware('auth');

//endUnityMeasurement

//Country

Route::resource('country', CountriesController::class)->middleware('auth');
Route::get('country',[CountriesController::class, 'index'])->middleware('auth');
Route::get('fetch-country',[CountriesController::class, 'fetchcountry'])->middleware('auth');
Route::post('country',[CountriesController::class, 'store'])->middleware('auth');
Route::get('edit-country/{id}',[CountriesController::class, 'edit'])->middleware('auth');
Route::put('update-country/{id}',[CountriesController::class, 'update'])->middleware('auth');
Route::delete('delete-country/{id}',[CountriesController::class, 'destroy'])->middleware('auth');

//endcountry

//City

Route::resource('city', CitiesController::class)->middleware('auth');
Route::get('city',[CitiesController::class, 'index'])->middleware('auth');
Route::get('fetch-city',[CitiesController::class, 'fetchcountry'])->middleware('auth');
Route::post('city',[CitiesController::class, 'store'])->middleware('auth');
Route::get('edit-city/{id}',[CitiesController::class, 'edit'])->middleware('auth');
Route::put('update-city/{id}',[CitiesController::class, 'update'])->middleware('auth');
Route::delete('delete-city/{id}',[CitiesController::class, 'destroy'])->middleware('auth');

//endCity

//Departament

Route::resource('departament', DepartamentsController::class)->middleware('auth');

//endDepartament

//TypeProduct

Route::resource('typeProduct', TypeProductController::class)->middleware('auth');
Route::get('typeProduct',[TypeProductController::class, 'index'])->middleware('auth');
Route::get('fetch-typeProduct',[TypeProductController::class, 'fetchtypeproduct'])->middleware('auth');
Route::post('typeProduct',[TypeProductController::class, 'store'])->middleware('auth');
Route::get('edit-typeProduct/{id}',[TypeProductController::class, 'edit'])->middleware('auth');
Route::put('update-typeProduct/{id}',[TypeProductController::class, 'update'])->middleware('auth');
Route::delete('delete-typeProduct/{id}',[TypeProductController::class, 'destroy'])->middleware('auth');

//endTypeProduct

//Section

Route::resource('section', SectionController::class)->middleware('auth');
Route::get('section',[SectionController::class, 'index'])->middleware('auth');
Route::get('fetch-section',[SectionController::class, 'fetchsection'])->middleware('auth');
Route::post('section',[SectionController::class, 'store'])->middleware('auth');
Route::get('edit-section/{id}',[SectionController::class, 'edit'])->middleware('auth');
Route::put('update-section/{id}',[SectionController::class, 'update'])->middleware('auth');
Route::delete('delete-section/{id}',[SectionController::class, 'destroy'])->middleware('auth');

//endSection

//Product
Route::resource('product', ProductController::class)->middleware('auth');
//endProduct

//SectionProduct
Route::resource('sectionProduct', SectionProductController::class)->middleware('auth');
//endSectionProduct

//Site

Route::resource('site', SiteController::class)->middleware('auth');
Route::get('site',[SiteController::class, 'index'])->middleware('auth');
Route::get('fetch-site',[SiteController::class, 'fetchsite'])->middleware('auth');
Route::post('site',[SiteController::class, 'store'])->middleware('auth');
Route::get('edit-site/{id}',[SiteController::class, 'edit'])->middleware('auth');
Route::put('update-site/{id}',[SiteController::class, 'update'])->middleware('auth');
Route::delete('delete-site/{id}',[SiteController::class, 'destroy'])->middleware('auth');

//endSite

//SectorMaster

Route::resource('sectorMaster', SectorMasterController::class)->middleware('auth');
Route::get('sectorMaster',[SectorMasterController::class, 'index'])->middleware('auth');
Route::get('fetch-sectorMaster',[SectorMasterController::class, 'fetchsectormaster'])->middleware('auth');
Route::post('sectorMaster',[SectorMasterController::class, 'store'])->middleware('auth');
Route::get('edit-sectorMaster/{id}',[SectorMasterController::class, 'edit'])->middleware('auth');
Route::put('update-sectorMaster/{id}',[SectorMasterController::class, 'update'])->middleware('auth');
Route::delete('delete-sectorMaster/{id}',[SectorMasterController::class, 'destroy'])->middleware('auth');

//endSectorMaster

//Clients
Route::resource('client', ClientController::class)->middleware('auth');
//endClients

//Warehouse
Route::resource('warehouse', WarehouseController::class)->middleware('auth');
//endWarehouse

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
