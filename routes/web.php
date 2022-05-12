<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;

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

Route::get('/home',[HomeController::class, 'index']);
Route::get('/cadcliente',function () {
    return view('cadcliente');
});
Route::post('/cliente',[ClienteController::class, 'storeCad']);
Route::get('/cliente/{id}',[ClienteController::class, 'destroyCad']);

Route::put('/cliente/update/{id}',[ClienteController::class, 'updateCad']);

Route::get('/editcliente/{id}',[ClienteController::class, 'getCad']);
