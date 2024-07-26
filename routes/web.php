<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;

Route::get('/',[PublicController::class,'homepage'])->name('homepage');

Route::get('/recipe/create',[RecipeController::class,'crate'])->name('recipe.create');
Route::get('/recipe/index',[RecipeController::class,'index'])->name('recipe.index');

