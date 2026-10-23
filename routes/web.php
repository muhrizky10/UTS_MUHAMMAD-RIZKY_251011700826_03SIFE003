<?php

use App\Http\Controllers\StartupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StartupController::class, 'index'])->name('startups.index');
Route::get('/startups/{startup}', [StartupController::class, 'show'])->name('startups.show');
