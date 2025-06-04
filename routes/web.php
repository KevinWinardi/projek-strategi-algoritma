<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\SortingController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', function(){
        return view('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('dashboard', ['title'=>'Dashboard']);
    })->name('dashboard');

    Route::controller(FibonacciController::class)->group(function(){
        Route::get('/fibonacci', 'index')->name('fibonacci.index');
        Route::post('/fibonacci', 'post')->name('fibonacci.post');
    });

    Route::controller(SortingController::class)->group(function(){
        Route::get('/sorting', 'index')->name('sorting.index');
        Route::post('/sorting', 'post')->name('sorting.post');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::post('/login', 'loginPost')->name('loginPost');
        Route::post('/register','registerPost')->name('registerPost');
    });
});
