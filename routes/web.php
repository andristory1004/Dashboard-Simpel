<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\API\TpsController;
use App\Http\Controllers\DataTPSController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListSaksiController;
use App\Http\Controllers\ListRealCountController;
use App\Http\Controllers\ListQuickCountController;
use App\Http\Controllers\GrafikRealCountController;
use App\Http\Controllers\MonitoringSaksiController;
use App\Http\Controllers\GrafikQuickCountController;

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

Route::get('dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('paslon',[PaslonController::class,'index'])->middleware(['auth'])->name('paslon');

// Route::get('data-tps',[DataTPSController::class, 'index'])->middleware(['auth'])->name('data-tps');
// Route::post('/get-kabupaten',[DataTPSController::class, 'getKabupaten'])->name('/get-kabupaten');
// Route::post('/get-kecamatan',[DataTPSController::class, 'getKecamatan'])->name('/get-kecamatan');
// Route::post('/get-kelurahan',[DataTPSController::class, 'getKelurahan'])->name('/get-kelurahan');
 
Route::resource('tps', DataTPSController::class);

Route::get('operator',[OperatorController::class, 'index'])->middleware(['auth'])->name('operator');

Route::get('list-saksi',[ListSaksiController::class, 'index'])->middleware(['auth'])->name('list-saksi');
Route::post('/get-kabupaten',[ListSaksiController::class, 'getKabupaten'])->name('/get-kabupaten');
Route::post('/get-kecamatan',[ListSaksiController::class, 'getKecamatan'])->name('/get-kecamatan');
Route::post('/get-kelurahan',[ListSaksiController::class, 'getKelurahan'])->name('/get-kelurahan');

Route::get('monitoring-saksi',[MonitoringSaksiController::class, 'index'])->middleware(['auth'])->name('monitoring-saksi');
Route::get('list-quick-count',[ListQuickCountController::class, 'index'])->middleware(['auth'])->name('list-quick-count');
Route::get('list-real-count',[ListRealCountController::class, 'index'])->middleware(['auth'])->name('list-real-count');
Route::get('grafik-quick-count',[GrafikQuickCountController::class, 'index'])->middleware(['auth'])->name('grafik-quick-count');
Route::get('grafik-real-count',[GrafikRealCountController::class, 'index'])->middleware(['auth'])->name('grafik-real-count');






require __DIR__.'/auth.php';