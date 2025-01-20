<?php

use App\Http\Controllers\CalorieCalcController;
use App\Http\Controllers\MealPlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkoutPlanController;
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
    // CalorieCalcController.php
    // Controller.php
    // MealPlanController.php
    // ProfileController.php
    // WorkoutPlanController.php
    Route::resource('CalorieCalc',CalorieCalcController::class);
    Route::resource('MealPlan',MealPlanController::class);
    Route::resource('WorkoutPlan',WorkoutPlanController::class);
});

require __DIR__.'/auth.php';
