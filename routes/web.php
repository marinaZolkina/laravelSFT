<?php

use App\Http\Controllers\WeekController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MatchController;
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

Route::get('/', IndexController::class);

Route::get('/match/list', [MatchController::class, 'index']);

Route::get('/week/next/{id}', [WeekController::class, 'show']);

