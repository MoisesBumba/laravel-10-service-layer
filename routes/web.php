<?php

use App\Http\Controllers\Admin\SupportsController;
use Illuminate\Support\Facades\Route;

Route::delete('supports/{id}', [SupportsController::class, 'destroy'])->name('supports.destroy');
Route::put('supports/{id}', [SupportsController::class, 'update'])->name('supports.update');
Route::get('support/{id}/edit', [SupportsController::class, 'edit'])->name('supports.edit');
Route::get('supports/create', [SupportsController::class, 'create'])->name('supports.create');
Route::get('supports/{id}', [SupportsController::class, 'show'])->name('supports.show');
Route::post('supports', [SupportsController::class, 'store'])->name('supports.store');
Route::get('supports', [SupportsController::class, 'index'])->name('supports.index');
