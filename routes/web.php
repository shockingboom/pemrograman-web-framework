<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Semua route aplikasi didaftarkan di sini.
| Middleware 'auth' memastikan user sudah login.
| Middleware 'role:...' membatasi akses sesuai role.
*/

Route::get('/', function () {
    return view('welcome');
});

// Dashboard (hanya root & admin)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'RoleCheck:admin' ])->name('dashboard');

Route::get('/product',[ProductController::class, 'index']);

// Route untuk profile (semua user login bisa akses)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Group Route Berdasarkan Role
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:root'])->group(function () {
    Route::get('/root', function () {
        return "Halaman khusus ROOT (superuser)";
    })->name('root.home');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return "Halaman khusus ADMIN";
    })->name('admin.home');

    Route::get('/admin/settings', function () {
        return "Pengaturan ADMIN";
    })->name('admin.settings');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/home', function () {
        return "Halaman khusus USER";
    })->name('user.home');
});

require __DIR__.'/auth.php';
