<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;


/** Vendor Routes */
Route::get('dashboard', [vendorController::class, 'dashboard'])->name('dashboard');

