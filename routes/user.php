<?php
Route::get('/', function () {
    return view('welcome');
});

//nguoidung
Route::get("/usersPage/index",[\App\Http\Controllers\Admin\UserController::class,"listChuyenbay"]);


Route::get("/usersPage/contract/{idchuyenbay}",[\App\Http\Controllers\Admin\UserController::class,"form"]);
Route::post("/usersPage/contract1/",[\App\Http\Controllers\Admin\UserController::class,"contract1"]);
Route::post("/usersPage/contract/",[\App\Http\Controllers\Admin\UserController::class,"contract"]);


Route::get("/usersPage/about",[\App\Http\Controllers\Admin\UserController::class,"about"]);
Route::get("/usersPage/blog",[\App\Http\Controllers\Admin\UserController::class,"blog"]);
Route::get("/usersPage/blogDetail",[\App\Http\Controllers\Admin\UserController::class,"blogDetail"]);
Route::get("/usersPage/book",[\App\Http\Controllers\Admin\UserController::class,"book"])->middleware("auth");

Route::get("/usersPage/checkinOnline",[\App\Http\Controllers\Admin\UserController::class,"checkinOnline"]);
Route::get("/usersPage/contact",[\App\Http\Controllers\Admin\UserController::class,"contact"]);
Route::get("/usersPage/login",[\App\Http\Controllers\Admin\UserController::class,"login"]);
Route::get("/usersPage/payment",[\App\Http\Controllers\Admin\UserController::class,"payment"]);
Route::get("/usersPage/promotion",[\App\Http\Controllers\Admin\UserController::class,"promotion"]);
Route::get("/usersPage/register",[\App\Http\Controllers\Admin\UserController::class,"register"]);
