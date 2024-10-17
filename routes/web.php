<?php

use App\Http\Controllers\AdminUser;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('auth',Admin::class)->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/index',function () {
            return view('admin.index');
        })->name('admin.index');
        Route::get('category',[CategoryController::class,'index'])->name('admin.category.index');
        Route::get('category/create',[CategoryController::class,'create'])->name('admin.category.create');
        Route::post('category/create',[CategoryController::class,'store'])->name('admin.category.store');
        Route::get('category/update/{category}',[CategoryController::class,'edit'])->name('admin.category.edit');
        Route::put('category/update/{category}',[CategoryController::class,'update'])->name('admin.category.update');
        Route::delete('category/delete/{category}',[CategoryController::class,'delete'])->name('admin.category.delete');
    
        Route::get('product',[ProductController::class,'index'])->name('admin.product.index');
        Route::get('product/create',[ProductController::class,'create'])->name('admin.product.create');
        Route::post('product/create',[ProductController::class,'store'])->name('admin.product.store');
        Route::get('product/update/{product}',[ProductController::class,'edit'])->name('admin.product.edit');
        Route::put('product/update/{product}',[ProductController::class,'update'])->name('admin.product.update');
        Route::delete('product/delete/{product}',[ProductController::class,'delete'])->name('admin.product.delete');
    
        Route::get('user', [AdminUser::class, 'index'])->name('admin.user.index');
        Route::post('/admin/users/{id}/update-role', [AdminUser::class, 'updateRole'])->name('admin.users.updateRole');
        Route::delete('user/{id}', [AdminUser::class, 'destroy'])->name('admin.user.delete');
    });
});


Route::get('/',function(){
    return view('client.index');
})->name('index');

Route::get('/login',[AuthController::class,'getLogin'])->name('login');
Route::post('/login',[AuthController::class,'postLogin'])->name('postLogin');

Route::get('/register',[AuthController::class,'getRegister'])->name('register');
Route::post('/register',[AuthController::class,'postRegister'])->name('postRegister');

Route::get('/logout',[AuthController::class,'Logout'])->name('logout');
