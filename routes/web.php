<?php

use App\Http\Controllers\AccompagnateurController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InscritsController;
use Illuminate\Support\Facades\Route;

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



Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('/');
});



Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dash');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('creer-inscrit', [InscritsController::class, 'creer_inscrit'])->name('creer-inscrit');
    Route::get('voir-inscrits', [InscritsController::class, 'voir_inscrits'])->name('voir-inscrits');
    Route::get('modifier-inscrit/{id}', [InscritsController::class, 'modifier_inscrit'])->name('modifier-inscrit');
    Route::get('voir-rdv/{id}', [InscritsController::class, 'voir_rdv'])->name('voir-rdv');
    Route::delete('supp-inscrit/{id}', [InscritsController::class, 'supp_inscrit'])->name('supp-inscrit');
    Route::post('creer-inscription', [InscritsController::class, 'creer_inscription'])->name('creer-inscription');
    Route::post('creer-plan/{id}', [InscritsController::class, 'creer_plan'])->name('creer-plan');
    Route::delete('supp-plan/{id}', [InscritsController::class, 'supp_plan'])->name('supp-plan');
    Route::post('creer-rdv/{id}', [InscritsController::class, 'creer_rdv'])->name('creer-rdv');
    Route::delete('supp-rdv/{id}', [InscritsController::class, 'supp_rdv'])->name('supp-rdv');
    Route::put('modifier-store/{id}', [InscritsController::class, 'modifier_store'])->name('modifier-store');
    
    Route::get('voir-acc', [AccompagnateurController::class, 'voir_acc'])->name('voir-acc');
    Route::post('register-acc', [RegisteredUserController::class, 'register_acc'])->name('register-acc');
    Route::delete('supp-acc/{id}', [AccompagnateurController::class, 'supp_acc'])->name('supp-acc');
});

require __DIR__.'/auth.php';
