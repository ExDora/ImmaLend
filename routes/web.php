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


// ==================================
// HOMEPAGE
// ==================================

Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');


// ==================================
// USER LOGIN
// ==================================

Route::middleware('guest')->group(function () {

    Route::get('/login', [UserLoginController::class, 'create'])
        ->name('login');

    Route::post('/login', [UserLoginController::class, 'store'])
        ->name('login.store');

});


// ==================================
// ADMIN LOGIN
// ==================================

Route::middleware('guest')->group(function () {

    Route::get('/admin/login', [AdminLoginController::class, 'create'])
        ->name('admin.login');

    Route::post('/admin/login', [AdminLoginController::class, 'store'])
        ->name('admin.login.store');

});


Route::get('/admin-imma1326/login', [AdminLoginController::class, 'index'])->name('admin.login');

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
// AREA LOGIN (admin, teacher, student)
// ==================================
// Catatan: route tulis (create/store/edit/update/destroy) milik admin
// sebaiknya nanti dipindah ke grup 'role:admin' di bawah.

Route::middleware('auth')->group(function () {

    // ITEM REQUEST
    Route::get('/items/request', [
        ItemController::class,
        'requestItemForm'
    ])->name('items.request');

        Route::post('/items/request', [
        ItemController::class,
        'submitRequest'
    ])->name('items.request.store');

    Route::get('/request', [
        ItemController::class,
        'request'
    ])->name('request.item');

    // INVENTORY
    Route::resource('items', ItemController::class);

    Route::get('/inventory', function () {
        return view('items.inventory');
    })->name('inventory');

    // LENDING
    Route::resource('lendings', LendingController::class);

});


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



    //Manajemen Data Barang
    Route::resource('items', ItemController::class);
    Route::get('/inventory', function () {
        return view('items.inventory');
    })->name('inventory');

    Route::name('lendings.')
        ->prefix('lendings')
        ->group(function () {

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
// AREA LOGIN (admin, teacher, student)
// ==================================
// Catatan: route tulis (create/store/edit/update/destroy) milik admin
// sebaiknya nanti dipindah ke grup 'role:admin' di bawah.
    
            Route::middleware('auth')->group(function () {

                // ITEM REQUEST
                Route::get('/items/request', [
                    ItemController::class,
                    'requestItemForm'
                ])->name('items.request');

                Route::get('/request', [
                    ItemController::class,
                    'request'
                ])->name('request.item');

                // INVENTORY
                Route::resource('items', ItemController::class);

                Route::get('/inventory', function () {
                    return view('items.inventory');
                })->name('inventory');

                // LENDING
                Route::resource('lendings', LendingController::class);

            });


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


                        //Manajemen Data Peminjaman
                        Route::resource('lendings', LendingController::class);
                        Route::get('/lendings/show/{id}', [LendingController::class, 'show'])->name('lendings.show');
                        Route::get('/admin/borrowing-requests', [LendingController::class, 'adminIndex'])->name('lendings.admin-index');
                        Route::get('/admin/return-confirmation', [LendingController::class, 'returnConfirmation'])->name('admin.return-confirmation');
                        Route::get('/admin/lending-history', [LendingController::class, 'lendingHistory'])->name('lendings.adminhistory');
                        Route::get('/user/lending-history', [LendingController::class, 'userLendingHistory'])->name('lendings.userhistory');

                        //Manajemen Data Aksi Peminjaman
// Route::name('lendings.')->prefix('lendings')->group(function () {
        
                        //     //Manajemen Aksi Disetujui
//     Route::post('/approve', ApproveLendingController::class)->name('approve');
        
                        //     //Manajemen Aksi Ditolak
//     Route::post('/reject', RejectLendingController::class)->name('reject');
        
                        //     //Manajemen Aksi Dikembalikan
//     Route::post('/return', ReturnLendingController::class)->name('return');
// });
        
                        Route::post('/reject', RejectLendingController::class)
                            ->name('reject');

                        Route::post('/return', ReturnLendingController::class)
                            ->name('return');

                    });

            });

            Route::post('/reject', RejectLendingController::class)
                ->name('reject');

            Route::post('/return', ReturnLendingController::class)
                ->name('return');

        });

});

