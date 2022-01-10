<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VulnerabilitiesController;

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
    return view('home');
});

Route::get('/show', [VulnerabilitiesController::class, 'index']);
Route::get('/show/{vulnerabilityId}', [VulnerabilitiesController::class, 'show']);
Route::get('/show/{vulnerabilityId}/edit', [VulnerabilitiesController::class, 'edit']);
Route::get('/create', [VulnerabilitiesController::class, 'create']);
