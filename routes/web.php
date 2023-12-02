<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinylController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ConsoleController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/vinyl/create',[VinylController::class, 'create'])->name('vinyl.create');
Route::get('/', [PublicController::class, 'profile'])->name('profile');


//metodo alternativo del middleware qualora ci fosse solo una rotta, ad esempio.
/* Route::get('/vinyl/creat',[VinylController::class, 'create'])->middleware('auth')->name('vinyl.create'); */

Route::post('/vinyl/store', [VinylController::class, 'store'])->name('vinyl.store');
Route::get('vinyl/index', [VinylController::class, 'index'])->name('vinyl.index');

//GRUD

Route::get('/console/index', [ConsoleController::class, 'index'])->name('console.index');
Route::get('/console/create', [ConsoleController::class, 'create'])->name('console.create');
Route::post('/console/store', [ConsoleController::class, 'store'])->name('console.store');
Route::get('/console/show/{console}', [ConsoleController::class, 'show'])->name('console.show');
Route::get('/console/edit/{console}', [ConsoleController::class, 'edit'])->name('console.edit');
Route::put('/console/update/{console}', [ConsoleController::class, 'update'])->name('console.update');
Route::delete('/console/delete/{console}', [ConsoleController::class, 'destroy'])->name('console.destroy');