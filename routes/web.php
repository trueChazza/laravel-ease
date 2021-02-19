<?php

use Illuminate\Support\Facades\Route;

Route::get('/ease', function() {
    return view('ease::index');
})->name('ease');
