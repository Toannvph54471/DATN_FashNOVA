<?php

use Illuminate\Support\Facades\Route;

// Define your web routes here

Route::get('/', function () {
    return view('welcome');
});