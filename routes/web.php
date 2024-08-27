<?php

use Illuminate\Support\Facades\Route;

// This route redirect on home.blade.php template, when user visit route URL '/' adress
Route::get('/', function () {
    return view('home'); 
});
