<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\Api\ProductController;


Route::apiResource('product', ProductController::class);
?>