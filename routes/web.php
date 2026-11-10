<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LendingController;

use App\Http\Controllers\LendingAction\ApproveLendingController;
use App\Http\Controllers\LendingAction\RejectLendingController;
use App\Http\Controllers\LendingAction\ReturnLendingController;


// ==================================
// HOMEPAGE
// ==================================

Route::get('/', function () {
    return view('home');
})->name('home');


// ==================================
// USER LOGIN
// ==================================

Route::get('/login', [UserLoginController::class, 'create'])
    ->name('login');

Route::post('/login', [UserLoginController::class, 'store'])
    ->name('login.store');


// ==================================
// ADMIN LOGIN
// ==================================

Route::get('/admin/login', [AdminLoginController::class, 'create'])
    ->name('admin.login');

Route::post('/admin/login', [AdminLoginController::class, 'store'])
    ->name('admin.login.store');


// ==================================
// LOGOUT
// ==================================

Route::post('/logout', LogoutController::class)
    ->middleware('auth')
    ->name('logout');


// ==================================
// USER MANAGEMENT
// ==================================

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::resource('users', UserController::class)
        ->names('users');

    Route::resource('admins', AdminController::class);

});


// ==================================
// ITEM REQUEST
// ==================================

Route::get('/items/request', [
    ItemController::class,
    'requestItemForm'
])->name('items.request');

Route::get('/request', [
    ItemController::class,
    'request'
])->name('request.item');


// ==================================
// INVENTORY
// ==================================

Route::resource('items', ItemController::class);

Route::get('/inventory', function () {
    return view('items.inventory');
})->name('inventory');


// ==================================
// LENDING
// ==================================

Route::resource('lendings', LendingController::class);


// ==================================
// ADMIN LENDING MANAGEMENT
// ==================================

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/borrowing-requests', [
        LendingController::class,
        'adminIndex'
    ])->name('lendings.admin-index');

    Route::get('/admin/return-confirmation', [
        LendingController::class,
        'returnConfirmation'
    ])->name('admin.return-confirmation');


    Route::name('lendings.')
        ->prefix('lendings')
        ->group(function () {

            Route::post('/approve', ApproveLendingController::class)
                ->name('approve');

            Route::post('/reject', RejectLendingController::class)
                ->name('reject');

            Route::post('/return', ReturnLendingController::class)
                ->name('return');

        });

});