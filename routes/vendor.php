<?php

use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;


/** Vendor Routes */
Route::get('dashboard', [vendorController::class, 'dashboard'])->name('dashboard');
Route::get('vendor', [VendorProfileController::class, 'index'])->name('profile');
Route::put('update', [VendorProfileController::class, 'updateProfile'])->name('profile.update'); // vendor.profile.update
Route::post('update', [VendorProfileController::class, 'updatePassword'])->name('profile.update.password'); // vendor.profile.update.password

