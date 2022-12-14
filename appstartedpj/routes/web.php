<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ListController::class, 'index']);
Route::post('/add', [ListController::class, 'create']);
Route::post('/edit', [ListController::class, 'update']);
Route::post('/delete', [ListController::class, 'remove']);
Route::post('/change', [ListController::class, 'change']);
