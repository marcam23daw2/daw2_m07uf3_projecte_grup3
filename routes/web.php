<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\AUTOS;
use App\Models\CLIENTS;
use App\Models\LLOGA;
use App\Http\Controllers\AUTOSController;
use App\Http\Controllers\CLIENTSController;
use App\Http\Controllers\LLOGAController;


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

    Route::get('/dashboard_clients', function () {
        return view('dashboard_clients'); 
    })->name('dashboard_clients');

    Route::resource('clients', CLIENTSController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
