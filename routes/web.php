<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// };
Route::get('/',[ProductController::class,'index'])->name('index');
Route::get('/create_product',[ProductController::class,'create_product'])->name('create.product');
Route::post('/do_create',[ProductController::class,'do_create'])->name('do.create');
Route::get('view_product',[ProductController::class,'view_product'])->name('view.product');
Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('/update/{id}',[ProductController::class,'update'])->name('update');
Route::get('/delete/{id}',[ProductController::class,'delete'])->name('delete');
