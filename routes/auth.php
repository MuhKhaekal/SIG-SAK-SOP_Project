<?php

use App\Http\Controllers\AdminDaftarPenggunaController;
use App\Http\Controllers\AdminDaftarSekolahController;
use App\Http\Controllers\AdminKomentarController;
use App\Http\Controllers\AdminListUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserDaftarSekolah;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::resource('daftarpengguna', AdminDaftarPenggunaController::class)->middleware('admin')
    ->names([
        'index' => 'daftarpengguna.index',
        'create' => 'daftarpengguna.create',
        'store' => 'daftarpengguna.store',
        'show' => 'daftarpengguna.show',
        'edit' => 'daftarpengguna.edit',
        'update' => 'daftarpengguna.update',
        'destroy' => 'daftarpengguna.destroy'
    ]);
    Route::resource('daftarsekolah', AdminDaftarSekolahController::class)->middleware('admin')
    ->names([
        'index' => 'daftarsekolah.index',
        'create' => 'daftarsekolah.create',
        'store' => 'daftarsekolah.store',
        'show' => 'daftarsekolah.show',
        'edit' => 'daftarsekolah.edit',
        'update' => 'daftarsekolah.update',
        'destroy' => 'daftarsekolah.destroy'
    ]);

    Route::resource('sekolah', UserDaftarSekolah::class)->middleware('user')
    ->names([
        'index' => 'sekolah.index',
        'create' => 'sekolah.create',
        'store' => 'sekolah.store',
        'show' => 'sekolah.show',
        'edit' => 'sekolah.edit',
        'update' => 'sekolah.update',
        'destroy' => 'sekolah.destroy'
    ]);
    
    Route::resource('komentar', CommentController::class)->middleware('user')
    ->names([
        'index' => 'komentar.index',
        'create' => 'komentar.create',
        'store' => 'komentar.store',
        'show' => 'komentar.show',
        'edit' => 'komentar.edit',
        'update' => 'komentar.update',
        'destroy' => 'komentar.destroy'
    ]);
    Route::resource('adminkomentar', AdminKomentarController::class)->middleware('admin')
    ->names([
        'index' => 'adminkomentar.index',
        'create' => 'adminkomentar.create',
        'store' => 'adminkomentar.store',
        'show' => 'adminkomentar.show',
        'edit' => 'adminkomentar.edit',
        'update' => 'adminkomentar.update',
        'destroy' => 'adminkomentar.destroy'
    ]);

    });


