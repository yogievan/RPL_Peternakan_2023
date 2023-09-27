<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

// test
Route::get('/test', function () {
    return view('welcome');
});

//login
Route::middleware(['guest'])->group(function(){
    Route::get('/', [authController::class, 'login'])->name('login');
    Route::post('/', [authController::class, 'validateLogin']);
});
// Route::get('/home', function () {
//     return redirect('/logout');
// });

Route::middleware(['auth'])->group(function(){
    // dashboard
    Route::get('/dashboard/peternak', [dashboardController::class, 'dashboard_peternak'])->middleware('cekRole:peternak');
    Route::get('/dashboard/pabrik', [dashboardController::class, 'dashboard_pabrik'])->middleware('cekRole:pabrik');

    // Logout
    Route::get('/logout',[authController::class, 'logout']);
});