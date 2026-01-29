<?php

use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegisterUserController::class, 'store'])->name('register');
Route::post('/login', [AuthenticatedController::class, 'store'])->name('login');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.store');

Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
    ->middleware([
        'signed',
        'throttle:6,1',
    ])
    ->name('verification.verify')
;

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware([
        'auth:sanctum',
        'throttle:6,1',
    ])
    ->name('verification.send')
;

Route::post('/logout', [AuthenticatedController::class, 'destroy'])
    ->middleware('auth:sanctum')
    ->name('logout')
;
