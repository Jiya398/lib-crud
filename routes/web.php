<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublisherController;

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
    return view('welcome');
});


//Publisher Web API
Route::get('/publisher', [PublisherController::class, 'index'])->name('library.index');
Route::get('/publisher/create', [PublisherController::class, 'create'])->name('library.create');
Route::post('/publisher', [PublisherController::class, 'publish'])->name('library.publish');
Route::get('/publisher/{publisher}/edit', [PublisherController::class, 'edit'])->name('library.edit');
Route::put('/publisher/{publisher}/update', [PublisherController::class, 'update'])->name('library.update');
Route::delete('/publisher/{publisher}/destroy', [PublisherController::class, 'destroy'])->name('library.destroy');


