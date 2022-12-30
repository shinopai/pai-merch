<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

// items
Route::controller(ItemsController::class)->group(function () {
    Route::name('items.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/search', 'search')->name('search');
    });
});
