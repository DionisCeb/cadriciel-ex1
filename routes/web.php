<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */



use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;


Route::get('/welcome', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/resume', [ResumeController::class, 'resume']);
Route::get('/projects', [ProjectsController::class, 'projects']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'contactForm']);
