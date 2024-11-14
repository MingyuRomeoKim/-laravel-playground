<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dulagen',[\App\Http\Controllers\DulagenController::class,'index']);
