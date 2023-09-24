<?php

use App\Http\Controllers\IndexController;
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


Route::get('/report', [IndexController::class, 'reportToken']);
Route::get('/report_api', [IndexController::class, 'report']);

Route::get('/report/{type}', [IndexController::class, 'reportDetail']);


Route::get('/line/callback', [IndexController::class, 'reportDetail']);
