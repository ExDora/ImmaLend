<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\LendingAction\ApproveLendingController;
use App\Http\Controllers\LendingAction\RejectLendingController;
use App\Http\Controllers\LendingAction\ReturnLendingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Manajemen Data Pengguna (Resource)
Route::resource('users', UserController::class)->names('users');


//Manajemen Data Admin (Resource)
Route::resource('admins', AdminController::class);


//Manajemen Data Barang (Resource)
Route::resource('items', ItemController::class);


//Manajemen Data Peminjaman (Resource)
Route::resource('lendings', LendingController::class);


//Manajemen Data Aksi Peminjaman (Invokable)
Route::name('classes.')->prefix('classes')->group(function () {

    //Manajemen Aksi Disetujui
    Route::post('/{id}/approve', ApproveLendingController::class)->name('approve');

    //Manajemen Aksi Ditolak
    Route::post('/{id}/reject', RejectLendingController::class)->name('reject');

    //Manajemen Aksi Dikembalikan
    Route::post('/{id}/return', ReturnLendingController::class)->name('return');
});