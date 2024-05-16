<?php

use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

Route::get('/', [ListingController::class, 'index']);



//show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
//store
Route::post('/listings/', [ListingController::class, 'store'])->middleware('auth');
//edit lsiting
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'])->middleware('auth');

//update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
//single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);

//register/create form

Route::get('/register',[UserController::class, 'create'])->middleware('guest');
//login

//create new user
Route::post('/users', [UserController::class, 'store']);


//logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login',[UserController::class, 'login']);

//login

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

