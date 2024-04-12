<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\utilisateurController;
use Illuminate\Support\Facades\Route;

Route::get('/annonces',[AnnonceController::class, 'getAll']);
Route::get('/annonces/validated',[AnnonceController::class, 'getAllValidated']);
Route::post('/annonces/search',[AnnonceController::class, 'search']);
Route::post('/annonces/create',[AnnonceController::class, 'create']);
Route::get('/annonces/{annonce}',[AnnonceController::class, 'getAnnonceByID']);
Route::delete('/annonces/delete/{annonce}',[AnnonceController::class, 'deleteById']);
Route::patch('/annonces/update/{annonce}',[AnnonceController::class, 'updateById']);

Route::get("/message", [MessageController::class, 'getAll']);
Route::post('/message/create', [MessageController::class, 'addMessage']);

Route::get("/utilisateur",[MessageController::class, 'getAll']);



