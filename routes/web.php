<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $cars = Car::orderBy('production_year')->get();
    return view('welcome', compact('cars'));
//    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('cars', CarController::class);
});

require __DIR__.'/auth.php';
