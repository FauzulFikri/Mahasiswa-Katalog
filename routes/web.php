<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserStudentController;

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/peserta', function () {
    return view('peserta');
});

Route::get('/', [FrontHomeController::class, 'show'])->name('index');

Route::get('/user/register', function () {
    return view('user.register');
});
// Route::get('/', [homeController::class, 'index'])->name('index');

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

/* User Login */
Route::get('/user/home', [UserHomeController::class, 'index'])->name('user_home');
Route::get('/user/login', [UserLoginController::class, 'index'])->name('user_login');
Route::post('/user/login-submit', [UserLoginController::class, 'login_submit'])->name('user_login_submit');
Route::get('/user/logout', [UserLoginController::class, 'logout'])->name('user_logout');
Route::get('/user/forget-password', [UserLoginController::class, 'forget_password'])->name('user_forget_password');
Route::post('/user/forget-password-submit', [UserLoginController::class, 'forget_password_submit'])->name('user_forget_password_submit');
Route::get('/user/reset-password/{token}/{email}', [UserLoginController::class, 'reset_password'])->name('user_reset_password');
Route::post('/user/reset-password-submit', [UserLoginController::class, 'reset_password_submit'])->name('user_reset_password_submit');

/* User Isi Data */
Route::get('/user/user/show', [UserStudentController::class, 'show'])->name('user_user_show');
Route::get('/user/user/create', [UserStudentController::class, 'create'])->name('user_user_create');
Route::post('/user/user/store', [UserStudentController::class, 'store'])->name('user_user_store');
Route::get('/user/user/edit', [UserStudentController::class, 'edit'])->name('user_user_edit');
Route::post('/user/user/update', [UserStudentController::class, 'update'])->name('user_user_update');
Route::get('/user/user/delete', [UserStudentController::class, 'delete'])->name('user_user_delete');

/* User Tambah Data */
/*Route::get('/user/user/edit', [UserProfileController::class, 'index'])->name('user_user_edit');
Route::get('/user/user/create', [UserProfileController::class, 'create'])->name('user_user_create');
Route::post('/user/user/profile-submit', [UserProfileController::class, 'profile_submit'])->name('user_profile_submit');*/