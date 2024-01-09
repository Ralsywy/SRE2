<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscritsController;

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
})->name('/');

Route::get('inscrits',[InscritsController::class, 'show_inscrits'])->name('show-inscrits');
Route::get('comptes',[InscritsController::class, 'show_comptes'])->name('show-comptes');
