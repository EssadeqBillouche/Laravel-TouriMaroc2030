<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/Admin',[Admin::class,'index'])->name('AdminDashboard');
    Route::get('/Tourist',[Admin::class,'index'])->name('TouristDashboard');
    Route::get('/Owner',[Admin::class,'index'])->name('OwnerDashboard');
});





require __DIR__.'/auth.php';
