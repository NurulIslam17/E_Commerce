<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeComtroller;
use App\Http\Controllers\AdminController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get("/redirect", [HomeComtroller::class, "redirect"]);
Route::get("/", [HomeComtroller::class, "index"]);

//add user
Route::get("/addUser", [AdminController::class, "addUser"]);
//Upload user

//View Users
Route::get("/viewUser", [AdminController::class, "viewUsers"]);

//..................................................... addProduct

Route::get("/addProduct", [AdminController::class, "addProduct"]);
//uploadProduct
Route::post("/uploadProduct", [AdminController::class, "uploadProduct"]);
//viewProduct
Route::get("/viewProduct", [AdminController::class, "viewProduct"]);
//edit
Route::get("/edit/{id}", [AdminController::class, "edit"]);
//updateProduct
Route::post("/updateProduct/{id}", [AdminController::class, "updateProduct"]);
//delete
Route::get("/delete/{id}", [AdminController::class, "deleteProduct"]);

//serch Product
Route::get("/search",[HomeComtroller::class,"searchProduct"]);

// ...........................
