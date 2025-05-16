<?php

use App\Http\Controllers\DeleteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\productController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VariantController;

// use App\Http\Controllers\productController;


// route to login

Route::post('login',LoginController::class)->name('login.attempt');

// route to register

Route::view('register','auth.register')->name('register');

Route::post('register',RegisterController::class)->name('register.store');

// route to logout

Route::get('logout',function(){
    Auth::guard('web')->logout();

    return redirect('/');

});


Route::get('createProduct',function(){
    

    

    return view('livewire.createProduct');

});


Route::get('createVariant',function(){
    

    // return $_GET;

    return view('livewire.createVariant');

});

Route::post('logout',function(){
    Auth::guard('web')->logout();

    return redirect('/');

});

route::get('selectVarient', [HomeController::class,'selectVarient']);



Route::get('productCreate',ProductController::class)->name('product.create');

Route::get('variantCreate',VariantController::class)->name('variant.create');




route::get('/', [HomeController::class,'index']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


route::get('redirect', [HomeController::class,'redirect']);

// Route::get('/viewProducts','productController@selCat');

// route::get('/viewProducts', [HomeController::class,'selCat']);



Route::get('/selectCategory', [HomeController::class,'selCat']);


Route::get('/test',function(){

    echo $_SESSION;

});


Route::get('delete',DeleteController::class)->name('item.delete');
