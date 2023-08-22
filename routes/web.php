<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TypeProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//เมนูผู้ใช้งาน
Route::get('/admin/user/index', [UserController::class, 'index'])->name('u.index');


//เมนูสินค้า
Route::get('/admin/product/index', [ProductController::class, 'index'])->name('p.index');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('p.create');


//เมนูประเภทสินค้า
Route::get('/admin/type/index', [TypeProductController::class, 'index'])->name('t.index');
Route::get('/admin/type/create', [TypeProductController::class, 'create'])->name('t.create');
