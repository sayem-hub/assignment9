<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about.me');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/skills', [SkillController::class, 'index'])->name('skills');

