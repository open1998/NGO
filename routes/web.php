<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/Our Causes', function () {
    return view('Causes');
});
Route::get('/stories', function () {
    return view('stories');
});

