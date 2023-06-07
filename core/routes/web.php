<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('astrocred',[WebsiteController::class,'astrocred'])->name('astrocred');
Route::get('astropulse',[WebsiteController::class,'astropulse'])->name('astropulse');
Route::get('astromobile',[WebsiteController::class,'astromobile'])->name('astromobile');
Route::get('contact',[WebsiteController::class,'contact'])->name('contact');
Route::get('mision',[WebsiteController::class,'mision'])->name('mision');
Route::get('vision',[WebsiteController::class,'vision'])->name('vision');
Route::get('history',[WebsiteController::class,'history'])->name('history');
Route::get('contact',[WebsiteController::class,'contact'])->name('contact');
Route::get('about',[WebsiteController::class,'about'])->name('about');

