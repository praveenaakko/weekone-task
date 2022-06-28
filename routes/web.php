<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('redirect',[HomeController::class,'redirect']);
route::get('/',[HomeController::class,'index']);
route::get('/view_catagory',[AdminController::class,'view_category']);
route::post('/add_catagory',[AdminController::class,'add_catagory']);
route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);
route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/show_product',[AdminController::class,'show_product']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/edit_product/{id}',[AdminController::class,'edit_product']);
route::post('/update_product/{id}',[AdminController::class,'update_product']);
route::get('/show_cart',[HomeController::class,'show_cart']);
route::get('/list_user',[AdminController::class,'list_user']);
route::get('/delete_user/{id}',[AdminController::class,'delete_user']);
route::post('/edit_user/{id}',[AdminController::class,'edit_user']);
route::get('/bill_module',[AdminController::class,'bill_module']);





