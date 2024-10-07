<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminLogoutController;
use App\Http\Controllers\AdminRegisterController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Guest routes for the admin
Route::middleware('guest.admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/login', function () { return Inertia::render('Admin/Login'); })->name('admin.login');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.submit_login'); // handles the login and redirects to the dashboard
        Route::get('/register', function () { return Inertia::render('Admin/Register'); })->name('admin.register');
        Route::post('/register', [AdminRegisterController::class, 'register']);

    });

// Protected routes for the admin (/admin/dashboard) [GET]
Route::middleware('auth:admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', function () { return Inertia::render('Admin/Dashboard'); })->name('admin.dashboard');
        Route::post('/logout', [AdminLogoutController::class, 'logout'])->name('admin.logout');
    });
