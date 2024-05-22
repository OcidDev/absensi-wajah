<?php

use App\Http\Controllers\Laporan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', DashboardController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('/user', UserController::class);
Route::resource('/permission', PermissionController::class);
Route::put('/permission/{id}/accept', [PermissionController::class, 'accept'])->name('permission.accept');
Route::put('/permission/{id}/reject', [PermissionController::class, 'reject'])->name('permission.reject');
// route get laporan
Route::get('/laporan', [Laporan::class, 'index'])->name('laporan');
