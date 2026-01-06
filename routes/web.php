<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', WelcomeController::class);




Route::get('/about', function () {
    return view('about');
});
Route::get('/Our Causes', function () {
    return view('Causes');
});
Route::get('/stories', function () {
    return view('stories');
});

