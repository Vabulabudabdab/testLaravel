<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register.blade.php web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Controller::class, 'welcome']);

Route::get('/register', [\App\Http\Controllers\Controller::class, 'register']);

Route::post('/reg', [\App\Http\Controllers\Controller::class, 'get_user']);
