<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\informationController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('information')->group(function () {


    Route::get('view', [informationController::class, 'view'])->name('view.information');
    Route::get('add', [informationController::class, 'add'])->name('add.information');
    Route::post('store', [informationController::class, 'store'])->name('store.information');
});
