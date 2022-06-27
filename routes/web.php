<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SejourController;
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
})->name('welcome');


Route::middleware(['auth'])->prefix('dashboard/')->name('dashboard.')->group(function() {  
    Route::get('', [DashboardController::class, 'index'])->name('index');
    Route::resource('rooms', RoomController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('sejour', SejourController::class)->except(['edit', 'update', 'delete']);
    Route::fallback([DashboardController::class, 'notFoundError'])->name('error404');
});

require __DIR__.'/auth.php';
