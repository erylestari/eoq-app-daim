<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\HomeController;
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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/login_action', [AuthController::class, 'loginAction']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/bagian', [BagianController::class, 'index']);
Route::get('/bagian/create', [BagianController::class, 'create']);
Route::post('/bagian/store', [BagianController::class, 'store']);
Route::get('/bagian/edit/{id}', [BagianController::class, 'edit']);
Route::post('/bagian/edit/update', [BagianController::class, 'update']);
Route::get('/bagian/delete/{id}', [BagianController::class, 'delete']);

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);