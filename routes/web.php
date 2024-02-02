<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
Route::get('/more', function () {
    return view('welcomebackup');
});

Route::get('/send-message', function () {
    return view('send-message');
});




Route::post('begin-here',[HomeController::class,'begin'])->name('send.message.begin');
Route::post('send-message',[HomeController::class,'message'])->name('send.message');

// Clear Cache
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'Cache cleared';
});
