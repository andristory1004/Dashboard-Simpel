<?php

use App\Http\Controllers\Analisis;
use App\Http\Controllers\RelawanC;
use App\Http\Controllers\PengurusC;
use App\Http\Controllers\DashboardC;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListRelawanC;
use App\Http\Controllers\ListPengurusC;

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
Route::get('pengurus',[PengurusC::class,'index'])->middleware(['auth'])->name('pengurus');


Route::get('list-pengurus',[ListPengurusC::class,'index'])->middleware(['auth'])->name('list-pengurus');
Route::get('list-relawan',[ListRelawanC::class,'index'])->middleware(['auth'])->name('list-relawan');

require __DIR__.'/auth.php';
