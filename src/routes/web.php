<?php

use Devdojo\Calculator\CalculatorController;
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

Route::get('add/{a}/{b}', [CalculatorController::class,'add']);
//Route::get('add/{a}/{b}', [UserController::class, 'index']);

