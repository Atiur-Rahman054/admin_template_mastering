<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;



Route::middleware('auth')->group(function(){

    Route::get('/dashboard', [BackendController::class, 'index'])->name('backend.index');
    
});
