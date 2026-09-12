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


//Login User
Route::get('/login', [UserLoginController::class, 'create'])->name('login');
Route::post('/login', [UserLoginController::class, 'store'])->name('login.store');


//Login Admin
Route::get('/admin/login', [AdminLoginController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'store'])->name('admin.login.store');


//Manajemen Data Pengguna (Resource)
Route::resource('users', UserController::class)->names('users');


//Manajemen Data Admin (Resource)
Route::resource('admins', AdminController::class);


//HomePage
Route::get('/', function () {return view('home');})->name('home');

//Manajemen Data Barang (Resource)
Route::resource('items', ItemController::class);
Route::get('/inventory', function () {return view('items.inventory');})->name('inventory');


//Manajemen Data Peminjaman (Resource)
Route::resource('lendings', LendingController::class);
Route::get('/admin/borrowing-requests', [LendingController::class, 'adminIndex'])->name('lendings.admin-index');
Route::get('/admin/return-confirmation', [LendingController::class, 'returnConfirmation'])->name('admin.return-confirmation');


//Manajemen Data Aksi Peminjaman (Invokable)
Route::name('lendings.')->prefix('lendings')->group(function () {

    //Manajemen Aksi Disetujui
    Route::post('/approve', ApproveLendingController::class)->name('approve');

    //Manajemen Aksi Ditolak
    Route::post('/reject', RejectLendingController::class)->name('reject');

    //Manajemen Aksi Dikembalikan
    Route::post('/return', ReturnLendingController::class)->name('return');
});