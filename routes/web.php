<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\SendmailController;
use App\Http\Controllers\TrabalheConoscoController;
use Illuminate\Support\Facades\Route;

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
    return view('trabalhe-conosco');
});

// Route::get('/', [TrabalheConoscoController::class, 'index'])->name('trabalhe.index');
Route::post('/novo', [TrabalheConoscoController::class, 'store'])->name('trabalhe.store');

Route::post('emails', [SendmailController::class, 'store'])->name('email.store');

