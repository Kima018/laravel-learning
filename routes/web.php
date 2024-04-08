<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomepageController::class,'index']);
Route::view('/about','about');
Route::get("/contact",[\App\Http\Controllers\ContactController::class, 'index']);
Route::get("/shop",[\App\Http\Controllers\ShopController::class,'index']);


Route::get("/admin/all-contacts",[\App\Http\Controllers\ContactController::class,'getAllContacts']);
Route::get("/admin/products",[\App\Http\Controllers\ShopController::class,'getAllProducts']);
Route::get("/admin/add-product",[\App\Http\Controllers\ShopController::class,"addProduct"]);


Route::post("/send-contact",[\App\Http\Controllers\ContactController::class,"sendContact"]);
Route::post("/send-product",[\App\Http\Controllers\ShopController::class,"sendProduct"]);
