<?php

use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {
    
    Route::get('/profile', [PelbagaiController::class, 'view_profile']);
    Route::get('/profile', [PelbagaiController::class, 'view_profile']);
    Route::get('/profile', [PelbagaiController::class, 'view_profile']);


    Route::prefix('bangunan')->group(function () {
    
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
    
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
    
    });
    
    Route::prefix('gpss')->group(function () {
        
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
    
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
    
    });
    
    Route::prefix('jalan')->group(function () {
        
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
    
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
    
    });
        
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
