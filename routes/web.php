<?php

use Illuminate\Support\Facades\Route;

// root
Route::get('/', function () {
    return view('index');
});
