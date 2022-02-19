<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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

Route::get('/',[PagesController::class, 'index']);
Route::get('/ViewCart',[PagesController::class, 'ViewCart']);
Route::get('/product/cart/{id}',[PagesController::class,'AddToCart'])->name('add.cart');
Route::get('/checkout/{array}',[PagesController::class,'Checkout'])->name('customer.checkout');

Route::get('/Login',[CustomerController::class, 'Login']);
Route::get('/Login/auth',[CustomerController::class, 'auth'])->name('login.auth');
Route::get('/Logout',[CustomerController::class, 'Logout']);
Route::get('/register',[CustomerController::class, 'Register']);
Route::get('/customer/confirm',[CustomerController::class,'RegisterConfirm'])->name('register.confirm');


Route::get('/product/add',[ProductController::class, 'AddProduct'])->name('AddProduct');
Route::get('/product/confirm',[ProductController::class,'ConfirmAdd'])->name('add.confirm');
Route::get('/product/delete/{id}',[ProductController::class,'DeleteProduct'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class,'EditProduct'])->name('product.edit');
Route::get('/product/confirmEdit/{id}',[ProductController::class,'ConfirmEdit'])->name('edit.confirm');