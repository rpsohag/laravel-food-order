<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;



Route::group([], function(){
    Route::get('dashboard',[AdminDashboardController::class,'index'])->name('dashboard');
});