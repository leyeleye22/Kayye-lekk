<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');//http:127.0.0.1:8080/register
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/home',[HomeClientController::class,'home'])->name('home');
Route::get('/dashboard',[HomeClientController::class,'dashboard'])->name('dashboard');
Route::middleware(['client'])->group(function(){
    Route::get('/login', function () {
        return view('login');
    })->name('login');
});