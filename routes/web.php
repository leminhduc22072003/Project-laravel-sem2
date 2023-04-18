<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'auth'], function () {
    Route::group(['prefix'=>"admin", 'namespace' => 'Admin'],function (){
        Route::get('login', function () {
            return view('auth.login');
        })->name('auth.getLogin');
        Route::post('login', [\App\Http\Controllers\Admin\LoginController::class,"login"])->name('auth.postLogin');
        Route::get('logout', [\App\Http\Controllers\Admin\LoginController::class,"logout"])->name('auth.postLogout');
    });
    Route::group(['prefix'=>"user", 'namespace' => 'Client'],function (){
        Route::get('login', function () {
            return view('client.auth.login');
        })->name('auth.getLogin');
        Route::post('login', [\App\Http\Controllers\Client\UserController::class,"login"])->name('client.auth.postLogin');
        Route::get('logout', [\App\Http\Controllers\Client\UserController::class,"logout"])->name('client.auth.postLogout');

        Route::get('register', [\App\Http\Controllers\Client\UserController::class,"getRegister"])->name('client.user.get-register');
        Route::post('register', [\App\Http\Controllers\Client\UserController::class,"register"])->name('client.user.post-register');
    });
});

Route::group(['namespace' => 'Admin', 'middleware' => ['check-admin'], 'prefix' => '/admin'], function () {
    Route::get("/",[\App\Http\Controllers\Admin\UsersController::class,"all"]);

    Route::group(['prefix'=>"hoa-don"],function (){

        Route::get("/list",[\App\Http\Controllers\Admin\HoadonController::class,"all"])->name('admin.hoadon.list');
        Route::get("/create",[\App\Http\Controllers\Admin\HoadonController::class,"create"])->name('admin.hoadon.create');
        Route::post("/create",[\App\Http\Controllers\Admin\HoadonController::class,"store"])->name('admin.hoadon.store');
        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\HoadonController::class,"edit"])->name('admin.hoadon.edit');
        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\HoadonController::class,"update"])->name('admin.hoadon.update');
        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\HoadonController::class,"delete"])->name('admin.hoadon.delete');
    });
// users

    Route::group(['prefix'=>"users"],function (){

        Route::get("/list",[\App\Http\Controllers\Admin\UsersController::class,"all"])->name('admin.user.list');
        Route::get("/create",[\App\Http\Controllers\Admin\UsersController::class,"create"])->name('admin.user.create');
        Route::post("/create",[\App\Http\Controllers\Admin\UsersController::class,"store"])->name('admin.user.store');
        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\UsersController::class,"edit"])->name('admin.user.edit');
        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\UsersController::class,"update"])->name('admin.user.update');
        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\UsersController::class,"delete"])->name('admin.user.delete');
    });

//maybay
    Route::group(['prefix'=>"may-bay"],function (){
        Route::get("/list",[\App\Http\Controllers\Admin\MaybayController::class,"all"])->name('admin.maybay.list');
        Route::get("/create",[\App\Http\Controllers\Admin\MaybayController::class,"create"])->name('admin.maybay.create');
        Route::post("/create",[\App\Http\Controllers\Admin\MaybayController::class,"store"])->name('admin.maybay.store');
        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\MaybayController::class,"edit"])->name('admin.maybay.edit');
        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\MaybayController::class,"update"])->name('admin.maybay.update');
        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\MaybayController::class,"delete"])->name('admin.maybay.delete');
    });
//chuyenbay
    Route::group(['prefix'=>"chuyen-bay"],function (){
        Route::get("/list",[\App\Http\Controllers\Admin\ChuyenbayController::class,"all"])->name('admin.chuyenbay.list');
        Route::get("/create",[\App\Http\Controllers\Admin\ChuyenbayController::class,"create"])->name('admin.chuyenbay.create');
        Route::post("/create",[\App\Http\Controllers\Admin\ChuyenbayController::class,"store"])->name('admin.chuyenbay.store');
        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\ChuyenbayController::class,"edit"])->name('admin.chuyenbay.edit');
        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\ChuyenbayController::class,"update"])->name('admin.chuyenbay.update');
        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\ChuyenbayController::class,"delete"])->name('admin.chuyenbay.delete');
    });


//sanbay
    Route::group(['prefix'=>"san-bay"],function (){
        Route::get("/list",[\App\Http\Controllers\Admin\SanbayController::class,"all"])->name('admin.sanbay.list');
        Route::get("/create",[\App\Http\Controllers\Admin\SanbayController::class,"create"])->name('admin.sanbay.create');
        Route::post("/create",[\App\Http\Controllers\Admin\SanbayController::class,"store"])->name('admin.sanbay.store');
        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\SanbayController::class,"edit"])->name('admin.sanbay.edit');
        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\SanbayController::class,"update"])->name('admin.sanbay.update');
        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\SanbayController::class,"delete"])->name('admin.sanbay.delete');
    });

//thanhpho
    Route::group(['prefix'=>"thanh-pho"],function (){
        Route::get("/list",[\App\Http\Controllers\Admin\ThanhphoController::class,"all"])->name('admin.thanhpho.list');
        Route::get("/create",[\App\Http\Controllers\Admin\ThanhphoController::class,"create"])->name('admin.thanhpho.create');
        Route::post("/create",[\App\Http\Controllers\Admin\ThanhphoController::class,"store"])->name('admin.thanhpho.store');
        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\ThanhphoController::class,"edit"])->name('admin.thanhpho.edit');
        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\ThanhphoController::class,"update"])->name('admin.thanhpho.update');
        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\ThanhphoController::class,"delete"])->name('admin.thanhpho.delete');
    });

    //ve
    Route::group(['prefix'=>"ve"],function (){
        Route::get("/list",[\App\Http\Controllers\Admin\VeController::class,"all"])->name('admin.ve.list');
        Route::get("/create",[\App\Http\Controllers\Admin\VeController::class,"create"])->name('admin.ve.create');
        Route::post("/create",[\App\Http\Controllers\Admin\VeController::class,"store"])->name('admin.ve.store');
        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\VeController::class,"edit"])->name('admin.ve.edit');
        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\VeController::class,"update"])->name('admin.ve.update');
        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\VeController::class,"delete"])->name('admin.ve.delete');
    });

    Route::group(['prefix'=>"hang-bay"],function (){

        Route::get("/list",[\App\Http\Controllers\Admin\HangbayController::class,"all"])->name('admin.hangbay.list');
        Route::get("/create",[\App\Http\Controllers\Admin\HangbayController::class,"create"])->name('admin.hangbay.create');
        Route::post("/create",[\App\Http\Controllers\Admin\HangbayController::class,"store"])->name('admin.hangbay.store');
        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\HangbayController::class,"edit"])->name('admin.hangbay.edit');
        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\HangbayController::class,"update"])->name('admin.hangbay.update');
        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\HangbayController::class,"delete"])->name('admin.hangbay.delete');
    });
});

Route::group(['namespace' => 'Client', 'middleware' => ['check-user'], 'prefix' => '/user'], function () {
    Route::get("/",[\App\Http\Controllers\Client\UserController::class,"index"])->name('client.dashboard');

    Route::group(['prefix'=>"dat-ve"],function (){
        Route::get("/list",[\App\Http\Controllers\Client\UserController::class,"index"])->name('client.hoadon.list');
//        Route::get("/create/step1",[\App\Http\Controllers\Client\UserController::class,"createStep1"])->name('client.hoadon.create.step1');
//        Route::get("/create/step2",[\App\Http\Controllers\Client\UserController::class,"createStep2"])->name('client.hoadon.create.step2');
//        Route::post("/create",[\App\Http\Controllers\Client\UserController::class,"store"])->name('client.hoadon.store');
//        Route::get("/edit/{id}",[\App\Http\Controllers\Admin\HoadonController::class,"edit"])->name('client.hoadon.edit');
//        Route::put("/edit/{id}",[\App\Http\Controllers\Admin\HoadonController::class,"update"])->name('client.hoadon.update');
//        Route::delete("/delete/{id}",[\App\Http\Controllers\Admin\HoadonController::class,"delete"])->name('client.hoadon.delete');
    });
});

Route::group(['namespace' => 'Client', 'prefix' => '/'], function () {
    Route::get("/",[\App\Http\Controllers\Client\MainController::class,"main"])->name('client.main');
    Route::get("/about",[\App\Http\Controllers\Client\MainController::class,"about"])->name('client.about');
    Route::get("/cam-nang-du-lich",[\App\Http\Controllers\Client\MainController::class,"camnangdulich"])->name('client.cam-nang-du-lich');
    Route::get("/contact",[\App\Http\Controllers\Client\MainController::class,"contact"])->name('client.contact');
    Route::get("/diem-den-yeu-thich",[\App\Http\Controllers\Client\MainController::class,"diemdenyeuthich"])->name('client.diem-den-yeu-thich');
    Route::get("/gioi-thieu",[\App\Http\Controllers\Client\MainController::class,"gioithieu"])->name('client.gioi-thieu');
    Route::get("/ho-tro",[\App\Http\Controllers\Client\MainController::class,"hotro"])->name('client./ho-tro');
    Route::get("/lien-he",[\App\Http\Controllers\Client\MainController::class,"lienhe"])->name('client.lien-he');
    Route::get("/khuyen-mai",[\App\Http\Controllers\Client\MainController::class,"khuyenmai"])->name('client.khuyen-mai');
    Route::get("/khuyen-mai-2",[\App\Http\Controllers\Client\MainController::class,"khuyenmai2"])->name('client.khuyen-mai-2');

    Route::get("/chuyen-bay",[\App\Http\Controllers\Client\BookingController::class,"getChuyenBay"])->name('client.chuyen-bay');
    Route::get("/pre-booking",[\App\Http\Controllers\Client\BookingController::class,"getPreBooking"])->name('client.pre-booking');
    Route::get("/booking",[\App\Http\Controllers\Client\BookingController::class,"getBooking"])->name('client.booking');
    Route::post("/post-booking",[\App\Http\Controllers\Client\BookingController::class,"postBooking"])->name('client.booking.post');
    Route::get("/detail-booking",[\App\Http\Controllers\Client\BookingController::class,"detailBooking"])->name('client.booking.detail');
    Route::get("/payment",[\App\Http\Controllers\Client\BookingController::class,"payment"])->name('client.payment');
    Route::get("/finish",[\App\Http\Controllers\Client\BookingController::class,"finish"])->name('client.finish');
});
