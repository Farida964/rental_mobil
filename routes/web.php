<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AuthenticalSessionController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JenisKendaraanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');


    Route::middleware('auth')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    });

Route::get('/frontend', [AdminController::class, 'frontend'])->name('frontend');


Route::get('/armada', function () {
    return view('armada');
});

Route::get('/jenis_kendaraan', function () {
    return view('jenis_kendaraan');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::resource('jenis_kendaraan', JenisKendaraanController::class);
Route::get('/admin/jenis_kendaraan', [JenisKendaraanController::class, 'index']);
Route::get('/admin/jenis_kendaraan', [JenisKendaraanController::class, 'index'])->name('jenis_kendaraan.index');
Route::get('/admin/jenis_kendaraan/create', [JenisKendaraanController::class, 'create'])->name('jenis_kendaraan.create');
Route::post('/admin/jenis_kendaraan/store', [JenisKendaraanController::class, 'store'])->name('jenis_kendaraan.store');
Route::get('/admin/jenis_kendaraan/{jenis_kendaraan}', [JenisKendaraanController::class, 'show'])->name('jenis_kendaraan.show');
Route::get('/admin/jenis_kendaraan/{jenis_kendaraan}/edit', [JenisKendaraanController::class, 'edit'])->name('jenis_kendaraan.edit');
Route::put('/admin/jenis_kendaraan/{jenis_kendaraan}', [JenisKendaraanController::class, 'update'])->name('jenis_kendaraan.update');
Route::delete('/admin/jenis_kendaraan/{jenis_kendaraan}', [JenisKendaraanController::class, 'destroy'])->name('jenis_kendaraan.destroy');


Route::resource('armada', ArmadaController::class);
Route::get('/admin/armada', [ArmadaController::class, 'index'])->name('armadas.index');
Route::get('/admin/armada/create', [ArmadaController::class, 'create'])->name('armadas.create');
Route::post('/admin/armada/store', [ArmadaController::class, 'store'])->name('armadas.store');
Route::get('/admin/armada/{armada}', [ArmadaController::class, 'show'])->name('armadas.show');
Route::get('/admin/armada/{armada}/edit', [ArmadaController::class, 'edit'])->name('armadas.edit');
Route::put('/admin/armada/{armada}', [ArmadaController::class, 'update'])->name('armadas.update');
Route::delete('/admin/armada/{armada}', [ArmadaController::class, 'destroy'])->name('armadas.destroy');

Route::get('/admin/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/admin/peminjaman', [PeminjamanController::class, 'index'])->name('peminjamans.index');
Route::get('/admin/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjamans.create');
Route::get('/admin/peminjaman/create/form', [PeminjamanController::class, 'createform'])->name('peminjamans.createform');
Route::post('/admin/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjamans.store');
Route::get('/admin/peminjaman/{peminjaman}', [PeminjamanController::class, 'show'])->name('peminjamans.show');
Route::get('/admin/peminjaman/{peminjaman}/edit', [PeminjamanController::class, 'edit'])->name('peminjamans.edit');
Route::put('/admin/peminjaman/{peminjaman}', [PeminjamanController::class, 'update'])->name('peminjamans.update');
Route::delete('/admin/peminjaman/{peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjamans.destroy');


Route::get('/admin/pembayaran', [PembayaranController::class, 'index']);
Route::get('/admin/pembayaran', [PembayaranController::class, 'index'])->name('pembayarans.index');
Route::get('/admin/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayarans.create');
Route::post('/admin/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayarans.store');
Route::get('/admin/pembayaran/{pembayaran}', [PembayaranController::class, 'show'])->name('pembayarans.show');
Route::get('/admin/pembayaran/{pembayaran}/edit', [PembayaranController::class, 'edit'])->name('pembayarans.edit');
Route::put('/admin/pembayaran/{pembayaran}', [PembayaranController::class, 'update'])->name('pembayarans.update');
Route::delete('/admin/pembayaran/{pembayaran}', [PembayaranController::class, 'destroy'])->name('pembayarans.destroy');