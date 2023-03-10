<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketShop;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/where', function () { // где нас найти
    return view('where');
});

Route::get('/rules', function () { // где нас найти
    return view('rules');
});
Route::get('/', [ProductController::class, 'about']); //слайдер о нас

//каталог
Route::get('/catalog', [ProductController::class, 'catalog']); //страница каталога
Route::get('/catalog/tovar/{id}', [ProductController::class, 'onetovar']); //страница одного товара
Route::get('/catalog/sort/{name}/{vis}', [ProductController::class, 'catalog']); //сортировка
Route::get('/catalog/filter/{id}', [ProductController::class, 'filtr']); //фильтр

//админ
Route::get('/admin', [Admin::class, 'admin'])->name('admin')->middleware('admin'); //страница админа с редактированием данных
//админ-товар
Route::get('/admin/product', [Admin::class, 'form'])->middleware('admin'); //Форма создания товара
Route::post('/admin/product/create', [Admin::class, 'maketovar'])->name('makeprod'); // Отправка данных товара в базу данных
Route::get('/admin/product/delete/{id}', [Admin::class, 'proddel'])->middleware('admin'); //Удаление продукта из базы данных
//админ-категория
Route::get('/admin/category', function () {
    return view('makecategory');
})->middleware('admin'); //Форма создания категории
Route::post('/admin/category/create', [Admin::class, 'makecategory'])->name('makecategory'); // Отправка данных категории в базу данных
Route::get('/admin/category/delete/{id}', [Admin::class, 'categoriesdel'])->middleware('admin'); //Удаление категории из базы данных

//корзина
Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [BasketShop::class, 'index'])->name('cart.index');
    Route::get('/cart/make/{product_id}', [BasketShop::class, 'make'])->name('cartmake');
    Route::get('/cart/delete/{cart_id}', [BasketShop::class, 'delete'])->name('cartdelete');
});
Route::post('cart/update/{id}',[BasketShop::class,'update'])->name('cartUpadate');
