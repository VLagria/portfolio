<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// route::post('/submit', [ContactController::class, 'submit'])->name('submit.form');
route::post('/submit', [ContactController::class, 'submit_contact'])->name('submit.form');

route::post('/test', [ContactController::class, 'test']);