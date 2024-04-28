<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/',  [MainController::class, 'index']);
Route::view('/aboutus', 'components.aboutus');
Route::view('/projects', 'components.projects');
Route::view('/press', 'components.press');
