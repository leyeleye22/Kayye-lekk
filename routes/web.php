<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeClientController;
use App\Http\Controllers\DashboardController;
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
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/home',[HomeClientController::class,'home'])->name('home');
Route::get('/dashboards',[HomeClientController::class,'dashboard'])->name('dashboard');
Route::middleware(['client'])->group(function(){
 
});
Route::middleware(['admin'])->group(function(){
    Route::post('/ajouter-categorie',[CategorieController::class,'ajouter'])->name('ajouter.categorie');
    Route::get('/ajouter-categorie',[CategorieController::class,'ajouterCategorie'])->name('ajouter.categorie');
    Route::get('/editer-categorie/{id}',[CategorieController::class,'editerCategorie'])->name('editer.categorie');
    Route::post('/modifier-categorie',[CategorieController::class,'modifier'])->name('modifier.categorie');
    Route::post('/supprimer-categorie/{id}',[CategorieController::class,'supprimer'])->name('supprimer.categorie');
    Route::get('/lister-categorie',[CategorieController::class,'lister'])->name('lister.categorie');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
