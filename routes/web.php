<?php

use App\Http\Controllers\FibonacciController;
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

Route::controller(FibonacciController::class)->group(function(){
    Route::get('/', 'halamanBeranda')->name('halamanBeranda');
    Route::get('hitung-fibonacci', 'halamanHitungFibonacci')->name('halamanHitungFibonacci');
});

