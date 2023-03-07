<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ProductController;
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
Route::get('/', [ProductController::class, 'about']); //слайдер о нас
//каталог
Route::get('/catalog', [ProductController::class, 'catalog']); //страница каталога
Route::get('/catalog/tovar/{id}', [ProductController::class, 'onetovar']); //страница одного товара
Route::get('/catalog/sort/{name}/{vis}', [ProductController::class, 'catalog']); //сортировка
Route::get('/catalog/filter/{id}', [ProductController::class, 'filtr']); //фильтр
//админ
Route::get('/admin', [Admin::class, 'admin'])->name('admin'); //админ
Route::get('/admin/product', [Admin::class, 'form']); //Форма создания товара
Route::post('/admin/product/create', [Admin::class, 'maketovar'])->name('makeprod'); // Отправка данных товара в базу данных
Route::get('/admin/product/delete/{id}', [Admin::class, 'proddel']);//Удаление продукта из базы данных
Route::get('/admin/category/delete/{id}', [Admin::class, 'categoriesdel']);//Удаление категории из базы данных