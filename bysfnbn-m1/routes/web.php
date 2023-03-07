<?php

use App\Http\Controllers\Admin;
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
Route::get('/', [App\Http\Controllers\ProductController::class, 'about']); //слайдер о нас
//каталог
Route::get('/catalog', [App\Http\Controllers\ProductController::class, 'catalog']); //страница каталога
Route::get('/catalog/tovar/{id}', [App\Http\Controllers\ProductController::class, 'onetovar']); //страница одного товара
Route::get('/catalog/sort/{name}/{vis}', [App\Http\Controllers\ProductController::class, 'catalog']); //сортировка
Route::get('/catalog/filter/{id}', [App\Http\Controllers\ProductController::class, 'filtr']); //фильтр
//админ
Route::get('/admin', [App\Http\Controllers\Admin::class, 'admin'])->name('admin'); //админ
Route::get('/admin/product',[App\Http\Controllers\Admin::class,'form']);//Форма создания товара
Route::post('/admin/product/create', [App\Http\Controllers\Admin::class, 'maketovar'])->name('makeprod'); // Отправка данных товара в базу данных
Route::get('/admin/product/delete/{id}',[App\Http\Controllers\Admin::class,'proddel'])->middleware('administartor');//Удаление продукта из базы данных