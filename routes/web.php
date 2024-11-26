<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VegetableMarketDataController;

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


Route::get('/sdgs', function () {
    return view('intro_sdgs');
});


Route::get('vegetablemarketdata',[VegetableMarketDataController::class, 'index']);

Route::resource('vegetablemarketdata', VegetableMarketDataController::class);

Route::get('/vegetablemarketdata/{id}', [VegetableMarketDataController::class, 'show'])->name('vegetablemarketdata.show');

Route::post('/store', [VegetableMarketDataController::class, 'store'])->name('store');
Route::get('/vegetablemarket/create', [VegetableMarketDataController::class, 'create'])->name('vegetablemarketdata.create');
Route::get('/home', function () {
    return view('vegetablemarketdata.home');
})->name('home'); 








