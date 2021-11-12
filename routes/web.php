<?php

use App\Http\Controllers\datafileController;
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



Route::get('/add', function () {
    return view('layouts/add_pe');
});



Route::get('/',[datafileController::class,'dataview']);
Route::post('stor',[datafileController::class, 'ins']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
