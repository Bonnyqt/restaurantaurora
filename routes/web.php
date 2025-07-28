<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aurora_psb', [PageController::class, 'psb'])->name('psb');
Route::get('/aurora2_psb', [PageController::class, 'psb2'])->name('psb2');
Route::get('/aurora_bistro', [PageController::class, 'bistro'])->name('bistro');
Route::get('/aurora2_bistro', [PageController::class, 'bistro2'])->name('bistro2');
Route::get('/about', [PageController::class, 'about'])->name('about');