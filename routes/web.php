<?php

use App\Http\Controllers\Cidades01Controller;
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
Route::prefix('/cidades')->name('cidades.')->group( function(){
    Route::get('/', [Cidades01Controller::class, 'index'])->name('index');
});
