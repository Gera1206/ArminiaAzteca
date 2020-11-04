<?php

use Illuminate\Support\Facades\Route;

Route::get('/inventario', function () {
    return view('inventory');
});
Route::get('/', function () {
    return view('index');
});
