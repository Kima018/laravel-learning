<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OceneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);
Route::view('/about', 'about');
Route::get("/contact", [ContactController::class, 'index']);
Route::get("/shop", [ShopController::class, 'index']);

// predavanje 6
Route::get("/ocene", [OceneController::class, 'index']);
Route::get("/dodaj-ocenu", [OceneController::class, 'dodajOcenu']);
Route::post("/nova-ocena", [OceneController::class, "novaOcena"]);

//
Route::middleware(['auth',\App\Http\Middleware\AdminChack::class])->prefix("admin")->group(function () {
    Route::get("/all-contacts", [ContactController::class, 'getAllContacts'])->name('adminAllContacts');
//Route::get("/admin/products", [ShopController::class, 'getAllProducts']);
    Route::get("/add-product", [ShopController::class, "addProduct"]);
    Route::get("/all-products", [ShopController::class, 'adminAllProducts'])->middleware('auth')->name('adminAllProducts');
    Route::get("/delete-product/{product}", [ShopController::class, "delete"])->name('deleteProduct');
    Route::get("/delete-contact/{contact}", [ContactController::class, 'delete'])->name('deleteContact');


//domaci 8
    Route::get("/product/{product}", [ShopController::class, 'singleProduct'])->name('product.single');
    Route::post("/update-product", [ShopController::class, 'update'])->name('updateProduct');
    Route::get("/contact/{contact}", [ContactController::class, 'edit'])->name('contact.single');
    Route::post("/update-contact", [ContactController::class, 'update'])->name('updateContact');

//
    Route::post("/send-contact", [ContactController::class, "sendContact"]);
    Route::post("/send-product", [ShopController::class, "sendProduct"]);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
