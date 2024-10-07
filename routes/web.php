<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesControllers;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfilesControllers::class, 'getProfiles']);
Route::get('/profile/{id}', [ProfilesControllers::class, 'getProfile']);
