<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminUserController;

Route::get('/', function () {
    return view('welcome');
});

/* Admin Login */
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

/* Admin User */
Route::middleware('admin:admin')->group(function (){
    Route::get('/admin/user/show', [AdminUserController::class, 'show'])->name('admin_user_show');
    Route::get('/admin/user/create', [AdminUserController::class, 'create'])->name('admin_user_create');
    Route::post('/admin/user/store', [AdminUserController::class, 'store'])->name('admin_user_store');
    Route::get('/admin/user/edit/{id}', [AdminUserController::class, 'edit'])->name('admin_user_edit');
    Route::post('/admin/user/update/{id}', [AdminUserController::class, 'update'])->name('admin_user_update');
    Route::get('/admin/user/delete/{id}', [AdminUserController::class, 'delete'])->name('admin_user_delete');
});
