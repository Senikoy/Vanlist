<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VanController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource ('vans', VanController::class);
