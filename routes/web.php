<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/**
 * Route get Transactions
 */

Route::get('transactions', [TestController::class, 'getTransactions'])->name('transactions.index');