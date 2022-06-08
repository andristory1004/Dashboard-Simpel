<?php

use App\Http\Controllers\Analisis;
use App\Http\Controllers\RelawanC;
use App\Http\Controllers\DashboardC;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('dashboard',[DashboardC::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('analisis',[Analisis::class,'index'])->middleware(['auth'])->name('analisis');
Route::get('relwan',[RelawanC::class,'index'])->middleware(['auth'])->name('relawan');

require __DIR__.'/auth.php';
