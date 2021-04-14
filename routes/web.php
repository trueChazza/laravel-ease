<?php

use Illuminate\Support\Facades\Route;

Route::view('/ease', 'ease::index');
Route::view('/ease/{path?}', 'ease::index')->where('path', '.*');
