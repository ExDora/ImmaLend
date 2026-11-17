<?php

use Illuminate\Support\Facades\Route;

// Authentication Controllers
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LogoutController;

// Main Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LendingController;

// Lending Action Controllers
use App\Http\Controllers\LendingAction\ApproveLendingController;
use App\Http\Controllers\LendingAction\RejectLendingController;
use App\Http\Controllers\LendingAction\ReturnLendingController;


// ==========================================
// HOMEPAGE
// ==========================================

Route::get('/', function () {
    return view('home');
})
    ->middleware('auth')
    ->name('home');


// ==========================================
// AUTHENTICATION
// ==========================================

// User Login
Route::middleware('guest')->group(function () {

    Route::get('/login', [UserLoginController::class, 'create'])
        ->name('login');

    Route::post('/login', [UserLoginController::class, 'store'])
        ->name('login.store');

});


// Admin Login
Route::middleware('guest')->group(function () {

    Route::get('/admin/login', [AdminLoginController::class, 'create'])
        ->name('admin.login');

    Route::post('/admin/login', [AdminLoginController::class, 'store'])
        ->name('admin.login.store');

});


// Logout
Route::post('/logout', LogoutController::class)
    ->middleware('auth')
    ->name('logout');


// ==========================================
// USER MANAGEMENT (Admin only)
// ==========================================

Route::middleware(['auth', 'role:admin'])
    ->group(function () {

        Route::resource('users', UserController::class)
            ->names('users');

        Route::resource('admins', AdminController::class);

    });


// ==========================================
// AUTHENTICATED AREA
// Admin, Teacher, Student
// ==========================================

Route::middleware('auth')->group(function () {

    // ======================================
    // PROFILE
    // ======================================

    Route::get('/profile', [UserController::class, 'profile'])
        ->name('profile');


    // ======================================
    // ITEM REQUEST
    // ======================================

    Route::get('/items/request', [ItemController::class, 'requestItemForm'])
        ->name('items.request');

    Route::post('/items/request', [ItemController::class, 'submitRequest'])
        ->name('items.request.store');

    Route::get('/request', [ItemController::class, 'request'])
        ->name('request.item');


    // ======================================
    // ITEM RESOURCE
    // ======================================

    Route::resource('items', ItemController::class);


    // ======================================
    // LENDING RESOURCE
    // ======================================

    Route::resource('lendings', LendingController::class);

    Route::get('/lendings/show/{id}', [LendingController::class, 'show'])
        ->name('lendings.show');

    Route::get('/user/lending-history', [LendingController::class, 'userLendingHistory'])
        ->name('lendings.userhistory');

});


// ==========================================
// ADMIN AREA (Admin only)
// ==========================================

Route::middleware(['auth', 'role:admin'])->group(function () {

    // ======================================
    // INVENTORY MANAGEMENT
    // ======================================

    Route::get('/inventory', function () {
        return view('admin.items.inventory', [
            'title' => 'ImmaLend - Inventory',
        ]);
    })->name('inventory');


    // ======================================
    // LENDING DASHBOARD
    // ======================================

    Route::get('/admin/borrowing-requests', [LendingController::class, 'adminIndex'])
        ->name('lendings.admin-index');

    Route::get('/admin/return-confirmation', [LendingController::class, 'returnConfirmation'])
        ->name('admin.return-confirmation');

    Route::get('/admin/lending-history', [LendingController::class, 'lendingHistory'])
        ->name('lendings.adminhistory');


    // ======================================
    // LENDING ACTIONS
    // ======================================

    Route::prefix('lendings')
        ->name('lendings.')
        ->group(function () {

            Route::post('/approve', ApproveLendingController::class)
                ->name('approve');

            Route::post('/reject', RejectLendingController::class)
                ->name('reject');

            Route::post('/return', ReturnLendingController::class)
                ->name('return');

        });

});