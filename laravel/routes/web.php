<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/pet-foods', function () {
    return view('pet-foods'); 
});

Route::get('/pet-toys', function () {
    return view('pet-toys'); 
});

Route::get('/pets', function () {
    return view('pets'); 
});