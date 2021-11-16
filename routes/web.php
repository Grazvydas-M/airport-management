<?php

use App\Http\Controllers\AirlinesController;
use App\Http\Controllers\AirportController;
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

Route::group(['prefix' => 'airports'], function(){
    Route::get('', [AirportController::class, 'index'])->name('airports.index');
    Route::get('create/', [AirportController::class, 'create'])->name('airports.create');
    Route::get('/{airport}', [AirportController::class, 'edit'])->name('airports.edit');
    Route::post('', [AirportController::class, 'store'])->name('airports.store');
    Route::put('/{airport}', [AirportController::class, 'update'])->name('airports.update');
    Route::delete('/{airport}', [AirportController::class, 'destroy'])->name('airports.destroy');
});

Route::group(['prefix' => 'airlines'], function(){
    Route::get('', [AirlinesController::class, 'index'])->name('airlines.index');
    Route::get('create/', [AirlinesController::class, 'create'])->name('airlines.create');
    Route::get('/{airline}', [AirlinesController::class, 'edit'])->name('airlines.edit');
    Route::post('', [AirlinesController::class, 'store'])->name('airlines.store');
    Route::put('/{airline}', [AirlinesController::class, 'update'])->name('airlines.update');
    Route::delete('/{airline}', [AirlinesController::class, 'destroy'])->name('airlines.destroy');
});




