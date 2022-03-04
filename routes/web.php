<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Route::get('/', function () {
//     return view('Home');
// });

Route::get('/{any}', [HomeController::class, 'index'])->where('any', '.*');