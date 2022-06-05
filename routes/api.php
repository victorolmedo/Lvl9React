<?php
Use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProductController::class)->group(function(){
    route::get('/products','index');
    route::post('/product','store');
    route::get('/product/{id}','show');
    route::put('/product/{id}','update');
    route::delete('/product/{id}','destroy');
});