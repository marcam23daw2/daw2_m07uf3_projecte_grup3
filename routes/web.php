<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\AUTOS;
use App\Models\CLIENTS;
use App\Models\LLOGA;
use App\Models\USUARIS;
use App\Models\user;
use App\Http\Controllers\AUTOSController;
use App\Http\Controllers\CLIENTSController;
use App\Http\Controllers\LLOGAController;
use App\Http\Controllers\USUARISController;

if (env('APP_ENV') !== 'local') {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('inici');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard'); 
    })->name('dashboard');

    Route::get('/dashboard_admin', function () {
        return view('dashboard_admin'); 
    })->name('dashboard_admin');

    Route::resource('treballadors', USUARISController::class);

    Route::delete('/users/{user}', [USUARISController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{user}/edit', [USUARISController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{user}', [USUARISController::class, 'update'])->name('users.update');
    Route::get('users/pdf/{user}', [USUARISController::class, 'exportPdf'])->name('users.pdf');

    Route::get('/dashboard_clients', function () {
        return view('dashboard_clients'); 
    })->name('dashboard_clients');

    Route::resource('clients', CLIENTSController::class);  
    Route::get('/clients/{dni_client}/pdf', [CLIENTSController::class, 'exportPdf'])->name('clients.pdf');

    Route::get('/dashboard_autos', function () {
        return view('dashboard_autos'); 
    })->name('dashboard_autos');

    Route::resource('autos', AUTOSController::class);  
    Route::get('/autos/{matricula_auto}/pdf', [AUTOSController::class, 'exportPdf'])->name('autos.pdf');

    Route::get('/dashboard_lloga', function () {
        return view('dashboard_lloga'); 
    })->name('dashboard_lloga');

    Route::resource('lloga', LLOGAController::class);  
    Route::get('/lloga/{dni_client}/{matricula_auto}/edit', [LLOGAController::class, 'edit'])->name('lloga.edit');
    Route::patch('/lloga/{dni_client}/{matricula_auto}', [LLOGAController::class, 'update'])->name('lloga.update');
    Route::delete('/lloga/{dni_client}/{matricula_auto}', [LLOGAController::class, 'destroy'])->name('lloga.destroy');
    Route::get('/lloga/{dni_client}/{matricula_auto}/pdf', [LLOGAController::class, 'exportPdf'])->name('lloga.pdf');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
