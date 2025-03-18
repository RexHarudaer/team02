<?php

use App\Http\Controllers\VegetableMarketDataController;
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

// Route::get('/', function () {
   //  return view('app');
 //});

Route::get('/', function () {
  return view('intro_sdgs');
});

Route::get('VegetableMarketDataController', [VegetableMarketDataController::class, 'index']);
Route::get('VegetableMarketDataController/{id}', [VegetableMarketDataController::class, 'show'])->where('id','[0-9]+')->name('show');
Route::get('VegetableMarketDataController/{id}/edit', [VegetableMarketDataController::class, 'edit'])->where('id','[0-9]+')->name('edit');

Route::patch('VegetableMarketDataModel/update/{id}', [VegetableMarketDataController::class, 'update'])->where('id', '[0-9]+')->name('update');

Route::delete('VegetableMarketDataModel/delete/{id}', [VegetableMarketDataController::class, 'destroy'])->where('id','[0-9]+')->name('destroy')->middleware('can:admin');

Route::get('VegetableMarketDataController/create', [VegetableMarketDataController::class, 'create'])->name('create')->middleware('can:admin');

Route::post('VegetableMarketDataController/store',[VegetableMarketDataController::class, 'store']) -> name('store')->middleware('can:admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
