<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KendaraanController;

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

Route::get('/', [FrontendController::class, 'index']);

Route::resource('pelanggan', PelangganController::class);


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/tables', [AdminController::class, 'tables'])->name('tables');
Route::get('/forgotpw', [AdminController::class, 'forgotpw'])->name('forgotpw');
Route::get('/tables', [AdminController::class, 'tables'])->name('tables');
Route::get('/register', [AdminController::class, 'register'])->name('register');


Route::get('/admin/kendaraan', [KendaraanController::class, 'index'])->name('kendaraans.index');
Route::get('/admin/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraans.create');
Route::post('/admin/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraans.store');
Route::get('/admin/kendaraan/{kendaraan}', [KendaraanController::class, 'show'])->name('kendaraans.show');
Route::get('/admin/kendaraan/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraans.edit');
Route::put('/admin/kendaraan/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraans.update');
Route::delete('/admin/kendaraan/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraans.destroy');


