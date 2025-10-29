<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

// Komentari atau hapus baris apiResource untuk sementara
// Route::apiResource('product', ProductController::class);

// // Definisikan route POST secara eksplisit
// Route::post('products', [ProductController::class, 'store'])->name('product.store');

// // Kamu bisa tambahkan route lain secara eksplisit jika perlu dites juga
// // Route::get('product', [ProductController::class, 'index'])->name('product.index');
// // Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');
// // Route::match(['put', 'patch'], 'product/{product}', [ProductController::class, 'update'])->name('product.update'); // Match untuk PUT/PATCH
// // Route::delete('product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::apiResource('products', ProductController::class);
?>