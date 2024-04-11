<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OceneController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);
Route::view('/about', 'about');
Route::get("/contact", [ContactController::class, 'index']);
Route::get("/shop", [ShopController::class, 'index']);

// predavanje 6
Route::get("/ocene", [OceneController::class, 'index']);
Route::get("/dodaj-ocenu", [OceneController::class, 'dodajOcenu']);
Route::post("/nova-ocena",[OceneController::class,"novaOcena"]);

//

Route::get("/admin/all-contacts", [ContactController::class, 'getAllContacts']);
Route::get("/admin/products", [ShopController::class, 'getAllProducts']);
Route::get("/admin/add-product", [ShopController::class, "addProduct"]);
Route::get("/admin/all-products",[ShopController::class,'adminAllProducts']);
Route::get("/admin/delete-product/{product}",[ShopController::class,"delete"]);
Route::get("/admin/delete-contact/{contact}",[ContactController::class,'delete']);


Route::post("/admin/send-contact", [ContactController::class, "sendContact"]);
Route::post("/admin/send-product", [ShopController::class, "sendProduct"]);

