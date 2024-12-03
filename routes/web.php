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
Route::get('/sdgs', function () {
    return view('intro_sdgs');
});


Route::get('VegetableMarketDataController', [VegetableMarketDataController::class, 'index']);
Route::get('VegetableMarketDataController/{id}', [VegetableMarketDataController::class, 'show'])->where('id','[0-9]+')->name('show');
//Route::get('VegetableMarketDataController/{id}/edit', [VegetableMarketDataController::class, 'index'])->where('id','[0-9]+')->name(VegetableMarketDataController.edit);
Route::delete('VegetableMarketDataModel/delete/{id}', [VegetableMarketDataController::class, 'destroy'])->where('id','[0-9]+')->name('destroy');

